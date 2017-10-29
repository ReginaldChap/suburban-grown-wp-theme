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
        </aside>
    </div>
    <!-- #secondary -->