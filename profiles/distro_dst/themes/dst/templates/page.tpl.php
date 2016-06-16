<?php
/*
  page template
*/
?>
<div class="top-wrap">
<div id="container" class="clearfix">
  <div class="container-wrap">
      <div id="skip-link">
        <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
        <?php if ($main_menu): ?>
          <a href="#navigation" class="element-invisible element-focusable"><?php print t('Skip to navigation'); ?></a>
        <?php endif; ?>
      </div>
      
      <div id="top-header" class="clearfix">          
          <div class="logo-wrap">
              <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" id="logo">
                  <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
              <?php endif; ?>
          </div>   
        <?php print render($page['top_header']); ?>
      </div>      

      <header id="header" role="banner" class="clearfix">
        <div class="header-wrap">
          <div class="header-cont" class="clearfix">

          <?php print render($page['header']); ?>
          
              <?php if ($site_name || $site_slogan): ?>
                <hgroup id="site-name-slogan">
                  <?php if ($site_name): ?>
                      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><span><?php print $site_name; ?></span></a>
                  <?php endif; ?>
                  <?php if ($site_slogan): ?>
                    <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
                  <?php endif; ?>
                </hgroup>
              <?php endif; ?>
        

              <?php if ($main_menu || $secondary_menu || !empty($page['navigation'])): ?>
                <nav id="navigation" role="navigation" class="clearfix">
                  <?php if (!empty($page['navigation'])): ?> <!--if block in navigation region, override $main_menu and $secondary_menu-->
                    <?php print render($page['navigation']); ?>
                  <?php endif; ?>
                  <?php if (empty($page['navigation'])): ?>
          		  <?php print theme('links__system_main_menu', array(
                      'links' => $main_menu,
                      'attributes' => array(
                        'id' => 'main-menu',
                        'class' => array('links', 'clearfix'),
                      ),
                      'heading' => array(
                        'text' => t('Main menu'),
                        'level' => 'h2',
                        'class' => array('element-invisible'),
                      ),
                    )); ?>
          		  <?php print theme('links__system_secondary_menu', array(
                      'links' => $secondary_menu,
                      'attributes' => array(
                        'id' => 'secondary-menu',
                        'class' => array('links', 'clearfix'),
                      ),
                      'heading' => array(
                        'text' => t('Secondary menu'),
                        'level' => 'h2',
                        'class' => array('element-invisible'),
                      ),
                    )); ?>
                  <?php endif; ?>
                </nav>
              <?php endif; ?>
              <?php //if ($breadcrumb): print $breadcrumb; endif;?>
          </div>
        </div> <!-- header wrap -->
      </header>
      
      <!-- BANER -->
      <div id="baner">    
        <?php print render($page['baner']); ?>        
      </div>
      
      <!-- PROMOTION -->
      <?php print $messages; ?>
      <div id="promotion">    
        <?php print render($page['promotion']); ?>
      </div>
      
      <!-- MAIN -->      
      <section id="main" role="main" class="clearfix">
        <div class="main-wrap">
          <a id="main-content"></a>
          <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
          <?php print render($title_prefix); ?>
          <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          <?php print render($page['content']); ?>
        </div>
      </section>

      <!-- UNDERGROUND-->
      <div id="underground">    
        <?php print render($page['underground']); ?>
      </div>

      <?php if ($page['sidebar_first']): ?>
        <aside id="sidebar-first" role="complementary" class="sidebar clearfix">
          <?php print render($page['sidebar_first']); ?>
        </aside>
      <?php endif; ?>

      <?php if ($page['sidebar_second']): ?>
        <aside id="sidebar-second" role="complementary" class="sidebar clearfix">
          <?php print render($page['sidebar_second']); ?>
        </aside>
      <?php endif; ?>       

  </div> <!-- container-wrap -->
 </div><!-- container -->
 <div class="top-helper"></div><!--top-helper-->
</div> <!-- top wrap -->


<footer id="footer" role="contentinfo" class="clearfix">
  <?php print render($page['footer']) ?>
  <?php print render($page['footer_bottom']) ?>
</footer>   