<header>
	<div class="logo-place"><a href="index.php"><img src="assets/logo.png"></a></div>
	<div class="search-place">
		<input type="text" id="idbusqueda" placeholder="Encuenta lo que necesitas..." value="<?php if(isset($_GET['text'])){echo $_GET['text'];}else{echo '';} ?>">
		<button class="btn-main btn-search" onclick="search_producto()"><i class="fa fa-search" aria-hidden="true"></i></button>
	</div>
	<div class="options-place">
		<?php
		if (isset($_SESSION['codusu'])) {
			echo
			'<div class="item-option"><i class="fa fa-user-circle-o" aria-hidden="true"></i><p>'.$_SESSION['nomusu'].'</p></div>';
		}else{
		?>
		<div class="item-option" title="Registrate">
			<a href="login.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
		</div>
		<div class="item-option" title="Ingresar">
			<a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
		</div>
		<?php
		}
		?>
		<div class="item-option" title="Mis compras">
			<a href="carrito.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
		</div>
	</div>
</header>