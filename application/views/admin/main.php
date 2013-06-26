<div class="row middle top-space bottom-space">
	<div class="container top-space bottom-space">
		<section class="sixteen columns offset-by-two bottom-space">
			<h2 class="twelve columns offset-by-one">Clients</h2>
			<?php foreach ($clients as $client) { ?>
			<div class="twelve columns profile-section">
				<h3 class="twelve columns offset-by-one alpha"><?php echo $client->client_name; ?></h3>
				<a class="edit-clients-button twelve columns offset-by-one alpha bottom-space" href="">EDIT CLIENT</a>
				
				<?php if ($client->branding == 1) { ?>
				<div class="twelve columns offset-by-one profile-section-item alpha">
					<h4 class="twelve columns alpha">Branding</h4>
					<div class="twelve columns alpha"> 
						<span class="four columns alpha omega"><a href="">Clientname logo design</a></span>
						<span class="four columns alpha omega">updated 1/12/80</span>
						<span class="four columns alpha omega"><a href="client-project.html">Edit Project</a></span>
					</div>
				</div>
				<?php } ?>
				<?php if ($client->design == 1) { ?>
				<div class="twelve columns offset-by-one profile-section-item alpha">
					<h4 class="twelve columns alpha">Web Design</h4>
					<div class="twelve columns alpha"> 
						<span class="four columns alpha omega"><a href="">Clientname logo design</a></span>
						<span class="four columns alpha omega">updated 1/12/80</span>
						<span class="four columns alpha omega"><a href="client-project.html">Edit Project</a></span>
					</div>
				</div>
				<?php } ?>
				<?php if ($client->development == 1) { ?>
				<div class="twelve columns offset-by-one profile-section-item alpha">
					<h4 class="twelve columns alpha">Web Development</h4>
					<div class="twelve columns alpha"> 
						<span class="four columns alpha omega"><a href="">Clientname logo design</a></span>
						<span class="four columns alpha omega">updated 1/12/80</span>
						<span class="four columns alpha omega"><a href="client-project.html">Edit Project</a></span>
					</div>
				</div>
				<?php } ?>
				<?php if ($client->development == 0 && $client->design == 0 && $client->print == 0 && $client->branding == 0) { ?>
				<div class="twelve columns offset-by-one profile-section-item alpha">
					<h4 class="twelve columns alpha">No Active Projects</h4>
					<div class="twelve columns alpha"> 
						<span class="four columns alpha omega"><a href="">ADD A PROJECT</a></span>
					</div>
				</div>
				<?php } ?>
			</div>
			<?php } ?>
		</section>

		<!-- ADD CLIENT FORM -->
		<section  class="sixteen columns offset-by-two bottom-space">
			<div class="twelve columns">
				<h2 class="twelve columns offset-by-one alpha">Add Client</h2>
			</div>

			<div class="twelve columns section-body bottom-space">
				<section class="six columns offset-by-one top-space alpha">
					<?php echo form_open('admin/add_client', array('id' => 'login')); ?>
					    <fieldset id="inputs">
					    	<h3>Enter Client Info</h3>
					    	<input id="name" name="clientname" type="text" placeholder="Client Name" required> 
					        <input id="email" name="clientemail" type="email" placeholder="Client Primary Email" required>
					       <br>
					       <h3>Enter Contact Info</h3>
					       <input id="contactname" name="contactname" type="text" placeholder="Contact Name" required>
					       <input id="contactphone" name="contactphone" type="phone" placeholder="Contact Phone" required>
					       <input id="contactemail" name="contactemail" type="email" placeholder="Contact Email" required>
					       <br>
					        <h3 class="top-space">Account Options</h3>
							<div class="input-buttons-projects">
								<p>SPRING Employee</p>
								<input type="checkbox" name="is_admin"><span>Is this a SPRING employee?</span>
					        	<p>Create a Project Category</p>
					        	<input type="checkbox" name="branding"><span>branding</span>
					        	<br>
					        	<input type="checkbox" name="print"><span>print</span>
					        	<br>
					        	<input type="checkbox" name="webdesign"><span>web design</span>
					        	<br>
					        	<input type="checkbox" name="webdev"><span>web development</span>
					        	<br>
					    	</div>
							<input class="form-button" type="submit" id="addclient" value="add client">
					    </fieldset>
					<?php echo form_close(); ?>
				</section>
			</div>
		</section>

		<!--Archived Clients -->
		<section  class="sixteen columns offset-by-two archived-section">
			<div class="twelve columns">
				<h2 class="twelve columns offset-by-one alpha">Archived Clients</h2>
			</div>

			<div class="twelve columns section-body bottom-space">
				<section class="twelve columns offset-by-one top-space alpha archived-titles">
					<ul class="four columns">
						<li>Client Name</li>
					</ul>
					<ul class="four columns">
						<li>Unarchive?</li>
					</ul>
				</section>
				<section class="twelve columns offset-by-one top-space alpha">
					<?php foreach ($archived as $client) { ?>
					<!-- Client -->
					<ul class="four columns">
						<li><a href=""><?php echo $client->client_name; ?></a></li>
					</ul>
					<ul class="four columns">
						<li><?php echo anchor('admin/archive/0/' . $client->id, 'Unarchive');  ?></li>
					</ul>
					<?php } ?>
				</section>
			</div>
		</section>
	</div>
</div>