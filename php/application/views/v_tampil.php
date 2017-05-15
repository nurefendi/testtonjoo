<!DOCTYPE html>
<html>
<head>
	<title>test Tonjoo</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/bootstrap.min.css">

</head>
<body>
<div class="container">
<div class="container">
<h1>Form View Data</h1>
	<table class="table table-hover">
		<tr>
			<th>No</th>
			<th>ID</th>
			<th>Nama</th>
			<th>Umur</th>
			
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($users as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->id ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->umur. " Tahun" ?></td>
			
			<td>
			       
			      	<a href="<?php echo base_url(). 'index.php/crud/edit/'.$u->id; ?>" class="btn btn-info btn-sm">
          				<span class="glyphicon glyphicon-edit"></span> Edit
        			</a>
        			<a href="<?php echo base_url(). 'index.php/crud/hapus/'.$u->id; ?>" class="btn btn-info btn-sm">
          				<span class="glyphicon glyphicon-trash"></span> Hapus
        			</a>
                  
			</td>
		</tr>
		<?php } ?>
	</table>
	<a href="<?php echo base_url(). 'index.php/crud/tambah'; ?>" class="btn btn-info btn-lg">
     <span class="glyphicon glyphicon-plus"></span> Tambah
     </a>
	</div></div>
</body>
</html>