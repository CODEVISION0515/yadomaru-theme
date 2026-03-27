<?php

/**
 * 宿まる Theme functions
 *
 * @package Yadomaru
 */

/**
 * テーマセットアップ
 */
function yadomaru_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'height'      => 40,
		'width'       => 160,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	register_nav_menus( array(
		'primary' => 'ヘッダーナビゲーション',
		'footer'  => 'フッターナビゲーション',
	) );
}
add_action( 'after_setup_theme', 'yadomaru_setup' );

/**
 * スクリプト・スタイル読み込み
 */
function yadomaru_scripts() {
	wp_enqueue_style( 'remixicon', 'https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css', array(), '4.5.0' );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Noto+Sans+JP:wght@400;500;600;700&display=swap', array(), null );
	wp_enqueue_style( 'yadomaru-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'yadomaru_scripts' );

/**
 * SEO: meta description
 */
function yadomaru_meta_description() {
	if ( is_front_page() || is_home() ) {
		$desc = '宿まる（ヤドマル）- 宿の運営、まるっとおまかせ。沖縄の宿泊施設運営代行サービス。AIによるデータ分析で価格最適化、OTA管理、ゲスト対応まで。オーナーの手残りを最大化します。';
	} elseif ( is_single() || is_page() ) {
		$excerpt = get_the_excerpt();
		$desc    = $excerpt ? wp_trim_words( $excerpt, 60, '...' ) : '';
	} else {
		$desc = get_bloginfo( 'description' );
	}
	if ( $desc ) {
		echo '<meta name="description" content="' . esc_attr( $desc ) . '">' . "\n";
	}
}
add_action( 'wp_head', 'yadomaru_meta_description', 1 );

/**
 * OGP出力
 */
function yadomaru_ogp_tags() {
	$title = is_front_page() ? '宿まる｜宿の運営、まるっとおまかせ。' : wp_title( '|', false, 'right' ) . get_bloginfo( 'name' );
	$desc  = '沖縄の宿泊施設運営代行サービス。分析はAI、おもてなしは人。';
	$url   = is_front_page() ? home_url( '/' ) : get_permalink();
	$image = get_template_directory_uri() . '/assets/images/ogp.jpg';

	echo '<meta property="og:title" content="' . esc_attr( $title ) . '">' . "\n";
	echo '<meta property="og:description" content="' . esc_attr( $desc ) . '">' . "\n";
	echo '<meta property="og:url" content="' . esc_url( $url ) . '">' . "\n";
	echo '<meta property="og:image" content="' . esc_url( $image ) . '">' . "\n";
	echo '<meta property="og:type" content="website">' . "\n";
	echo '<meta property="og:site_name" content="宿まる">' . "\n";
}
add_action( 'wp_head', 'yadomaru_ogp_tags', 2 );

/**
 * プライマリナビ項目
 *
 * @return array<int, array{ label: string, href: string }>
 */
function yadomaru_primary_nav_items() {
	return array(
		array( 'label' => 'サービス',   'href' => home_url( '/#services' ) ),
		array( 'label' => '実績',       'href' => home_url( '/#track-record' ) ),
		array( 'label' => '料金',       'href' => home_url( '/#pricing' ) ),
		array( 'label' => 'よくある質問', 'href' => home_url( '/#faq' ) ),
		array( 'label' => '無料相談する', 'href' => home_url( '/#contact' ) ),
	);
}

/**
 * JSON-LD 構造化データ（LocalBusiness）
 */
function yadomaru_structured_data() {
	if ( ! is_front_page() ) {
		return;
	}
	$data = array(
		'@context'    => 'https://schema.org',
		'@type'       => 'ProfessionalService',
		'name'        => '宿まる',
		'description' => '沖縄の宿泊施設運営代行サービス。AIによるデータ分析で価格最適化、OTA管理、ゲスト対応まで。',
		'url'         => 'https://yadomaru.jp',
		'parentOrganization' => array(
			'@type' => 'Organization',
			'name'  => '株式会社CODEVISION',
			'url'   => 'https://codevision.co.jp',
		),
		'areaServed'  => array(
			'@type' => 'Place',
			'name'  => '沖縄県',
		),
	);
	echo '<script type="application/ld+json">' . wp_json_encode( $data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
}
add_action( 'wp_head', 'yadomaru_structured_data', 5 );
