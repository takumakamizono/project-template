<!DOCTYPE html>
<html lang="ja">
  <head>
  <?php get_header();?>
  </head>
  <body>
    <div id="global-container">
      <div id="container">
        <div class="mobile-menu__cover"></div>
        <div class="nav-trigger"></div>
        <header class="header">
        <?php get_template_part('include/header'); ?>
        </header>
        <div id="content">
        <?php get_template_part('include/hero'); ?>
          <div id="main-content">
           
            <?php get_template_part('include/side-left'); ?>
            <main>
              <?php get_template_part('include/news'); ?>
              <?php get_template_part('include/company'); ?>
              <?php get_template_part('include/works'); ?>
              <?php get_template_part('include/recruit'); ?>
              <?php get_template_part('include/inquiry'); ?>
              <?php get_template_part('include/associated'); ?>
              <?php get_template_part('include/map'); ?>
            </main>
            <?php get_template_part('include/side-right'); ?>
          
          </div>
        </div>
        <?php get_template_part('include/footer'); ?>
  
      </div>
      <?php get_template_part('include/mobile-menu');?>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
