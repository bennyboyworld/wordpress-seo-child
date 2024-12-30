<?php
/*
 * Plugin Name:       Yoast SEO Child Plugin
 * Plugin URI:        https://www.wordpressdeveloperlondon.com/yoast-seo/
 * Description:       Customised  Yoast SEO WordPress plugin code (dependancy on Yoast SEO plugin)
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            wordpressdeveloperlondon
 * Author URI:        https://www.wordpressdeveloperlondon.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wordpress-seo-child
 * Domain Path:       /languages
 * Requires Plugins:  wordpress-seo
 */
 
 
/*
 * -----------------------------------------------------------------------------------------------------
 * Customised Yoast SEO WordPress plugin code (dependancy on Yoast SEO plugin)
 * -----------------------------------------------------------------------------------------------------
 */
  
 
/* 
 * WP plugin .css and .js files to enqueue AND WP plugin options page. If form option: 2 is set = respond
 */

if((get_option("wordpressdeveloperlondon_settingwordpress_seo_child_69995")) != 1) 
{
	function wordpressdeveloperlondon_files_wordpress_seo_child_69995()
	{
		$plugin_url = plugin_dir_url(__FILE__);

		wp_enqueue_style("wordpress_seo_child_69995-stylesheet", $plugin_url . "css/style.css");
		wp_enqueue_script("wordpress_seo_child_69995-script", $plugin_url . "js/scripts.js", array("jquery"), "1.0.0", true);
	}
	add_action("wp_enqueue_scripts", "wordpressdeveloperlondon_files_wordpress_seo_child_69995", 80);
}


/* 
 * WP plugin options page. If form option: 2 is set = respond
 */

if(get_option("wordpressdeveloperlondon_setting_htmlwordpress_seo_child_69995") != 1)
{
	function plugin_sourcewordpress_seo_child_69995()
	{
		if(is_home())
		{
			?>
			<div style="text-align:center;"><a href="https://www.wordpressdeveloperlondon.com">wordpressdeveloperlondon.com</a></div>
			<?php
		}
	}
	add_action("wp_footer", "plugin_sourcewordpress_seo_child_69995", 9);
}


/* 
 * WP plugin options page settings
 */

function wordpressdeveloperlondon_register_settingswordpress_seo_child_69995() 
{ 
	register_setting("wordpressdeveloperlondon_options_pagewordpress_seo_child_69995", "wordpressdeveloperlondon_settingwordpress_seo_child_69995", "wdl_callbackwordpress_seo_child_69995");
    register_setting("wordpressdeveloperlondon_options_pagewordpress_seo_child_69995", "wordpressdeveloperlondon_setting_htmlwordpress_seo_child_69995", "wdl_callbackwordpress_seo_child_69995");
}
add_action("admin_init", "wordpressdeveloperlondon_register_settingswordpress_seo_child_69995");


/* 
 * WP plugin options page menu 
 */

function wordpressdeveloperlondon_register_options_pagewordpress_seo_child_69995() 
{
	add_options_page("Yoast SEO Child Plugin Settings", "Yoast SEO Child Plugin Settings", "manage_options", "wordpressdeveloperlondonwordpress_seo_child_69995", "wordpressdeveloperlondon_register_options_page_formwordpress_seo_child_69995");
}
add_action("admin_menu", "wordpressdeveloperlondon_register_options_pagewordpress_seo_child_69995");


/*
 * WP Dashboard plugin settings page html
 */

function wordpressdeveloperlondon_register_options_page_formwordpress_seo_child_69995()
{ 
?>
<div>
	<h1>Yoast SEO Child Plugin Options</h1>
	<form method="post" action="options.php">
		<?php settings_fields("wordpressdeveloperlondon_options_pagewordpress_seo_child_69995"); ?>
		<p><label><input size="10" type="checkbox" name="wordpressdeveloperlondon_settingwordpress_seo_child_69995" value="1" <?php if((get_option("wordpressdeveloperlondon_settingwordpress_seo_child_69995") == 1)) { echo " checked "; } ?> > Tick to disable the .css and .js plugin files<label></p>
        <p><label><input size="10" type="checkbox" name="wordpressdeveloperlondon_setting_htmlwordpress_seo_child_69995" value="1" <?php if((get_option("wordpressdeveloperlondon_setting_htmlwordpress_seo_child_69995") == 1)) { echo " checked "; } ?> > Tick to disable the author footer link</p>
		<?php submit_button(); ?>
	</form>
</div>
<?php
}