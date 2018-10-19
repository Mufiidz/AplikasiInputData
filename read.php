<?php 
include('function.php');

$query = mysqli_query($connect, "SELECT * FROM santri ORDER BY id DESC LIMIT 0, 10 ");
$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
$jumlah = mysqli_num_rows($query);

 ?>

 <html>
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/daftar.png">
 	<title>Daftar Santri</title>
 </head>
 <body>
 	<nav class="navbar navbar-expand-lg navbar-light bg-light rounded shadow">
		  	<div class="collapse navbar-collapse" id="navbarText">
		    	<ul class="navbar-nav mr-auto">
		      		<li class="nav-item shadow">
		        		<a class="nav-link btn btn-warning text-light" href="index.php">Home</a>
		      		</li>
		  		</ul>
		  	</div>
		  	<div style='margin-left:1730px;' class="collapse navbar-collapse" id="navbarText">
		  		<ul class="navbar-nav mr-auto">
		  			<li class="nav-item shadow">
		  				<a href="#" class="nav-link text-light btn btn-info">Logout</a>
		  			</li>
		  		</ul>
		  	</div>
		</nav>
		<br>
 	<!-- <div class="container"> -->
 	<div class="container">	
 		
 		<h1 class="bg-secondary text-center shadow rounded"><a class='text-light' style="text-decoration: none;" href="read.php">Daftar Santri Pondok Programmer</a></h1><br>
 			<center><a class="btn btn-info shadow" href="form-create.php">Tambah Data [+]</a></center><br>
 				
			<form method="get" action="search.php" class="form-inline">
    			<input class="form-control mr-sm-2 shadow" type="search" placeholder="Search" aria-label="Search" name="keyword" autofocus autocomplete="off" required>
    			<button class="btn btn-outline-primary my-2 my-sm-0 shadow" type="submit" name="search">Search</button>
  			</form>

 				<table  border='1' cellpadding="13" class="border border-light shadow">
	 				<tr class="bg-primary text-light">
	 					<th>Nama</th>
	 					<th>Email</th>
	 					<th>No.Hp</th>
	 					<th>Tgl Lahir</th>
	 					<th>Kota/Kab</th>
	 					<th>JK</th>
	 					<th class="text-center">Aksi</th>
	 				</tr>

				<?php foreach ($data as $db) : ?>
	 				<tr>
	 					<td><?= $db['nama']; ?></td>
	 					<td><?= $db['email']; ?></td>
	 					<td><?= $db['no_hp']; ?></td>
	 					<td><?= $db['tanggal_lahir']; ?></td>
	 					<td><?= $db['alamat']; ?></td>
	 					<td><?= $db['jenis_kelamin']; ?></td>
	 					<td>
	 						<a class="btn btn-info shadow" href="detail.php?id=<?= $db['id']; ?>">Detail</a>
	 						<a class="btn btn-warning text-white shadow" href="form-update.php?id=<?= $db['id']; ?>">Update</a>
	 						<a class="btn btn-danger shadow" href="delete.php?id=<?= $db['id']; ?>" onclick="return confirm('Apakah Anda Yakin ingin Hapus?')">Delete</a>	

	 					</td>
	 				</tr>
	 			<?php endforeach; ?>
	 			
	 			</table>
	 			<hr>
	 			<h6><b><i>Jumlah Santri</i></b> : <?= $jumlah ?> </h6>
	 			<nav aria-label="...">
				  <ul class="pagination shadow">
				    <li class="page-item">
				      <a class="page-link" href="#" tabindex="-1">Previous</a>
				    </li>

				    <li class="page-item active"><a class="page-link" href="#">1</a></li>
				    <li class="page-item ">
				      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
				    </li>

				    <li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item">
				      <a class="page-link" href="#">Next</a>
				    </li>
				  </ul>
				</nav>
	 			<hr>
 	</div>
 	
 </body>
 </html>