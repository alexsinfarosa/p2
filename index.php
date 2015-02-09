<?php include 'incs/header.php'; ?>


	<!-- SEARCH FORM -->
	<div class="container-small">
		<form action="#" method="post" class="col-1">	
			<input type="text" name="search" placeholder="Search">
		</form>
	</div>

	<!-- ITEMS COLLECTION -->
	<div class="container text-center">
		<div class="col-1 top-margin">
			<svg width="150" height="150" class="svg-color1">
				<text x="75" y="75" fill="$color-light-text" text-anchor="middle">Emmet</text>
			</svg>
			<svg width="150" height="150" class="svg-color2">
				<text x="75" y="75" fill="$color-text" text-anchor="middle">SublimeLinter</text>
			</svg>
			<svg width="150" height="150" class="svg-color3">
				<text x="75" y="75" fill="$color-text" text-anchor="middle">Git</text>
			</svg>
			<svg width="150" height="150" class="svg-color4">
				<text x="75" y="75" fill="$color-text" text-anchor="middle">DockBlockr</text>
			</svg>			
			<svg width="150" height="150" class="svg-color5">
				<text x="75" y="75" fill="$color-text" text-anchor="middle">ColorPicker</text>
			</svg>				
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
