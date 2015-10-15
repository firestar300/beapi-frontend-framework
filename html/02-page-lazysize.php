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
				</picture>
				<noscript>
					<img src="http://lorempixel.com/960/575/nature/no-script-fallback/" alt="image with artdirection" />
				</noscript>
				<!--[if lte IE 8]>
					<img src="http://lorempixel.com/960/575/nature/ie-fallback/" class="fallback__img" alt="image with artdirection"/>
				<![endif]-->
					
				
				<!-- <hr>
				<picture class="lazyload">
					[if IE 9]><video style="display: none"><![endif]
					<source
						 data-srcset="http://lorempixel.com/480/288/people/480-288/, http://lorempixel.com/960/576/people/960-576/ 2x" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
						media="(max-width: 480px)" />
					<source
							 data-srcset="http://lorempixel.com/768/460/people/768-460/, http://lorempixel.com/1536/920/people/1536-920/ 2x" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
							media="(max-width: 768px)" />
					<source
							 data-srcset="http://lorempixel.com/960/575/people/960-575/, http://lorempixel.com/1920/1151/people/1920-1151/ 2x" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
					[if IE 9]></video><![endif]
					<img src="http://lorempixel.com/480/288/people/480-288/" class="lazyload" alt="image with artdirection"/>
				</picture>
				<noscript>
					<img src="http://lorempixel.com/1280/768/people/1280-768/" alt="image with artdirection"/>
				</noscript>
				<hr>
				<picture class="lazyload">
					[if IE 9]><video style="display: none"><![endif]
					<source
						 data-srcset="http://lorempixel.com/480/288/sport/480-288/, http://lorempixel.com/960/576/sport/960-576/ 2x" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
						media="(max-width: 480px)" />
					<source
							 data-srcset="http://lorempixel.com/768/460/sport/768-460/, http://lorempixel.com/1536/920/sport/1536-920/ 2x" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
							media="(max-width: 768px)" />
					<source
							 data-srcset="http://lorempixel.com/960/575/sport/960-575/, http://lorempixel.com/1920/1151/sport/1920-1151/ 2x" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
					[if IE 9]></video><![endif]
					<img src="http://lorempixel.com/480/288/sport/480-288/" class="lazyload" alt="image with artdirection"/>
				</picture>
				<noscript>
					<img src="http://lorempixel.com/1280/768/sport/1280-768/" alt="image with artdirection"/>
				</noscript>
				<hr>
				<picture class="lazyload">
					[if IE 9]><video style="display: none"><![endif]
					<source
						 data-srcset="http://lorempixel.com/480/288/food/480-288/, http://lorempixel.com/960/576/food/960-576/ 2x" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
						media="(max-width: 480px)" />
					<source
							 data-srcset="http://lorempixel.com/768/460/food/768-460/, http://lorempixel.com/1536/920/food/1536-920/ 2x" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
							media="(max-width: 768px)" />
					<source
							 data-srcset="http://lorempixel.com/960/575/food/960-575/, http://lorempixel.com/1920/1151/food/1920-1151/ 2x" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
					[if IE 9]></video><![endif]
					<img src="http://lorempixel.com/480/288/food/480-288/" class="lazyload" alt="image with artdirection"/>
				</picture>
				<noscript>
					<img src="http://lorempixel.com/1280/768/food/1280-768/" alt="image with artdirection"/>
				</noscript> -->
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