<div class="wrapper">
    <div class="row">
        <?php
        foreach ($ex_user as $item) {
            $_SESSION['id_page'] =$item['id'];
            ?>
            <form action="<?php echo $_SESSION['url']; ?>" method="POST">

                <div class="col-sm-12">
                    <section class="panel panel-success">
                        <header class="panel-heading">
                            Добавить нового пользователя

                        </header>

                        <div class="panel-body">

                            <div class="form">

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-sm-12">
                                            <label for="exampleInputEmail1"><b>Имя пользователя</b></label>                  
                                            <input value="<?php echo $item['login'];?>" type="text" class="form-control m-bot15" placeholder="Логин" name="exf_login">
                                            <input type="hidden" name="exf_edit" value="<?php echo $item['id'];?>">

                                            <label for="exampleInputEmail1">ФИО</label>                  
                                            <input value="<?php echo $item['fio'];?>" type="text" class="form-control m-bot15" placeholder="Асанов Акмат" name="exf_fio">

                                            <label for="exampleInputEmail1">Телефон</label>                  
                                            <input value="<?php echo $item['tel'];?>" type="text" class="form-control m-bot15" placeholder="0772-84-30-93" name="exf_tel">

                                            <label for="exampleInputEmail1"><b>Пароль</b></label>                  
                                            <input value="" type="password" class="form-control m-bot15" placeholder="" name="exf_pass">

                                            <label for="exampleInputEmail1">Роль</label>
                                            <select class="form-control m-bot15"  name="exf_rol">
                                                <option <?php if ($item['type_user']==1) echo 'selected';?> value="1">Администратор</option>
                                                <option <?php if ($item['type_user']==2) echo 'selected';?> value="2">Редактор</option>
                                                <option <?php if ($item['type_user']==3) echo 'selected';?> value="3">Автор</option>
                                                <option <?php if ($item['type_user']==4) echo 'selected';?> value="4">Участник</option>
                                                <option <?php if ($item['type_user']==5) echo 'selected';?> value="5">Подписчик</option>
                                            </select>                                       



                                        </div>


                                    </div>

                                </div>



                            </div>





                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Сохранить изменения</button>
                        </div>
                    </section>
                </div>                 

            </form>
            <?php
        }
        ?>
    </div>
</div>