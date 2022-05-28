<?php /* Template Name: Portfolio Template */ ?>
<?php get_header(); ?>

<main id="content" role="main">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="banner banner--post" role="banner">
          <div class="container container__column container__column--center">
            <div class="banner__description fade-up-text">
              <h1 class="post__main-title" itemprop="headline">
                <?php the_title(); ?>
              </h1>
            </div>
            <div class="banner__image banner__image--post fade-in-image" itemprop="image">
              <?php if (has_post_thumbnail()) {
                the_post_thumbnail('full', array('itemprop' => 'image'));
              } ?>
            </div>
          </div>
        </header>
        <div class="entry-content container" itemprop="mainContentOfPage">
          <!--                    --><?php //the_content(); 
                                      ?>
          <!--                    <div class="entry-links">--><?php //wp_link_pages(); 
                                                              ?>
          <!--</div>-->

          <div class="container__col-12">
            <?php $args = array(
              'post_type' => 'post',
              'posts_per_page' => 10,
            );

            $query = new WP_Query($args);

            $tax = 'category';
            $terms = get_terms($tax);
            $count = count($terms);

            if ($count > 0) : ?>
              <div class="posts__link post-tags">
                <?php
                foreach ($terms as $term) {
                  $term_link = get_term_link($term, $tax);
                  echo '<a href="' . $term_link . '" class="tax-filter" title="' . $term->slug . '">' . $term->name . '</a>   
                          <article class="post">
                              
                  
                              <div class="post__content">
                                  <h1 class="post__title">
                                      <a href="' . $term_link . '" title="' . $term->slug . '">' . $term->name . '</a>
                                  </h1>
                                <div class="post__excerpt">
                                    dsnsnfkjnsd
                                </div>
                              </div>
                  
                          </article>    
                  ';
                } ?>
              </div>
            <?php endif;

            if ($query->have_posts()) : ?>
              <section class="posts__wrapper tagged-posts">
                <?php while ($query->have_posts()) : $query->the_post(); ?>

                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <?php the_excerpt(); ?>

                <?php endwhile; ?>
              </section>

            <?php else : ?>
              <section class="posts__wrapper tagged-posts">
                <h2>No posts found</h2>
              </section>
            <?php endif; ?>
          </div>
        </div>
      </article>
  <?php endwhile;
  endif; ?>
</main>
<?php get_footer(); ?><?php
