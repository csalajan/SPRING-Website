<div class="<?php echo $div_css; ?>">
	<article class="container">
		<section class="<?php echo $css; ?>">
            <h1 class="<?php echo $h1; ?>"><i><?php echo $text; ?></i></h1>
		</section>
                <?php if ($link == true) { ?>
		<section class="four columns offset-by-eleven">
			<?php echo anchor('home/services', 'how we can help', array('class' => 'five columns')); ?>
		</section>
                <?php } ?>
	</article>
</div>