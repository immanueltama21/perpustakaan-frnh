<?php
session_start();
session_destroy();
?>
<script>
alert('Anda Berhasil Logout !');
windows.location.href='index.php';
</script>

<?php
header("location:index.php");