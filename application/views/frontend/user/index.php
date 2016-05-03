 <?php $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/template/sidebar');?>

                        <div class="col-md-9">
                          
                            <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Transaction Table</h3>
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
                            
<?php
$this->load->view('frontend/template/footer');?>