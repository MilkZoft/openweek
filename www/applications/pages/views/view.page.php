<div class="wrapper">
	<h2><?php print $title; ?></h2>
	
	<p>
		<?php print $content; ?>
	</p>

	<?php
		if(SESSION("ZanUser")) {
		?>
			<a href=""><?php print __(_("Edit")); ?></a>
		<?php
		}
	?>
</div>