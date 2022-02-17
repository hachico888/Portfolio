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
            </div>

            <div class="work-wrapper-grid">
                <?php
                    $args = array( 
                        'post_type' => 'works',
                        'order' => 'ASC',   
                        // 'orderby' => 'date',
                        'meta_key'     => 'works_date',
                        'posts_per_page' => 3,
                    );  // カスタム投稿タイプ Products
                    $the_query = new WP_Query($args); if($the_query->have_posts()):?>
                <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                <a href="<?php echo get_post_type_archive_link('works'); ?>" class="work-item">
                    <img src="<?php the_field('works_image'); ?>" alt="<?php the_title(); ?>" />
                    <p><?php the_field('works_title'); ?></p>
                </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>

                <!-- <div class="work-item work-wait">
                    <img>
                    <p>製作中・・・</p>
                </div> -->
                <!-- <div class="work-item work-wait">
                    <img>
                    <p>製作中・・・</p>
                </div> -->
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="container">
            <div class="section-title-container">
                <h2 class="section-title" id="profile-skill">プロフィール・スキル</h2>
            </div>

            <div class="profile-skill_container">
                <div class="profile-container">
                    <div class="profile-avatar-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/nigaoe.png" alt="似顔絵">
                        <div class="profile-avatar-text">
                            <p>浦田　真弓</p>
                            <p>1982年8月31日生まれ</p>
                            <p>三重県在住</p>
                        </div>
                    </div>
                    <div class="profile-text">
                        <p>WEB制作に興味をもち、学習開始。
                            ６歳と１歳子育て中。
                            工業高校出身で、溶接免許や自動車整備士資格など持ってます。
                            外車ディーラーで9年勤めた経験有。</p>
                    </div>
                </div>
                <div class="skill-container">
                    <div class="skill-icon_container">
                        <div class="skill-icon">
                            <span class="iconify" data-icon="ic:baseline-html" style="color: #333;" data-width="100"
                                data-height="100"></span>
                        </div>
                        <div class="skill-icon">
                            <span class="iconify" data-icon="ic:baseline-css" style="color: #333;" data-width="100"
                                data-height="100"></span>
                        </div>
                        <div class="skill-icon">
                            <span class="iconify" data-icon="logos:jquery" data-width="100" data-height="100"></span>
                        </div>
                        <div class="skill-icon">
                            <span class="iconify" data-icon="fe:wordpress" style="color: #333;" data-width="100"
                                data-height="100"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="wrapper">
        <div class="container form_container">
            <div class="section-title-container">
                <h2 class="section-title" id="form">問い合わせ</h2>
            </div>
            <div class="form">
                <form action="#">
                    <div>
                        <label for="name">お名前</label>
                        <input type="text" id="name" name="your-name">
                    </div>
                    <div>
                        <label for="email">メールアドレス</label>
                        <input type="email" id="email" name="your-email">
                    </div>
                    <div>
                        <label for="tel">tel</label>
                        <input type="tel" id="tel" name="your-tel">
                    </div>
                    <div>
                        <label for="message">問い合わせ内容</label>
                        <textarea id="message" name="your-message"></textarea>
                    </div>
                    <input type="submit" class="button" value="送信">
                </form>
            </div> -->
    </div>
    </div>
</main>

<?php get_footer(); ?>