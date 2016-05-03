 <?php $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/template/sidebar');?>

                        <div class="col-md-9"> 
                        <div class="box-footer clearfix text-right">
                        <div class="btn-group">
                           <button class="btn btn-lg btn-primary push-5-r push-10" type="button"  data-toggle="modal" data-target="#myModal"> Apply For Bill of Entry</button>
                        </div>
                          </div>
                          <br>
                            <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Transaction Table </h3>
                            </div>
                            <table class="table table-striped" id="zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Container ID</th>
                                        <th>Participant</th>
                                        <th>Ship Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($bill_of_entry as $key => $value): ?>
                                    <tr>
                                      <td><?= $value['container_id'];?></td>
                                      <td><?= $this->aauth->get_user($value['user_id'])->first_name. ' ' .$this->aauth->get_user($value['user_id'])->last_name;?></td>
                                      <td><?= $value['ship_name'];?></td>
                                      <td><?= $value['status'];?></td>
                                      <td> <a href="<?= base_url('output/cargo/'.$value['container_id']);?>"> Print Cargo Pass</a> | <a href="<?= base_url('output/delivery/'.$value['container_id']);?>"> Print Delivery Order</a></td>
                                    </tr>
                                  <?php endforeach;?>
                                </tbody>
                            </table>
                
                </div>
                        </div>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Apply for Bill of Entry</h4>
      </div>
      <form method="POST" action="<?= base_url('import/bill_of_entry/index');?>">
      <div class="modal-body">
      <div class="row">
          <div class="col-md-12">
            <div>
              <label for="container_id">
                Container ID
              </label>
                <input type="text" class="form-control" name="container_id" placeholder="Container ID" />
                <label for="ship_name">
                Ship Name
              </label>
                <input type="text" class="form-control" name="ship_name" placeholder="Ship Name" />
              <label for="quantity">
                Quantity
              </label>
                <input type="text" class="form-control" name="quantity" placeholder="Quantity" />
              <label for="weight">
                Weight
              </label>
                <input type="text" class="form-control" name="weight" placeholder="Weight" />
              <label for="ship_desc">
                Ship Description
              </label>
              <textarea class="form-control" name="ship_desc"></textarea>
            </div>
          </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" value="Apply">
      </div>
      </form>
    </div>
  </div>
</div>
                            
<?php
$this->load->view('frontend/template/footer');?>