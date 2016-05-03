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
                           <button class="btn btn-lg btn-primary push-5-r push-10" type="button"  data-toggle="modal" data-target="#delivery_order"> Add Delivery Order</button>
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
                                        <th>Shipping Company ID</th>
                                        <th>Container ID</th>
                                        <th>Delivery Terminal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                      <?php foreach ($delivery_order as $key => $value):?>
                                        <tr>
                                          <td><?= $value['company_id'];?></td>
                                          <td><?= $value['container_id'];?></td>
                                          <td><?= $value['delivery_terminal'];?></td>
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
      <form method="POST" action="<?= base_url('admin/imports/delivery_order');?>">
      <div class="modal-body">
      <div class="row">
          <div class="col-md-12">
            <div>
              <label for="shipping_company_id">
                Shipping Company ID
              </label>
                <input type="text" class="form-control" name="shipping_company_id" placeholder="Shipping Company ID" />
                <br>

              <label for="ship_name">
                Ship Name
              </label>
                <input type="text" class="form-control" name="ship_name" placeholder="Ship Name" />
                <br>
                <label for="arrival_date">
                Arrival Date
              </label>
                <input type="text" class="form-control" name="arrival_date" placeholder="Arrival Date" />
                <br>
              <label for="container_id">
               Container ID
                </label>
                  <select class="form-control" name="container_id">
                    <?php foreach ($container as $key => $value):?>
                      <option value="<?= $value['container_id'];?>"><?= $value['container_id'];?></option>
                    <?php endforeach;?>
                  </select>
                <br>
                <label for="exporter">
                Exporter
              </label>
                <input type="text" class="form-control" name="exporter" placeholder="Exporter" />
                <br>
                <label for="deliver_to">
                Deliver to
              </label>
                <select name="deliver_to" class="form-control">
                    <option value="FOT">FOT</option>
                    <option value="FLT">FLT</option>
                </select>
                <br>
            </div>
          </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" value="Save">
      </div>
      </form>
    </div>
  </div>
</div>
<?php $this->load->view('backend/template/footer');?>