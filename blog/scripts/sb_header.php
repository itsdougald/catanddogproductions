<?php

        // ---------------
        // INITIALIZE PAGE
        // ---------------
        require_once('sb_functions.php');

        read_config();

        require_once('languages/' . $blog_config->getTag('BLOG_LANGUAGE') . '/strings.php');
        if (!empty($lang)) {
		sb_language($lang);
	}

                if ( ( dirname($_SERVER['PHP_SELF']) == '\\' || dirname($_SERVER['PHP_SELF']) == '/' ) ) {
                        $uri = sb_curPageURL().'/index.php'; // Blog is root level
                } else {
                        $uri = dirname(sb_curPageURL()).'/index.php'; // Blog is in sub-directory
                }

	if (empty($title)) {
		$title = $blog_config->getTag('BLOG_TITLE');
		if (!empty($GLOBALS['lang_string']['title'])) {
			$title = $blog_config->getTag('BLOG_TITLE').' - '.$GLOBALS['lang_string']['title'];
		}
	}
        $locale = str_replace('_', '-', $GLOBALS['lang_string']['locale']);
	$search_uri = dirname($uri) . '/plugins/search.php';

	print "<?xml version=\"1.0\" encoding=\"" . $GLOBALS['lang_string']['html_charset'] . "\" ?>\n";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.1//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <title><?php echo $title; ?></title>

        <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $GLOBALS['lang_string']['html_charset']; ?>" />

        <!-- Meta Data -->
        <meta name="generator" content="Simple PHP Blog" />
        <link rel="alternate" type="application/rss+xml" title="Get RSS 2.0 Feed" href="rss.php<?php echo $categoryid ?>" />
        <link rel="alternate" type="application/rdf+xml" title="Get RDF 1.0 Feed" href="rdf.php<?php echo $categoryid ?>" />
        <link rel="alternate" type="application/atom+xml" title="Get Atom 0.3 Feed" href="atom.php<?php echo $categoryid ?>" />
        <link rel="search" type="application/opensearchdescription+xml" title="<?php echo $title; ?>" href="<?php echo $search_uri ?>" />

        <!-- Meta Data -->
        <!-- http://dublincore.org/documents/dces/ -->
        <meta name="dc.title"       content="<?php echo $title; ?>" />
        <meta name="author"         content="<?php echo $blog_config->getTag('BLOG_AUTHOR') ?>" />
        <meta name="dc.creator"     content="<?php echo $blog_config->getTag('BLOG_AUTHOR') ?>" />
        <meta name="dc.subject"     content="<?php echo $blog_config->getTag('INFO_KEYWORDS') ?>" />
        <meta name="keywords"       content="<?php echo $blog_config->getTag('INFO_KEYWORDS') ?>" />
        <meta name="dc.description" content="<?php echo $blog_config->getTag('INFO_DESCRIPTION') ?>" />
        <meta name="description"    content="<?php echo $blog_config->getTag('INFO_DESCRIPTION') ?>" />
        <meta name="dc.type"        content="weblog" />
        <meta name="dc.type"        content="blog" />
        <meta name="resource-type"  content="document" />
        <meta name="dc.format"      scheme="IMT" content="text/html" />
        <meta name="dc.source"      scheme="URI" content="<?php echo $uri ?>" />
        <meta name="dc.language"    scheme="RFC1766" content="<?php echo $locale ?>" />
        <meta name="dc.coverage"    content="global" />
        <meta name="distribution"   content="GLOBAL" />
        <meta name="dc.rights"      content="<?php echo $blog_config->getTag('INFO_COPYRIGHT') ?>" />
        <meta name="copyright"      content="<?php echo $blog_config->getTag('INFO_COPYRIGHT') ?>" />

        <!-- Robots -->
        <meta name="robots" content="ALL,INDEX,FOLLOW,ARCHIVE" />
        <meta name="revisit-after" content="7 days" />

        <!-- Fav Icon -->
        <link rel="shortcut icon" href="interface/favicon.ico" />

        <link rel="stylesheet" type="text/css" media="all" href="themes/common.css" />
        <link rel="stylesheet" type="text/css" media="all" href="themes/<?php echo $GLOBALS['blog_theme'] ?>/user_style.php" />
        <link rel="stylesheet" type="text/css" media="all" href="themes/<?php echo $GLOBALS['blog_theme'] ?>/style.css" />
        <link rel="stylesheet" type="text/css" media="print" href="themes/print.css" />

	<?php echo $head; ?>
</head>
<?php

if (function_exists('page_content')) {
	if (array_key_exists('print', $_GET) && $_GET['print']==true && function_exists('theme_popuplayout')) {
        	theme_popuplayout();
	} elseif (function_exists('theme_pagelayout')) {
        	theme_pagelayout();
	} else {
		page_content();
	}
}

?>
