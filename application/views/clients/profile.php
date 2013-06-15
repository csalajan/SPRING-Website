<div class="row middle top-space bottom-space">
	<div class="container top-space bottom-space">
		<section class="sixteen columns offset-by-two">
			<h2 class="twelve columns offset-by-one"><?php echo $client->client_name; ?></h2>

			<div class="twelve columns profile-section">
				<h3 class="twelve columns offset-by-one alpha">Active Projects</h3>
				<?php if ($client->branding == 1) { ?>
				<div class="twelve columns offset-by-one profile-section-item alpha">
					<h4 class="twelve columns alpha">Branding</h4>
					<div class="twelve columns alpha links"> 
						<span class="four columns alpha omega"><a href="">Clientname logo design</a></span>
						<span class="four columns alpha omega">updated 1/12/80</span>
						<span class="four columns alpha omega"><?php echo anchor('client/projects/branding', 'View Project'); ?></span>
					</div>
				</div>
				<?php } ?>
				<?php if ($client->design == 1) { ?>
				<div class="twelve columns offset-by-one profile-section-item alpha">
					<h4 class="twelve columns alpha">Web Design</h4>
					<div class="twelve columns alpha"> 
						<span class="four columns alpha omega"><a href="">Clientname logo design</a></span>
						<span class="four columns alpha omega">updated 1/12/80</span>
						<span class="four columns alpha omega"><?php echo anchor('client/projects/design', 'View Project'); ?></span>
					</div>
				</div>
				<?php } ?>
				<?php if ($client->development == 1) { ?>
				<div class="twelve columns offset-by-one profile-section-item alpha">
					<h4 class="twelve columns alpha">Web Development</h4>
					<div class="twelve columns alpha"> 
						<span class="four columns alpha omega"><a href="">Clientname logo design</a></span>
						<span class="four columns alpha omega">updated 1/12/80</span>
						<span class="four columns alpha omega"><?php echo anchor('client/projects/development', 'View Project'); ?></span>
					</div>
				</div>
				<?php } ?>
			</div>

			<div class="twelve columns profile-section">
				<?php if ($client->host_name != null) { ?>
				<h3 class="twelve columns offset-by-one alpha">Hosting, Domain, and Password Information</h3>

				<div class="twelve columns offset-by-one profile-section-item alpha">
					<h4 class="twelve columns alpha">Hosting</h4>
					<div class="twelve columns alpha titles"> 
						<span class="four columns alpha omega">Account Name
						<br>
						<a href=""><?php echo $client->host_name; ?></a></span>

						<span class="four columns alpha omega">Host Provider
						<br>
						<a href=""><?php echo $client->host_provider; ?></a></span>
						
						<span class="four columns alpha omega">Password
						<br>
						<?php if ($client->host_name != null) echo '<a href="">Get Password</a>'; ?></span>
					</div>
				</div>
				<?php } ?>
				<?php if ($client->twitter_link != null OR $client->facebook_link != null) { ?>
				<div class="twelve columns offset-by-one profile-section-item alpha">
					
					<h4 class="twelve columns alpha">Social Media/Networks</h4>
					<?php if ($client->twitter_link != null) { ?>
					<div class="twelve columns alpha titles"> 
						<span class="four columns alpha omega">Twitter
						<br>
						<a href=""><?php echo $client->twitter_link; ?></a></span>

						<span class="four columns alpha omega">Username
						<br>
						<a href=""><?php echo $client->twitter_name; ?></a></span>

						<span class="four columns alpha omega">Password
						<br>
						<?php if ($client->twitter_link != null) echo '<a href="">Get Password</a>'; ?></span>
					</div>
					<?php } ?>
					<?php if ($client->facebook_link != null) { ?>
					<div class="twelve columns alpha titles"> 
						<span class="four columns alpha omega">Facebook
						<br>
						<a href=""><?php echo $client->facebook_link; ?></a></span>

						<span class="four columns alpha omega">Username
						<br>
						<a href=""><?php echo $client->facebook_name; ?></a></span>

						<span class="four columns alpha omega">Password
						<br>
						<?php if ($client->facebook_link != null) echo '<a href="">Get Password</a>'; ?></span>
					</div>

					<?php } ?>
				</div>
				<p class="eleven columns offset-by-one alpha">IMPORTIANT: This information maybe incorrect if you have made changes to accounts on your own. SPRING is not responsible for managing accounts that have been created or altered by clients. Please inform us if you have updated any account log-in information so that we can update our records.</p>
				<?php } ?>
			</div>

			<div class="twelve columns profile-section">
				<h3 class="twelve columns offset-by-one alpha">Your Contact Information</h3>
				<div class="twelve columns offset-by-one profile-section-item alpha">
					<h4 class="twelve columns alpha">Primary Email</h4>
					<div class="twelve columns alpha"> 
						<span class="four columns alpha omega"><a href=""><?php echo $client->contact_email; ?></a></span>
						<span class="four columns alpha omega"><?php echo $client->contact_name; ?></span>
						<span class="four columns alpha omega"><a href="">Change</a></span>
					</div>
				</div>
				<div class="twelve columns offset-by-one profile-section-item alpha">
					<h4 class="twelve columns alpha">Primary Phone</h4>
					<div class="twelve columns alpha"> 
						<span class="four columns alpha omega"><a href=""><?php echo $client->contact_phone; ?></a></span>
						<span class="four columns alpha omega"><?php echo $client->contact_name; ?></span>
						<span class="four columns alpha omega"><a href="">Change</a></span>
					</div>
				</div>
			</div>
		</section>

		<section class="sixteen columns offset-by-two top-space help-content">
			<div class="twelve columns offset-by-one alpha">
				<h2>Need Help?</h2>
				<p>If you need help managing your account, please contact SPRING at <a href="">support@spring215.com</a></p>
			</div>
		</section>
	</div>
</div>