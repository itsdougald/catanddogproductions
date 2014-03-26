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
	<li><a href="<?php echo $EXETEL_HOME_2013 ?>/12Dec/Christmas/index.html">Christmas celebrations</a> [ 2013 Dec 24- Jan 1 ]</li>
	<li><a href="<?php echo $EXETEL_HOME_2013 ?>/10Oct/Holiday/Perth/index.html">Holiday to Perth</a> [ 2013 Oct 10-16 ]</li>
	<li><a href="<?php echo $EXETEL_HOME_2013 ?>/10Oct/Holiday/Bali/index.html">Holiday to Bali with Pops and Duck</a> [ 2013 Oct 2-10 ]</li>
	<li><a href="<?php echo $EXETEL_HOME_2013 ?>/07Jul/index.html">Sophia's 3rd Birthday</a> [ 2013 July 12-13 ]</li>
	<li><a href="<?php echo $EXETEL_HOME_2013 ?>/06Jun/index.html">June</a> [ 2013 June ]</li>
	<li><a href="<?php echo $EXETEL_HOME_2013 ?>/05May/Tim.Moneera.wedding/index.html">Neighbour's wedding</a> [ 2013 May ]</li>
	<li><a href="<?php echo $EXETEL_HOME_2013 ?>/04Apr/kirkin/index.html">Kirkin and Hayley in town!</a> [ 2013 Apr - May]</li>
	<li><a href="<?php echo $EXETEL_HOME_2013 ?>/04Apr/sybio/index.html">Day trip to Sybio zoo and Stanmore Park</a> [ 2013 Apr 3rd]</li>
	<li><a href="<?php echo $EXETEL_HOME_2013 ?>/03Mar/mkr/index.html">My Kitchen Rules</a> [ 2013 Mar 8th]</li>
	<li><a href="/australia/aussies.php">Cat and Dog are now Aussies and join Sophia and Andre to be an Aussie family</a> [ 2013 Mar 7th ]</li>
	<li><a href="<?php echo $EXETEL_HOME_2013 ?>/02Feb/baby.a.first.swim/index.html">Baby A's first swim</a> [ 2013 Feb ]</li>
	<li><a href="<?php echo $EXETEL_HOME_2013 ?>/02Feb/Nielson.bay/index.html">A trip to Nielson Bay</a> [ 2013 Feb ]</li>
	<li><a href="<?php echo $EXETEL_HOME_2013 ?>/02Feb/smurfs.abroad/index.html">Smurf's drop by!</a> [ 2013 Feb ]</li>
	<li><a href="<?php echo $EXETEL_HOME_2013 ?>/01Jan/cat.kayake/index.html">Cat kayaks for R & L b'day</a> [ 2013 Jan ]</li>
	<li><a href="<?php echo $EXETEL_HOME_2013 ?>/01Jan/lyds.ruth.bday/index.html">Clovelly BBQ: Lyds and Ruth Birthday!</a> [ 2013 Jan ]</li>
    </ul>
	
	<h3>Sport</h3>
	<ul>
	TOD:UPDATE FOOTBALL RESULTS HERE]
	<li><a href="/sport/qpl_2013.php#match-09">Queens Park Rangers 1 (0) v (1) 2 Maroubra United</a> [ 2013 June 6 ]</li>
    <li><a href="/sport/qpl_2013.php#match-08">Queens Park Rangers 3 (3) v (0) 0 Coogee United</a> [ 2013 May 26 ]</li>
    <li><a href="/sport/qpl_2013.php#match-sc1">Queens Park Rangers 4 (2) v (0) 0 Brookvale Reserves</a> [ 2013 May 19 ]</li>
    <li><a href="/sport/qpl_2013.php#match-07">Queens Park Rangers 0 (0) v (3) 4 Dunbar Rovers</a> [ 2013 May 12 ]</li>
    <li><a href="/sport/qpl_2013.php#match-05">Queens Park Lions 6 (3) v (0) 1 Maroubra United 2b</a> [ 2013 May 5 ]</li>
	<li><a href="/sport/qpl_2013.php#match-04">Queens Park Lions 4 (1) v (0) 0 Waverley Old Boys 2</a> [ 2013 Apr 28]</li>
    <li><a href="/sport/qpl_2013.php#match-03">Queens Park Lions v Waverley Old Boys 1 - CANCELLED</a> [ 2013 Apr 21]</li>
    <li><a href="/sport/qpl_2013.php#match-02">Queens Park Rangers 8 (3) v (0) 0 Maroubra United 2a</a> [ 2013 Apr 14 ]</li>
    <li><a href="/sport/qpl_2013.php#match-01">Queens Park Rangers 1 (0) v (4) 9 Queens Park Lions</a> [ 2013 Apr 7 ]</li>
    <li><a href="<?php echo $EXETEL_HOME_2013 ?>/03Mar/28MayBeaconHill/index.html">Beacon Hill 2 (1) v (1) 2 Queens Park Rangers</a> [ 2013 Mar 28 ]</li>
    <li><a href="<?php echo $EXETEL_HOME_2013 ?>/03Mar/porky.gala/index.html">Porky Gala Day</a> [ 2013 Mar 10th ]</li>
	
		</ul>
		
		<h3>Kids</h3>
	<ul
	<li><a href="<?php echo $EXETEL_HOME_2013 ?>/12Dec/kids/index.html">Dec</a></li>
	<li><a href="<?php echo $EXETEL_HOME_2013 ?>/11Nov/kids/index.html">Nov</a></li>
	<li><a href="<?php echo $EXETEL_HOME_2013 ?>/10Oct/kids/index.html">Oct</a></li>
	<li><a href="<?php echo $EXETEL_HOME_2013 ?>/09Sep/kids/index.html">Sep</a></li>
	<li><a href="<?php echo $EXETEL_HOME_2013 ?>/08Aug/kids/index.html">Aug</a></li>
	<li><a href="<?php echo $EXETEL_HOME_2013 ?>/07July/kids/index.html">July</a></li>
	<li><a href="<?php echo $EXETEL_HOME_2013 ?>/06June/kids/index.html">June</a></li>
	<li><a href="<?php echo $EXETEL_HOME_2013 ?>/05May/kids/index.html">May</a></li>
	<li><a href="<?php echo $EXETEL_HOME_2013 ?>/04Apr/kids/index.html">Apr</a></li>
	<li><a href="<?php echo $EXETEL_HOME_2013 ?>/03Mar/kids/index.html">Mar</a></li>
	<li><a href="<?php echo $EXETEL_HOME_2013 ?>/02Feb/kids/index.html">Feb</a></li>
	<li><a href="<?php echo $EXETEL_HOME_2013 ?>/01Jan/kids/index.html">Jan</a></li>
	
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
