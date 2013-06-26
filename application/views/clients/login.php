<div class="row middle top-space bottom-space">
	<div class="container top-space bottom-space">
		<section class="sixteen columns offset-by-two">
			<?php echo validation_errors(); ?>
			<?php if (isset($error)) echo '<p>'.$error.'</p>'; ?>
			<div class="eleven columns">
				<h2 class="eleven columns offset-by-one alpha">Log in to view your account</h2>
			</div>
			<div class="eleven columns section-body bottom-space">
				<section class="five columns offset-by-one top-space alpha">
					<?php echo form_open('client/login', array('id' => 'login', 'name' => 'login')); ?>
					    <h3>Log In</h3>
					    <p>Enter you primary email account and password.</p>
					    <fieldset id="inputs">
					        <input id="email" name='email' type="email" placeholder="youremail@somewhere.com" autofocus required>   
					        <input id="password" name='password' type="password" placeholder="Password" required>
					        <input class="form-button" type="submit" id="submit" value="log in">
					    </fieldset>
					<?php echo form_close(); ?>
				</section>
				<section class="five columns offset-by-one top-space alpha">
					<?php echo form_open('client/forgot', array('id' => 'forgot', 'name' => 'forgot')); ?>
					    <h3>Lost Password?</h3>
					    <p>Enter your primary email address associated with your account and we will send you a temporary password.</p>
					    <fieldset id="inputs">
					        <input id="email" type="email" placeholder="youremail@somewhere.com" required>
					        <input class="form-button" type="submit" id="submit" value="get password">
					    </fieldset>
					<?php echo form_close(); ?>
				</section>
			</div>
		</section>

		<section class="sixteen columns offset-by-two top-space help-content">
			<div class="eleven columns offset-by-one alpha">
				<h2>Need Help?</h2>
				<p>If you need help logging into your account, please contact SPRING at <a href="mailto:support@spring215.com">support@spring215.com</a></p>
			</div>
		</section>
	</div>
</div>

<div class="row bottom top-space bottom-space">
	<footer class="container">
		<section class="four columns">
			<h4>Services</h4>
				<ul>
					<li><a href="">Branding</a></li>
					<li><a href="">Print</a></li>
					<li><a href="">Web Design</a></li>
				</ul>
		</section>
		<section class="four columns">
			<h4>Social</h4>
				<ul>
					<li><a href="https://www.facebook.com/pages/Spring-Creative-Group/637144592980321" title="SPRING Creative Group's Facebook page"><i class="foundicon-facebook"></i> Facebook</a></li>
					<li><a href="https://twitter.com/Spring_CG" title="SPRING Creative Group's Twitter page"><i class="foundicon-twitter"></i> Twitter</a></li>
					<li><a href="http://www.linkedin.com/company/3180921" title="SPRING Creative Group's Linkedin page"><i class="foundicon-linkedin"></i> LinkedIn</a></li>
				</ul>
		</section>
		<section class="four columns">
			<h4>Partners</h4>
				<ul>
					<li><a href="http://www.annarborusa.org/" title="SPARK USA's website">SPARK USA</a></li>
					<li><a href="http://www.wccnet.edu/" title="Washtenaw Community College's website">Washtenaw Community College</a></li>
					<li><a href="http://elg.ewashtenaw.org/" title="Eastern Leader's Group website">Eastern Leaders Group</a></li>
				</ul>
		</section>
		<section class="four columns">
			<h4>Contact</h4>
				<ul>
					<li><a href="mailto:info@spring215.com?Subject=Request%20information">Email: info@spring215.com</a></li>
					<li itemscope itemtype="http://schema.org/LocalBusiness"><a itemprop="telephone" href="tel:+17343724048">Phone: 734.372.4048</a></li>
					<li><a href="https://maps.google.com/maps?client=firefox-a&q=215+W.+Michigan+Ave+Ypsilanti,+MI+48197&ie=UTF-8&hq=&hnear=0x883ca847336a1def:0x597e965b804eae6f,215+W+Michigan+Ave,+Ypsilanti,+MI+48197&gl=us&ei=0zWyUczyHerI0gHPuoDoAw&ved=0CC0Q8gEwAA">Address: 215 W. Michigan Ave
						<br>
						Ypsilanti, MI 48197</a></li>	
				</ul>
		</section>
	</footer>
</div>

<!-- End Document
================================================== -->
<script type="text/javascript" src="js/modernizr.custom.29172.js"></script>
</body>
</html>