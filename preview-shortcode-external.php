<?php 

require_once( dirname(__FILE__) . '/../../../wp-load.php' );

$woo_shortcode_css = content_url() . '/themes/' 
                                   . basename(get_template_directory())
                                   . '/functions/css/shortcodes.css';
?>

<html>

<head>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" ></script>


<link rel="stylesheet" href="<?php echo $woo_shortcode_css; ?>">

</head>
<body>

<?php

$shortcode = isset($_REQUEST['shortcode']) ? $_REQUEST['shortcode'] : '';

// WordPress automatically adds slashes to quotes
// http://stackoverflow.com/questions/3812128/although-magic-quotes-are-turned-off-still-escaped-strings
$shortcode = stripslashes($shortcode);

echo do_shortcode($shortcode);

?>
<script type="text/javascript">

    jQuery('#scn-preview h3:first', window.parent.document).removeClass('scn-loading');

</script>
</body>
</html>
