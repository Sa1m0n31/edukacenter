<?php
get_header();
?>

<main class="blog">
    <h1 class="blog__header">
        Blog
    </h1>
    <div class="blog__content">
       <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 500
        );
        $query = new WP_Query($args);

        if($query->have_posts()) {
            while($query->have_posts()) {
                $query->the_post();
                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                ?>
            <a class="blog__item" href="<?php echo the_permalink(); ?>">
                <div class="blog__item__imgWrapper">
                    <img class="blog__item__img" src="<?php echo $featured_img_url; ?>" alt="<?php echo $featured_img_url; ?>" />
                </div>
                <h2 class="blog__item__header">
                    <?php echo the_title(); ?>
                </h2>
                <div class="blog__item__excerpt">
                    <?php echo the_excerpt(); ?>
                </div>
                <button class="blog__item__btn">
                    Czytaj więcej
                </button>
            </a>
        <?php
            }
        }
       ?>
    </div>
</main>

<?php
get_footer();
?>
