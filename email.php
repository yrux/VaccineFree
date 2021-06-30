<?php include 'include/header.php'; ?>


<section class="inner_sec_head">
	<div class="container">
		<div class="col-md-12">
			<div class="tp_logo text-center">
				<a href="index.php">
					<img src="images/logo.png" class="img-responsive" alt="">
				</a>
			</div>
		</div>
	</div>
</section>



<section class="email_sec_main">
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<div class="cent_sec_email">
					<span>About You</span>
					<h3><strong>Welcome, </strong> Who Are You?</h3>
					<form action="password.php" method="GET">
						<div class="row">
							<div class="col-md-12">
								<input type="email" name="email" placeholder="Your Email Address" class="form-control" required="">
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="submit_btn">
									<input type="submit" value="Next">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>



<?php include 'include/footer.php'; ?>
<script type="text/javascript">
$(document).ready(function(){
	$('body').addClass('bg_clr')
})
</script>