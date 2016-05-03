<?php $this->load->view('backend/template/header');?>
 <section id="main" role="main">
            <section class="container">
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4">
                        <div class="text-center" style="margin-bottom:40px;">
                            <span class="logo-text inverse"></span>
                            <br>
                        </div>
                            <h5 class="semibold text-muted mt-5 text-center">Login to your account.</h5>

                        <form class="panel" name="form-login" method="POST" action="<?= base_url('login');?>">
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
                                            <div class="col-xs-5">
                                                <div class="checkbox custom-checkbox">  
                                                    <input type="checkbox" name="remember" id="remember" value="1">  
                                                    <label for="remember">&nbsp;Remember me</label>   
                                                </div>
                                            </div>
                                            <div class="col-xs-7 text-right">
                                                Lost password? Contact Administrator
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group nm">
                                        <button type="submit" class="btn btn-block btn-primary"><span class="semibold">Login</span></button>
                                    </div>
                            </div>
                        </form>
                        <hr>

                    </div>
                </div>
            </section>
        </section>

<?php $this->load->view('backend/template/footer');?>