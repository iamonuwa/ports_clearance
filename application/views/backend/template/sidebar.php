        <aside class="sidebar sidebar-left sidebar-menu">
            <section class="content slimscroll">
                <h5 class="heading">Main Menu</h5>
                <ul class="topmenu topmenu-responsive" data-toggle="menu">
                    <li >
                        <a href="<?= base_url('admin/accounts/index');?>">
                            <span class="figure"><i class="ico-dashboard2"></i></span>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-target="#accounts" data-toggle="submenu" data-parent=".topmenu">
                            <span class="figure"><i class="ico-screwdriver"></i></span>
                            <span class="text">Accounts Mgt</span>
                            <span class="arrow"></span>
                        </a>
                        <ul id="accounts" class="submenu collapse">
                            <li class="submenu-header ellipsis">Accounts Mgt</li>
                            <li >
                                <a href="<?= base_url('admin/users/index');?>">
                                    <span class="text">Active Users</span>
                                </a>
                            </li>
                            <li >
                                <a href="<?= base_url('admin/users/banned');?>">
                                    <span class="text">Banned Users</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#imports" data-parent=".topmenu">
                            <span class="figure"><i class="ico-quill2"></i></span>
                            <span class="text">Imports Mgt</span>
                            <span class="arrow"></span>
                        </a>
                        <ul id="imports" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Imports Mgt</li>
                            <li >
                                <a href="<?= base_url('admin/imports/index');?>">
                                    <span class="text">Bill of Entry</span>
                                </a>
                            </li>
                            <li >
                                <a href="<?= base_url('admin/imports/delivery_order');?>">
                                    <span class="text">Delivery Order</span>
                                </a>
                            </li>
                            <li >
                                <a href="<?= base_url('admin/imports/cargo_pass');?>">
                                    <span class="text">Cargo Pass</span>
                                </a>
                            </li>
                          </ul>
                    </li>
                    
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#outgoing" data-parent=".topmenu">
                            <span class="figure"><i class="ico-file6"></i></span>
                            <span class="text">Export Mgt</span>
                            <span class="arrow"></span>
                        </a>
                        <ul id="outgoing" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Export Application</li>
                            <li >
                                <a href="<?= base_url('admin/exports/export_tally');?>">
                                    <span class="text">Export Tally</span>
                                </a>
                            </li>
                            <li >
                                <a href="<?= base_url('admin/exports/debit_note');?>">
                                    <span class="text">Debit Note</span>
                                </a>
                            </li>
                         </ul>
                    </li>

                     <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#messaging" data-parent=".topmenu">
                            <span class="figure"><i class="ico-file6"></i></span>
                            <span class="text">Messaging</span>
                            <span class="arrow"></span>
                        </a>
                        <ul id="messaging" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Messaging</li>
                            <li >
                                <a href="<?= base_url('admin/exports/export_tally');?>">
                                    <span class="text">Inbox</span>
                                </a>
                            </li>
                            <li >
                                <a href="<?= base_url('admin/exports/debit_note');?>">
                                    <span class="text">Compose</span>
                                </a>
                            </li>
                         </ul>
                    </li>
                </ul>
            </section>
        </aside>