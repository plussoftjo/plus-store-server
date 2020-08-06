<template>
    <div class="card mb-3 box" :style="{borderColor:color+'!important'}">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content pt-3 pl-3 pb-1">
                    <div class="widget-chart-flex">
                        <div class="widget-numbers">
                            <div class="widget-chart-flex">
                                <div class="fsize-4" style="font-size: 2rem !important;">
                                    <span>{{value}}</span>
                                    <small class="opacity-5">JOD</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="widget-subheading mb-0 opacity-5">{{title}}</h6>
                </div>
                <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                    <div class="col-md-9">
                        <div id="dashboard-sparklines-1" style="min-height: 100px;"><div id="apexchartsk1v7s7hef" class="apexcharts-canvas apexchartsk1v7s7hef" style="width: 284px; height: 100px;"><svg id="SvgjsSvg1337" width="284" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1339" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1338"><clipPath id="gridRectMaskk1v7s7hef"><rect id="SvgjsRect1343" width="287" height="103" x="-1.5" y="-1.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskk1v7s7hef"><rect id="SvgjsRect1344" width="292" height="108" x="-4" y="-4" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><rect id="SvgjsRect1342" width="1" height="100" x="242.0833333333334" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1351" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1352" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1355" class="apexcharts-grid"><line id="SvgjsLine1357" x1="0" y1="100" x2="284" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1356" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1346" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1347" class="apexcharts-series series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-line-0" d="M 5.916666666666667 42.44604316546762C 10.058333333333334 42.44604316546762 13.608333333333334 52.723535457348405 17.75 52.723535457348405C 21.891666666666666 52.723535457348405 25.44166666666667 59.917780061664956 29.583333333333336 59.917780061664956C 33.725 59.917780061664956 37.275000000000006 75.33401849948612 41.41666666666667 75.33401849948612C 45.55833333333334 75.33401849948612 49.10833333333334 51.69578622816033 53.25000000000001 51.69578622816033C 57.39166666666667 51.69578622816033 60.94166666666668 37.30729701952723 65.08333333333334 37.30729701952723C 69.22500000000001 37.30729701952723 72.775 64.02877697841726 76.91666666666667 64.02877697841726C 81.05833333333334 64.02877697841726 84.60833333333333 45.52929085303186 88.75 45.52929085303186C 92.89166666666667 45.52929085303186 96.44166666666666 72.25077081192188 100.58333333333333 72.25077081192188C 104.725 72.25077081192188 108.27499999999999 68.13977389516958 112.41666666666666 68.13977389516958C 116.55833333333332 68.13977389516958 120.10833333333332 72.25077081192188 124.24999999999999 72.25077081192188C 128.39166666666665 72.25077081192188 131.94166666666666 4.419321685508734 136.08333333333331 4.419321685508734C 140.225 4.419321685508734 143.77499999999998 44.50154162384378 147.91666666666666 44.50154162384378C 152.05833333333334 44.50154162384378 155.60833333333332 64.02877697841726 159.75 64.02877697841726C 163.89166666666668 64.02877697841726 167.44166666666666 80.47276464542651 171.58333333333334 80.47276464542651C 175.72500000000002 80.47276464542651 179.275 53.751284686536486 183.41666666666669 53.751284686536486C 187.55833333333337 53.751284686536486 191.10833333333335 36.27954779033916 195.25000000000003 36.27954779033916C 199.3916666666667 36.27954779033916 202.9416666666667 60.94552929085303 207.08333333333337 60.94552929085303C 211.22500000000005 60.94552929085303 214.77500000000003 33.19630010277493 218.9166666666667 33.19630010277493C 223.0583333333334 33.19630010277493 226.60833333333338 55.80678314491264 230.75000000000006 55.80678314491264C 234.89166666666674 55.80678314491264 238.44166666666672 61.973278520041106 242.5833333333334 61.973278520041106C 246.72500000000008 61.973278520041106 250.27500000000006 47.58478931140802 254.41666666666674 47.58478931140802C 258.5583333333334 47.58478931140802 262.1083333333334 44.50154162384378 266.25000000000006 44.50154162384378C 270.3916666666667 44.50154162384378 273.9416666666667 57.8622816032888 278.08333333333337 57.8622816032888" fill="none" fill-opacity="1" :stroke="color" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskk1v7s7hef)" pathTo="M 5.916666666666667 42.44604316546762C 10.058333333333334 42.44604316546762 13.608333333333334 52.723535457348405 17.75 52.723535457348405C 21.891666666666666 52.723535457348405 25.44166666666667 59.917780061664956 29.583333333333336 59.917780061664956C 33.725 59.917780061664956 37.275000000000006 75.33401849948612 41.41666666666667 75.33401849948612C 45.55833333333334 75.33401849948612 49.10833333333334 51.69578622816033 53.25000000000001 51.69578622816033C 57.39166666666667 51.69578622816033 60.94166666666668 37.30729701952723 65.08333333333334 37.30729701952723C 69.22500000000001 37.30729701952723 72.775 64.02877697841726 76.91666666666667 64.02877697841726C 81.05833333333334 64.02877697841726 84.60833333333333 45.52929085303186 88.75 45.52929085303186C 92.89166666666667 45.52929085303186 96.44166666666666 72.25077081192188 100.58333333333333 72.25077081192188C 104.725 72.25077081192188 108.27499999999999 68.13977389516958 112.41666666666666 68.13977389516958C 116.55833333333332 68.13977389516958 120.10833333333332 72.25077081192188 124.24999999999999 72.25077081192188C 128.39166666666665 72.25077081192188 131.94166666666666 4.419321685508734 136.08333333333331 4.419321685508734C 140.225 4.419321685508734 143.77499999999998 44.50154162384378 147.91666666666666 44.50154162384378C 152.05833333333334 44.50154162384378 155.60833333333332 64.02877697841726 159.75 64.02877697841726C 163.89166666666668 64.02877697841726 167.44166666666666 80.47276464542651 171.58333333333334 80.47276464542651C 175.72500000000002 80.47276464542651 179.275 53.751284686536486 183.41666666666669 53.751284686536486C 187.55833333333337 53.751284686536486 191.10833333333335 36.27954779033916 195.25000000000003 36.27954779033916C 199.3916666666667 36.27954779033916 202.9416666666667 60.94552929085303 207.08333333333337 60.94552929085303C 211.22500000000005 60.94552929085303 214.77500000000003 33.19630010277493 218.9166666666667 33.19630010277493C 223.0583333333334 33.19630010277493 226.60833333333338 55.80678314491264 230.75000000000006 55.80678314491264C 234.89166666666674 55.80678314491264 238.44166666666672 61.973278520041106 242.5833333333334 61.973278520041106C 246.72500000000008 61.973278520041106 250.27500000000006 47.58478931140802 254.41666666666674 47.58478931140802C 258.5583333333334 47.58478931140802 262.1083333333334 44.50154162384378 266.25000000000006 44.50154162384378C 270.3916666666667 44.50154162384378 273.9416666666667 57.8622816032888 278.08333333333337 57.8622816032888" pathFrom="M -1 100L -1 100L 17.75 100L 29.583333333333336 100L 41.41666666666667 100L 53.25000000000001 100L 65.08333333333334 100L 76.91666666666667 100L 88.75 100L 100.58333333333333 100L 112.41666666666666 100L 124.24999999999999 100L 136.08333333333331 100L 147.91666666666666 100L 159.75 100L 171.58333333333334 100L 183.41666666666669 100L 195.25000000000003 100L 207.08333333333337 100L 218.9166666666667 100L 230.75000000000006 100L 242.5833333333334 100L 254.41666666666674 100L 266.25000000000006 100L 278.08333333333337 100"></path><g id="SvgjsG1348" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1363" r="0" cx="242.5833333333334" cy="61.973278520041106" class="apexcharts-marker w8gsaab9t no-pointer-events" stroke="#ffffff" fill="#3ac47d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1349" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1358" x1="0" y1="0" x2="284" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1359" x1="0" y1="0" x2="284" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1360" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1361" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1362" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1353" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)"><g id="SvgjsG1354" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light" style="left: 241.453px; top: 0px;"><div class="apexcharts-tooltip-series-group active" style="display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(58, 196, 125); display: none;"></span><div class="apexcharts-tooltip-text"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 285px; height: 101px;"></div></div><div class="contract-trigger"></div></div></div>
                </div>
            </div>
    </div>    
