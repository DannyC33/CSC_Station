<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package csc
 * @since csc 1.0
 */

?>
    <footer>
        <div class="footer-top">
            <div>
                <div class="footer-logo">
					<a href="https://www.cscglobal.com/cscglobal/home/" target="_blank"><img src="<?php echo THEME_PATH; ?>/images/csc-logo.svg" alt="CSC"></a>
                </div>
                <div class="tagline">
                    <span>
                        <?php 

                            $tagline = get_bloginfo('description');
                            if($tagline){
                                $tagline = str_replace('®', '<sup>®</sup>', $tagline); 
                                echo $tagline;
                            }

                        ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div>
                <div class="left">
					<h4><a href="/" class="logo"><img src="/wp-content/themes/csc/images/footerlogo_184x23.svg" width="184" height="auto"></a></h4>
                    <?php

                        wp_nav_menu(array( 
                            'menu' => 'Footer Menu',
                            'container' => false, 
                            'depth' => 1,
                        ));

                    ?>
                </div>
                <?php

                    $footer = get_field('footer', 2);
                    if($footer){
                        $footer_linkedin = $footer['footer_linkedin'];
                        $footer_instagram = $footer['footer_instagram'];
                        $footer_phone = $footer['footer_phone'];
                        $footer_email = $footer['footer_email'];
	                    $addr = $footer['footer_address'];
	                    $google_maps_link = $footer['footer_address_link'];
                    }

                ?>
                <?php if(isset($addr)) :?>
                    <div class="right">
                        <?php  if( !empty($footer_linkedin) || !empty($footer_instagram) ){ ?>
                               <ul class="footer-socials">
                                   <?php if(!empty($footer_linkedin)) echo '<li><a href="'. $footer_linkedin .'"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"><defs><clipPath id="737za"><path d="M0 .292h27.82V27.82H0z"/></clipPath></defs><g><g><g><g><g/><g clip-path="url(#737za)"><path fill="#003b5c" d="M25.76.292H2.053C.92.292 0 1.18 0 2.275v23.56c0 1.096.92 1.986 2.053 1.986H25.76c1.135 0 2.06-.89 2.06-1.987V2.275c0-1.095-.925-1.983-2.06-1.983"/></g></g><g><path fill="#eaebeb" d="M4.125 10.611h4.126v13.14H4.125zM8.58 6.447c0 1.307-1.072 2.368-2.39 2.368-1.323 0-2.394-1.06-2.394-2.368 0-1.306 1.07-2.367 2.393-2.367 1.32 0 2.391 1.062 2.391 2.367z"/></g><g><path fill="#eaebeb" d="M10.837 10.61h3.958v1.796h.055c.551-1.033 1.897-2.122 3.904-2.122 4.179 0 4.95 2.721 4.95 6.258v7.207H19.58v-6.39c0-1.523-.028-3.483-2.144-3.483-2.147 0-2.477 1.66-2.477 3.373v6.5h-4.123z"/></g></g></g></g></svg></a></li>'; ?>
                                   <?php if(!empty($footer_instagram)) echo '<li><a href="'. $footer_instagram .'"><?xml version="1.0" encoding="UTF-8"?>
<svg id="SVGDoc" width="28" height="28" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:avocode="https://avocode.com/" viewBox="0 0 28 28"><defs></defs><desc>Generated with Avocode.</desc><g><g><title>Fill 1</title><path d="M20.22222,0c4.29645,0 7.77778,3.48289 7.77778,7.77778v12.44444c0,4.29645 -3.48133,7.77778 -7.77778,7.77778h-12.44444c-4.29489,0 -7.77778,-3.48133 -7.77778,-7.77778v-12.44444c0,-4.29489 3.48289,-7.77778 7.77778,-7.77778zM25.27778,7.77778c-0.00934,-2.78756 -2.26645,-5.04778 -5.05556,-5.05556h-12.44444c-2.78756,0.00778 -5.04778,2.268 -5.05556,5.05556v12.44444c0.00778,2.78911 2.268,5.04622 5.05556,5.05556h12.44444c2.78911,-0.00934 5.04622,-2.26645 5.05556,-5.05556zM21.38889,8.16667c-0.86023,0 -1.55556,-0.69689 -1.55556,-1.55555c0,-0.85867 0.69533,-1.55556 1.55556,-1.55556c0.86022,0 1.55555,0.69689 1.55555,1.55556c0,0.85866 -0.69533,1.55555 -1.55555,1.55555zM14.03111,7c3.85778,0.00778 6.97822,3.14222 6.96889,7c0,3.86556 -3.13444,7 -7,7c-3.86556,0 -7,-3.13444 -7,-7c0,-3.86556 3.13444,-7 7,-7zM14,18.27778c2.36289,0 4.27778,-1.91489 4.27778,-4.27778c0,-2.36289 -1.91489,-4.27778 -4.27778,-4.27778c-2.36289,0 -4.27778,1.91489 -4.27778,4.27778c0,2.36289 1.91489,4.27778 4.27778,4.27778z" fill="#003b5c" fill-opacity="1"></path></g><g><title>Instagram</title><g><title>Fill 1</title><path d="M20.22222,0c4.29645,0 7.77778,3.48289 7.77778,7.77778v12.44444c0,4.29645 -3.48133,7.77778 -7.77778,7.77778h-12.44444c-4.29489,0 -7.77778,-3.48133 -7.77778,-7.77778v-12.44444c0,-4.29489 3.48289,-7.77778 7.77778,-7.77778zM25.27778,7.77778c-0.00934,-2.78756 -2.26645,-5.04778 -5.05556,-5.05556h-12.44444c-2.78756,0.00778 -5.04778,2.268 -5.05556,5.05556v12.44444c0.00778,2.78911 2.268,5.04622 5.05556,5.05556h12.44444c2.78911,-0.00934 5.04622,-2.26645 5.05556,-5.05556zM21.38889,8.16667c-0.86023,0 -1.55556,-0.69689 -1.55556,-1.55555c0,-0.85867 0.69533,-1.55556 1.55556,-1.55556c0.86022,0 1.55555,0.69689 1.55555,1.55556c0,0.85866 -0.69533,1.55555 -1.55555,1.55555zM14.03111,7c3.85778,0.00778 6.97822,3.14222 6.96889,7c0,3.86556 -3.13444,7 -7,7c-3.86556,0 -7,-3.13444 -7,-7c0,-3.86556 3.13444,-7 7,-7zM14,18.27778c2.36289,0 4.27778,-1.91489 4.27778,-4.27778c0,-2.36289 -1.91489,-4.27778 -4.27778,-4.27778c-2.36289,0 -4.27778,1.91489 -4.27778,4.27778c0,2.36289 1.91489,4.27778 4.27778,4.27778z" fill="#003b5c" fill-opacity="1"></path></g></g></g></svg></a></li>'; ?>
                               </ul>
                        <?php }
                            if(!empty($footer_email)) echo '<div class="footer-email"><a href="mailto:'. $footer_email .'">'. $footer_email .'</a></div>';
                            if(!empty($footer_phone)) echo '<div class="footer-phone"><a href="tel:'. $footer_phone .'">'. $footer_phone .'</a></div>';
                        ?>
                        <address>
		                    <?php if(isset($google_maps_link)) :?>
                                <a href="<?php echo $google_maps_link; ?>" rel="nofollow" target="_blank"><?php echo $addr; ?></a>
		                    <?php else :?>
			                    <?php echo $addr; ?>
		                    <?php endif; ?>
                        </address>
                    </div>
                <?php endif; ?>
                <div class="copy">
                    Copyright &copy;<?php echo date('Y'); ?> Corporation Service Company. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>

    <div class="container-cover"></div>
