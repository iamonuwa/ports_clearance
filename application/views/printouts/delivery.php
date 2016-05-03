<html class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= $this->frontend. ' - '. $this->title;?></title>
        <meta name="author" content="pampersdry.info">
        <meta name="description" content="Adminre is a clean and flat backend and frontend theme build with twitter bootstrap">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url('public_html/image/touch/apple-touch-icon-144x144-precomposed.png');?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url('public_html/image/touch/apple-touch-icon-114x114-precomposed.png');?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url('public_html/image/touch/apple-touch-icon-72x72-precomposed.png');?>">
        <link rel="apple-touch-icon-precomposed" href="<?= base_url('public_html/image/touch/apple-touch-icon-57x57-precomposed.png');?>">
        <link rel="shortcut icon" href="<?= base_url('public_html/image/favicon.ico');?>">
        <link rel="stylesheet" href="<?= base_url('public_html/css/bootstrap.css');?>">
        <link rel="stylesheet" href="<?= base_url('public_html/css/layout.css');?>">
        <link rel="stylesheet" href="<?= base_url('public_html/css/uielement.css');?>">
        <script type="text/javascript" src="<?= base_url('public_html/plugins/modernizr/js/modernizr.js');?>"></script>
    </head>
    <body>
        <section id="main" role="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-layout">
                            <div class="col-lg-3 panel widget valign-top pt15">
                                <ul class="list-unstyled text-center pa15">
                                    <li>
                                        <img class="img-circle img-bordered" src="<?= base_url('public_html/image/logo/logo.jpg');?>" alt="" width="90px" height="90px">
                                    </li>
                                    <li>
                                        <p class="nm">Nigeria Ports Authority</p>
                                        <br/>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-9 panel widget">
                            <div class="panel-body">
                                <div class="row">
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-6 text-right">
                                    <h4 class="semibold nm"><?= $user->first_name.' '.$user->last_name.' '. $user->other_name;?></h4>
                                    <p class="text-muted nm"><?= $user->company_name;?></p>
                                    <p class="text bold">#<?= $container['container_name'];?></p>
                                </div>
                                </div>
                            </div>
                                <hr class="nm">

                                 <h2 class="text-muted nm text-center">Delivery Order</h2>
                                <hr class="nm">

                                <div class="panel-body">
                                    <div class="row">    
                                        <div class="col-md-4">
                                    </div>

                                </div>

                                <div class="panel-footer">
                                    <ul class="list-table pa10">
                                        <li>
                                            <h2 class="semibold nm"><?= $container['name'];?></h2>
                                        </li>
                                    </ul>
                                </div>
                                
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript" src="<?= base_url('public_html/js/vendor.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('public_html/js/core.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('public_html/js/backend/app.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('public_html/js/backend/pages/invoice-print.js');?>"></script>
    </body>
</html>

