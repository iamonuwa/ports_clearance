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
                           <button class="btn btn-lg btn-primary push-5-r push-10" type="button"  data-toggle="modal" data-target="#delivery_order"> Prepare Export Tally</button>
                        </div>
                          </div>
                          <br>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?= $this->title;?></h3>
                            </div>
                            <table class="table table-striped" id="zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Container ID</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php foreach ($tally as $key => $value):?>
                                  <tr>
                                    <td><?= $value['container_id'];?></td>
                                    <td><?= $value['status'];?></td>
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

        <div class="modal fade" id="delivery_order" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?= $this->title;?></h4>
      </div>
      <form method="POST" action="<?= base_url('admin/exports/export_tally');?>">
      <div class="modal-body">
      <div class="row">
          <div class="col-md-12">
            <div>
              <label for="container_id">
               Container ID
              </label>
                <select name="container_id" class="form-control">
                  <?php foreach ($container as $key => $value):?>
                <option value="<?= $value['container_name'];?>"><?= $value['container_name'];?></option>
                  <?php endforeach;?>
                </select>
                <br>
                <label for="status">
                Status
              </label>
                <select name="status" class="form-control">
                    <option value="Pending">Pending</option>
                    <option value="Cleared">Cleared</option>
                    <option value="Not Cleared">Not Cleared</option>
                </select>
                <br>
            </div>
          </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" value="Prepare Export Tally">
      </div>
      </form>
    </div>
  </div>
</div>
<?php $this->load->view('backend/template/footer');?>