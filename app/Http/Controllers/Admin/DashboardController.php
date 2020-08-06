<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\traffic;
use App\User;
use Carbon\Carbon;
class DashboardController extends Controller
{
    public function index() {
        $orders_count = Order::count();
        $traffic_count = traffic::first();
        $user_count = User::count();

        // Totals Values 
        function get_total($items) {
            $total = 0;
            foreach ($items as $item) {
                $total = $total + $item->total;
            }
            return $total;
        }
        
        /** Get Last Week Values  */
        $previous_week = strtotime("-1 week +1 day");
        $start_week = strtotime("last sunday midnight",$previous_week);
        $end_week = strtotime("next saturday",$start_week);
        $start_week = date("Y-m-d",$start_week);
        $end_week = date("Y-m-d",$end_week);
        
        $last_week_query = Order::whereBetween('created_at', [$start_week, $end_week])->get();

        /** Last Month */
        $last_month_query = Order::whereMonth('created_at', '=', Carbon::now()->subMonth()->month)->get(['total']);

        // Last 30 Days
        $last_30_days = Order::where('created_at','>=',Carbon::now()->subdays(30))->get(['total']);

        $today = Order::whereDate('created_at', Carbon::today())->get(['total']);

        $current_week = Order::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get(['total']);
        $current_month = Order::whereMonth('created_at', date('m'))
                        ->whereYear('created_at', date('Y'))
                        ->get(['total']);

        // Last Orders

        $last_orders = Order::take(10)->orderBy('id','desc')->get();
        // Views 
        return view('admin.dashboard',[
            'orders_count' => $orders_count,
            'traffic_count' => $traffic_count->value,
            'user_count' => $user_count,
            'last_week_total' => get_total($last_week_query),
            'current_week' => get_total($current_week),
            'current_month' => get_total($current_month),
            'last_month_total' => get_total($last_month_query),
            'last_30_days' => get_total($last_30_days),
            'today' => get_total($today),
            'last_orders' => $last_orders
        ]);
    }
}
