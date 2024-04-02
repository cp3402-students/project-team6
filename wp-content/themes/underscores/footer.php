<footer id="colophon" class="site-footer">
    <div class="footer-widgets">
        <div class="footer-widget-area">
            <?php if(is_active_sidebar('footer-1')): ?>
                <?php dynamic_sidebar('footer-1'); ?>
            <?php endif; ?>
        </div>
        <div class="footer-widget-area">
            <?php if(is_active_sidebar('footer-2')): ?>
                <?php dynamic_sidebar('footer-2'); ?>
            <?php endif; ?>
        </div>
    </div><!-- .footer-widgets -->
</footer><!-- #colophon -->
