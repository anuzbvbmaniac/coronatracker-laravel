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
                                        <h2 class="mb-3 font-18">{{ number_format($globalStats['total_cases']) }}</h2>
                                        <p class="mb-0"><span class="col-green"> {{ round(($globalStats['total_new_cases_today'] / $globalStats['total_cases']) * 100, 2) }}% </span> Increase</p>
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
                                        <h2 class="mb-3 font-18">{{ number_format($globalStats['total_active_cases']) }}</h2>
                                        <p class="mb-0"><span class="col-orange"> {{ round(($globalStats['total_active_cases'] / $globalStats['total_cases']) * 100, 2) }}% </span> Active</p>
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
                                        <h2 class="mb-3 font-18">{{ number_format($globalStats['total_recovered'] )}}</h2>
                                        <p class="mb-0"><span class="col-green"> {{ round(($globalStats['total_recovered'] / $globalStats['total_cases']) * 100, 2) }}% </span> Recovered</p>
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
                                        <h2 class="mb-3 font-18">{{ $globalStats['total_deaths'] }}</h2>
                                        <p class="mb-0"><span class="col-red"> {{ round(($globalStats['total_deaths'] / $globalStats['total_cases']) * 100, 2) }}% </span> Death</p>
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

        <!-- Map -->
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
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


                            @for($i = 1; $i < count($allCountryStats); $i++)
                                <li class="media countrySection">
                                    <div class="media-body">
                                        <div class="float-right">
                                            <div class="font-weight-600 text-black">{{ $allCountryStats[$i]['total_cases'] }}</div>
                                        </div>
                                        <div class="media-title">{{ $allCountryStats[$i]['title'] }}</div>
                                        <div class="mt-1">
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-success" title="{{ round($allCountryStats[$i]['total_cases'] == 0 ? 0 : ($allCountryStats[$i]['total_recovered'] / $allCountryStats[$i]['total_cases']) * 100, 2) }}%" data-width="{{ round($allCountryStats[$i]['total_cases'] == 0 ? 0 : ($allCountryStats[$i]['total_recovered'] / $allCountryStats[$i]['total_cases']) * 100, 2) }}%"></div>
                                                <div class="budget-price-label">{{ $allCountryStats[$i]['total_recovered'] }} Recovered </div>
                                            </div>
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-danger" title="{{ round($allCountryStats[$i]['total_cases'] == 0 ? 0 : ($allCountryStats[$i]['total_deaths'] / $allCountryStats[$i]['total_cases']) * 100, 2) }}%" data-width="{{ round($allCountryStats[$i]['total_cases'] == 0 ? 0 : ($allCountryStats[$i]['total_deaths'] / $allCountryStats[$i]['total_cases']) * 100, 2) }}%"></div>
                                                <div class="budget-price-label">{{ $allCountryStats[$i]['total_deaths'] }} Deaths</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endfor

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
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <h4>World Map</h4>
                    </div>
                    <div class="card-body">
                        <div id="visitorMap"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Map -->


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
            <?php
                for ($i = 1; $i < count($allCountryStats); $i++) { ?>
            {{ strtolower($allCountryStats[$i]['code']) }}: '<div class="jqvmap-circle"></div>',
            <?php
                }
            ?>
        },
        onRegionClick: function (element, code, region) {
            var opts = {
                title: 'Choosed',
                message: 'You clicked "'
                    + region
                    + '" which has the code: '
                    + code.toUpperCase()
            };

            iziToast.info(opts);
        },
        onLabelShow: function(event, label, code)
        {
            if (code == 'ca')
            {
                // Hide the label
                event.preventDefault();
            }
            else if (code == 'ru')
            {
                // Plain TEXT labels
                label.text('Bears, vodka, balalaika');
            }
            else if (code == 'us')
            {
                // HTML Based Labels. You can use any HTML you want, this is just an example
                label.html('HeaderSome Description');
            }
            else if (code == 'np')
            {
                // HTML Based Labels. You can use any HTML you want, this is just an example
                label.html('Nepal Ho hai');
            }
        },
    });
</script>

<script !src="">
    $("#table-1").dataTable();
</script>

<script !src="">
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

<style>
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
</style>
