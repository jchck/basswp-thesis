<?php

use basswp\thss\wrapper;

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!--[if IE]>
		div class="alert alert-warning">
			<?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'thss'); ?>
		</div>
	<![endif]-->

	<?php get_template_part( 'templates/header' ); ?>

		<?php include Wrapper\template_path(); ?>

	<?php get_template_part( 'templates/footer' ); ?>

	<?php wp_footer(); ?>

</body>
</html>