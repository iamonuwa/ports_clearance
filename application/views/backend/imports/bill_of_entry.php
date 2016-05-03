<?php $this->load->view('backend/template/header');
$this->load->view('backend/template/navbar');
$this->load->view('backend/template/sidebar');
?>
<section id="main" role="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                     
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?= $this->title;?></h3>
                            </div>

                            <table class="table table-striped" id="zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Owner</th>
                                        <th>Ship Name</th>
                                        <th>Quantity</th>
                                        <th>Weight</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php foreach ($bill_of_entry as $key => $value):?>
                                    <tr>
                                        <td><?= $this->aauth->get_user($value['user_id'])->first_name." ".$this->aauth->get_user($value['user_id'])->last_name;?></td>
                                        <td><?= $value['ship_name'];?></td>
                                        <td><?= $value['quantity'];?></td>
                                        <td><?= $value['weight'];?></td>
                                        <td><?= $value['status'];?></td>
                                        <td><a href="<?= base_url('admin/imports/preview/'.$value['id']);?>" class="btn btn-primary"> Preview</a></td>
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

        
<?php $this->load->view('backend/template/footer');?>