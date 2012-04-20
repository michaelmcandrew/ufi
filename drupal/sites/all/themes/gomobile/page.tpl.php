<?php print render($page['header']); ?>
<?php global $base_url; ?>

<div id="main_container">
  <div id="top_slide_content">
    <div class="left12">
      <?php if (isset($page['top_sidebar'])) { ?><?php print ''.render($page['top_sidebar']).''; ?><?php } ?>
    </div>
    <div class="left12">
      <?php if (isset($page['search_sidebar'])) { ?><?php print ''.render($page['search_sidebar']).''; ?><?php } ?>
    </div>
  <a href="#" class="top_slide_button_up" id="boxclose"></a>      
  </div>
  <a href="#" class="top_slide_button" id="activator"><span></span></a>	
  <div id="header">
  	<div class="logo"><a href="<?php print check_url($front_page); ?>"><img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" /><?php print $site_name; ?></a></div>
    <div class="menu">
        <?php print gomobile_tree_top() ?>
     </div>
  </div><!-- End of Header-->   
  <div class="content">   
       <?php print '<div class="page_title">'. $title .'</div>'; ?>
      <?php if (isset($tabs) and $tabss = render($tabs)) { print '<div class="full">'.$tabss.'</div><div class="clear"></div>'; } ?>
      <?php if (isset($messages) and $messages) { print '<div class="full">'.$messages.'</div>'; } ?>
      <?php if (isset($help) and $help) { print '<div class="full">'.$help.'</div>'; } ?>
      <div class="clear"></div>
      <?php if (arg(0) == 'portfolio' or (arg(0) == 'node' and isset($page['content']['system_main']['nodes'][arg(1)]['#bundle']) and  $page['content']['system_main']['nodes'][arg(1)]['#bundle'] == 'full_width')) { ?>
        <?php print render($page['content']); ?>
      <?php } elseif (!($sidebarright = render($page['sidebar_right']))) { ?>
        <div class="full">
          <?php print render($page['content']); ?>
        </div>      
      <?php } else { ?>
        <div class="left23">
          <?php print render($page['content']); ?>
        </div>      
        <div class="left13 sidebar">
          <?php print $sidebarright; ?>
        </div>
      <?php } ?>
    <div class="clear"></div>
  </div>
  <div class="clear"></div> 
  <div class="footer">
    <div class="footer_socials">
      <ul>
        <li><a href="<?php print $base_url ?>/rss.xml"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'gomobile')?>/images/ic_rss.gif" alt="" title="" border="0"/></a></li>
        <li><a href="http://twitter.com/<?php print theme_get_setting('tm_twitter') ?>"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'gomobile')?>/images/ic_twitter.gif" alt="" title="" border="0"/></a></li>
        <li><a href="http://facebook.com/<?php print theme_get_setting('tm_ac_setting_1') ?>"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'gomobile')?>/images/ic_facebook.gif" alt="" title="" border="0"/></a></li>
        <li><a href="http://google.com/<?php print theme_get_setting('tm_ac_setting_2') ?>"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'gomobile')?>/images/ic_google.gif" alt="" title="" border="0"/></a></li>
        <li><a href="http://dribbble.com/<?php print theme_get_setting('tm_ac_setting_3') ?>"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'gomobile')?>/images/ic_dribbble.gif" alt="" title="" border="0"/></a></li>
        <li><a href="http://linkedin.com/<?php print theme_get_setting('tm_linkedin') ?>"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'gomobile')?>/images/ic_linkedin.gif" alt="" title="" border="0"/></a></li>
      </ul>
    </div>   
    <div class="footer_links">
      <?php print gomobile_tree_bottom() ?>
    </div>
    <div class="footer_text">
      <?php print render($page['footer_message']); ?>Drupal theme by <a href="http://www.themesnap.com">ThemeSnap.com</a>
    </div>
    <a onclick="jQuery('html, body').animate( { scrollTop: 0 }, 'slow' );"  href="javascript:void(0);" class="gotop" title="Go on top"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'gomobile')?>/images/top.gif" alt="" title="" border="0"/></a>
  </div>
</div>
<?php //print '<pre>'. check_plain(print_r($page['content'], 1)) .'</pre>'; ?>