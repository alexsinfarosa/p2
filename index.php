<?php include 'incs/header.php'; ?>


	<!-- SEARCH FORM -->
	<div class="container-small">
		<form action="#" method="post" class="col-1">	
			<input type="text" name="search" placeholder="Search">
		</form>
	</div>

	<!-- ITEMS COLLECTION -->
	<div class="container text-center">
		<div class="col-1">
			<svg width="150" height="150" class="svg-color1"></svg>
			<svg width="150" height="150" class="svg-color2"></svg>
			<svg width="150" height="150" class="svg-color3"></svg>
			<svg width="150" height="150" class="svg-color4"></svg>
			<svg width="150" height="150" class="svg-color5"></svg>				
		</div>
	</div>

	<!-- ADD ENTRY FORM -->
	<div class="container top-margin">
	<h3 class="col-1">Search for a package</h3>
		<form action="#" method="post">
			<div class="col-5">
				<input type="text" name="item" placeholder="Package Name">
			</div>
			<div class="col-5">
				<input type="text" name="by" placeholder="By">
			</div>
			<div class="col-5">
				<input type="number" name="version" placeholder="Version">
			</div>
			<div class="col-5">
				<input type="text" name="label" placeholder="Labels">
			</div>
			<div class="col-5">
				<input class="btn-primary" type="button" name="submit" value="SEND">
			</div>
		</form>
	</div>


<?php include 'incs/footer.php'; ?>
