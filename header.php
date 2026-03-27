<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: { DEFAULT: '#1e3a5f', deep: '#152a45', light: '#2a4f7a', muted: '#3d6490' },
                        amber: { DEFAULT: '#d4915e', soft: '#e8b48a', deep: '#b87543' },
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', '"Noto Sans JP"', 'ui-sans-serif', 'system-ui', 'sans-serif'],
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

<body <?php body_class( 'min-h-screen bg-[#fdfaf7] text-stone-700 antialiased' ); ?>>
    <?php wp_body_open(); ?>

    <header class="site-header w-full sticky top-0 z-50 px-4 pt-3 pb-2 md:px-6 md:pt-4 md:pb-3">
        <div class="max-w-6xl mx-auto">
            <div class="site-header__bar px-4 py-3 md:px-5 md:py-3">
            <div class="flex items-center justify-between">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="transition-opacity hover:opacity-70 flex items-center gap-2">
                    <i class="ri-hotel-line text-xl text-navy"></i>
                    <span class="font-heading text-base font-bold tracking-tight text-stone-800">宿まる</span>
                </a>

                <nav class="hidden md:flex items-center gap-1">
                    <?php
                    $nav_items = yadomaru_primary_nav_items();
                    $nav_last  = count( $nav_items ) - 1;
                    foreach ( $nav_items as $i => $item ) :
                        $is_cta = ( $i === $nav_last );
                        ?>
                    <a href="<?php echo esc_url( $item['href'] ); ?>"
                        class="<?php echo $is_cta ? 'bg-navy text-white text-[13px] font-semibold px-5 py-2 rounded-full ml-2 shadow-sm hover:bg-navy-deep transition-colors' : 'text-stone-600 hover:text-navy-deep text-[13px] font-medium px-3 py-2 rounded-full transition-colors hover:bg-stone-100'; ?>"><?php echo esc_html( $item['label'] ); ?></a>
                        <?php
                    endforeach;
                    ?>
                </nav>

                <button id="mobile-menu-btn" class="md:hidden w-9 h-9 flex items-center justify-center rounded-full hover:bg-navy/10 transition-colors" aria-label="メニュー" aria-expanded="false">
                    <i class="ri-menu-line text-lg text-stone-600"></i>
                </button>
            </div>

            <nav id="mobile-menu" class="hidden md:hidden mt-3 pt-3 border-t border-stone-200/70">
                <div class="flex flex-col gap-1">
                    <?php
                    foreach ( $nav_items as $i => $item ) :
                        $is_cta = ( $i === $nav_last );
                        ?>
                    <a href="<?php echo esc_url( $item['href'] ); ?>"
                        class="<?php echo $is_cta ? 'bg-navy text-white text-sm py-2.5 px-3 rounded-full text-center mt-2 shadow-sm hover:bg-navy-deep' : 'text-stone-600 hover:text-navy-deep text-sm py-2.5 px-3 rounded-full transition-colors hover:bg-stone-100'; ?>"><?php echo esc_html( $item['label'] ); ?></a>
                        <?php
                    endforeach;
                    ?>
                </div>
            </nav>
            </div>
        </div>
    </header>
