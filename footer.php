<!---- contact ----->
			<div id="contact" class="contact">
				<div class="conatiner">
					<div class="contact-head text-center">
							<h2>CONTÁCTAME</h2>
							<span> </span>
							<div class="social-media">
      <a href="https://www.facebook.com/root.humanista" target="_blank"><i class="fab fa-facebook-square"></i></a>
      <a href="https://twitter.com/GeekC0de" target="_blank"><i class="fab fa-twitter-square"></i></a>
      <?php 
         $mensaje = 'Hola, Lesner. Te contacto porque me interesa los servicios que ofreces.';
         $numero = '50577313300'
      ?>
      <a href="https://api.whatsapp.com/send?phone=<?=$numero?>&text=<?=$mensaje?>" target="_blank"><i class="fab fa-whatsapp-square"></i></a>
    </div>
					</div>
				</div>
				<!----Contact-form---->
			<!--	<div class="Contact-form">
					<div class="send-form text-center">
						<form action="contact.php" method="POST">
							<span class="text-box1">
								<label>TU NOMBRE</label>
								<input type="text" name ="nombre"value="Escribe tu nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Escribe tu nombre';}">
							</span>
							<span class="text-box2">
								<label>DIRECCIÓN DE EMAIL</label>
								<input type="email" name="email" value="Escribe tu Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Escribe tu Email';}">
							</span>
							<span class="text-box3">
								<label>MENSAJE</label>
								<textarea name="message">Escríbeme un Mensaje</textarea>
							</span>
							<div class="clearfix"> 
							<input type="submit" value="Enviar" />
						</form>
					</div>
				</div>-->
				<!----Contact-form---->
			</div>
			<!----//contact ----->
			<!----copy-right---->
			<div class="copy-right text-center">
				<div class="container">
					<p>Diseñado por Lesner Villega &copy; <?=date('Y')?></p>
					<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
					</script>
					<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				</div>
			</div>
			<!---//copy-right---->
	</body>
</html>