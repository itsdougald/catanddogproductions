<?php 
	// ---------------
	// INITIALIZE PAGE
	// ---------------
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require_once('languages/' . $blog_config->getTag('BLOG_LANGUAGE') . '/strings.php');
	sb_language( 'setup' );
	
	// ---------------
	// POST PROCESSING
	// ---------------
	function post_processing() {
	
		// PROCESS POST
		if ( array_key_exists( 'submit', $_POST ) ) {
			$arr = get_installed_plugins();
			for ($i = 0; $i < count( $arr ); $i++ ) {
				
				$plugin_dir = $arr[$i]['directory'];
				$plugin = new $plugin_dir;
				
				$id = $plugin->getPluginID();
				$enabled = $plugin->getEnabled();
				
				if ( array_key_exists( $id, $_POST ) && $_POST[$id] == 'on' ) {
					// Enabled this plugin
					if ( !$enabled ) {
						$plugin->setEnabled( true );
					}
				} else {
					// Disable this plugin
					if ( $enabled ) {
						$plugin->setEnabled( false );
					}
				}
				
				unset( $plugin );
			}
			
			return( true ); // Show default form
		}
		
		// PROCESS GET
		if ( array_key_exists( 'options', $_GET ) && !empty( $_GET[ 'options' ] ) ) {
			$plugin_dir = $_GET[ 'options' ];
			$plugin = new $plugin_dir;
			
			if ( array_key_exists( 'save', $_POST ) ) {
				// Save settings
				
				echo( $plugin->optionsPost() );
				unset( $plugin );
				
				return( true ); // Show default form
			} else {
				// Display options page.
				
				echo( $plugin->optionsForm() );
				unset( $plugin );
				
				return( false ); // Don't show default form
			}
		}
		
		return( true ); // Show default form
	}
	
	// ------------
	// PAGE CONTENT
	// ------------
	function get_installed_plugins() {
		
		$dir = ROOT_DIR . '/scripts/plugins/sidebar/';	
		$plugin_arr = array();
		
		if ( is_dir($dir) ) {
			$dhandle = opendir($dir);
			if ( $dhandle ) {
				$sub_dir = readdir( $dhandle );
				while ( $sub_dir ) {
					if ( is_dir( $dir . $sub_dir ) == true && $sub_dir != '.' && $sub_dir != '..' && file_exists($dir . $sub_dir . '/plugin.php')) {
					
						$plugin_info_arr = array();
						$plugin_info_arr['directory'] = $sub_dir;
						$plugin_info_arr['path'] = $dir . $sub_dir . '/plugin.php';
						
						array_push( $plugin_arr, $plugin_info_arr );
					}
					$sub_dir = readdir( $dhandle );
				}
			}
			closedir( $dhandle );
		}
		
		return( $plugin_arr );
	}
	
	function default_form() {
		echo( '<form action="plugins.php" method="post">' );
		
		$arr = get_installed_plugins();
		for ($i = 0; $i < count( $arr ); $i++ ) {
			// $plugin_path = $arr[$i]['path'];
			
			$plugin_dir = $arr[$i]['directory'];
			$plugin = new $plugin_dir;
			
			$label = $plugin->getTitle();
			$id = $plugin->getPluginID();
			$enabled = $plugin->getEnabled();
			
			$str = HTML_checkbox( $label, $id, null, false, null, $enabled );
			echo( $str );
			
			$hasOptions = $plugin->getOptions();
			if ( $hasOptions ) {
				echo( sprintf( '- <a href="?options=%s">%s</a><br />', $id, 'Options' ) );
			} else {
				echo( '<br />' );
			}
			
			unset( $plugin );
		}
		
		echo( sprintf( '<input type="submit" name="submit" value="%s" />', $GLOBALS['lang_string']['submit_btn'] ) );
		echo( '</form>' );
	}
	
	function page_content() {
		global $lang_string, $blog_config;
	
		// SUBJECT
		$entry_array = array();
		$entry_array[ 'subject' ] = 'sidebar plugins'; // $GLOBALS['lang_string']['title'];
		$entry_array[ 'entry' ] = 'sidebar plugins';
		
		// PAGE CONTENT BEGIN
		ob_start();
		
		$show_default_form = post_processing();
		
		if ( $show_default_form ) {
			default_form();
		}
		
		// PAGE CONTENT END
		$entry_array[ 'entry' ] = ob_get_clean();
		
		// THEME ENTRY
		echo( theme_staticentry( $entry_array ) );
	}

	// ----
	// HTML
	// ----
	
	// Main Page Template
	$page_template = new Template(TEMPLATE_DIR.'layouts/index.tpl');
	
	// Meta Data
	get_init_code($page_template);
	
	// Page Title
	$page_template->setTag('{PAGE_TITLE}', $blog_config->getTag('BLOG_TITLE').' - '.$GLOBALS['lang_string']['title']);
	
	// Theme Layout
	ob_start();
	theme_pagelayout(); 
	$page_template->setTag('{BODY}', ob_get_clean());
		
	// Final Output
	$output = $page_template->getHTML();
	echo($output);
?>
