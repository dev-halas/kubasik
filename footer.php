<?php wp_footer(); ?>
	<footer class="footer">
		<div class="container-big">
			<div id="map"></div>
			<div class="footerInner">
				<div class="footerMenu">
					<span>Menu</span>
					<?php wp_nav_menu(['theme_location' => 'footer_nav']); ?>
				</div>
				<div class="footerAdress">
					<span>Adres</span>
					<div>
						Miłochowice 20A<br>
						56-300 Miłochowice<br>
						Polska
					</div>
				</div>
				<div class="footerContact">
					<div class="footerContact__cat">
						Handlowiec
					</div>
					<div class="footerContact__item">
						<div class="footerContact__itemImg">
							<svg xmlns="http://www.w3.org/2000/svg" width="46" height="51" viewBox="0 0 46 51" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M9.58061 13.2415C9.58061 20.5273 15.5364 26.483 22.8221 26.483C30.1078 26.483 36.0635 20.5273 36.0635 13.2415C36.0635 5.95575 30.1079 0 22.8221 0C15.5364 0 9.58061 5.95575 9.58061 13.2415ZM1.42747 34.6361C0.907061 35.3878 0.444543 36.1973 0.0975702 37.0647C-0.0758608 37.4115 -0.0180863 37.8164 0.270892 38.1634C0.733411 38.9729 1.25392 39.7246 1.8321 40.4763C2.6417 41.5749 3.56686 42.5579 4.49201 43.4831C5.30161 44.2926 6.22676 45.1022 7.15191 45.796C11.7199 49.2075 17.2131 51 22.8798 51C28.5465 51 34.0397 49.2076 38.6077 45.796C39.5329 45.0443 40.4581 44.2926 41.2676 43.4831C42.2506 42.5579 43.118 41.575 43.9275 40.4763C44.4479 39.7825 45.026 38.9729 45.4887 38.1634C45.6621 37.8164 45.7199 37.4117 45.5464 37.0647C45.1996 36.2552 44.737 35.3878 44.2166 34.6361C41.6145 30.7041 37.4513 28.102 32.8254 27.466C32.2473 27.3503 31.6112 27.5238 31.1486 27.8707C28.72 29.6633 25.8289 30.5884 22.822 30.5884C19.8151 30.5884 16.924 29.6633 14.4954 27.8707C14.0328 27.5238 13.3968 27.4082 12.8186 27.466C8.19272 28.102 4.08737 30.7041 1.42747 34.6361Z" fill="#242424"/>
							</svg>
						</div>
						<span>
							+48 735 922 094<br>
							kubasik.inox@gmail.com
						</span>
					</div>
				</div>
				<div class="footerContact">
					<div class="footerContact__cat">
						Sekretariat
					</div>
					<div class="footerContact__item">
						<div class="footerContact__itemImg">
							<svg xmlns="http://www.w3.org/2000/svg" width="46" height="51" viewBox="0 0 46 51" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M9.58061 13.2415C9.58061 20.5273 15.5364 26.483 22.8221 26.483C30.1078 26.483 36.0635 20.5273 36.0635 13.2415C36.0635 5.95575 30.1079 0 22.8221 0C15.5364 0 9.58061 5.95575 9.58061 13.2415ZM1.42747 34.6361C0.907061 35.3878 0.444543 36.1973 0.0975702 37.0647C-0.0758608 37.4115 -0.0180863 37.8164 0.270892 38.1634C0.733411 38.9729 1.25392 39.7246 1.8321 40.4763C2.6417 41.5749 3.56686 42.5579 4.49201 43.4831C5.30161 44.2926 6.22676 45.1022 7.15191 45.796C11.7199 49.2075 17.2131 51 22.8798 51C28.5465 51 34.0397 49.2076 38.6077 45.796C39.5329 45.0443 40.4581 44.2926 41.2676 43.4831C42.2506 42.5579 43.118 41.575 43.9275 40.4763C44.4479 39.7825 45.026 38.9729 45.4887 38.1634C45.6621 37.8164 45.7199 37.4117 45.5464 37.0647C45.1996 36.2552 44.737 35.3878 44.2166 34.6361C41.6145 30.7041 37.4513 28.102 32.8254 27.466C32.2473 27.3503 31.6112 27.5238 31.1486 27.8707C28.72 29.6633 25.8289 30.5884 22.822 30.5884C19.8151 30.5884 16.924 29.6633 14.4954 27.8707C14.0328 27.5238 13.3968 27.4082 12.8186 27.466C8.19272 28.102 4.08737 30.7041 1.42747 34.6361Z" fill="#242424"/>
							</svg>
						</div>
						<span>
							+48 735 922 094<br>
							kubasik.inox@gmail.com
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="footerCopy">
			<span>© 2023 kubasikinox.com</span>
			<span>Polityka prywatności oraz cookies</span>
			<span>Wykonanie: Sharing Design. Studio Graficzne</span>
		</div>
	</footer>
</body>

    
<!-- Javascript-->
<script src="<?php echo THEME_URL ?>public/bundle.js"></script>
<script src="<?php echo THEME_URL ?>_dev/js/map.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaPiQlYXG53c8H0c9UxK_zT2WZxyPghe0&callback=initMap"></script>