<header>
	<?php
	if (has_nav_menu( 'primary_nav' )) :
		wp_nav_menu([ 'theme_location' => 'primary_nav', 'menu_class' => 'list-reset slash mt1 mb0 right-align', 'items_wrap' => '<ul class="%2$s">%3$s</ul>']);
	endif;
	?>
</header>