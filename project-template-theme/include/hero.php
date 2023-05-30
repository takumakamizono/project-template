<?php if(is_home()): ?>
<div class="hero">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="hero__title">美しい天降川や霧島の山々</div>
                <?php if(get_field('top_img01',222)): ?>      
              <img src="<?php the_field('top_img01',222);?>" alt="スライド画像01">
              <?php else: ?>
                  <img src="https://placehold.jp/1400x930.png" alt="トップスライド画像" />
              <?php endif; ?>
                </div>
                <div class="swiper-slide">
                  <div class="hero__title">そこに住む人々の環境を守りながら</div>
                  <?php if(get_field('top_img02',222)): ?>      
              <img src="<?php the_field('top_img02',222);?>" alt="スライド画像02">
              <?php else: ?>
                  <img src="https://placehold.jp/1400x930.png" alt="トップスライド画像" />
              <?php endif; ?>
                </div>
                <div class="swiper-slide" data-swiper-autoplay="6000">
                  <div class="hero__title">皆さまとともに歩み続けます</div>
                  <div class="hero__logo">株式会社川原建設</div>
                  <?php if(get_field('top_img03',222)): ?>      
              <img src="<?php the_field('top_img03',222);?>" alt="スライド画像03">
              <?php else: ?>
                  <img src="https://placehold.jp/1400x930.png" alt="トップスライド画像" />
              <?php endif; ?>
                </div>
              </div>
             
            </div>
          </div>
   <?php elseif(is_archive()):?>
    <?php 
    $category = get_queried_object();
    $cat_slug = $category->category_nicename;
    $cat_name = $category->cat_name;
?>
      <div class="hero-sub">    
        <div class="hero-sub__inner">
              <div class="hero-sub__titles">               
              <h2 class="hero-sub__maintitle "><?=  esc_html($cat_slug); ?></h2>
              <p class="hero-sub__subtitle"><?=  esc_html($cat_name); ?></p>           
              </div>
              <div class="hero-sub__img"> 
                <?php if(is_category('news') || in_category('news')):  ?>      
                  <img src="<?php the_field('news_img',210);?>" alt="お知らせのヘッダー画像">           
                <?php elseif(is_category('works') || in_category('works') ): ?>
                  <img src="<?php the_field('works_img',210);?>" alt="施工実績のヘッダー画像">  
                
                         
             <?php endif; ?>
            </div>     
        </div>
      </div>
      <?php elseif(is_single()):?>
    <?php 
    $category = get_the_category();
    $cat_slug = $category[0]->category_nicename;
    $cat_name = $category[0]->name;
?>
      <div class="hero-sub">    
        <div class="hero-sub__inner">
              <div class="hero-sub__titles">               
              <h2 class="hero-sub__maintitle "><?=  esc_html($cat_slug); ?></h2>
              <p class="hero-sub__subtitle"><?=  esc_html($cat_name); ?></p>           
              </div>
              <div class="hero-sub__img"> 
                <?php if(is_category('news') || in_category('news')):  ?>  
                 <img src="<?php the_field('news_img',210);?>" alt="お知らせのヘッダー画像">
                <?php elseif(is_category('works') || in_category('works') ): ?>
                  <img src="<?php the_field('works_img',210);?>" alt="施工実績のヘッダー画像">  

             <?php endif; ?>
            </div>     
        </div>
      </div>
      <?php elseif(is_page()) : ?>
        <?php
$page = get_post( get_the_ID() );
$slug = $page->post_name;
?>
        <div class="hero-sub">    
        <div class="hero-sub__inner">
              <div class="hero-sub__titles">
              <h2 class="hero-sub__maintitle "><?= strtoupper($post->post_name); ?></h2>
              <p class="hero-sub__subtitle"><?php the_title(); ?></p>
              </div>
              <div class="hero-sub__img"> 
              <?php if(has_post_thumbnail()): ?>        
              <?php the_post_thumbnail(); ?> 
              <?php else: ?>
                <img src="https://placehold.jp/1400x700.png" alt="noimage画像" />
               <?php endif; ?>
            </div>     
        </div>
      </div>
      <?php elseif(is_404()): ?>
        <div class="hero-sub">    
        <div class="hero-sub__inner">
              <div class="hero-sub__titles">
              <h2 class="hero-sub__maintitle ">404 NOT FOUND</h2>
              </div>
              <div class="hero-sub__img">  
                <?php if(get_field('404_img',210)): ?>      
              <img src="<?php the_field('404_img',210);?>" alt="404ページのヘッダー画像">
              <?php else: ?>
                <img src="https://placehold.jp/1400x700.png" alt="noimage画像" />
               <?php endif; ?>
            </div>     
        </div>
      </div>
        <?php endif; ?>