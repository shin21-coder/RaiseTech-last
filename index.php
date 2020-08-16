
<?php get_header(); ?>


<?php
$args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'post__in' => array(62),
);
$set_query = new WP_Query( $args );
//ループを回すときに適当にpost__なんちゃらを入れて特定の記事のループをもってくる
//その中で欲しい物だけをループ回してその中でただ表出させるための言葉をつかう
?>

<!-- <?php if ( $set_query->have_posts() ): ?>
         <?php while ( $set_query->have_posts() ) : $set_query->the_post(); ?>
             <a href="<?php the_permalink(); ?>"><?php the_title('<h2>','</h2>'); ?></a><br />
         <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?> -->


    <main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="main__block">
        <div class="main__table">
          <section class="takeout">
            <h3 class="takeout__title">Take Out</h3>
            <div class="takeout__flexcolmun">
              <article class="takeout__subtitle">
                <h4 class="takeout__subtitle-1"></h4>
                <p class="takeout__detail">
                </p>

              </article>
              <article class="takeout__subtitle">
                <h4 class="takeout__subtitle-1">小見出しが入ります</h4>
                <p class="takeout__detail">
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
            </div>
            </article>

          </section>

          <section class="eatin">
            <h3 class="eatin__title">Eat in</h3>
            <div class="eatin__flexcolmun">
              <article class="eatin__subtitle">
                <h4 class="eatin__subtitle-1">小見出しが入ります</h4>
                <p class="eatin__detail">
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>

              </article>
              <article class="eatin__subtitle">
                <h4 class="eatin__subtitle-1">小見出しが入ります</h4>
                <p class="eatin__detail">
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>

              </article>
            </div>
          </section>

        </div>
      </div>

      <?php
$args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'post__in' => array(59),
);
$set_query = new WP_Query( $args );
//ループを回すときに適当にpost__なんちゃらを入れて特定の記事のループをもってくる
//その中で欲しい物だけをループ回してその中でただ表出させるための言葉をつかう
?>

<!-- 
<?php if ( $set_query->have_posts() ): ?>
         <?php while ( $set_query->have_posts() ) : $set_query->the_post(); ?>
             <a href="<?php the_permalink(); ?>"><?php the_title('<h2>','</h2>'); ?></a><br />
         <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?> -->
      <section class="map">
        <div class="map__pc">
          <div class="map__black">
            <h4 class="map__tema">見出しが入ります</h4>
            <p class="map__detail">

              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります
          </div>
          

          <p class="map__detail2">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
        </div>


      </section>
    </main>
    <!--▼縦書き固定サイドメニュー▼-->

<?php get_sidebar(); ?>
  </div>
  <!--▲縦書き固定サイドメニュー▲-->


  </div>

  <?php
$args = array(
	'type'            => 'monthly',
	'limit'           => '',
	'format'          => 'html', 
	'before'          => '',
	'after'           => '',
	'show_post_count' => false,
	'echo'            => 1,
	'order'           => 'DESC',
	'post_type'     => 'post'
);

Categories:the_category(' ');
?>


<?php get_footer(); ?>