 <?php $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/template/sidebar');?>

                        <div class="col-md-9"> 
                        <div class="box-footer clearfix">
				                <div class="btn-group">
				                   <button class="btn btn-lg btn-success push-5-r push-10" type="button"  data-toggle="modal" data-target="#myModal"> Apply For Bill of Entry</button>
				                </div>
                          </div>
                            <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Transaction Table </h3>
                            </div>
                            <table class="table table-striped" id="zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Container Name</th>
                                        <th>Company Name</th>
                                        <th>Arrival Date</th>
                                        <th>Country</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                
                </div>
                        </div>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Bill of Entry Application</h4>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                            
<?php
$this->load->view('frontend/template/footer');?>