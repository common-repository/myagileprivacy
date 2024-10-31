<?php

	if( !defined( 'MAP_PLUGIN_NAME' ) )
	{
		exit('Not allowed.');
	}

?>

<div class="row mb-3">
	<div class="col-12">

		<div class="mb-3">

			<?php
				_e("From this interface, you can edit the texts of the cookie banner. To find out which texts can be modified, use the mouse and hover over the text: if it is editable, it will be highlighted in yellow. Click on the text to edit it.", 'MAP_txt');
			?>

			<br>

			<?php
				_e("Remember to save to apply the changes made.", 'MAP_txt');
			?>

		</div>

		<div class="alert alert-warning" role="alert">

			<?php
				_e("Warning: Modify the banner texts only under the supervision of your privacy consultant.", 'MAP_txt');
			?>

			<br>

			<?php
				_e("Altering the content without supervision could invalidate your website's compliance.", 'MAP_txt');
			?>

		</div>

	</div>
</div>

<span class="translate-middle-y forbiddenWarning badge rounded-pill bg-danger  <?php if( $the_options['pa'] == 1){echo 'd-none';} ?>">
	<small><?php _e('Premium Feature', 'MAP_txt'); ?></small>
</span>
<div class="row  <?php if( $the_options['pa'] != 1){echo 'forbiddenArea';} ?>">
	<div class="col-sm-2">
		<div class="nav flex-column nav-pills me-3" id="map-translations-tab" role="tablist"
			aria-orientation="vertical">

			<?php

				$lang_count = 0;

				foreach( $currentAndSupportedLanguages['supported_languages'] as $lang_code => $lang_data ):

					$active_class = ($lang_count === 0) ? ' active' : '';

					$label = $lang_data['label'];
			?>

					<button class="nav-link<?php echo esc_attr( $active_class ); ?>" id="map-pills-<?php echo esc_attr( $lang_code ); ?>-tab" data-bs-toggle="pill" data-bs-target="#map_translations-<?php echo esc_attr( $lang_code ); ?>" type="button" role="tab"><?php echo esc_html( $label ); ?></button>

			<?php
					$lang_count++;
				endforeach;



			?>

		</div>
	</div>

	<div class="col-sm-10">
		<div class="tab-content" id="v-pills-tabContent">

			<?php

				$lang_count = 0;
				foreach( $currentAndSupportedLanguages['supported_languages'] as $lang_code => $lang_data ):

					$active_class = ($lang_count === 0) ? ' show active' : '';
			?>

					<div class="tab-pane fade<?php echo esc_attr( $active_class ); ?> lang-panel" id="map_translations-<?php echo esc_attr( $lang_code ); ?>" role="tabpanel">

						<!-- bof hidden original input -->

						<input type="hidden" id="<?php echo esc_attr( $lang_code ); ?>_banner_title" name="translations[<?php echo esc_attr( $lang_code) ; ?>][banner_title]" value="<?php echo ( $the_translations[$lang_code]['banner_title'] ) ? esc_attr( $the_translations[$lang_code]['banner_title'] ) : 'My Agile Privacy' ; ?>">

						<input type="hidden" id="<?php echo esc_attr( $lang_code ); ?>_notify_message_v2" name="translations[<?php echo esc_attr( $lang_code ); ?>][notify_message_v2]"
							value="<?php echo esc_attr( $the_translations[$lang_code]['notify_message_v2'] ); ?>">

						<input type="hidden" id="<?php echo esc_attr( $lang_code ); ?>_accept" name="translations[<?php echo esc_attr( $lang_code ); ?>][accept]"
							value="<?php echo esc_attr( $the_translations[$lang_code]['accept'] ); ?>">

						<input type="hidden" id="<?php echo esc_attr( $lang_code ); ?>_refuse" name="translations[<?php echo esc_attr( $lang_code ); ?>][refuse]"
							value="<?php echo esc_attr( $the_translations[$lang_code]['refuse'] ); ?>">

						<input type="hidden" id="<?php echo esc_attr( $lang_code ); ?>_customize" name="translations[<?php echo esc_attr( $lang_code ); ?>][customize]"
							value="<?php echo esc_attr( $the_translations[$lang_code]['customize'] ); ?>">

						<input type="hidden" id="<?php echo esc_attr( $lang_code ); ?>_manage_consent" name="translations[<?php echo esc_attr( $lang_code ); ?>][manage_consent]"
							value="<?php echo esc_attr( $the_translations[$lang_code]['manage_consent'] ); ?>">

						<input type="hidden" id="<?php echo esc_attr( $lang_code ); ?>_this_website_uses_cookies" name="translations[<?php echo esc_attr( $lang_code ); ?>][this_website_uses_cookies]"
							value="<?php echo esc_attr( $the_translations[$lang_code]['this_website_uses_cookies'] ); ?>">

						<?php if( !empty( $mapx_items ) ): ?>
							<input type="hidden" id="<?php echo esc_attr( $lang_code ); ?>_in_addition_this_site_installs"
								name="translations[<?php echo esc_attr( $lang_code ); ?>][in_addition_this_site_installs]"
								value="<?php echo esc_attr( $the_translations[$lang_code]['in_addition_this_site_installs'] ); ?>">

							<input type="hidden" id="<?php echo esc_attr( $lang_code ); ?>_with_anonymous_data_transmission_via_proxy"
								name="translations[<?php echo esc_attr( $lang_code ); ?>][with_anonymous_data_transmission_via_proxy]"
								value="<?php echo esc_attr( $the_translations[$lang_code]['with_anonymous_data_transmission_via_proxy'] ); ?>">
						<?php endif; ?>

						<?php if( $show_lpd ): ?>
							<input type="hidden" id="<?php echo esc_attr( $lang_code ); ?>_lpd_compliance_text" name="translations[<?php echo esc_attr( $lang_code ); ?>][lpd_compliance_text]"
								value="<?php echo esc_attr( $the_translations[$lang_code]['lpd_compliance_text'] ); ?>">
						<?php endif; ?>

						<?php if( $iab_tcf_context ): ?>
							<input type="hidden" id="<?php echo esc_attr( $lang_code ); ?>_iab_bannertext_1" name="translations[<?php echo esc_attr( $lang_code ); ?>][iab_bannertext_1]"
								value="<?php echo esc_attr( $the_translations[$lang_code]['iab_bannertext_1'] ); ?>">

							<input type="hidden" id="<?php echo esc_attr( $lang_code ); ?>_iab_bannertext_2_a" name="translations[<?php echo esc_attr( $lang_code ); ?>][iab_bannertext_2_a]"
								value="<?php echo esc_attr( $the_translations[$lang_code]['iab_bannertext_2_a'] ); ?>">

							<input type="hidden" id="<?php echo esc_attr( $lang_code ); ?>_iab_bannertext_2_link" name="translations[<?php echo esc_attr( $lang_code ); ?>][iab_bannertext_2_link]"
								value="<?php echo esc_attr( $the_translations[$lang_code]['iab_bannertext_2_link'] ); ?>">

							<input type="hidden" id="<?php echo esc_attr( $lang_code ); ?>_iab_bannertext_2_b" name="translations[<?php echo esc_attr( $lang_code ); ?>][iab_bannertext_2_b]"
								value="<?php echo esc_attr( $the_translations[$lang_code]['iab_bannertext_2_b'] ); ?>">

							<input type="hidden" id="<?php echo esc_attr( $lang_code ); ?>_iab_bannertext_3" name="translations[<?php echo esc_attr( $lang_code ); ?>][iab_bannertext_3]"
								value="<?php echo esc_attr( $the_translations[$lang_code]['iab_bannertext_3'] ); ?>">

							<input type="hidden" id="<?php echo esc_attr( $lang_code ); ?>_iab_bannertext_4_a" name="translations[<?php echo esc_attr( $lang_code ); ?>][iab_bannertext_4_a]"
								value="<?php echo esc_attr( $the_translations[$lang_code]['iab_bannertext_4_a'] ); ?>">

							<input type="hidden" id="<?php echo esc_attr( $lang_code ); ?>_iab_bannertext_4_b" name="translations[<?php echo esc_attr( $lang_code ); ?>][iab_bannertext_4_b]"
								value="<?php echo esc_attr( $the_translations[$lang_code]['iab_bannertext_4_b'] ); ?>">

							<input type="hidden" id="<?php echo esc_attr( $lang_code ); ?>_iab_bannertext_5" name="translations[<?php echo esc_attr( $lang_code ); ?>][iab_bannertext_5]"
								value="<?php echo esc_attr( $the_translations[$lang_code]['iab_bannertext_6'] ); ?>">

							<input type="hidden" id="<?php echo esc_attr( $lang_code ); ?>_iab_bannertext_6" name="translations[<?php echo esc_attr( $lang_code ); ?>][iab_bannertext_6]"
								value="<?php echo esc_attr( $the_translations[$lang_code]['iab_bannertext_6'] ); ?>">

							<input type="hidden" id="<?php echo esc_attr( $lang_code ); ?>_cookies_and_thirdy_part_software"
								name="translations[<?php echo esc_attr( $lang_code ); ?>][cookies_and_thirdy_part_software]"
								value="<?php echo esc_attr( $the_translations[$lang_code]['cookies_and_thirdy_part_software'] ); ?>">

							<input type="hidden" class="form-control" id="<?php echo esc_attr( $lang_code ); ?>_advertising_preferences"
								name="translations[<?php echo esc_attr( $lang_code ); ?>][advertising_preferences]"
								value="<?php echo esc_attr( $the_translations[$lang_code]['advertising_preferences'] ); ?>">

						<?php endif; ?>

						<!-- eof hidden original input -->

						<p>
							<?php _e("Do you want to revert to the default content?", 'MAP_txt');?> <a role="button" class="reset_lang_values"><?php _e("Click here to reset the current language", 'MAP_txt');?></a>
						</p>


						<div class="text-preview">
							<div class="browser">


								<div class="preview-cookiebanner" <?php if( !$the_options['title_is_on'] )
									echo 'style="padding-top:20px;"' ?>>
									<?php if( $the_options['title_is_on'] ): ?>
										<div class="preview-title">
											<span
												data-edit="translations[<?php echo esc_attr( $lang_code ); ?>][banner_title]"><?php echo ($the_translations[$lang_code]['banner_title']) ? esc_attr( $the_translations[$lang_code]['banner_title'] ) : 'My Agile Privacy' ?></span>
										</div>
									<?php endif; ?>
									<div class="preview-content">
										<div class="preview-text-container">

											<span data-edit="translations[<?php echo esc_attr( $lang_code ); ?>][notify_message_v2]"
												data-input-type="textarea"><?php echo esc_html( $the_translations[$lang_code]['notify_message_v2'] ); ?></span>

											<?php

												if( !empty( $mapx_items ) ):

													$mapx_texts = array();

													foreach( $mapx_items as $mapx_item )
													{
														$mapx_texts[] = esc_html( $the_translations[$lang_code][$mapx_item] );
													}


													$mapx_items_string = implode( ', ', $mapx_texts );
											?>
												<div class="my-2">

													<span
														data-edit="translations[<?php echo esc_attr( $lang_code ); ?>][in_addition_this_site_installs]"><?php echo esc_attr( $the_translations[$lang_code]['in_addition_this_site_installs'] ); ?></span>

													<?php echo esc_html( $mapx_items_string ); ?>

													<span
														data-edit="translations[<?php echo esc_attr( $lang_code ); ?>][with_anonymous_data_transmission_via_proxy]"><?php echo esc_attr( $the_translations[$lang_code]['with_anonymous_data_transmission_via_proxy'] ); ?></span>

												</div>
											<?php endif; ?>

											<?php if( $show_lpd ): ?>
												<div class="my-2">
													<span data-edit="translations[<?php echo esc_attr( $lang_code ); ?>][lpd_compliance_text]"
														data-input-type="textarea"><?php echo esc_attr( $the_translations[$lang_code]['lpd_compliance_text'] ); ?></span>
												</div>
											<?php endif; ?>

											<?php if( $iab_tcf_context ): ?>
												<span
													data-edit="translations[<?php echo esc_attr( $lang_code ); ?>][iab_bannertext_1]"><?php echo esc_attr( $the_translations[$lang_code]['iab_bannertext_1'] ); ?></span><br>

												<span
													data-edit="translations[<?php echo esc_attr( $lang_code ); ?>][iab_bannertext_2_a]"><?php echo esc_attr( $the_translations[$lang_code]['iab_bannertext_2_a'] ); ?></span>

												<span class="text-wrap"
													data-edit="translations[<?php echo esc_attr( $lang_code ); ?>][iab_bannertext_2_link]"><?php echo esc_attr( $the_translations[$lang_code]['iab_bannertext_2_link'] ); ?></span>

												<span
													data-edit="translations[<?php echo esc_attr( $lang_code ); ?>][iab_bannertext_2_b]"><?php echo esc_attr( $the_translations[$lang_code]['iab_bannertext_2_b'] ); ?></span><br><br>

												<span
													data-edit="translations[<?php echo esc_attr( $lang_code ); ?>][iab_bannertext_3]"><?php echo esc_attr( $the_translations[$lang_code]['iab_bannertext_3'] ); ?></span>:<br>

												<span
													data-edit="translations[<?php echo esc_attr( $lang_code ); ?>][iab_bannertext_4_a]"><?php echo esc_attr( $the_translations[$lang_code]['iab_bannertext_4_a'] ); ?></span>

												<span
													data-edit="translations[<?php echo esc_attr( $lang_code ); ?>][iab_bannertext_4_b]"><?php echo esc_attr( $the_translations[$lang_code]['iab_bannertext_4_b'] ); ?></span>,

												<span
													data-edit="translations[<?php echo esc_attr( $lang_code ); ?>][iab_bannertext_5]"><?php echo esc_attr( $the_translations[$lang_code]['iab_bannertext_5'] ); ?></span>

												<span
													data-edit="translations[<?php echo esc_attr( $lang_code ); ?>][iab_bannertext_6]"><?php echo esc_attr( $the_translations[$lang_code]['iab_bannertext_6'] ); ?></span>
											<?php endif; ?>


										</div>
										<div class="preview-button-container">
											<div class="preview-button" id="preview-accept">
												<span data-edit="translations[<?php echo esc_attr( $lang_code ); ?>][accept]"
													style="background:<?php echo esc_attr( $the_options['button_accept_button_color'] ); ?>; color:<?php echo esc_html( $the_options['button_accept_link_color'] ); ?>;"><?php echo esc_html( $the_translations[$lang_code]['accept'] ); ?></span>
											</div>
											<div class="preview-button" id="preview-refuse">
												<span data-edit="translations[<?php echo esc_attr( $lang_code ); ?>][refuse]"
													style="background:<?php echo esc_attr( $the_options['button_reject_button_color'] ); ?>; color:<?php echo esc_attr( $the_options['button_reject_link_color'] ); ?>;"><?php echo esc_html( $the_translations[$lang_code]['refuse'] ); ?></span>
											</div>
											<div class="preview-button" id="preview-customize">
												<span data-edit="translations[<?php echo esc_attr( $lang_code ); ?>][customize]"
													style="background:<?php echo esc_attr( $the_options['button_customize_button_color'] ); ?>; color:<?php echo esc_attr( $the_options['button_customize_link_color'] ); ?>;"><?php echo esc_html( $the_translations[$lang_code]['customize'] ); ?></span>
											</div>
										</div>
									</div>
								</div> <!-- cookie banner -->

								<div class="my-agile-privacy-consent-again" style="border-radius: 15px; opacity: 1; display: block;">
									<div class="map_logo_container" style="background-color:#f14307;"></div>
									<span
										data-edit="translations[<?php echo esc_attr( $lang_code ); ?>][manage_consent]"><?php echo esc_html( $the_translations[$lang_code]['manage_consent'] ); ?></span>
								</div>

							</div> <!-- browser -->

							<!-- bof second layer -->
							<div class="browser with_overlay">

								<div class="second-layer">
									<div class="map-modal-body">

										<div class="map-container-fluid map-tab-container" style="height: 603px;">

											<div class="map-privacy-overview">
												<h4><?php echo esc_html( $the_translations[$lang_code]['privacy_settings'] ); ?></h4>
											</div>

											<p>
												<span
													data-edit="translations[<?php echo esc_attr( $lang_code ); ?>][this_website_uses_cookies]"><?php echo esc_attr( $the_translations[$lang_code]['this_website_uses_cookies'] ); ?></span>
											</p>
											<div class="map-cookielist-overflow-container" style="max-height: 307px;">

												<div class="map-consent-extrawrapper">
													<?php if( $iab_tcf_context ): ?>
														<div class="d-flex justify-content-around mb-4">

															<div class="second-layer-tab">
																<span
																	data-edit="translations[<?php echo esc_attr( $lang_code ); ?>][cookies_and_thirdy_part_software]"><?php echo esc_attr( $the_translations[$lang_code]['cookies_and_thirdy_part_software'] ); ?></span>
															</div>
															<div class="second-layer-tab">
																<span
																	data-edit="translations[<?php echo esc_attr( $lang_code ); ?>][advertising_preferences]"><?php echo esc_attr( $the_translations[$lang_code]['advertising_preferences'] ); ?></span>
															</div>
														</div>
													<?php endif; ?>

													<div class="cookie-placeholder-list">
														<div><?php _e('This is an example cookie', 'MAP_txt'); ?></div>
														<div><?php _e('This is an example cookie', 'MAP_txt'); ?></div>
														<div><?php _e('This is an example cookie', 'MAP_txt'); ?></div>
														<div><?php _e('This is an example cookie', 'MAP_txt'); ?></div>
													</div>

												</div>

												<div class="mt-3 d-flex flex-row-reverse"><img src="<?php echo esc_attr( plugin_dir_url(__DIR__) ); ?>../img/privacy-by-pro.png"></div>

											</div> <!-- overflow-cookielist-container -->

										</div> <!-- map-container-fluid -->

									</div> <!-- map-modal-body -->
								</div>

							</div> <!-- browser -->


						</div> <!-- text-preview -->


					</div> <!-- tab-pane -->

			<?php
					$lang_count++;
				endforeach;
			?>

		</div>

	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="MAP_editModal" tabindex="-1">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="editModalLabel"> <?php _e("Modify text", 'MAP_txt');?></h5>
		<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
	  </div>
	  <div class="modal-body">
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php _e("Cancel", 'MAP_txt');?></button>
		<button type="button" class="btn btn-primary" id="saveChanges"><?php _e("Modify text", 'MAP_txt');?></button>
	  </div>
	</div>
  </div>
</div>

