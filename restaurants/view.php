<?php include('../view/header.php'); ?>

<div class="row" >
    <div class="col s10 offset-s1">
        <?php foreach($restaurants as $restaurant) : ?>
            <div class="col s10 offset-s1 m6 l4">
                <a href="?action=rest_view&rest_id=<?php echo $restaurant['restaurant_id']; ?>">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title"><?php echo $restaurant['name']; ?></span>
                            <p>
                                <?php echo $restaurant['description']; ?>
                                <br />
                                <?php echo $restaurant['location']; ?>
                                <br />
                                <?php echo $restaurant['hours']; ?>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach ?>
    </div>
</div>

<?php include('../view/footer.php'); ?>