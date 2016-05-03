<?php $this->load->view('backend/template/header');
$this->load->view('backend/template/navbar');
$this->load->view('backend/template/sidebar');
?>
<section id="main" role="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?= $this->title;?></h3>
                            </div>
                            <table class="table table-striped" id="zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Othername</th>
                                        <th>Email Address</th>
                                        <th>Username</th>
                                        <th>Company</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
               
            </div>
            <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
        </section>
<?php $this->load->view('backend/template/footer');?>