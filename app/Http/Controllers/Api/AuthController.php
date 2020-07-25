<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Products;
use App\categories;
use App\Order;
class AuthController extends Controller
{
    public function register(Request $request) {
        // Fetch input
        $user_input = $request->all();
        // Create user
        $user = User::create([
            'name' => $user_input['name'],
            'phone' => $user_input['phone'],
            'password' => bcrypt($user_input['password'])
        ]);

        // Create Token
        $token = $user->createToken('auth')-> accessToken;

        // Fetch User
        $user_data = User::where('id',$user->id)->first();

        // Return data 
        return response()->json([
            'token' => $token,
            'user' => $user_data
        ]);
    }

    public function login(Request $request) {
        // Fetch Input 
        $input = $request->all();
         // IF Right Values
        if(Auth::attempt(['phone' => $input['phone'],'password' => $input['password']])) {
            // Auth User
            $user = Auth::User();
            $token = $user->createToken('auth')-> accessToken; #Fetch Token

            //return data
            return response()->json([
                'token' => $token,
                'user' => $user
            ],200);
        }

        // if not correct
        return response()->json(['error' => 'Unauthorised'],401);
    }

    // Auth -> Get User
    public function auth() {
        $user = Auth::User();

        return response()->json([
            'user' => $user
        ]);
    }

    public function get_user($id) {
        return response()->json(User::where('id',$id)->first());
    }

    public function user_test() {
        $user = Order::get();

        return response()->json($user);
    }

    public function update_profile(Request $request){

        /** Check if the update has update password */
        $update_password = $request->update_password;

        if($update_password) {
            /** With Update password */
            $name = $request->name;
            $user_id = $request->user_id;
            $password = bcrypt($request->password);

            User::where('id',$user_id)->update([
                'name' => $name,
                'password' => $password
            ]);
        }else {
            // Without update password
            $name = $request->name;
            $user_id = $request->user_id;

            User::where('id',$user_id)->update([
                'name' => $name,
            ]);
        }

    }
}
