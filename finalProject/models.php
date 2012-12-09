<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
	<meta content="Jeri Wieringa" name="author">
	<meta content="" name="description">
	<meta content="" name="keywords">
    <title>Topic Modeling: Mining Hymns</title>
    <link rel="stylesheet" href="style.css" media="all">
	<link href='http://fonts.googleapis.com/css?family=Tangerine:700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
 <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <script type="text/javascript">
      function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
["Topic", "Frequency"],
["thy thee lord thine heart blest hast word give make call amen grant hear gifts work hope throne strength ",0.89825],
["god holy father spirit praise son bless earth grace eternal prayer heaven heavenly raise souls world hearts glorious lift ",0.80022],
["thou thee art life light good great didst dost soul world free st guide earthly show care divine find ",0.62813],
["day light night bright dark er truth soul shine eyes earth darkness hand lead star turn fount toil morning ",0.62795],
["love peace hour rest cease strength power saviour fear thought words fill breast ear joy sweet bid voice spirits ",0.53166],
["death life christ jesus cross faith heart pain die woe bear full blessed live salvation save grave shame evil ",0.51253],
["glory king god high behold lamb glorious children heavenly saints bring great angels sing joy throne reign love long ",0.44907],
["lord peace mercy amen make hear hath word face path blessed cry hearts gracious shed low wave save arise ",0.43278],
["er earth heaven world tis round hath high angel eye tread voice onward men fire sight present vain true ",0.36369],
["love home heaven loved ll till place loving hand amen er happy side lost joy soul voice dwelling loud ",0.30155],
["god sin blood lord soul mine sins man precious ye prepare grace died hath doth wash press fast sinners ",0.27204],
["love vain tears dust grief human fears faith bowed face pain lips fond weak trembling lives lie time heart ",0.23509],
["nearer time watch pray fight brethren praise temple foe master battle knowledge toil gather sword cross labor holiest ways ",0.17316],
["sweet hope earth joy home golden heav rest precious gladness sadness sound man shining tarry happy woe bliss sits ",0.14789],
["calm ry ev sleep deep asleep en hate weep storms beloved ill bore safe read gain part praise burden ",0.14019],
["forever heav true life christian god strife nly amen trust hearts faith bitter humble lowly pray devil put sins ",0.13638],
["alleluia christ sing hail born morn king word pure songs immortal rise today race sons sky man risen journey ",0.12512],
["mind father things king thine wisdom birth doth bring mortal ages born sing upward spring breath worlds form passions ",0.11674],
["jesus hallelujah sun bread thirst manifest feast morrow give wine chorus made drink stay hasten bears water lay giving ",0.10972],
["divine comforter guide high nature depths poor wake strife things seal starry search sinful cleanse depth join road cry ",0.09722],
["ring land country freedom wild bright bells rich native goodwill liberty hide false noble war wide till duty state ",0.08424],
["room enter late ye city splendor free rich gate haste tree rarest fairest bridal hall gaze festal fills cup ",0.04075],
["refrain meet bright lamps burning lord feet holy returning dead haste marriage base type lo immortal white bridegroom beauty ",0.0407],
["wouldst things woes gold mayst pride beneath hair measure wealth ah die fame great thyself day honoured pleasure colours ",0.03324],
["soul dost things ineffable reach parent fate leave hymns suppliant poured root remain rule eternal mental yield speech laws ",0.03292]
      
      
        ]);
      
        // Create and draw the visualization.
        new google.visualization.PieChart(document.getElementById('visualization_all')).
            draw(data, {title:"25 Topics Across All Hymns"});
      }
      

      google.setOnLoadCallback(drawVisualization);
    </script>
        <script type="text/javascript">
      function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
