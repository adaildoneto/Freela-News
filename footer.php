<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<footer class="page-footer teal darken-4 z-depth-2" style="margin-top: -20px;">
    <div class="container">
        <div class="row">

            <div class="col l4 m12 s12">
                <?php dynamic_sidebar( 'rodape1' ); ?>
                <!-- Chamando formulario do Odin -->

            </div>
            <div class="col l5 m12 s12">
                <?php dynamic_sidebar( 'rodape2' ); ?>
            </div>
            <div class="col l3 m12 s12">
                <?php dynamic_sidebar( 'rodape3' ); ?>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Feito com <i class="fa fa-heart" aria-hidden="true"></i> no Acre
        </div>
    </div>
</footer>
<!--  Scripts-->





<!-- Definindo o layout da paginação -->


<?php wp_footer(); ?>



</body>
</html>
