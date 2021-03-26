<?php
/**
 * Template part l'affichage des blocs de cours dans front-page.php
 * 
 *
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-ak
 */
global $tPropriété;
?>
<article>
<?php the_post_thumbnail('thumbnail'); ?>
<p> <?php echo $tPropriété['sigle'] . $tPropriété['typeCours'] . " - " . $tPropriété ['nbHeure'] ; ?> </p>
<a href ="<?php echo get_permalink() ?>"><?php echo $tPropriété['titrePartiel']; ?></a>
<p> Session : <?php echo $tPropriété['session']; ?>
</article>

<article class="slide_conteneur">
		<div class = "slide">
            <?php the_post_thumbnail('thumbnail'); ?>
            <div class='slide_infos'>
            <p> <?php echo $tPropriété['sigle'] . $tPropriété['typeCours'] . " - " . $tPropriété ['nbHeure'] ; ?> </p>
<a href ="<?php echo get_permalink() ?>"><?php echo $tPropriété['titrePartiel']; ?></a>
<p> Session : <?php echo $tPropriété['session']; ?>
			</div>
		</div>
	</article>	