["Topic", "Frequency"],
["thy thee thine thou heart life blest lord hast grant face power evermore strength throne pray feet amen meet ",0.85788],
["god holy father earth praise spirit son bless light heaven world ages born voice prayer show high souls mighty ",0.77845],
["day light love night er bright dark rest shine find soul darkness truth rise deep divine sorrow living bound ",0.65688],
["lord amen peace mercy hear make grace blessed hearts give cry save hand everlasting hath shed cast saviour sins ",0.53836],
["thou thee art thine life didst great world care st thyself breath dost glorious earthly glory form power guide ",0.53569],
["god man grace heart true word lord pure good made make blood ill raise stand flow poor turn lift ",0.4443],
["christ death life cross sin jesus die free pain salvation bear shame faith flesh dear doth eternal victory foes ",0.42591],
["love jesus loving till home loved ll days savior side amen father fear years dwell pass safe teach lost ",0.37736],
["king sing bring song heavenly mortal high great round glorious praises angels stars raise age immortal ear reign bright ",0.2972],
["glory lamb king throne eternal high saints god behold saviour people church kings blessing slain dying singing power heaven ",0.22753],
["life hath strife grave wave dead dust lives happy skies solemn er trust proclaim endure sway prayers sabbath prayed ",0.20324],
["love grief faith wilt fears pain turn bitter thought weak trembling prayer canst beneath stray woe breast sad send ",0.2005],
["path fear hour bore words presence trod tread dark world choose dread walk storms onward feel suffering waters rose ",0.19652],
["er hath eye tis earth wings ere stands fall dream cup tears endless makes empty toils win appears mournful ",0.18964],
["hope earth sweet joy precious heav follow heard sound wounds dwells rejoice love employ sweeter silence awake returns pilgrim ",0.18407],
["word heaven live give truth silent tongue speak loud reach dwell honour read order flow till sovereign image sense ",0.16066],
["home heaven faith hand evil break eternal work round sight veil array service stand whate serene infinite boundless mighty ",0.1534],
["mine sin soul blood sins precious wash treasure load prepare died righteousness lord claim depart comfort trusting guilt infinite ",0.14697],
["peace cease sweet hate time bid words evening wrong pity fail singing thou yonder thing saved loss fill spake ",0.14178],
["vain things present wise wing desire hand small fly er gather flowing season greet bind poverty sway people table ",0.12595],
["forever heav god christian lowly amen nly grant hearts trust humble race devil put evil wiles uphold pray armor ",0.12512],
["mind soul things light doth dost divine eternal wisdom birth nature earth spring worlds matter root upward true sprung ",0.11491],
["children learn lead cares led filled wisdom taught leave lips guide perfect heaven narrow grateful saviour child feeble ransomed ",0.11383],
["long weary breast lay lead found rock voice shade dark hopes future amid heard abroad looked fainter scenes human ",0.11373],
["calm rest hour gain work comfort tarry plant weeping balm land farewell release sunset psalm inmost shining quiet sow ",0.1131],
["foe crown press bless sword shield battle palm temple wisdom knowledge gifts counsel strive arm banner victory chains depth ",0.11299],
["joy strong living flowing strength bread thirst drink feast sun water wine fount fountain head feed song heavenly jesu ",0.09955],
["found tis voice base ah men child pure virgin pride wealth seed mayst house fled marriage sought wandering shining ",0.08604],
["high place low heaven prepare dwelling cold lie bowed fervent view redeemer dim hours delight maiden seeking terror aged ",0.08447],
["men watch brethren soul toil pray praise time labor ways goodwill hopes eternity called refrain behold height midst gift ",0.08046],
["gloom tomb asleep weep sleep cloud beloved slumber mourn lost angel giveth graves sits dispels repose thoughts spirits fled ",0.07502],
["gladness fair free sadness city splendor golden home tree rich glorious rarest fairest glowing beautiful wondrous upward raiment radiance ",0.07482],
["comforter divine guide bliss search faint implore sinful earnest immortality hours lips favor securely rove cleanse dew nature daily ",0.07046],
["land freedom country guard hills fathers native eternity liberty shore guards shout reach sacred mountain tis roar breeze flower ",0.06739],
["ry ev part common flourish force outward smart blessing mindful hide healing springing er shelter cost offenses support wounds ",0.06454],
["thousand sore merciful blessed dying full wrath woe borne defender ten render ease load members sorely fruitless beaten fury ",0.06396],
["onward speed gospel spread tread angel noblest courage heathen conquering rich flight mount giant idols cheek virtues modest pasture ",0.05434],
["manifest call star sign full clouds addressed anthems raised shines grave sages ascension foam witness manifested miracle myriads celebrate ",0.04427],
["beauty crown hail skies lo chorus lofty hair lyre oppressed ether bliss paradise flesh maid whate start sceptre pang ",0.04231],
["give suppliant streams passions worldly free mine rule blest bestow vow health sickness strife twas diseases grant pour decreed ",0.04071],
["nearer sun joys quick hates naught ways speaketh cheers condemn daunt lived thither seat wing waking griefs earthly master ",0.03988],
["ye late enter bridegroom grow saints bridal prize endure war peak wilderness angels daughters sail chill spouse misery chamber ",0.03961],
["alleluia sing christ today born morn risen victim pay bled christians ris journey rise gracious hail sincere plan pow ",0.0371],
["gold wake strife toil fortune ray token aims sky skill mingled cups heap begone escape fruitful mystic renewed health ",0.03369],
["hallelujah ring chorus wild bells ended dwelleth false winds standeth clay thousand thro flying common falsehood ordainest kindlier larger ",0.0332],
["bright lamps meet refrain burning feet returning holy lord white type gates virgins raised purity haste drink bliss mind ",0.03171],
["fire bear sped woes floods hear realms bearing dire hadst lightning hurled ills mysteries quell savage trackless forms hateful ",0.02849],
["room enter sun morrow ere hasten hall haste stay gate sinner possessed perdition sit anthem fills low feast graciously ",0.01791],
["good world hymns remain mental severed shoot sole armed drop helping begotten spur eye lower prayers gifts limbs impart ",0.00957],
["wouldst life gold pleasure colours lending defining repining nourish fond morrow ve ease chooseth refuseth tending approach gilding building ",0.00608]
      
      
        ]);
      
        // Create and draw the visualization.
        new google.visualization.PieChart(document.getElementById('visualization_all_50')).
            draw(data, {title:"50 Topics Across All Hymns"});
      }
      

      google.setOnLoadCallback(drawVisualization);
    </script>
  </head>
  <body>
  	
  	<?php include 'header.php';?>
  	<div id="single">
    <h3>Topic Modeling Across the Hymns</h3>
