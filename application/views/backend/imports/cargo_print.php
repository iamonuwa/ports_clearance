<html class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Adminre - backend</title>
        <meta name="author" content="pampersdry.info">
        <meta name="description" content="Adminre is a clean and flat backend and frontend theme build with twitter bootstrap">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url('public_html/image/touch/apple-touch-icon-144x144-precomposed.png');?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url('public_html/image/touch/apple-touch-icon-114x114-precomposed.png');?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url('public_html/image/touch/apple-touch-icon-72x72-precomposed.png');?>">
        <link rel="apple-touch-icon-precomposed" href="<?= base_url('public_html/image/touch/apple-touch-icon-57x57-precomposed.png');?>">
        <link rel="shortcut icon" href="<?= base_url('public_html/image/favicon.ico')?>">
        <!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        <!-- Plugins stylesheet : optional -->
        <!--/ Plugins stylesheet : optional -->

        <!-- Application stylesheet : mandatory -->
        <link rel="stylesheet" href="<?= base_url('public_html/css/bootstrap.css');?>">
        <link rel="stylesheet" href="<?= base_url('public_html/css/layout.css');?>">
        <link rel="stylesheet" href="<?= base_url('public_html/css/uielement.css');?>">
<body>
<section id="main" role="main">
            <!-- START Template Container -->
            <div class="container-fluid">
                <!-- START row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-layout">
                            
                            <div class="col-lg-9 panel widget">
                                <!-- panel body -->
                                <div class="panel-body text-right">
                                    <h4 class="semibold nm">{{Profile}}</h4>
                                    <p class="text-muted nm">{{Company Name}}</p>
                                </div>
                                <!-- panel body -->
                                <hr class="nm">
                                <!-- panel body -->
                                <div class="panel-body">
                                    <ul class="list-table">
                                        <li class="text-left">
                                            <p class="semibold text-muted nm">{{Date}}</p>
                                        </li>
                                        <li class="text-right">
                                            <p class="semibold text-primary nm">Invoice ID : #{{ID Number}}</p>
                                        </li>
                                    </ul>
                                </div>
                                <!-- panel body -->
                                <!-- panel table -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th width="5%"></th>
                                            <th>Task Description</th>
                                            <th width="15%" class="text-center">Rate</th>
                                            <th width="15%" class="text-center">Hours</th>
                                            <th width="15%" class="text-center">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="valign-top text-center">1.</td>
                                            <td>
                                                <h5 class="semibold mt0 mb5">Website design &amp; development</h5>
                                                <span class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</span>
                                            </td>
                                            <td class="valign-top text-center"><span class="bold">$50</span></td>
                                            <td class="valign-top text-center"><span class="bold">50</span></td>
                                            <td class="valign-top text-center"><span class="text-primary bold">$1500</span></td>
                                        </tr>
                                         </tbody>
                                </table>
                                <!--/ panel table -->
                                <!-- panel footer -->
                                <div class="panel-footer">
                                    <ul class="list-table pa10">
                                        <li>
                                            <h5 class="semibold nm">SUB TOTAL</h5>
                                        </li>
                                        <li class="text-right">
                                            <h3 class="semibold nm">$10,140.00</h3>
                                        </li>
                                    </ul>
                                </div>
                                <!-- panel footer -->
                                <!-- panel footer -->
                                <div class="panel-footer">
                                    <ul class="list-table pa10">
                                        <li>
                                            <h5 class="semibold nm">TAXES &amp; FEES</h5>
                                        </li>
                                        <li class="text-right">
                                            <h3 class="semibold nm">$60.00</h3>
                                        </li>
                                    </ul>
                                </div>
                                <!-- panel footer -->
                                <!-- panel footer -->
                                <div class="panel-footer">
                                    <ul class="list-table pa10">
                                        <li>
                                            <h5 class="semibold nm">TOTAL PAYABLE</h5>
                                        </li>
                                        <li class="text-right">
                                            <h3 class="semibold nm text-success">$10,200.00</h3>
                                        </li>
                                    </ul>
                                </div>
                                <!-- panel footer -->
                            </div>
                            <!--/ Left / Bottom Side -->
                        </div>
                    </div>
                </div>
                <!--/ END row -->

                <hr><!-- horizontal line -->

                <!-- START row -->
                <div class="row">
                    <div class="col-lg-12">
                        <p class="text-muted text-center mb0"><strong>Note: </strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p class="text-center"><a href="#" class="text-center">www.site.com</a></p>
                    </div>
                </div>
                <!--/ END row -->
            </div>
            <!--/ END Template Container -->
        </section>
<?php $this->load->view('backend/template/footer');?>