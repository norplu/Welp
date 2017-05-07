<?php include('../view/headerlogin.php'); ?>
<h2>Create an account</h2>
<div class="row">
    <form id="login" class="col s12" action="index.php" method="post">
        <input type="hidden" name="action" value="login" />
        <div class="row">
            <div class="input-field col s12">
                <input id="email" type="email" name="email" class="validate">
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="password" type="password" name="password" class="validate">
                <label for="password">Password</label>
            </div>
        </div>
        <input type="submit" value="Login" class="btn red right" />
    </form>
</div>
<?php include('../view/footer.php'); ?>