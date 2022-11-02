
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="cssUptodate.css" type="text/css">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="js/validate.js" type="text/javascript"></script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php"><img src="Images/logo%20ES.png" alt="Eternity Services" width="300" height="60"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  

      <ul class="navbar-nav">
   
        <li class="nav-item active">
        <a class="nav-link" href="index.php#about">About <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="portfolio.php">Portfolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="login/index.php" tabindex="-1" aria-disabled="true">Login</a>
      </li>
    
    </ul>
   
  </div>
</nav>

<div class="contact">
	
		<form class ="cForm" id= "myForm" method="post" action="ContactToDB.php" onSubmit="return validate(this);" >
			<h4>Contact us</h4>
			<table class="cTable">
				
				<tr>
					<td><label>Name</label><small id="N"> * Required</small><br>
					<input name="name1" id="name" type="text" placeholder="Name..."></td>
				</tr>
				<tr>
					<td><label>Surname</label><small id ="S"> * Required</small><br>
					<input name="surname1" id="Sname" type="text" placeholder="Surname..."></td>
				</tr>
				<tr>
					<td><label>Email</label><small id="E"> * Required</small><br>
					<input name="email1" id="email" type="text" placeholder="Email..."></td>
				</tr>					
				<tr>
					<td><label>Cellphone number</label><small id ="C"> * Required</small><br>
					<input name="cell1" id="cell" type="text" placeholder="Mobile Number..."></td>
				</tr>
				<tr>
					<td><label>Message</label><small id="M"> * Required</small><br>
					<textarea name ="mess1" id="mess" type="text" placeholder="Your message..."></textarea>
					</td>
					
				</tr>
				<tr>
					<td><button type="submit" id = "button" name="button" >Send</button></td>
				</tr>
				
			</table>	
			
			
		</form>
	
	
</div>
<br>
