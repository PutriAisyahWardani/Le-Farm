<!--<?php 

$id = $_GET['id'];
$sql = mysqli_query($con, "DELETE FROM kas WHERE kode = '$id' ");
if($sql) {
	?>
    <script type="text/javascript">
        alert("Data Berhasil Dihapus");
        window.location.href = "?.php";
    </script>
    <?php		
}

?>-->

<?php 
//$id = $_GET['id'];
require_once 'top.inc.php';
$id = $con->real_escape_string($_GET['id']);

$sql=$con->query("DELETE FROM kas WHERE id='$id' ");
if ($sql) {
    ?>
    <script type="text/javascript">
        alert("Data Berhasil Dihapus");
        //window.location.href = "?.php";
    </script>
    <?php
}