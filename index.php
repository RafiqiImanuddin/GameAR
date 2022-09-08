<?php
// Create database connection using config file
include_once("config/Koneksi.php");
 
// Fetch all users data from database
$result = mysqli_query($koneksi, "SELECT * FROM users ORDER BY id ASC");
?>
 
<html>
<head>    
    <title>Halaman Utama</title>
<link rel="stylesheet" href="css/style.css">

</head>
 
<body bgcolor="#e8e4d8">
    <nav>
        <ul>
    <li> <a href="index.php">Halaman Utama</a></li>
    <li> <a href="biodata.php">Biodata</a></li>
     <li><a href="develop.php">About Development</a></li>
     </ul>
    </nav>
    <br>
    <div class="cari">
        <input type="Text" placeholder="Cari" id="cari">
        <input type="button" value="Cari">

    </div>
<div class="tambahdata">
    <form action="tambah_data.php">
    <input type="submit" value="Tambah Data" class="btn tambah">
    </form>
    <br>
</div> 

 <center>
 <table width='80%' border='2px' class="table1">
 
    <tr>
        <th>Nama</th> <th>Nomer</th> <th>Email</th> <th>Option</th>
        
    </tr>

    <?php  
    while($user_data = mysqli_fetch_array($result)) {     

             
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['no_hp']."</td>";
        echo "<td>".$user_data['email']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    </center>
</body>
</html>