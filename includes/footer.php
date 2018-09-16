<!-- FOOTER -->
<section class="container-fluid">
	<footer class="col-xl-12">
		
		<p class="text-custom-white col-sm-12 col-xl-10">© Copyright 2018 - DevCannes.com</p>
		<?php

		if (isset($_SESSION['user']) && $_SESSION['user']['RANK'] == 3){
			        
       
			?>
			<a href="admin/index.php" class="nav-link text-custom-white col-sm-12 col-xl-2">Administration&nbsp;<span class="fas fa-sign-in-alt"></span></a>
		<?php } ?> 
		
	</footer>
</section>

<!-- jQuery + popper + bootstrapJs call -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<!-- Leaflet script -->
<script src="./js/vendor.js"></script>
<script src="./js/app.js"></script>
<!-- custom script -->
<script src="./js/loginToggle.js"></script>
<script src="./js/registerFormCheck.js"></script>
</body>	
</html>