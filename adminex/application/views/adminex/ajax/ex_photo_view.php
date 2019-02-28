<div class="row">
    <div class="col-md-12">

        <?php 
        foreach ($ex_file as $item) {

            ?> 
            <div class="fileupload-new thumbnail modal-in">                                                
                <div class="img" title="<?php echo $item['name_ru']; ?>" style="background-image: url('<?php echo base_url('assets/images/photos/thumb/' . $item['fail_thumb']); ?>')"></div>   
                <div class="modal-con">
                    <a class="modal-ok" onclick="show_img('<?php echo base_url('assets/images/photos/thumb/'); ?>', '<?php echo $item['fail']; ?>', '<?php echo $item['fail_thumb']; ?>', '<?php echo $item['id']; ?>'); $('#myModal1').modal('hide');"><i class="fa fa-check" aria-hidden="true"></i></a>
                    <a class="modal-link" onclick="copy_url('<?php
                    if ($item['type'] == 1)
                        echo 'assets/documents/' . $item['fail'];
                    else
                        echo base_url('assets/images/photos/' . $item['fail']);
                    ?>'); $('#myModal1').modal('hide');"><i class="fa fa-link" aria-hidden="true"></i></a>

                </div>
            </div>
            <?php
        }
        ?>  
    </div>
    <?php
    $this->db->where('type', 0);
    $k = $this->db->count_all_results('ex_file');
    ?>

    <div class="col-xs-12 pagi text-center">
        <ul class="pagination">
            <li><a onclick="list_photo(0)">«</a></li>
            <?php
            for ($i = 0; $i < ceil($k / 20); $i++) {
                ?>
                <li <?php if ($ex_lis == $i) echo ' class="active"'; ?>><a onclick="list_photo(<?php echo $i; ?>)"><?php echo $i + 1; ?></a></li>

                <?php
            }
            ?>
            <li><a onclick="list_photo(<?php echo ceil($k / 20)-1; ?>)">»</a></li>    
        </ul>
    </div>    
</div>