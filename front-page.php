<?php get_header(); ?>

<div class="min-h-screen">

    <!-- ══ Hero ══ -->
    <section class="yd-hero relative overflow-hidden pt-24 pb-16 md:pt-28 md:pb-20 lg:pt-32 lg:pb-24">
        <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
            <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[800px] h-[800px] bg-navy/8 rounded-full blur-[160px]"></div>
            <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-amber/10 rounded-full blur-[120px]"></div>
        </div>
        <div class="relative max-w-6xl mx-auto px-6">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-10 items-center">
                <div class="lg:col-span-7 text-center lg:text-left">
                    <div class="hero-enter-1 inline-flex items-center gap-2 bg-white/90 border border-navy/15 text-stone-600 text-xs font-semibold px-4 py-2 rounded-full mb-8 shadow-[0_4px_20px_rgba(30,58,95,0.08)]">
                        <span class="w-1.5 h-1.5 rounded-full bg-amber animate-pulse"></span>
                        沖縄の宿泊施設運営代行
                    </div>

                    <h1 class="hero-enter-2 text-[2.75rem] sm:text-5xl md:text-6xl lg:text-[3.75rem] font-black text-stone-800 leading-[1.15] tracking-tight mb-8">
                        <span class="block text-balance">宿の運営、</span>
                        <span class="block text-balance mt-1">まるっと<span class="text-navy">おまかせ。</span></span>
                    </h1>

                    <p class="hero-enter-3 text-base md:text-lg text-stone-600 mb-10 leading-relaxed max-w-xl mx-auto lg:mx-0">
                        分析はAI、おもてなしは人。<br class="hidden sm:block">
                        オーナーの手残りを最大化する、宿泊施設の運営代行。
                    </p>

                    <div class="hero-enter-4 flex flex-col sm:flex-row gap-3 justify-center lg:justify-start">
                        <a href="#contact" class="btn-accent !py-4 !px-8 !text-base">
                            まずは無料で相談する
                            <i class="ri-arrow-right-up-line text-lg"></i>
                        </a>
                        <a href="#services" class="btn-ghost !py-4 !px-8">
                            サービスを見る
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-5 relative hidden lg:block" aria-hidden="true">
                    <div class="relative max-w-sm mx-auto aspect-[4/5]">
                        <div class="absolute -inset-1 rounded-[2rem] bg-gradient-to-br from-navy/15 via-stone-200/40 to-amber/20 opacity-90 rotate-[-2deg]"></div>
                        <div class="absolute inset-0 rounded-[1.75rem] bg-white/95 border border-stone-200/90 shadow-[0_20px_50px_rgba(30,58,95,0.1)] flex flex-col justify-end p-8 rotate-[1.5deg]">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-10 h-10 rounded-xl bg-navy/10 flex items-center justify-center">
                                    <i class="ri-bar-chart-box-line text-navy text-lg"></i>
                                </div>
                                <div class="w-10 h-10 rounded-xl bg-amber/10 flex items-center justify-center">
                                    <i class="ri-heart-line text-amber text-lg"></i>
                                </div>
                            </div>
                            <p class="text-[10px] font-bold text-navy uppercase tracking-[0.2em] mb-2">YADOMARU</p>
                            <p class="text-stone-600 text-sm leading-relaxed mb-6">OTA管理、価格最適化、ゲスト対応。<br>データと人の力で、宿を育てます。</p>
                            <div class="flex items-center gap-4">
                                <div>
                                    <p class="text-2xl font-black text-stone-800">4</p>
                                    <p class="text-[10px] text-stone-500">管理施設</p>
                                </div>
                                <div class="w-px h-8 bg-stone-200"></div>
                                <div>
                                    <p class="text-2xl font-black text-stone-800">5+</p>
                                    <p class="text-[10px] text-stone-500">対応OTA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <svg class="yd-wave text-[#f5efe8]" viewBox="0 0 1440 56" preserveAspectRatio="none" aria-hidden="true"><path fill="currentColor" d="M0 28c180 28 360 0 540-14s360-28 540 0 270 42 360 28v42H0z"/></svg>

    <!-- ══ Problem ══ -->
    <section class="yd-dots py-24 md:py-32">
        <div class="max-w-5xl mx-auto px-6">
            <div class="mb-24">
                <div class="flex items-center gap-3 mb-10 fade-up">
                    <div class="w-8 h-8 rounded-lg bg-red-50 flex items-center justify-center">
                        <i class="ri-error-warning-line text-red-400"></i>
                    </div>
                    <span class="text-xs font-semibold text-stone-500 tracking-widest uppercase">Problem</span>
                </div>
                <h2 class="text-2xl md:text-4xl font-extrabold text-stone-800 mb-12 tracking-tight fade-up">宿のオーナーさん、<br class="md:hidden">こんな悩みはありませんか？</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 stagger">
                    <?php
                    $problems = array(
                        array( 'text' => 'OTAの手数料が高く、利益が残らない', 'icon' => 'ri-money-yen-circle-line' ),
                        array( 'text' => '管理会社の手数料も高い（売上の20〜30%）', 'icon' => 'ri-percent-line' ),
                        array( 'text' => '清掃費もかさんで、手残りがほとんどない', 'icon' => 'ri-brush-line' ),
                        array( 'text' => '自分で運営すると時間がとられすぎる', 'icon' => 'ri-time-line' ),
                        array( 'text' => '価格設定が適正かわからない', 'icon' => 'ri-question-line' ),
                        array( 'text' => 'ゲスト対応が大変（特に多言語）', 'icon' => 'ri-translate-2' ),
                        array( 'text' => '稼働率が上がらない', 'icon' => 'ri-calendar-close-line' ),
                    );
                    foreach ( $problems as $p ) :
                    ?>
                        <div class="bento p-5 flex items-start gap-4 fade-up">
                            <div class="w-10 h-10 rounded-xl bg-red-50 flex items-center justify-center flex-shrink-0">
                                <i class="<?php echo esc_attr( $p['icon'] ); ?> text-red-400 text-lg"></i>
                            </div>
                            <p class="text-stone-600 leading-relaxed pt-1.5"><?php echo esc_html( $p['text'] ); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Divider -->
            <div class="divider mb-24"></div>

            <!-- Solution -->
            <div>
                <div class="flex items-center gap-3 mb-10 fade-up">
                    <div class="w-8 h-8 rounded-lg bg-emerald-50 flex items-center justify-center">
                        <i class="ri-check-double-line text-emerald-500"></i>
                    </div>
                    <span class="text-xs font-semibold text-stone-500 tracking-widest uppercase">Solution</span>
                </div>
                <h2 class="text-2xl md:text-4xl font-extrabold text-stone-800 mb-6 tracking-tight fade-up">宿まるが、<br class="md:hidden">全部引き受けます。</h2>
                <p class="text-stone-600 mb-12 fade-up max-w-2xl">AIで自動化できるところは自動化し、管理コストを徹底的に下げる。<br>だから、オーナーの手残りを最大化できます。</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 stagger">
                    <?php
                    $solutions = array(
                        array( 'text' => 'AIによるデータ分析で、常に最適な価格設定', 'icon' => 'ri-robot-2-line' ),
                        array( 'text' => 'OTA一括管理で、手間なく露出を最大化', 'icon' => 'ri-global-line' ),
                        array( 'text' => '多言語ゲスト対応で、海外からの予約もスムーズ', 'icon' => 'ri-translate-2' ),
                        array( 'text' => '清掃手配・品質管理まで、まるっとおまかせ', 'icon' => 'ri-sparkling-2-line' ),
                        array( 'text' => '業界最安レベルの管理手数料', 'icon' => 'ri-shield-check-line' ),
                        array( 'text' => 'オーナーは本業や自由な時間に集中できる', 'icon' => 'ri-sun-line' ),
                    );
                    foreach ( $solutions as $s ) :
                    ?>
                        <div class="bento p-5 flex items-start gap-4 fade-up" style="border-color: rgba(16,185,129,0.15);">
                            <div class="w-10 h-10 rounded-xl bg-emerald-50 flex items-center justify-center flex-shrink-0">
                                <i class="<?php echo esc_attr( $s['icon'] ); ?> text-emerald-500 text-lg"></i>
                            </div>
                            <p class="text-stone-700 font-medium leading-relaxed pt-1.5"><?php echo esc_html( $s['text'] ); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ══ Services ══ -->
    <section id="services" class="py-24 md:py-32 bg-white relative">
        <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-navy/15 to-transparent pointer-events-none" aria-hidden="true"></div>
        <div class="max-w-5xl mx-auto px-6">
            <div class="mb-14 md:mb-16 fade-up flex flex-col md:flex-row md:items-end md:justify-between gap-6">
                <div>
                    <span class="text-xs font-semibold text-navy tracking-widest uppercase">Services</span>
                    <h2 class="text-2xl md:text-4xl font-extrabold text-stone-800 mt-3 tracking-tight">サービス内容</h2>
                </div>
                <p class="text-stone-600 text-sm max-w-md md:text-right">宿泊施設の運営に必要なすべてを、ワンストップで。</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 stagger">
                <?php
                $services = array(
                    array(
                        'icon' => 'ri-global-line',
                        'name' => 'OTA管理',
                        'desc' => 'Booking.com、Airbnb、じゃらん、楽天トラベルなど主要OTAへの掲載・在庫管理を一括で行います。',
                    ),
                    array(
                        'icon' => 'ri-line-chart-line',
                        'name' => '価格最適化',
                        'desc' => 'AIがエリアの需要データ・競合価格・イベント情報を分析し、収益を最大化する価格を自動設定します。',
                    ),
                    array(
                        'icon' => 'ri-chat-smile-3-line',
                        'name' => 'ゲスト対応',
                        'desc' => '予約前の問い合わせからチェックアウト後のレビュー対応まで。日本語・英語・中国語に対応。',
                    ),
                    array(
                        'icon' => 'ri-sparkling-2-line',
                        'name' => '清掃管理',
                        'desc' => '清掃チームの手配・品質チェック・アメニティ補充を一括管理。5つ星レビューを維持します。',
                    ),
                    array(
                        'icon' => 'ri-camera-line',
                        'name' => 'リスティング最適化',
                        'desc' => 'プロ品質の写真撮影、魅力的な掲載文の作成で、クリック率・予約率を向上させます。',
                    ),
                    array(
                        'icon' => 'ri-bar-chart-box-line',
                        'name' => 'レポート・分析',
                        'desc' => '月次の売上レポート・稼働率分析をお届け。データに基づいた改善提案で、収益を伸ばし続けます。',
                    ),
                );
                foreach ( $services as $svc ) :
                ?>
                    <div class="bento p-6 md:p-7 flex flex-col fade-up">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-navy to-navy-deep flex items-center justify-center mb-5 shadow-md shadow-navy/20">
                            <i class="<?php echo esc_attr( $svc['icon'] ); ?> text-lg text-white"></i>
                        </div>
                        <h3 class="font-bold text-stone-800 text-lg mb-3"><?php echo esc_html( $svc['name'] ); ?></h3>
                        <p class="text-sm text-stone-600 leading-relaxed flex-grow"><?php echo esc_html( $svc['desc'] ); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ══ Track Record ══ -->
    <section id="track-record" class="relative py-24 md:py-32 overflow-hidden bg-gradient-to-br from-[#eae5de] via-[#f2ece5] to-[#e6ecf0]">
        <div class="absolute inset-0 pointer-events-none opacity-80" aria-hidden="true">
            <div class="absolute top-0 right-1/4 w-[400px] h-[400px] bg-navy/6 rounded-full blur-[100px]"></div>
            <div class="absolute bottom-0 left-1/4 w-[350px] h-[350px] bg-amber/8 rounded-full blur-[90px]"></div>
        </div>
        <div class="relative max-w-5xl mx-auto px-6">
            <div class="mb-14 md:mb-16 fade-up max-w-2xl">
                <span class="inline-block text-xs font-semibold text-navy tracking-widest uppercase px-3 py-1 rounded-full bg-white/60 border border-navy/10">Track Record</span>
                <h2 class="text-2xl md:text-4xl font-extrabold text-stone-800 mt-5 tracking-tight leading-snug">管理施設のご紹介</h2>
                <p class="text-stone-600 mt-3">沖縄本島北部を中心に、4施設の運営を代行しています。</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 stagger">
                <?php
                $facilities = array(
                    array(
                        'name'     => 'コスタベージャ',
                        'location' => '沖縄県国頭郡本部町',
                        'type'     => 'コテージ',
                        'icon'     => 'ri-home-smile-line',
                    ),
                    array(
                        'name'     => '本部コテージNobaru',
                        'location' => '沖縄県国頭郡本部町',
                        'type'     => 'コテージ',
                        'icon'     => 'ri-home-4-line',
                    ),
                    array(
                        'name'     => 'エトワールもとぶ',
                        'location' => '沖縄県国頭郡本部町',
                        'type'     => '貸別荘',
                        'icon'     => 'ri-star-line',
                    ),
                    array(
                        'name'     => '風の音',
                        'location' => '沖縄県国頭郡本部町',
                        'type'     => '一棟貸し',
                        'icon'     => 'ri-windy-line',
                    ),
                );
                foreach ( $facilities as $f ) :
                ?>
                    <div class="rounded-2xl p-6 fade-up bg-white border border-stone-200/90 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-navy/8 text-navy">
                                <i class="<?php echo esc_attr( $f['icon'] ); ?> text-lg"></i>
                            </span>
                            <span class="text-[10px] font-semibold text-stone-500 bg-stone-100 px-2 py-0.5 rounded-full"><?php echo esc_html( $f['type'] ); ?></span>
                        </div>
                        <h3 class="text-stone-800 font-bold text-lg mb-1"><?php echo esc_html( $f['name'] ); ?></h3>
                        <p class="text-stone-500 text-sm flex items-center gap-1">
                            <i class="ri-map-pin-line text-xs"></i>
                            <?php echo esc_html( $f['location'] ); ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ══ Pricing ══ -->
    <section id="pricing" class="py-24 md:py-32 bg-white">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-14 md:mb-16 fade-up">
                <span class="text-xs font-semibold text-navy tracking-widest uppercase">Pricing</span>
                <h2 class="text-2xl md:text-4xl font-extrabold text-stone-800 mt-3 tracking-tight">料金の考え方</h2>
                <p class="text-stone-600 mt-4 max-w-xl mx-auto">AIによる自動化で管理コストを削減。だから、業界最安レベルの手数料を実現しています。</p>
            </div>

            <!-- Comparison -->
            <div class="bento p-6 md:p-8 mb-10 fade-up">
                <h3 class="font-bold text-stone-800 text-lg mb-6 text-center">業界比較</h3>
                <div class="overflow-x-auto">
                    <table class="w-full pricing-compare">
                        <thead>
                            <tr class="border-b-2 border-stone-200">
                                <th class="text-left !pl-0"></th>
                                <th class="text-stone-500 font-medium">一般的な管理会社</th>
                                <th class="text-navy font-bold">宿まる</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $comparisons = array(
                                array( 'item' => '管理手数料',       'general' => '売上の20〜30%',   'yadomaru' => '業界最安レベル' ),
                                array( 'item' => '価格設定',         'general' => '固定 or 手動調整', 'yadomaru' => 'AIによる自動最適化' ),
                                array( 'item' => '多言語対応',       'general' => '日本語のみが多い', 'yadomaru' => '日・英・中 対応' ),
                                array( 'item' => 'データ分析',       'general' => '月次報告のみ',     'yadomaru' => 'リアルタイム分析' ),
                                array( 'item' => 'OTA掲載',         'general' => '1〜2サイト',       'yadomaru' => '5サイト以上一括管理' ),
                                array( 'item' => 'オーナーへの透明性', 'general' => 'ブラックボックス', 'yadomaru' => '全データ開示' ),
                            );
                            foreach ( $comparisons as $c ) :
                            ?>
                            <tr>
                                <th class="text-left !pl-0 !font-medium"><?php echo esc_html( $c['item'] ); ?></th>
                                <td class="text-stone-500"><?php echo esc_html( $c['general'] ); ?></td>
                                <td class="text-navy font-semibold"><?php echo esc_html( $c['yadomaru'] ); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <p class="text-center text-stone-500 text-sm fade-up">
                ※ 具体的な料金は施設の規模・条件により異なります。まずはお気軽にご相談ください。
            </p>
        </div>
    </section>

    <!-- ══ Flow ══ -->
    <section class="py-24 md:py-32 bg-[#faf6f1]/50">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-14 md:mb-16 fade-up">
                <span class="text-xs font-semibold text-navy tracking-widest uppercase">Flow</span>
                <h2 class="text-2xl md:text-4xl font-extrabold text-stone-800 mt-3 tracking-tight">ご利用の流れ</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 stagger">
                <?php
                $steps = array(
                    array(
                        'step' => '01',
                        'title' => '無料相談',
                        'desc'  => 'まずはお気軽にお問い合わせください。施設の現状やお悩みをヒアリングします。オンラインでもOK。',
                        'icon'  => 'ri-chat-1-line',
                    ),
                    array(
                        'step' => '02',
                        'title' => '現地調査・ご提案',
                        'desc'  => '施設を訪問し、周辺の市場環境を分析。最適な運営プランと収支シミュレーションをご提案します。',
                        'icon'  => 'ri-search-eye-line',
                    ),
                    array(
                        'step' => '03',
                        'title' => '契約・セットアップ',
                        'desc'  => 'OTAアカウントの設定、写真撮影、リスティング作成。最短2週間で運営を開始できます。',
                        'icon'  => 'ri-rocket-2-line',
                    ),
                    array(
                        'step' => '04',
                        'title' => '運営開始・改善',
                        'desc'  => '運営データを見ながら、価格・サービスを継続的に改善。月次レポートでオーナーと共有します。',
                        'icon'  => 'ri-line-chart-line',
                    ),
                );
                foreach ( $steps as $step ) :
                ?>
                    <div class="bento p-6 fade-up">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="inline-flex items-center justify-center w-9 h-9 rounded-full bg-navy/8 text-navy text-xs font-bold"><?php echo esc_html( $step['step'] ); ?></span>
                            <div class="w-8 h-8 rounded-lg bg-amber/10 flex items-center justify-center">
                                <i class="<?php echo esc_attr( $step['icon'] ); ?> text-amber text-base"></i>
                            </div>
                        </div>
                        <h3 class="text-stone-800 font-bold text-lg mb-2"><?php echo esc_html( $step['title'] ); ?></h3>
                        <p class="text-stone-600 text-sm leading-relaxed"><?php echo esc_html( $step['desc'] ); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ══ FAQ ══ -->
    <section id="faq" class="py-24 md:py-32 bg-[#faf6f1]">
        <div class="max-w-2xl mx-auto px-6">
            <div class="text-center mb-12 fade-up">
                <span class="text-xs font-semibold text-navy tracking-widest uppercase">FAQ</span>
                <h2 class="text-2xl md:text-4xl font-extrabold text-stone-800 mt-3 tracking-tight">よくある質問</h2>
            </div>

            <div class="yd-faq-shell fade-up">
                <?php
                $faqs = array(
                    array(
                        'q' => '管理手数料はどのくらいですか？',
                        'a' => '施設の規模や条件により異なりますが、業界平均（20〜30%）よりも大幅に低い手数料でご提供しています。AIによる自動化でコストを抑えているため、オーナーの手残りを最大化できます。詳しくは無料相談でご案内します。',
                    ),
                    array(
                        'q' => '対応エリアはどこですか？',
                        'a' => '現在は沖縄県内（主に本島北部）を中心に対応しています。エリア拡大も検討していますので、まずはお気軽にお問い合わせください。',
                    ),
                    array(
                        'q' => '既に他の管理会社に委託していますが、乗り換えはできますか？',
                        'a' => 'はい、可能です。既存の管理会社からの引き継ぎもサポートします。OTAアカウントの移管やレビューの引き継ぎなど、スムーズに移行できるよう対応します。',
                    ),
                    array(
                        'q' => '契約期間の縛りはありますか？',
                        'a' => '最低契約期間は3ヶ月です。その後は月単位で継続・解約を選べます。ただし、データに基づいた改善効果が出始めるのは3〜6ヶ月後が一般的です。',
                    ),
                    array(
                        'q' => '民泊（住宅宿泊事業法）の届出もサポートしてもらえますか？',
                        'a' => 'はい、民泊の届出手続きや旅館業法の許可取得のサポートも行っています。行政書士と連携して対応しますのでご安心ください。',
                    ),
                    array(
                        'q' => 'オーナーとして何をすればいいですか？',
                        'a' => '基本的にオーナーにお手間をおかけすることはありません。月次レポートの確認と、設備投資などの意思決定のみお願いしています。「まるっとおまかせ」できます。',
                    ),
                    array(
                        'q' => '売上やデータは確認できますか？',
                        'a' => 'はい、すべてのデータをオーナーに開示しています。予約状況、売上、稼働率、ゲストレビューなどをいつでも確認いただけます。',
                    ),
                );
                foreach ( $faqs as $faq ) :
                ?>
                    <details class="group fade-up">
                        <summary class="flex items-center justify-between cursor-pointer list-none">
                            <span class="font-medium text-stone-800 pr-6 text-[0.9375rem] text-left"><?php echo esc_html( $faq['q'] ); ?></span>
                            <span class="text-navy/50 flex-shrink-0 group-open:rotate-45 transition-transform duration-200">
                                <i class="ri-add-line text-lg"></i>
                            </span>
                        </summary>
                        <div class="px-5 pb-4 pt-0 text-sm text-stone-600 leading-relaxed">
                            <?php echo esc_html( $faq['a'] ); ?>
                        </div>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ══ CTA ══ -->
    <section id="contact" class="yd-cta-band relative py-28 md:py-36 overflow-hidden">
        <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-amber/10 rounded-full blur-[120px]"></div>
        </div>
        <div class="relative max-w-2xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-5xl font-black text-[#faf6f1] mb-6 fade-up tracking-tight leading-snug max-w-3xl mx-auto">
                <span class="block text-balance">宿の運営、</span>
                <span class="block text-balance mt-2 md:mt-3">まるっとおまかせしませんか？</span>
            </h2>
            <p class="text-stone-400 mb-12 fade-up delay-1 text-base">
                まずは無料相談から。施設の状況をヒアリングし、最適なプランをご提案します。
            </p>
            <a href="https://codevision.co.jp/contact" class="btn-accent !py-4 !px-10 fade-up delay-2" target="_blank" rel="noopener noreferrer">
                無料で相談する
                <i class="ri-arrow-right-up-line text-lg"></i>
            </a>
            <p class="text-stone-500 text-xs mt-8 fade-up delay-3">初回相談無料 / オンラインOK / 最短翌営業日に返信</p>
        </div>
    </section>
</div>

<?php get_footer(); ?>
