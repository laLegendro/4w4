<?php /*modèle de base index.php */
?>

<?php get_header(); ?>


<div id="entete" class="global">
  <section class="entete__header">
    <h1><?php echo get_bloginfo('name'); ?></h1>
    <h2><?php echo get_bloginfo('description'); ?></h2>
    <h3>TIM - Collège de maisonneuve</h3>
    <a href="#evenement"><button class="entete__button">Événements</button></a>
  </section>
  <?php /* get_template_part("gabarit/vague1"); */ ?>
</div>
<div id="accueil" class="global">
  <section class="accueil__section">
    <h2>Les plus populaires!!</h2>
    <div class="section__cours">

      <?php if (have_posts()) :
        while (have_posts()) : the_post();


      ?>
          <div class="carte">

            <h5><?php the_title() ?></h5>
            <p><?php echo wp_trim_words(get_the_content(), 10); ?></p>
            <p><a href="<?php echo get_permalink(); ?>">Voir la suite</a></p>
            <?php the_category(); ?>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>

    </div>

    <h2>Nos catégories</h2>
    <div class="section__cours">

      <?php
      $categories = get_categories();
      foreach ($categories as $category) {
        $description = wp_trim_words($category->description, 10, '...');
        $link = get_category_link($category->term_id);
        $post_count = $category->count;
      ?>

        <div class="carte">
          <h3><?php echo $category->name; ?></h3>
          <p><?php echo $description; ?></p>
          <p>Destinations: <?php echo $post_count; ?></p>
          <a href="<?php echo $link; ?>">Voir toutes ces destinations</a>
        </div>

      <?php } ?>




  </section>

</div>

<div id="galerie" class="global diagonal">
  <section class="accueil__galerie">
    <h2>Galerie</h2>
    <blockquote>
      Comment utiliser un blockquote? La question du million
    </blockquote>
  </section>

</div>

<div id="evenement" class="global">
  <section class="accueil__evenement">
    <h2>Événement</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lorem
      odio, mollis eu enim nec, varius porta urna. Ut congue ipsum non leo
      iaculis elementum. Phasellus elementum lacinia urna, id accumsan nibh
      iaculis vel. Nullam eleifend at felis quis cursus. Orci varius natoque
      penatibus et magnis dis parturient montes, nascetur ridiculus mus.
      Nunc ac tortor est.
    </p>
  </section>
  <?php get_template_part("gabarit/vague"); ?>
</div>

<?php get_footer() ?>