<?php
include '_config.php';
$id_user = $_GET['id_kategori'];
$delete = mysqli_query($con, "DELETE FROM user WHERE id_user = '$id_kategori'");
if ($delete) { ?>
    <script>
        alert('Data berhasil dihapus!')
        location.href = 'page_kategori.php'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal dihapus!')
        location.href = 'page_kategori.php'
    </script>
<?php } ?>
