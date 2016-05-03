<?php $this->load->view('frontend/template/header');
$this->load->view('frontend/template/navbar');?>
        <section id="main" role="main">
            <section class="page-header page-header-block nm">
                <div class="pattern pattern9"></div>
                <div class="container pt15 pb15">
                    <div class="page-header-section">
                        <h4 class="title">Contact Us</h4>
                    </div>
                    <div class="page-header-section">
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="javascript:void(0);">Pages</a></li>
                                <li class="active">Contact Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
            <section class="maps">
                <div id="gmaps-marker" style="height:360px;"></div>
            </section>
            <section class="section bgcolor-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <h3 class="section-title font-alt mt0">Contact Form</h3>
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <p class="form-control-static">For suggestions, complaints and account creation, please use our contact system to send us a message.</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <label for="contact_name" class="control-label">Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="contact_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <label for="contact_email" class="control-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="contact_email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label for="contact_email" class="control-label">Your Message <span class="text-danger">*</span></label>
                                        <textarea class="form-control" rows="6" id="contact_message"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>

                            <div class="mb15 visible-xs visible-sm"></div>
                        </div>
                        <div class="col-md-3">
                            <form class="mb25">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>

                            <div class="pt25 mb25">
                                <h4 class="section-title font-alt mt0">Address</h4>
                                    <strong>Nigerian Ports Authority</strong><br>
                                    Onne,<br>
                                    Rivers State.<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>
                                <address>
                                    <strong>Email</strong><br>
                                    <a href="mailto:#">support@onnenpa.gov.ng</a>
                                </address>
                            </div>
                            <div class="pt25 mb25">
                                <h4 class="section-title font-alt mt0">Business Hour</h4>
                                <ul class="list-unstyled">
                                    <li><strong>Monday-Friday:</strong> 10am to 8pm</li>
                                </ul>
                            </div>
                            <div class="pt25">
                                <h4 class="section-title font-alt mt0">Stay Connect</h4>
                                <a href="javascript:void(0);" class="text-muted mr15" data-toggle="tooltip" title="Facebook"><i class="ico-facebook2"></i></a>
                                <a href="javascript:void(0);" class="text-muted mr15" data-toggle="tooltip" title="Twitter"><i class="ico-twitter2"></i></a>
                                <a href="javascript:void(0);" class="text-muted mr15" data-toggle="tooltip" title="Google+"><i class="ico-google-plus2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

      
<?php $this->load->view('frontend/template/footer');?>