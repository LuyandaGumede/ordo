<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link href="css/Search.css" rel="stylesheet" type="text/css">
<title>Search</title>
</head>

<body>
	<!--top half fixed logo, name and search-->
	<div class="Topfix">
		<a href="Dash.html" alt="dash"><img src="Images/logo ES.png" alt="logo"></a>
		<input id="input" type="search" placeholder="Search...">
	</div>
	<!--bottom half -->
	<div class="bHalf">
		<!--top half fixed Naveigation-->
		<div class="lFix">
			<button id="profile"><a><img src="Images/profile.png" alt="profile img"></a></button>
			<button id="home"><a href="Dash.html" alt="dash"><img src="Images/home button.png" alt=" home img"></a></button>
			<button id="upload"><a href="projects.html"><img src="Images/upload button.png" alt="upload img"></a></button>
			<button id="help"><a href="help.html"><img src="Images/help button.png" alt="help img"></a></button>
		</div>
		<!--Dashboard half and displayed content-->
		<div class="rhlaf">
			<div class="content">
				<form class="sForm" id="myFrom"  method="post" action="search.php">
					<h2>Please enter your search parameters</h2>
					<div class ="table">
						<div>
							<td><label>Searh Query:</label></td>
							<td><input type="text" name="search" placeholder="Search Query..."></td>						
						</div>
						<div><!--thechnically incorect but to explin what a tabel is inside a databe may be more confusing -->
	
							<td><label>Select database:</label></td>
							<td><select name="table" id="Table">
								<option value="construction">construction</option>
								<option value="contract">contract</option>
								<option value="drawings">drawings</option>
								<option value="manuals">manuals</option>
								<option value="submittal">submittal</option>
								</select></td>
						</div>
						<script src="js/searchSelect.js" type="text/javascript" ></script>
						
						<div class ="Field" id="construction">
								<!--Select table colum, -->
							<td><label name="attri">Select a feild:</label></td>
							<td><select>
								<option value=" ">Select...</option>
								<option value="constructionId">constructionId</option>
								<option value="constructionName">constructionName</option>
								<option value="constructionDate">constructionDate</option>
								</select></td>
						</div>
						
						
						<div class ="Field" id="contract">
								<!--Select table colum, -->
							<td><label name="attri">Select a feild:</label></td>
							<td><select>
								<option value=" ">Select...</option>
								
								</select></td>
						</div>
						<div class ="Field" id="drawings">
								<!--Select table colum, -->
							<td><label name="attri">Select a feild:</label></td>
							<td><select>
								<option value=" ">Select...</option>
								<option value="constructionId">constructionId</option>
								<option value="constructionName">constructionName</option>
								<option value="constructionDate">constructionDate</option>
								</select></td>
						</div>
						<div class ="Field" id="manuals">
								<!--Select table colum, -->
							<td><label name="attri">Select a feild:</label></td>
							<td><select>
								<option value=" ">Select...</option>
								<option value="constructionId">constructionId</option>
								<option value="constructionName">constructionName</option>
								<option value="constructionDate">constructionDate</option>
								</select></td>
						</div>
						
						<div class ="Field" id="submittals">
								<!--Select table colum, -->
							<td><label name="attri">Select a feild:</label></td>
							<td><select>
								<option value=" ">Select...</option>
								<option value="constructionId">constructionId</option>
								<option value="constructionName">constructionName</option>
								<option value="constructionDate">constructionDate</option>
								</select></td>
						</div>
				
					</div>
					<button type="submit" id="bSearch" >Search</button>
				</form>	
			</div>
		</div>
	</div>
</body>
</html>