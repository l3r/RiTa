<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Downloads</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="js/vendor/modernizr-2.6.2.min.js"></script>
  <script type="text/javascript" src="js/vendor/jquery-1.11.3.min.js"></script>
  <script language="javascript" src="js/highlight.js"></script>

<script type="text/javascript">

var V = '1.0.90';

$(document).ready(function() {

        var theHtml = '<h3>Downloads</h3><br/><b>RiTa library</b>&nbsp; &nbsp;(java, js, reference, examples, tutorial, src)<p/> ';

        theHtml += '<a href="./RiTa-latest.zip">RiTa-'+V+'.zip</a><br/>&nbsp;<p/>';

        theHtml += '<b>RiTa.js</b>&nbsp; &nbsp;(js-source only)<p/>'
            + '<a href="./rita-latest.micro.js">rita-'+V+'.micro.js</a>&nbsp; &nbsp;(core-only, minimized)&nbsp; &nbsp; [100k]<br/>'
            + '<a href="./rita-latest.js">rita-'+V+'.js</a>&nbsp; &nbsp;(complete: lexicon, LTS-rules)&nbsp; &nbsp; [1.8m]<br/>'
            + '<a href="./rita-latest.min.js">rita-'+V+'.min.js</a>&nbsp; &nbsp;(complete, minimized)&nbsp; &nbsp; [1.6m]<p/><br/>'
            + '<p><a href="./ritext-latest.min.js">ritext-'+V+'.min.js</a>&nbsp; &nbsp;(renderer -deprecated)&nbsp; &nbsp; [30k]<p/>';

        theHtml += '&nbsp;<br/><b>RiTa.jar</b>&nbsp; &nbsp;(java-jar only)<p/> <a href="./rita-latest.jar">rita-'+V+'.jar</a><br/><p>';

        theHtml += '&nbsp;</p><h3>Archived Versions</h3>'
            + '<a href="http://rednoise.org/rita-archive/RiTa-1022.zip">RiTa-alpha.1022.zip</a><br/>'
            + '<a href="http://rednoise.org/rita-archive/RiTa.Wordnet-034.zip">RiTa.Wordnet-034.zip</a><br/>&nbsp;<br/>';

        theHtml += '<h3>WordNet-3.1 (osx/unix)</h3>'
            + '<a href="http://rednoise.org/rita-archive/WordNet-3.1.zip">WordNet-3.1.zip</a><br/>&nbsp;<br/>'
            + '<br/>&nbsp;<br/><br/>&nbsp;<br/><br/>&nbsp;<br/><br/>&nbsp;<br/><br/>&nbsp;<br/><br/>&nbsp;<br/><br/>&nbsp;<br/><br/>&nbsp;<br/>';

        $("#version-div").html('<p>'+theHtml+'</p>');
});

</script>
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <b>outdated</b> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->











<!-- 
Add your site or application content here 
  Download    Reference     Examples    Gallery    Contact
-->
<?php include("header.php"); ?>
  
<div class="gd-section pad-large"> 
<div class="gd-center pad-large"> 
<div class="row">
  <div class="col1"></div>
  <div class="col10">
<div id="version-div" height="500" ><p></p><h3>Downloads</h3>

    <h4>RiTa library</h4>


<a href="http://www.rednoise.org/rita/download/RiTa-latest.zip">
<div class="downloadbox">
 <b> RiTa-1.0.95 </b>
  <span>java, js, reference, examples, tutorial, src</span>
</div></a>

<div class="row pad-small">
<h4>RiTa.js<span>(js-only)</span></h4>


<a href="http://www.rednoise.org/rita/download/rita-latest.min.js">
<div class="downloadbox mini">
  rita-latest.min.js
  <span>core, minimized, 90k</span>
</div></a>

<a href="http://www.rednoise.org/rita/download/rita-latest.js">
<div class="downloadbox mini">
rita-latest.js
<span>core, source, 180k</span>
 </div></a>

 <a href="http://www.rednoise.org/rita/download/rita-full-latest.min.js">
<div class="downloadbox mini"> 
rita-full-latest.min.js
<span>complete, minimized, 1.6m</span>
</div></a>

  <a href="http://www.rednoise.org/rita/download/rita-full-1.0.95.js">
<div class="downloadbox mini"> 
rita-full-latest.js
<span>complete, lexicon, LTS-rules, 1.9m</span>
</div></a>

</div>
<div class="row pad-small">
  <h4>JS-components</h4>

    <a href="http://www.rednoise.org/rita/download/rita_dict-1.0.95.js">
<div class="downloadbox mini"> 
    rita_dict-latest.js
  <span>the lexicon, 1.3m</span> </div></a>


  <a href="http://www.rednoise.org/rita/download/rita_lts-latest.js">
    <div class="downloadbox mini"> 
    rita_lts-latest.js
<span>letter-to-sound rules, 300k</span> </div></a>


  <a href="http://www.rednoise.org/rita/download/ritext-latest.min.js">
    <div class="downloadbox mini"> 
    ritext-latest.min.js
<span>renderer, deprecated, 30k</span> </div></a>
</div>

<div class="row pad-small">
  <h4>RiTa.java<span>(java-jar only)</span></h4>

  <a href="http://www.rednoise.org/rita/download/rita-latest.jar">
<div class="downloadbox mini"> 
    rita-latest.jar</div>
  </a>
</div>
<div class="row pad-small">
<hr/>
  <h4>Archived Versions</h4>
  <a href="http://rednoise.org/rita-archive/RiTa-1022.zip">RiTa-alpha.1022.zip</a><br>
  <a href="http://rednoise.org/rita-archive/RiTa.Wordnet-034.zip">RiTa.Wordnet-034.zip</a><br>&nbsp;<br>

  <h4>WordNet-3.1 (osx/unix)</h4>
  <a href="http://rednoise.org/rita-archive/WordNet-3.1.zip">WordNet-3.1.zip</a>
</div>

  </div>
    <div class="col1"></div>
  
</div>
</div>
    </div>

<?php include("footer.php"); ?>


<!-- 
End Site Content 
-->




<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
  e.src='http://www.google-analytics.com/analytics.js';
  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  ga('create','UA-XXXXX-X');ga('send','pageview');
</script>
</body>
</html>