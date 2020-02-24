<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package travel
 */

?>

	</div><!-- #content -->
		<footer class="site-footer">
			<div class="form-container">
				<div class="form-text">
					<h2 class="form-header">Need some<br> travel inspiration?</h2>
					<p class="form-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacus velit, venenatis sed orci a, sollicitudin sagittis orci. Curabitur a nisi at velit consequat tempor vel in leo. Aliquam erat volutpat. Donec semper ante massa, et mollis est sollicitudin quis. Pellentesque faucibus lacus vitae.</p>
				</div>
				<div class="footer-form">
					<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1, 'title' => false, 'description' => false ) ); ?>
				</div>

			</div>
			<div class="site-info">
				<a class="logo" href="https://powerdigitalmarketing.com/" target="blank" aria-label="visit Power Digital's website">
					<svg class="pdm-logo" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 407.6 99.8" style="enable-background:new 0 0 407.6 99.8;" xml:space="preserve">
						<g>
							<g>
								<path class="st0" d="M29.5,16.8v8.4c0,10.3-5,15.9-15.1,15.9H9.6v24.1H-0.5V0.9h14.9C24.5,0.9,29.5,6.5,29.5,16.8z M9.6,10.1v21.8
									h4.8c3.2,0,5-1.5,5-6.1v-9.6c0-4.6-1.7-6.1-5-6.1C14.4,10.1,9.6,10.1,9.6,10.1z"/>
								<path class="st0" d="M119.7,30.9L116,65.1h-13.9L95,0.9h9.8l5.4,50.7l4.9-50.7h9.7l5,51l5.2-51h8.8l-7.2,64.3h-13.4L119.7,30.9z"
									/>
								<path class="st0" d="M157.3,28h13.9v9.2h-13.9V56h17.4v9.2h-27.5V0.9h27.5v9.2h-17.4V28z"/>
								<path class="st0" d="M200.3,65.2c-0.6-1.7-0.9-2.7-0.9-7.9V47.2c0-6-2-8.2-6.6-8.2h-3.5v26.2h-10.1V0.9h15.2
									c10.5,0,15,4.9,15,14.8v5c0,6.6-2.1,10.9-6.6,13c5,2.1,6.7,7,6.7,13.7v9.9c0,3.1,0.1,5.4,1.1,7.8L200.3,65.2L200.3,65.2z
									M189.2,10.1v19.7h3.9c3.8,0,6.1-1.7,6.1-6.8v-6.3c0-4.6-1.6-6.6-5.1-6.6H189.2z"/>
								<path class="st0" d="M214.2,0.9h16c10.1,0,15.1,5.6,15.1,15.9v32.5c0,10.3-5,15.9-15.1,15.9h-16V0.9z M224.3,10.1V56h5.7
									c3.2,0,5.1-1.7,5.1-6.2V16.3c0-4.6-1.9-6.2-5.1-6.2C230,10.1,224.3,10.1,224.3,10.1z"/>
								<path class="st0" d="M249.8,0.9h10.1v64.3h-10.1L249.8,0.9L249.8,0.9z"/>
								<path class="st0" d="M280.6,29.4h14.1v20.4c0,10.3-5.1,16.2-15.1,16.2c-9.9,0-15.1-5.9-15.1-16.2V16.3c0-10.3,5.1-16.2,15.1-16.2
									c9.9,0,15.1,5.9,15.1,16.2v6.2h-9.5v-6.9c0-4.6-2-6.3-5.2-6.3s-5.2,1.7-5.2,6.3v34.7c0,4.6,2,6.2,5.2,6.2s5.2-1.7,5.2-6.2V38.6
									h-4.6V29.4z"/>
								<path class="st0" d="M299.4,0.9h10.1v64.3h-10.1V0.9z"/>
								<path class="st0" d="M312.1,0.9h31.2v9.2h-10.6v55.1h-10.1V10.1H312V0.9H312.1z"/>
								<path class="st0" d="M378.6,65.2h-10.2l-1.7-11.7h-12.4l-1.7,11.7h-9.3l10.3-64.3h14.8L378.6,65.2z M355.5,44.8h9.7l-4.9-32.5
									L355.5,44.8z"/>
								<path class="st0" d="M381.4,0.9h10.1V56h16.6v9.2h-26.7V0.9z"/>
							</g>
							<g>
								<path class="st0" d="M67.4,99.2V77h3.2L76,93c0.2,0.5,0.3,1.1,0.6,1.9c0.2,0.8,0.4,1.7,0.6,2.7c0.4-1.6,0.7-2.7,0.8-3.4
									c0.2-0.6,0.3-1,0.3-1.2l5.4-16h3.2v22.2H85V82.5c0-0.3,0-0.8,0-1.6c0-0.8,0.1-1.7,0.1-2.7l-6.9,20.9H76l-6.9-21
									c0.1,1.1,0.1,2,0.1,2.7s0,1.2,0,1.6v16.7L67.4,99.2L67.4,99.2z"/>
								<path class="st0" d="M108.3,99.2h-2l7.1-22.2h2.2l7,22.2h-2.2l-1.8-5.9H110L108.3,99.2z M110.6,91.6h7.5l-3.7-12.5L110.6,91.6z"/>
								<path class="st0" d="M148.1,88.5H144v10.7h-2V77h4.4c2.8,0,4.7,0.4,5.6,1.2c0.9,0.8,1.4,2.3,1.4,4.4c0,1.5-0.3,2.7-0.8,3.5
									s-1.3,1.3-2.4,1.6c1.1,0.2,1.9,0.6,2.3,1.3c0.4,0.6,0.7,1.7,0.7,3.3v1.4c0,0.8,0,1.7,0.1,2.6s0.2,1.9,0.3,2.9h-2.2
									c-0.1-1.5-0.2-3.2-0.2-4.9c0-1.7,0-2.7-0.1-2.9c-0.1-1-0.4-1.8-0.9-2.2C149.8,88.7,149.1,88.5,148.1,88.5z M144,86.9h2.3
									c1.9,0,3.2-0.3,4-1s1.1-1.8,1.1-3.5c0-1.4-0.3-2.4-1-2.9c-0.6-0.5-1.9-0.8-3.7-0.8H144V86.9z"/>
								<path class="st0" d="M174.8,99.2V77h2v10l8.1-10h2.3l-8.4,10.3l8.4,11.8h-2.3l-8.1-11.3v11.3L174.8,99.2L174.8,99.2z"/>
								<path class="st0" d="M216.8,99.2h-10V77h10v1.7h-8v8.2h7.5v1.6h-7.5v8.8h8V99.2z"/>
								<path class="st0" d="M240.5,99.2V78.8h-5.4V77h12.7v1.7h-5.4v20.5H240.5z"/>
								<path class="st0" d="M267.1,99.2V77h2v22.2H267.1z"/>
								<path class="st0" d="M290.3,99.2V77h3.1l9.4,20.9c-0.1-0.8-0.2-1.6-0.3-2.4c-0.1-0.8-0.1-1.6-0.1-2.5V77h1.9v22.2h-3L292,78.5
									c0.1,0.6,0.2,1.3,0.2,2.1c0,0.7,0.1,1.5,0.1,2.4v16.3h-2V99.2z"/>
								<path class="st0" d="M336,89.1h-4.4v-1.6h6.4v11.1c-1.2,0.3-2.3,0.6-3.3,0.7c-1.1,0.2-2.1,0.2-3,0.2c-1.1,0-2-0.2-2.9-0.5
									c-0.8-0.4-1.5-0.9-2.1-1.5c-0.6-0.7-1-1.7-1.3-3c-0.2-1.3-0.4-3.5-0.4-6.5c0-2.9,0.1-5,0.4-6.2c0.3-1.3,0.7-2.3,1.3-3.1
									c0.6-0.7,1.2-1.1,2.1-1.5c0.8-0.3,1.8-0.5,3-0.5c2.1,0,3.7,0.5,4.7,1.4s1.5,2.3,1.5,4.2v0.3h-1.9c0-1.4-0.3-2.5-1-3.2
									s-1.7-1-3.2-1c-0.8,0-1.5,0.1-2.1,0.4s-1.1,0.7-1.5,1.2c-0.4,0.6-0.7,1.5-0.9,2.6c-0.2,1.1-0.3,3-0.3,5.5c0,2.6,0.1,4.4,0.3,5.5
									c0.2,1.1,0.5,2,0.9,2.6s0.9,1,1.5,1.3s1.3,0.4,2.2,0.4c0.5,0,1.1-0.1,1.8-0.2c0.6-0.1,1.3-0.3,2.1-0.5L336,89.1L336,89.1z"/>
							</g>
							<g>
								<rect x="59.1" y="0.9" class="power-button" width="9.7" height="28.6"/>
								<path class="power-button" d="M78.5,4.4v10.1c5.6,4.4,9.2,11.2,9.2,18.8c0,13.2-10.7,23.9-23.9,23.9S40.1,46.6,40.1,33.4
									c0-7.7,3.6-14.5,9.2-18.8V4.4c-10.6,5.4-17.9,16.3-17.9,29c0,17.9,14.6,32.5,32.5,32.5c18,0,32.5-14.6,32.5-32.5
									C96.4,20.7,89.1,9.8,78.5,4.4z"/>
							</g>
						</g>
					</svg>
				</a>
				<div class="copyright">© 2020 Power Digital Marketing. All rights reserved.</div>
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

