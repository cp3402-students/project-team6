<aside id="sticky-sidebar" class="widget-area">
	<?php if ( is_user_logged_in() ) : ?>
        <section class="widget">
            <h2>Welcome, <?php echo wp_get_current_user()->display_name ?>!</h2>
            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Our Courses' ) ) ); ?>">Go to Courses</a>
            <a href="<?php echo wp_logout_url( get_permalink() ); ?>">Log Out</a>
        </section>
	<?php else : ?>
        <section class="widget">
            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Login' ) ) ); ?>">Login</a> |
        </section>
	<?php endif; ?>
    <section class="widget">
        <h2>Sign Up</h2>
        <a href="<?php echo 'http://localhost:8080/?page_id=116'; ?>">Sign Up</a>
    </section>
</aside>
