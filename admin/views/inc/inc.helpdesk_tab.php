<?php

if( !defined( 'MAP_PLUGIN_NAME' ) )
{
	exit('Not allowed.');
}

$locale = get_user_locale();

$installa_map_url = 'https://www.myagileprivacy.com/en/helpdesk/how-to-install-myagileprivacy-on-your-website/';
$cookie_shied_url = 'https://www.myagileprivacy.com/en/helpdesk/how-to-automatically-detect-and-block-cookies-with-cookie-shield/';
$moduli_norma_url = 'https://www.myagileprivacy.com/en/helpdesk/how-to-bring-contact-forms-into-gdpr-compliance/';

$cache_wprocket_url = 'https://www.myagileprivacy.com/en/helpdesk/how-to-configure-wp-rocket-with-my-agile-privacy/';
$cache_siteground_url = 'https://www.myagileprivacy.com/en/helpdesk/how-to-configure-siteground-optimizer-with-my-agile-privacy/';
$cache_optimizepress_url = 'https://www.myagileprivacy.com/en/helpdesk/how-to-configure-optimize-press-with-my-agile-privacy/';
$cache_w3totalcache_url = 'https://www.myagileprivacy.com/en/helpdesk/how-to-configure-w3-total-cache-with-my-agile-privacy/';

$sito_multilingue_url = 'https://www.myagileprivacy.com/en/helpdesk/how-to-configure-my-agile-privacy-for-multi-language-websites/';

$sito_area_faq_url = 'https://www.myagileprivacy.com/en/helpdesk/post-installation-frequently-asked-questions/';
$sito_area_privata_url = 'https://www.myagileprivacy.com/en/helpdesk/guide-to-using-the-private-area/';

//per lang helpdesk defs
if( $locale && $locale == 'it_IT' )
{
	$installa_map_url = 'https://www.myagileprivacy.com/helpdesk/come-installare-myagileprivacy-sul-tuo-sito-web/';
	$cookie_shied_url = 'https://www.myagileprivacy.com/helpdesk/come-rilevare-e-bloccare-i-cookie-automaticamente-con-il-cookie-shield/';
	$moduli_norma_url = 'https://www.myagileprivacy.com/helpdesk/come-mettere-a-norma-gdpr-i-moduli-di-contatto/';

	$cache_wprocket_url = 'https://www.myagileprivacy.com/helpdesk/come-configurare-wp-rocket-con-my-agile-privacy/';
	$cache_siteground_url = 'https://www.myagileprivacy.com/helpdesk/come-configurare-siteground-optimizer-con-my-agile-privacy/';
	$cache_optimizepress_url = 'https://www.myagileprivacy.com/helpdesk/come-configurare-optimize-press-con-my-agile-privacy/';
	$cache_w3totalcache_url = 'https://www.myagileprivacy.com/helpdesk/come-configurare-w3-total-cache-con-my-agile-privacy/';

	$sito_multilingue_url = 'https://www.myagileprivacy.com/helpdesk/come-configurare-my-agile-privacy-per-siti-web-multi-lingue/';

	$sito_area_faq_url = 'https://www.myagileprivacy.com/helpdesk/domande-frequenti-post-installazione/';
	$sito_area_privata_url = 'https://www.myagileprivacy.com/helpdesk/guida-allutilizzo-dellarea-privata/';
}
?>

<div class="row">
	<div class="col-12">
		<p><?php _e('Follow the guides found in this section to install and configure My Agile Privacy, and bring your website into compliance in a few simple steps.', 'MAP_txt'); ?></p>
	</div>
</div>

