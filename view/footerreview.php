	</div>
</body>
<div class="row">
    <div class="col s8 offset-s2">
        <div id="footer">
        	<a href="#add_review" class="red btn right">Write a Review</a>
        </div>
    </div>
</div>
<div id="add_review" class="modal">
	<div class="modal-content center-align">
		<div class="row">
			<h3>Write a Review</h3>
		</div>
		<div class="row">
			<form id="add_review" class="col s12" action="../index.php" method="post">
				<input type="hidden" name="action" value="add_review" />
				<div class="row">
					<div class="input-field col s5 offset-s1">
						<input id="rev_title" type="text" name="rev_title" class="validate" />
						<label for="rev_title">Title</label>
					</div>
					<div class="input-field col s5">
						<p class="range-field grey-text darken-2">
						    Rating:
						    <input type="range" id="rev_rating" name="rev_rating" min="0" max="5" />
						</p>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10 offset-s1">
						<textarea id="rev_review" name="rev_review" class="materialize-textarea"></textarea>
						<label for="rev_review">Review</label>
					</div>
				</div>
				<input id="rest_id" type="hidden" name="rest_id" value="<?php echo $_GET['rest_id']; ?>" />
				<input id="user_id" type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>" />
				<input type="submit" value="Submit" class="btn red right" />
			</form>
		</div>
	</div>
</div>
</html>