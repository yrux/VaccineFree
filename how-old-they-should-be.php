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
			<div class="col-md-8 mx-auto">
				<div class="cent_sec_email introduce_sec">
					<span>Ideal person</span>
					<h3><strong>How old they should be </strong></h3>
					<form action="born.php">

						<div class="row">
							<div class="col-md-12">
								<textarea required="" placeholder="For example, how your best friend describe you..."></textarea>
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