<?php
/**
 * Plugin Name: Customize Admin - Ngoc Quy
 * Plugin URI: https://ngocquy02.github.io/page/
 * Description: Tùy biến lại trang quản trị của admin.
 * Version: 1.0
 * Author: Ngoc Quy
 * Author URI: https://www.facebook.com/nguyenngocquy.NNQ
 */

/**
 * Thay đổi logo trang đăng nhập và đổi màu nền
 */
function custom_logo() { ?>
<!-- Css Custom Admin  -->
 	<style type="text/css">
 	#login{
 		padding: 5px!important;
 	}
    #login h1 a {
        background-image: url(<?php echo plugins_url('images/logo.jpg', __FILE__); ?>);
        background-size: 110px 110px;
        width: 110px;
        height: 110px;
        border-radius: 100%;
        border: 6px solid #FFFFFF;
    }
    body{
    	background: #EBEEF0!important;
    }
	</style>

<?php }
add_action('login_enqueue_scripts', 'custom_logo');
