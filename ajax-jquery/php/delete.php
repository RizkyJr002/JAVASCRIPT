<?php 

    require_once "koneksi.php";

    $data = stripslashes(file_get_contents("php://input"));
    $idpelanggan = json_decode($data,true);

    $idpelanggan = $idpelanggan['idPelanggan'];

    if (!empty($idpelanggan)) {
        

    $sql = "DELETE FROM tblpelanggan WHERE idpelanggan=$idpelanggan";
    if ($result = mysqli_query($con,$sql)) {
        echo "Data Sudah dihapus !";
    } else {
        echo "Data gagal dihapus !";
    }
} else {
    echo "data belum dipilih";
}

?>