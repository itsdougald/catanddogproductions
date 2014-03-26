<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>jquery-php test</title>
        <style type="text/css">
        body { margin:0 auto 0 auto; color:#000; font-family:Georgia, "Times New Roman", Times, serif; font-size:16px; background-color:#666666; }

        .page { margin:100px auto 0 auto; width:750px;}

        /*MENU START*/
        #menu  { list-style:none; margin:0px; padding:0px;}

        #menu li { list-style:none; display:inline; }
        li.active a { background-color:#FFF;color:#000; }

        #menu li a,#menu li a:link { float:left; background-color:#3c3c3c; margin-right:5px; padding:7px; color:#FFFFFF; text-decoration:none; width:6em; text-align:center;}
        #menu li a:visited { }
        #menu li a:hover { background-color:#327cc8 }
        #menu li a:active { background-color:#FFF;color:#000; }
        /* MENU END*/

        #outcontent {clear:both; background-color:#FFFFFF; }
        .content {background-color:#FFF; padding:10px; height:300px; margin:0px; }

        #loading { clear:both; background:url(wait.gif) center top no-repeat; text-align:center;padding:33px 0px 0px 0px; font-size:12px;display:none; font-family:Verdana, Arial, Helvetica, sans-serif; }
        </style>
        <script src="jquery.min.js" type="text/javascript"></script>
        
        <script>
          // When the document loads do everything inside here ...
             $(document).ready(function(){
                 $('.content').load('boo.php');	//by default initally load text from boo.php
                 $('#menu a').click(function() { //start function when any link is clicked
                                $(".content").slideUp("slow");
                                 var content_show = $(this).attr("title"); //retrieve title of link so we can compare with php file
                                        $.ajax({
                                        method: "get",url: "boo.php",data: "page="+content_show,
                                        beforeSend: function(){$("#loading").show("fast");}, //show loading just when link is clicked
                                        complete: function(){ $("#loading").hide("fast");}, //stop showing loading when the process is complete
                                        success: function(html){ //so, if data is retrieved, store it in html
                                        $(".content").show("slow"); //animation
                                        $(".content").html(html); //show the html inside .content div
                         }
                 }); //close $.ajax(
                 }); //close click(
                 }); //close $(
        </script>

   </head>

    <body>
    <div class="page">
    <ul id="menu">
    <!-- you can add more tabs as you wish !-->
             <li id="about"><a href="#" title="about">About</a></li>
            <li id="portfolio"><a href="#" title="portfolio">Portfolio</a></li>
            <li id="contact"><a href="#" title="contact">Contact</a></li>
	</ul>
	<br style="clear:both;" />
        <!-- #outcontent - Overall div containing Loading div &amp; content div !-->
        <div id="outcontent">
          <div id="loading">LOADING</div>
          <div class="content"></div> 
        </div>
        <!-- #outcontent end !-->
    </div>
</body>


</html>