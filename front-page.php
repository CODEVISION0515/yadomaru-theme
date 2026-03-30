<?php get_header(); ?>

<div id="main-content" class="min-h-screen">

    <!-- Hero -->
    <section class="ym-hero relative overflow-hidden pt-16 pb-20 md:pt-20 md:pb-28 lg:pt-24 lg:pb-32">
        <div class="ym-hero__inner max-w-7xl mx-auto px-5 md:px-8">
            <div class="max-w-2xl mx-auto lg:mx-0">
                <div class="text-center lg:text-left">
                    <p class="hero-enter-1 ym-kicker mx-auto lg:mx-0">
                        沖縄 · 宿泊施設の運営代行
                    </p>

                    <h1 class="hero-enter-2 font-display text-[2.125rem] sm:text-4xl md:text-5xl lg:text-[3.25rem] text-navy leading-[1.35] mb-8">
                        宿の運営、<br class="hidden sm:block">
                        <span class="text-amber">まるっとおまかせ。</span>
                    </h1>

                    <p class="hero-enter-3 text-base md:text-lg text-stone-600 mb-12 max-w-xl mx-auto lg:mx-0 leading-loose">
                        分析はAI、おもてなしは人。<br class="hidden sm:block">
                        オーナーの手残りを最大化する、宿泊施設の運営代行です。
                    </p>

                    <div class="hero-enter-4 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#contact" class="btn-accent !py-4 !px-10">
                            まずは無料で相談する
                        </a>
                        <a href="#services" class="btn-ghost !py-4 !px-10">
                            サービスを見る
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Problem -->
    <section class="py-20 md:py-28 bg-[#edeae3] border-y border-navy/5">
        <div class="max-w-5xl mx-auto px-5 md:px-8">
            <header class="mb-14 md:mb-16">
                <p class="ym-kicker fade-up">Problem</p>
                <h2 class="font-display text-2xl md:text-4xl text-navy leading-snug fade-up">宿のオーナーさん、<br class="md:hidden">こんな悩みはありませんか？</h2>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-4 stagger">
                <?php
                $problems = array(
                    'OTAの手数料が高く、利益が残らない',
                    '管理会社の手数料も高い（売上の20〜30%）',
                    '清掃費もかさんで、手残りがほとんどない',
                    '自分で運営すると時間がとられすぎる',
                    '価格設定が適正かわからない',
                    'ゲスト対応が大変（特に多言語）',
                    '稼働率が上がらない',
                );
                foreach ( $problems as $i => $text ) :
                ?>
                    <div class="ym-card p-5 flex items-start gap-4 fade-up">
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center text-xs font-bold text-navy/40 border border-navy/10 mt-0.5"><?php echo str_pad( $i + 1, 2, '0', STR_PAD_LEFT ); ?></span>
                        <p class="text-stone-600 leading-relaxed text-sm md:text-base"><?php echo esc_html( $text ); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Solution -->
    <section class="py-20 md:py-28 bg-[#f7f5f0]">
        <div class="max-w-5xl mx-auto px-5 md:px-8">
            <header class="mb-12 md:mb-14">
                <p class="ym-kicker fade-up">Solution</p>
                <h2 class="font-display text-2xl md:text-4xl text-navy leading-snug fade-up mb-6">宿まるが、<br class="md:hidden">全部引き受けます。</h2>
                <p class="text-stone-600 fade-up max-w-2xl leading-loose text-sm md:text-base">
                    AIで自動化できるところは自動化し、管理コストを徹底的に下げる。<br>
                    だから、オーナーの手残りを最大化できます。
                </p>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-4 stagger">
                <?php
                $solutions = array(
                    'AIによるデータ分析で、常に最適な価格設定',
                    'OTA一括管理で、手間なく露出を最大化',
                    '多言語ゲスト対応で、海外からの予約もスムーズ',
                    '清掃手配・品質管理まで、まるっとおまかせ',
                    '業界最安レベルの管理手数料',
                    'オーナーは本業や自由な時間に集中できる',
                );
                foreach ( $solutions as $i => $text ) :
                ?>
                    <div class="ym-card p-5 flex items-start gap-4 fade-up border-l-4 border-l-amber border-navy/10">
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center text-xs font-bold text-amber border border-amber/20 mt-0.5"><?php echo str_pad( $i + 1, 2, '0', STR_PAD_LEFT ); ?></span>
                        <p class="text-stone-700 font-medium leading-relaxed text-sm md:text-base"><?php echo esc_html( $text ); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="py-20 md:py-28 bg-white">
        <div class="max-w-6xl mx-auto px-5 md:px-8">
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8 mb-14 md:mb-16 fade-up">
                <div>
                    <p class="ym-kicker">Services</p>
                    <h2 class="font-display text-2xl md:text-4xl text-navy">サービス内容</h2>
                </div>
                <p class="text-stone-600 text-sm md:text-base max-w-md lg:text-right leading-relaxed">
                    宿泊施設の運営に必要なすべてを、ワンストップで。
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-px bg-navy/10 stagger">
                <?php
                $services = array(
                    array( 'name' => 'OTA管理', 'desc' => 'Booking.com、Airbnb、じゃらん、楽天トラベルなど主要OTAへの掲載・在庫管理を一括で行います。' ),
                    array( 'name' => '価格最適化', 'desc' => 'AIがエリアの需要データ・競合価格・イベント情報を分析し、収益を最大化する価格を自動設定します。' ),
                    array( 'name' => 'ゲスト対応', 'desc' => '予約前の問い合わせからチェックアウト後のレビュー対応まで。日本語・英語・中国語に対応。' ),
                    array( 'name' => '清掃管理', 'desc' => '清掃チームの手配・品質チェック・アメニティ補充を一括管理。5つ星レビューを維持します。' ),
                    array( 'name' => 'リスティング最適化', 'desc' => 'プロ品質の写真撮影、魅力的な掲載文の作成で、クリック率・予約率を向上させます。' ),
                    array( 'name' => 'レポート・分析', 'desc' => '月次の売上レポート・稼働率分析をお届け。データに基づいた改善提案で、収益を伸ばし続けます。' ),
                );
                foreach ( $services as $i => $svc ) :
                ?>
                    <div class="bg-[#f7f5f0] p-6 md:p-8 flex flex-col fade-up hover:bg-white transition-colors">
                        <span class="font-heading text-[2.5rem] text-navy/10 leading-none mb-4"><?php echo str_pad( $i + 1, 2, '0', STR_PAD_LEFT ); ?></span>
                        <h3 class="font-heading text-navy text-lg mb-3"><?php echo esc_html( $svc['name'] ); ?></h3>
                        <p class="text-sm text-stone-600 leading-relaxed flex-grow"><?php echo esc_html( $svc['desc'] ); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Track Record -->
    <section id="track-record" class="relative py-20 md:py-28 bg-navy text-white overflow-hidden">
        <div class="absolute inset-0 opacity-30 pointer-events-none" aria-hidden="true" style="background-image: radial-gradient(circle at 20% 50%, rgba(199,91,58,0.25) 0%, transparent 45%), radial-gradient(circle at 80% 80%, rgba(26,61,107,0.4) 0%, transparent 40%);"></div>
        <div class="relative max-w-5xl mx-auto px-5 md:px-8">
            <header class="mb-12 md:mb-14 max-w-2xl">
                <p class="text-amber-soft text-xs font-bold tracking-[0.25em] uppercase mb-5 fade-up">Track Record</p>
                <h2 class="font-display text-2xl md:text-4xl text-white leading-snug fade-up">管理施設のご紹介</h2>
                <p class="text-white/70 mt-4 text-sm md:text-base leading-relaxed fade-up">沖縄本島北部を中心に、4施設の運営を代行しています。</p>
            </header>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 stagger">
                <?php
                $facilities = array(
                    array( 'name' => 'コスタベージャ', 'location' => '沖縄県国頭郡本部町', 'type' => 'コテージ' ),
                    array( 'name' => '本部コテージNobaru', 'location' => '沖縄県国頭郡本部町', 'type' => 'コテージ' ),
                    array( 'name' => 'エトワールもとぶ', 'location' => '沖縄県国頭郡本部町', 'type' => '貸別荘' ),
                    array( 'name' => '風の音', 'location' => '沖縄県国頭郡本部町', 'type' => '一棟貸し' ),
                );
                foreach ( $facilities as $i => $f ) :
                ?>
                    <article class="border border-white/15 bg-white/5 backdrop-blur-sm p-6 fade-up hover:bg-white/10 transition-colors">
                        <div class="flex items-baseline gap-4 mb-4">
                            <span class="font-heading text-3xl text-white/15 leading-none"><?php echo str_pad( $i + 1, 2, '0', STR_PAD_LEFT ); ?></span>
                            <span class="text-[10px] font-bold tracking-widest text-amber-soft/70 uppercase"><?php echo esc_html( $f['type'] ); ?></span>
                        </div>
                        <h3 class="font-heading text-white text-lg mb-2"><?php echo esc_html( $f['name'] ); ?></h3>
                        <p class="text-white/50 text-sm"><?php echo esc_html( $f['location'] ); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section id="pricing" class="py-20 md:py-28 bg-[#f7f5f0]">
        <div class="max-w-3xl mx-auto px-5 md:px-8">
            <header class="text-center mb-12 md:mb-14 fade-up">
                <p class="text-[0.6875rem] font-bold tracking-[0.28em] text-navy-muted uppercase mb-2">Pricing</p>
                <span class="block w-12 h-0.5 bg-amber mx-auto mb-6" aria-hidden="true"></span>
                <h2 class="font-display text-2xl md:text-4xl text-navy">料金の考え方</h2>
                <p class="text-stone-600 mt-5 text-sm md:text-base leading-relaxed max-w-xl mx-auto">
                    AIによる自動化で管理コストを削減。だから、業界最安レベルの手数料を実現しています。
                </p>
            </header>

            <div class="ym-card overflow-hidden mb-10 fade-up">
                <h3 class="font-heading text-navy text-center py-4 bg-navy/5 border-b border-navy/10">
                    業界比較
                </h3>
                <div class="overflow-x-auto p-4 md:p-6">
                    <table class="w-full pricing-compare">
                        <thead>
                            <tr>
                                <th class="text-left !pl-2"></th>
                                <th class="text-stone-500 font-medium">一般的な管理会社</th>
                                <th class="text-amber-deep font-bold bg-amber/5">宿まる</th>
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
                                <th class="text-left !pl-2 !font-medium text-stone-700"><?php echo esc_html( $c['item'] ); ?></th>
                                <td class="text-stone-500"><?php echo esc_html( $c['general'] ); ?></td>
                                <td class="text-navy font-bold bg-amber/5"><?php echo esc_html( $c['yadomaru'] ); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <p class="text-center text-stone-500 text-sm fade-up leading-relaxed">
                ※ 具体的な料金は施設の規模・条件により異なります。まずはお気軽にご相談ください。
            </p>
        </div>
    </section>

    <!-- Flow -->
    <section class="py-20 md:py-28 bg-white border-y border-navy/5">
        <div class="max-w-4xl mx-auto px-5 md:px-8">
            <header class="text-center mb-14 fade-up">
                <p class="text-[0.6875rem] font-bold tracking-[0.28em] text-navy-muted uppercase mb-2">Flow</p>
                <span class="block w-12 h-0.5 bg-amber mx-auto mb-6" aria-hidden="true"></span>
                <h2 class="font-display text-2xl md:text-4xl text-navy">ご利用の流れ</h2>
            </header>

            <ol class="relative space-y-0 stagger md:pl-2">
                <?php
                $steps = array(
                    array( 'step' => '01', 'title' => '無料相談', 'desc' => 'まずはお気軽にお問い合わせください。施設の現状やお悩みをヒアリングします。オンラインでもOK。' ),
                    array( 'step' => '02', 'title' => '現地調査・ご提案', 'desc' => '施設を訪問し、周辺の市場環境を分析。最適な運営プランと収支シミュレーションをご提案します。' ),
                    array( 'step' => '03', 'title' => '契約・セットアップ', 'desc' => 'OTAアカウントの設定、写真撮影、リスティング作成。最短2週間で運営を開始できます。' ),
                    array( 'step' => '04', 'title' => '運営開始・改善', 'desc' => '運営データを見ながら、価格・サービスを継続的に改善。月次レポートでオーナーと共有します。' ),
                );
                foreach ( $steps as $step ) :
                ?>
                    <li class="relative flex gap-6 md:gap-8 pb-12 md:pb-14 last:pb-0 fade-up">
                        <div class="flex flex-col items-center">
                            <span class="flex h-12 w-12 shrink-0 items-center justify-center bg-navy text-white text-sm font-bold tracking-wider"><?php echo esc_html( $step['step'] ); ?></span>
                            <span class="flex-1 w-px bg-navy/10 mt-3"></span>
                        </div>
                        <div class="flex-1 pt-2">
                            <h3 class="font-heading text-navy text-lg mb-2"><?php echo esc_html( $step['title'] ); ?></h3>
                            <p class="text-stone-600 text-sm leading-relaxed"><?php echo esc_html( $step['desc'] ); ?></p>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ol>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="py-20 md:py-28 bg-[#edeae3]">
        <div class="max-w-2xl mx-auto px-5 md:px-8">
            <header class="text-center mb-10 fade-up">
                <p class="text-[0.6875rem] font-bold tracking-[0.28em] text-navy-muted uppercase mb-2">FAQ</p>
                <span class="block w-12 h-0.5 bg-amber mx-auto mb-6" aria-hidden="true"></span>
                <h2 class="font-display text-2xl md:text-4xl text-navy">よくある質問</h2>
            </header>

            <div class="ym-faq fade-up">
                <?php
                $faqs = array(
                    array( 'q' => '管理手数料はどのくらいですか？', 'a' => '施設の規模や条件により異なりますが、業界平均（20〜30%）よりも大幅に低い手数料でご提供しています。AIによる自動化でコストを抑えているため、オーナーの手残りを最大化できます。詳しくは無料相談でご案内します。' ),
                    array( 'q' => '対応エリアはどこですか？', 'a' => '現在は沖縄県内（主に本島北部）を中心に対応しています。エリア拡大も検討していますので、まずはお気軽にお問い合わせください。' ),
                    array( 'q' => '既に他の管理会社に委託していますが、乗り換えはできますか？', 'a' => 'はい、可能です。既存の管理会社からの引き継ぎもサポートします。OTAアカウントの移管やレビューの引き継ぎなど、スムーズに移行できるよう対応します。' ),
                    array( 'q' => '契約期間の縛りはありますか？', 'a' => '最低契約期間は3ヶ月です。その後は月単位で継続・解約を選べます。ただし、データに基づいた改善効果が出始めるのは3〜6ヶ月後が一般的です。' ),
                    array( 'q' => '民泊の届出もサポートしてもらえますか？', 'a' => 'はい、民泊の届出手続きや旅館業法の許可取得のサポートも行っています。行政書士と連携して対応しますのでご安心ください。' ),
                    array( 'q' => 'オーナーとして何をすればいいですか？', 'a' => '基本的にオーナーにお手間をおかけすることはありません。月次レポートの確認と、設備投資などの意思決定のみお願いしています。「まるっとおまかせ」できます。' ),
                    array( 'q' => '売上やデータは確認できますか？', 'a' => 'はい、すべてのデータをオーナーに開示しています。予約状況、売上、稼働率、ゲストレビューなどをいつでも確認いただけます。' ),
                );
                foreach ( $faqs as $faq ) :
                ?>
                    <details class="group">
                        <summary class="flex items-center justify-between cursor-pointer list-none gap-4">
                            <span class="font-medium text-navy pr-4 text-[0.9375rem] text-left leading-snug">
                                <?php echo esc_html( $faq['q'] ); ?>
                            </span>
                            <span class="text-navy/30 shrink-0 text-xl font-light group-open:rotate-45 transition-transform duration-200">+</span>
                        </summary>
                        <div class="px-5 pb-5 pt-0 text-sm text-stone-600 leading-relaxed">
                            <?php echo esc_html( $faq['a'] ); ?>
                        </div>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section id="contact" class="ym-cta relative py-24 md:py-32">
        <div class="relative z-10 max-w-2xl mx-auto px-5 md:px-8 text-center">
            <p class="text-amber-soft/60 text-xs font-bold tracking-[0.3em] uppercase mb-8 fade-up">Contact</p>
            <h2 class="font-display text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-white mb-8 fade-up leading-snug whitespace-nowrap">
                <span class="text-amber-soft">まるっとおまかせしませんか？</span>
            </h2>
            <p class="text-white/65 mb-12 fade-up delay-1 text-base leading-relaxed">
                まずは無料相談から。施設の状況をヒアリングし、最適なプランをご提案します。
            </p>
            <a href="https://codevision.co.jp/contact" class="btn-accent !py-4 !px-12 fade-up delay-2" target="_blank" rel="noopener noreferrer">
                無料で相談する
            </a>
            <p class="text-white/40 text-xs mt-10 tracking-wider fade-up delay-3">初回相談無料 / オンラインOK / 最短翌営業日に返信</p>
        </div>
    </section>
</div>

<?php get_footer(); ?>
