<?php

$i = 0;
$ar[1][$i]='';
$ar[2][$i]='';
foreach ($ex_type_page as $item) {
    $i++;
    $ar[1][$i] = $item['name_' . $_SESSION['ex_lg']];
    $ar[2][$i] = $item['style'];
}
?>					
<div class="wrapper">
    <div class="row">


        <div class="col-sm-12">
            <section class="panel panel-default">
                <header class="panel-heading">
                    Все записи

                </header>
                
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th width="5%">ID</th>
                                <th>Заголовок</th>
                                <th width="5%">URL</th>
                                <th width="5%">Статус</th>
                                <th width="10%">Тип</th>
                                <th width="5%">Автор</th>
                                <th width="10%">Время</th>
                                <th width="15%" class="text-center">Редактор</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 0;
                        foreach ($ex_pages as $item) {
                            $i++;
                            ?>

                                <tr>
                                    <td><?php echo $item['id']; ?></td>
                                    <td><?php echo $item['tema_' . $_SESSION['ex_lg']]; ?></td>
                                    <td class="text-center"><a href=""><i class="fa fa fa-chain"></i></a></td>
                                    <td class="text-center"><input type="checkbox" name="" value="" <?php if ($item['log'] == 1) echo 'checked'; ?>></td>
                                    <td><span class="label <?php echo $ar[2][$item['id_type_page']]; ?>"><?php echo $ar[1][$item['id_type_page']]; ?></span></td>
                                    <td><?php echo $item['user']; ?></td>
                                    <td><?php echo $item['vrem']; ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo base_url('adminex/adminex/page_edit/' . $item['id']) ?>" class="btn btn-success btn-xs m-bot15"><i class="fa fa-edit"></i> Edit</a>
                                        <a href="<?php echo base_url('adminex/adminex/page_delete/' . $item['id']) ?>" class="btn btn-danger btn-xs m-bot15"><i class="fa fa-trash-o"></i> Delete</a>  
                                    </td>
                                </tr>
                                    <?php
                                }
                                ?>


                        </tbody>
                    </table>
                    <div class="text-center">
                        <ul class="pagination">
                            <?php
                            
                            echo $this->pagination->create_links();
                            ?>

                        </ul>                    
                    </div>

                </div>
                <div class="panel-footer">
                    <a href="<?php echo base_url('adminex/adminex/page_add'); ?>" class="btn btn-primary-m">Добавить запись</a>
                </div>
            </section>
        </div>			



    </div>

</div>
