<div class="row">
    <div class="col-md-12">

        <?php
        foreach ($ex_file2 as $item) {
            ?> 
            <div class="fileupload-new thumbnail modal-in">                                                
                <div class="img" title="<?php echo $item['name_ru']; ?>" style="background-image: url('<?php echo base_url('assets/images/photos/thumb/' . $item['fail_thumb']); ?>')"></div>   
                <div class="modal-con">
                    
                    <a class="modal-link" onclick="copy_url('<?php
                    if ($item['type'] == 1)
                        echo base_url('assets/documents/' . $item['fail']);
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
    $this->db->where('type', 1);
    $k = $this->db->count_all_results('ex_file');
    ?>

    <div class="col-xs-12 pagi text-center">
        <ul class="pagination">
            <li><a onclick="list_document(0)">«</a></li>
            <?php
            for ($i = 0; $i < ceil($k / 20); $i++) {
                ?>
                <li <?php if ($ex_lis2 == $i) echo ' class="active"'; ?>><a onclick="list_document(<?php echo $i; ?>)"><?php echo $i + 1; ?></a></li>

                <?php
            }
            ?>
            <li><a onclick="list_document(<?php echo ceil($k / 20)-1; ?>)">»</a></li>    
        </ul>
    </div>    
</div>