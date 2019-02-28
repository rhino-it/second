<?php
foreach ($ex_type_user as $item) {
    $ex_arr_type[$item['id']][0] = $item['name_' . $_SESSION['ex_lg']];
    $ex_arr_type[$item['id']][1] = $item['style'];
}
?>
<div class="wrapper">
    <div class="row">


        <div class="col-sm-9">
            <section class="panel panel-default">
                <header class="panel-heading">
                    Пользователи


                </header>
                <div class="panel-body">



                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th width="5%">№</th>
                                <th width="20%">Имя пользователя</th>                                
                                <th>Имя</th>                                
                                <th width="10%">Телефон</th>
                                <th width="10%">Роль</th>
                                <th width="3%">Записи</th>
                                <th width="20%">Редактор</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            foreach ($ex_user as $item) {
                                $i++;
                                ?>                                   
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><b><?php echo $item['login']; ?></b></td>                                
                                    <td><?php echo $item['fio']; ?></td>                                
                                    <td><?php echo $item['tel']; ?></td>                                
                                    <td><span class="label <?php echo $ex_arr_type[$item['type_user']][1]; ?>"><?php echo $ex_arr_type[$item['type_user']][0]; ?></span></td>
                                    <td>
                                        <?php

                                        $this->db->where('id_user', $item['id']);
                                        $this->db->from('ex_page');
                                        echo $this->db->count_all_results();
                                        ?>
                                    </td>                             
                                    <td>
                                        <a href="<?php echo base_url('adminex/adminex/user_edit/' . $item['id']); ?>" class="btn btn-success btn-xs m-bot15"><i class="fa fa-edit"></i> Edit</a>
                                        <a href="<?php echo base_url('adminex/adminex/user_delete/' . $item['id']); ?>" class="btn btn-danger btn-xs m-bot15"><i class="fa fa-trash-o"></i> Delete</a>  
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>


                        </tbody>
                    </table>
                    <?php
                    echo $ex_error;
                    ?>
                </div>

            </section>
        </div>			


        <div class="col-sm-3">
            <section class="panel panel-primary">
                <header class="panel-heading">
                    Добавить нового пользователя

                </header>
                <form method="POST" action="<?php echo base_url('adminex/adminex/users'); ?>">
                    <div class="panel-body">

                        <div class="form">

                            <div class="form-group">
                                <div class="row">

                                    <div class="col-sm-12">
                                        <label for="exampleInputEmail1"><b>Имя пользователя</b></label>                  
                                        <input type="text" class="form-control m-bot15" placeholder="Логин" name="exf_login">
                                        <input type="hidden" name="exf_add">

                                        <label for="exampleInputEmail1">ФИО</label>                  
                                        <input type="text" class="form-control m-bot15" placeholder="Асанов Акмат" name="exf_fio">

                                        <label for="exampleInputEmail1">Телефон</label>                  
                                        <input type="text" class="form-control m-bot15" placeholder="0772-84-30-93" name="exf_tel">

                                        <label for="exampleInputEmail1"><b>Пароль</b></label>                  
                                        <input type="password" class="form-control m-bot15" placeholder="" name="exf_pass">

                                        <label for="exampleInputEmail1">Роль</label>
                                        <select class="form-control m-bot15"  name="exf_rol">
                                            <option value="1">Администратор</option>
                                            <option value="2">Редактор</option>
                                            <option value="3">Автор</option>
                                            <option value="4">Участник</option>
                                            <option value="5">Подписчик</option>
                                        </select>                                       



                                    </div>


                                </div>

                            </div>



                        </div>





                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-primary-m" type="submit"><i class="fa fa-save"></i> Сохранить</button>
                    </div>
                </form>
            </section>
        </div>            


    </div>

</div>