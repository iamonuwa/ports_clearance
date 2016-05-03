<?php $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');?>
<section class="page-header page-header-block nm">
               
            </section>
            <div class="clearfix"></div>
            <section class="section" style="margin-bottom: 66px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-header text-center">
                                <h1 class="section-title font-alt mb25">Login to your Account</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                           
                            <form class="panel no-border mb0" name="form-login" method="POST" action="<?= base_url('login');?>">
                                <div class="panel-body">
                                <?php if($this->session->flashdata('msg') != ''){?>
                                    <div class="alert alert-warning">
                                        <span class="semibold"><?= $this->session->flashdata('msg');?>
                                    </div>
                                    <?php }?>
                                    <div class="form-group">
                                        <div class="form-stack has-icon pull-left">
                                            <input name="identity" type="text" class="form-control input-lg" placeholder="Username / email">
                                            <i class="ico-user2 form-control-icon"></i>
                                        </div>
                                        <div class="form-stack has-icon pull-left">
                                            <input name="password" type="password" class="form-control input-lg" placeholder="Password">
                                            <i class="ico-lock2 form-control-icon"></i>
                                        </div>
                                    </div>
                                    <div id="error-container"class="mb15"></div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="checkbox custom-checkbox">  
                                                    <input type="checkbox" name="remember" id="remember" value="1">  
                                                    <label for="remember">&nbsp;&nbsp;Remember me</label>   
                                                </div>
                                            </div>
                                            <div class="col-xs-6 text-right">
                                                <a href="javascript:void(0);">Lost password?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group nm">
                                        <button type="submit" class="btn btn-block btn-primary"><span class="semibold">Login</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

<?php $this->load->view('frontend/template/footer');?>