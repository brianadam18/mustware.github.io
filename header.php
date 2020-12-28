<!DOCTYPE html>
<html lang="en">
<head>
	<title>Must Wear</title>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
 	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript">

function fetch_select(val)
{
   $.ajax({
     type: 'post',
     url: 'fetch_data.php',
     data: {
       get_option:val
     },
     success: function (response) {
       document.getElementById("new_select").innerHTML=response; 
     }
   });
}

</script>
</head>
<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Must Wear</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class=""><a href="index.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
				<li><a href="barang.php"><i class="glyphicon glyphicon-bookmark"></i> Barang</a></li>
				<li><a href="terjual.php"><i class="glyphicon glyphicon-shopping-cart"></i> Pesanan</a></li>
				<li><a href="tentang.php"><i class="glyphicon glyphicon-bookmark"></i> Tentang</a></li>
				<li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
			</ul>
		
			
			<div class="modal-body">
			
			</div>
		</div>
	</div>
</div>
