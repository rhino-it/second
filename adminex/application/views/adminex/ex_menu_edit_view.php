<div class="wrapper">
    <div class="row">
        <?php
        foreach ($ex_menu as $item) {
            ?>
            <form action="<?php echo $_SESSION['url']; ?>" method="POST">
                <div class="col-md-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Редактировать меню
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
                                            <input type="text" class="form-control m-bot15" name="exf_menu_edit" value="<?php echo $item['name_' . $_SESSION['ex_lg']]; ?>">
                                            <input type="hidden" name="exf_id_edit" value="<?php echo $ex_id; ?>">
                                            <label for="exampleInputEmail1">Выберите страницу</label>
                                            <select class="form-control m-bot15" name="exf_page">
                                                <option value="0">НЕТ </option>                                        
                                                <?php
                                                foreach ($ex_pages as $pages) {
                                                    if ($pages['id'] == $item['id_page'])
                                                        $s = ' selected ';
                                                    else
                                                        $s = '';
                                                    echo '<option ' . $s . ' value="' . $pages['id'] . '">' . $pages['tema_' . $_SESSION['ex_lg']] . '</option>';
                                                }
                                                ?>
                                            </select>                                       
                                            <label for="exampleInputEmail1">URL</label>
                                            <div class="iconic-input">
                                                <i class="fa fa-chain"></i>
                                                <input type="text" class="form-control m-bot15" name="exf_url" placeholder="http:\\" value="<?php echo $item['url']; ?>">
                                            </div>  
                                            <select class="form-control m-bot15" name="exf_target">
                                                <option <?php if ($item['target'] == 0) echo ' selected '; ?> value="0">Открыть ссылку в родительском окне </option>
                                                <option <?php if ($item['target'] == 1) echo ' selected '; ?> value="1">Открыть ссылку в новом окне </option>
                                            </select>  
                                            <div class="iconic-input">
                                                <i class="fa fa-sort-numeric-asc"></i>
                                                <input type="text" class="form-control m-bot15" name="exf_sort" value="<?php echo $item['sort']; ?>" placeholder="Позиция">
                                            </div>                                         

                                        </div>
                                    </div>
                                </div>
                            </div>                                      
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Сохранить изменения</button>
                        </div>
                    </div>                
                </div>   
            </form>
    <?php
}
?>
    </div>
</div>