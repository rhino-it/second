    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

        <!--toggle button start-->
        <a class="toggle-btn"><i class="fa fa-bars"></i></a>
        <!--toggle button end-->

        <!--notification menu start -->
         <div class="menu-left">
            <ul class="notification-menu">
                <li<?php if ($_SESSION['ex_lg']=='ru') echo ' class="active"';?>><a href="<?php echo base_url('adminex/language/index/ru');?>" class="btn btn-default dropdown-toggle">Русский</a></li>
                <li<?php if ($_SESSION['ex_lg']=='kg') echo ' class="active"';?>><a href="<?php echo base_url('adminex/language/index/kg');?>" class="btn btn-default dropdown-toggle">Кыргызча</a></li>
                <li<?php if ($_SESSION['ex_lg']=='en') echo ' class="active"';?>><a href="<?php echo base_url('adminex/language/index/en');?>" class="btn btn-default dropdown-toggle">English</a></li>             
            </ul>
        </div>
        <div class="menu-right">
            <ul class="notification-menu">               
                
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo base_url('adminex/asset/images/photos/user-avatar.png');?>" alt="" /> 
                        <?php echo $_SESSION['ex_fio'];?>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                        <li><a href="#"><u>Роль: <i><?php echo ($_SESSION['ex_user_rol']);?></i></u></a></li>
                        <li><a href="#"><i class="fa fa-phone-square"></i>  <?php echo $_SESSION['ex_tel'];?></a></li>
                        <li><a href="<?php echo base_url('adminex/adminex/quit');?>"><i class="fa fa-sign-out"></i> <?php echo $ex_lg_Exit;?></a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!--notification menu end -->

        </div>
        <!-- header section end-->

        <!-- page heading start-->

        <!-- page heading end-->

        <!--body wrapper start-->
		