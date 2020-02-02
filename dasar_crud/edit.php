<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $nim=$_POST['nim'];
    $nama=$_POST['name'];
    $jurusan=$_POST['jurusan'];
    $no_hp=$_POST['handphone'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE mahasiswa SET nim='$nim',nama='$nama',jurusan='$jurusan',no_hp='$no_hp' WHERE nim=$nim");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$nim = $_GET['nim'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE nim=$nim");

while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['nama'];
    $jurusan = $user_data['jurusan'];
    $no_hp = $user_data['no_hp'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_mahasiswa" method="post" action="edit.php">
        <table border="0">
      
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="name" value=<?php echo $name;?>></td>
            </tr>
            <tr> 
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" value=<?php echo $jurusan;?>></td>
            </tr>
            <tr> 
                <td>no hp</td>
                <td><input type="text" name="handphone" value=<?php echo $no_hp;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="nim" value=<?php echo $_GET['nim'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>