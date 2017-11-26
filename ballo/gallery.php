<?php
/*
*
	Template Name: Gallery	
*
*/

get_header();
?>

<?php the_content(); ?>

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
                        <!--End of Social Icons in Header-->


<?php get_footer(); ?>
