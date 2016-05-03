 <header id="header" class="navbar">
            <div class="navbar-header">
                <a class="navbar-brand" href="javascript:void(0);">
                Nigerian Ports Complex
                </a>
            </div>
            <div class="navbar-toolbar clearfix">
                <ul class="nav navbar-nav navbar-left">
                   <li class="dropdown custom" id="header-dd-message">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="meta">
                                <span class="icon"><i class="ico-bubbles3"></i></span>
                            </span>
                        </a>
                        <div class="dropdown-menu" role="menu">
                            <div class="dropdown-header">
                                <span class="title">Messages <span class="count"></span></span>
                                <span class="option text-right"><a href="javascript:void(0);">New message</a></span>
                            </div>
                            <div class="dropdown-body slimscroll">
                                <!-- <div class="media-list">
                                    <a href="page-message-rich.html" class="media border-dotted read">
                                        <span class="pull-left">
                                            <img src="<?= base_url('public_html/image/avatar/avatar1.jpg');?>" class="media-object img-circle" alt="">
                                        </span>
                                        <span class="media-body">
                                            <span class="media-heading">Martina Poole</span>
                                            <span class="media-text ellipsis nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</span>
                                            <span class="media-meta"><i class="ico-reply"></i></span>
                                            <span class="media-meta"><i class="ico-attachment"></i></span>
                                            <span class="media-meta pull-right">20m</span>
                                        </span>
                                    </a>

                                </div> -->
                            </div>
                        </div>
                    </li>
                    <li class="dropdown custom" id="header-dd-notification">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="meta">
                                <span class="icon"><i class="ico-bell"></i></span>
                                <span class="hasnotification hasnotification-danger"></span>
                            </span>
                        </a>
                        <div class="dropdown-menu" role="menu">
                            <div class="dropdown-header">
                                <span class="title">Notification <span class="count"></span></span>
                                <span class="option text-right"><a href="javascript:void(0);">Clear all</a></span>
                            </div>
                            <div class="dropdown-body slimscroll">
                                <div class="media-list">
                                    <a href="javascript:void(0);" class="media read border-dotted">
                                        <span class="media-object pull-left">
                                            <i class="ico-basket2 bgcolor-info"></i>
                                        </span>
                                        <span class="media-body">
                                            <span class="media-text">Duis aute irure dolor in <span class="text-primary semibold">reprehenderit</span> in voluptate.</span>
                                            <span class="media-meta pull-right">2d</span>
                                        </span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown profile">
                        <a href="javascript:void(0);" class="dropdown-toggle dropdown-hover" data-toggle="dropdown">
                            <span class="meta">
                                <span class="avatar"><img src="<?= base_url('public_html/image/avatar/avatar7.jpg');?>" class="img-circle" alt="" /></span>
                                <span class="text hidden-xs hidden-sm pl5"><?= $this->aauth->get_user()->first_name;?></span>
                                <span class="caret"></span>
                            </span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?= base_url('admin/accounts/settings');?>"><span class="icon"><i class="ico-cog4"></i></span> Profile Setting</a></li>
                            <li class="divider"></li>
                            <li><a href="<?= base_url('admin/accounts/logout');?>"><span class="icon"><i class="ico-exit"></i></span> Sign Out</a></li>
                        </ul>
                    </li>
                  
                </ul>
            </div>
        </header>