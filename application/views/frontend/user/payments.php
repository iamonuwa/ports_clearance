 <?php $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');
        $this->load->view('frontend/template/sidebar');?>
                        <div class="col-md-9">
                            <article class="panel panel-minimal overflow-hidden mb0">
                                <h3 class="section-title font-alt mt0">Payments Form</h3>
                                 <form class="panel no-border nm" name="form-register" action="">
                                <ul class="list-table pa15">
                                    <li>
                                        <div class="alert alert-warning nm">
                                            <span class="semibold">Note :</span>&nbsp;&nbsp;Please fill all the below field.
                                        </div>
                                    </li>
                                    <li class="text-right" style="width:20px;"><a href="javascript:void(0);"><i class="ico-question-sign fsize16"></i></a></li>
                                </ul>
                                <div class="panel-body">
                                    <div class="row">
                                    <fieldset>
                                        <legend>Cargo</legend>
                                    <div class="form-group">
                                    <div class="col-md-6">
                                        <div class="checkbox custom-checkbox">  
                                            <input type="checkbox" name="check_general_cargo" id="check_general_cargo">  
                                            <label for="check_general_cargo">&nbsp;&nbsp;General Cargo</label> 
                                        </div>
                                    </div>
                                      <div class="col-md-6">
                                        <input type="number" class="form-control" name="general_cargo">
                                      </div>
                                    </div>
                                    </fieldset>


                                     <fieldset>
                                        <legend>Bulk Cargo</legend>
                                    <div class="form-group">
                                    <div class="col-md-6">
                                        <div class="checkbox custom-checkbox">  
                                            <input type="checkbox" name="check_liquid_bulk_cargo" id="check_liquid_bulk_cargo">  
                                            <label for="check_liquid_bulk_cargo">&nbsp;&nbsp;Liquid Bulk Cargo</label> 
                                        </div>
                                    </div>
                                      <div class="col-md-6">
                                        <input type="number" class="form-control" name="liquid_bulk_cargo">
                                      </div>
                                      <br>
                                    </div>
                                    <div class="form-group">
                                    <div class="col-md-6">
                                        <div class="checkbox custom-checkbox">  
                                            <input type="checkbox" name="check_dry_bulk_cargo" id="check_dry_bulk_cargo">  
                                            <label for="check_dry_bulk_cargo">&nbsp;&nbsp;Dry Bulk Cargo</label> 
                                        </div>
                                    </div>
                                      <div class="col-md-6">
                                        <input type="number" class="form-control" name="check_dry_bulk_cargo">
                                      </div>
                                    </div>
                                    </fieldset>

                                     <fieldset>
                                        <legend>Vehicles</legend>
                                    <div class="form-group">
                                    <div class="col-md-6">
                                        <div class="checkbox custom-checkbox">  
                                            <input type="checkbox" name="check_15_cbm" id="check_15_cbm">  
                                            <label for="check_15_cbm">&nbsp;&nbsp;Vehicles Up to  15CBM</label> 
                                        </div>
                                    </div>
                                      <div class="col-md-6">
                                        <input type="number" class="form-control" name="15_cbm">
                                      </div>
                                      <br>
                                    </div>
                                    <div class="form-group">
                                    <div class="col-md-6">
                                        <div class="checkbox custom-checkbox">  
                                            <input type="checkbox" name="check_16_cbm" id="check_16_cbm">  
                                            <label for="check_16_cbm">&nbsp;&nbsp;Vehicles 16-25CBM</label> 
                                        </div>
                                    </div>
                                      <div class="col-md-6">
                                        <input type="number" class="form-control" name="16_cbm">
                                      </div>
                                      <br>
                                    </div>

                                     <div class="form-group">
                                    <div class="col-md-6">
                                        <div class="checkbox custom-checkbox">  
                                            <input type="checkbox" name="check_25_cbm" id="check_25_cbm">  
                                            <label for="check_25_cbm">&nbsp;&nbsp;Vehicles Above 25CBM</label> 
                                        </div>
                                    </div>
                                      <div class="col-md-6">
                                        <input type="number" class="form-control" name="25_cbm">
                                      </div>
                                      <br>
                                    </div>
                                    <div class="form-group">
                                    <div class="col-md-6">
                                        <div class="checkbox custom-checkbox">  
                                            <input type="checkbox" name="check_trailer" id="check_trailer">  
                                            <label for="check_trailer">&nbsp;&nbsp;Trailer</label> 
                                        </div>
                                    </div>
                                      <div class="col-md-6">
                                        <input type="number" class="form-control" name="trailer">
                                      </div>
                                      <br>
                                    </div>
                                    </fieldset>

                                      <fieldset>
                                        <legend>Container</legend>
                                    <div class="form-group">
                                    <div class="col-md-6">
                                        <div class="checkbox custom-checkbox">  
                                            <input type="checkbox" name="check_20_empty" id="check_20_empty">  
                                            <label for="check_20_empty">&nbsp;&nbsp;20'' Empty</label> 
                                        </div>
                                    </div>
                                      <div class="col-md-6">
                                        <input type="number" class="form-control" name="20_empty">
                                      </div>
                                      <br>
                                    </div>
                                    <div class="form-group">
                                    <div class="col-md-6">
                                        <div class="checkbox custom-checkbox">  
                                            <input type="checkbox" name="check_20_loaded" id="check_20_loaded">  
                                            <label for="check_20_loaded">&nbsp;&nbsp;20'' Loaded</label> 
                                        </div>
                                    </div>
                                      <div class="col-md-6">
                                        <input type="number" class="form-control" name="20_loaded">
                                      </div>
                                      <br>
                                    </div>

                                     <div class="form-group">
                                    <div class="col-md-6">
                                        <div class="checkbox custom-checkbox">  
                                            <input type="checkbox" name="check_40_empty" id="check_40_empty">  
                                            <label for="check_40_empty">&nbsp;&nbsp;40'' Empty</label> 
                                        </div>
                                    </div>
                                      <div class="col-md-6">
                                        <input type="number" class="form-control" name="40_empty">
                                      </div>
                                      <br>
                                    </div>
                                    <div class="form-group">
                                    <div class="col-md-6">
                                        <div class="checkbox custom-checkbox">  
                                            <input type="checkbox" name="check_40_loaded" id="check_40_loaded">  
                                            <label for="check_40_loaded">&nbsp;&nbsp;40'' Loaded</label> 
                                        </div>
                                    </div>
                                      <div class="col-md-6">
                                        <input type="number" class="form-control" name="40_loaded">
                                      </div>
                                      <br>
                                    </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Other</legend>

                                    <div class="form-group">
                                    <div class="col-md-6">
                                        <div class="checkbox custom-checkbox">  
                                            <input type="checkbox" name="check_lng_export" id="check_lng_export">  
                                            <label for="check_lng_export">&nbsp;&nbsp;LNG Export</label> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" name="lng_export">
                                      </div>
                                      <br>
                                    </div>
                                    </fieldset>
                                    <br>
                                    <br>
                                    <div class="form-group">
                                    <div class="col-md-6">
                                           <label for="check_lng_export">&nbsp;&nbsp;Landing Area</label> 
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" name="lng_export">
                                      </div>
                                      <br>

                                    <div class="col-md-6">
                                           <label for="check_lng_export">&nbsp;&nbsp;Vessel Voyage Type</label> 
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" name="lng_export">
                                      </div>
                                      <br>

                                    <div class="col-md-6">
                                           <label for="check_lng_export">&nbsp;&nbsp;Ship Details</label> 
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" name="lng_export">
                                      </div>
                                      <br>
                                    </div>

                                    </div>

                                </div>
                                <div class="panel-footer">
                                    <button type="submit" class="btn btn-block btn-lg btn-success"><span class="semibold">Make Payment</span></button>
                                </div>
                            </form>
                            </article>
                          
<?php
$this->load->view('frontend/template/footer');?>