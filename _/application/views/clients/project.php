
<div class="row middle top-space bottom-space">
	<div class="container top-space bottom-space">
		<section class="sixteen columns">
			<h2 class="sixteen columns offset-by-one"><?php echo $title; ?></h2>


			<div class="sixteen columns profile-section">
				<h3 class="sixteen columns offset-by-one alpha"><?php echo $name; ?></h3>
				<?php if ($project->ps != null) { ?>
				<div class="sixteen columns offset-by-one profile-section-item alpha">
					<h4 class="sixteen columns alpha">Photoshop Mockups</h4>
					<?php foreach ($project->ps as $item) { ?>
					<div class="sixteen columns alpha bottom-space"> 
						<span class="four columns alpha omega"><a href=""><?php echo $item->filename; ?></a></span>
						<span class="four columns alpha omega">Updated: <?php echo $item->updated; ?></span>
						<span class="four columns alpha omega"><a href="">Leave Comment</a></span>
						<span class="four columns alpha omega"><?php 
							if ($item->approved == '1') {
								echo anchor('client/approve/'.$refresh.'/'.$item->id, 'approved', array('class' => 'approved-button'));
							} else {
								echo anchor('client/approve/'.$refresh.'/'.$item->id, 'approve?', array('class' => 'not-approved-button'));
							}
							?><hr></span>
					</div>
					<?php } ?>
				</div>
				<?php } ?>
				<?php if ($project->wire != null) { ?>
				<div class="sixteen columns offset-by-one profile-section-item alpha">
					<h4 class="sixteen columns alpha">Wireframes</h4>
					<?php foreach ($project->wire as $item) { ?>
					<div class="sixteen columns alpha bottom-space"> 
						<span class="four columns alpha omega"><a href=""><?php echo $item->filename; ?></a></span>
						<span class="four columns alpha omega">Updated: <?php echo $item->updated; ?></span>
						<span class="four columns alpha omega"><a href="">Leave Comment</a></span>
						<span class="four columns alpha omega"><?php 
							if ($item->approved == '1') {
								echo anchor('client/approve/'.$refresh.'/'.$item->id, 'approved', array('class' => 'approved-button'));
							} else {
								echo anchor('client/approve/'.$refresh.'/'.$item->id, 'approve?', array('class' => 'not-approved-button'));
							}
							?><hr></span>
					</div>
					<?php } ?>
				</div>
				<?php } ?>
				<?php if ($project->style != null) { ?>
				<div class="sixteen columns offset-by-one profile-section-item alpha">
					<h4 class="sixteen columns alpha">Style Guide</h4>
					<?php foreach ($project->style as $item) { ?>
					<div class="sixteen columns alpha bottom-space"> 
						<span class="four columns alpha omega"><a href=""><?php echo $item->filename; ?></a></span>
						<span class="four columns alpha omega">Updated: <?php echo $item->updated; ?></span>
						<span class="four columns alpha omega"><a href="">Leave Comment</a></span>
						<span class="four columns alpha omega"><?php 
							if ($item->approved == '1') {
								echo anchor('client/approve/'.$refresh.'/'.$item->id, 'approved', array('class' => 'approved-button'));
							} else {
								echo anchor('client/approve/'.$refresh.'/'.$item->id, 'approve?', array('class' => 'not-approved-button'));
							}
							?><hr></span>
					</div>
					<?php } ?>
				</div>
				<?php } ?>
				<?php if ($project->info != null) { ?>
				<div class="sixteen columns offset-by-one profile-section-item alpha">
					<h4 class="sixteen columns alpha">Information Architecture</h4>
					<?php foreach ($project->info as $item) { ?>
					<div class="sixteen columns alpha bottom-space"> 
						<span class="four columns alpha omega"><a href=""><?php echo $item->filename; ?></a></span>
						<span class="four columns alpha omega">Updated: <?php echo $item->updated; ?></span>
						<span class="four columns alpha omega"><a href="">Leave Comment</a></span>
						<span class="four columns alpha omega"><?php 
							if ($item->approved == '1') {
								echo anchor('client/approve/'.$refresh.'/'.$item->id, 'approved', array('class' => 'approved-button'));
							} else {
								echo anchor('client/approve/'.$refresh.'/'.$item->id, 'approve?', array('class' => 'not-approved-button'));
							}
							?><hr></span>
					</div>
					<?php } ?>
				</div>
				<?php } ?>
			</div>
		</section>

		<section class="sixteen columns top-space help-content">
			<div class="sixteen columns offset-by-one alpha">
				<h2>Need Help?</h2>
				<p>If you need help managing your account, please contact SPRING at <a href="">support@spring215.com</a></p>
			</div>
		</section>
	</div>
</div>