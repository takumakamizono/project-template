<?php
/*
Template Name: サイトマップ
Template Post Type: page
*/
?>

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
            <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
            <div class="page-content">
              <div class="page-content__inner">
                  <?php get_template_part('include/breadcrumb'); ?> 
                  <div class="site-map">
                  <div class="site-map__box">   
<div class="site-map__top">               
  <p><a href="<?php echo home_url(); ?>">TOPページ</a></p>
  </div> 
 
  
  <?php
$slugs = ['thanks']; // 除外ページをスラッグで指定.
?>
<ul class="sm-list sm-list-page">
<?php
$ids = [];
foreach ( $slugs as $page_slug ) {
  $page = get_page_by_path( $page_slug );
  array_push( $ids, $page->ID );
}

$exclude_ids = implode( ',', $ids );

wp_list_pages(
 [
    'title_li' => '', // タイトルなし.
    'exclude'  => $exclude_ids, // 除外ページIDの配列を指定.
 ]
);
?>
</ul>

  </div> 
  <div class="site-map__box">   
  <?php
    $args=[
      
      'exclude'=>3,
      'orderby' => 'name',
      'order' => 'ASC'
    ];
    $categories=get_categories($args);
    foreach($categories as $category) {
      echo '<h2><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '"' . '>' . $category->name.'</a></h2>';
  ?>
    <ul class="sm-list sm-list-post">
      <?php
      global $post;
      $myposts = get_posts('numberposts=100&category=' . $category->term_id);
      foreach($myposts as $post) : setup_postdata($post);
      ?>
      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
      <?php endforeach; ?>
    </ul>
  <?php }; ?>
  </div> 
 
</div>


                </div>
          </div>
            <?php endwhile; ?>
            <?php endif; ?>
            
             
         
             
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
