<?php
/**
 * フォールバックテンプレート
 *
 * @package Yadomaru
 */

get_header();
?>

<div class="min-h-screen py-20 md:py-28 bg-[#f7f5f0]">
    <div class="max-w-4xl mx-auto px-5 md:px-8">
        <h1 class="font-display text-3xl md:text-4xl text-navy mb-10"><?php wp_title( '' ); ?></h1>

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="mb-10 ym-card p-6 md:p-8">
                    <h2 class="font-heading text-xl text-navy mb-3">
                        <a href="<?php the_permalink(); ?>" class="hover:text-amber transition-colors"><?php echo esc_html( get_the_title() ); ?></a>
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
