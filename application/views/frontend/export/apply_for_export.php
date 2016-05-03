 <?php $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/template/sidebar');?>

                        <div class="col-md-9"> 
                        <div class="box-footer clearfix text-right">
				                <div class="btn-group">
				                   <button class="btn btn-lg btn-primary push-5-r push-10" type="button"  data-toggle="modal" data-target="#myModal"> Apply for Export</button>
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
                                        <th>Container Name</th>
                                        <th>Location</th>
                                        <th>Date Applied</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($container as $key => $value):?>
                                      <tr>
                                        <td><?= $value['container_name'];?></td>
                                        <td><?= $value['location'];?></td>
                                        <td><?= $value['last_update'];?></td>
                                        <td> <a href="<?= base_url('output/debit/'.$value['container_name']);?>"> Print Debit Note</a> | <a href="<?= base_url('output/index/'.$value['container_name']);?>"> Print Export Tally</a></td>
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
        <h4 class="modal-title" id="myModalLabel">Apply for Export</h4>
      </div>
      <form method="POST" action="<?= base_url('export/apply_for_export/index');?>">
      <div class="modal-body">
      <div class="row">
      		<div class="col-md-12">
      			<div>
      				<label for="container_name">
      					Container Name
      				</label>
      					<input type="text" class="form-control" name="container_name" placeholder="Container Name" />
      				<label for="ship_name">
                Ship Name
              </label>
                <input type="text" class="form-control" name="ship_name" placeholder="Ship Name" />
              <label for="container_size">
                Container Size
              </label>
                <input type="number" class="form-control" name="container_size" placeholder="Container Size" />
              <label for="container_destination">
      					Container Destination
      				</label>
      				<textarea class="form-control" name="container_destination" placeholder="Container Destination"></textarea>
      			<label for="services">
                Services
              </label>
              <textarea class="form-control" name="services" placeholder="Services"></textarea>
            
            </div>
      		</div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Apply</button>
      </div>
      </form>
    </div>
  </div>
</div>
                            
<?php
$this->load->view('frontend/template/footer');?>