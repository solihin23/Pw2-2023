<?php
    $m_fruits = [
     ["ID"=> 1,"Nama"=>"Mangga","Warna"=> "Kuning","Stok"=>"4 Kg","Harga"=>"Rp.56.000","Deskripsi"=>"Buah mangga segar cocok untuk Jus"],
     ['ID'=>2,"Nama"=>"Anggur","Warna"=>"Ungu","Stok"=>"2 Kg","Harga"=>"Rp.60.000","Deskripsi"=>"Buah Anggur cocok untuk Jus"],
     ['ID'=>3,"Nama"=>"Apel","Warna"=>"Merah","Stok"=>"4 Kg","Harga"=>"Rp.80.000","Deskripsi"=>"Buah Anggur cocok untuk Jus"],
     ['ID'=>4,"Nama"=>"Melon","Warna"=>"Hijau","Stok"=>"6 Kg","Harga"=>"Rp.160.000","Deskripsi"=>"Buah Anggur cocok untuk Jus"],
     ['ID'=>5,"Nama"=>"Belimbing","Warna"=>"Kuning","Stok"=>"5 Kg","Harga"=>"Rp.75.000","Deskripsi"=>"Buah Anggur cocok untuk Jus"],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          foreach($m_fruits as $fruit)
          {
            echo'<tr>';
            echo'<td>'.$fruit['ID'].'</td>';
            echo'<td>'.$fruit['Nama'].'</td>';
            echo'<td>'.$fruit['Warna'].'</td>';
            echo'<td>'.$fruit['Stok'].'</td>';
            echo'<td>'.$fruit['Harga'].'</td>';
            echo'<td>'.$fruit['Deskripsi'].'</td>';  
            echo'</tr>';  
          }
       ?>
      </tbody>
    </table>
  </div>
</body>
</html>