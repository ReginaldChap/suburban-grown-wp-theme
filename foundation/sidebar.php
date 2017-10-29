<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package suburbangrown
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>


    <div class="large-3 cell">
        <aside id="side-bar">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
            <div class="side-bar-section">
                <h4>About Me</h4>
                <img src="C:\wamp64\www\gardening-blog\wp-content\themes\foundation\img\recentpost2.jpg" class="about-img">                Magna ullamco ex et dolor ut dolor sunt et ut cillum.
            </div>
            <div class="side-bar-section">
                <h4>Subscribe</h4>
                <p>
                    <label>Email</label>
                    <input type="text">
                    <button class="button primary" style="width: 100%;">Subscribe</button></p>
            </div>
            <div class="side-bar-section">
                <h4>Social</h4>
                <button class="button secondary" style="width: 100%;">Facebook</button>
                <button class="button secondary" style="width: 100%;">Instagram</button>
                <button class="button secondary" style="width: 100%;">YouTube</button>
            </div>
        </aside>
    </div>
    <!-- #secondary -->