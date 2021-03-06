@extends("myViews.backOffice.layout.backOfficeLayout")

@section("page")
    Accueil
@endsection

@section("firstLevelLayoutBodyContent")

    <div class="row">

        <div class="col-lg-6">
            <div class="portlet"><!-- /primary heading -->
                <div class="portlet-heading">
                    <h3 class="portlet-title text-dark text-uppercase">
                        Weekly Sales Report
                    </h3>
                    <div class="portlet-widgets">
                        <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                        <span class="divider"></span>
                        <a data-toggle="collapse" data-parent="#accordion1" href="#bg-default"><i class="mdi mdi-minus"></i></a>
                        <span class="divider"></span>
                        <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="bg-default" class="panel-collapse collapse show">
                    <div class="portlet-body">
                        <div id="morris-bar-example" style="height: 280px;"></div>

                        <div class="row text-center m-t-30 m-b-30">
                            <div class="col-sm-3 col-xs-6">
                                <h4>$ 126</h4>
                                <small class="text-muted"> Today's Sales</small>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <h4>$ 967</h4>
                                <small class="text-muted">This Week's Sales</small>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <h4>$ 4500</h4>
                                <small class="text-muted">This Month's Sales</small>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <h4>$ 87,000</h4>
                                <small class="text-muted">This Year's Sales</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /Portlet -->

        </div> <!-- end col -->


        <div class="col-lg-6">
            <div class="portlet"><!-- /primary heading -->
                <div class="portlet-heading">
                    <h3 class="portlet-title text-dark text-uppercase">
                        Yearly Sales Report
                    </h3>
                    <div class="portlet-widgets">
                        <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                        <span class="divider"></span>
                        <a data-toggle="collapse" data-parent="#accordion1" href="#bg-default"><i class="mdi mdi-minus"></i></a>
                        <span class="divider"></span>
                        <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="portlet2" class="panel-collapse collapse show">
                    <div class="portlet-body">
                        <div id="morris-area-example" style="height: 280px;"></div>

                        <div class="row text-center m-t-30 m-b-30">
                            <div class="col-sm-3 col-xs-6">
                                <h4>$ 126</h4>
                                <small class="text-muted"> Today's Sales</small>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <h4>$ 967</h4>
                                <small class="text-muted">This Week's Sales</small>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <h4>$ 4500</h4>
                                <small class="text-muted">This Month's Sales</small>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <h4>$ 87,000</h4>
                                <small class="text-muted">This Year's Sales</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /Portlet -->

        </div>


    </div> <!-- end row -->


    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="tile-stats bg-white">
                <div class="status">
                    <h3 class="m-t-0">25% more</h3>
                    <p>Monthly visitor statistics</p>
                </div>
                <div class="chart-inline">
                    <span class="inlinesparkline"></span>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="tile-stats bg-white">
                <div class="status">
                    <h3>15</h3>
                    <p class="mb-0">Avg. Sales per day</p>
                </div>
                <span class="dynamicbar-big"></span>
            </div>
        </div>


        <div class="col-lg-3 col-sm-6">
            <div class="tile-stats bg-white">
                <div class="status">
                    <h3>-0.0102 <small class="float-right"><small>Stock Market</small></small></h3>
                </div>
                <span id="compositeline"></span>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="tile-stats bg-white">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="status">
                            <h3 class="m-t-15">61.5%</h3>
                            <p>US Dollar Share</p>
                        </div>
                    </div>
                    <div class="col-sm-4 m-t-20">
                        <span class="sparkpie-big"></span>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- WEATHER -->
    <div class="row">

        <div class="col-lg-6">

            <!-- BEGIN WEATHER WIDGET 1 -->
            <div class="card bg-success">
                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-7">
                            <div class="row">
                                <div class="col-6 text-center">
                                    <canvas id="partly-cloudy-day" width="115" height="115"></canvas>
                                </div>
                                <div class="col-6">
                                    <h2 class="m-t-0 text-white"><b>32??</b></h2>
                                    <p class="text-white">Partly cloudy</p>
                                    <p class="text-white">15km/h - 37%</p>
                                </div>
                            </div><!-- End row -->
                        </div>
                        <div class="col-sm-5">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <h4 class="text-white m-t-0">SAT</h4>
                                    <canvas id="cloudy" width="35" height="35"></canvas>
                                    <h4 class="text-white">30<i class="wi-degrees"></i></h4>
                                </div>
                                <div class="col-4 text-center">
                                    <h4 class="text-white m-t-0">SUN</h4>
                                    <canvas id="wind" width="35" height="35"></canvas>
                                    <h4 class="text-white">28<i class="wi-degrees"></i></h4>
                                </div>
                                <div class="col-4 text-center">
                                    <h4 class="text-white m-t-0">MON</h4>
                                    <canvas id="clear-day" width="35" height="35"></canvas>
                                    <h4 class="text-white">33<i class="wi-degrees"></i></h4>
                                </div>
                            </div><!-- end row -->
                        </div>
                    </div><!-- end row -->
                </div><!-- panel-body -->
            </div><!-- panel-->
            <!-- END Weather WIDGET 1 -->

        </div><!-- End col-md-6 -->

        <div class="col-lg-6">

            <!-- WEATHER WIDGET 2 -->
            <div class="card bg-primary">
                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-7">
                            <div class="">
                                <div class="row">
                                    <div class="col-6 text-center">
                                        <canvas id="snow" width="115" height="115"></canvas>
                                    </div>
                                    <div class="col-6">
                                        <h2 class="m-t-0 text-white"><b> 23??</b></h2>
                                        <p class="text-white">Partly cloudy</p>
                                        <p class="text-white">15km/h - 37%</p>
                                    </div>
                                </div><!-- end row -->
                            </div><!-- weather-widget -->
                        </div>
                        <div class="col-sm-5">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <h4 class="text-white m-t-0">SAT</h4>
                                    <canvas id="sleet" width="35" height="35"></canvas>
                                    <h4 class="text-white">30<i class="wi-degrees"></i></h4>
                                </div>
                                <div class="col-4 text-center">
                                    <h4 class="text-white m-t-0">SUN</h4>
                                    <canvas id="fog" width="35" height="35"></canvas>
                                    <h4 class="text-white">28<i class="wi-degrees"></i></h4>
                                </div>
                                <div class="col-4 text-center">
                                    <h4 class="text-white m-t-0">MON</h4>
                                    <canvas id="partly-cloudy-night" width="35" height="35"></canvas>
                                    <h4 class="text-white">33<i class="wi-degrees"></i></h4>
                                </div>
                            </div><!-- End row -->
                        </div> <!-- col-->
                    </div><!-- End row -->
                </div><!-- panel-body -->
            </div><!-- panel -->
            <!-- END WEATHER WIDGET 2 -->

        </div><!-- /.col-md-6 -->
    </div> <!-- End row -->


    <div class="row">

        <div class="col-lg-12">

            <div class="portlet"><!-- /primary heading -->
                <div class="portlet-heading">
                    <h3 class="portlet-title text-dark text-uppercase">
                        Projects
                    </h3>
                    <div class="portlet-widgets">
                        <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                        <span class="divider"></span>
                        <a data-toggle="collapse" data-parent="#accordion1" href="#portlet3"><i class="mdi mdi-minus"></i></a>
                        <span class="divider"></span>
                        <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="portlet3" class="panel-collapse collapse show">
                    <div class="portlet-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Project Name</th>
                                    <th>Start Date</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                    <th>Assign</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Velonic Admin v1</td>
                                    <td>01/01/2015</td>
                                    <td>26/04/2015</td>
                                    <td><span class="label label-info">Released</span></td>
                                    <td>Coderthemes</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Velonic Frontend v1</td>
                                    <td>01/01/2015</td>
                                    <td>26/04/2015</td>
                                    <td><span class="label label-success">Released</span></td>
                                    <td>Coderthemes</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Velonic Admin v1.1</td>
                                    <td>01/05/2015</td>
                                    <td>10/05/2015</td>
                                    <td><span class="label label-pink">Pending</span></td>
                                    <td>Coderthemes</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Velonic Frontend v1.1</td>
                                    <td>01/01/2015</td>
                                    <td>31/05/2015</td>
                                    <td><span class="label label-purple">Work in Progress</span></td>
                                    <td>Coderthemes</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Velonic Admin v1.3</td>
                                    <td>01/01/2015</td>
                                    <td>31/05/2015</td>
                                    <td><span class="label label-warning">Coming soon</span></td>
                                    <td>Coderthemes</td>
                                </tr>

                                <tr>
                                    <td>6</td>
                                    <td>Velonic Admin v1.3</td>
                                    <td>01/01/2015</td>
                                    <td>31/05/2015</td>
                                    <td><span class="label label-primary">Coming soon</span></td>
                                    <td>Coderthemes</td>
                                </tr>

                                <tr>
                                    <td>7</td>
                                    <td>Velonic Admin v1.3</td>
                                    <td>01/01/2015</td>
                                    <td>31/05/2015</td>
                                    <td><span class="label label-info">Cool</span></td>
                                    <td>Coderthemes</td>
                                </tr>

                                <tr>
                                    <td>8</td>
                                    <td>Velonic Admin v1.3</td>
                                    <td>01/01/2015</td>
                                    <td>31/05/2015</td>
                                    <td><span class="label label-warning">Coming soon</span></td>
                                    <td>Coderthemes</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->

    </div> <!-- end row -->

@endsection