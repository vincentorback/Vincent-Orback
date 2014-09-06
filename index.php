<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

$returning = isset($_COOKIE['vorbackFirst']);

if ($returning == false) {
  setcookie("vorbackFirst", "yes", time() + 2592000); // a month
}

?>

<!doctype html>
<!--
  Oh my good it’s so muchy! See the original and beautiful code on github: https://github.com/vincentorback/Vincent-Orback
-->
<html class="no-js">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="noindex, follow">
<title>Vincent Orback - Web designer och developer in Stockholm</title>
<?php if ($returning == false) : ?>
<noscript>
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/noscript.css">
</noscript>
<style id="crucial-css">
*,*:after,*:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}body{position:relative;background:#1eb0e9;font-family:"Source Sans Pro","HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:400;font-size:110%;line-height:1.5;color:#fff;margin:0}a{color:#fff;display:block;padding:1.5em 2.25em;text-decoration:none;letter-spacing:1px}ul{list-style:none}li{display:inline-block}html,body,.Sitehead,.Content,.Sitehead-wrapper{height:100%}.Sitehead-wrapper{width:90%;max-width:1280px;margin:0 auto}.Sitehead-inner{position:absolute;top:auto;bottom:15%}.Sitehead-title{font-size:125px;line-height:1;font-weight:600;margin:0}.Sitehead-subtitle{margin:0;margin-top:.5em;letter-spacing:1px;line-height:1.2;font-size:1.75em;max-width:600px}.Navigation{position:absolute;top:7px;right:7%;right:calc(5% - 1.75em);font-size:1.05em}.Navigation-toggle{display:none}.Sitemain{background:#14ab30;}
</style>
<script>
(function () {
  'use strict';

  var win = window,
    doc = document,
    head = doc.head,
    img,
    cssLink,
    fontLink,
    crucialCss,
    cb = function () {
      cssLink = doc.createElement('link');
      fontLink = doc.createElement('link');
      crucialCss = doc.getElementById('crucial-css');

      if (!(cssLink.hasOwnProperty('onload'))) {
        img = doc.createElement('img');
        img.onerror = function () {
          crucialCss.parentNode.removeChild(crucialCss);
        };
        img.src = 'style.css';
      } else {
        cssLink.onload = function () {
          crucialCss.parentNode.removeChild(crucialCss);
        };
      }

      cssLink.rel = 'stylesheet';
      fontLink.rel = 'stylesheet';

      cssLink.href = '/css/style.css';
      fontLink.href = 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600&subset=latin';

      head
        .appendChild(cssLink, head)
        .appendChild(fontLink, head);
    },
    raf = win.requestAnimationFrame || win.mozRequestAnimationFrame || win.webkitRequestAnimationFrame || win.msRequestAnimationFrame;

  if (raf) {
    raf(cb);
  } else {
    win.addEventListener('load', cb);
  }

}());
</script>
<?php else : ?>
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
<link rel="stylesheet" href="/css/style.css">
<?php endif; ?>
<link rel="icon" href="/images/icons/favicon.png">
<!--[if IE]><link rel="shortcut icon" href="/images/icons/favicon.ico"><![endif]-->
</head>
<body id="page-front" class="Page-front">

<nav id="navigation" class="Navigation" role="navigation">
  <ul>
    <li><a href="#my-work" class="is-active js-scroll"><span>Work</span></a></li>
    <li><a href="/about-me/" class="js-transitionHalf"><span>About me</span></a></li>
    <li><a href="/blog/" class="js-transitionHalf"><span>Blog</span></a></li>
    <li><a href="/contact/" class="js-transitionHalf"><span>Contact</span></a></li>
  </ul>
  <ul class="Navigation-social">
    <li><a href="https://twitter.com/vorback" class="Social Social--twitter icon icon-twitter" title="@vorback" rel="me"></a></li>
    <li><a href="https://github.com/vincentorback" class="Social Social--github icon icon-github" title="GitHub" rel="me"></a></li>
    <li><a href="http://se.linkedin.com/pub/vincent-orback/50/957/457/" class="Social Social--linkedin icon icon-linkedin" title="LinkedIn" rel="me"></a></li>
  </ul>
</nav>

<div id="content" class="Content">

<header class="Sitehead" role="banner">
  <div class="Sitehead-wrapper">
    <div class="Sitehead-inner">
      <h1 class="Sitehead-title">Vincent Orback</h1>
      <h2 class="Sitehead-subtitle">Front-end developer and web designer<span class="u-textTruncate"> in Stockholm, Sweden</span></h2>
    </div>
  </div>
  <button class="Navigation-toggle js-navToggle" type="button" role="button" aria-controls="navigation">Navigation</button>
</header>

<main id="my-work" class="Sitemain" role="main">

  <article class="WorkItem WorkItem--coop" id="coop" itemscope itemtype="http://schema.org/CreativeWork">
    <div class="u-wrapper--L u-posRelative u-heightFull">
      <div class="WorkItem-inner">
        <h1 class="WorkItem-title" itemprop="title">Coop</h1>
        <p itemprop="text">Coop is the second largest grocery retail companies in Sweden with over <span class="u-textTruncate">3 million</span> members. <br>Since 2013 I’ve been working with improving <span class="u-textTruncate">Coop’s website.</span></p>
        <!--<a class="js-transitionWork" href="/work/coop/" data-target="#coop" itemprop="additionalType">Read more</a>-->
        <a href="https://www.coop.se" target="_blank" itemprop="url">Visit Coop</a>
      </div>
    </div>
  </article>

  <article class="WorkItem WorkItem--prophet" id="prophet" itemscope itemtype="http://schema.org/CreativeWork">
    <div class="u-wrapper--L u-posRelative u-heightFull">
      <div class="WorkItem-inner">
        <h1 class="WorkItem-title" itemprop="title">Prophet Cruzin</h1>
        <p itemprop="text">A Swedish lifestyle company designing sweet products that makes everyday life neater.</p>
        <a class="js-transitionWork" href="/work/prophet-cruzin/" data-target="#prophet" itemprop="additionalType">Read more</a>
        <a href="http://prophetcruz.in" target="_blank" itemprop="url">Visit Prophet Cruzin</a>
      </div>
    </div>
  </article>

  <article class="WorkItem WorkItem--arkdes" id="arkdes" itemscope itemtype="http://schema.org/CreativeWork">
    <div class="u-wrapper--L u-posRelative u-heightFull">
      <div class="WorkItem-inner">
        <h1 class="WorkItem-title" itemprop="title">Architecture Now / Stockholm</h1>
        <p itemprop="title">Your guide to exploring the latest architecture in Stockholm and some of the most acclaimed projects in recent years. You’ll get to know a city in the midst of a process of rapid transformation.</p>
        <a class="js-transitionWork" href="/work/architecture-now/" data-target="#arkdes" itemprop="additionalType">Read more</a>
        <a href="http://arkitekturnustockholm.arkdes.se" target="_blank" itemprop="url">Visit Architecture Now</a>
      </div>
    </div>
  </article>

  <article class="WorkItem WorkItem--arcini" id="arcini" itemscope itemtype="http://schema.org/CreativeWork">
    <div class="u-wrapper--L u-posRelative u-heightFull">
      <div class="WorkItem-inner">
        <h1 class="WorkItem-title" itemprop="title">Arcini</h1>
        <p itemprop="title">A personal portfolio for <span class="u-textTruncate">Nikolina Arcini</span>, a professional <span class="u-textTruncate">horse photographer.</span></p>
        <a class="js-transitionWork" href="/work/arcini/" data-target="#arcini" itemprop="additionalType">Read more</a>
        <a href="http://arcini.com" target="_blank" itemprop="url">Visit Arcini</a>
      </div>
    </div>
  </article>

  <article class="WorkItem WorkItem--nordiska" id="nordiska" itemscope itemtype="http://schema.org/CreativeWork">
    <div class="u-wrapper--L u-posRelative u-heightFull">
      <div class="WorkItem-inner">
        <h1 class="WorkItem-title" itemprop="title">The Public’s Choice</h1>
        <p itemprop="title">A touch-based interactive voting contest for Nordiska museet to let the visitor to the museum decide what to <span class="u-textTruncate">exhibit next.</span></p>
        <a class="js-transitionWork" href="/work/the-publics-choice/" data-target="#nordiska" itemprop="additionalType">Read more</a>
        <a href="http://publikensval.nordiskamuseet.se" target="_blank" itemprop="url">Visit The Public’s Choice</a>
      </div>
    </div>
  </article>
<!--
  <article class="WorkItem WorkItem--jensostberg" id="jensostberg" itemscope itemtype="http://schema.org/CreativeWork">
    <div class="u-wrapper--L u-posRelative u-heightFull">
      <div class="WorkItem-inner">
        <h1 class="WorkItem-title" itemprop="title">Jens Östberg</h1>
        <p itemprop="title">Jens Östberg is a choreographer, film director and screenwriter.</p>
        <a class="js-transitionWork" href="/work/jensostberg/" data-target="#jensostberg" itemprop="additionalType">Read more</a>
      </div>
    </div>
  </article>

  <article class="WorkItem WorkItem--joy" id="joy" itemscope itemtype="http://schema.org/CreativeWork">
    <div class="u-wrapper--L u-posRelative u-heightFull">
      <div class="WorkItem-inner">
        <h1 class="WorkItem-title" itemprop="title">Joy</h1>
        <p itemprop="title">Joy tillverkar handgjorda svenska smycken.</p>
        <a class="js-transitionWork" href="/work/joy/" data-target="#joy" itemprop="additionalType">Read more</a>
      </div>
    </div>
  </article>

  <article class="WorkItem WorkItem--comai" id="comai" itemscope itemtype="http://schema.org/CreativeWork">
    <div class="u-wrapper--L u-posRelative u-heightFull">
      <div class="WorkItem-inner">
        <h1 class="WorkItem-title" itemprop="title">Comai</h1>
        <p itemprop="title">Comai utvecklare mobila applikationer för människor med olika kognitiva svårigheter. Deras applikationer gör det lättare att i vardagen utföra diverse uppgifter såsom att hålla koll på pengar, <span class="u-textTruncate">medicinering mm.</span></p>
        <a class="js-transitionWork" href="/work/comai/" data-target="#comai" itemprop="additionalType">Read more</a>
        <a href="http://comai.se" target="_blank" itemprop="url">Visit Comai</a>
      </div>
    </div>
  </article>

  <article class="WorkItem WorkItem--misc" id="misc" itemscope itemtype="http://schema.org/CreativeWork">
    <div class="u-wrapper--L u-posRelative u-heightFull">
      <div class="WorkItem-inner">
        <h1 class="WorkItem-title" itemprop="title">Misc</h1>
        <p itemprop="title">Collection of some other smaller work I’ve done, photographs, <span class="u-textTruncate">jQuery plugins and more!</span></p>
        <a class="js-transitionWork" href="/work/misc/" data-target="#misc" itemprop="additionalType">Read more</a>
        <a href="https://github.com/vincentorback/Vincent-Orback" target="_blank" itemprop="url">Visit min GitHub</a>
      </div>
    </div>
  </article>
-->
</main>

<footer class="Sitefooter" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
  <div class="Sitefooter-info" itemscope itemtype="http://schema.org/Person">
    <a class="name" href="http://vincentorback.se" itemprop="url"><div itemprop="name">Vincent Orback</div></a>
    <div class="jobtitle" itemprop="jobtitle">Web designer and developer</div>
    <div class="address" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
      <div><span itemprop="addressLocality">Stockholm</span></div><div itemprop="addressCountry">, Sweden</div>
    </div>
    <div class="email" itemprop="email"><a href="mailto:vorback@gmail.com" target="_blank" rel="nofollow">vorback@gmail.com</a></div>
  </div>
  <a href="https://github.com/vincentorback/Vincent-Orback" target="_blank" class="Octocat Tooltip Tooltip--top">
    <span class="Tooltip-inner">This website is available on GitHub!</span>
  </a>
</footer>

<!--[if lte IE 8]>
<div class="Alert" role="alertdialog">
  <div class="u-wrapper--L">
    <p>You’re using an outdated browser and I didn’t build this website to support it. You can find a better browser <a href="http://browsehappy.com/">over here</a>.</p>
    <p>This is for your own good!<br> / Vincent</p>
  </div>
  <button type="button" class="Alert-close" aria-title="Close alert"><span class="icon-close"></span></button>
</div>
<![endif]-->
</div>

<script src="/js/main-min.js"></script>
<!--
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-31135100-1', 'vincentorback.se');
ga('send', 'pageview');
</script>
-->
</body>
</html>