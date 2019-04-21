@extends('layouts.frontend')

@section('content')

<div class="contact-area section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-7 mobi-mb-50">
						<div class="section-title mb-45">
                            <h2 class="mb-5">Leave a Message</h2>
                            <p>There are many variations of ages om Ipsum available, but the mrity<br> ave suffered
                             aleration in some orm altime to share.</p>
                            <hr class="line">
                        </div>
						<form class="custom-input" id="contact_form" action="http://regaltheme.com/tf/multi/cultura/cultura/contact-form.php" method="post">
							<input type="text" name="name" id="contact_name" placeholder="Name" required />
							<input type="email" name="email" id="contact_email" placeholder="Email" required/>
							<input type="text" name="phone" id="contact_number" placeholder="Phone Number" required/>
							<textarea name="message" id="contact_message" rows="3" placeholder="Message"></textarea>
							<button class="btn" type="submit" name="submit" id="contact_submit" data-complete-text="Well done!">Submit Now</button>
						</form>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-5">
						<div class="section-title mb-45 ml-minus-15">
                            <h2 class="mb-5">Get in Touch</h2>
                            <p>There are many variations of ages om Ipsum available, but the mrity ave suffered
                                aleration in some orm altime to share.</p>
                            <hr class="line">
                        </div>
						<div class="contact-info ml-minus-15">
							<ul>
								<li>
									<h5><span>Phone :</span> <a href="tel:+9987587454752">+99 875 874 547 52</a></h5>
								</li>
								<li>
									<h5><span>Email :</span> <a href="mailto:company@gmail.com">company@gmail.com</a></h5>
								</li>
								<li>
									<h5><span>Address :</span> 17 Street Name Here, Office 80, New Work, US</h5>
								</li>
							</ul>
							<div class="social-icon style1 text-left">
								<ul class="clearfix d-inblock l-height">
									<li><a href="https://www.facebook.com/regaltheme/" target="_blank"><i class="zmdi zmdi-facebook"></i></a></li>
									<li><a href="https://twitter.com/regaltheme" target="_blank"><i class="zmdi zmdi-twitter"></i></a></li>
									<li><a href="https://instagram.com/" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>
									<li><a href="https://linkedin.com/" target="_blank"><i class="zmdi zmdi-linkedin"></i></a></li>
									<li><a href="https://www.pinterest.com/regaltheme/" target="_blank"><i class="zmdi zmdi-pinterest"></i></a></li>
								</ul>
							</div>
							<!-- Change your social media link -->
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection