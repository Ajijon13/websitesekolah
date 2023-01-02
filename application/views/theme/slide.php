<div id="demo" class="carousel slide" data-ride="carousel">

	<!-- Indicators -->
	<ul class="carousel-indicators">

		<?php $loop = 0;?>
		<?php foreach($slide_banner as $b){ ?>
		<?php $loop++;?>
		<li data-target="#demo" data-slide-to="<?php echo ($loop-1); ?>" class="<?php if($loop === 1) echo 'active' ?>">
		</li>
		<?php } ?>

	</ul>

	<!-- The slideshow -->
	<div class="carousel-inner">
		<?php $loop = 0;?>
		<?php foreach($slide_banner as $b){ ?>
		<?php $loop++;?>
		<div class="carousel-item <?php if($loop === 1) echo 'active' ?>">
			<img src="<?php echo 'style/img/banner/'. $b->photo;?>" width="1100" height="500">
            <div class="carousel-caption">
                <h3><?php $b->title; ?></h3>
                <p><?php $b->text ?></p>
            </div>
		</div>
		<?php } ?>
	</div>

	<!-- Left and right controls -->
	<a class="carousel-control-prev" href="#demo" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#demo" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>
</div>