<?php

include('functions/start.php');

include('functions/clean.php');

//Custon wp-admin logo
function my_custom_login_logo() {
  echo '<style type="text/css">
		        h1 a {
		          background-size: 227px 85px !important;
		          margin-bottom: 20px !important;
		          background-image:url('.get_bloginfo('template_directory').'/img/logo.png) !important; }
		    </style>';
}

add_action('wp_head','pluginname_ajaxurl');
function pluginname_ajaxurl() {
?>
<script type="text/javascript">
var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
</script>
<?php
}

add_action( 'wp_ajax_email_signup', 'email_signup' );
add_action( 'wp_ajax_nopriv_email_signup', 'email_signup' );

function email_signup(){
	
	$email = $_POST['email'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$zip   = $_POST['zip'];
	
	global $wpdb;
	
	$message = "";
	
	if($zip == ''||$lname == ''||$fname == ''||$email == ''){
		$message = "<strong>Please Fill Out All Form Fields!</strong>"; 
	}
	else{
	
		if(!preg_match("/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*$/i", $email)) { 
	      $message = "<strong>Error</strong>: An invalid email address was provided."; 
	    }
	    else{
	    	$t = time();
	    	$time = date("Y-m-d H:i:s",$t);
	    	$wpdb->insert('email_signups', array(
	    		'email' => $email,
	    		'first_name' => $fname,
	    		'last_name' => $lname,
	    		'zip' => $zip,
	    		'time' => $time)
	    	);
 
			$message = '<p>Oh, you <em>are</em> a wild one, aren’t you? Okay, let’s see how this plays out. We’ll announce our grand prize winner via social and email on <span class="black">Tuesday, May 3</span>, so stay tuned.</p>';
 
	    }
	}
    echo $message;
    exit();
	
}





?>
