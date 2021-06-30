<?php include 'include/header.php'; ?>


<section class="inner_sec_head">
	<div class="container">
		<div class="col-md-12">
			<div class="tp_logo text-left">
				<a href="index.php">
					<img src="images/logo.png" class="img-responsive" alt="">
				</a>
			</div>
		</div>
	</div>
</section>



<section class="email_sec_main male_sec">
	<div class="container">
		<div class="row">
			<div class="col-md-9 mx-auto">
				<div class="cent_sec_email connection_sec">
					<span>Ideal person</span>
					<h3><strong>I am looking for... </strong></h3>
					<form action="">

						<div class="row">
							<div class="col-md-12">
								<div class="connections_looking">
									<ul>
										<li class="form-group">
											<input type="checkbox" id="male">
      										<label for="male">Male</label>
										</li>

										<li class="form-group">
											<input type="checkbox" id="female">
      										<label for="female">Female</label>
										</li>

									</ul>
								</div>
								<a href="#" class="mr_optin">More Option</a>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="visbile_div">
									<p><a href="#"><img src="images/eye-icon.png" class="img-responsive" alt="Eye">This info will visible to others</a></p>
								</div>
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