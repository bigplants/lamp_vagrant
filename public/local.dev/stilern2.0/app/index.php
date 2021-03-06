<?php

if(!isset($_SERVER['HTTP_X_PJAX'])){

    $content = basename($_SERVER['SCRIPT_NAME']);

    $_SERVER['HTTP_X_PJAX'] = true;
    include 'stilearn.base.template.php';
    die();
}

?>
                    <!-- DASHBOARD
                    ================================================== -->
                    <!-- Dashboard  -->
                    <div id="error-placement"></div>
                    <div class="row margin-top">
                        <div class="col-md-12 margin-bottom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#system-stats" data-toggle="tab">System Stats</a></li>
                                <li><a href="#server-stats" data-toggle="tab">Server Stats</a></li>
                            </ul>
                        </div>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="system-stats" class="tab-pane fade active in">
                                <div class="col-md-4">
                                    <div id="overall-visitor" class="panel panel-animated panel-primary bg-primary">
                                        <div class="panel-body">
                                            <div class="panel-actions-fly">
                                                <button data-refresh="#overall-visitor" data-error-place="#error-placement" title="refresh" class="btn-panel">
                                                    <i class="glyphicon glyphicon-refresh"></i>
                                                </button><!--/btn-panel-->
                                                <a href="#" title="Go to system stats page" class="btn-panel">
                                                    <i class="glyphicon glyphicon-stats"></i>
                                                </a><!--/btn-panel-->
                                            </div><!--/panel-action-fly-->

                                            <p class="lead">Visitor</p><!--/lead as title-->

                                            <ul class="list-percentages row">
                                                <li class="col-xs-4">
                                                    <p class="text-ellipsis">Monthly</p>
                                                    <p class="text-lg"><strong>765,298</strong></p>
                                                </li>
                                                <li class="col-xs-4">
                                                    <p class="text-ellipsis">Weekly</p>
                                                    <p class="text-lg"><strong>1,765</strong></p>
                                                </li>
                                                <li class="col-xs-4">
                                                    <p class="text-ellipsis">Today</p>
                                                    <p class="text-lg"><strong>563</strong></p>
                                                </li>
                                            </ul><!--/list-percentages-->
                                            <p class="helper-block">
                                                <div class="progress progress-xs progress-flat progress-inverse-inverse">
                                                    <div class="progress-bar progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                        <span class="sr-only">60% Complete (inverse)</span>
                                                    </div>
                                                </div>
                                                <p class="text-ellipsis"><i class="fa fa-caret-up"></i> 654 &nbsp;&nbsp; +21<sup>%</sup> <small>Looks Good!, up from last month</small></p>
                                            </p><!--/help-block-->
                                        </div><!--/panel-body-->
                                    </div><!--/panel overal-visitor-->
                                </div><!--/cols-->

                                <div class="col-md-4">
                                    <div id="overall-users" class="panel panel-animated panel-success bg-success">
                                        <div class="panel-body">
                                            <div class="panel-actions-fly">
                                                <button data-refresh="#overall-users" data-error-place="#error-placement" title="refresh" class="btn-panel">
                                                    <i class="glyphicon glyphicon-refresh"></i>
                                                </button><!--/btn-panel-->
                                                <a href="#" title="Go to system stats page" class="btn-panel">
                                                    <i class="glyphicon glyphicon-stats"></i>
                                                </a><!--/btn-panel-->
                                            </div><!--/panel-action-fly-->

                                            <p class="lead">Users</p><!--/lead as title-->

                                            <ul class="list-percentages row">
                                                <li class="col-xs-4">
                                                    <p class="text-ellipsis">All Users</p>
                                                    <p class="text-lg"><strong>1437</strong></p>
                                                </li>
                                                <li class="col-xs-4">
                                                    <p class="text-ellipsis">Last Month</p>
                                                    <p class="text-lg"><strong>287</strong></p>
                                                </li>
                                                <li class="col-xs-4">
                                                    <p class="text-ellipsis">New Users</p>
                                                    <p class="text-lg"><strong>87</strong></p>
                                                </li>
                                            </ul><!--/list-percentages-->
                                            <p class="helper-block">
                                                <div class="progress progress-xs progress-flat progress-inverse-inverse">
                                                    <div class="progress-bar progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                        <span class="sr-only">60% Complete (inverse)</span>
                                                    </div>
                                                </div>
                                                <p class="text-ellipsis"><i class="fa fa-caret-up"></i> 63 &nbsp;&nbsp; +8<sup>%</sup> <small>Looks Good!, up from last month</small></p>
                                            </p><!--/help-block-->
                                        </div><!--/panel-body-->
                                    </div><!--/panel overal-users-->
                                </div><!--/cols-->

                                <div class="col-md-4">
                                    <div id="overall-orders" class="panel panel-animated panel-danger bg-danger">
                                        <div class="panel-body">
                                            <div class="panel-actions-fly">
                                                <button data-refresh="#overall-orders" data-error-place="#error-placement" title="refresh" class="btn-panel">
                                                    <i class="glyphicon glyphicon-refresh"></i>
                                                </button><!--/btn-panel-->
                                                <a href="#" title="Go to system stats page" class="btn-panel">
                                                    <i class="glyphicon glyphicon-stats"></i>
                                                </a><!--/btn-panel-->
                                            </div><!--/panel-action-fly-->

                                            <p class="lead">Orders</p><!--/lead as title-->

                                            <ul class="list-percentages row">
                                                <li class="col-xs-4">
                                                    <p class="text-ellipsis">Total Revenue</p>
                                                    <p class="text-lg"><strong>1,954,452</strong></p>
                                                </li>
                                                <li class="col-xs-4">
                                                    <p class="text-ellipsis">Last Month</p>
                                                    <p class="text-lg"><strong>43,671</strong></p>
                                                </li>
                                                <li class="col-xs-4">
                                                    <p class="text-ellipsis">Today</p>
                                                    <p class="text-lg"><strong>1,219</strong></p>
                                                </li>
                                            </ul><!--/list-percentages-->
                                            <p class="helper-block">
                                                <div class="progress progress-xs progress-flat progress-inverse-inverse">
                                                    <div class="progress-bar progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                        <span class="sr-only">60% Complete (inverse)</span>
                                                    </div>
                                                </div>
                                                <p class="text-ellipsis"><i class="fa fa-caret-down"></i> 386 &nbsp;&nbsp; -5<sup>%</sup> <small>Looks not good! try increasing your product</small></p>
                                            </p><!--/help-block-->
                                        </div><!--/panel-body-->
                                    </div><!--/panel overal-orders-->
                                </div><!--/cols-->
                            </div><!--/#system-stats-->


                            <div id="server-stats" class="tab-pane fade">
                                <div class="col-md-4">
                                    <div id="overall-bandwidth" class="panel panel-animated panel-primary bg-primary">
                                        <div class="panel-body">
                                            <div class="panel-actions-fly">
                                                <button data-refresh="#overall-bandwidth" data-error-place="#error-placement" title="refresh" class="btn-panel">
                                                    <i class="glyphicon glyphicon-refresh"></i>
                                                </button><!--/btn-panel-->
                                                <a href="#" title="Go to server stats page" class="btn-panel">
                                                    <i class="glyphicon glyphicon-stats"></i>
                                                </a><!--/btn-panel-->
                                            </div><!--/panel-action-fly-->

                                            <p class="lead">Bandwidth</p><!--/lead as title-->

                                            <p>
                                                <div class="easyPieChart" data-barColor="#232332" data-trackColor="#ecf0f1" data-scaleColor="#ecf0f1" data-percent="16" data-size="120">
                                                    <span>16%</span>
                                                </div>
                                                <p class="text-ellipsis text-center">Bandwidth Usage 120,4 GB / 2 TB</p>
                                            </p>
                                        </div><!--/panel-body-->
                                    </div><!--/panel overal-bandwidth-->
                                </div><!--/cols-->

                                <div class="col-md-4">
                                    <div id="overall-diskspace" class="panel panel-animated panel-success bg-success">
                                        <div class="panel-body">
                                            <div class="panel-actions-fly">
                                                <button data-refresh="#overall-diskspace" data-error-place="#error-placement" title="refresh" class="btn-panel">
                                                    <i class="glyphicon glyphicon-refresh"></i>
                                                </button><!--/btn-panel-->
                                                <a href="#" title="Go to server stats page" class="btn-panel">
                                                    <i class="glyphicon glyphicon-stats"></i>
                                                </a><!--/btn-panel-->
                                            </div><!--/panel-action-fly-->

                                            <p class="lead">Disk Space</p><!--/lead as title-->

                                            <p>
                                                <div class="easyPieChart" data-barColor="#232332" data-trackColor="#ecf0f1" data-scaleColor="#ecf0f1" data-percent="37" data-size="120">
                                                    <span>64%</span>
                                                </div>
                                                <p class="text-ellipsis text-center">File Usage 128,137 / 200,000</p>
                                            </p>
                                        </div><!--/panel-body-->
                                    </div><!--/panel overal-diskspace-->
                                </div><!--/cols-->

                                <div class="col-md-4">
                                    <div id="overall-phisicmem" class="panel panel-animated panel-danger bg-danger">
                                        <div class="panel-body">
                                            <div class="panel-actions-fly">
                                                <button data-refresh="#overall-phisicmem" data-error-place="#error-placement" title="refresh" class="btn-panel">
                                                    <i class="glyphicon glyphicon-refresh"></i>
                                                </button><!--/btn-panel-->
                                                <a href="#" title="Go to server stats page" class="btn-panel">
                                                    <i class="glyphicon glyphicon-stats"></i>
                                                </a><!--/btn-panel-->
                                            </div><!--/panel-action-fly-->

                                            <p class="lead">Physical Memory</p><!--/lead as title-->

                                            <p>
                                                <div class="easyPieChart" data-barColor="#232332" data-trackColor="#ecf0f1" data-scaleColor="#ecf0f1" data-percent="45" data-size="120">
                                                    <span>45%</span>
                                                </div>
                                                <p class="text-ellipsis text-center">Physical Memory Usage 457 MB / 1 GB</p>
                                            </p>
                                        </div><!--/panel-body-->
                                    </div><!--/panel overal-phisicmem-->
                                </div><!--/cols-->
                            </div><!--/#system-stats-->
                        </div><!--/tab-content-->
                    </div><!--/row-->





                    <div class="row">
                        <div class="col-sm-8">
                            <!-- VMAP -->
                            <div class="panel panel-animated panel-default">
                                <div class="panel-heading bg-white">
                                    <div class="panel-actions">
                                        <div class="btn-group">
                                            <button class="btn-panel dropdown-toggle" data-toggle="dropdown">
                                                Change Maps
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul id="changeMapRegion" class="dropdown-menu pull-right">
                                                <li class="active"><a href="#" data-map="world_en">World</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#" data-map="africa_en">Africa</a></li>
                                                <li><a href="#" data-map="asia_en">Asia</a></li>
                                                <li><a href="#" data-map="australia_en">Australia</a></li>
                                                <li><a href="#" data-map="europe_en">Europe</a></li>
                                                <li><a href="#" data-map="north-america_en">North America</a></li>
                                                <li><a href="#" data-map="south-america_en">South America</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#" data-map="dz_fr">Algeria</a></li>
                                                <li><a href="#" data-map="france_fr">France</a></li>
                                                <li><a href="#" data-map="germany_en">Germany</a></li>
                                                <li><a href="#" data-map="russia_en">Russia</a></li>
                                                <li><a href="#" data-map="usa_en">USA</a></li>
                                            </ul>
                                        </div><!--/btn-group-->
                                    </div><!-- /panel-actions -->
                                    <h4 class="panel-title" data-ariginal-title="World Map" id="mapRegion">World Map</h4>
                                </div><!--/panel-heading-->

                                <div class="panel-body">
                                    <div id="vmap" class="vmap" style="height:370px"></div>
                                </div><!--/panel-body-->
                                
                                <ul class="list-group">
                                    <li class="list-group-item" id="legend-region">Summary of World</li>
                                    <li class="list-group-item"><div id="legend-visit" class="badge badge-primary"></div><i class="fa fa-signal"></i> Today Visitor</li>
                                    <li class="list-group-item"><div id="legend-member" class="badge badge-primary"></div><i class="fa fa-users"></i> Members</li>
                                    <li class="list-group-item"><div id="legend-customer" class="badge badge-primary"></div><i class="fa fa-briefcase"></i> Customers</li>
                                    <li class="list-group-item"><div id="legend-online" class="badge badge-primary"></div><i class="fa fa-circle"></i> Online</li>
                                    <li class="list-group-item"><div id="legend-revenue" class="badge badge-primary"></div><i class="fa fa-dollar"></i> Total Revenue</li>
                                </ul><!--/list-group map-legend-->
                            </div><!--/panel-->
                        </div><!--/cols-->


                        <div class="col-sm-4">
                            <div class="panel panel-animated panel-inverse bg-inverse">
                                <div class="panel-body">
                                    <p class="text-lg"><span class="pull-right">64<sup>%</sup></span><i class="fa fa-cloud-download"></i> Downloading...</p>
                                    <div class="progress progress-lg">
                                        <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100" style="width: 64%">
                                            <span class="sr-only">64% Complete (inverse)</span>
                                        </div>
                                    </div>

                                    <p class="text-lg"><span class="pull-right">37<sup>%</sup></span><i class="fa fa-cloud-upload"></i> Uploading...</p>
                                    <div class="progress progress-lg">
                                        <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100" style="width: 37%">
                                            <span class="sr-only">37% Complete (inverse)</span>
                                        </div>
                                    </div>
                                </div><!--/panel-body-->
                            </div><!--/panel-->


                            <div id="dashboard-weather" class="panel panel-animated panel-default bg-danger border-danger border-danger">
                                <div class="panel-heading bg-transparent no-border">
                                    <h3 class="text-center">Whashington (WA)</h3>
                                </div><!--/panel-heading-->

                                <div class="panel-body text-center bordered-bottom border-transparent">
                                    <p class="text-lg">SAT 08/02</p class="text-lg">
                                    <p class="text-64">23&deg; <canvas id="skycons-wind1" width="64" height="64"></canvas></p>
                                </div><!--/panel-body-->

                                <div class="list-group bg-danger">
                                    <a class="list-group-item" href="#">
                                        <canvas class="pull-right" id="skycons-sun" width="16" height="16"></canvas>
                                        <div class="list-group-item-text pull-right">29&deg;</div>
                                        SUN 02/02
                                    </a>
                                    <a class="list-group-item" href="#">
                                        <canvas class="pull-right" id="skycons-snow" width="16" height="16"></canvas>
                                        <div class="list-group-item-text pull-right">15&deg;</div>
                                        MON 03/02
                                    </a>
                                    <a class="list-group-item" href="#">
                                        <canvas class="pull-right" id="skycons-cloudy" width="16" height="16"></canvas>
                                        <div class="list-group-item-text pull-right">26&deg;</div>
                                        TUE 04/02
                                    </a>
                                    <a class="list-group-item" href="#">
                                        <canvas class="pull-right" id="skycons-wind2" width="16" height="16"></canvas>
                                        <div class="list-group-item-text pull-right">24&deg;</div>
                                        WED 05/02
                                    </a>
                                    <a class="list-group-item" href="#">
                                        <canvas class="pull-right" id="skycons-rain" width="16" height="16"></canvas>
                                        <div class="list-group-item-text pull-right">22&deg;</div>
                                        THU 06/02
                                    </a>
                                    <a class="list-group-item" href="#">
                                        <canvas class="pull-right" id="skycons-fog" width="16" height="16"></canvas>
                                        <div class="list-group-item-text pull-right">25&deg;</div>
                                        FRI 07/02
                                    </a>
                                </div><!--/list-group-->
                            </div><!--panel-->
                        </div><!--/cols-->
                    </div><!--/row-->





                    <div class="row">
                        <div class="col-md-6">
                            <form action="" role="form">
                            <div class="panel panel-animated panel-default">
                                <div class="panel-heading bg-white">
                                    <h4 class="panel-title"><i class="fa fa-envelope-o"></i> Quick Mail</h4>
                                </div><!--panel-heading-->

                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="control-label" for="quick-mail-reseiver">To</label>
                                        <input id="quick-mail-reseiver" name="quick-mail-reseiver" type="text" data-input="tags" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="quick-mail-subject">Subject</label>
                                        <input id="quick-mail-subject" name="quick-mail-subject" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <textarea id="quick-mail-content" name="quick-mail-content" class="form-control" data-input="wysihtml5" data-link="false" data-image="false" style="width:100%" rows="12" placeholder="Enter your message ..."></textarea>
                                    </div><!-- /form-group -->
                                </div><!--panel-body-->

                                <div class="panel-footer bg-white bordered-top clearfix">
                                    <div class="pull-right">
                                        <input type="reset" class="btn btn-sm btn-default" value="Cancel" />
                                        <input type="submit" class="btn btn-sm btn-inverse" value="Send Email" />
                                    </div>
                                </div><!--panel-footer-->
                            </div><!--panel-->
                            </form>
                        </div><!--/cols-->

                        <div class="col-md-6">
                            <div class="panel panel-animated panel-default">
                                <div class="panel-heading bg-white">
                                    <div class="panel-actions">
                                        <button id="calendar-viewtoday" class="btn-panel">Today</button>
                                        <button id="calendar-viewmonth" class="btn-panel active">Month</button>
                                        <button id="calendar-viewweek" class="btn-panel">Week</button>
                                        <button id="calendar-viewday" class="btn-panel">Day</button>
                                    </div><!--panel-actions-->
                                    <h4 class="panel-title" id="calendar-viewtitle"><i class="fa fa-spinner fa-spin"></i></h4>
                                </div><!--panel-heading-->

                                <div class="panel-helper-block">
                                    <div class="btn-toolbar" role="toolbar">
                                        <div class="btn-group btn-group-sm pull-right">
                                            <button class="btn btn-default" id="calendar-viewnext">Next</button>
                                            <button class="btn btn-default" id="calendar-viewnextYear">Next Year</button>
                                        </div>
                                        <div class="btn-group btn-group-sm pull-left">
                                            <button class="btn btn-default" id="calendar-viewprevYear">Prev Year</button>
                                            <button class="btn btn-default" id="calendar-viewprev">Prev</button>
                                        </div>
                                    </div>
                                </div><!--/panel-helper-block-->

                                <div class="panel-body">
                                    <div id="calendar" class="table-responsive calendar-inverse"></div>
                                </div><!--panel-body-->
                            </div><!--panel-->
                        </div><!--/cols-->
                    </div><!--/row-->


                    
                    <div class="divider-content">
                        <span></span>
                    </div><!--/divider-content-->


                    
                    <div id="error-placement2"></div>
                    <h3 class="lead"><i class="fa fa-rss"></i> Content Feeds</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div id="contentfeeds1" class="panel panel-animated panel-default">
                                <div class="panel-actions-fly">
                                    <button data-refresh="#contentfeeds1" data-error-place="#error-placement2" title="refresh" class="btn-panel">
                                        <i class="fa fa-refresh"></i>
                                    </button><!--/btn-panel-->
                                    <button data-close="#contentfeeds1" title="close" class="btn-panel">
                                        <i class="fa fa-times"></i>
                                    </button><!--/btn-panel-->
                                </div><!--/panel-action-fly-->

                                <div class="panel-body bordered-bottom">
                                    <div class="no-padding jumbotron bg-inverse">
                                        <div class="tile">
                                            <div class="img-wrapper">
                                                <img class="lazy" data-original="images/dummy/img2.png" alt="">
                                            </div>
                                        </div>
                                        
                                        <div class="jumbotron-text">
                                            <p class="lead">The Ideas to Become a Creative Professionals</p>
                                            <p class="clearfix">
                                                <span class="pull-right">
                                                    <a href="#" class="btn btn-xs btn-inverse btn-rounded">#webDesign</a>
                                                    <a href="#" class="btn btn-xs btn-inverse btn-rounded">#beginner</a>
                                                </span>
                                            </p>
                                        </div>
                                    </div><!--/jumbotron-->

                                    <div class="profile-line clearfix">
                                        <img class="img-circle pull-left" src="images/dummy/uifaces14.jpg" alt="uifaces14" width="46px" width="46px" />
                                        <div class="text-14"><strong>Kathy Reynolds</strong></div>
                                        <div class="text-muted"><small>Share Public Post - a hours ago</small></div>
                                    </div><!--/profile-line-->

                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, dolores facilis maiores minus itaque excepturi.</p>
                                    
                                    <p class="text-muted pull-right"><i class="fa fa-comment"></i> 21 &nbsp;&nbsp;&nbsp; <i class="fa fa-heart"></i> 16</p>
                                </div><!--panel-body-->

                                <div class="panel-body">
                                    <form action="" role="form">
                                        <div class="input-group input-group-in">
                                            <input type="text" class="form-control" placeholder="Write a comment..." />
                                            <span class="input-group-btn">
                                                <span class="fileinput fileinput-new" data-provides="fileinput">
                                                    <button class="btn btn-transparent text-muted btn-file" type="button">
                                                        <i class="fileinput-new fa fa-camera"></i>
                                                        <input type="file" name="fileinput_inline[]">
                                                    </button>
                                                    <button class="btn btn-transparent fileinput-exists text-muted" rel="tooltip-bottom" title="remove file attach" data-dismiss="fileinput"><i class="fa fa-times"></i></button>
                                                </span>
                                            </span>
                                        </div>
                                    </form><!--/form-->
                                </div><!--/panel-body-->
                            </div><!--/panel-->



                            <div id="contentfeeds4" class="panel panel-animated panel-default">
                                <div class="panel-actions-fly">
                                    <button data-refresh="#contentfeeds4" data-error-place="#error-placement2" title="refresh" class="btn-panel">
                                        <i class="fa fa-refresh"></i>
                                    </button><!--/btn-panel-->
                                    <button data-close="#contentfeeds4" title="close" class="btn-panel">
                                        <i class="fa fa-times"></i>
                                    </button><!--/btn-panel-->
                                </div><!--/panel-action-fly-->

                                <div class="panel-body bordered-bottom">
                                    <div class="no-padding jumbotron bg-primary">
                                        <p class="lead">The 20 best Google Chrome extensions for web designers</p>
                                        <p class="clearfix">
                                            <span class="pull-right">
                                                <a href="#" class="btn btn-xs btn-transparent btn-rounded">#chrome</a>
                                                <a href="#" class="btn btn-xs btn-transparent btn-rounded">#tools</a>
                                            </span>
                                        </p>
                                    </div><!--/jumbotron-->

                                    <div class="profile-line clearfix">
                                        <img class="img-circle pull-left" src="images/dummy/uifaces11.jpg" alt="uifaces11" width="46px" width="46px" />
                                        <div class="text-14"><strong>Samantha Jenkins</strong></div>
                                        <div class="text-muted"><small>Share Public Post - Yesterday</small></div>
                                    </div><!--/profile-line-->

                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, dolores facilis maiores minus itaque excepturi.</p>
                                    
                                    <p class="text-muted pull-right"><i class="fa fa-comment"></i> 34 &nbsp;&nbsp;&nbsp; <i class="fa fa-heart"></i> 51</p>
                                </div><!--panel-body-->

                                <div class="panel-body">
                                    <form action="" role="form">
                                        <div class="pull-left margin-right">
                                            <img class="img-circle" src="images/dummy/profile.jpg" alt="profile" width="36px" width="36px" />
                                        </div>
                                        <div class="input-group input-group-in">
                                            <input type="text" class="form-control" placeholder="Write a comment..." />
                                            <span class="input-group-btn">
                                                <span class="fileinput fileinput-new" data-provides="fileinput">
                                                    <button class="btn btn-transparent text-muted btn-file" type="button">
                                                        <i class="fileinput-new fa fa-camera"></i>
                                                        <input type="file" name="fileinput_inline[]">
                                                    </button>
                                                    <button class="btn btn-transparent fileinput-exists text-muted" rel="tooltip-bottom" title="remove file attach" data-dismiss="fileinput"><i class="fa fa-times"></i></button>
                                                </span>
                                            </span>
                                        </div>
                                    </form><!--/form-->
                                </div><!--/panel-body-->
                            </div><!--/panel-->
                        </div><!--/cols-->


                        <div class="col-md-4">
                            <div id="contentfeeds2" class="panel panel-animated panel-default">
                                <div class="panel-actions-fly">
                                    <button data-refresh="#contentfeeds2" data-error-place="#error-placement2" title="refresh" class="btn-panel">
                                        <i class="fa fa-refresh"></i>
                                    </button><!--/btn-panel-->
                                    <button data-close="#contentfeeds2" title="close" class="btn-panel">
                                        <i class="fa fa-times"></i>
                                    </button><!--/btn-panel-->
                                </div><!--/panel-action-fly-->

                                <div class="panel-body bordered-bottom">
                                    <div class="profile-line clearfix">
                                        <img class="img-circle pull-left" src="images/dummy/uifaces19.jpg" alt="uifaces19" width="46px" width="46px" />
                                        <div class="text-14"><strong>Phillip Morrison</strong></div>
                                        <div class="text-muted"><small>Share Exclusive Post - 7:16 AM</small></div>
                                    </div><!--/profile-line-->

                                    <div class="no-padding jumbotron bg-primary">
                                        <p class="lead">Times Designers Are Monitoring Reaction to the Redesign, With Adjustments Possible</p>
                                        <p class="clearfix">
                                            <span class="pull-right">
                                                <a href="#" class="btn btn-xs btn-transparent btn-rounded">#manage</a>
                                                <a href="#" class="btn btn-xs btn-transparent btn-rounded">#workFlow</a>
                                            </span>
                                        </p>
                                    </div><!--/jumbotron-->

                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, dolores facilis maiores minus itaque excepturi.</p>
                                    
                                    <p class="text-muted pull-right"><i class="fa fa-comment"></i> 47 &nbsp;&nbsp;&nbsp; <i class="fa fa-heart"></i> 98</p>
                                </div><!--panel-body-->

                                <div class="panel-body">
                                    <form action="" role="form">
                                        <div class="input-group input-group-in">
                                            <input type="text" class="form-control" placeholder="Write a comment..." />
                                            <span class="input-group-btn">
                                                <span class="fileinput fileinput-new" data-provides="fileinput">
                                                    <button class="btn btn-transparent text-muted btn-file" type="button">
                                                        <i class="fileinput-new fa fa-camera"></i>
                                                        <input type="file" name="fileinput_inline[]">
                                                    </button>
                                                    <button class="btn btn-transparent fileinput-exists text-muted" rel="tooltip-bottom" title="remove file attach" data-dismiss="fileinput"><i class="fa fa-times"></i></button>
                                                </span>
                                            </span>
                                        </div>
                                    </form><!--/form-->
                                </div><!--/panel-body-->
                            </div><!--/panel-->

                            <div id="contentfeeds5" class="panel panel-animated panel-default">
                                <div class="panel-actions-fly">
                                    <button data-refresh="#contentfeeds5" data-error-place="#error-placement2" title="refresh" class="btn-panel">
                                        <i class="fa fa-refresh"></i>
                                    </button><!--/btn-panel-->
                                    <button data-close="#contentfeeds5" title="close" class="btn-panel">
                                        <i class="fa fa-times"></i>
                                    </button><!--/btn-panel-->
                                </div><!--/panel-action-fly-->

                                <div class="panel-body bordered-bottom">
                                    <div class="no-padding jumbotron bg-inverse">
                                        <p class="lead">COMPRESSED DATA; Homing In on 'Intelligent' Web Design</p>
                                        <p class="clearfix">
                                            <span class="pull-right">
                                                <a href="#" class="btn btn-xs btn-transparent btn-rounded">#webDesign</a>
                                            </span>
                                        </p>
                                    </div><!--/jumbotron-->

                                    <div class="profile-line clearfix">
                                        <img class="img-circle pull-left" src="images/dummy/uifaces3.jpg" alt="uifaces3" width="46px" width="46px" />
                                        <div class="text-14"><strong>Aaron James</strong></div>
                                        <div class="text-muted"><small>Share Public Post - Yesterday</small></div>
                                    </div><!--/profile-line-->

                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, dolores facilis maiores minus itaque excepturi.</p>
                                    
                                    <p class="text-muted pull-right"><i class="fa fa-comment"></i> 28 &nbsp;&nbsp;&nbsp; <i class="fa fa-heart"></i> 31</p>
                                </div><!--panel-body-->

                                <div class="panel-body">
                                    <form action="" role="form">
                                        <div class="input-group input-group-in">
                                            <input type="text" class="form-control" placeholder="Write a comment..." />
                                            <span class="input-group-btn">
                                                <span class="fileinput fileinput-new" data-provides="fileinput">
                                                    <button class="btn btn-transparent text-muted btn-file" type="button">
                                                        <i class="fileinput-new fa fa-camera"></i>
                                                        <input type="file" name="fileinput_inline[]">
                                                    </button>
                                                    <button class="btn btn-transparent fileinput-exists text-muted" rel="tooltip-bottom" title="remove file attach" data-dismiss="fileinput"><i class="fa fa-times"></i></button>
                                                </span>
                                            </span>
                                        </div>
                                    </form><!--/form-->
                                </div><!--/panel-body-->
                            </div><!--/panel-->
                        </div><!--/cols-->


                        <div class="col-md-4">
                            <div id="contentfeeds3" class="panel panel-animated panel-default">
                                <div class="panel-actions-fly">
                                    <button data-refresh="#contentfeeds3" data-error-place="#error-placement2" title="refresh" class="btn-panel">
                                        <i class="fa fa-refresh"></i>
                                    </button><!--/btn-panel-->
                                    <button data-close="#contentfeeds3" title="close" class="btn-panel">
                                        <i class="fa fa-times"></i>
                                    </button><!--/btn-panel-->
                                </div><!--/panel-action-fly-->

                                <div class="panel-body bordered-bottom">
                                    <div class="no-padding jumbotron bg-danger">
                                        <p class="lead">Make Your Design Keep Simple and Easy Read</p>
                                        <p class="clearfix">
                                            <span class="pull-right">
                                                <a href="#" class="btn btn-xs btn-transparent btn-rounded">#stilearn</a>
                                                <a href="#" class="btn btn-xs btn-transparent btn-rounded">#clean</a>
                                            </span>
                                        </p>
                                    </div><!--/jumbotron-->

                                    <div class="profile-line clearfix">
                                        <img class="img-circle pull-left" src="images/dummy/uifaces3.jpg" alt="uifaces3" width="46px" width="46px" />
                                        <div class="text-14"><strong>Aaron James</strong></div>
                                        <div class="text-muted"><small>Share Public Post - 6:36 AM</small></div>
                                    </div><!--/profile-line-->

                                    <p class="text-muted pull-right"><i class="fa fa-comment"></i> 8 &nbsp;&nbsp;&nbsp; <i class="fa fa-heart"></i> 12</p>
                                </div><!--panel-body-->

                                <div class="panel-body">
                                    <form action="" role="form">
                                        <div class="pull-left margin-right">
                                            <img class="img-circle" src="images/dummy/profile.jpg" alt="profile" width="36px" width="36px" />
                                        </div>
                                        <div class="input-group input-group-in">
                                            <input type="text" class="form-control" placeholder="Write a comment..." />
                                            <span class="input-group-btn">
                                                <span class="fileinput fileinput-new" data-provides="fileinput">
                                                    <button class="btn btn-transparent text-muted btn-file" type="button">
                                                        <i class="fileinput-new fa fa-camera"></i>
                                                        <input type="file" name="fileinput_inline[]">
                                                    </button>
                                                    <button class="btn btn-transparent fileinput-exists text-muted" rel="tooltip-bottom" title="remove file attach" data-dismiss="fileinput"><i class="fa fa-times"></i></button>
                                                </span>
                                            </span>
                                        </div>
                                    </form><!--/form-->
                                </div><!--/panel-body-->
                            </div><!--/panel-->


                            <div id="contentfeeds6" class="panel panel-animated panel-default">
                                <div class="panel-actions-fly">
                                    <button data-refresh="#contentfeeds6" data-error-place="#error-placement2" title="refresh" class="btn-panel">
                                        <i class="fa fa-refresh"></i>
                                    </button><!--/btn-panel-->
                                    <button data-close="#contentfeeds6" title="close" class="btn-panel">
                                        <i class="fa fa-times"></i>
                                    </button><!--/btn-panel-->
                                </div><!--/panel-action-fly-->

                                <div class="panel-body bordered-bottom">
                                    <div class="profile-line clearfix">
                                        <img class="img-circle pull-left" src="images/dummy/uifaces21.jpg" alt="uifaces21" width="46px" width="46px" />
                                        <div class="text-14"><strong>John Doe</strong></div>
                                        <div class="text-muted"><small>Share Exclusive Post - Yesterday</small></div>
                                    </div><!--/profile-line-->

                                    <div class="no-padding jumbotron bg-warning">
                                        <div class="tile">
                                            <div class="img-wrapper">
                                                <img class="lazy" data-original="images/dummy/img5.png" alt="">
                                            </div>
                                        </div>
                                        <div class="jumbotron-text">
                                            <p class="lead">Technology Tools: Web 2.0 in the Classroom</p>
                                            <p class="clearfix">
                                                <span class="pull-right">
                                                    <a href="#" class="btn btn-xs btn-warning btn-rounded">#tools</a>
                                                    <a href="#" class="btn btn-xs btn-warning btn-rounded">#technology</a>
                                                </span>
                                            </p>
                                        </div>
                                    </div><!--/jumbotron-->

                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, dolores facilis maiores minus itaque excepturi.</p>
                                    
                                    <p class="text-muted pull-right"><i class="fa fa-comment"></i> 87 &nbsp;&nbsp;&nbsp; <i class="fa fa-heart"></i> 163</p>
                                </div><!--panel-body-->

                                <div class="panel-body">
                                    <form action="" role="form">
                                        <div class="input-group input-group-in">
                                            <input type="text" class="form-control" placeholder="Write a comment..." />
                                            <span class="input-group-btn">
                                                <span class="fileinput fileinput-new" data-provides="fileinput">
                                                    <button class="btn btn-transparent text-muted btn-file" type="button">
                                                        <i class="fileinput-new fa fa-camera"></i>
                                                        <input type="file" name="fileinput_inline[]">
                                                    </button>
                                                    <button class="btn btn-transparent fileinput-exists text-muted" rel="tooltip-bottom" title="remove file attach" data-dismiss="fileinput"><i class="fa fa-times"></i></button>
                                                </span>
                                            </span>
                                        </div>
                                    </form><!--/form-->
                                </div><!--/panel-body-->
                            </div><!--/panel-->
                        </div><!--/cols-->
                    </div><!--/row-->



                    <div id="content-feeds"></div>
                    <p class="text-center">
                        <a data-ajax="#content-feeds" data-scripts="data-sample/feeds-content.js" href="data-sample/feeds-content.html" data-max-page="5" data-loading-text="<i class='fa fa-spin fa-spinner'></i> Loading..." class="btn btn-sm btn-cloud">Load more feeds...</a>
                    </p>