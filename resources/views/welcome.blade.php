@include('includes.header')
@include('includes.navigation')
<!-- Main Content -->
<div class="main-content">

    <section class="section">
        <div class="row ">
            <!-- Total Confirmed Cases -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Total Confirmed Cases</h5>
                                        <h2 class="mb-3 font-18">{{ number_format($globalStats['Global']['TotalConfirmed']) }}</h2>
                                        <p class="mb-0"><span class="col-green"> {{ round(($globalStats['Global']['NewConfirmed'] / $globalStats['Global']['TotalConfirmed']) * 100, 2) }}% </span> Increase</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="assets/img/banner/1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Total Confirmed Cases -->

            <!-- Total Active Cases -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Total Active Cases</h5>
                                        <h2 class="mb-3 font-18">{{ number_format($active = $globalStats['Global']['TotalConfirmed'] - ($globalStats['Global']['TotalRecovered'] + $globalStats['Global']['TotalDeaths'])) }}</h2>
                                        <p class="mb-0"><span class="col-blue"> {{
                                            round(($active/ $globalStats['Global']['TotalConfirmed']) * 100, 2) }}% </span> Active</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="assets/img/banner/2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Total Active Cases -->

            <!-- Total Recovered Cases -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Total Recovered Cases</h5>
                                        <h2 class="mb-3 font-18">{{ number_format($globalStats['Global']['TotalRecovered']) }}</h2>
                                        <p class="mb-0"><span class="col-green"> {{ round(($globalStats['Global']['TotalRecovered'] / $globalStats['Global']['TotalConfirmed']) * 100, 2) }}% </span> Recovered</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="assets/img/banner/3.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Total Recovered Cases -->

            <!-- Total Deaths -->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Total Deaths Number</h5>
                                        <h2 class="mb-3 font-18">{{ number_format($globalStats['Global']['TotalDeaths']) }}</h2>
                                        <p class="mb-0"><span class="col-red"> {{ round(($globalStats['Global']['TotalDeaths'] / $globalStats['Global']['TotalConfirmed']) * 100, 2) }}% </span> Death</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="assets/img/banner/4.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Total Deaths -->

        </div> <!-- // Row -->

        <!-- Cases by Countries & Map -->
        <div class="row">
            <!-- Cases by Countries -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="card gradient-bottom">
                    <div class="card-header">
                        <h4>Cases by Country</h4>
                        <form class="card-header-form">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Search" id="search">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary btn-icon"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body" id="top-5-scroll">
                        <ul class="list-unstyled list-unstyled-border">

                            @foreach($globalStats['Countries'] as $stats)

                                @if($stats['TotalConfirmed'] == 0)
                                    <!-- Do Nothing -->
                                @else
                                    <li class="media countrySection">
                                        <div class="media-body">
                                            <div class="float-right">
                                                <div class="font-weight-600 text-black">{{ $stats['TotalConfirmed'] }} Confirmed</div>
                                            </div>
                                            <div class="media-title">{{ $stats['Country'] }}</div>
                                            <div class="mt-1">
                                                <div class="budget-price">
                                                    <div class="budget-price-square bg-success"
                                                         title="{{ round(($stats['TotalRecovered'] / $stats['TotalConfirmed']) * 100, 2) }}%"
                                                         data-width="{{ round(($stats['TotalRecovered'] / $stats['TotalConfirmed']) * 100, 2) }}%"
                                                    ></div>
                                                    <div class="budget-price-label">{{ $stats['TotalRecovered'] }} Recovered </div>
                                                </div>
                                                <div class="budget-price">
                                                    <div class="budget-price-square bg-danger"
                                                         title="{{ round(($stats['TotalDeaths'] / $stats['TotalConfirmed']) * 100, 2) }}%"
                                                         data-width="{{ round(($stats['TotalDeaths'] / $stats['TotalConfirmed']) * 100, 2) }}%"
                                                    ></div>
                                                    <div class="budget-price-label">{{ $stats['TotalDeaths'] }} Deaths</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                            @endforeach

                        </ul>
                    </div>
                    <div class="card-footer pt-3 d-flex justify-content-center">
                        <div class="budget-price justify-content-center">
                            <div class="budget-price-square bg-success" data-width="20"></div>
                            <div class="budget-price-label">Recovered</div>
                        </div>
                        <div class="budget-price justify-content-center">
                            <div class="budget-price-square bg-danger" data-width="20"></div>
                            <div class="budget-price-label">Death</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Cases by Countries -->

            <!-- Most Affected Countries -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="card gradient-bottom">
                    <div class="card-header">
                        <h4>Most Affected Countries</h4>
                        <div class="card-header-action">
                            <a href="#" class="btn btn-primary btn-icon icon-right">View All <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="card-body" id="top-5-scroll">
                        <ul class="list-unstyled list-unstyled-border">

                            <li class="media mostAffected">
                                <div class="media-body">
                                    <div class="float-right">
                                        <div class="font-weight-600 text-black">105,161 Confirmed</div>
                                    </div>
                                    <div class="media-title">USA</div>
                                    <div class="mt-1">
                                        <div class="budget-price">
                                            <div class="budget-price-square bg-success" title="10%" data-width="51%"></div>
                                            <div class="budget-price-label">25368 Recovered </div>
                                        </div>
                                        <div class="budget-price">
                                            <div class="budget-price-square bg-danger" title="20%" data-width="20%"></div>
                                            <div class="budget-price-label">1722 Deaths</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="media countrySection">
                                <div class="media-body">
                                    <div class="float-right">
                                        <div class="font-weight-600 text-black">98545</div>
                                    </div>
                                    <div class="media-title">USA</div>
                                    <div class="mt-1">
                                        <div class="budget-price">
                                            <div class="budget-price-square bg-success" title="10%" data-width="51%"></div>
                                            <div class="budget-price-label">45210 Recovered </div>
                                        </div>
                                        <div class="budget-price">
                                            <div class="budget-price-square bg-danger" title="20%" data-width="20%"></div>
                                            <div class="budget-price-label">5000 Deaths</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="media countrySection">
                                <div class="media-body">
                                    <div class="float-right">
                                        <div class="font-weight-600 text-black">98545</div>
                                    </div>
                                    <div class="media-title">Nepal</div>
                                    <div class="mt-1">
                                        <div class="budget-price">
                                            <div class="budget-price-square bg-success" title="10%" data-width="51%"></div>
                                            <div class="budget-price-label">45210 Recovered </div>
                                        </div>
                                        <div class="budget-price">
                                            <div class="budget-price-square bg-danger" title="20%" data-width="20%"></div>
                                            <div class="budget-price-label">5000 Deaths</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="media countrySection">
                                <div class="media-body">
                                    <div class="float-right">
                                        <div class="font-weight-600 text-black">98545</div>
                                    </div>
                                    <div class="media-title">Japan</div>
                                    <div class="mt-1">
                                        <div class="budget-price">
                                            <div class="budget-price-square bg-success" title="10%" data-width="51%"></div>
                                            <div class="budget-price-label">45210 Recovered </div>
                                        </div>
                                        <div class="budget-price">
                                            <div class="budget-price-square bg-danger" title="20%" data-width="20%"></div>
                                            <div class="budget-price-label">5000 Deaths</div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="card-footer pt-3 d-flex justify-content-center">
                        <div class="budget-price justify-content-center">
                            <div class="budget-price-square bg-success" data-width="20"></div>
                            <div class="budget-price-label">Recovered</div>
                        </div>
                        <div class="budget-price justify-content-center">
                            <div class="budget-price-square bg-danger" data-width="20"></div>
                            <div class="budget-price-label">Death</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Most Affected Countries -->

            <!-- Map -->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <h4 style="font-size: 21px; line-height: 56px;">World Map</h4>
                    </div>
                    <div class="card-body">
                        <div id="visitorMap"></div>
                    </div>
                </div>
            </div>
            <!-- // Map -->
        </div>
        <!-- // Cases by Countries & Map -->

        <!-- Cases over time || Confirmed Case  Daily Increase -->
        <div class="row">
            <!-- Confirmed Cases over time -->
            <div class="col-xl-6 col-lg-3">
                <div class="card author-box">
                    <div class="card-body">
                        <h4>Confirmed cases over time</h4>
                        <div class="author-box-job">Web Developer</div>
                        <!-- Chart -->
                        <div id="confirmedCases"></div>
                        <!-- // Chart -->
                    </div>
                </div>
            </div>
            <!-- // Confirmed Cases over time -->

            <!-- Daily Increased Cases over time -->
            <div class="col-xl-6 col-lg-3">
                <div class="card author-box">
                    <div class="card-body">
                        <h4>Daily Increased cases</h4>
                        <div class="author-box-job">Web Developer</div>
                        <!-- Chart -->
                        <div class="recent-report__chart">
                            <div id="dailyIncreasedCases"></div>
                        </div>
                        <!-- // Chart -->
                    </div>
                </div>
            </div>
            <!-- // Daily Increased Cases over time -->
        </div> <!-- Row -->
        <!-- // Cases over time || Confirmed Case  Daily Increase || Top Stories and Updates -->

        <!-- Top Stories & Updates -->
        <div class="row">
            <!-- Top Stories and Updates -->
            <div class="col-md-6 col-lg-12 col-xl-6">
                <!-- Support tickets -->
                <div class="card">
                    <div class="card-header">
                        <h4>Top Stories & Updates</h4>
                        <form class="card-header-form">
                            <input type="text" name="search" class="form-control" placeholder="Search">
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="support-ticket media pb-1 mb-3">
                            <img src="{{asset('assets/img/user.jpg')}}" class="user-img mr-2" alt="">
                            <div class="media-body ml-3">
                                <div class="badge badge-pill badge-success mb-1 float-right">Feature</div>
                                <span class="font-weight-bold">#89754</span>
                                <a href="javascript:void(0)">Please add advance table</a>
                                <p class="my-1">Hi, can you please add new table for advan...</p>
                                <small class="text-muted">Created by <span class="font-weight-bold font-13">John
                          Deo</span>
                                    &nbsp;&nbsp; - 1 day ago</small>
                            </div>
                        </div>
                        <div class="support-ticket media pb-1 mb-3">
                            <img src="{{asset('assets/img/user.jpg')}}" class="user-img mr-2" alt="">
                            <div class="media-body ml-3">
                                <div class="badge badge-pill badge-warning mb-1 float-right">Bug</div>
                                <span class="font-weight-bold">#57854</span>
                                <a href="javascript:void(0)">Select item not working</a>
                                <p class="my-1">please check select item in advance form not work...</p>
                                <small class="text-muted">Created by <span class="font-weight-bold font-13">Sarah
                          Smith</span>
                                    &nbsp;&nbsp; - 2 day ago</small>
                            </div>
                        </div>
                        <div class="support-ticket media pb-1 mb-3">
                            <img src="{{asset('assets/img/user.jpg')}}" class="user-img mr-2" alt="">
                            <div class="media-body ml-3">
                                <div class="badge badge-pill badge-primary mb-1 float-right">Query</div>
                                <span class="font-weight-bold">#85784</span>
                                <a href="javascript:void(0)">Are you provide template in Angular?</a>
                                <p class="my-1">can you provide template in latest angular 8.</p>
                                <small class="text-muted">Created by <span class="font-weight-bold font-13">Ashton Cox</span>
                                    &nbsp;&nbsp; -2 day ago</small>
                            </div>
                        </div>
                        <div class="support-ticket media pb-1 mb-3">
                            <img src="{{asset('assets/img/user.jpg')}}" class="user-img mr-2" alt="">
                            <div class="media-body ml-3">
                                <div class="badge badge-pill badge-info mb-1 float-right">Enhancement</div>
                                <span class="font-weight-bold">#25874</span>
                                <a href="javascript:void(0)">About template page load speed</a>
                                <p class="my-1">Hi, John, can you work on increase page speed of template...</p>
                                <small class="text-muted">Created by <span class="font-weight-bold font-13">Hasan
                          Basri</span>
                                    &nbsp;&nbsp; -3 day ago</small>
                            </div>
                        </div>
                    </div>
                    <a href="javascript:void(0)" class="card-footer card-link text-center small ">View
                        All</a>
                </div>
                <!-- Support tickets -->
            </div>
            <!-- // Top Stories and Updates -->

            <div class="col-md-6 col-lg-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Projects Payments</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Client Name</th>
                                    <th>Date</th>
                                    <th>Payment Method</th>
                                    <th>Amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe </td>
                                    <td>11-08-2018</td>
                                    <td>NEFT</td>
                                    <td>$258</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Cara Stevens
                                    </td>
                                    <td>15-07-2018</td>
                                    <td>PayPal</td>
                                    <td>$125</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        Airi Satou
                                    </td>
                                    <td>25-08-2018</td>
                                    <td>RTGS</td>
                                    <td>$287</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        Angelica Ramos
                                    </td>
                                    <td>01-05-2018</td>
                                    <td>CASH</td>
                                    <td>$170</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        Ashton Cox
                                    </td>
                                    <td>18-04-2018</td>
                                    <td>NEFT</td>
                                    <td>$970</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>
                                        John Deo
                                    </td>
                                    <td>22-11-2018</td>
                                    <td>PayPal</td>
                                    <td>$854</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>
                                        Hasan Basri
                                    </td>
                                    <td>07-09-2018</td>
                                    <td>Cash</td>
                                    <td>$128</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Stories & Updates -->

    </section>


    <div class="settingSidebar">
        <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
        </a>
        <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
                <div class="setting-panel-header">Setting Panel
                </div>
                <div class="p-15 border-bottom">
                    <h6 class="font-medium m-b-10">Select Layout</h6>
                    <div class="selectgroup layout-color w-50">
                        <label class="selectgroup-item">
                            <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout">
                            <span class="selectgroup-button">Light</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout" checked>
                            <span class="selectgroup-button">Dark</span>
                        </label>
                    </div>
                </div>
                <div class="p-15 border-bottom">
                    <h6 class="font-medium m-b-10">Sidebar Color</h6>
                    <div class="selectgroup selectgroup-pills sidebar-color">
                        <label class="selectgroup-item">
                            <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                            <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                  data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                            <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                  data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                        </label>
                    </div>
                </div>
                <div class="p-15 border-bottom">
                    <h6 class="font-medium m-b-10">Color Theme</h6>
                    <div class="theme-setting-options">
                        <ul class="choose-theme list-unstyled mb-0">
                            <li title="white" class="active">
                                <div class="white"></div>
                            </li>
                            <li title="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li title="black">
                                <div class="black"></div>
                            </li>
                            <li title="purple">
                                <div class="purple"></div>
                            </li>
                            <li title="orange">
                                <div class="orange"></div>
                            </li>
                            <li title="green">
                                <div class="green"></div>
                            </li>
                            <li title="red">
                                <div class="red"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="p-15 border-bottom">
                    <div class="theme-setting-options">
                        <label class="m-b-0">
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                   id="mini_sidebar_setting">
                            <span class="custom-switch-indicator"></span>
                            <span class="control-label p-l-10">Mini Sidebar</span>
                        </label>
                    </div>
                </div>
                <div class="p-15 border-bottom">
                    <div class="theme-setting-options">
                        <label class="m-b-0">
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                   id="sticky_header_setting">
                            <span class="custom-switch-indicator"></span>
                            <span class="control-label p-l-10">Sticky Header</span>
                        </label>
                    </div>
                </div>
                <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                    <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                        <i class="fas fa-undo"></i> Restore Default
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> <!-- Main Content -->
@include('includes.footer')

