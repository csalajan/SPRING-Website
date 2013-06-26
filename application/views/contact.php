<div class="row white">
	<article class="container">
		<section class="sixteen columns alpha">
			<article class="thirteen columns offset-by-four alpha contact-page">
				<h2>Lets chat</h2>
				<?php if (isset($message)) echo "<p>" . $message . "</p>"; ?>
				<?php echo form_open('home/contact_submit', array('class' => 'customer-contact-form')); ?>
					<h3>General Inquiries</h3>
					<p>Drop us a line and let us know a little about yourself and your goals for your branding, print, or web project. We'll get back to you within 24 hours.</p>
					<span>Your Name</span>
					<br>
					<input type="text" name="customername" placeholder="enter your name">
					<span>Company or Organization</span>
					<br>
					<input type="text" name="companyname" placeholder="enter your company or organization">
					<span>Your Email</span>
					<br>
					<input type="email" name="customeremail" placeholder="enter your contact email">
					<span>Your Phone Number</span>
					<br>
					<input type="tel" name="customerphone" placeholder="enter your phone number">
					<span>Tell us about your needs</span>
					<br>
					<textarea type="text" name="customer-goals" placeholder="Tell us about your goals for your project"></textarea>
					<br>
					<br>
					<input type="submit" value="submit">
				<?php echo form_close(); ?>
				<br>
				<p>You can also contact us via email and phone</p>


				<ul>
					<li>Email: <a href="mailto:info@spring215.com?Subject=General%20Inquiries">info@spring215.com</a></li>
					<li>Phone: <a href="tel:+17343724048">734.372.4048</a></li>
				</ul>
				<hr>

				<h3 class="top-space">Branding and Print</h3>
				<ul>
					<li class="contact-name">Tim Deglopper</li>
					<li>Email: <a href="mailto:tim@spring215.com?Subject=Branding">tim@spring215.com</a></li>
					<li>Phone: <a href="tel:+17343724048">734.372.4048</a></li>
					<li>Mobile: <a href="tel:+17343586276">734.358.6276</a></li>
				</ul>
				<hr>

				<h3 class="top-space">Web</h3>
				<ul>
					<li class="contact-name">Christopher Collins</li>
					<li>Email: <a href="mailto:chris@spring215.com?Subject=Web%20Design">chris@spring215.com</a></li>
					<li>Phone: <a href="tel:+17343724048">734.372.4048</a></li>
					<li>Mobile: <a href="tel:=17343068670">734.306.8670</a></li>
				</ul>
				<ul>
					<li class="contact-name">Craig Salajan</li>
					<li>Email: <a href="mailto:craig@spring215.com?Subject=Web%20Development">craig@spring215.com</a></li>
					<li>Phone: <a href="tel:+17343724048">734.372.4048</a></li>
					<li>Mobile: <a href="tel:+17342553006">734.255.3006</a></li>
				</ul>
				<hr>
				
				<h3 class="top-space">Social</h3>
				<ul>
					<li><a href="https://www.facebook.com/pages/Spring-Creative-Group/637144592980321" title="SPRING Creative Group's Facebook page"><i class="foundicon-facebook"></i> Facebook</a></li>
					<li><a href="https://twitter.com/Spring_CG" title="SPRING Creative Group's Twitter page"><i class="foundicon-twitter"></i> Twitter</a></li>
					<li><a href="http://www.linkedin.com/company/3180921" title="SPRING Creative Group's LinkedIn page"><i class="foundicon-linkedin"></i> LinkedIn</a></li>
				</ul>
			</article>
		</section>
	</article>
</div>