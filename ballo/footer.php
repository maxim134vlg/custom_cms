<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ballo
 */
global $ballo;
?>

	<!--Footer-->
    <footer id="landing-footer" class="clearfix">
        <div class="row clearfix">

            <p id="copyright" class="col-2">Made with love by <a href="https://www.shapingrain.com">ShapingRain</a></p>

            <!--Social Icons in Footer-->
                        <ul class="social-icons">
                            <li>
                                <?php if( !empty($ballo[ 'facebook' ])): ?>
                                <a target="_blank" title="Facebook" href="https://www.facebook.com/<?php echo $ballo[ 'facebook' ]; ?>">
                                    <i class="fa fa-facebook fa-1x"></i><span>Facebook</span>
                                </a>
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if( !empty($ballo[ 'google' ])): ?>
                                <a target="_blank" title="Google+" href="http://google.com/<?php echo $ballo[ 'google' ]; ?>">
                                    <i class="fa fa-google-plus fa-1x"></i><span>Google+</span>
                                </a>
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if( !empty($ballo[ 'twitter' ])): ?>
                                <a target="_blank" title="Twitter" href="http://www.twitter.com/<?php echo $ballo[ 'twitter' ]; ?>">
                                    <i class="fa fa-twitter fa-1x"></i><span>Twitter</span>
                                </a>
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if( !empty($ballo[ 'instagram' ])): ?>
                                <a target="_blank" title="Instagram" href="http://www.instagram.com/<?php echo $ballo[ 'instagram' ]; ?>">
                                    <i class="fa fa-instagram fa-1x"></i><span>Instagram</span>
                                </a>
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if( !empty($ballo[ 'behance' ])): ?>
                                <a target="_blank" title="behance" href="http://www.behance.net/<?php echo $ballo[ 'behance' ]; ?>">
                                    <i class="fa fa-behance fa-1x"></i><span>Behance</span>
                                </a>
                                <?php endif; ?>
                            </li>
                        </ul>
            <!--End of Social Icons in Footer-->
        </div>
    </footer>
    <!--End of Footer-->

</div>

<!-- Include JavaScript resources -->
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.1.8.3.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/wow.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/featherlight.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/featherlight.gallery.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.enllax.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.scrollUp.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.easing.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.stickyNavbar.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.waypoints.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/images-loaded.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/lightbox.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/site.js"></script>

<?php wp_footer(); ?>

</body>
</html>
