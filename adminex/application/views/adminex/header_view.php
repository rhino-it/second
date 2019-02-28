
<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="<?php echo base_url('adminex/page/');?>"><img src="<?php echo base_url('adminex/asset/images/logo.png');?>" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="<?php echo base_url('adminex/page/');?>"><img src="<?php echo base_url('adminex/asset/images/logo_icon.png');?>" alt=""></a>
        </div>
        <!--logo and iconic logo end-->


        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="<?php echo base_url('adminex/asset/images/photos/user-avatar.png');?>" class="media-object">

                </div>

            </div>

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li><a href="<?php echo base_url('adminex/adminex/page/');?>"><i class="fa fa-home"></i> <span>Главная </span></a>

                </li>
								
                <li id="m10" class="menu-list"><a href=""><i class="fa fa-paint-brush"></i> <span>Внешний вид</span></a>
                    <ul class="sub-menu-list">

                        <li id="m11"><a href="<?php echo base_url('adminex/adminex/menu');?>">Меню</a></li>
         			

                    </ul>
                </li>

                <li id="m20" class="menu-list"><a href=""><i class="fa fa-tasks"></i> <span>Записи</span></a>
                    <ul class="sub-menu-list">
                        <li  id="m21"><a href="<?php echo base_url('adminex/adminex/page');?>"> Все записи</a></li>
                        <li  id="m22"><a href="<?php echo base_url('adminex/adminex/page_add');?>"> Добавить новую</a></li>
                    </ul>
                </li>
				
                <li id="m30" class="menu-list"><a href=""><i class="fa fa-folder-open"></i> <span>Медиафайлы</span></a>
                    <ul class="sub-menu-list">
                        <li id="m31"><a href="<?php echo base_url('adminex/adminex/files');?>">Библиотека файлов</a></li>
                        
                    </ul>
                </li>

                <li id="m40" class="menu-list"><a href=""><i class="fa fa-users"></i> <span>Пользователи</span></a>
                    <ul class="sub-menu-list">
                        <li id="m41"><a href="<?php echo base_url('adminex/adminex/users');?>">Все прользователи</a></li>
                       
					</ul>
                </li>				


                <li id="m50" class="menu-list"><a href=""><i class="fa fa-puzzle-piece"></i> <span>Плагины</span></a>
                    <ul class="sub-menu-list">
                        <li id="m51"><a href="<?php echo base_url('adminex/plagin/');?>">Плагин1</a></li>
                        <li id="m51"><a href="<?php echo base_url('adminex/plagin/');?>">Плагин2</a></li>
                        <li id="m51"><a href="<?php echo base_url('adminex/plagin/');?>">Плагин3</a></li>
                        <li id="m51"><a href="<?php echo base_url('adminex/plagin/');?>">Плагин4</a></li>
                        <li id="m51"><a href="<?php echo base_url('adminex/plagin/');?>">Плагин5</a></li>
                       
                    </ul>
                </li>   

                <li><a href="<?php echo base_url('adminex/adminex/quit');?>"><i class="fa fa-sign-in"></i> <span><?php echo $ex_lg_Exit;?></span></a></li>

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->