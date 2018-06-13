<?php
/**
 * The template for displaying the sidebar and widgets
 *
 * @package customtheme
 * @subpackage 
 * @since customtheme 1.0
 */
?><!--SIDEBAR WIDGETS-->
<?php if (is_active_sidebar('sidebar-1') ) : ?>
    <aside>
        <?php dynamic_sidebar('sidebar-1'); ?>
    </aside>
<?php endif; ?>