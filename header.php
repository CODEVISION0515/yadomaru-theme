<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="5JsOYK8pdbDGXqEDtBLEaUFizThMEfSm9r_Eau-4QTY" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: { DEFAULT: '#0f2347', deep: '#081428', light: '#1a3d6b', muted: '#5a6f8f' },
                        amber: { DEFAULT: '#c75b3a', soft: '#e8b5a3', deep: '#9e4428' },
                    },
                    fontFamily: {
                        sans: ['"Zen Kaku Gothic New"', '"Noto Sans JP"', 'sans-serif'],
                        display: ['"Shippori Mincho"', '"Noto Serif JP"', 'serif'],
                    },
                },
            },
        };
    </script>
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/favicon-32.png' ); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/favicon-16.png' ); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/apple-touch-icon.png' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class( 'min-h-screen bg-[#f7f5f0] text-stone-600 antialiased' ); ?>>
    <?php wp_body_open(); ?>
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:bg-white focus:px-4 focus:py-2 focus:rounded focus:z-50">本文へスキップ</a>
    <?php $nav_items = yadomaru_primary_nav_items(); ?>

    <header class="site-header sticky top-0 z-50">
        <div class="site-header__inner">
            <div class="max-w-7xl mx-auto px-5 md:px-8 py-4 md:py-5 flex items-center justify-between gap-6">
                <div class="site-brand shrink-0 [&_a]:inline-flex [&_a]:items-center [&_a]:leading-none">
                    <?php yadomaru_the_site_logo( 'header' ); ?>
                </div>

                <nav class="hidden lg:flex items-center gap-1 xl:gap-2" aria-label="主要ナビ">
                    <?php
                    $nav_last = count( $nav_items ) - 1;
                    foreach ( $nav_items as $i => $item ) :
                        $is_cta = ( $i === $nav_last );
                        ?>
                    <a href="<?php echo esc_url( $item['href'] ); ?>"
                        class="<?php echo $is_cta
                            ? 'ml-2 xl:ml-4 px-5 py-2.5 text-sm font-bold bg-amber text-white tracking-wider hover:bg-amber-deep transition-colors'
                            : 'px-3 py-2 text-sm text-navy/80 hover:text-navy border-b-2 border-transparent hover:border-amber transition-colors'; ?>"><?php echo esc_html( $item['label'] ); ?></a>
                        <?php
                    endforeach;
                    ?>
                </nav>

                <button id="mobile-menu-btn" type="button" class="lg:hidden flex h-11 w-11 items-center justify-center border border-navy/20 text-navy hover:bg-navy/5 text-sm font-bold tracking-wider" aria-label="メニュー" aria-expanded="false">
                    <span class="menu-icon">MENU</span>
                </button>
            </div>

            <nav id="mobile-menu" class="hidden lg:hidden border-t border-navy/10 bg-[#f7f5f0]/98 px-5 py-4" aria-label="モバイルナビ">
                <div class="flex flex-col gap-1 max-w-7xl mx-auto">
                    <?php
                    foreach ( $nav_items as $i => $item ) :
                        $is_cta = ( $i === count( $nav_items ) - 1 );
                        ?>
                    <a href="<?php echo esc_url( $item['href'] ); ?>"
                        class="<?php echo $is_cta
                            ? 'mt-2 text-center py-3 text-sm font-bold bg-navy text-white tracking-wider'
                            : 'py-3 text-sm text-navy border-b border-navy/5'; ?>"><?php echo esc_html( $item['label'] ); ?></a>
                        <?php
                    endforeach;
                    ?>
                </div>
            </nav>
        </div>
    </header>
