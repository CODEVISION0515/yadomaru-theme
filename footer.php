<footer class="site-footer">
    <div class="max-w-7xl mx-auto px-5 md:px-8 pt-16 pb-10">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 md:gap-8 mb-14">
            <div class="md:col-span-5">
                <div class="mb-6 site-brand site-brand--footer [&_a]:inline-flex [&_a]:items-center [&_a]:leading-none">
                    <?php yadomaru_the_site_logo( 'footer' ); ?>
                </div>
                <p class="text-white/55 text-sm leading-loose max-w-sm">
                    宿の運営、まるっとおまかせ。<br>
                    分析はAI、おもてなしは人。
                </p>
                <p class="text-white/35 text-xs mt-6 tracking-wider">運営 · 株式会社CODEVISION</p>
            </div>

            <div class="md:col-span-3 md:col-start-6">
                <p class="text-[0.6875rem] font-bold tracking-[0.2em] text-white/40 uppercase mb-5">Menu</p>
                <ul class="space-y-3 text-sm">
                    <?php
                    $footer_nav = yadomaru_primary_nav_items();
                    foreach ( $footer_nav as $item ) :
                    ?>
                    <li>
                        <a href="<?php echo esc_url( $item['href'] ); ?>" class="text-white/55 hover:text-amber-soft transition-colors"><?php echo esc_html( $item['label'] ); ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="md:col-span-3 md:col-start-9">
                <p class="text-[0.6875rem] font-bold tracking-[0.2em] text-white/40 uppercase mb-5">Company</p>
                <ul class="space-y-3 text-sm">
                    <li><a href="https://codevision.co.jp" target="_blank" rel="noopener noreferrer" class="text-white/55 hover:text-amber-soft transition-colors">CODEVISION</a></li>
                    <li><a href="https://moai.okinawa" target="_blank" rel="noopener noreferrer" class="text-white/55 hover:text-amber-soft transition-colors">MOAI</a></li>
                </ul>
            </div>
        </div>

        <div class="border-t border-white/10 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-white/35 tracking-wider">
            <p>&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> 株式会社CODEVISION</p>
            <p>Okinawa, Japan</p>
        </div>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var btn  = document.getElementById('mobile-menu-btn');
    var menu = document.getElementById('mobile-menu');
    if (btn && menu) {
        btn.addEventListener('click', function() {
            var open = menu.classList.toggle('hidden');
            btn.setAttribute('aria-expanded', !open);
            var icon = btn.querySelector('.menu-icon');
            if (icon) {
                icon.textContent = menu.classList.contains('hidden') ? 'MENU' : '✕';
            }
        });
    }

    var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.08 });

    document.querySelectorAll('.fade-up').forEach(function(el) {
        observer.observe(el);
    });

    document.querySelectorAll('.stagger').forEach(function(container) {
        var children = container.querySelectorAll('.fade-up');
        children.forEach(function(child, i) {
            child.style.transitionDelay = (i * 0.06) + 's';
        });
    });

    var header = document.querySelector('.site-header');
    if (header) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 12) {
                header.classList.add('header-scrolled');
            } else {
                header.classList.remove('header-scrolled');
            }
        });
    }
});
</script>

<?php wp_footer(); ?>
</body>
</html>
