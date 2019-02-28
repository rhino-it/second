<?php
$_SESSION['ex_check']=$_SESSION['ex_check_a']+$_SESSION['ex_check_a'];
?>   
        <div class="wrapper">
            <div class="row">		
            <div class="col-sm-12">
                <section class="panel panel-danger">
                    <header class="panel-heading">
                        Удалить запись
                            
                    </header>
                    <div class="panel-body">

                        <div class="form">
                        <form role="form">
                            
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">
                                    <!-- Маалыматты өчүрүү үчүн төмөнкү амалды аткарыныз<br> -->
                                    Чтобы удалить запись напишите сумму этих чисел
                                    </label>
                                    <div class="input-group input-group-lg m-bot15">
                                        <span class="input-group-addon">
                                            <?php echo $_SESSION['ex_check_a'].' + '.$_SESSION['ex_check_b'].' ='; ?> 
                                        </span>
                                        <input type="text" class="form-control input-lg" placeholder="0">
                                    </div>                                     
                                </div>
                                
                            </div>     

                        </form>
                        </div>


                        


                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> Удалить</button>
                        <button class="btn btn-primary" type="submit"><i class="fa fa-undo"></i> Сброс</button>
                         <button class="btn btn-default" type="submit"><i class="fa fa-reply"></i> Отмена</button>
                    </div>
                </section>
            </div>			
			
			
			
            </div>

        </div>