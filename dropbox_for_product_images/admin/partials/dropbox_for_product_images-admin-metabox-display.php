
<?php 
// $value = get_post_meta( $post->ID, '_wporg_meta_key', true );
$value = '';
?>
<div style="padding:7px;background-color:#23282d;color:white;font-size:10px;text-align:center;margin:15px;">
   Hey Uplod your images to DROP BOX 
	</div>
<input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">  <br> <hr>
<input type="submit" value  = 'uploads_image' style="margin-left:50px;padding:7px;background-color:#23282d;color:white;"> <br> <hr>
<input type="checkbox" vlaue = 'check_for_use_image'>  images to be used as product images <br> <hr>
<div style="padding:7px;background-color:#23282d;color:white;font-size:10px;text-align:center;margin:15px;">
   The Images Uploaded By you are showingBelow
	</div>



<!-- <select name="wporg_field" id="wporg_field" class="postbox">
    <option value="">Select something...</option>
    <option value="something" <?php selected( $value, 'something' ); ?>>Something</option>
    <option value="else" <?php selected( $value, 'else' ); ?>>Else</option>
</select> -->
<?php
?>