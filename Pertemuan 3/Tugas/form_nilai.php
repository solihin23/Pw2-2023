<?php
    include_once 'header.php' ;
?>	
<div class="container my-5">
    <h1 class="text-center mb-4">Form Nilai</h1>
    <form  method="POST" action= ""class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm">
        <div class="container px-3">
            <div class="form-group row mb-3">
                <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <input id="nama_lengkap" type="text" class="form-control" placeholder="Siapa nama kamu?" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                <div class="col-8">
                    <select id="matkul" required="required" class="form-select">
                        <option value="">----- Pilih Mata Kuliah -----</option>
                        <option>Dasar Dasar Pemrograman</option>
                        <option>Pemrograman Web</option>
                        <option>Statistika dan Probabilitas</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                <div class="col-8">
                    <input id="nilai_uts" type="number" min="0" max="100" class="form-control" placeholder="Masukan angka..." required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                <div class="col-8">
                    <input id="nilai_uas" type="number" min="0" max="100" class="form-control" placeholder="Masukan angka..." required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Praktikum</label>
                <div class="col-8">
                    <input id="nilai_tugas" type="number" min="0" max="100" class="form-control" placeholder="Masukan angka..." required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <div class="offset-4 col-8">
                    <input name="proses" type="submit" value="Submit" class="btn btn-primary">
                </div>
            </div>
        </div>
    </form>
</div>
<?php
    include_once 'footer.php' ;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Activity Score - STTNF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <header role="banner">
            <h2>Student Activity Score - STTNF</h2>
            <a href="home.php">Home</a> | <a href="form_nilai.php">Form Nilai</a> | <a href="data_nilai.php">Data Nilai</a> | <a href="">Login</a>
            <hr />
        </header>
<?php
    include_once 'header.php' ;
?>	
  <h1>Welcome Home!</h1>
  <p>Solihin
     0110122301 </p>

  <?php
    include_once 'footer.php' ;
?>