<div class="row">
	<div class="col-sm-8">
		<div class="card-group">
			<div class="card rounded-3 p-0 mx-1">
				<div class="card-header bg-transparent"><h5 class="pt-2"><?php _e('Start from here', 'MAP_txt'); ?></h5></div>

				<div class="card-body">
					<p>
						<?php _e('My Agile Privacy is currently the easiest-to-configure Cookie Banner on the market, promising genuine compliance and adherence to the regulations as required by the Data Protection Authority.', 'MAP_txt'); ?><br><br>
						<?php _e('We have created a truly simple configuration process: to bring your website into compliance, you just need to follow the three steps outlined below.', 'MAP_txt'); ?>

					</p>

					<p><a target="_blank" href="<?php echo esc_attr( $installa_map_url ); ?>" ><i class="fa-regular fa-link orange-icon"></i> <?php _e('Install and configure My Agile Privacy', 'MAP_txt'); ?></a></p>
					<p><a target="_blank" href="<?php echo esc_attr( $cookie_shied_url ); ?>" ><i class="fa-regular fa-link orange-icon"></i> <?php _e('Detect and automatically block cookies with Cookie Shield', 'MAP_txt'); ?></a></p>
					<p><a target="_blank" href="<?php echo esc_attr( $moduli_norma_url ); ?>" ><i class="fa-regular fa-link orange-icon"></i> <?php _e('Adapt the contact forms to GDPR', 'MAP_txt'); ?></a></p>
				</div>


			</div>

			<div class="card rounded-3 p-0 mx-1">
				<div class="card-header bg-transparent"><h5 class="pt-2"><?php _e('Do you use a cache plugin?', 'MAP_txt'); ?></h5></div>
				<div class="card-body">
					<p>
						<?php _e('My Agile Privacy works correctly with most cache plugins available on the market.', 'MAP_txt'); ?><br><br>
						<?php _e('Below are the configuration guides for the most commonly used ones. Make sure to follow the instructions to ensure compliance and performance.', 'MAP_txt'); ?>
					</p>
					<p><a target="_blank" href="<?php echo esc_attr( $cache_wprocket_url ); ?>" ><i class="fa-regular fa-link orange-icon"></i> <?php _e('How to configure WP Rocket with My Agile Privacy', 'MAP_txt'); ?></a></p>
					<p><a target="_blank" href="<?php echo esc_attr( $cache_siteground_url ); ?>" ><i class="fa-regular fa-link orange-icon"></i> <?php _e('How to configure Siteground Optimizer with My Agile Privacy', 'MAP_txt'); ?></a></p>
					<p><a target="_blank" href="<?php echo esc_attr( $cache_optimizepress_url ); ?>" ><i class="fa-regular fa-link orange-icon"></i> <?php _e('How to configure Optimize Press with My Agile Privacy', 'MAP_txt'); ?></a></p>
					<p><a target="_blank" href="<?php echo esc_attr( $cache_w3totalcache_url ); ?>" ><i class="fa-regular fa-link orange-icon"></i> <?php _e('How to configure W3 Total Cache with My Agile Privacy', 'MAP_txt'); ?></a></p>
				</div>
			</div>
		</div>
		
		<div class="card-group">

			<div class="card rounded-3 p-0 mx-1">
				<div class="card-header bg-transparent"><h5 class="pt-2"><?php _e('Do you have a multilingual website?', 'MAP_txt'); ?></h5></div>
				<div class="card-body">
					<p>
						<?php _e('My Agile Privacy integrates with WPML and PolyLang and already includes translations for all texts (cookie banner, policy, and individual cookies) in: Italian, English, French, German, and Spanish.', 'MAP_txt'); ?><br><br>
						<?php _e('Depending on the license you have purchased, you will have access to one or more languages.', 'MAP_txt'); ?><br>
						<?php _e('Follow these implementation guides for a correct display of textual content.', 'MAP_txt'); ?>
					</p>
					<p><a target="_blank" href="<?php echo esc_attr( $sito_multilingue_url ); ?>" ><i class="fa-regular fa-link orange-icon"></i> <?php _e('How to configure My Agile Privacy for multilingual websites', 'MAP_txt'); ?></a></p>
				</div>
	
			</div>
			<div>	
				<div class="card rounded-3 mx-1">
					<div class="row">
						<div class="col-2 align-self-center"><i class="fa-regular fa-circle-question fa-2xl orange-icon"></i></div>
						<div class="col-10">
							<h5><?php _e('Questions?', 'MAP_txt'); ?></h5>
							<p><?php _e('Visit our FAQ section to view answers to the most common post-installation questions.', 'MAP_txt'); ?></p>
							<a target="_blank" href="<?php echo esc_attr( $sito_area_faq_url ); ?>" class="btn btn-outline-orange"><?php _e('Go to the FAQ', 'MAP_txt'); ?></a>
						</div>
					</div>
				</div>
				<div class="card rounded-3 mx-1">
					<div class="row">
						<div class="col-2 align-self-center"><i class="fa-regular fa-user-unlock fa-2xl orange-icon"></i></div>
						<div class="col-10">
							<h5><?php _e('Subscription management and bulk operations', 'MAP_txt'); ?></h5>
							<p><?php _e("Discover how to manage your subscription and multiple installations through the dedicated private area.", 'MAP_txt'); ?></p>
							<a target="_blank" href="<?php echo esc_attr( $sito_area_privata_url ); ?>" class="btn btn-outline-orange"><?php _e("Go to the guide related to the private area.", 'MAP_txt'); ?></a>
						</div>
					</div>
				</div>	
			</div>

		</div>

	</div> <!-- col-sm-8 -->

	<div class="col-sm-4">
		<img src="<?php echo esc_attr( plugin_dir_url( __DIR__ ) ); ?>../img/fox-helpdesk.png" class="img-fluid" alt="">

		<?php
			$admin_lang = get_locale();
			$helpdesk_href = ($admin_lang == 'it_IT') ? 'https://www.myagileprivacy.com/helpdesk/' : 'https://www.myagileprivacy.com/en/helpdesk/';
			$contact_href = ($admin_lang == 'it_IT') ? 'https://www.myagileprivacy.com/contattaci/' : 'https://www.myagileprivacy.com/en/contact-us/';
		?>

		<div class="text-center mt-4">
			<strong><?php _e('Need more help?', 'MAP_txt'); ?></strong><br>
			<a href="<?php echo $helpdesk_href; ?>" class="link-secondary"><?php _e('Go to the Helpdesk on the website', 'MAP_txt'); ?></a> <?php _e('or', 'MAP_txt'); ?> <a href="<?php echo $contact_href; ?>" class="link-secondary"><?php _e('Contact us', 'MAP_txt'); ?></a>
		</div>
	</div> <!-- col-sm-4 -->

</div>