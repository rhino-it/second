<?php
$i = 0;
foreach ($ex_type_page as $item) {
    $i++;
    $ar[1][$i] = $item['name_' . $_SESSION['ex_lg']];
    $ar[2][$i] = $item['style'];
}
?>					

<?php
foreach ($ex_page as $item) {
    $_SESSION['id_page'] =$item['id'];
    ?>   
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel panel-success">
                    <header class="panel-heading">
                        Изменить запись
                    </header>
                    <form action="<?php echo base_url('adminex/adminex/page'); ?>" class="form-horizontal" method="POST">
                        <div class="panel-body">
                            <div class="form">

                                <div class="form-group">
                                    <div class="col-sm-3">
                                        <label for="exampleInputEmail1"><b>Формат </b></label>
                                        <select name="exf_type_page" class="form-control m-bot15">
                                            <?php
                                            $i = 0;
                                            foreach ($ex_type_page as $item2) {
                                                ?>                                        
                                                <option <?php echo 'value ="'.$item2['id'].'"'; if ($item2['id'] == $item['id_type_page']) echo 'selected'; ?>><?php echo $item2['name_' . $_SESSION['ex_lg']]; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>										
                                    </div>
                                </div>

                            <div class="form-group">
                                <div class="col-sm-3">
                                    <label>По темам</label>
                                    <select name="exf_page_tema" class="form-control m-bot15">
                                        <?php
                                        $i = 0;
                                        foreach ($ex_news_tema as $item_news) {
                                            ?>                                        
                                            <option value="<?php echo $item['id']; ?>"><?php echo $item_news['name_' . $_SESSION['ex_lg']]; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>                                       
                                </div>
                            </div>

                                <div class="form-group">

                                    <div class="col-sm-9 col-md-6">	
                                        <div class="iconic-input">
                                            <i class="fa fa-location-arrow"></i>
                                            <input name="exf_address" type="text" class="form-control m-bot15" placeholder="Место проведения собрания" value="<?php echo $item['address']; ?>">
                                            <input name="exf_edit" type="hidden" value="<?php echo $item['id'];?>">
                                        </div>
                                        <label> Время проведения</label>  

                                <div class="form-group">

                                    <div class="col-md-4">
                                        <input name="exf_vrem_ot"  size="16" type="text" value="<?php echo $item['vrem_ot']; ?>" readonly class="form_datetime form-control">
                                    </div>

               
                                    <div class="col-md-4">
                                        <input name="exf_vrem_do"  size="16" type="text" value="<?php echo $item['vrem_do']; ?>" readonly class="form_datetime form-control">
                                    </div>
                                </div> 
                                        


                                    </div>	


                                    <div class="col-sm-12">
                                        <label for="exampleInputEmail1"><b>Введите заголовок</b></label>
                                        <input name="exf_tema" class="form-control" id="focusedInput" type="text" placeholder="Заголовок" value="<?php echo $item['tema_' . $_SESSION['ex_lg']]; ?>">

                                    </div>

                                    <div class="col-sm-12"><br>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4 col-lg-2">
                                                <label for="exampleInputEmail1">Главное фото</label>

                                                <div class="fileupload-new thumbnail img_block<?php if ($item['foto'] != '') echo ' picke_d'; ?>" onclick="m_mode(1)" data-toggle="modal" data-target="#myModal1" style="cursor: pointer;">
                                                    <img id="img_g" class="" src="<?php
                                                    if ($item['foto'] != '')
                                                        echo base_url('assets/images/photos/thumb/'.$item['foto_thumb']);
                                                    else
                                                        echo base_url('adminex/asset/images/gallery/add-image.svg');
                                                    ?>" alt="" />
                                                         <?php if ($item['foto'] != '') echo '<div class="img_reload"><i class="fa fa-refresh" aria-hidden="true"></i></div>'; ?>
                                                </div>

                                                <input id="g_photo" type="hidden" value="<?php echo $item['foto'];?>" name="exf_glav_photo">
                                                <input id="g_photo_thumb" type="hidden" value="<?php echo $item['foto_thumb'];?>" name="exf_glav_photo_thumb">
                                                

                                            </div>
                                            <div class="col-sm-6 col-md-8 col-lg-10">
                                                <label for="exampleInputEmail1">Видеов</label>
                                                <div class="iconic-input">
                                                    <i class="fa fa-file-video-o"></i>
                                                    <input name="exf_video_url" type="text" class="form-control m-bot15" placeholder="URL видео" value="<?php echo $item['video']; ?>">
                                                </div>
                                                <label for="exampleInputEmail1">Аудио (MP3)</label>
                                                <div class="iconic-input">
                                                    <i class="fa fa-file-audio-o"></i>
                                                    <input name="exf_audio_url" type="text" class="form-control m-bot15" placeholder="URL аудио" value="<?php echo $item['audio']; ?>">
                                                </div>

                                                <label for="exampleInputEmail1">URL</label>
                                                <div class="iconic-input">
                                                    <i class="fa fa-chain"></i>
                                                    <input name="exf_url" type="text" class="form-control m-bot15" placeholder="http:\\" value="<?php echo $item['url']; ?>">
                                                </div>                                                                                                          


                                            </div>


                                        </div>

                                    </div>


                                </div>



                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <textarea class="form-control ckeditor" name="exf_text" rows="6"><?php echo $item['page_text_' . $_SESSION['ex_lg']]; ?></textarea>
                                    </div>
                                </div>


                                <label for="exampleInputEmail1">Фото сюжет</label>
                                <div class="form-group last">
                                    <div class="col-md-12">
                                        <span id="f_container">
                                            <?php
                                            foreach ($ex_file_page as $item3) {
                                                ?>
                                                <div class="fileupload-new thumbnail modal-in f_item">
                                                    <div class="img" title="<?php echo $item['name_ru'];?>" style="background-image: url(<?php echo $item3['fail']; ?>)"></div>   
                                                    <a class="cancels" onclick="delete_img()"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                    <!-- <input type="hidden" value="" name="">                                             -->
                                                </div>
                                                <?php
                                            }
                                            ?>
                                            <!-- img block -->
                                            
                                        </span>

                                        <div class="thumbnail img_add" onclick="m_mode(2)" data-toggle="modal" data-target="#myModal1">
                                            <img src="<?php echo base_url('adminex/asset/images/gallery/add-image.svg'); ?>" />
                                        </div>

                                    <script>
                                        var img_array = [];
                                        var img_th_array = [];

                                        <?php
                                        if (isset($item['gallery']) == true && $item['gallery']!='') {
                                            
                                            ?>
                                                img_array = "<?php echo $item['gallery']; ?>".split(',');
                                                
                                                img_th_array = "<?php echo $item['gallery_thumb']; ?>".split(',');
                                            <?php
                                        }
                                        ?>
                                            var urlb = '<?php echo base_url('assets/images/photos/thumb/'); ?>';
                                    </script>
                                    
                                            <input type="hidden" id="img_item_array" value='<?php echo $item['gallery']; ?>' name="img_item_array">
                                            <input type="hidden" id="img_item_th_array" value='<?php echo $item['gallery_thumb']; ?>' name="img_item_th_array">
                                            
                                    </div>
                                </div>										




                            </div>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Сохранить изменения</button>
                        </div>
                    </form>
                </section>
            </div>
        </div>

    </div>



    <!-- modal -->
<!-- modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel1">Библиотека файлов</h4>
            </div>
            <div class="modal-body">
                <div class="modal-body" id="folder">
                    <section class="panel">
                        <header class="panel-heading custom-tab dark-tab">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a data-toggle="tab" href="#media">
                                        <i class="fa fa-picture-o"></i> Медиа Файлы
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#document">
                                        <i class="fa fa-file-o"></i> Докумкнты
                                    </a>
                                </li>

                            </ul>
                        </header>
                        <div class="panel-body">
                            <div class="tab-content">                            
                                <div id="media" class="tab-pane active">      </div>


                                <div id="document" class="tab-pane">      </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>

        </div>
    </div>    
</div>
    <?php
}
?>
