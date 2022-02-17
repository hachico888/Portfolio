<?php get_header(); ?>

<div class="home-content-wrapper">
    <h2 class="content-title">Welcome!</h2>
</div>
</div>

<main class="sp-main">
    <div class="wrapper">
        <div class="container">
            <div class="section-title-container">
                <h2 class="section-title" id="work">制作物</h2>
                <!-- <?php echo site_url(); ?>
                <?php echo home_url(); ?> -->
                <!-- <a href="<?php echo get_template_directory_uri().'/works/TEST1/index.html'; ?>">クリック</a> -->
            </div>

            <div class="work-wrapper-grid">
                <?php
                    $args = array( 
                        'post_type' => 'works',
                        'order' => 'ASC',
                        'meta_key'     => 'works_date',
                        'posts_per_page' => 6,
                     );  // カスタム投稿タイプ Products
                    $the_query = new WP_Query($args); if($the_query->have_posts()):?>
                <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                <!-- <a href="<?php echo get_template_directory_uri().'/works/TEST1/index.html'; ?>" class="work-item"> -->
                <a href="<?php echo get_field('works_url'); ?>" class="work-item">
                    <img src="<?php the_field('works_image'); ?>" alt="<?php the_title(); ?>" />
                    <p><?php the_field('works_title'); ?></p>
                </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>

            <?php get_footer(); ?>