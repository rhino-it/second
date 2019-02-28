<div class="wrapper">
    <div class="row">

        <div class="col-sm-12">
            <section class="panel panel-default">
                <header class="panel-heading">
                    Библиотека файлов
                </header>
                <div class="panel-body">


                    
                    
                    <form method="POST" action="<?php echo base_url('adminex/adminex/files_copy/');?>" enctype="multipart/form-data">
                        <!-- <div class="form-group last"> -->
 
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <input type="hidden" value="" name="">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">

                                    <img src="<?php echo base_url('adminex/asset/images/gallery/add-image.svg'); ?>" alt="">
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                                <div class="fileupload-exists m-bot15">
                                    <textarea name="exf_title" placeholder="Описания файла" cols="2" style="width: 200px;"></textarea>
                                </div>
                                <div class="m-bot15">


                                    <span class="btn btn-default btn-file">
                                        <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Выбрать файл</span>
                                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Изменить</span>
                                        <input type="file"  name="userfile">
                                    </span>
                                    <button type="submit" name="download" class="btn btn-primary fileupload-exists"><i class="fa fa-save"></i> Сохранить</button> <?php //echo $ex_inf;?>
                                </div>
                            </div>
                        <!-- </div> -->
                    </form>
                    <div class="row">
                        <div class="col-md-12">

                            <?php
                            foreach ($ex_file as $item) {
                                ?>    
                                <div class="fileupload-new thumbnail modal-in">                                                
                                    <div class="img" title="<?php echo $item['name_ru'];?>" style="background-image: url(<?php echo base_url('assets/images/photos/thumb/'.$item['fail_thumb']); ?>)"></div>   
                                    <div class="modal-con">
                                        <a class="modal-link" onclick=" copy_urlb('<?php if ($item['type']==1) echo  base_url('asset/documents/'.$item['fail']); else echo  base_url('asset/images/photos/'.$item['fail']); ?>');"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>  



                        </div>

                    </div>

                    <div class="col-md-12 text-center clearfix">
                        <ul class="pagination">
                            <?php
                            echo $this->pagination->create_links();
                            ?>
                        </ul>  
                    </div>

                    

                </div>
            </section>
        </div>





    </div>

</div>

