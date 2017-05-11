<?php include('./view/headermain.php'); ?>

<div class="row">
    <div class="col s10 offset-s1">
        <h2><?php echo $name; ?></h2>
        <p>
            <?php echo $desc; ?>
        </p>
    </div>
</div>

<?php $reviews = get_reviews_rest($rest_id); ?>

<?php foreach($reviews as $review) : ?>

<?php $user = get_user_data($review['user_id']); ?>

    <div class="row">
        <div class="col s8 offset-s1">
            <div class="card">
                <div class="card-content">
                    <span class="card-title"><?php echo $review['title'] ?></span>
                    
                    <?php for($i = 0; $i < $review['rating']; $i++) : ?>
                    <i class="material-icons yellow-text">star</i>
                    <?php endfor ?>
                    <?php for($i = $review['rating']; $i < 5; $i++) : ?>
                    <i class="material-icons">star</i>
                    <?php endfor ?>
                    <p><?php echo $user['f_name'] . " " . $user['l_name'] . " says:"; ?></p>
                    <p><?php echo $review['comment'] ?></p>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>

<?php include('./view/footerreview.php'); ?>