<!-- <center>
Бул жерде сиздин Плагин...<p>
<img src="<?php echo base_url('adminex/asset/images/plagin.png');?>">
</center> -->

<?php 
$_SESSION['ex_check_a'] = rand(1,10);
$_SESSION['ex_check_b'] = rand(1,10);
?>
<div class="wrapper">
    <div class="row">
        <div class="col-sm-12">
            <section class="panel panel-default">
                <header class="panel-heading">
<span>Список работ</span>
                </header>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th width="3%">№</th>
                                <th width="5%">Год</th>                                                             
                                <!--    <th width="5%"><i class="fa fa-sort-numeric-asc"></i></th> -->
                                <th width="2%">Выпуск</th>
                                <th>Наука</th>
                                <th>Автор</th>
                                <th>Тема</th>
                                <th width="15%">Редактор</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php 
                          foreach ($ex_vak_archive as $year) {
                           ?>
                           <tr> 

                            <td><?php echo $year['id'];      ?></td>
                            <td><?php echo $year['year'];    ?></td> 
                            <td><?php echo $year['edition']; ?></td>
                            <td><?php echo $year['science']; ?></td>
                            <td><?php echo $year['author'];  ?></td>
                            <td><?php if ($year['file']!='' AND file_exists('../assets/pdf/'.$year['file'])){ ?> <a target="blank" href="<?php echo '../../assets/pdf/'.$year['file']; ?>"><?php echo $year['tema_ru']; ?></a> <?php } else echo $year['tema_ru']; ?></td>                
                            <td>
                                <a href="<?php echo base_url('adminex/plagin/edit/'.$year['id']); ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                <a href="<?php echo base_url('adminex/plagin/delete_base/'.$year['id']); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete</a>  
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>

              <ul class="pagination"><?php echo $this->pagination->create_links(); ?></ul>

            <a href="<?php echo base_url('adminex/plagin/add'); ?>" class="btn btn-primary  btn-sm">Добавить статью</a>  
        </div>
        <div class="panel-footer">
            <a href="" class="btn btn-primary  btn-sm"><i class="fa fa-chevron-left"></i> Назад</a>  
        </div>                

    </section>
</div>



</div>
</div>

