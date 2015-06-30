<?php snippet('header') ?>

		<?php snippet('breadcrumb') ?>

		<?php if($photo = $page->images()->sortBy('sort', 'asc')->first()) { ?>
			<div class="row">
				<img class="small-12 columns" src="<?php echo thumb($photo,array('height'=>300, 'quality'=>90))->dataUri() ?>" title="<?php echo $photo->title() ?>"/>
			</div>
		<?php } ?>
		
		<h1><?php echo $page->title()->html() ?></h1>
		<?php echo $page->text()->kirbytext() ?>

		<?php snippet('product-list') ?>

		<?php snippet('category-list', array('categories' => $page->children()->visible()->filterBy('template','category'))) ?>

<?php snippet('footer') ?>