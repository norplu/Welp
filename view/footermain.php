	</div>
</body>
<div id="footer">
	<a href="#new_review" class="red btn right">Write a Review</a>
</div>
<div id="new_review" class="modal">
	<div class="modal-content center-align">
		<div class="row">
			<h3>Write a Review</h3>
		</div>
		<div class="row">
			<form id="new_review" class="col s12" action="./new_review/index.php" method="post">
				<input type="hidden" name="action" value="new_review" />
				<div class="row">
					<div class="input-field col s5 offset-s1">
						<input id="rev_title" type="text" name="rev_title" class="validate" />
						<label for="rev_title">Title</label>
					</div>
					<div class="input-field col s5">
						<input id="rev_rating" type="text" name="rev_rating" class="validate" />
						<label for="rev_rating">Rating</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10 offset-s1">
						<textarea id="rev_review" name="rev_review" class="materialize-textarea"></textarea>
						<label for="rev_review">Your Review</label>
					</div>
				</div>
				<input type="submit" value="Submit" class="btn red right" />
			</form>
		</div>
	</div>
</div>
</html>