 <header id="header" class="navbar">
            <div class="container">
                <div class="navbar-header navbar-header-transparent">
                    <?php if($this->aauth->is_loggedin()){?>
                    <a class="navbar-brand" href="<?= base_url('accounts/index');?>">
                        <span class="logo-figure" style="margin-left:4px;"></span> Nigerian Ports 
                    </a>
                    <?php } else{ ?>
                     <a class="navbar-brand" href="<?= base_url();?>">
                        <span class="logo-figure" style="margin-left:4px;"></span> Nigerian Ports 
                    </a><?php }?>
                </div>
                <div class="navbar-toolbar clearfix">
                    <ul class="nav navbar-nav">
                        <li class="navbar-main navbar-toggle">
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#navbar-collapse">
                                <span class="meta">
                                    <span class="icon"><i class="ico-paragraph-justify3"></i></span>
                                </span>
                            </a>
                        </li>
                    </ul>
                    
                    <div class="collapse navbar-collapse navbar-collapse-alt" id="navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                            <?php if($this->aauth->is_loggedin()){?>
                                <a href="<?= base_url('accounts/index');?>">
                                    <span class="meta">
                                        <span class="text">Home</span>
                                    </span>
                                </a>
                            <?php } else {?>
                            <a href="<?= base_url();?>">
                                    <span class="meta">
                                        <span class="text">Home</span>
                                    </span>
                                </a>
                            <?php } ?>

                            </li>
                           
                                    <li><a href="<?= base_url('pages/about');?>">
                                     <span class="meta">
                                        <span class="text">About Us</span>
                                    </span>
                                    </a>
                                </li>
                                    <li><a href="<?= base_url('pages/contact');?>">
                                     <span class="meta">
                                        <span class="text">Contact Us</span>
                                    </span>
                                    </a>
                                </li>
                                <li class="dropdown ">
                                <a href="#" class="dropdown-toggle dropdown-hover" data-toggle="dropdown">
                                    <span class="meta">
                                        <span class="text">Shipping Schedule</span>
                                        <span class="caret"></span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-alt">
                                    <li><a target="_blank" href="<?= base_url('public_html/uploads/ShipInRiversPort09Oct15.pdf');?>">Print Schedule</a></li>
                                </ul>
                            </li>
                            <?php if($this->aauth->is_loggedin() & $this->aauth->is_member('default')){?>
                             <li class="dropdown ">
                                <a href="#" class="dropdown-toggle dropdown-hover" data-toggle="dropdown">
                                    <span class="meta">
                                        <span class="text"><?= $this->aauth->get_user()->name;?></span>
                                        <span class="caret"></span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-alt">
                                    <li><a href="<?= base_url('accounts/index');?>">My Dashboard</a></li>
                                    <!-- <li><a href="<?= base_url('accounts/payments');?>">Bill Calculator</a></li> -->
                                    <li><a href="<?= base_url('accounts/settings');?>">Profile Settings</a></li>
                                    <li><a href="<?= base_url('accounts/logout');?>">Logout</a></li>
                                </ul>
                            </li>
                            <?php } else{?>
                            <li>
                                <a href="<?= base_url('login');?>">
                                    <span class="meta">
                                        <span class="text">Client Login</span>
                                    </span>
                                </a>
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
