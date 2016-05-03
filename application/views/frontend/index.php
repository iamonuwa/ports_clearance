<?php $this->load->view('frontend/template/header');
$this->load->view('frontend/template/navbar');?>
        <section id="main" role="main">
            <section id="layerslider"style="width:100%; height:506px;">
                <div class="ls-slide" data-ls="transition2d:1; slidedelay:8000;">
                    <img src="<?= base_url('public_html/image/layerslider/bg3.png');?>" class="ls-bg">
                    <img class="ls-l" style="top:90px;left:68%;" src="<?= base_url('public_html/image/layerslider/layer/people2.png');?>" data-ls="delayin:1000; easingin:easeOutElastic;">
                    <h1 class="ls-l font-alt" style="top:110px;left:150px;" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;">
                        Welcome To <span class="text-primary">Adminre</span> 
                    </h1>
                    <h4 class="ls-l" style="top:170px;left:150px;width:550px;" data-ls="offsetxin:0; durationin:2000; delayin:2000; easingin:easeOutElastic; rotatexin:90; transformoriginin:50% top 0; offsetxout:-400;">
                        Adminre is a clean and flat backend and frontend theme build with Twitter bootstrap
                    </h4>
                    <p class="ls-l text-default" style="top:230px;left:150px;width:550px;" data-ls="offsetxin:0; durationin:2000; delayin:2500; easingin:easeOutElastic; rotatexin:90; transformoriginin:50% top 0; offsetxout:-400;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud.
                    </p>
                    <a href="javascript:void(0);" class="ls-l btn btn-primary" style="top:310px; left:150px;" data-ls="offsetxin:0; durationin:2000; delayin:3000; easingin:easeOutElastic; rotatexin:90; transformoriginin:50% top 0; offsetxout:-400;">
                        Purchase Now <i class="ico-angle-right ml5"></i>
                    </a>
                    <img class="ls-l" style="top:320px;left:300px;" src="<?= base_url('public_html/image/layerslider/layer/arrow.png');?>" data-ls="delayin:3500; offsetxin:0; offsetyin:-30; easingin:easeOutElastic;">
                </div>
                <div class="ls-slide" data-ls="transition2d:1; slidedelay:8000;">
                    <img src="<?= base_url('public_html/image/layerslider/bg2.png');?>" class="ls-bg" alt="Slide background">
                    <h4 class="ls-l text-default text-right" style="top:120px;left:65%;width:550px;" data-ls="easingin:easeOutElastic; delayin:0;">
                        Fully Responsive &amp; Clean Design
                    </h4>
                    <h1 class="ls-l font-alt text-right" style="top:150px;left:65%;width:550px;" data-ls="easingin:easeOutElastic; delayin:500;">
                        <span class="text-primary">Mobile</span> Devices Optimize
                    </h1>
                    <p class="ls-l text-default text-right" style="top:210px;left:65%;width:550px;" data-ls="easingin:easeOutElastic; delayin:1000;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation.
                    </p>
                    <p class="ls-l text-default text-right" style="top:290px;left:65%;width:550px;" data-ls="easingin:easeOutElastic; delayin:1500;">
                        <a href="javascript:void(0);" class="btn btn-primary">
                            Learn More <i class="ico-angle-right ml5"></i>
                        </a>
                    </p>
                    <img class="ls-l" style="top:80px;left:250px;" src="<?= base_url('public_html/image/layerslider/layer/iphone-5s.png');?>" data-ls="delayin:2000; easingin:easeOutElastic;">
<?php $this->load->view('frontend/template/footer');?>