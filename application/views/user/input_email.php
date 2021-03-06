<div class="container" style="margin-top: 20px;">
	<?php
		if (isset($message)) {
			?>
			<div class="alert alert-success alert-dismissible">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<?= $message ?>
			</div>
			<?php
		}

		if (isset($error)) {
			?>
			<div class="alert alert-danger alert-dismissible">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<?= $error ?>
			</div>
			<?php
		}


		if ($user_type == 1) {
			$size = 40;
		} elseif ($user_type == 2) {
			$size = 100;
		} else {
			$size = 250;
		}
	?>


	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				Input your email
			</h4>
		</div>
		<div id="collapseThree" class="panel-body">
			<div class="panel-body">
				<div class="col-md-6 col-xs-12 col-md-offset-3">
					<form action="<?= base_url()?>user/send_token" method="post">
						<input type="email" name="email" class="form-control">
						<br>
						<button class="btn btn-primary">Send Password Reset Link</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>