<!-- World Map -->
<script>
    "use strict";
    $('#visitorMap').vectorMap({
        map: 'world_en',
        backgroundColor: '#E0E5EC',
        borderColor: '#f2f2f2',
        borderOpacity: .8,
        borderWidth: 1,
        hoverColor: '#000',
        hoverOpacity: .8,
        color: '#fff',
        normalizeFunction: 'linear',
        selectedRegions: false,
        showTooltip: true,
        pins: {
                @foreach($globalStats['Countries'] as $countrycode)
                    @if($countrycode['TotalConfirmed'] == 0)
                    @else
                        {{ strtolower($countrycode['CountryCode']) }}: '<div class="jqvmap-circle"></div>',
                    @endif
                @endforeach
        },
        onRegionClick: function (element, code, region) {

        },
        onLabelShow: function(event, label, code)
        {
                if (code == 'za') {

                }
            @foreach($globalStats['Countries'] as $country)
                else if (code === '{{strtolower($country['CountryCode'])}}')
                {
                    label.html('{{$country['Country']}} </br> Total Case: {{number_format($country['TotalConfirmed'])}} </br> Recovered: {{number_format($country['TotalRecovered'])}} </br> Deaths: {{number_format($country['TotalDeaths'])}}');
                }
            @endforeach
        },
    });
