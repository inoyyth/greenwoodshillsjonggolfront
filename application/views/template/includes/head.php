<?php $head_content = $this->headercontent->getContent();?><!--Start Hedaer Section-->
<section id="header">
    <div class="header-area">
        <div class="top_header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zero_mp">
                        <div class="address">
                            <i class="fa fa-home floatleft"></i>
                            <p><?php echo $head_content[0]['acf']['address'];?></p>
                        </div>
                    </div>
                    <!--End of col-md-4-->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zero_mp">
                        <div class="phone">
                            <i class="fa fa-phone floatleft"></i>
                            <p><?php echo $head_content[0]['acf']['phone'];?></p>
                        </div>
                    </div>
                    <!--End of col-md-4-->
                    <div class="col-md-4">
                        <div class="social_icon text-right">
                            <a href="<?php echo $head_content[0]['acf']['facebook'];?>"><i class="fa fa-facebook"></i></a>
                            <a href="<?php echo $head_content[0]['acf']['twitter'];?>"><i class="fa fa-twitter"></i></a>
                            <a href="<?php echo $head_content[0]['acf']['youtube'];?>"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                    <!--End of col-md-4-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </div>
        <!--End of top header-->
        <div class="header_menu text-center" data-spy="affix" data-offset-top="50" id="nav">
            <div class="container">
                <nav class="navbar navbar-default zero_mp ">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand custom_navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/themes/img/logo.png" alt=""></a>
                    </div>
                    <!--End of navbar-header-->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse zero_mp" id="bs-example-navbar-collapse-1">
                        <?php 
                            echo $this->multi_menu->render(
                                array(
                                    'nav_tag_open'        => '<ul id="nav" class="nav navbar-nav navbar-right main_menu">',            
                                    'parentl1_tag_open'   => '<li>',
                                    'parentl1_anchor'     => '<a href="%s">%s</a>',
                                    'parent_tag_open'     => '<li>',
                                    'parent_anchor'       => '<a href="%s">%s</a>',
                                    'children_tag_open'   => '<ul>'
                                )
                            ); 
                        ?>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
                <!--End of nav-->
            </div>
            <!--End of container-->
        </div>
        <!--End of header menu-->
    </div>
    <!--end of header area-->
</section>
<!--End of Hedaer Section-->