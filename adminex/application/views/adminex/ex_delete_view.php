<?php
$_SESSION['ex_check']=$_SESSION['ex_check_a']+$_SESSION['ex_check_b'];
?>
<div class="wrapper">
    <div class="row">

        <form action="<?php echo $_SESSION['url']; ?>" method="POST">		
            <div class="col-sm-12">
                <section class="panel panel-danger">
                    <header class="panel-heading">
                        Удалить запись

                    </header>
                    <div class="panel-body">

                        <div class="form">

                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">
                                        <!-- Маалыматты өчүрүү үчүн төмөнкү амалды аткарыныз<br> -->
                                        Чтобы удалить запись напишите сумму этих чисел
                                    </label>
                                    <div class="input-group input-group-lg m-bot15">
                                        <span class="input-group-addon">
                                            <?php echo $_SESSION['ex_check_a'] . ' + ' . $_SESSION['ex_check_b'] . ' ='; ?> 
                                        </span>
                                        <input type="text" name="exf_summ" class="form-control input-lg" placeholder="?">
                                        <input type="hidden" name="exf_id" value="<?php echo $id; ?>">
                                    </div>                                     
                                </div>

                            </div>     
                        </div>





                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> Удалить</button>
                        <button class="btn btn-primary" ><i class="fa fa-undo"></i> Сброс</button>
                        <button class="btn btn-default" ><i class="fa fa-reply"></i> Отмена</button>
                    </div>
                </section>
            </div>			
        </form>    

    </div>

</div>