<div class="wrapper">
	<h2 class="center">
		<?php print __(_("My Works")); ?><br />
		<a href="<?php print path("works/Design"); ?>"><?php print __(_("Design")); ?></a> | <a href="<?php print path("works/Development"); ?>"><?php print __(_("Development")); ?></a>
	</h2>

	<div class="row">
<?php
	if(is_array($works)) {
		$i = 1;

		foreach($works as $work) {
			$box = $work["Type"] === "Development" ? "box" : NULL;
?>
		  
		   		<div class="span4 justify <?=$box;?>">
			      	<h3><?php print $work["Title"]; ?></h3>
			      
			      	<p>
			      		<?php print $work["Content"]; ?>
			      		<a href="<?php print $work["URL"]; ?>" target="_blank" title="<?php print $work["Title"]; ?>"><?php print $work["URL"]; ?></a>
			      	</p>
<?php 
			      	if($work["Type"] === "Design") {
?>
				      	<a class="preview" rel="prettyPhoto[gallery1]" href="<?php print _webURL . _sh . $work["Original"]; ?>">
				      		<img src="<?php print _webURL . _sh . $work["Preview"]; ?>" width="300" height="200" alt="<?php print $work["Title"]; ?>"/>
				      	</a> 
<?php
					}
?>
		      	</div>
<?php
			$i++;
		}
	}
?>
	</div>
</div>