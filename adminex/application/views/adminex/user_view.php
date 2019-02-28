<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>Админ EX</title>

    <link href="<?php echo base_url('adminex/asset/css/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('adminex/asset/css/style-responsive.css');?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url('adminex/asset/js/html5shiv.js');?>"></script>
    <script src="<?php echo base_url('adminex/asset/js/respond.min.js');?>"></script>
    <![endif]-->
</head>

<body class="login-body">

<div class="container">

    <form class="form-signin" method="POST" action="<?php echo base_url('adminex/adminex/');?>">
        <div class="form-signin-heading text-center">
            
            <img src="<?php echo base_url('adminex/asset/images/logon.png');?>" alt=""/>
        </div>
        <div class="login-wrap">
            <input type="text" class="form-control" name="ex_login" placeholder="User ID" autofocus>
            <input type="password" class="form-control" name="ex_password" placeholder="Password">
            <div class="form-group">
                <label for="" class="text-muted">Тил - Язык - Language</label>
                <select class="form-control sel_lg" name="ex_lg">
                    <option value="ru">Русский</option>
                    <option value="kg">Кыргызча</option>
                    <option value="en">English</option>
                </select>	            
            </div>
            <button class="btn btn-lg btn-login btn-block" type="submit">
                <i class="fa fa-check"></i>
            </button>



									


            
            <div class="registration">
               Контент менеджерлер үчүн
            </div>


        </div>


    </form>

</div>



<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->
<script src="<?php echo base_url('adminex/asset/js/jquery-1.10.2.min.js');?>"></script>
<script src="<?php echo base_url('adminex/asset/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('adminex/asset/js/modernizr.min.js');?>"></script>

</body>
</html>
