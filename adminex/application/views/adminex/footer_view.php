        <!--body wrapper end-->

        <!--footer section start-->
        <footer>
            2018 &copy; AdminEx by IT academy 
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>
<script type='text/javascript'>
    var BASE_URL = "<?php echo base_url();?>";        
    document.getElementById('<?php echo $ex_menu2;?>').className ='active';
    document.getElementById('<?php echo $ex_menu1;?>').className ='menu-list nav-active';    
</script>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="<?php echo base_url('adminex/asset/js/jquery-1.10.2.min.js');?>"></script>
<script src="<?php echo base_url('adminex/asset/js/jquery-ui-1.9.2.custom.min.js');?>"></script>
<script src="<?php echo base_url('adminex/asset/js/jquery-migrate-1.2.1.min.js');?>"></script>
<script src="<?php echo base_url('adminex/asset/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('adminex/asset/js/modernizr.min.js');?>"></script>
<script src="<?php echo base_url('adminex/asset/js/jquery.nicescroll.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('adminex/asset/js/img_picker.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('adminex/asset/js/ckeditor/ckeditor.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('adminex/asset/js/bootstrap-wysihtml5/wysihtml5-0.3.0.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('adminex/asset/js/bootstrap-wysihtml5/bootstrap-wysihtml5.js');?>"></script>


<!--pickers plugins-->
<script type="text/javascript" src="<?php echo base_url('adminex/asset/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('asset/js/bootstrap-timepicker/js/bootstrap-timepicker.js');?>"></script>

<!--pickers initialization-->
<script src="<?php echo base_url('adminex/asset/js/pickers-init.js');?>"></script>


<!--common scripts for all pages-->
<script src="<?php echo base_url('adminex/asset/js/scripts.js');?>"></script>

<script>
    jQuery(document).ready(function(){
         $('.wysihtml5').wysihtml5();
    });
</script>



</body>
</html>