</div>

<div id="form-popup" class="overlay">
    <div class="tb">
        <div class="td">
            <div class="modal">
                <div class="form">
                    <?php

                        $form = do_shortcode('[contact-form-7 id="5"]');
                        echo $form;

                    ?>
                    <div class="privacy">
                        Please see our <a href="https://www.cscglobal.com/service/csc/privacy/" target="_blank">privacy policy</a> for how we store and use your personal&nbsp;information.
                    </div>

                    <div class="thanks">
                        <h3>Thank You for<br> your interest.</h3>
                        <p>We’ve received your email and someone from<br> our team will be getting back to you soon.</p>
                        <a href="#" class="lnk-close">Close</a>
                    </div>
                </div>
                <a href="#" class="btn-close" rel="nofollow"></a>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo THEME_PATH; ?>/js/jquery-3.4.1.min.js"></script>
<script src="<?php echo THEME_PATH; ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo THEME_PATH; ?>/js/slick/slick.min.js"></script>
<script src="<?php echo THEME_PATH; ?>/js/instslider.js"></script>
<script src="<?php echo THEME_PATH; ?>/js/sumoselect/jquery.sumoselect.min.js"></script>
<script src="<?php echo THEME_PATH; ?>/js/functions.js?r=<?php echo time(); ?>"></script>

<?php wp_footer(); ?>
</body>
</html>