
    <?=$error?>
    <?=form_open_multipart('member/register');?>
    <input type="file" name="userfile" size="20" />
    <input type="submit" value="upload" name="upload"/>
    <?=form_close();?>
    <?php
    if($result !=''){
        foreach ($result as $item => $value){
            $image_filename = $result['file_name'];
            $image_size = $result['file_size'];
            $image_width = $result['image_width'];
            $image_height = $result['image_height'];
        }
         
        echo $image_filename.'<br/>';
        echo img('images/'.$image_filename);
        echo '<br/>';
        echo '<span style="">'.$image_width.' x '.$image_height.' ('.$image_size.'kb)</span>';
    }
    ?>