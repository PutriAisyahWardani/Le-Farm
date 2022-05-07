<?php 

$id = $_GET['id'];
$sql = mysqli_query($con, "DELETE FROM kas WHERE kode = '$id' ");
if($sql) {
	?>
    <script type="text/javascript">
        alert("Data Berhasil Dihapus");
        window.location.href = "income.php";
    </script>
    <?php		
}

?>