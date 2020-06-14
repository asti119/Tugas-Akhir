<?php require_once('koneksi.php'); ?>
<?php
session_start();
session_destroy();
?>
<script type="text/javascript">
window.location.href="login.php";
</script>