</script>

<script>
    $("#table-1").dataTable();
</script>

<script>
    $(document).ready(function(){
        $('#search').keyup(function(){
            // Search text
            var text = $(this).val();
            // Hide all content class element
            $('.countrySection').hide();
            // Search and show
            $('.countrySection:contains("'+text+'")').show();

            console.log(text);
        });
    });
</script>

<!-- Confirmed Case Over Time -->
<script>
    $(document).ready(function () {
        confirmedCases();
        dailyIncreasedCases();
    });

    function confirmedCases() {
        var options = {
            chart: {
                height: 230,
                type: "line",
                shadow: {
                    enabled: true,
                    color: "#000",
                    top: 18,
                    left: 7,
                    blur: 10,
                    opacity: 1
                },
                toolbar: {
                    show: false
                },
            },
            colors: ["#786BED", "#fc544b"],
            dataLabels: {
                enabled: true
            },
            stroke: {
                curve: "smooth"
            },
            series: [
                {
                    name: "Infected",
                    data: [5, 15, 14, 36, 32, 32]
                },
                {
                    name: "Deaths",
                    data: [7, 11, 30, 18, 25, 13]
                }
            ],
            grid: {
                borderColor: "#c9d2de",
                row: {
                    colors: ["#f3f3f3", "transparent"], // takes an array which will be repeated on columns
                    opacity: 0.0
                }
            },
            markers: {
                size: 6
            },
            xaxis: {
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],

                labels: {
                    style: {
                        colors: "#9aa0ac"
                    }
                }
            },
            yaxis: {
                title: {
                    text: "Income"
                },
                labels: {
                    style: {
                        color: "#9aa0ac"
                    }
                },
                min: 5,
                max: 40
            },
        };

        var chart = new ApexCharts(document.querySelector("#confirmedCases"), options);

        chart.render();
    }

    function dailyIncreasedCases() {

        var options = {
            chart: {
                height: 230,
                type: 'bar',
                toolbar: {
                    show: false
                },
            },
            colors: ['#54ca68', '#6777ef', '#fc544b'],
            plotOptions: {
                bar: {
                    horizontal: false,
                    endingShape: 'rounded',
                    columnWidth: '55%',
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            series: [{
                name: 'Recovered',
                data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
            }, {
                name: 'Total Cases',
                data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
            }, {
                name: 'Deaths',
                data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
            }],
            xaxis: {
                categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                labels: {
                    style: {
                        colors: '#9aa0ac',
                    }
                }
            },
            yaxis: {
                title: {
                    text: '$ (thousands)'
                },
                labels: {
                    style: {
                        color: '#9aa0ac',
                    }
                }
            },
            fill: {
                opacity: 1

            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return "$ " + val + " thousands"
                    }
                }
            },
        };

        var chart = new ApexCharts(
            document.querySelector("#dailyIncreasedCases"),
            options
        );

        chart.render();

    }
