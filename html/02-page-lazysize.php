<?php $class = ''; ?>
<?php include 'header.php'; ?>
	
	<section class="content" id="content">
		
		<?php include 'blocks/breadcrumb.php'; ?>

		
		
		<article class="entry" itemscope itemtype="http://schema.org/Article">
			<header class="entry__header">
				<h1 class="page__title" itemprop="headline">Titre de la page</h1>
				<div class="entry__date">
					Publié le <time datetime="2015-06-30" itemprop="datePublished">06/30/2015</time>
				</div>
			</header>
			<section class="entry__content" itemprop="articleBody">
				<hr>
				<h2>Sans lazysize et support ie8 pour les projets relous</h2>

				<?php include 'blocks/rwd-picture_ie8.php'; ?>


				<hr>
				
				
				<h2>Avec Lazysizes et support ie9+</h2>
				<?php include 'blocks/rwd-picture_lazyload.php'; ?>
				
				<hr><hr><hr><hr><hr><hr><hr><hr><hr>
				<hr><hr><hr><hr><hr><hr><hr><hr><hr>
				<hr><hr><hr><hr><hr><hr><hr><hr><hr>
				<hr><hr><hr><hr><hr><hr><hr><hr><hr>
				<hr><hr><hr><hr><hr><hr><hr><hr><hr>
				<hr><hr><hr><hr><hr><hr><hr><hr><hr>
				<hr><hr><hr><hr><hr><hr><hr><hr><hr>
				<hr><hr><hr><hr><hr><hr><hr><hr><hr>
				<hr><hr><hr><hr><hr><hr><hr><hr><hr>
				<hr><hr><hr><hr><hr><hr><hr><hr><hr>
				<hr><hr><hr><hr><hr><hr><hr><hr><hr>
				<hr><hr><hr><hr><hr><hr><hr><hr><hr>
				<hr><hr><hr><hr><hr><hr><hr><hr><hr>
				<hr><hr><hr><hr><hr><hr><hr><hr><hr>
				<hr><hr><hr><hr><hr><hr><hr><hr><hr>
				<hr><hr><hr><hr><hr><hr><hr><hr><hr>
				<hr><hr><hr><hr><hr><hr><hr><hr><hr>
				
				<h2>Avec Lazysizes et support ie9+</h2>
				
				<?php include 'blocks/rwd-picture_lazyload-align_class_option.php'; ?>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum voluptates odio itaque, adipisci non, quos, quis deserunt ab nostrum nam doloremque consequuntur veniam repudiandae nulla sunt tenetur voluptate consequatur quidem.</p>
				<?php include 'blocks/rwd-picture_lazyload.php'; ?>
				
				<hr>


				<h2>Avec Lazysizes et support ie8 (on abandonne, markup trop complexe)</h2>


				<?php include 'blocks/rwd-picture_lazyload+ie8.php'; ?>

			</section>
		</article>

	</section>

	<aside class="sidebar" id="sidebar">
		<div class="widget-area">
			<?php include 'blocks/widgets/widget-search.php'; ?>
		</div>
	</aside>
<?php include 'footer.php'; ?>