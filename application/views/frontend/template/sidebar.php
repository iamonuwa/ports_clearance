 <section id="main" role="main">
            <section class="page-header page-header-block nm">
                <div class="pattern pattern9"></div>
                <div class="container pt15 pb15">
                    <div class="page-header-section">
                        <h4 class="title"><?= $this->title;?></h4>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
            <section class="section bgcolor-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                           <div>
                                <h4 class="section-title font-alt mt0">Main Navigation</h4>
                                </div>
                            <div>
                                <h6 class="section-title font-alt mt0">Import</h6>
                                <ul class="list-unstyled">
                                    <li class="mb5"><i class="ico-angle-right text-muted mr5"></i> <a href="<?= base_url('import/bill_of_entry');?>">Bill of Entry</a></li>
                                </ul>
                            </div>
                            <div>
                                <h6 class="section-title font-alt mt0">Export</h6>
                                <ul class="list-unstyled">
                                    <li class="mb5"><i class="ico-angle-right text-muted mr5"></i> <a href="<?= base_url('export/apply_for_export');?>">Apply for Export</a></li>
                                </ul>
                            </div>
                    </div>