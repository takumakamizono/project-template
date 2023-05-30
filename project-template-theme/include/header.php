<div class="header__inner appear up">
            <h1 class="logo item">
              <a href="<?= esc_url(home_url('/')); ?>">
             original theme 
             </a>
</h1>
            <nav class="header__nav">
            <?php
                $args=[
                  'menu'=>'header-nav',
                  'menu_class'=>'header__ul appear left',
                  'container'=>false,
                
                ];
                wp_nav_menu($args);
                
                ?>     
            </nav>
            <button class="mobile-menu__btn">
              <span></span>
              <span></span>
              <span></span>
            </button>
          </div>