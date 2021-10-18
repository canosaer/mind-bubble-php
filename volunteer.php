<?php 
include('init.php');

$title = "Volunteer";

include('header.php');
include('nav.php'); 
include('captcha.php'); 
?>

<section class="volunteer">
	<div class="wide-screen-container">
		<i class="fas fa-hand-holding-heart volunteer__icon"></i>
		<h1 class="volunteer__heading volunteer__heading_main">Volunteer Sign-Up</h1>
		<form class="volunteer__form" method="POST">
			<h2 class="volunteer__heading volunteer__heading_program">How would you like to help?<span class="volunteer__required">*</span></h2>
			<p class="volunteer__tip" aria-required="true">Select at least one program and check all that apply.</p>
			<fieldset class="volunteer__check-row">
				<input type="checkbox" name="tutoring" id="tutoring" class="volunteer__checkbox">
				<label class="volunteer__label volunteer__label_check" for="tutoring">I'd like to tutor!</label>
			</fieldset>
			<fieldset class="volunteer__check-row">
				<input type="checkbox" name="workshops" id="workshops" class="volunteer__checkbox">
				<label class="volunteer__label volunteer__label_check" for="workshops">I'd like to facilitate workshops!</label>
			</fieldset>
			<fieldset class="volunteer__check-row">
				<input type="checkbox" name="games" id="games" class="volunteer__checkbox">
				<label class="volunteer__label volunteer__label_check" for="games">I'd like to help kids learn new games!</label>
			</fieldset>
			<label for="username" class="volunteer__heading volunteer__heading_name">What is your name?<span class="volunteer__required">*</span></label>
			<input type="text" required="true" name="username" id="username" class="volunteer__input volunteer__input_name" aria-required="true">
			<label for="email" class="volunteer__heading volunteer__heading_email">What is your email address?<span class="volunteer__required">*</span></label>
			<input type="text" required="true" name="email" id="email" class="volunteer__input volunteer__input_email" aria-required="true">
			<label for="phone" class="volunteer__heading volunteer__heading_phone">What is your phone number?<span class="volunteer__required">*</span></label>
			<input type="text" required="true" name="phone" id="phone" class="volunteer__input volunteer__input_phone" aria-required="true">
			<label for="math" class="volunteer__heading volunteer__heading_math">What is <?php echo $mathInt1 . "+" . $mathInt2; ?>?<span class="volunteer__required">*</span></label>
			<input type="text" required="true" name="math" id="math" class="volunteer__input volunteer__input_math" aria-required="true">
			<fieldset class="volunteer__background">
				<legend class="volunteer__heading volunteer__heading_background" aria-required="true">Have you ever been convicted or plead guilty to a crime? <span class="volunteer__required volunteer__required_background">*</span></legend>
				<input type="radio" name="background" id="crime-true" class="volunteer__radio volunteer__radio_true">
				<label class="volunteer__label volunteer__label_radio" for="crime-true">Yes</label>
				<input type="radio" name="background" id="crime-false" class="volunteer__radio volunteer__radio_false">
				<label class="volunteer__label volunteer__label_radio" for="crime-false">No</label>
			</fieldset>
			<button class="volunteer__submit">Sign Up!</button>
			<p class="volunteer__error invisible">no errors</p>
		</form>
		<h2 class="volunteer__heading volunteer__heading_success hidden">Thanks for signing up! Check your email for more information!</h2>
	</div>
	
</section>

<?php include('footer.php'); ?>
		
<script src="dist/js/nav-fixer.js"></script>
<script src="dist/js/menu-toggle.js"></script>
<!-- <script src="dist/js/volunteer-menu.js"></script> -->

<?php include('closing.php'); ?>