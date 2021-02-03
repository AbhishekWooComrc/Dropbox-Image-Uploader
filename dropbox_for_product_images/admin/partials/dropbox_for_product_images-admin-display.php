<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       www.cedcommerce.com
 * @since      1.0.0
 *
 * @package    Dropbox_for_product_images
 * @subpackage Dropbox_for_product_images/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<?php
// if(isset($_POST['submit_api_details'])) {
//     $api_key = isset($_POST['api_key'])?$_POST['api_key']:'';
//     $secret_key = isset($_POST['api_seceret'])?$_POST['api_seceret']:'';
//     $api_setting = array('api_key'=>$api_key, '$secret_key'=>$secret_key);
//     // global $post;
//     $data = update_option( 'api_setting_key_data', $api_setting);
//     if($data) {
//         echo '<div  class="notice notice-success is-dismissible" style="padding:15px;background-color:#23282d;color:white;font-size:15px;text-align:center;margin:15px;">
//         Data Inserted successfully</div>';
//     }
// }
$code  = isset($_REQUEST['code'])?$_REQUEST['code']:'';
if(!empty($code)) {
    echo $code;
}
?>

<div  class="notice notice-success is-dismissible" id="success_msg" style="padding:15px;background-color:#23282d;color:white;font-size:15px;text-align:center;margin:15px;">
			 Data Inserted successfully</div>
<form method="post" action="" enctype="multipart/form-data" id="myform">
	<div style="padding:15px;background-color:#23282d;color:white;font-size:30px;text-align:center;margin:15px;">
    Dropbox for Product Images
	</div>
	<div style="margin:15px;float:left;margin-left:300px;">
		<div>
			<h1>A specific way to import generate the API key</h1>
            <label for="API KEY">API KEY</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" required name='api_key' id='api_key'> <br> <hr>
            <label for="API SCERET">API SECERET</label>
            <input type="text" required name='api_seceret' id = 'api_seceret'>
            <br><hr>
            <input type="submit" name='submit_api_details' id='submit_api_details' Value = 'GENERATE TOKEN' style="margin-left:100px;padding:10px;background-color:#23282d;color:white;">
		</div>
</form>