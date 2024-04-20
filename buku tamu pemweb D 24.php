<html>
<head>
<title>Buku Tamu :: Hotel Teknik Jaya</title>
<style>
    * {
         box-sizing: border-box;
    }
    body {
         margin: 0;
    }
    /* Style the header */
    .header {
     background-color: #f1f1f1;
     padding: 20px;
     text-align: center;
    }

    /* Style the top navigation bar */
    .topnav {
     overflow: hidden;
     background-color: #333;
    }

    /* Style the topnav links */
    .topnav a {
         float: left;
         display: block;
         color: #f2f2f2;
         text-align: center;
         padding: 14px 16px;
         text-decoration: none;
    }

    /* Change color on hover */
    .topnav a:hover {
        background-color: #ddd; 
        color: black;
    }
    
    input[type=text], select {
        width: 100%;
        padding: 12px 20px; 
        margin: 8px 0;
        display: inline-block; 
        border: 1px solid #ccc; 
        border-radius: 4px; 
        box-sizing: border-box; 
    }
        
    input[type=submit] {
        width: 100%;
        background-color: #4CAF50; 
        color: white; 
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px; 
        cursor: pointer;
    }

    input [type=submit]:hover{
        background-color: #45a049;
    }

    div{
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }

    textarea {
        width: 100%;
        height: 150px;
        padding: 12px 20px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f6;
        font-size: 16px;
        resize: none;
    }
 
    #tamu {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    
    #tamu td, #tamu th {
        border: 1px solid #ddd;
        padding: 8px;
    }
    
    #tamu tr:nth-child(even)
    {
        background-color: #12f2f2;
    } 
     
    #tamu tr:hover{
        background-color: #ddd;
    } 
    
    #tamu th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }
</style>
<head>
<body>
<div class="header"> 
    <h1>Selamat Datang</h1> 
        <p>Di Hotel Teknik Jaya</p> 
</div> 

<div class="topnav"> 
    <a href="index.php">Home</a> 
    <a href="#">Pengunjung</a>
</div>

<div class="row"> 
    <div class="column"> 
    <h2>Buku Tamu</h2> 
        <div> 
            <form method="POST" action="<?=$_SERVER['PHP_SELF'];?>">
                <label>Nama</label> 
                    <input type="text" name="fnama" placeholder="Nama anda.."> 
                
                <label>Tanggal</label> 
                    <input type="text" name="ftanggal" placeholder="Tanggal.."> 
                
                <label>Lama Menginap</label> 
                    <select id="prov" name="Waktu menginap"> 
                        <option value="1 malam">1 malam</option> 
                        <option value="2 malam">2 malam</option> 
                        <option value="3 malam">3 malam</option>
                        <option value="> 3 malam">+3 malam</option> 
                    </select> 

               <label>No Telpon</label> 
                    <input type="text" name="ftelpon" placeholder="Masukan Nomor Telpon.."> 

                <label>Alamat</label> 
                   <textarea name="Alamat tamu"></textarea> 
                
                <input type="submit" value="Submit">
            </form> 
        </div> 
        <div> 
            <?php if (isset($_POST['fnama'])){ 
                $nama=$_POST['fnama']; 
                $tanggal=$_POST['tanggal']; 
                $lamamenginap=$_POST['flama']; 
                $alamat=$_POST['falamat tamu'];
            
                echo "<h1>Daftar Tamu</h1>";
                echo "<table id='tamu'>";
                echo "<tr><th>Nama</th><th>Tanggal</th><th>Lama Menginap</th>No Telpon<th></th>Alamat</tr>";
                echo "<tr><th>Nama</th><th>Tanggal</th><th>Lama Menginap</th>No Telpon<th></th>Alamat</tr>";
            }
            ?>
        </div> 
</div> 
</body> 
</html>
