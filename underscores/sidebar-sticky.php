<aside id="sticky-sidebar" class="widget-area">
	<?php if ( is_user_logged_in() ) : ?>
        <section class="widget">
            <h2>Welcome, <?php echo wp_get_current_user()->display_name; ?>!</h2>
            <!-- Using buttons for actions -->
            <button onclick="window.location.href='<?php echo esc_url( get_permalink( get_page_by_title( 'Our Courses' ) ) ); ?>'">Go to Courses</button>
            <button onclick="window.location.href='<?php echo esc_url( wp_logout_url( home_url() ) ); ?>'">Log Out</button>
        </section>
	<?php else : ?>
        <section class="widget">
            <button onclick="window.location.href='<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>'">Log In</button>
        </section>
	<?php endif; ?>
    <section class="widget">
        <h2>Sign Up</h2>
        <button onclick="window.location.href='<?php echo esc_url( home_url('/?page_id=116') ); ?>'">Sign Up</button>
    </section>
</aside>
