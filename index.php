<?php
/**
 * フォールバックテンプレート
 *
 * @package Yadomaru
 */

get_header();
?>

<div class="min-h-screen py-24 md:py-32">
    <div class="max-w-4xl mx-auto px-6">
        <h1 class="text-3xl font-bold text-stone-800 mb-8"><?php wp_title( '' ); ?></h1>

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="mb-12 bento p-6 md:p-8">
                    <h2 class="text-xl font-bold text-stone-800 mb-3">
                        <a href="<?php the_permalink(); ?>" class="hover:text-navy transition-colors"><?php the_title(); ?></a>
                    </h2>
                    <div class="text-sm text-stone-500 mb-4"><?php echo get_the_date(); ?></div>
                    <div class="text-stone-600 leading-relaxed"><?php the_excerpt(); ?></div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p class="text-stone-500">コンテンツが見つかりませんでした。</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
