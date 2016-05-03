<?php $this->load->view('backend/template/header');
$this->load->view('backend/template/navbar');
$this->load->view('backend/template/sidebar');
?>
 <section id="main" role="main">
            <div class="container-fluid">
<div class="row">
                    <div class="col-md-12">
                        <form class="panel panel-color-top panel-default form-horizontal form-bordered" action="" data-parsley-validate>
                            <div class="panel-heading">
                                <h3 class="panel-title">Preview Profile</h3>
                            </div>               
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Firstname</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="first_name" value="<?= $user->first_name;?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Lastname</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="last_name" class="form-control" value="<?= $user->last_name;?>">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Othername</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="other_name" value="<?= $user->other_name;?>" class="form-control">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Email Address</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="email" value="<?= $user->email;?>" class="form-control">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Phone Number</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="phone" value="<?= $user->phone;?>" class="form-control">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Company Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="company" value="<?= $user->company_name;?>" class="form-control">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="address" value="<?= $user->address;?>" class="form-control">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Last Login</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="last_login" value="<?= $user->last_login;?>" class="form-control">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="panel-footer">
                                <button type="submit" class="btn btn-success">Modify</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
                </section>
<?php
$this->load->view('backend/template/footer');?>