</template>
<script>
    export default {
        props:['title','value','color']
    }
</script>
<style scoped>
    .box{
        flex-direction: row;
        align-items: center;
        border-bottom: transparent solid 4px;
        box-shadow: 0 0.46875rem 2.1875rem rgba(58,196,125,0.03), 0 0.9375rem 1.40625rem rgba(58,196,125,0.03), 0 0.25rem 0.53125rem rgba(58,196,125,0.05), 0 0.125rem 0.1875rem rgba(58,196,125,0.03);
        border-width: 0;
        
        transition: all .2s;
        -webkit-tap-highlight-color: rgba(0,0,0,0);
    --blue: #007bff;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #dc3545;
    --orange: #fd7e14;
    --yellow: #ffc107;
    --green: #28a745;
    --teal: #20c997;
    --cyan: #17a2b8;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: #3f6ad8;
    --secondary: #6c757d;
    --success: #3ac47d;
    --info: #16aaff;
    --warning: #f7b924;
    --danger: #d92550;
    --light: #eee;
    --dark: #343a40;
    --focus: #444054;
    --alternate: #794c8a;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: .88rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    box-sizing: border-box;
    display: flex;
    min-width: 0;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(26,54,126,0.125);
    border-radius: .25rem;
    border-color: #3ac47d !important;
    text-align: left !important;
    border-width: 0;
    transition: all .2s;
    box-shadow: 0 0.46875rem 2.1875rem rgba(58,196,125,0.03),0 0.9375rem 1.40625rem rgba(58,196,125,0.03),0 0.25rem 0.53125rem rgba(58,196,125,0.05),0 0.125rem 0.1875rem rgba(58,196,125,0.03);
    padding: 1rem;
    position: relative;
    border-bottom: transparent solid 4px;
    flex-direction: row;
    align-items: center;
    margin-bottom: 15px !important;
    }
    
</style>