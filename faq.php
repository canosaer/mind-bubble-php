<?php 
include('init.php');

$title = "About";

include('header.php');
include('nav.php');
?>

<section class="faq-page">
	<div class="wide-screen-container">
		<i class="far fa-question-circle faq-page__icon"></i>
		<h1 class="faq-page__heading faq-page__heading_main">Frequently Asked Questions</h1>
		<h2 class="faq-page__question"> 
			<button class="faq-page__button" aria-controls="answer1" aria-expanded="false" id="question1"><div class="faq-page__arrow"></div>What is Mind Bubble?</button>
		</h2>
		<div class="faq-page__answer collapsed" id="answer1" role="region" aria-labelledby="question1">
			<p class="faq-page__answer-text">Mind Bubble fosters a love of learning by connecting students with community members through free tutoring, workshops, and games.</p>
		</div>
		<h2 class="faq-page__question"> 
			<button class="faq-page__button" aria-controls="answer2" aria-expanded="false" id="question2"><div class="faq-page__arrow"></div>How can I volunteer with Mind Bubble?</button>
		</h2>
		<div class="faq-page__answer collapsed" id="answer2" role="region" aria-labelledby="question2">
			<p class="faq-page__answer-text">Check out our <a href="/volunteer.php">Volunteer</a> page!</p>
		</div>
		<h2 class="faq-page__question"> 
			<button class="faq-page__button" aria-controls="answer3" aria-expanded="false" id="question3"><div class="faq-page__arrow"></div>Why is Mind Bubble free?</button>
		</h2>
		<div class="faq-page__answer collapsed" id="answer3" role="region" aria-labelledby="question3">
			<p class="faq-page__answer-text">Because of generous people like you!</p>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>
		
<script src="dist/js/nav-fixer.js"></script>
<script src="dist/js/menu-toggle.js"></script>
<script src="dist/js/faq-page.js"></script>

<?php include('closing.php'); ?>