</script>

<style>
    .support-ticket .user-img {
        width: 74px;
        box-shadow: 9px 9px 16px rgba(163,177,198,0.6), -9px -9px 16px rgba(255,255,255, 0.7);
    }
    .apexcharts-legend.center.position-bottom {
        bottom: 0 !important;
    }
    .card .card-header h4 {
        font-size: 17px;
        line-height: 28px;
        padding-right: 10px;
        margin-bottom: 0;
        color: #212529;
        width: 60%;
    }

    .card-body#top-5-scroll{
        height: 380px !important;
    }

    .flag-icon.mr-3.rounded {
        width: 60px;
        height: 45px;
    }

    .main-footer {
        padding: 20px 30px 20px 28px !important;
        color: #98a6ad;
        border-top: 1px solid #e3eaef;
        display: inline-block;
        background: #e0e5ec;
        font-weight: 600;
        text-transform: uppercase;
        border-radius: 8px;
        font-size: 11px;
        width: calc(100% - 121px);
        float: right;
        margin: 31px;
        box-shadow: 9px 9px 16px rgb(163,177,198,0.6), -9px -9px 16px rgba(255,255,255, 0.7);
    }

    .light-sidebar .main-sidebar .sidebar-menu li.active a {
        background-color: #e0e5ec;
        box-shadow: inset -5px -5px 8px rgba(163,177,198,0.6), inset 5px 5px 8px rgba(255,255,255, 0.7);
    }

    .navbar.navbar-expand-lg.main-navbar {
        margin-left: 26px;
        margin-top: 18px;
        margin-right: 30px;
        border-radius: 8px;
    }
</style>
