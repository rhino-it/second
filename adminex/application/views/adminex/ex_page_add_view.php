
<div class="wrapper">
    <div class="row">

        <div class="col-lg-12">
            <form action="<?php echo base_url('adminex/adminex/page'); ?>" method="POST" class="form-horizontal">
                <section class="panel panel-primary">
                    <header class="panel-heading">
                        Добавить запись

                    </header>

                    <div class="panel-body">
                        <div class="form">


                            <div class="form-group">
                                <div class="col-sm-3">
                                    <label><b>Формат</b></label>
                                    <select name="exf_type_page" class="form-control m-bot15">
                                        <?php
                                        $i = 0;
                                        foreach ($ex_type_page as $item) {
                                            ?>                                        
                                            <option value="<?php echo $item['id']; ?>"><?php echo $item['name_' . $_SESSION['ex_lg']]; ?></option>
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
                                        foreach ($ex_news_tema as $item) {
                                            ?>                                        
                                            <option value="<?php echo $item['id']; ?>"><?php echo $item['name_' . $_SESSION['ex_lg']]; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>                                       
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-9">	
                                    <div class="iconic-input">
                                        <i class="fa fa-location-arrow"></i>
                                        <input name="exf_address" type="text" class="form-control m-bot15" placeholder="Место проведения собрания">
                                        <input name="exf_add" type="hidden">
                                    </div>
                                    <label> Время проведения</label>

                                    <div class="form-group">

                                        <div class="col-md-4">
                                            <input name="exf_vrem_ot"  size="16" type="text" value="<?php echo date("Y-m-d H:i"); ?>" readonly class="form_datetime form-control">
                                        </div>


                                        <div class="col-md-4">
                                            <input name="exf_vrem_do"  size="16" type="text" value="<?php echo date("Y-m-d H:i"); ?>" readonly class="form_datetime form-control">
                                        </div>
                                    </div>                                    



                                </div>	

                                <div class="col-sm-12">
                                    <label for="exampleInputEmail1"><b>Введите заголовок</b></label>
                                    <input name="exf_tema" class="form-control" id="focusedInput" type="text" placeholder="Заголовок">

                                </div>

                                <div class="col-sm-12"><br>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4 col-lg-2">
                                            <label for="exampleInputEmail1">Главное фото</label>

                                            <div class="fileupload-new thumbnail img_block" onclick="m_mode(1)" data-toggle="modal" data-target="#myModal1" style="cursor: pointer;">
                                                <img id="img_g" class="" src="<?php echo base_url('adminex/asset/images/gallery/add-image.svg'); ?>" alt="" />                        
                                            </div>
                                            <input id="g_photo" type="hidden" value="" name="exf_glav_photo">
                                            <input id="g_photo_thumb" type="hidden" value="" name="exf_glav_photo_thumb">

                                        </div>
                                        <div class="col-sm-6 col-md-8 col-lg-10">
                                            <label for="exampleInputEmail1">Видеов</label>
                                            <div class="iconic-input">
                                                <i class="fa fa-file-video-o"></i>
                                                <input name="exf_video_url" type="text" class="form-control m-bot15" placeholder="URL видео">
                                            </div>
                                            <label for="exampleInputEmail1">Аудио (MP3)</label>
                                            <div class="iconic-input">
                                                <i class="fa fa-file-audio-o"></i>
                                                <input name="exf_audio_url" type="text" class="form-control m-bot15" placeholder="URL аудио">
                                            </div>

                                            <label for="exampleInputEmail1">URL</label>
                                            <div class="iconic-input">
                                                <i class="fa fa-chain"></i>
                                                <input name="exf_url" type="text" class="form-control m-bot15" placeholder="http:\\">
                                            </div> 

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <textarea class="form-control ckeditor" name="exf_text" rows="6"></textarea>
                                </div>
                            </div>

                            <label for="exampleInputEmail1">Фото сюжет</label>
                            <div class="form-group last">
                                <div class="col-md-12">
                                    <span id="f_container">
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
                                            var urlb = '<?php echo base_url('adminex/asset/images/photos/thumb/'); ?>';
                                    </script>

                                    <input type="hidden" id="img_item_array" value="" name="img_item_array">
                                    <input type="hidden" id="img_item_th_array" value="" name="img_item_th_array">

                                </div>
                            </div>										




                        </div>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-primary-m" type="submit"><i class="fa fa-save"></i> Сохранить</button>
                    </div>
                </section>
            </form>
        </div>
    </div>

</div>



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


