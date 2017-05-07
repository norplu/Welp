<?php include('../view/headerlogin.php'); ?>
<h2>Create an account</h2>
<div class="row">
    <form id="new_user" class="col s12" action="index.php" method="post">
        <input type="hidden" name="action" value="add_user" />
        <div class="row">
            <div class="input-field col s6">
                <input id="first_name" type="text" name="f_name" class="validate" />
                <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
                <input id="last_name" type="text" name="l_name" class="validate" />
                <label for="last_name">Last Name</label>
            </div>
        </div>
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
        <input type="submit" value="Create Account" class="btn red right" />
    </form>
</div>
<?php include('../view/footer.php'); ?>