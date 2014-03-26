<?php
/*
 * Created on 6 Sep 2006 by Neil Guppy aka Dougal ask The Dog
 *
 * I am the homepage to the cat and dog dot dom productions
 */
?>
<?php 
 	include '../../application.php'; 
	include $ROOT.'/includes/header.php'; 
?>	
<body id="catanddog" class="homepage">
<?php
	include $ROOT.'/includes/tab.php'; 
 	include $ROOT.'/includes/side.php'; ?>

	<div id="mainContent">
	<h2>Holidays</h2>
	<ul>
		<li><a href="<?php echo $EXETEL_HOME_2012 ?>/09Sep/Ettalong/index.html">Trip up to Ettalong</a> [Sep 2012]</li>
		<li><a href="<?php echo $EXETEL_HOME_2011 ?>/07Jul/UK.trip/index.html">UK trip</a> [Jul 2011]</li> 
        <li><a href="<?php echo $EXETEL_HOME_2010 ?>/03Mar/Holiday!/">Thailand/UK</a> [Mar 2010]</li> 
        <li><a href="new.zealand.php">New Zealand</a> [Nov - Dec 2009]</li>
        <li><a href="western.australia.php">WA</a> [Jan 2009]</li>
        <li><a href="<?php echo $EXETEL_HOME_2008 ?>/04Apr/01.Philippines/index.html">Philippines</a> [Apr 2008]</li>
        <li><a href="/travel/uk.trip.2006.php">UK</a> [2006]</li>        
	</ul>
	
	<hr class="hide">
      </div>
      <!-- closes #mainContent-->
    </div>
    <!-- closes #mBody-->
  </div>
  <!-- closes #container -->
   
  <!-- footer counter -->
  <?php include $ROOT.'/includes/footer.php'; ?>