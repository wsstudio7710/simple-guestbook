<?php

include('../crud.php');

if (isset($_POST['submit'])) {
    // data akan disimpan baru
    if(masukkan($_POST) > 0){
        echo"<script type='text/javascript'>
        setTimeout(function () {  
            swal({
            title: 'Data Berhasil Di Kirim!',
            text:  'Terimakasih',
            type: 'success',
            showConfirmButton: true
            });  
        },10); 
        </script>";
    }else{
        echo"<script type='text/javascript'>
        setTimeout(function () {  
            swal({
            title: 'Data Gagal Di Kirim!',
            text:  'Coba Ulangi',
            type: 'error',
            showConfirmButton: true
            });  
        },10); 
        </script>";
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style/buku.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container contact-form">
        <div class="contact-image">
            <img src="../img/blue-book-4997.png" alt="rocket_contact" />
        </div>
        <form method="post">
            <h3>Buku Tamu</h3>
            <br>
            <h3>Isi Data Di bawah ini!</h3>
            <div class="row">
                <form action="" method="POST">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control" placeholder="Your Name *" value="" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="alamat" class="form-control" placeholder="Your Address *" value="" required/>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btnContact" value="Kirim Pesan" required/>
                        <a href="../index.php" class="btnLeave">Kembali</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="pesan" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                    </div>
                </div>
                </form>
            </div>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>