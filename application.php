<?php
/*
 * @author The Dog
 * @date 01/02/2007
 * 
 */
?>
<!-- application -->
<?php 

 switch ($_SERVER["SERVER_NAME"]) {
	case catanddogproductions-dev.com:
		$GLOBALS['APPS_NAME'] = catanddogproductions_dev;
		$GLOBALS['ROOT'] = $_SERVER["DOCUMENT_ROOT"];
		$GLOBALS['WEB_PATH'] = $_SERVER["HTTP_REFERER"];
		$GLOBALS['EXETEL_HOME'] = "http://www.catanddogproductions_dev.com/album/";
   		break;
   	case catanddogproductions-stage.com:
		$GLOBALS['APPS_NAME'] = catanddogproductions_stage;
		$GLOBALS['ROOT'] = $_SERVER["DOCUMENT_ROOT"];
		$GLOBALS['WEB_PATH'] = $_SERVER["HTTP_REFERER"];
		$GLOBALS['EXETEL_HOME'] = "http://www.catanddogproductions_stage.com/album/";
   		break;
	default:
		$GLOBALS['APPS_NAME'] = catanddogproductions;
		$GLOBALS['ROOT'] = $_SERVER["DOCUMENT_ROOT"];
		$GLOBALS['WEB_PATH'] = $_SERVER["HTTP_REFERER"];
		$GLOBALS['EXETEL_HOME_2005'] = "http://www.catanddogproductions.com/album/2005";
   		$GLOBALS['EXETEL_HOME_2006'] = "http://www.catanddogproductions.com/album/2006";
   		$GLOBALS['EXETEL_HOME_2007'] = "http://www.catanddogproductions.com/album/2007";
   		$GLOBALS['EXETEL_HOME_2008'] = "http://www.catanddogproductions.com/album/2008";
		$GLOBALS['EXETEL_HOME_2009'] = "http://www.catanddogproductions.com/album/2009";
		$GLOBALS['EXETEL_HOME_2010'] = "http://www.catanddogproductions.com/album/2010";
   		$GLOBALS['EXETEL_HOME_2011'] = "http://www.catanddogproductions.com/album/2011";
        $GLOBALS['EXETEL_HOME_2012'] = "http://www.catanddogproductions.com/album/2012";
   		$GLOBALS['EXETEL_HOME_2013'] = "http://www.catanddogproductions.com/album/2013";
   		$GLOBALS['EXETEL_HOME_WEDDING'] = "http://www.catanddogproductions.com/album/wedding";
   		$GLOBALS['EXETEL_HOME_WORLDTRIP'] = "http://www.catanddogproductions.com/album/world.trip";
		$GLOBALS['EXETEL_HOME_SOPHIA'] = "http://www.catanddogproductions.com/album/bubba";  
                break;
	}
    
    /* $GLOBALS['EXETEL_HOME'] = "http://home.exetel.com.au/catanddogproductions/photos/album/"; 
	$GLOBALS['EXETEL_HOME_WEDDING'] = "http://home.exetel.com.au/catanddogproductions/photos/album/Wedding.Trip.Home/06.Wedding.Fri.11.May.2007/"; 
	**/
	
?>
<!-- //application -->