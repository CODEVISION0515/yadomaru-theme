<footer class="site-footer text-white">
    <div class="max-w-6xl mx-auto px-6 pt-16 pb-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-14">
            <div class="md:col-span-2">
                <div class="flex items-center gap-2 mb-5">
                    <i class="ri-hotel-line text-xl text-amber"></i>
                    <span class="font-heading text-base font-bold text-white">宿まる</span>
                </div>
                <p class="text-stone-400 text-sm leading-relaxed max-w-xs">宿の運営、まるっとおまかせ。<br>分析はAI、おもてなしは人。</p>
                <p class="text-stone-500 text-xs mt-4">運営: 株式会社CODEVISION</p>
            </div>

            <div>
                <p class="text-stone-500 text-xs font-semibold tracking-widest uppercase mb-5">Menu</p>
                <ul class="space-y-3 text-sm">
                    <?php
                    $footer_nav = yadomaru_primary_nav_items();
                    foreach ( $footer_nav as $item ) :
                    ?>
                    <li>
                        <a href="<?php echo esc_url( $item['href'] ); ?>" class="text-stone-400 hover:text-amber-soft transition-colors"><?php echo esc_html( $item['label'] ); ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div>
                <p class="text-stone-500 text-xs font-semibold tracking-widest uppercase mb-5">Company</p>
                <ul class="space-y-3 text-sm">
                    <li><a href="https://codevision.co.jp" target="_blank" rel="noopener noreferrer" class="text-stone-400 hover:text-amber-soft transition-colors">CODEVISION</a></li>
                    <li><a href="https://moai.okinawa" target="_blank" rel="noopener noreferrer" class="text-stone-400 hover:text-amber-soft transition-colors">MOAI</a></li>
                </ul>
            </div>
        </div>

        <div class="border-t border-white/10 pt-6 flex flex-col sm:flex-row items-center justify-between gap-3">
            <p class="text-stone-500 text-xs">&copy; <?php echo esc_html( date( 'Y' ) ); ?> 株式会社CODEVISION</p>
            <p class="text-stone-600 text-xs">Okinawa, Japan</p>
        </div>
    </div>
</footer>

<script>
/* Mobile menu toggle */
document.addEventListener('DOMContentLoaded', function() {
    var btn  = document.getElementById('mobile-menu-btn');
    var menu = document.getElementById('mobile-menu');
    if (btn && menu) {
        btn.addEventListener('click', function() {
            var open = menu.classList.toggle('hidden');
            btn.setAttribute('aria-expanded', !open);
            var icon = btn.querySelector('i');
            if (icon) {
                icon.className = menu.classList.contains('hidden') ? 'ri-menu-line text-lg text-stone-600' : 'ri-close-line text-lg text-stone-600';
            }
        });
    }

    /* Scroll reveal */
    var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-up').forEach(function(el) {
        observer.observe(el);
    });

    /* Stagger children */
    document.querySelectorAll('.stagger').forEach(function(container) {
        var children = container.querySelectorAll('.fade-up');
        children.forEach(function(child, i) {
            child.style.transitionDelay = (i * 0.08) + 's';
        });
    });

    /* Header scroll state */
    var header = document.querySelector('.site-header');
    if (header) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 20) {
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
