<?php

require '../../database/functions.php';
$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
			<script>
				alert('Data berhasil dihapus!');
				document.location.href = '../dashboardAdmin.php';
			</script>
		";
}
