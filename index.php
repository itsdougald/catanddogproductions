<?php
/*
 * @author The Dog
 * @date 6 Sep 2006
 * @update 	
 * 			02/02/2007 added in new links to includes
 * 			05/02/2007 embedded links to photos on flickr - deleted dubai images
 *			24/07/2007 split news into General News and Sport News
 * I am the index page 
 */
?>
<?php 
 	include 'application.php'; 
	include $ROOT.'/includes/header.php'; 
?>	
<body id="catanddog" class="homepage">
<?php
	include $ROOT.'/includes/tab.php'; 
 	include $ROOT.'/includes/side.php'; ?>
	
	
	<div id="mainContent">
	<h1>Cat And Dog Productions</h1>
	<p>Cat and Dog productions draws you into our lives since we left the rugged shores of England and living down under..</p>
<div id="cse" style="width: 100%;">Loading</div>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript">
  google.load('search', '1', {language : 'en'});
  google.setOnLoadCallback(function() {
    var customSearchControl = new google.search.CustomSearchControl('017655845117816283000:zsrspc7gqsm');
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    customSearchControl.draw('cse');
  }, true);
</script>
<link rel="stylesheet" href="http://www.google.com/cse/style/look/default.css" type="text/css" />
	<h2>News</h2>
	<h3>General</h3>
	<ul>
	<li><a href="/travel/holidays/uk.trip.2014.php">UK Trip</a> [ 2014 Jul - Aug ]</li>
	<li><a href="/australia/vivid.2014.php">Vivid: Light show in Sydney</a> [ 2014 Jun ]</li>
    <li><a href="<?php echo $EXETEL_HOME_2014 ?>/06Jun/TT Birthday/index.html">Tom Tom's Birthday</a> [ 2014 Jun ]</li>
    <li><a href="<?php echo $EXETEL_HOME_2014 ?>/04Apr/Nannys/index.html">Nanny galore</a> [ 2014 Apr ]</li>
    <li><a href="<?php echo $EXETEL_HOME_2014 ?>/04Apr/Easter.egg.hunt/index.html">Easter Egg Hunt</a> [ 2014 Apr ]</li>
    <li><a href="<?php echo $EXETEL_HOME_2014 ?>/04Apr/Beer brewing/index.html">How to brew beer</a> [ 2014 Apr ]</li>
    <li><a href="<?php echo $EXETEL_HOME_2014 ?>/03Mar/2014_03_Guppy Family/index.html">Coogee: Family photo shoot</a> [ 2014 Mar ]</li>
    <li><a href="<?php echo $EXETEL_HOME_2014 ?>/03Mar/Newport.Holiday/index.html">Holiday in Newport</a> [ 2014 Mar ]</li>
	<li><a href="<?php echo $EXETEL_HOME_2014 ?>/02Feb/marks.40/index.html">Marks 40th</a> [ 2014 Mar ]</li>
	<li><a href="<?php echo $EXETEL_HOME_2014 ?>/02Feb/Sian.rob.engagement/index.html">Sian and Ron's engagement</a> [ 2014 Mar ]</li>
	<li><a href="<?php echo $EXETEL_HOME_2014 ?>/01Jan/Duck.70/index.html">Ducks 70th</a> [ 2014 Jan ]</li>
	<li><a href="<?php echo $EXETEL_HOME_2014 ?>/01Jan/Aus.day/index.html">Australia Day</a> [ 2014 Jan ]</li>
	<li><a href="<?php echo $EXETEL_HOME_2014 ?>/01Jan/Orb concert/index.html">Orb Concert with Mark</a> [ 2014 Jan ]</li>
	</ul>
	
	<h3>Sport</h3>
	<ul>
	TOD:UPDATE FOOTBALL RESULTS HERE]
	<li>Queens Park Lions 1 (1) v (0) 1 Coogee United [ 2014 Aug 10 ]</li>
	<li>Queens Park Lions 1 (0) v (0) 0 Maroubra United [ 2014 Aug 3 ]</li>
	<li>Queens Park Lions 0 (0) v (0) 2 Dunbar Rovers [ 2014 Jul 27 ]</li>
	<li>Maroubra United (0) v (4) 9 Queens Park Lions [ 2014 Jul  ]</li>
	<li>Waverley Old Boys (0) v (2) 1 Queens Park Lions [ 2014 Jul ]</li>
	<li>Queens Park Lions 0 (0) v (3) Brookvale [ 2014 Mar 23 ]</li>
	<li>Brookvale 0 (0) v (2) 4 Queens Park Lions (Emma G 2, Tess, Emma C) [ 2014 Mar 16 ]</li>
	</ul>
		
		<h3>Kids</h3>
	<ul>
	<li><a href="<?php echo $EXETEL_HOME_2014 ?>/06June/kids/index.html">June</a></li>
	<li><a href="<?php echo $EXETEL_HOME_2014 ?>/05May/kids/index.html">May</a></li>
	<li><a href="<?php echo $EXETEL_HOME_2014 ?>/04Apr/kids/index.html">Apr</a></li>
	<li><a href="<?php echo $EXETEL_HOME_2014 ?>/03Mar/kids/index.html">Mar</a></li>
	<li><a href="<?php echo $EXETEL_HOME_2014 ?>/02Feb/kids/index.html">Feb</a></li>
	<li><a href="<?php echo $EXETEL_HOME_2014 ?>/01Jan/kids/index.html">Jan</a></li>
	
		</ul>
	
	<h2>RSS Feed</h2>
	<p>Catch all the up to date headlines and news via the Cat and Dog Production <a href="catanddogfeed.xml"><img src="/images/rss.gif" alt="">Feed</a></p>.
    
        <hr class="hide">
      </div>
      <!-- closes #mainContent-->
    </div>
    <!-- closes #mBody-->
  </div>
  <!-- footer  -->
  <?php include $ROOT.'/includes/footer.php'; ?>
