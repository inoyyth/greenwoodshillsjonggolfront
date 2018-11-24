 <!--Start of footer-->
 <section id="footer">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6">
                <div class="copyright">
                    <p>@ 2016 - Design By <span><a href="">&#9798;</a></span></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="designer">
                    <p>A Design By <a href="#">XpeedStudio</a></p>
                </div>
            </div>
        </div>
        <!--End of row-->
    </div>
    <!--End of container-->
</section>
<!--End of footer-->

<!--Scroll to top-->
<a href="#" id="back-to-top" title="Back to top">&uarr;</a>
<!--End of Scroll to top-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>-->
<script src="<?php echo base_url('assets/themes/js/jquery-1.12.3.min.js')?>"></script>

<!--Counter UP Waypoint-->
<script src="<?php echo base_url('assets/themes/js/waypoints.min.js')?>"></script>
<!--Counter UP-->
<script src="<?php echo base_url('assets/themes/js/jquery.counterup.min.js')?>"></script>

<script>
    //for counter up
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
</script>

<!--Back To Top-->
<script src="<?php echo base_url('assets/themes/js/backtotop.js')?>"></script>


<!--JQuery Click to Scroll down with Menu-->
<script src="<?php echo base_url('assets/themes/js/jquery.localScroll.min.js')?>"></script>
<script src="<?php echo base_url('assets/themes/js/jquery.scrollTo.min.js')?>"></script>
<!--WOW With Animation-->
<script src="<?php echo base_url('assets/themes/js/wow.min.js')?>"></script>
<!--WOW Activated-->
<script>
    new WOW().init();
</script>


<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url('assets/themes/js/bootstrap.min.js')?>"></script>
<!-- Custom JavaScript-->
<script src="<?php echo base_url('assets/themes/js/main.js')?>"></script>
<?php echo $this->load->view('template/includes/custom_footer_js');?>
    </body>
</html>
