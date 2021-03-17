<?php include 'header.php' ?>

<section class="MapView">
	<div class="container">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14008.114827184305!2d77.20653217497157!3d28.628901718705315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd37b741d057%3A0xcdee88e47393c3f1!2sConnaught%20Place%2C%20New%20Delhi%2C%20Delhi%20110001!5e0!3m2!1sen!2sin!4v1615372828640!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
</section>
<!-- Start Contact us -->
<section class="section-message section mt-4 mb-4">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="section-info">
					<div class="title-hr"></div>
					<div class="ContactPageDetails">
						<div class="row">
							<div class="col-4">
								<p>Phone</p>
							</div>
							<div class="col-8">
								<p><a href="tel:+919876543210"> +919876543210</a></p>
							</div>
							<div class="col-4">
								<p>Email</p>
							</div>
							<div class="col-8">
								<p><a href="mailto:example@gmail.com">example@gmail.com</a></p>
							</div>
							<div class="col-4">
								<p>Address</p>
							</div>
							<div class="col-8">
								<p><a href="https://goo.gl/maps/JEQUqPCxHhzwV4cp6">Connaught Place, New Delhi, Delhi 110001 </a></p>
							</div>
							<div class="col-sm-12 mt-4">
								<div class="SocialIcon ml-0">
						<ul class="ml-0 pl-0">
							<li><a class="fa fa-facebook pl-0 Color" href="#"></a></li>
							<li><a class="fa fa-twitter Color" href="#"></a></li>
							<li><a class="fa fa-google-plus Color" href="#"></a></li>
							<li><a class="fa fa-instagram pr-0 Color" href="#"></a></li>
						</ul>
					</div>
							</div>		
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<form class="js-form" novalidate="novalidate">
					<div class="row">
						<div class="form-group col-sm-6 col-lg-4">
							<input class="input-gray" type="text" name="name" required="" placeholder="Name*" aria-required="true">
						</div>
						<div class="form-group col-sm-6 col-lg-4">
							<input class="input-gray" type="email" name="email" placeholder="Email*">
						</div>
						<div class="form-group col-sm-12 col-lg-4">
							<input class="input-gray" type="text" name="subject" placeholder="Subject*">
						</div>
						<div class="form-group col-sm-12">
							<textarea class="input-gray" name="message" required="" placeholder="Message*" aria-required="true"></textarea>
						</div>
						<div class="col-sm-12"><button type="submit" class="btn-upper btn-yellow btn"><i class="fa fa-paper-plane text-white" aria-hidden="true"></i> Send</button></div>
					</div>
					<div class="success-message"><i class="fa fa-check text-primary"></i> Thank you!. Your message is successfully sent...</div>
					<div class="error-message">We're sorry, but something went wrong</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- End Contact us -->

<?php include 'footer.php' ?>