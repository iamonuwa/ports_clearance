<?php $this->load->view('backend/template/header');
$this->load->view('backend/template/navbar');
$this->load->view('backend/template/sidebar');
?>

<section id="main" role="main">
            <div class="container-fluid">
<div class="row">
                    <div class="col-md-12">
                        <form class="panel panel-color-top panel-default form-horizontal form-bordered" method="POST" action="<?= base_url('admin/imports/preview/'.$preview['id']);?>">
                            <div class="panel-heading">
                                <h3 class="panel-title">Preview Bill of Entry</h3>
                            </div>               
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Applicant Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="applicant_name" value="<?= $this->aauth->get_user($preview['user_id'])->first_name." ".$this->aauth->get_user($preview['user_id'])->last_name;?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Container ID</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="container_id" class="form-control" value="<?= $preview['container_id'];?>">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Ship Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="ship_name" class="form-control" value="<?= $preview['ship_name'];?>">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Ship Description</label>
                                    <div class="col-sm-6">
                                    <textarea class="form-control" name="ship_desc"><?= $preview['ship_desc'];?></textarea>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Quantity</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="quantity" value="<?= $preview['quantity'];?>" class="form-control">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Weight</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="weight" value="<?= $preview['weight'];?>" class="form-control">
                                    </div>
                                    
                                </div>
                                <?php if($preview['status'] != 'Cleared'){?>
                                 <div class="form-group">
                                    <label class="col-sm-2 control-label">Status</label>
                                    <div class="col-sm-6">
                                        <select name="status" class="form-control">
                                        	<option value="Pending">Pending</option>
                                        	<option value="Cleared">Cleared</option>
                                        	<option value="Denied">Denied</option>
                                        </select>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="panel-footer">
                                <button type="submit" class="btn btn-success">Update Record</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
                </section>
<?php $this->load->view('backend/template/footer');?>