<?php
get_header();
?>

<main class="singleMain">
    <?php
        if(have_posts()) {
            while(have_posts()) {
                the_post();
                ?>
                    <h1 class="single__header">
                        <?php echo the_title(); ?>
                    </h1>

                <div class="single__content">
                    <?php echo the_content(); ?>
                </div>

                    <?php
            }
        }
    ?>
</main>

<?php
get_footer();
?>