<?php

if(!isset($_SERVER['HTTP_X_PJAX'])){

    $content = basename($_SERVER['SCRIPT_NAME']);

    $_SERVER['HTTP_X_PJAX'] = true;
    include 'stilearn.base.template.php';
    die();
}

?>
                    <!-- FORM VALIDATE
                    ================================================== -->
                    <!-- Form Validate -->
                    <div id="panel-fvalidate" class="panel panel-default sortable-widget-item">
                        <div class="panel-heading">
                            <div class="panel-actions">
                                <button data-refresh="#panel-fvalidate" title="refresh" class="btn-panel">
                                    <i class="fa fa-refresh"></i>
                                </button>
                                <button data-expand="#panel-fvalidate" title="expand" class="btn-panel">
                                    <i class="fa fa-expand"></i>
                                </button>
                                <button data-collapse="#panel-fvalidate" title="collapse" class="btn-panel">
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <button data-close="#panel-fvalidate" title="close" class="btn-panel">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div><!-- /panel-actions -->
                            <h3 class="panel-title">Form Validate</h3>
                        </div><!-- /panel-heading -->

                        <div class="panel-body">
                            <p>Basically use with <code>data-validate="form"</code> then you define validate elements via attributes.</p>
                            <form role="form" data-validate="form" class="form-horizontal form-bordered">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="cname">Name (required, at least 2 characters)</label>
                                    <div class="col-sm-5">
                                        <input type="text" id="cname" name="cname" class="form-control" minlength="2" required="">
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="cemail">E-Mail (required)</label>
                                    <div class="col-sm-5">
                                        <input type="email" id="cemail" name="cemail" class="form-control" required="">
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="curl">URL (optional)</label>
                                    <div class="col-sm-5">
                                        <input type="url" id="curl" name="curl" class="form-control">
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="ccomment">Your comment (required)</label>
                                    <div class="col-sm-5">
                                        <textarea id="ccomment" name="ccomment" class="form-control autogrow" required=""></textarea>
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-5">
                                        <input class="btn btn-primary" type="submit" value="Submit Please">
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                            </form><!--/form-->
                        </div><!-- /panel-body -->
                    </div><!-- /panel-fvalidate -->




                    <!-- Form Validate custom -->
                    <div id="panel-fvalidate2" class="panel panel-default sortable-widget-item">
                        <div class="panel-heading">
                            <div class="panel-actions">
                                <button data-refresh="#panel-fvalidate2" title="refresh" class="btn-panel">
                                    <i class="fa fa-refresh"></i>
                                </button>
                                <button data-expand="#panel-fvalidate2" title="expand" class="btn-panel">
                                    <i class="fa fa-expand"></i>
                                </button>
                                <button data-collapse="#panel-fvalidate2" title="collapse" class="btn-panel">
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <button data-close="#panel-fvalidate2" title="close" class="btn-panel">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div><!-- /panel-actions -->
                            <h3 class="panel-title">Manual Validate</h3>
                        </div><!-- /panel-heading -->

                        <div class="panel-body">
                            <form role="form" id="signupForm" class="form-horizontal form-bordered">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="firstname">Firstname</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <span class="input-group-addon text-silver"><i class="fa fa-user"></i></span>
                                            <input type="text" id="firstname" name="firstname" class="form-control">
                                        </div>
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="lastname">Lastname</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <span class="input-group-addon text-silver"><i class="fa fa-user"></i></span>
                                            <input type="text" id="lastname" name="lastname" class="form-control">
                                        </div>
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="username">Username</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <span class="input-group-addon text-silver">@</span>
                                            <input type="text" id="username" name="username" class="form-control">
                                        </div>
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="password">Password</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <span class="input-group-addon text-silver"><i class="fa fa-circle"></i></span>
                                            <input type="password" id="password" name="password" class="form-control">
                                        </div>
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="confirm_password">Confirm password</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <span class="input-group-addon text-silver"><i class="fa fa-circle"></i></span>
                                            <input type="password" id="confirm_password" name="confirm_password" class="form-control">
                                        </div>
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="email">Email</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <span class="input-group-addon text-silver"><i class="fa fa-envelope-o"></i></span>
                                            <input type="text" id="email" name="email" class="form-control">
                                        </div>
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-5">
                                        <div class="nice-checkbox">
                                            <input class="checkbox-o" type="checkbox" id="agree" name="agree">
                                            <label for="agree">Please agree to our policy</label>
                                        </div>
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-5">
                                        <input class="btn btn-inverse" type="submit" value="Sign Up Me">
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                            </form><!--/form-->
                        </div><!-- /panel-body -->
                    </div><!-- /panel-fvalidate2 -->