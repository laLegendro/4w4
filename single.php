<?php /*modèle de base index.php */
?>

<?php get_header(); ?>
<h2>single.php</h2>



<div id="accueil" class="global">
    <section class="accueil__section">
        <h2>Accueil</h2>
        <div class="section__cours">

            <!-- un post c un enregistrement -->
            <?php if (have_posts()) :
                while (have_posts()) : the_post();


            ?>
                    <div class="carte">

                        <h5><?php the_title() ?></h5>
                        <p><?php the_content() ?></p>

                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
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