<div class="wrapper">
    <div class="row">
        <div class="col-sm-8">
            <section class="panel panel-default">
                <header class="panel-heading">
                    <?php
                    $s = 'Меню';
                    $k=0;
                    foreach ($ex_menu_name as $item) {
                        $s = $item['name_' . $_SESSION['ex_lg']];
                        $k = $item['id_parent'];
                    }
                    echo $s;
                    ?>                    

                </header>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th width="5%">№</th>
                                <th>Название меню</th>                                                             
                                <th width="5%"><i class="fa fa-sort-numeric-asc"></i></th>
                                <th width="25%">Редактор</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            foreach ($ex_menu as $item) {
                                $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><a href="<?php echo base_url('adminex/adminex/menu/' . $item['id']); ?>" >
                                            <?php
                                            echo $item['name_' . $_SESSION['ex_lg']];
                                            ?>
                                        </a>
                                        <span class="badge badge-info">
                                        <?php
                                        $this->db->where('id_parent', $item['id']);
                                        $this->db->from('ex_menu');
                                        echo $this->db->count_all_results();
                                        ?></span>
                                    </td>  
                                    <td>
                                        <?php echo $item['sort']; ?>
                                    </td>                                    
                                    <td>
                                        <a href="<?php echo base_url('adminex/adminex/menu_edit/' . $item['id']); ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                        <a href="<?php echo base_url('adminex/adminex/menu_delete/' . $item['id']); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete</a>  
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
                <div class="panel-footer">
                    <a href="<?php echo base_url('adminex/adminex/menu/' . $k); ?>" class="btn btn-primary  btn-sm"><i class="fa fa-chevron-left"></i> Назад</a>  
                </div>                

            </section>
        </div>



        <form action="<?php echo base_url('adminex/adminex/menu/' . $ex_id_parent); ?>" method="POST">
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Добавить новую
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="form">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="exampleInputEmail1"><b>Текст ссылки</b></label>                        
                                        <input type="text" class="form-control m-bot15" name="exf_menu_text" placeholder="Введите текст">
                                        <input type="hidden" name="exf_id_parent" value="<?php echo $ex_id_parent;?>">
                                        <label for="exampleInputEmail1">Выберите страницу</label>
                                        <select class="form-control m-bot15" name="exf_page">
                                            <option value="0">НЕТ </option>                                        
                                            <?php
                                            foreach ($ex_pages as $item) {
                                                echo '<option value="' . $item['id'] . '">' . $item['tema_' . $_SESSION['ex_lg']] . '</option>';
                                            }
                                            ?>
                                        </select>                                       
                                        <label for="exampleInputEmail1">URL</label>
                                        <div class="iconic-input">
                                            <i class="fa fa-chain"></i>
                                            <input type="text" class="form-control m-bot15" name="exf_url" placeholder="http:\\">
                                        </div>  
                                        <select class="form-control m-bot15" name="exf_target">
                                            <option value="0">Открыть ссылку в родительском окне </option>
                                            <option value="1">Открыть ссылку в новом окне </option>
                                        </select>   
                                        <div class="iconic-input">
                                            <i class="fa fa-sort-numeric-asc"></i>
                                            <input type="text" class="form-control m-bot15" name="exf_sort" placeholder="Позиция">
                                        </div>                                         
                                    </div>
                                </div>
                            </div>
                        </div>                                      
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-primary-m" type="submit"><i class="fa fa-save"></i> Сохранить</button>
                    </div>
                </div>                
            </div>   
        </form>    
    </div>
</div>