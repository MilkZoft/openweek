<?php if(!defined("_access")) die("Error: You don't have permission to access here..."); ?>

<?php
	if(!SESSION("ZanUser")) {
?>
		<div class="wrapper">
			<div class="login">
				<form class="form-login" action="<?php print $href;?>" method="post">
					<fieldset>
						<legend><?php print __(_("Login")); ?></legend>
						
						<?php
							if(isset($alert)) {
								print $alert;
							}
						?>
						
						<p class="center">
							<?php print __(_("Authentification")); ?>
						</p>
						
						<p>
							<strong><?php print __(_("Username")); ?>:</strong><br />
								
							<input id="username" class="required" name="username" type="text" tabindex="1" />
						</p>	
						
						<p>
							<strong><?php print __(_("Password")); ?>:</strong><br />
							
							<input id="password" class="required" name="password" type="password" tabindex="2" />
						</p>	
						
						<p>
							<input id="connect" class="btn btn-info" name="connect" type="submit" value="<?php print __(_("Connect")); ?>" tabindex="3" />
						</p>
					</fieldset>
				</form>
			</div>
		</div>
<?php
	} else {
?>
		<div class="wrapper">
			<p><?php print __(_("You're already connected")); ?></p>
		</dib>
<?php
	}
