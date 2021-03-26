<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-ak
 */

get_header();
?>
<main id ="primary" class ="site-main" >
<section class="carrousel_2">
	<article class="slide_conteneur">
		<div class = "slide">
		<img width="150" height="84" src="http://localhost/4W4/wp-content/uploads/2021/03/maxresdefault.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" loading="lazy">
			<div class="slide_info">
				<p> 582-3W3Web - 90h </p>
				<a href="http://localhost/4W4/582-3w3-creation-de-sites-web-dynamiques-90h/">Création de sites Web dynamiques</a>
				<p> Session : 3</p>
			</div>
		</div>
	</article>						
</section>
<!---
<section class="ctrl-carrousel">
	<input class="rad-carrousel" type="radio" name="rad-carrousel">
	<input class="rad-carrousel" name="rad-carrousel">
	<input class="rad-carrousel" name="rad-carrousel">
-->	

/////////////////////////////////////////////FRONT-PAGE.php
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<section class="cours">

			<?php
			/* Start the Loop */
            $precedent = "XXXXXX";
			while ( have_posts() ) :
				the_post();
                convertirTableau($tPropriété);
				

				if ($tPropriété['typeCours'] != $precedent):
				if ("XXXXXX" != $precedent) : ?>
				</section>
				<?php endif ?>
				<h2><?php echo $tPropriété['typeCours'] ?></h2>
				<section>
				<?php endif ?>

			<?php 
			get_template_part('template-parts/content', 'cours-article');
			$precedent = $tPropriété['typeCours'];
			?>
			<?php endwhile; ?>
			</section> <!-- fin section cours -->
        <?php endif ?>
	

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

function convertirTableau(&$tPropriété)
{
	/*
	$titre = get_the_title();
	// 582-1W1 Mise en page Web (75 heures)
	$sigle = substr($titre, 0, 7);
	$nbHeure = substr($titre, -4, 3);
	$titrePartiel = substr($titre,8 ,-6);
	$session = substr($titre, 4,1);
	//$contenu = get_the_content(;)
	//$resume = substr($contenu, 0, 200);
	$typeCours = get_field('type_de_cours'); 
	*/

	$tPropriété['titre'] = get_the_title();
	$tPropriété['sigle'] = substr($tPropriété['titre'], 0, 7);
	$tPropriété['nbHeure'] = substr($tPropriété['titre'], -4, 3);
	$tPropriété['titrePartiel'] = substr($tPropriété['titre'],8 ,-6);
	$tPropriété['session'] = substr($tPropriété['titre'], 4,1);
	$tPropriété['typeCours'] = get_field('type_de_cours');
	

}