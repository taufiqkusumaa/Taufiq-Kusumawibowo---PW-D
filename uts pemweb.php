<?php
include_once(“koneksi.php”);  

// Mengambil semua data dari database
$result = mysqli_query($mysqli, “SELECT * FROM absensi ORDER BY id DESC”);  

if (isset($_POST[‘Submit’])) {    
$nama = $_POST[‘nama’];    
$divisi = $_POST[‘divisi’];      

// Insert data ke database     $add = mysqli_query($mysqli, “INSERT INTO absensi(nama,divisi,waktu_kehadiran)
VALUES(‘$nama’,’$divisi’, NOW())”);
}
?>  

<html>  

<head>    
<!– Required meta tags –>    
<meta charset=”utf-8″>    
<meta name=”viewport” content=”width=device-width, initial-scale=1″>      

<!– Bootstrap CSS –>    
<link href=”https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css” rel=”stylesheet” integrity=”sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3″ crossorigin=”anonymous”>      

<title>Niagahoster Tutorial</title>
</head>  

<body>    
<nav class=”navbar navbar-dark bg-dark”>        
<div class=”container-fluid”>            
<span class=”navbar-brand mb-0 h1″>Niagahoster Tutorial</span>        
</div>    
</nav>      

<div class=”bg-success p-2 text-dark bg-opacity-10″>        
<h1 class=”p-4 text-center”>Catatan Kehadiran</h1>        
<div class=”container”>            
<form action=”” method=”post” name=”form_absen”>                
<div class=”col-md-6 offset-md-3″>                    
<div class=”mb-3″>                         
<label class=”form-label”>Nama</label>                        
<input type=”text” class=”form-control” name=”nama”
placeholder=”Masukkan nama Kamu”>                    
</div>                    
<div class=”mb-3″>                        
<label for=”exampleInputPassword1″ class=”form-
label”>Divisi/Departemen</label>                        
<select class=”form-select” name=”divisi”>                            
<option value=”#”>– Pilih Departemen –</option>                            
<option value=”Acquisition”>Acquisition</option>                            
<option value=”Finance”>Finance</option>                            
<option value=”Operation”>Operation</option>                        
</select>                    
</div>                 
</div>                
<div class=”text-center”>                    
<button type=”submit” class=”btn btn-primary”
name=”Submit”>Hadir</button>                
</div>            
</form>              

<table class=”my-5 table table-striped”>                 
<tr class=”table-dark”>                    
<th>Nama</th>                    
<th>Divisi/Departemen</th>                    
<th>Waktu Kehadiran</th>                
</tr>                  

<?php                
while ($r = mysqli_fetch_array($result)) {                
?>                    
<tr class=”table-secondary”>                        
<td><?php echo $r[‘nama’]; ?></td>                        
<td><?php echo $r[‘divisi’]; ?></td>                        
<td><?php echo $r[‘waktu_kehadiran’]; ?></td>                    
</tr>                
<?php                
}                
?>            
</table>        
</div>    
</div>      

<script
src=”https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js” integrity=”sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p” crossorigin=”anonymous”></script>
</body>
</html>
