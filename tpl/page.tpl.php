<!doctype html>

<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>"><!--<![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html class="no-js"lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>"><!--<![endif]-->

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <meta name="generator" content="Drupal 6" />
  <meta http-equiv="cleartype" content="on">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <?php print $styles; ?>
  <?php
  // <meta name="HandheldFriendly" content="True">
  // <meta name="MobileOptimized" content="320">
  // <meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0">
  ?>
  <!--[if (lt IE 9) & (!IEMobile)]>
  <script src="/<?php print path_to_theme(); ?>/js/libs/selectivizr-min.js"></script>
  <![endif]-->
  <script src="/<?php print path_to_theme(); ?>/js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body class="<?php print $body_classes; ?>">

<header role="banner" class="page-region"><div class="inner">
  <?php if ($header_top) { ?>
    <div id="header-top" class="blocks"><div class="inner">
      <?php print $header_top; ?>
    </div></div>
  <?php } ?>
  <?php if ($header_main) { ?>
    <div id="header-main" class="blocks"><div class="inner">
      <?php print $header_main; ?>
    </div></div>
  <?php } ?>
  <?php if ($header_second) { ?>
    <div id="header-second" class="blocks">
      <?php print $header_second; ?>
    </div>
    <?php } ?>
</div></header>


<div class="page-region"><div class="inner">

  <?php print $breadcrumb; ?>
  <?php if ($search_box) { ?>
    <div id="search-box">
      <?php print $search_box; ?>
    </div>
  <?php } ?>
  
  <div role="main" id="main"><div class="inner">

    <div id="content-region"><div class="inner">

      <?php if ($content_top) { ?>
        <div id="content-top" class="blocks">
          <?php print $content_top; ?>
        </div> <!-- /#content-top -->
      <?php } ?>

      <?php if ($breadcrumb || $title || $mission || $messages || $help || $tabs) { ?>
        <div id="content-header">
          <?php if ($title) { ?>
            <h1 class="title"><?php print $title; ?></h1>
          <?php } ?>
          <?php if ($mission) { ?>
            <div id="mission"><?php print $mission; ?></div>
          <?php } ?>
          <?php print $messages; ?>
          <?php print $help; ?> 
          <?php if ($tabs) { ?>
            <div class="tabs"><?php print $tabs; ?></div>
          <?php } ?>
        </div>
      <?php } ?>

      <div id="content">
        <?php print $content; ?>
        <?php print $feed_icons; ?>
      </div>


      <?php if ($content_bottom) { ?>
        <div id="content-bottom" class="blocks">
          <?php print $content_bottom; ?>
        </div>
      <?php } ?>

    </div></div> <?php // / #content ?>
  </div></div>
  
  <?php if ($left) { ?>
    <div id="sidebar-first" role="complimentary" class="blocks sidebar"><div class="inner">
      <?php print $left; ?>
    </div></div>
  <?php } ?>

  <?php if ($right) { ?>
    <div id="sidebar-second" role="complimentary" class="blocks sidebar"><div class="inner">
      <?php print $right; ?>
    </div></div>
  <?php } ?>

</div></div>


<?php if(!empty($footer_message) || !empty($footer_block)) { ?>
  <footer role="contentinfo" class="page-region container"><div class="inner">
    <?php print $footer_block; ?>
    <?php print $footer_message; ?>
  </div></footer>
<?php } ?>


<?php print $scripts;
// <script src="http://wrd.seedlingmedia.co.uk/theme/WRD/js/libs/jquery-1.6.2.min.js"></script>
// <script src="http://wrd.seedlingmedia.co.uk/theme/WRD/js/libs/jquery.formalize.min.js"></script>
// <script src="http://wrd.seedlingmedia.co.uk/theme/WRD/js/plugins.js"></script>
// <script src="http://wrd.seedlingmedia.co.uk/theme/WRD/js/script.js"></script>
// <script src="http://wrd.seedlingmedia.co.uk/theme/WRD/js/mylibs/helper.js"></script>
?>
<!--[if (lt IE 9) & (!IEMobile)]><script src="/<?php print path_to_theme(); ?>/js/libs/imgsizer.js"></script><![endif]-->
<script>
MBP.scaleFix();
yepnope({
	test : Modernizr.mq('(only all)'),
	nope : ['http://wrd.seedlingmedia.co.uk/theme/WRD/js/libs/respond.min.js']
});
</script>
<?php print $closure; ?>
</body>
</html>
