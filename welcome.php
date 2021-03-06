<?php 
	include 'config.php'
?>

<!doctype html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Guide Your Self</title>
  </head>
  <style>
	    .search_container
		{
			/* display : flex;
			justify-content : center;
			align-items : center; */
			margin : 50px 10px 0px 250px;
			height : 200px;
			width : 850px;
		} 
		.cardConatiner{
			margin : 0px 150px 0px 230px; /*trbl*/
		}
		.cardimg{
			width : 150px;
			height : 123px;
			margin: 25px 50px 25px 50px; /*trbl*/
		}
		body {
        margin: 0px;
        padding: 0;
        background-size: cover;
        font-family: 'Castoro', serif;
    	}
		.card {
			height: 300px;
			width: 250px;
			float: left;
			margin: 0px 20px 40px 20px; 
			background-color: transparent;
			text-align: center;
			border:1px solid #000000;
   			}
	.btn{
		margin: 30px;/*trbl*/
	}
  </style>
  <body>
	
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Path Finder</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
			  <ul class="navbar-nav">
				<li class="nav-item">
				  <a class="nav-link active" aria-current="page" href="#">Home</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="#">About Us</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="#">Contact Us</a>
				</li>
			  </ul>
			</div>
		 </div>
        <!--<div class="container ">
            <span> Hello <?php echo $_SESSION['user'];?></span>
        </div> -->
	</nav>
	
	<div class="search_container">
	  <!-- <h2>Search Here</h2> -->
	  <form action="/de_1/search.php" method="get">
		<div class="form-group" >
		  <input name="search_query" placeholder="FInd Your Destiny" type="text" class="form-control">
		</div>
		<div class="text-center">
			<button name="search_btn" type="submit" class="btn btn-primary btn-lg">Search</button>
		</div>
	  </form>
	</div>
	<div class="cardConatiner">
	<?php
		$iab_data = $conn->prepare("SELECT * FROM categories ORDER BY id asc");
		$iab_data->execute();
		while ($rowdata = $iab_data->fetch(PDO::FETCH_ASSOC)) {
		?>  
			<div class="card">
				<h4>
					<img src="<?php echo $rowdata['image'] ?>" class="cardimg">
					<?php echo $rowdata['Category'] ?>
				</h4>
				<a href="list.php?category=<?php echo $rowdata['Category'] ?>" >
					<button name="explore" class="btn btn-primary">Explore</button>
				</a>
			</div>
		<?php
		}
		?>
	</div> 
	
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>

