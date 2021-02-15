<?php 
include('../crud.php');

if(isset($_POST['update'])){
    if(tambah($_POST) > 0){
        echo"<script>
            alert('data berhasil di tambahkan');
        </script>";
    }else{
        echo"<script>
            alert('data gagal di tambahkan');
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="../style/admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
</script>
</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Detail<b> Buku Tamu</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Email</th>
						<th>Pesan</th>
						<th>Tanggal</th>
						<th>alamat</th>
					</tr>
				</thead>
				<tbody>
                    <?php 
                        $batas = 3;
                        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
                        $previous = $halaman - 1;
                        $next = $halaman + 1;
                        
                        $data = mysqli_query($conn,"SELECT * FROM databuku");
                        $jumlah_data = mysqli_num_rows($data);
                        $total_halaman = ceil($jumlah_data / $batas);
                        $data_bukutamu = mysqli_query($conn,"SELECT * FROM databuku limit $halaman_awal, $batas");
                        $nomor = $halaman_awal+1;
                    ?>
                    <?php while($row = mysqli_fetch_array($data_bukutamu)) : ?>
					<tr>
						<td><?= $row['nama']; ?></td>
						<td><?= $row['email']; ?></td>
                        <td><?= $row['pesan']; ?></td>
						<td><?= $row['tanggal']; ?></td>
						<td><?= $row['alamat']; ?></td>
					</tr>
                    <?php endwhile;?>
				</tbody>
			</table>
            <a href="../index.php" class="btnLeave">Kembali</a>
			<div class="clearfix">
            <ul class="pagination justify-content-center">
				<li class="page-item">
					<a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
				</li>
				<?php 
				for($x=1;$x<=$total_halaman;$x++){
					?> 
					<li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
					<?php
				}
				?>				
				<li class="page-item">
					<a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
				</li>
			</ul>
			</div>
		</div>
	</div>        
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="" method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Tambah Buku Tamu</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" required>
					</div>					
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Pesan</label>
						<textarea class="form-control" name="pesan" required></textarea>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" name="update" class="btn btn-success" value="Tambah Baru">
				</div>
			</form>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>