<p>Topic-modeling offers another window into patterns across the corpus. Using Mallet, I generated a series of words that tend to occur together across the corpus. One point to consider is that the greater the number of topics, the more refined each individual topic. As you can see below, the two different sets of topics are generally similar, but with some significant differences. I need to look more closely to determine which offers a more useful snapshot of themes throughout the corpus.</p>

    <div id="visualization_all"></div>
    <h4>Top 10 topics</h4>
    <p class="small">thy thee lord thine heart blest hast word give make call amen grant hear gifts work hope throne strength </p>
<p class="small">god holy father spirit praise son bless earth grace eternal prayer heaven heavenly raise souls world hearts glorious lift </p>
<p class="small">thou thee art life light good great didst dost soul world free st guide earthly show care divine find </p>
<p class="small">day light night bright dark er truth soul shine eyes earth darkness hand lead star turn fount toil morning </p>
<p class="small">love peace hour rest cease strength power saviour fear thought words fill breast ear joy sweet bid voice spirits </p>
<p class="small">death life christ jesus cross faith heart pain die woe bear full blessed live salvation save grave shame evil </p>
<p class="small">glory king god high behold lamb glorious children heavenly saints bring great angels sing joy throne reign love long </p>
<p class="small">lord peace mercy amen make hear hath word face path blessed cry hearts gracious shed low wave save arise </p>
<p class="small">er earth heaven world tis round hath high angel eye tread voice onward men fire sight present vain true </p>
<p class="small">love home heaven loved ll till place loving hand amen er happy side lost joy soul voice dwelling loud </p>
<br />

    <div id="visualization_all_50"></div>
    <h4>Top 10 topics</h4>

    <p class="small">thy thee thine thou heart life blest lord hast grant face power evermore strength throne pray feet amen meet </p>
<p class="small">god holy father earth praise spirit son bless light heaven world ages born voice prayer show high souls mighty </p>
<p class="small">day light love night er bright dark rest shine find soul darkness truth rise deep divine sorrow living bound </p>
<p class="small">lord amen peace mercy hear make grace blessed hearts give cry save hand everlasting hath shed cast saviour sins </p>
<p class="small">thou thee art thine life didst great world care st thyself breath dost glorious earthly glory form power guide </p>
<p class="small">god man grace heart true word lord pure good made make blood ill raise stand flow poor turn lift </p>
<p class="small">christ death life cross sin jesus die free pain salvation bear shame faith flesh dear doth eternal victory foes </p>
<p class="small">love jesus loving till home loved ll days savior side amen father fear years dwell pass safe teach lost </p>
<p class="small">king sing bring song heavenly mortal high great round glorious praises angels stars raise age immortal ear reign bright </p>
<p class="small">glory lamb king throne eternal high saints god behold saviour people church kings blessing slain dying singing power heaven </p>

  	</div> <!-- Ends Single Div -->
  	<div id="next">
		<h4><a href="miningassociations.php">Previous</a>, <a href= "modelsplit.php">Next</a></h4>
		<p><a href="intro.php">Return to Introduction</a></p>
	</div> <! ends next div -->						
	</div> <!-- this is the end of the content div -->
	
	<?php include 'footer.php';?>

</body>
</html>