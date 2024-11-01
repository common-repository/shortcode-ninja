<?php 

require_once( dirname(__FILE__) . '/../../../../wp-load.php' );
                                   
$woo_framework_version = get_option('woo_framework_version');

$MIN_VERSION = '2.9';

$meetsMinVersion = version_compare($woo_framework_version, $MIN_VERSION) >= 0;

$woo_shortcode_css = dirname(__FILE__) .  '/../../../themes/' 
                                   . basename(get_template_directory())
                                   . '/functions/css/shortcodes.css';
                                  
$isWooTheme = file_exists($woo_shortcode_css);

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>

<div id="scn-dialog">

<?php if ( $meetsMinVersion && $isWooTheme ) { ?>
<div id="scn-options">

    <h3>Customize the Shortcode</h3>
    
	<table id="scn-options-table">
	</table>

	<div style="float: left">
	
	    <input type="button" id="scn-btn-cancel" class="button" name="cancel" value="Cancel" accesskey="C" />
	    
	</div>
	<div style="float: right">
	
	    <input type="button" id="scn-btn-preview" class="button" name="preview" value="Preview" accesskey="P" />
	    <input type="button" id="scn-btn-insert" class="button-primary" name="insert" value="Insert" accesskey="I" />
	    
	</div>

</div>

<div id="scn-preview" style="float:left;">

    <h3>Preview</h3>

    <iframe id="scn-preview-iframe" frameborder="0" style="width:100%;height:250px" ></iframe>   
    
</div>

<script type="text/javascript"
	src="../wp-content/plugins/shortcode-ninja/tinymce/js/column-control.js"></script>
<?php  }  else { ?>

<div id="scn-options-error">

    <h3>Ninja Trouble</h3>
    
    <?php if ( $isWooTheme && ( ! $meetsMinVersion ) ) { ?>
    <p>Your version of the Woothemes Framework (<?php echo $woo_framework_version?>) does not yet support shortcodes. Shortcodes
    were introduced with version <?php echo $MIN_VERSION?> of the framework.</p>
    
    <h4>What to do now?</h4>
    
    <p>Upgrading your theme, or rather the WooThemes Framework portion of it, will do the trick.</p>

	<p>The framework is a collection of functionality that all WooThemes
	have in common. In most cases you can update the framework even if you
	have modified your theme, because the framework resides in a separate
	location (under <code>/functions/</code>).</p>
	
	<p>There's a tutorial on how to do this on WooThemes.com: <a
		title="WooThemes Tutorial" target="_blank" href="http://visualshortcodes.com/scn/upgrade-theme">How to upgrade
	your theme</a>.</p>
	
	<p style="font-style:italic;"><b>Remember:</b> Every Ninja has a backup plan. Safe or not, always
	backup your theme before you update it or make changes to it.</p>

<?php } else { ?>

    <p>Looks like your active theme is not from WooThemes. Shortcode Ninja 
    only <strike>works with</strike> <em>fights for</em> themes from WooThemes.</p>
    
    <h4>What to do now?</h4>

	<p>Pick a fight: (1) If you already have a theme from WooThemes, install
	and activate it or (2) if you don't yet have one of the awesome
	WooThemes head over to the <a
		href="http://visualshortcodes.com/scn/woothemes-gallery"
		target="_blank" title="WooThemes Gallery">WooThemes Gallery</a> and get one.</p>

<?php } ?>

<div style="float: right"><input type="button" id="scn-btn-cancel"
	class="button" name="cancel" value="Cancel" accesskey="C" /></div>
</div>

<?php  } ?>

<script type="text/javascript"
	src="../wp-content/plugins/shortcode-ninja/tinymce/js/dialog.js"></script>

</div>

</body>
</html>
