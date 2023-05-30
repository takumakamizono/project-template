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
               <section class="notice">
                <?php get_template_part('include/breadcrumb'); ?> 
                <?php get_template_part('include/news-categories'); ?>             

                <div class="works__inner"> 

                  <?php if(have_posts()): ?>                
               
                    <?php while(have_posts()):the_post(); ?>
                    <?php get_template_part('include/notice'); ?> 
                <?php endwhile; ?>           
                  <?php else: ?>
                    <div class="notice__notinfo">
                      <p>新しい情報はありません</p>
                     
                      <div class="notice__btn">
                      <a class="btn slide-bg" href="<?= esc_url(home_url('/')); ?>">トップページへ戻る</a> 
                      </div>
                    </div>
                
                  <?php endif; ?>          
                </div>
                <?php if(function_exists('wp_pagenavi')){wp_pagenavi();}  ?>
              </section>
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
