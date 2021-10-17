<div class="related-posts-wrapper">
<?php
    //for use in the loop, list 5 post titles related to first tag on current post
    $tags = wp_get_post_tags($post->ID);

    if ($tags) {

        echo '<h4>Related Posts</h4>';

        $first_tag = $tags[0]->term_id;

        $args = array(
            'tag__in' => array($first_tag),
            'post__not_in' => array($post->ID),
            'posts_per_page'=>5,
            'caller_get_posts'=>1
        );
    $posts_query = new WP_Query($args);

    if( $posts_query->have_posts() ) {

        echo '<ul>';

        while ($posts_query->have_posts()) : $posts_query->the_post(); 
?>

        <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
        
    <?php
        endwhile;

        echo '</ul>';
    }
        wp_reset_query();
    }
    ?>

</div>