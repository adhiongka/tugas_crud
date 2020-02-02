<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa ORDER BY nim DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="tambah.php">Add New User</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Nim</th> <th>Nama</th> <th>Jurusan</th> <th>no hp</th><th>Opsi</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nim']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['jurusan']."</td>";   
        echo "<td>".$user_data['no_hp']."</td>";   
        echo "<td><a href='edit.php?nim=$user_data[nim]'>Edit</a> | <a href='hapus.php?nim=$user_data[nim]'>Delete</a> | <a href='hapus_all.php?'>Delete all</a></td></td>
        
        </tr>";        
    }
    ?>
    </table>
</body>
</html>