<!DOCTYPE html>
<html>
<head>
<title>
Test Tonjoo
</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/bootstrap.min.css">
</head>
<body>
	
	<div class="container">
	<?php foreach($pegawai as $u) { ?>
  <h1>form Edit Data</h1>
  <form class="form-horizontal" action="<?php echo base_url(). 'index.php/crud/update'; ?>" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Id</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="id" placeholder="Isikan id" name="id" value="<?php echo $u->id ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Nama:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="nama" placeholder="Isikan Nama" name="nama" value="<?php echo $u->nama ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Umur:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="umur" placeholder="Isikan Umur" name="umur" value="<?php echo $u->umur ?>">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Simpan</button>
      </div>
    </div>
  </form>
  	<?php } ?>
</div>

	</body>
	</html>