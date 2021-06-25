@extends('admin.layouts.app')

@section('content')



    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Dashboard</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Email campaign chart -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sales Ratio</h4>
                        <div class="sales ct-charts mt-3"><div class="chartist-tooltip" style="top: 243.8px; left: 25.5px;"></div><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="30" x2="30" y1="15" y2="235" class="ct-grid ct-horizontal"></line><line x1="151.2999979654948" x2="151.2999979654948" y1="15" y2="235" class="ct-grid ct-horizontal"></line><line x1="272.5999959309896" x2="272.5999959309896" y1="15" y2="235" class="ct-grid ct-horizontal"></line><line x1="393.8999938964844" x2="393.8999938964844" y1="15" y2="235" class="ct-grid ct-horizontal"></line><line x1="515.1999918619792" x2="515.1999918619792" y1="15" y2="235" class="ct-grid ct-horizontal"></line><line x1="636.499989827474" x2="636.499989827474" y1="15" y2="235" class="ct-grid ct-horizontal"></line><line x1="757.7999877929688" x2="757.7999877929688" y1="15" y2="235" class="ct-grid ct-horizontal"></line><line y1="235" y2="235" x1="30" x2="757.7999877929688" class="ct-grid ct-vertical"></line><line y1="191" y2="191" x1="30" x2="757.7999877929688" class="ct-grid ct-vertical"></line><line y1="147" y2="147" x1="30" x2="757.7999877929688" class="ct-grid ct-vertical"></line><line y1="103" y2="103" x1="30" x2="757.7999877929688" class="ct-grid ct-vertical"></line><line y1="59" y2="59" x1="30" x2="757.7999877929688" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="30" x2="757.7999877929688" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M30,235L30,127.2C70.433,121.627,110.867,119.299,151.3,110.48C191.733,101.661,232.167,47.12,272.6,47.12C313.033,47.12,353.467,94.2,393.9,94.2C434.333,94.2,474.767,88.461,515.2,81.44C555.633,74.419,596.067,21.16,636.5,21.16C676.933,21.16,717.367,46.387,757.8,59L757.8,235Z" class="ct-area"></path><path d="M30,127.2C70.433,121.627,110.867,119.299,151.3,110.48C191.733,101.661,232.167,47.12,272.6,47.12C313.033,47.12,353.467,94.2,393.9,94.2C434.333,94.2,474.767,88.461,515.2,81.44C555.633,74.419,596.067,21.16,636.5,21.16C676.933,21.16,717.367,46.387,757.8,59" class="ct-line"></path><line x1="30" y1="127.2" x2="30.01" y2="127.2" class="ct-point" ct:value="24.5"></line><line x1="151.2999979654948" y1="110.48" x2="151.3099979654948" y2="110.48" class="ct-point" ct:value="28.3"></line><line x1="272.5999959309896" y1="47.120000000000005" x2="272.6099959309896" y2="47.120000000000005" class="ct-point" ct:value="42.7"></line><line x1="393.8999938964844" y1="94.19999999999999" x2="393.90999389648437" y2="94.19999999999999" class="ct-point" ct:value="32"></line><line x1="515.1999918619792" y1="81.44" x2="515.2099918619792" y2="81.44" class="ct-point" ct:value="34.9"></line><line x1="636.499989827474" y1="21.159999999999997" x2="636.509989827474" y2="21.159999999999997" class="ct-point" ct:value="48.6"></line><line x1="757.7999877929688" y1="59" x2="757.8099877929687" y2="59" class="ct-point" ct:value="40"></line></g><g class="ct-series ct-series-b"><path d="M30,235L30,195.84C70.433,200.387,110.867,209.48,151.3,209.48C191.733,209.48,232.167,138.64,272.6,138.64C313.033,138.64,353.467,209.48,393.9,209.48C434.333,209.48,474.767,162.4,515.2,162.4C555.633,162.4,596.067,206.4,636.5,206.4C676.933,206.4,717.367,182.933,757.8,171.2L757.8,235Z" class="ct-area"></path><path d="M30,195.84C70.433,200.387,110.867,209.48,151.3,209.48C191.733,209.48,232.167,138.64,272.6,138.64C313.033,138.64,353.467,209.48,393.9,209.48C434.333,209.48,474.767,162.4,515.2,162.4C555.633,162.4,596.067,206.4,636.5,206.4C676.933,206.4,717.367,182.933,757.8,171.2" class="ct-line"></path><line x1="30" y1="195.84" x2="30.01" y2="195.84" class="ct-point" ct:value="8.9"></line><line x1="151.2999979654948" y1="209.48" x2="151.3099979654948" y2="209.48" class="ct-point" ct:value="5.8"></line><line x1="272.5999959309896" y1="138.64" x2="272.6099959309896" y2="138.64" class="ct-point" ct:value="21.9"></line><line x1="393.8999938964844" y1="209.48" x2="393.90999389648437" y2="209.48" class="ct-point" ct:value="5.8"></line><line x1="515.1999918619792" y1="162.4" x2="515.2099918619792" y2="162.4" class="ct-point" ct:value="16.5"></line><line x1="636.499989827474" y1="206.4" x2="636.509989827474" y2="206.4" class="ct-point" ct:value="6.5"></line><line x1="757.7999877929688" y1="171.2" x2="757.8099877929687" y2="171.2" class="ct-point" ct:value="14.5"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="30" y="240" width="121.2999979654948" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 121px; height: 20px;">1</span></foreignObject><foreignObject style="overflow: visible;" x="151.2999979654948" y="240" width="121.2999979654948" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 121px; height: 20px;">2</span></foreignObject><foreignObject style="overflow: visible;" x="272.5999959309896" y="240" width="121.29999796549478" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 121px; height: 20px;">3</span></foreignObject><foreignObject style="overflow: visible;" x="393.8999938964844" y="240" width="121.29999796549481" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 121px; height: 20px;">4</span></foreignObject><foreignObject style="overflow: visible;" x="515.1999918619792" y="240" width="121.29999796549481" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 121px; height: 20px;">5</span></foreignObject><foreignObject style="overflow: visible;" x="636.499989827474" y="240" width="121.29999796549475" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 121px; height: 20px;">6</span></foreignObject><foreignObject style="overflow: visible;" x="757.7999877929688" y="240" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">7</span></foreignObject><foreignObject style="overflow: visible;" y="191" x="10" height="44" width="10"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 44px; width: 10px;">0k</span></foreignObject><foreignObject style="overflow: visible;" y="147" x="10" height="44" width="10"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 44px; width: 10px;">1k</span></foreignObject><foreignObject style="overflow: visible;" y="103" x="10" height="44" width="10"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 44px; width: 10px;">2k</span></foreignObject><foreignObject style="overflow: visible;" y="59" x="10" height="44" width="10"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 44px; width: 10px;">3k</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="44" width="10"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 44px; width: 10px;">4k</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="10"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 10px;">5k</span></foreignObject></g></svg></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-5">Referral Earnings</h5>
                        <h3 class="font-light">$769.08</h3>
                        <div class="m-t-20 text-center">
                            <div id="earnings"><canvas width="196" height="40" style="display: inline-block; width: 196px; height: 40px; vertical-align: top;"></canvas></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title m-b-0">Users</h4>
                        <h2 class="font-light">35,658 <span class="font-16 text-success font-medium">+23%</span></h2>
                        <div class="m-t-30">
                            <div class="row text-center">
                                <div class="col-6 border-right">
                                    <h4 class="m-b-0">58%</h4>
                                    <span class="font-14 text-muted">New Users</span>
                                </div>
                                <div class="col-6">
                                    <h4 class="m-b-0">42%</h4>
                                    <span class="font-14 text-muted">Repeat Users</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Email campaign chart -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Ravenue - page-view-bounce rate -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Latest Sales</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="border-top-0">NAME</th>
                                    <th class="border-top-0">STATUS</th>
                                    <th class="border-top-0">DATE</th>
                                    <th class="border-top-0">PRICE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    
                                    <td class="txt-oflo">Elite admin</td>
                                    <td><span class="label label-success label-rounded">SALE</span> </td>
                                    <td class="txt-oflo">April 18, 2017</td>
                                    <td><span class="font-medium">$24</span></td>
                                </tr>
                                <tr>
                                    
                                    <td class="txt-oflo">Real Homes WP Theme</td>
                                    <td><span class="label label-info label-rounded">EXTENDED</span></td>
                                    <td class="txt-oflo">April 19, 2017</td>
                                    <td><span class="font-medium">$1250</span></td>
                                </tr>
                                <tr>
                                    
                                    <td class="txt-oflo">Ample Admin</td>
                                    <td><span class="label label-purple label-rounded">Tax</span></td>
                                    <td class="txt-oflo">April 19, 2017</td>
                                    <td><span class="font-medium">$1250</span></td>
                                </tr>
                                <tr>
                                    
                                    <td class="txt-oflo">Medical Pro WP Theme</td>
                                    <td><span class="label label-success label-rounded">Sale</span></td>
                                    <td class="txt-oflo">April 20, 2017</td>
                                    <td><span class="font-medium">-$24</span></td>
                                </tr>
                                <tr>
                                    
                                    <td class="txt-oflo">Hosting press html</td>
                                    <td><span class="label label-success label-rounded">SALE</span></td>
                                    <td class="txt-oflo">April 21, 2017</td>
                                    <td><span class="font-medium">$24</span></td>
                                </tr>
                                <tr>
                                    
                                    <td class="txt-oflo">Digital Agency PSD</td>
                                    <td><span class="label label-danger label-rounded">Tax</span> </td>
                                    <td class="txt-oflo">April 23, 2017</td>
                                    <td><span class="font-medium">-$14</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Ravenue - page-view-bounce rate -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recent Comments</h4>
                    </div>
                    <div class="comment-widgets" style="height:430px;">
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row m-t-0">
                            <div class="p-2">
                                <img src="{{URL::asset('admin/assets/images/users/1.jpg')}}" alt="user" width="50" class="rounded-circle">
                            </div>
                            <div class="comment-text w-100">
                                <h6 class="font-medium">James Anderson</h6>
                                <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                <div class="comment-footer">
                                    <span class="text-muted float-right">April 14, 2016</span>
                                    <span class="label label-rounded label-primary">Pending</span>
                                    <span class="action-icons">
                                        <a href="javascript:void(0)">
                                            <i class="ti-pencil-alt"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i class="ti-check"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i class="ti-heart"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row">
                            <div class="p-2">
                                <img src="{{URL::asset('admin/assets/images/users/4.jpg')}}" alt="user" width="50" class="rounded-circle">
                            </div>
                            <div class="comment-text active w-100">
                                <h6 class="font-medium">Michael Jorden</h6>
                                <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                <div class="comment-footer ">
                                    <span class="text-muted float-right">April 14, 2016</span>
                                    <span class="label label-success label-rounded">Approved</span>
                                    <span class="action-icons active">
                                        <a href="javascript:void(0)">
                                            <i class="ti-pencil-alt"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i class="icon-close"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i class="ti-heart text-danger"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row">
                            <div class="p-2">
                                <img src="{{URL::asset('admin/assets/images/users/5.jpg')}}" alt="user" width="50" class="rounded-circle">
                            </div>
                            <div class="comment-text w-100">
                                <h6 class="font-medium">Johnathan Doeting</h6>
                                <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                <div class="comment-footer">
                                    <span class="text-muted float-right">April 14, 2016</span>
                                    <span class="label label-rounded label-danger">Rejected</span>
                                    <span class="action-icons">
                                        <a href="javascript:void(0)">
                                            <i class="ti-pencil-alt"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i class="ti-check"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i class="ti-heart"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row m-t-0">
                            <div class="p-2">
                                <img src="{{URL::asset('admin/assets/images/users/2.jpg')}}" alt="user" width="50" class="rounded-circle">
                            </div>
                            <div class="comment-text w-100">
                                <h6 class="font-medium">Steve Jobs</h6>
                                <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                <div class="comment-footer">
                                    <span class="text-muted float-right">April 14, 2016</span>
                                    <span class="label label-rounded label-primary">Pending</span>
                                    <span class="action-icons">
                                        <a href="javascript:void(0)">
                                            <i class="ti-pencil-alt"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i class="ti-check"></i>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <i class="ti-heart"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Temp Guide</h4>
                        <div class="d-flex align-items-center flex-row m-t-30">
                            <div class="display-5 text-info"><i class="wi wi-day-showers"></i> <span>73<sup>°</sup></span></div>
                            <div class="m-l-10">
                                <h3 class="m-b-0">Saturday</h3><small>Ahmedabad, India</small>
                            </div>
                        </div>
                        <table class="table no-border mini-table m-t-20">
                            <tbody>
                                <tr>
                                    <td class="text-muted">Wind</td>
                                    <td class="font-medium">ESE 17 mph</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Humidity</td>
                                    <td class="font-medium">83%</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Pressure</td>
                                    <td class="font-medium">28.56 in</td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Cloud Cover</td>
                                    <td class="font-medium">78%</td>
                                </tr>
                            </tbody>
                        </table>
                        <ul class="row list-style-none text-center m-t-30">
                            <li class="col-3">
                                <h4 class="text-info"><i class="wi wi-day-sunny"></i></h4>
                                <span class="d-block text-muted">09:30</span>
                                <h3 class="m-t-5">70<sup>°</sup></h3>
                            </li>
                            <li class="col-3">
                                <h4 class="text-info"><i class="wi wi-day-cloudy"></i></h4>
                                <span class="d-block text-muted">11:30</span>
                                <h3 class="m-t-5">72<sup>°</sup></h3>
                            </li>
                            <li class="col-3">
                                <h4 class="text-info"><i class="wi wi-day-hail"></i></h4>
                                <span class="d-block text-muted">13:30</span>
                                <h3 class="m-t-5">75<sup>°</sup></h3>
                            </li>
                            <li class="col-3">
                                <h4 class="text-info"><i class="wi wi-day-sprinkle"></i></h4>
                                <span class="d-block text-muted">15:30</span>
                                <h3 class="m-t-5">76<sup>°</sup></h3>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- ============================================================== -->
    </div>

    <footer class="footer text-center">
        All Rights Reserved by Nice admin. Designed and Developed by
        <a href="https://wrappixel.com">WrapPixel</a>.
    </footer>

@endsection