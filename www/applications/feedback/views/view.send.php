<?php if(!defined("_access")) die("Error: You don't have permission to access here..."); ?>

<div class="wrapper">
	<form method="post" action="<?php print path("feedback"); ?>" enctype="multipart/form-data">
		<fieldset>
			<legend><?php print __(_("Feedback")); ?></legend>
			
			<?php print isset($alert) ? $alert : NULL; ?>

			<p class="justify" id="info">
				<?php print __(_("For more information, learn more about our services, request a quote, or just send feedback, please fill out the form below and we will contact you as soon as possible.")); ?>
			</p>
			
			<p>
				&raquo; <?php print __(_("Name")); ?> *<br />
				<input name="name" class="span5" type="text" value="<?php print recoverPOST("name"); ?>" tabindex="1" />
			</p>
				
			<p>
				&raquo; <?php print __(_("E-Mail")); ?> *<br />
				<input name="email" class="span5" type="text" value="<?php print recoverPOST("email"); ?>" tabindex="2" />
			</p>

			<p>
				&raquo; <?php print __(_("Phone")); ?><br />
				<input name="phone" class="span5" type="text" value="<?php print recoverPOST("phone"); ?>" tabindex="2" />
			</p>
			
			<p>
				&raquo; <?php print __(_("Message")); ?> *<br />
				<textarea id="editor" class="span5" name="message" tabindex="3"><?php print recoverPOST("message"); ?></textarea>
			</p>
				
			<p>
				<input name="send" type="submit" value="<?php print __(_("Send")); ?>" tabindex="4" class="btn btn-info" />
			</p>			
		</fieldset>
	</form>
</div>