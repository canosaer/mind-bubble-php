<?php 
include('init.php');
include('header.php');
include('preloader.php');
include('nav.php'); 
?>

<section class="hero">
	<h1 class="hero__heading">Mind Bubble<br>Tutoring, Workshops, and Games</h1>
	<form class="hero__menu hero__menu_0">
		<h2 class="hero__cta">Join our light-hearted learning community!</h2>
		<input type="radio" name="parent" id="parent" class="hero__radio">
		<label class="hero__button" for="parent" tabindex="0">I'm a Parent or Guardian</label>
		<input type="radio" name="volunteer" id="volunteer" class="hero__radio">
		<label class="hero__last-button" for="volunteer" tabindex="0">I'm a Volunteer</label>
	</form>
	<form class="hero__menu hero__menu_1 hidden">
		<h2 class="hero__cta">Which programs are you interested in?</h2>
		<fieldset class="hero__check-row">
			<input type="checkbox" name="tutoring" id="tutoring" class="hero__checkbox">
			<label class="hero__label" for="tutoring">1-on-1 Tutoring</label>
		</fieldset>
		<fieldset class="hero__check-row">
			<input type="checkbox" name="workshops" id="workshops" class="hero__checkbox">
			<label class="hero__label" for="workshops">Educational Workshops</label>
		</fieldset>
		<p class="hero__validation hero__validation_program invisible">Select a program to continue</p>
	</form>
	<form class="hero__menu hero__menu_2 hidden">
		<label for="username" class="hero__cta">What is your name?</label>
		<input type="text" required="true" name="username" id="username" class="hero__name-input" aria-required="true">
		<p class="hero__validation hero__validation_name invisible">Enter your name to continue</p>
	</form>
	<form class="hero__menu hero__menu_3 hidden">
		<label for="email" class="hero__cta">What is your email address?</label>
		<input type="text" required="true" name="email" id="email" class="hero__email-input" aria-required="true">
		<p class="hero__validation hero__validation_email invisible">Enter a valid email address to continue</p>
	</form>
	<form class="hero__menu hero__menu_4 hidden">
		<h2 class="hero__cta">Thanks for signing up! Check your email for more information!</h2>
	</form>
	<nav class="hero__button-row invisible">
		<button class="back-button">
			<i class="fas fa-caret-left back-button__icon"></i>
			<p class="back-button__text">Back</p>
		</button>
		<button class="continue-button">
			<p class="continue-button__text">Continue</p>
		</button>
	</nav>
</section>

<section class="programs">
	<h2 class="programs__heading">Fostering a Love of Learning</h2>

	<div class="width-fixer">
		<div class="tutoring">
			<h3 class="tutoring__heading">Free One-on-One Tutoring</h3>
			<p class="tutoring__intro-text">Meet with a volunteer tutor in-person or online and get individualized instruction in a fun, relaxed environment.</p>
			<a href="#" class="tutoring__card tutoring__card_tutors">
				<figure class="tutoring__image-slot">
					<img class="tutoring__card-image" src="dist/img/tutor.jpg" loading="lazy" alt="professional young adult leaning against wall">
				</figure>
				<h4 class="tutoring__card-heading">Tutors</h4>
			</a>
			<a href="#" class="tutoring__card tutoring__card_grades">
				<figure class="tutoring__image-slot">
					<img class="tutoring__card-image" src="dist/img/grades.jpg" loading="lazy" alt="kids of different ages">
				</figure>
				<p class="tutoring__card-heading">Grades 4-10:<span class="tutoring__card-text"> Get individualized support for academics, test prep, enrichment, and learning differences.</span></p>
			</a>
			<a href="#" class="tutoring__card tutoring__card_schedule">
				<figure class="tutoring__image-slot">
					<img class="tutoring__card-image" src="dist/img/student.jpg" loading="lazy" alt="happy student raising hand">
				</figure>
				<h4 class="tutoring__card-heading">Schedule</h4>
			</a>
			<a class="tutoring__button" href="#">Learn more about Tutoring</a>
		</div>
	</div>
	
	<div class="width-fixer">
		<div class="workshops">
			<h3 class="workshops__heading">Free Educational Workshops</h3>
			<p class="workshops__intro-text">Led by experts in a variety of topics, our free workshops offer students in grades 4-10 a fun and engaging way to learn.</p>
			<a href="#" class="workshops__card workshops__card_topics">
				<figure class="workshops__image-slot">
					<img class="workshops__card-image" src="dist/img/topics.jpg" loading="lazy" alt="cans of paint lined up on shelves">
				</figure>
				<h4 class="workshops__card-heading">Topics</h4>
			</a>
			<a href="#" class="workshops__card workshops__card_hands-on">
				<figure class="workshops__image-slot">
					<img class="workshops__card-image" src="dist/img/hands_on.jpg" loading="lazy" alt="kids with latex gloves gathered around a teacher holding a sheep's brain">
				</figure>
				<p class="workshops__card-heading">Hands on Learning:<span class="workshops__card-text workshops__card-text"> Our workshops ignite passion for a topic that follows students far beyond the end of the session.</span></p>
			</a>
			<a href="#" class="workshops__card workshops__card_online">
				<figure class="workshops__image-slot">
					<img class="workshops__card-image" src="dist/img/online.jpg" loading="lazy" alt="boy in front of laptop with colorful supplies">
				</figure>
				<h4 class="workshops__card-heading">Online Workshops</h4>
			</a>
			<a class="workshops__button" href="#">Learn more about Workshops</a>
		</div>
	</div>
	
	<div class="width-fixer">
		<div class="games">
			<h3 class="games__heading">Games Raise Grades</h3>
			<p class="games__intro-text">Mind Bubble's board game library provides opportunities for students to build relationships and think critically while having fun!</p>
			<a href="#" class="games__card games__card_games">
				<figure class="games__image-slot">
					<img class="games__card-image" src="dist/img/games.jpg" loading="lazy" alt="board games set out on a table">
				</figure>
				<h4 class="games__card-heading">Games</h4>
			</a>
			<a href="#" class="games__card games__card_community">
				<figure class="games__image-slot">
					<img class="games__card-image" src="dist/img/community.jpg" loading="lazy" alt="people at a table playing a board game">
				</figure>
				<p class="games__card-heading">A Light-Hearted Community:<span class="games__card-text games__card-text"> Mind Bubble is more than a tutoring company, it's a light-hearted learning community where students build warm relationships while having fun.</span></p>
			</a>
			<a href="#" class="games__card games__card_events">
				<figure class="games__image-slot">
					<img class="games__card-image" src="dist/img/events.jpg" loading="lazy" alt="people sitting at a table with colorful balloons">
				</figure>
				<h4 class="games__card-heading">Special Events</h4>
			</a>
			<a class="games__button" href="#">Learn more about Games</a>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>

<script src="dist/js/preloader.js"></script>
<script src="dist/js/nav-fixer.js"></script>
<script src="dist/js/menu-toggle.js"></script>
<script src="dist/js/hero-menu.js"></script>

<?php include('closing.php'); ?>