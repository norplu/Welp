<?php include '../view/header.php'; ?>
<div id="main">
    <h1 class="top">Database Error</h1>
    <p>There was an error connecting to the database.</p>
    <p>Error message: <?php echo  $error_message; ?></p>
    <p>&nbsp;</p>
    <p>
    <?php
	phpinfo();
    ?>
    </p>
</div>
<?php include '../view/footer.php'; ?>
