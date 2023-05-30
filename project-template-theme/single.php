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
            <section class="single">
              <div class="single__inner">
                  <?php get_template_part('include/breadcrumb'); ?> 
                <?php if(have_posts()): ?>
                  <?php while(have_posts()):the_post(); ?> 
                  <article id="post-<?php the_ID(); ?>" <?php post_class('single__content') ?> >
                    <div class="single__content-header">
                    <time><?php the_time( get_option( 'date_format' ) ); ?></time>  
                    
                     <h2><?php the_title(); ?></h2>         
                    </div>
                    <div class="single__content-des">
                    <div class="single__content-des-img">
                      <?php if(the_post_thumbnail()): ?>
                      <?php the_post_thumbnail('medium'); ?>
                        <?php endif; ?>
                        </div>
                        <div class="single__content-text">
                      <?php the_content(); ?>
                       </div>
                    </div>
                    <div class="postLinks">
                      <div class="postLinks__link postLinks__link-prev"><?php previous_post_link('戻る%link','%title',true,'') ?></div>
                      <div class="postLinks__link postLinks__link-next"><?php next_post_link('次へ%link','%title',true,'') ?></div>
                    </div>
                  </article >
                  <?php endwhile; ?>   
                <?php endif; ?> 
                <?php 
$cat = get_the_category(); 
$cat_id = $cat[0]->cat_ID; 
$cat_name =$cat[0]->cat_name;
$link = get_category_link($cat_id);
?>
<div class="single__list-btn">
<a class="btn slide-bg" href="<?= esc_url($link); ?>"><?= esc_html($cat_name); ?>の一覧へ戻る</a> 
</div>
              
              </div>
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
