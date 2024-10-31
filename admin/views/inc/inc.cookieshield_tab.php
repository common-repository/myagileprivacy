<?php

	if( !defined( 'MAP_PLUGIN_NAME' ) )
	{
		exit('Not allowed.');
	}

	$first_class = '';
	$second_class = 'd-none';

	if( isset( $the_options ) &&
		isset( $the_options['pa'] ) &&
		$the_options['pa'] == 1
	)
	{
		$first_class = 'd-none';
		$second_class = '';
	}

?>

<div class="row">

	<div class="col-sm-8 <?php echo esc_attr( $first_class );?>">


		<span class="translate-middle-y forbiddenWarning badge rounded-pill bg-danger  <?php if( $the_options['pa'] == 1){echo 'd-none';} ?>">
			<small><?php _e('Premium Feature', 'MAP_txt'); ?></small>
		</span>

		<div class="consistent-box">
			<h4 class="mb-4">
				<i class="fa-regular fa-shield"></i>
				<?php _e('Cookie Shield', 'MAP_txt'); ?>
			</h4>

			<div class="row mb-1">
				<div class="col-sm-12">
					<p>
						<?php _e('This feature allows you to automatically detect cookies and third-party software on your website, enabling you to be compliant with the requirement of prior consent.', 'MAP_txt'); ?><br>
						<?php _e('Without this feature, <b>you might not be compliant with the GDPR regulations.</b> ', 'MAP_txt'); ?>
					</p>
				</div>
			</div>

		</div>
	</div>


	<div class="col-sm-8 <?php echo esc_attr( $second_class );?>">

		<div class="consistent-box">
			<h4 class="mb-4">
				<i class="fa-regular fa-shield"></i>
				<?php _e('Cookie Shield', 'MAP_txt'); ?>
			</h4>

			<div class="row mb-5">
				<div class="col-sm-12">
					<?php _e('This advanced feature is essential for the automatic detection and blocking of the most common third-party cookies and software.', 'MAP_txt'); ?><br>
					<br>
					<?php _e('By enabling Cookie Shield in "Learning" mode and starting to navigate your site, the tool will automatically detect the cookies and third-party software present.', 'MAP_txt'); ?><br>
					<br>
					<?php _e('Once you have finished browsing the main pages of your site, remember to set the Cookie Shield to "Live" mode.', 'MAP_txt'); ?><br>
					<br>
					<?php _e('Important: Cookie Shield may not function properly when used in conjunction with minification or caching plugins. It is recommended to temporarily disable them in your system configuration.', 'MAP_txt'); ?><br>
					<br>
					<?php _e("Please note: The Shield is regularly updated to detect as many cookies and third-party software as possible. However, it may not identify all the content that must be detected and blocked according to the regulations in your country. If you have any questions, please don't hesitate to contact us at info@myagileprivacy.com.", 'MAP_txt'); ?>

				</div>
			</div>

			<!-- scan mode select -->
			<div class="row mb-4">
				<label for="scan_mode_field" class="col-sm-5 col-form-label">
					<?php _e('Scanner / Blocker Mode', 'MAP_txt'); ?>
				</label>

				<div class="col-sm-7">

					<select id="scan_mode_field" name="scan_mode_field" class="hideShowInput form-control" style="max-width:100%;" data-hide-show-ref="map_scan_mode">
						<?php

						$valid_options = array(
							'turned_off'				=>	array(  'label' => __('Scanner / Blocker OFF', 'MAP_txt'),
																	'selected' => false ),
							'learning_mode'				=>	array(  'label' => __('Learning Mode', 'MAP_txt'),
																	'selected' => false ),

							'config_finished'			=>	array(  'label' => __('Live Mode', 'MAP_txt'),
																	'selected' => false ),
						);

						$selected_value = $the_options['scan_mode'];

						if( isset( $valid_options[ $selected_value ] ) )
						{
							$valid_options[ $selected_value ]['selected'] = true;
						}

						foreach( $valid_options as $key => $data )
						{
							if( $data['selected'] )
							{
								?>
								<option value="<?php echo esc_attr($key)?>" selected><?php echo esc_attr($data['label'])?></option>
								<?php
							}
							else
							{
								?>
								<option value="<?php echo esc_attr($key)?>"><?php echo esc_attr($data['label'])?></option>
								<?php
							}
						}

						?>
					</select>

				</div> <!-- /.col-sm-6 -->
			</div> <!-- row -->

			<div class="map_scan_mode displayNone" data-value="learning_mode config_finished">

				<!-- compatibility mode checkbox -->
				<div class="row mb-4">
					<label for="scanner_compatibility_mode_field" class="col-sm-5 col-form-label">
						<?php _e('Enable compatibility mode', 'MAP_txt'); ?>
					</label>
					<div class="col-sm-7">
						<div class="styled_radio d-inline-flex">
							<div class="round d-flex me-4">
								<input type="hidden" name="scanner_compatibility_mode_field" value="false" id="scanner_compatibility_mode_field_no">

								<input class="hideShowInput" data-hide-show-ref="scanner_compatibility_mode" name="scanner_compatibility_mode_field" type="checkbox" value="true" id="scanner_compatibility_mode_field" <?php checked($the_options['scanner_compatibility_mode'], true); ?>>

								<label for="scanner_compatibility_mode_field" class="me-2 label-checkbox"></label>

								<label for="scanner_compatibility_mode_field">
									<?php _e('Enable compatibility mode', 'MAP_txt'); ?>
								</label>
							</div>
						</div>

						<div class="form-text">
							<?php echo esc_html__('Check this if you see page loading error or no cookies detected', 'MAP_txt'); ?>.
						</div>

					</div> <!-- /.col-sm-6 -->
				</div> <!-- row -->

				<!-- hook type select -->
				<div class="row mb-4 scanner_compatibility_mode displayNone">
					<label for="scanner_hook_type_field" class="col-sm-5 col-form-label">
						<?php _e('Scanner Hook Type', 'MAP_txt'); ?>
					</label>
					<div class="col-sm-7">
						<select id="scanner_hook_type_field" name="scanner_hook_type_field" class="form-control" style="max-width:100%;">
							<?php
							$valid_options = array(
								'init-shutdown'				=>	array(  'label' => __('Init / Shutdown', 'MAP_txt'),
																		'selected' => false ),
								'template_redirect-shutdown'				=>	array(  'label' => __('Template Redirect / Shutdown', 'MAP_txt'),
																		'selected' => false ),
							);
							$selected_value = $the_options['scanner_hook_type'];
							if( isset( $valid_options[ $selected_value ] ) )
							{
								$valid_options[ $selected_value ]['selected'] = true;
							}
							foreach( $valid_options as $key => $data )
							{
								if( $data['selected'] )
								{
									?>
									<option value="<?php echo esc_attr($key)?>" selected><?php echo esc_attr($data['label'])?></option>
									<?php
								}
								else
								{
									?>
									<option value="<?php echo esc_attr($key)?>"><?php echo esc_attr($data['label'])?></option>
									<?php
								}
							}
							?>
						</select>

						<div class="form-text">
							<?php _e('The type of hook is the technology used to "hook" and insert the functions of My Agile Privacy for the preventive blocking. Change this setting only if requested by support', 'MAP_txt'); ?>.
						</div>


					</div> <!-- /.col-sm-6 -->
				</div> <!-- row -->

				<!-- start hook priority -->
				<div class="row mb-4 scanner_compatibility_mode displayNone">
					<label for="scanner_start_hook_prio_field" class="col-sm-5 col-form-label">
						<?php _e('Scanner Start Priority', 'MAP_txt'); ?>
					</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="scanner_start_hook_prio_field" name="scanner_start_hook_prio_field" value="<?php echo esc_attr(stripslashes($the_options['scanner_start_hook_prio'])) ?>" />

						<div class="form-text">
							<?php echo esc_html__('Change this only if asked by customer support. (Default value: -10000).', 'MAP_txt'); ?>
						</div>
					</div> <!-- /.col-sm-6 -->
				</div> <!-- row -->

				<!-- end hook priority -->
				<div class="row mb-4 scanner_compatibility_mode displayNone">
					<label for="scanner_end_hook_prio_field" class="col-sm-5 col-form-label">
						<?php _e('Scanner End Priority', 'MAP_txt'); ?>
					</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="scanner_end_hook_prio_field" name="scanner_end_hook_prio_field" value="<?php echo esc_attr(stripslashes($the_options['scanner_end_hook_prio'])) ?>" />

						<div class="form-text">
							<?php echo esc_html__('Change this only if asked by customer support. (Default value: -10000).', 'MAP_txt'); ?>
						</div>
					</div> <!-- /.col-sm-6 -->
				</div> <!-- row -->


				<!-- forced_legacy_mode checkbox -->
				<div class="row mb-4">
					<label for="forced_legacy_mode_field" class="col-sm-5 col-form-label">
						<?php _e('Legacy mode', 'MAP_txt'); ?>
					</label>
					<div class="col-sm-7">
						<div class="styled_radio d-inline-flex">
							<div class="round d-flex me-4">
								<input type="hidden" name="forced_legacy_mode_field" value="false" id="forced_legacy_mode_field_no">

								<input name="forced_legacy_mode_field" type="checkbox" value="true" id="forced_legacy_mode_field" <?php checked($the_options['forced_legacy_mode'], true); ?>>

								<label for="forced_legacy_mode_field" class="me-2 label-checkbox"></label>

								<label for="forced_legacy_mode_field">
									<?php _e('I still have issues, enable "legacy mode"', 'MAP_txt'); ?>
								</label>
							</div>
						</div>

						<div class="form-text">
							<?php _e('In some cases, specific or older themes may require the activation of this setting. Enable this option if you continue to experience a failure in the preventive blocking of cookies', 'MAP_txt'); ?>.
						</div>
					</div> <!-- /.col-sm-6 -->
				</div> <!-- row -->


				<!-- video advanced privacy checkbox -->
				<div class="row mb-4">
					<label for="video_advanced_privacy_field" class="col-sm-5 col-form-label">
						<?php _e('Video advanced privacy', 'MAP_txt'); ?>
					</label>
					<div class="col-sm-7">
						<div class="styled_radio d-inline-flex">
							<div class="round d-flex me-4">
								<input type="hidden" name="video_advanced_privacy_field" value="false" id="video_advanced_privacy_field_no">

								<input name="video_advanced_privacy_field" type="checkbox" value="true" id="video_advanced_privacy_field" <?php checked($the_options['video_advanced_privacy'], true); ?>>

								<label for="video_advanced_privacy_field" class="me-2 label-checkbox"></label>

								<label for="video_advanced_privacy_field">
									<?php _e('Video advanced privacy', 'MAP_txt'); ?>
								</label>
							</div>
						</div>
						<div class="form-text">
							<?php echo esc_html__('Enabling this setting, YouTube and Vimeo videos will be made GDPR compliant by modifying the embedding URLs', 'MAP_txt'); ?>.
						</div>
					</div> <!-- /.col-sm-6 -->
				</div> <!-- row -->

				<!-- youtube enforce privacy checkbox -->
				<div class="row mb-4">
					<label for="enforce_youtube_privacy_field" class="col-sm-5 col-form-label">
						<?php _e('Enforce Youtube Privacy', 'MAP_txt'); ?>
					</label>
					<div class="col-sm-7">
						<div class="styled_radio d-inline-flex">
							<div class="round d-flex me-4">
								<input type="hidden" name="enforce_youtube_privacy_field" value="false" id="enforce_youtube_privacy_field_no">

								<input name="enforce_youtube_privacy_field" type="checkbox" value="true" id="enforce_youtube_privacy_field" <?php checked($the_options['enforce_youtube_privacy'], true); ?>>

								<label for="enforce_youtube_privacy_field" class="me-2 label-checkbox"></label>

								<label for="enforce_youtube_privacy_field">
									<?php _e('Enforce Youtube Privacy', 'MAP_txt'); ?>
								</label>
							</div>
						</div>
						<div class="form-text">
							<?php echo esc_html__('By enabling the Cookie Block technology for enhanced YouTube privacy, you will further reduce the number of cookies used by YouTube. However, please note that in some cases, videos may not be displayed correctly', 'MAP_txt'); ?>.
						</div>
					</div> <!-- /.col-sm-6 -->
				</div> <!-- row -->

				<!-- block google maps checkbox -->
				<div class="row mb-4">
					<label for="maps_block_field" class="col-sm-5 col-form-label">
						<?php _e('Do block Maps widget', 'MAP_txt'); ?>
					</label>
					<div class="col-sm-7">
						<div class="styled_radio d-inline-flex">
							<div class="round d-flex me-4">
								<input type="hidden" name="maps_block_field" value="false" id="maps_block_field_no">

								<input name="maps_block_field" type="checkbox" value="true" id="maps_block_field" <?php checked($the_options['maps_block'], true); ?>>

								<label for="maps_block_field" class="me-2 label-checkbox"></label>


								<label for="maps_block_field">
									<?php _e('Do block Maps widget', 'MAP_txt'); ?>
								</label>
							</div>
						</div>
						<div class="form-text">
							<?php echo esc_html__('Enable Maps block', 'MAP_txt'); ?>.
						</div>
					</div> <!-- /.col-sm-6 -->
				</div> <!-- row -->

				<!-- captcha block checkbox -->
				<div class="row mb-4">
					<label for="captcha_block_field" class="col-sm-5 col-form-label">
						<?php _e('Do block Captcha', 'MAP_txt'); ?>
					</label>
					<div class="col-sm-7">
						<div class="styled_radio d-inline-flex">
							<div class="round d-flex me-4">
								<input type="hidden" name="captcha_block_field" value="false" id="captcha_block_field_no">

								<input name="captcha_block_field" type="checkbox" value="true" id="captcha_block_field" <?php checked($the_options['captcha_block'], true); ?>>

								<label for="captcha_block_field" class="me-2 label-checkbox"></label>

								<label for="captcha_block_field">
									<?php _e('Do block Captcha', 'MAP_txt'); ?>
								</label>
							</div>
						</div>
						<div class="form-text">
							<?php echo esc_html__('Enable Captcha block', 'MAP_txt'); ?>.
						</div>
					</div> <!-- /.col-sm-6 -->
				</div> <!-- row -->
			</div> <!-- /.map_scan_mode -->


		</div> <!-- consistent-box -->

		<div class="consistent-box map_scan_mode displayNone" data-value="learning_mode config_finished">
			<h4 class="mb-4">
				<i class="fa-regular fa-circle-exclamation"></i>
				<?php _e('Notification bar', 'MAP_txt'); ?>
			</h4>

			<!-- content blocked notification checkbox -->
			<div class="row mb-4">
				<label for="blocked_content_notify_field" class="col-sm-5 col-form-label">
					<?php _e('Enable Blocked Content Notification Bar', 'MAP_txt'); ?>
				</label>
				<div class="col-sm-7">
					<div class="styled_radio d-inline-flex">
						<div class="round d-flex me-4">
							<input type="hidden" name="blocked_content_notify_field" value="false" id="blocked_content_notify_field_no">

							<input class="hideShowInput" data-hide-show-ref="blocked_content_reladed_options" name="blocked_content_notify_field" type="checkbox" value="true" id="blocked_content_notify_field" <?php checked($the_options['blocked_content_notify'], true); ?>>

							<label for="blocked_content_notify_field" class="me-2 label-checkbox"></label>

							<label for="blocked_content_notify_field">
								<?php echo esc_html__('Enable Notification Bar', 'MAP_txt'); ?>
							</label>
						</div>
					</div>
				</div> <!-- /.col-sm-6 -->
			</div> <!-- row -->

			<!-- notification bar on "no choice" checkbox -->
			<div class="row mb-4 blocked_content_reladed_options displayNone">
				<label for="show_ntf_bar_on_not_yet_consent_choice_field" class="col-sm-5 col-form-label">
					<?php _e('Blocked Content Notification Bar', 'MAP_txt'); ?>
				</label>
				<div class="col-sm-7">
					<div class="styled_radio d-inline-flex">
						<div class="round d-flex me-4">
							<input type="hidden" name="show_ntf_bar_on_not_yet_consent_choice_field" value="false" id="show_ntf_bar_on_not_yet_consent_choice_field_no">

							<input name="show_ntf_bar_on_not_yet_consent_choice_field" type="checkbox" value="true" id="show_ntf_bar_on_not_yet_consent_choice_field" <?php checked($the_options['show_ntf_bar_on_not_yet_consent_choice'], true); ?>>

							<label for="show_ntf_bar_on_not_yet_consent_choice_field" class="me-2 label-checkbox"></label>

							<label for="show_ntf_bar_on_not_yet_consent_choice_field">
								<?php echo esc_html__('Show the bar even if there is no consent choice', 'MAP_txt'); ?>
							</label>
						</div>
					</div>

					<div class="form-text">
						<?php echo esc_html__('Show the Blocked Content Notification Bar even if the user has not yet expressed a consent choice', 'MAP_txt'); ?>
					</div>

				</div> <!-- /.col-sm-6 -->
			</div> <!-- row -->

			<!-- autoclose notification bar checkbox -->
			<div class="row mb-4 blocked_content_reladed_options displayNone">
				<label for="blocked_content_notify_auto_shutdown_field" class="col-sm-5 col-form-label">
					<?php _e('Auto Close Blocked Content Notification Bar', 'MAP_txt'); ?>
				</label>
				<div class="col-sm-7">
					<div class="styled_radio d-inline-flex">
						<div class="round d-flex me-4">
							<input type="hidden" name="blocked_content_notify_auto_shutdown_field" value="false" id="blocked_content_notify_auto_shutdown_field_no">

							<input name="blocked_content_notify_auto_shutdown_field" type="checkbox" value="true" id="blocked_content_notify_auto_shutdown_field" <?php checked($the_options['blocked_content_notify_auto_shutdown'], true); ?>>

							<label for="blocked_content_notify_auto_shutdown_field" class="me-2 label-checkbox"></label>


							<label for="blocked_content_notify_auto_shutdown_field">
								<?php _e('Auto Close Blocked Content Notification Bar', 'MAP_txt'); ?>
							</label>
						</div>
					</div>

					<div class="form-text">
						<?php echo esc_html__('This will close automatically the blocked content notification bar after some second', 'MAP_txt'); ?>.
					</div>

				</div> <!-- /.col-sm-6 -->
			</div> <!-- row -->

			<!-- autoclose notification timinig -->
			<div class="row mb-4 blocked_content_reladed_options displayNone">
				<label for="blocked_content_notify_auto_shutdown_time_field" class="col-sm-5 col-form-label">
					<?php _e('Auto Close Timeout', 'MAP_txt'); ?>
				</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="blocked_content_notify_auto_shutdown_time_field" name="blocked_content_notify_auto_shutdown_time_field" value="<?php echo esc_attr(stripslashes($the_options['blocked_content_notify_auto_shutdown_time'])) ?>" />

					<div class="form-text">
						<?php echo esc_html__('The value is in milliseconds. (Default value: 3000).', 'MAP_txt'); ?>
					</div>

				</div> <!-- /.col-sm-6 -->
			</div> <!-- row -->


		</div> <!-- consistent-box -->

		<div class="consistent-box map_scan_mode displayNone" data-value="learning_mode config_finished">
			<h4 class="mb-4">
				<i class="fa-regular fa-square-t"></i>
				<?php _e('Blocked content widget', 'MAP_txt'); ?>
			</h4>

			<!-- blocked content widget text color -->
			<div class="row mb-4">
				<label for="map_inline_notify_color_field" class="col-sm-5 col-form-label">
					<?php _e('Blocked Content Widget text colour', 'MAP_txt'); ?>
				</label>
				<div class="col-sm-7">
					<?php
						echo wp_kses( '<input type="color" id="map_inline_notify_color_field" name="map_inline_notify_color_field" value="' . esc_attr($the_options['map_inline_notify_color']) . '">', MyAgilePrivacy::allowed_html_tags() );
					?>

					<div class="form-text">
						<?php echo esc_html__('Select the text color of the blocked content inline widget', 'MAP_txt'); ?>.
					</div>
				</div> <!-- /.col-sm-6 -->
			</div> <!-- row -->

			<!-- blocked content widget background color -->
			<div class="row mb-4">
				<label for="map_inline_notify_background_field" class="col-sm-5 col-form-label">
					<?php _e('Blocked Content Widget background colour', 'MAP_txt'); ?>
				</label>
				<div class="col-sm-7">
					<?php
						echo wp_kses( '<input type="color" id="map_inline_notify_background_field" name="map_inline_notify_background_field" value="' . esc_attr($the_options['map_inline_notify_background']) . '">', MyAgilePrivacy::allowed_html_tags() );
					?>

					<div class="form-text">
						<?php echo esc_html__('Select the background color of the blocked content inline widget', 'MAP_txt'); ?>.
					</div>
				</div> <!-- /.col-sm-6 -->
			</div> <!-- row -->

		</div> <!-- consistent-box -->
	</div> <!-- /.col-sm-8 -->

	<div class="col-sm-4">
		<?php
			$tab = 'scanner';
			include 'inc.admin_sidebar.php';
		?>
	</div>
</div> <!-- /.row -->