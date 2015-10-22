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
				<h2>Sans lazysize</h2>

				<picture>
					<!--[if IE 9]><video style="display: none"><![endif]-->
					<source
						srcset="http://lorempixel.com/480/288/nature/480-288/, http://lorempixel.com/960/576/nature/960-576/ 2x"  
						media="(max-width: 480px)" />
					<source
							srcset="http://lorempixel.com/768/460/nature/768-460/, http://lorempixel.com/1536/920/nature/1536-920/ 2x"  
							media="(max-width: 768px)" />
					<source
							srcset="http://lorempixel.com/960/575/nature/960-575/, http://lorempixel.com/1920/1151/nature/1920-1151/ 2x" />
					<!--[if IE 9]></video><![endif]-->
					<img src="http://lorempixel.com/480/288/nature/480-288/"  alt="image with artdirection"/>
				</picture>
				<hr>
				<h2>Avec Lazysizes</h2>
				<picture>
					<!--[if IE 9]><video style="display: none"><![endif]-->
					<source
						 data-srcset="http://lorempixel.com/480/288/nature/480-288/, http://lorempixel.com/960/576/nature/960-576/ 2x" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
						media="(max-width: 480px)" />
					<source
							 data-srcset="http://lorempixel.com/768/460/nature/768-460/, http://lorempixel.com/1536/920/nature/1536-920/ 2x" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
							media="(max-width: 768px)" />
					<source
							 data-srcset="http://lorempixel.com/960/575/nature/960-575/, http://lorempixel.com/1920/1151/nature/1920-1151/ 2x" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
					<!--[if IE 9]></video><![endif]-->
					<img src="http://lorempixel.com/480/288/nature/480-288/" class="lazyload" alt="image with artdirection"/>
					<noscript>
						<img src="http://lorempixel.com/960/575/nature/no-script-fallback/" alt="image with artdirection" />
					</noscript>
				</picture>
				<!--[if lte IE 8]>
					<img src="http://lorempixel.com/960/575/nature/ie-fallback/" class="fallback__img" alt="image with artdirection"/>
				<![endif]-->
				
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
				<picture>
					<!--[if IE 9]><video style="display: none"><![endif]-->
					<source
						 data-srcset="http://lorempixel.com/480/288/food/480-288/, http://lorempixel.com/960/576/food/960-576/ 2x" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
						media="(max-width: 480px)" />
					<source
							 data-srcset="http://lorempixel.com/768/460/food/768-460/, http://lorempixel.com/1536/920/food/1536-920/ 2x" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
							media="(max-width: 768px)" />
					<source
							 data-srcset="http://lorempixel.com/960/575/food/960-575/, http://lorempixel.com/1920/1151/food/1920-1151/ 2x" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
					<!--[if IE 9]></video><![endif]-->
					<noscript>
						<img src="http://lorempixel.com/960/575/food/no-script-fallback/" alt="image with artdirection" />
					</noscript>
					<img src="http://lorempixel.com/480/288/food/480-288/" class="lazyload" alt="image with artdirection"/>
				</picture>
				<!--[if lte IE 8]>
					<img src="http://lorempixel.com/960/575/food/ie-fallback/" class="fallback__img" alt="image with artdirection"/>
				<![endif]-->
				<hr>
				<picture>
					<!--[if IE 9]><video style="display: none"><![endif]-->
					<source
						 data-srcset="http://lorempixel.com/480/288/sports/480-288/, http://lorempixel.com/960/576/sports/960-576/ 2x" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
						media="(max-width: 480px)" />
					<source
							 data-srcset="http://lorempixel.com/768/460/sports/768-460/, http://lorempixel.com/1536/920/sports/1536-920/ 2x" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
							media="(max-width: 768px)" />
					<source
							 data-srcset="http://lorempixel.com/960/575/sports/960-575/, http://lorempixel.com/1920/1151/sports/1920-1151/ 2x" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
					<!--[if IE 9]></video><![endif]-->
					<noscript>
						<img src="http://lorempixel.com/960/575/sports/no-script-fallback/" alt="image with artdirection" />
					</noscript>
					<img src="http://lorempixel.com/480/288/sports/480-288/" class="lazyload" alt="image with artdirection"/>
				</picture>
				<!--[if lte IE 8]>
					<img src="http://lorempixel.com/960/575/sports/ie-fallback/" class="fallback__img" alt="image with artdirection"/>
				<![endif]-->
				
			</section>
		</article>

	</section>

	<aside class="sidebar" id="sidebar">
		<div class="widget-area">
			<?php include 'blocks/widgets/widget-search.php'; ?>
			<?php include 'blocks/widgets/widget-text.php'; ?>
			<?php include 'blocks/widgets/widget-categories.php'; ?>
			<?php include 'blocks/widgets/widget-archive.php'; ?>
			<?php include 'blocks/widgets/widget-pages.php'; ?>
			<?php include 'blocks/widgets/widget-gravityform.php'; ?>
		</div>
	</aside>
<?php include 'footer.php'; ?>