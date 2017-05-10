<?php require('model/database.php'); ?>
<?php require('model/review.php'); ?>

<?php include('./view/headermain.php'); ?>

<h1><?php echo $name; ?></h1>
<p>
    <?php echo $desc; ?>
</p>

<?php $reviews = get_reviews_rest($_POST['rest_id']); ?>

<?php foreach($reviews as $review) : ?>
    <h3><?php echo $review['title'] ?></h3>
    <p><?php echo $review['rating'] ?></p>
    <p><?php echo $review['comment'] ?></p>
<?php endforeach ?>

<?php include('./view/footer.php'); ?>