
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
	  .table{
		  width: 80vw;
      margin: 3vh 0vw 0vh 10vw;
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
	</nav>
	<table class="table">
		<thead class="thead-dark">
		  <tr>
			<th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Answered By</th>
            <th scope="col">Solution</th>
		  </tr>
		</thead>
		<tbody>
  <?php
        $category = $_GET['category'];
        // echo $category;
        // $query = "SELECT * FROM home_data where title='.$category.'";
        // $result = $connect->query($query);
        $iab_data = $conn->prepare("SELECT * FROM home_data where title=? ");
        $iab_data->bindParam(1, $category);
        $iab_data->execute();
        $temp = 1;
        while ($rowdata = $iab_data->fetch(PDO::FETCH_ASSOC)) { ?>
          <tr>  
            <td >mark</td>
            <td ><?php echo $rowdata['title']?></td>
            <td><?php echo $rowdata['Answered_by']?></td>
            <td><a href="stap.php?id=<?php echo $rowdata['id']?>" ><button>Click Here</button> </a></td>
          </tr>
  <?php  }  ?>
      </tbody>
      </table>
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
                                  