<?php

if(!isset($_SERVER['HTTP_X_PJAX'])){

    $content = basename($_SERVER['SCRIPT_NAME']);

    $_SERVER['HTTP_X_PJAX'] = true;
    include 'stilearn.base.template.php';
    die();
}

?>
                    <!-- TOOLTIPS AND POPOVER
                    ================================================== -->
                    <div class="row">
                        <div class="col-md-12" data-toggle="sortable-widget">
                        <!-- TOOLTIPS AND POPOVER -->
                            <div id="panel-toolpop" class="panel panel-default sortable-widget-item">
                                <div class="panel-heading">
                                    <div class="panel-actions">
                                        <button data-refresh="#panel-toolpop" title="refresh" class="btn-panel">
                                            <i class="fa fa-refresh"></i>
                                        </button>
                                        <button data-expand="#panel-toolpop" title="expand" class="btn-panel">
                                            <i class="fa fa-expand"></i>
                                        </button>
                                        <button data-collapse="#panel-toolpop" title="collapse" class="btn-panel">
                                            <i class="fa fa-caret-down"></i>
                                        </button>
                                        <button data-close="#panel-toolpop" title="close" class="btn-panel">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div><!-- /panel-actions -->
                                    <h3 class="panel-title sortable-widget-handle">Tooltips & Popovers</h3>
                                </div><!-- /panel-heading -->

                                <div class="panel-body bordered-bottom">
                                    <p>The tooltip plugin generates content and markup on demand, and by default places tooltips after their trigger element. Activate Tooltip on any element using <code>rel=&quot;tooltip&quot;</code>, for placement just add <code>tooltip-right, tooltip-bottom or tooltip-left</code> to <code>rel</code> value.</p>
                                    <p>Or you can use <code>data-toggle=&quot;tooltip&quot;</code> to activate tooltip. Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-animation=""</code> (View <a target="_blank" href="http://getbootstrap.com/javascript/#tooltips">Bootstrap Tooltip docs</a>).</p>
                                    <div class="callout callout-info">
                                        <h4>Tooltips on disabled elements require wrapper elements</h4>
                                        <p>To add a tooltip to a <code>disabled</code> or <code>.disabled</code> element, put the element inside of a <code>&lt;div&gt;</code> and apply the tooltip to that <code>&lt;div&gt;</code> instead.</p>
                                    </div>
                                    <p class="text-muted"><strong>Tooltip directions</strong></p>
                                    <p class="text-center">
                                        <button type="button" class="btn btn-default" rel="tooltip-left" title="Tooltip on left">Tooltip on left</button>
                                        <button type="button" class="btn btn-default" rel="tooltip" title="Tooltip on top">Tooltip on top</button>
                                        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
                                        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
                                    </p>
                                </div><!-- /panel-body -->

                                <div class="panel-body">
                                    <h4>Popover</h4>
                                    <p>Add small overlays of content, like those on the iPad, to any element for housing secondary information.</p>
                                    <div class="callout callout-info">
                                        <h4>Popovers on disabled elements require wrapper elements</h4>
                                        <p>To add a popover to a <code>disabled</code> or <code>.disabled</code> element, put the element inside of a <code>&lt;div&gt;</code> and apply the popover to that <code>&lt;div&gt;</code> instead.</p>
                                    </div>
                                    <p>Available for contextual mode by adding <code>data-context="primary"</code> or other value (success, info, warning, danger and inverse)</p>
                                    <p class="text-muted"><strong>Popover</strong></p>
                                    <p class="text-center">
                                        <button type="button" class="btn btn-default" rel="popover-left" data-trigger="hover" title="Default context" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                            Default
                                        </button>
                                        <button type="button" class="btn btn-primary" rel="popover" data-context="primary" data-trigger="hover" title="Primary context" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                            Primary
                                        </button>
                                        <button type="button" class="btn btn-success" rel="popover-bottom" data-context="success" data-trigger="hover" title="Success context" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                            Success
                                        </button>
                                        <button type="button" class="btn btn-info" rel="popover" data-context="info" data-trigger="hover" title="Info context" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                            Info
                                        </button>
                                        <button type="button" class="btn btn-warning" data-toggle="popover" data-context="warning" data-placement="bottom" data-trigger="hover" title="Warning context" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                            Warning
                                        </button>
                                        <button type="button" class="btn btn-danger" data-toggle="popover" data-context="danger" data-placement="top" data-trigger="hover" title="Danger context" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                            Danger
                                        </button>
                                        <button type="button" class="btn btn-inverse" data-toggle="popover" data-context="inverse" data-placement="bottom" data-trigger="hover" title="Inverse context" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                            Inverse
                                        </button>
                                        <button type="button" class="btn btn-cloud" data-toggle="popover" data-context="inverse" data-placement="right" title="Inverse context" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                            Click me
                                        </button>
                                    </p>
                                </div><!-- /panel-body -->
                            </div><!-- /panel-toolpop -->
                        </div><!--/cols -->
                    </div><!--/row -->