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
	<h2>2015</h2>
  <h3>General</h3>
  <ul>
     <li><a href="<?php echo $EXETEL_HOME_2015 ?>/07Jul/dog.bday/index.html">Dog Birthday</a> [ 2015 July ]</li>
     <li><a href="<?php echo $EXETEL_HOME_2015 ?>/07Jul/sophia.bday/index.html">Sophia Birthday</a> [ 2015 July ]</li>
     <li><a href="<?php echo $EXETEL_HOME_2015 ?>/06Jun/Sophia.award/index.html">Sophia award</a> [ 2015 June ]</li>
     <li><a href="<?php echo $EXETEL_HOME_2015 ?>/06Jun/Rich.40/index.html">Sophia award</a> [ 2015 June ]</li>
     <li><a href="<?php echo $EXETEL_HOME_2015 ?>/06Jun/american.bbq/index.html">American BBQ</a> [ 2015 June ]</li>
     <li><a href="<?php echo $EXETEL_HOME_2015 ?>/05May/hunter.valley/index.html">Hunter Valley with the family</a> [ 2015 May ]</li>
     <li><a href="<?php echo $EXETEL_HOME_2015 ?>/04Apr/Easter/index.html">Easter fun</a> [ 2015 Apr ]</li>
     <li><a href="<?php echo $EXETEL_HOME_2015 ?>/01Jan/kirkin/index.html">Kirkin's 40th!</a> [ 2015 Jan ]</li>
     <li><a href="<?php echo $EXETEL_HOME_2015 ?>/01Jan/SummerHols/index.html">Summer Holiday in Berry</a> [ 2015 Jan ]</li>
  </ul>
  <h3>Sport</h3>
  <ul>
    <li>Queens Park AAW2 2 (1) v (1) 2 Coogee United AAW2 [ 2015 Jul 26 ]</li>
  </ul>
  <ul>
    <li>UNSW 0 (0) v (3) 6 Queens Park AAW2 [ 2015 Jul 19 ]</li>
  </ul>
  <ul>
    <li>Dunbar Rovers 1 (0) v (0) 0 Queens Park AAW2 [ 2015 Jul 12 ]</li>
  </ul>
  <ul>
    <li>Maroubra United 0 (0) v (4) 7 Queens Park AAW2 [ 2015 Jul 4 ]</li>
  </ul>
  <ul>
    <li>Queens Park 2 (1) v (1) 3 Dunabr Rovers AAW2 [ 2015 Jun 28 ]</li>
  </ul>
  <ul>
    <li>Coogee United 1 (0) v (0) 1 Queens Park AAW2 [ 2015 Jun 14 ]</li>
  </ul>
  <ul>
    <li>Queens Park 3 (0) v (0) 0 UNSW AAW2 [ 2015 Jun 7 ]</li>
  </ul>
  <ul>
    <li>Queens Park 1 (1) v (1) 4 Dunbar AAW2 [ 2015 May 31 ]</li>
  </ul>
  <ul>
    <li>Queens Park 4 (3) v (0) 2 Maroubra United AAW2 [ 2015 May 24 ]</li>
  </ul>
  <ul>
    <li>Queens Park 2 (1) v (2) 3 Loko Cove AAW2 [ 2015 May 17 ]</li>
  </ul>
  <ul>
    <li>Queens Park 2 (1) v (2) 3 Loko Cove AAW2 [ 2015 May 17 ]</li>
  </ul>
  <ul>
    <li>Coogee United 1 (0) v (0) 1 Queens Park AAW2 [ 2015 May 10 ]</li>
  </ul>
  <ul>
    <li>UNSW 1 (0) v (0) 0 Queens Park AAW2 [ 2015 May 3 ]</li>
  </ul>
  <ul>
    <li>Queens Park 1 (0) v (0) 0 Maroubra United AAW2 [ 2015 Apr 19 ]</li>
  </ul>
  <ul>
    <li>Loko Cover 3 (3) v (0) 1 Queens Park AAW2 [ 2015 Apr 12 ]</li>
  </ul>
  <ul>
    <li>Queens Park AAW2 2 (0) v (0) 2 Coogee United AAW2 [ 2015 Mar 29]</li>
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
