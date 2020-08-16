
<?php get_header(); ?>

    <main>
      <div class="main__title">
        <h3 class="main__tema">小見出しが入ります</h3>
        <p class="main__detail">
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。

        </p>
      </div>

      <section>
<?php $args = array("post_type" => "post",  'posts_per_page' => 3,); ?>
<?php $the_query = new WP_Query($args); ?>
<?php if($the_query->have_posts()) : ?>
<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="tizu">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/images/PCarchive_menu.jpg " alt="チーズバーガー" class="tizu__img">
          <div class="tizu__section">
            <div class="tizu__position">
              <h4 class="tizu__title"><?php the_title(); ?></h4>
              
              <h5 class="tizu__tema">小見出しが入ります</h5>
              <p class="tizu__detail">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </p>
            </div>
            <div class="tizu__btn">
     
              <p class="tizu__btntema" onclick="location.href='<?php the_permalink(); ?>'">詳しく見る</p>
        
          </div>
          </div>
        </div>
      </section>
      </div>
<?php endwhile; ?>
<?php endif; ?>

      <div class="nav-links">
			<?php if(function_exists('wp_pagenavi')): //ページナビプラグインがある時 ここから ?>
			<?php wp_pagenavi(array('query'=>$the_query)); //ページナビプラグインを表示 ?>
			<?php else : //ページナビプラグインがない時 ?>
			<div class="alignleft"><?php previous_posts_link('前のページ') //前のページへのリンク ?></div>
			<div class="alignright"><?php next_posts_link('次のページ') //次のページへのリンク ?></div>
			 <?php endif; //ページナビプラグインがある時 ここまで ?> 
      </div>
    </main>





  </div>
    <!--▼縦書き固定サイドメニュー▼-->



<?php get_sidebar(); ?>


  <!--▲縦書き固定サイドメニュー▲-->


<?php get_footer(); ?>