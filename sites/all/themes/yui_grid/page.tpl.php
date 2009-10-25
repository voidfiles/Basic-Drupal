<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
</head>

<body>

<div id="<?php print theme_get_setting ('yui_page_width')?>" class="<?php print theme_get_setting ('yui_sidebar')?>">

  <div id="hd" role="banner">
    <div id="logo">
      <?php if ($logo) { ?><a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a><?php } ?>
    </div>
    <?php if ($site_slogan) { ?><div class='site-slogan'><?php print $site_slogan ?></div><?php } ?>
    <?php if ($mission) { ?><div id="mission"><?php print $mission ?></div><?php } ?>
    <div id="menu">
      <?php if (isset($primary_links)) { ?><?php print theme('links', $primary_links, array('class' =>'links', 'id' => 'navlist')) ?><?php } ?>
    </div>
  </div>

  <?php // Can't load scripts at bottom, because fckeditor injects scripts which depend on this being loaded ?>
  <?php print $scripts ?>

  <div id="bd">
    <div id="yui-main">
      <div class="yui-b" role="main">
        <div id="main">
          <?php print $breadcrumb ?>
          <h1 class="title"><?php print $title ?></h1>
          <div class="tabs"><?php print $tabs ?></div>
          <?php if ($show_messages) { print $messages; } ?>
          <?php print $help ?>
          <?php print $content; ?>
          <?php if ($left_column || $right_column) {?>
            <div class="yui-g">
              <div class="yui-u first"><?php print $left_column ?></div>
              <div class="yui-u"><?php print $right_column ?></div>
            </div>
          <?php } ?>
          <?php print $feed_icons; ?>
        </div>
      </div>
    </div>
    <div class="yui-b" role="complementary">
      <? // left could be right as well, depending on the theme setting. We
         // use this, because by default the blocks are assigned to the left
         // sidebar by default. Using left means blocks keep showing, else
         // they would disappear, causing confusing. ?>
      <?php if ($left) { print $left; } ?>
    </div>
  </div>

  <div id="ft" role="contentinfo">
    <?php if (isset($secondary_links)) { ?><?php print theme('links', $secondary_links, array('class' =>'links', 'id' => 'subnavlist')) ?><?php } ?>
    <?php print $footer_message ?>
    <?php print $footer ?>
  </div>

  <?php print $closure ?>

</div>
</body>
</html>
