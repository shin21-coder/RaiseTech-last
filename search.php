<?php
global $wp_query;
$total_results = $wp_query->found_posts;
$search_query = get_search_query();
?>

<?php get_header(); ?>
<?php if( $total_results >0 ): ?>

  <?php if(have_posts()):	while(have_posts()): the_post(); ?>
ループさせる内容を記述
    <main>
      <div class="main__title">
        <h3 class="main__tema">小見出しが入ります</h3>
        <p class="main__detail">
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。

        </p>
      </div>

      <section>
        <div class="tizu">
          <img src="images/tizuburger.png" alt="チーズバーガー" class="tizu__img">
          <div class="tizu__section">
            <div class="tizu__position">
              <h4 class="tizu__title"><?php the_title(); ?></h4>
              
              <h5 class="tizu__tema">小見出しが入ります</h5>
              <p class="tizu__detail">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </p>
            </div>
            <div class="tizu__btn">
     
              <p class="tizu__btntema">詳しく見る</p>
        
          </div>
          </div>
        </div>
      </section>
      </div>
<?php endwhile; endif; ?>
      <div class="nav-links">
			<?php if(function_exists('wp_pagenavi')): //ページナビプラグインがある時 ここから ?>
			<?php wp_pagenavi(); //ページナビプラグインを表示 ?>
			<?php else : //ページナビプラグインがない時 ?>
			<div class="alignleft"><?php previous_posts_link('前のページ') //前のページへのリンク ?></div>
			<div class="alignright"><?php next_posts_link('次のページ') //次のページへのリンク ?></div>
			<?php endif; //ページナビプラグインがある時 ここまで ?>
      </div>
    </main>
      <?php endif;?>




    <!--▼縦書き固定サイドメニュー▼-->

    <div class="side-menu">

<?php get_sidebar(); ?>
  </div>

  <!--▲縦書き固定サイドメニュー▲-->
  </div>


<?php get_footer(); ?>