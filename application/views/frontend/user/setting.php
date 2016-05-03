 <?php $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/template/sidebar');?>
                        <div class="col-md-9">
                            <article class="panel panel-minimal overflow-hidden mb0">
                                <h3 class="section-title font-alt mt0">My Account Details</h3>
                                 <form class="panel no-border nm" method="POST" name="form" action="<?= base_url('accounts/update');?>">
                                <ul class="list-table pa15">
                                    <li>
                                       <?php if($this->session->flashdata('msg') != ''){?>
                                    <div class="alert alert-warning">
                                        <span class="semibold"><?= $this->session->flashdata('msg');?>
                                    </div>
                                    <?php } elseif($this->session->flashdata('success') != '') {?>
                                    <div class="alert alert-success">
                                        <span class="semibold"><?= $this->session->flashdata('success');?>
                                    </div>
                                    <?php }?>
                                    </li>
                                     </ul>
                                <div class="panel-body">
                                    <div class="row">
                                    <div class="form-group">
                                      <div class="col-md-12">
                                      	<label for="first_name">Firstname: </label>
                                        <input type="text" class="form-control" name="first_name" value="<?= $this->aauth->get_user()->first_name;?>">
                                      </div>
                                      <div class="col-md-12">
                                      	<label for="last_name">Lastname: </label>
                                        <input type="text" class="form-control" name="last_name" value="<?= $this->aauth->get_user()->last_name;?>">
                                      </div>
                                      <div class="col-md-12">
                                      	<label for="other_name">Othername: </label>
                                        <input type="text" class="form-control" name="other_name" value="<?= $this->aauth->get_user()->other_name;?>">
                                      </div>
                                      <div class="col-md-12">
                                      	<label for="company">Company: </label>
                                        <input type="text" class="form-control" name="company" value="<?= $this->aauth->get_user()->company_name;?>">
                                      </div>
                                      <div class="col-md-12">
                                      	<label for="username">Username: </label>
                                        <input type="text" class="form-control" name="username" value="<?= $this->aauth->get_user()->name;?>">
                                      </div>
                                      <div class="col-md-12">
                                      	<label for="phone">Phone Number: </label>
                                        <input type="tel" class="form-control" name="phone" value="<?= $this->aauth->get_user()->phone;?>">
                                      </div>
                                      <div class="col-md-12">
                                      	<label for="address">Address: </label>
                                        <input type="text" class="form-control" name="address" value="<?= $this->aauth->get_user()->address;?>">
                                      </div>

                                    </div>
                                    <br>
                                    <div class="col-md-12">
                                      <a href="javascript:void(0);" data-toggle="modal" data-target="#password">Reset Password</a>
                                      </div>
                                     </div>
                                <div class="panel-footer">
                                    <button type="submit" class="btn btn-block btn-lg btn-primary"><span class="semibold">Update</span></button>
                                </div>
                            </form>
                            </article>
                          
<div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Change Password</h4>
      </div>
      <form method="POST" action="<?= base_url('accounts/password');?>">
      <div class="modal-body">
      <div class="row">
          <div class="col-md-12">
            <div>
              <label for="old_password">
                Old Password
              </label>
                <input type="password" class="form-control" name="old_password" placeholder="Old Password" />
                 <label for="new_password">
                New Password
              </label>
                <input type="password" class="form-control" name="new_password" placeholder="New Password" />
                 <label for="c_new_password">
                Confirm New Password
              </label>
                <input type="password" class="form-control" name="c_new_password" placeholder="Confirm New Password" />
             </div>
          </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" value="Update Password">
      </div>
      </form>
    </div>
  </div>
</div>
<?php
$this->load->view('frontend/template/footer');?>