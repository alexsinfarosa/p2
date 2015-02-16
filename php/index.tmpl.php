<?php include 'incs/header.php'; ?>


	<!-- SEARCH FORM -->
	<div class="container">
		<form action="" method="get">
			<div class="col-6">
				<select name="status">
					<option value="status">Status</option>
					<option value="new">New</option>
					<option value="trending">Trending</option>
					<option value="popular">Popular</option>
				</select>		
			</div>
			<div class="col-2 text-center">
				<input type="text" name="search" placeholder="Search...">
			</div>
			<div class="col-6">
				<input type="submit" name="search" value="Search">	
			</div>
			<div class="col-6">
				<select name="rating">
					<option value="unspecified ">Rating</option>
					<option value="1">&#9733;</option>
					<option value="2">&#9733;&#9733;</option>
					<option value="3">&#9733;&#9733;&#9733;</option>
					<option value="4">&#9733;&#9733;&#9733;&#9733;</option>
					<option value="5">&#9733;&#9733;&#9733;&#9733;&#9733;</option>
				</select>
			</div>
		</form>
	</div>

	<!-- DISPLAY MESSAGE -->
	<div class="container text-center">
		<div class="col-1">
			<h3 class="errors">
				<?php if ( isset($errors) ) echo $errors; ?>
			</h3>
		</div>
	</div>

	<!-- ITEMS COLLECTION -->
	<div class="container-small text-center bg-chiaro">
		<div class="col-1">
			<p class="transition-L text-left border-bottom">
				<a class="title" href="https://packagecontrol.io/packages/Emmet"> Emmet</a>
				<span class="by">by </span> <span class="package-author"> sergeche</span><br>
				<span class="status">Status: </span> Popular<br>
				<span class="score">  
					<input class="stars" type="radio" id="1-score-5" name="score" value="5"/>
					<label title="5 stars" for="score-5">5 stars</label>

					<input class="stars" type="radio" id="1-score-4" name="score" value="4"/>
					<label title="4 stars" for="score-4">4 stars</label>

					<input class="stars" type="radio" id="1-score-3" name="score" value="3"/>2-
					<label title="3 stars" for="score-3">3 stars</label>

					<input class="stars" type="radio" id="1-score-2" name="score" value="2"/>
					<label title="2 stars" for="score-2">2 stars</label>

					<input class="stars" type="radio" id="1-score-1" name="score" value="1"/>
					<label title="1 stars" for="score-1">1 stars</label> 
				</span>
			</p>
			<p class="transition-R text-right border-bottom">
				<a class="title" href="https://packagecontrol.io/packages/SublimeLinter"> SublimeLinter</a>
				<span class="by">by </span> <span class="package-author"> SublimeLinter</span><br>
				<span class="status">Status: </span> Popular<br>
				<span class="score">  
					<input class="stars" type="radio" id="2-score-5" name="score" value="5"/>
					<label title="5 stars" for="score-5">5 stars</label>

					<input class="stars" type="radio" id="2-score-4" name="score" value="4"/>
					<label title="4 stars" for="score-4">4 stars</label>

					<input class="stars" type="radio" id="2-score-3" name="score" value="3"/>
					<label title="3 stars" for="score-3">3 stars</label>

					<input class="stars" type="radio" id="2-score-2" name="score" value="2"/>
					<label title="2 stars" for="score-2">2 stars</label>

					<input class="stars" type="radio" id="2-score-1" name="score" value="1"/>
					<label title="1 stars" for="score-1">1 stars</label> 
				</span>
			</p>
			<p class="transition-L text-left border-bottom">
				<a class="title" href="https://packagecontrol.io/packages/Sass"> SASS</a>
				<span class="by">by </span> <span class="package-author"> nathos</span><br>
				<span class="status">Status: </span> Trending<br>
				<span class="score">  
					<input class="stars" type="radio" id="3-score-5" name="score" value="5"/>
					<label title="5 stars" for="score-5">5 stars</label>

					<input class="stars" type="radio" id="3-score-4" name="score" value="4"/>
					<label title="4 stars" for="score-4">4 stars</label>

					<input class="stars" type="radio" id="3-score-3" name="score" value="3"/>
					<label title="3 stars" for="score-3">3 stars</label>

					<input class="stars" type="radio" id="3-score-2" name="score" value="2"/>
					<label title="2 stars" for="score-2">2 stars</label>

					<input class="stars" type="radio" id="3-score-1" name="score" value="1"/>
					<label title="1 stars" for="score-1">1 stars</label> 
				</span>
			</p>
			<p class="transition-R text-right border-bottom">
				<a class="title" href="https://packagecontrol.io/packages/SideBarEnhancements">SideBarEnhancements</a>
				<span class="by">by </span> <span class="package-author"> titoBouzout</span><br>
				<span class="status">Status: </span> Popular<br>
				<span class="score">  
					<input class="stars" type="radio" id="4-score-5" name="score" value="5"/>
					<label title="5 stars" for="score-5">5 stars</label>

					<input class="stars" type="radio" id="4-score-4" name="score" value="4"/>
					<label title="4 stars" for="score-4">4 stars</label>

					<input class="stars" type="radio" id="4-score-3" name="score" value="3"/>
					<label title="3 stars" for="score-3">3 stars</label>

					<input class="stars" type="radio" id="4-score-2" name="score" value="2"/>
					<label title="2 stars" for="score-2">2 stars</label>

					<input class="stars" type="radio" id="4-score-1" name="score" value="1"/>
					<label title="1 stars" for="score-1">1 stars</label> 
				</span>
			</p>
			<p class="transition-L text-left border-bottom">
				<a class="title" href="https://packagecontrol.io/packages/Color%20Scheme%20-%20Gray%20Matter"> Color Scheme - Gray Matter</a>
				<span class="by">by </span> <span class="package-author"> philipbelesky</span><br>
				<span class="status">Status: </span> Trending<br>
				<span class="score">  
					<input class="stars" type="radio" id="5-score-5" name="score" value="5"/>
					<label title="5 stars" for="score-5">5 stars</label>

					<input class="stars" type="radio" id="5-score-4" name="score" value="4"/>
					<label title="4 stars" for="score-4">4 stars</label>

					<input class="stars" type="radio" id="5-score-3" name="score" value="3"/>
					<label title="3 stars" for="score-3">3 stars</label>

					<input class="stars" type="radio" id="5-score-2" name="score" value="2"/>
					<label title="2 stars" for="score-2">2 stars</label>

					<input class="stars" type="radio" id="5-score-1" name="score" value="1"/>
					<label title="1 stars" for="score-1">1 stars</label> 
				</span>
			</p>
			<p class="transition-R text-right border-bottom">
				<a class="title" href="https://packagecontrol.io/packages/Git-StatusBar"> Git-StatusBar</a>
				<span class="by">by </span> <span class="package-author"> andy3k</span><br>
				<span class="status">Status: </span> New<br>
				<span class="score">  
					<input class="stars" type="radio" id="6-score-5" name="score" value="5"/>
					<label title="5 stars" for="score-5">5 stars</label>

					<input class="stars" type="radio" id="6-score-4" name="score" value="4"/>
					<label title="4 stars" for="score-4">4 stars</label>

					<input class="stars" type="radio" id="6-score-3" name="score" value="3"/>
					<label title="3 stars" for="score-3">3 stars</label>

					<input class="stars" type="radio" id="6-score-2" name="score" value="2"/>
					<label title="2 stars" for="score-2">2 stars</label>

					<input class="stars" type="radio" id="6-score-1" name="score" value="1"/>
					<label title="1 stars" for="score-1">1 stars</label> 
				</span>
			</p>
			<p class="transition-L text-left border-bottom">
				<a class="title" href="https://packagecontrol.io/packages/AdvancedNewFile"> AdvancedNewFile</a>
				<span class="by">by </span> <span class="package-author"> skuroda</span><br>
				<span class="status">Status: </span> Popular<br>
				<span class="score">  
					<input class="stars" type="radio" id="7-score-5" name="score" value="5"/>
					<label title="5 stars" for="score-5">5 stars</label>

					<input class="stars" type="radio" id="7-score-4" name="score" value="4"/>
					<label title="4 stars" for="score-4">4 stars</label>

					<input class="stars" type="radio" id="7-score-3" name="score" value="3"/>
					<label title="3 stars" for="score-3">3 stars</label>

					<input class="stars" type="radio" id="7-score-2" name="score" value="2"/>
					<label title="2 stars" for="score-2">2 stars</label>

					<input class="stars" type="radio" id="7-score-1" name="score" value="1"/>
					<label title="1 stars" for="score-1">1 stars</label> 
				</span>
			</p>
			<p class="transition-R text-right border-bottom">
				<a class="title" href="https://packagecontrol.io/packages/SublimeCodeIntel"> SublimeCodeIntel</a>
				<span class="by">by </span> <span class="package-author"> Kronuz</span><br>
				<span class="status">Status: </span> Popular<br>
				<span class="score">  
					<input class="stars" type="radio" id="8-score-5" name="score" value="5"/>
					<label title="5 stars" for="score-5">5 stars</label>

					<input class="stars" type="radio" id="8-score-4" name="score" value="4"/>
					<label title="4 stars" for="score-4">4 stars</label>

					<input class="stars" type="radio" id="8-score-3" name="score" value="3"/>
					<label title="3 stars" for="score-3">3 stars</label>

					<input class="stars" type="radio" id="8-score-2" name="score" value="2"/>
					<label title="2 stars" for="score-2">2 stars</label>

					<input class="stars" type="radio" id="8-score-1" name="score" value="1"/>
					<label title="1 stars" for="score-1">1 stars</label> 
				</span>
			</p>
		</div> <!-- end col-1 --> 
	</div> <!-- end container --> 

	<!-- ADD ENTRY FORM -->
	<div class="container top-margin bottom-margin">
	<h3 class="col-1">Add your favorite plugins to the list</h3>
		<form action="" method="post" novalidate>
			<div class="col-5">
				<input type="text" name="name" placeholder="Package Name" value="">
			</div>
			<div class="col-5">
				<input type="text" name="by" placeholder="By" value="">
			</div>
			<div class="col-5">
				<select name="status">
					<option value="status">Status</option>
					<option value="new">New</option>
					<option value="trending">Trending</option>
					<option value="popular">Popular</option>
				</select>		
			</div>
			<div class="col-5">
				<select name="rating">
					<option value="unspecified ">Rating</option>
					<option value="1">&#9733;</option>
					<option value="2">&#9733;&#9733;</option>
					<option value="3">&#9733;&#9733;&#9733;</option>
					<option value="4">&#9733;&#9733;&#9733;&#9733;</option>
					<option value="5">&#9733;&#9733;&#9733;&#9733;&#9733;</option>
				</select>
			</div>
			<div class="col-5">
				<input class="btn-primary" type="submit" name="submit" value="Create Entry">
			</div>
		</form>
	</div>


<?php include 'incs/footer.php'; ?>
