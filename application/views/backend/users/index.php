<?php $this->load->view('backend/template/header');
$this->load->view('backend/template/navbar');
$this->load->view('backend/template/sidebar');
?>
<section id="main" role="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <div class="box-footer clearfix text-right">
                        <div class="btn-group">
                           <button class="btn btn-lg btn-primary push-5-r push-10" type="button"  data-toggle="modal" data-target="#new_user"> Add New User</button>
                        </div>
                          </div>
                          <br>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Active Users</h3>
                            </div>
                            <table class="table table-striped" id="zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Othername</th>
                                        <th>Email Address</th>
                                        <th>Username</th>
                                        <th>Access Level</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php foreach ($users as $key => $value):?>
                                    <tr>
                                          <td><?= $value->first_name;?></td>
                                          <td><?= $value->last_name;?></td>
                                          <td><?= $value->other_name;?></td>
                                          <td><?= $value->email;?></td>
                                          <td><?= $value->name;?></td>
                                          <?php foreach ($this->aauth->get_user_groups($value->id) as $key => $groups):?>
                                          <td><?= $groups->name;?></td>
                                        <?php endforeach;?>
                                           <td><a href="<?= base_url('admin/users/banned/'.$value->id);?>" class="btn btn-danger"> Deactivate </a> <a href="<?= base_url('admin/users/preview/'.$value->id);?>" class="btn btn-primary"> Preview </a>
                                    </tr>
                                        <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
               
            </div>
            <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
        </section>

<div class="modal fade" id="new_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?= $this->title;?></h4>
      </div>
      <form method="POST" action="<?= base_url('admin/users/index');?>">
      <div class="modal-body">
      <div class="row">
          <div class="col-md-12">
            <div>
              <label for="first_name">
                Firstname
              </label>
                <input type="text" class="form-control" name="first_name" placeholder="Firstname" />
             <br>

              <label for="last_name">
                Lastname
              </label>
                <input type="text" class="form-control" name="last_name" placeholder="Lastname" />
             <br>


              <label for="other_name">
                Othername
              </label>
                <input type="text" class="form-control" name="other_name" placeholder="Othername" />
             <br>


              <label for="email_address">
                Email Address
              </label>
                <input type="text" class="form-control" name="email_address" placeholder="Email Address" />
             <br>


              <label for="loginID">
                Login ID
              </label>
                <input type="text" class="form-control" name="loginID" placeholder="Login ID" />
             <br>

             <label for="access_level">
                Access Level
              </label>
              <select name="access_level" class="form-control">
              <?php foreach ($this->aauth->list_groups() as $key => $value):?>
                  <option value="<?= $value->name;?>"><?= $value->name;?></option>
              <?php endforeach;?>
              </select>
            </div>
          </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" value="Create Account">
      </div>
      </form>
    </div>
  </div>
</div>

<?php $this->load->view('backend/template/footer');?>