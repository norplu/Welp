
<div class="row" >
    <?php foreach($restaurants as $restaurant) : ?>
        <div class="col s12 m6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title"><?php echo $restaurant['name']; ?></span>
                    <p>
                        <?php echo $restaurant['description']; ?>
                        <br />
                        <?php echo $restaurant['location']; ?>
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>
