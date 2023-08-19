<?php get_header(); ?>

<main id="search-result">
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php 
                $post_counts = wp_count_posts();
                // Get the total number of posts
                $total_posts = $post_counts->publish;
            ?>
        <h2 class="subtitle">「<?php echo get_search_query(); ?>」の検索結果</h2>
        <div class="articles">
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p class="desc"><?php the_excerpt(); ?></p>
            </article>
        <?php endwhile; ?>
        <?php the_posts_pagination( array(
                'next_text' => '<i class="fa fa-angle-right" style="font-size:36px"></i>',
                'prev_text' => '<i class="fa fa-angle-left" style="font-size:36px"></i>',
            ) ); ?>
        <?php wp_reset_query(); ?>  
        </div>
        <?php else : ?>
        <h2 class="subtitle">検索結果がありません。</h2>
        <p class="desc">申し訳ございませんが、検索キーワードに一致するものは見つかりませんでした。別のキーワードで再検索してみてください。</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>