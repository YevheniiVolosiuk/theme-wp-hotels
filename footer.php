<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starter_Theme_WP
 */

declare( strict_types=1 );
?>

<footer class="global-footer">
	<div class="global-footer__container">
		<div class="global-footer__columns columns-footer">
			<div class="columns-footer__column columns-footer__column--flex">
				<div class="columns-footer__title">
					<h3><span>/</span> About us</h3>
				</div>
				<div class="columns-footer__text columns-footer__text--large-margin-bottom">
					<p>The five-star hotel in a beautiful European city with a modern restaurant, conference-hall, and
						art-bar.</p>
				</div>
				<div data-da='.global-footer__columns,768' class="columns-footer__copyright">
					<p><small>©2021 All rights reserved. BankHotel</small></p>
				</div>
			</div>
			<div class="columns-footer__column columns-footer__column--flex-auto">
				<div class="columns-footer__title">
					<h3><span>/</span> News</h3>
				</div>
				<div class="columns-footer__text columns-footer__text--small-margin-bottom">
					<p>Sign up to our newsletter not to miss exclusive offers and information about the upcoming events.
					</p>
				</div>
				<div class="columns-footer__contact-email email-contact">
					<form class="email-contact__form" method="POST" action="sendmail.php">
						<input autocomplete="off" type="text" name="form[email]" data-error="Error" placeholder="E-mail"
							   class="email-contact__input">
						<button class="email-contact__submit" type="submit">
							<svg viewBox="0 0 33 19" fill="none">
								<g opacity="0.48">
									<path
										d="M24 1C24 1 24.5833 3.47917 26.3333 5.60417C28.0833 7.72917 31 9.5 31 9.5C31 9.5 28.0833 11.2708 26.3333 13.3958C24.5833 15.5208 24 18 24 18"
										stroke="#313F38" stroke-width="2" />
									<rect x="0.25" y="9.25" width="29.5" height="0.5" fill="#313F38" stroke="#313F38"
										  stroke-width="0.5" />
								</g>
							</svg>
						</button>
					</form>
				</div>
			</div>
			<div class="columns-footer__column">
				<div class="columns-footer__title">
					<h3><span>/</span> Social</h3>
				</div>
				<div class="columns-footer__social-media">
					<ul>
						<li><a href="">Facebook</a></li>
						<li><a href="">Instagram</a></li>
						<li><a href="">Twitter</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php get_template_part('template-parts/components/back-to-top-button') ?>

</div>

<?php wp_footer(); ?>

</body>

</html>
