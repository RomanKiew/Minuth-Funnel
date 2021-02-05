<?php /* Template Name: Startseite */ get_header(); ?>

<section id="schritt1" class="funnel">
	<div class="wrapper">
		<i class="fas fa-times start"></i>
		<div class="" id="field1">
			<div class="_form-title">
				<h2>Beantworte wenige Fragen und hole Dir Dein individuells Design</h2>
			</div>
			<a onclick="slide(event)">
			<div class="button_dark next" onclick="slide(event)">
				<span>Weiter machen!</span>
			</div>
		</a>
		</div>

		<div class="element" id="field2">
			<div class="flex">
				<h2>Gib Deinen Namen ein.</h2>
				<div class="leiste">
					<input type="text" name="" value="">
					<i class="fas fa-chevron-right inner next" onclick="slide(event)"></i>
				</div>
				<span>Frage 1 von 6</span>
			</div>
		</div>

		<div class="element" id="field3">
			<div class="flex">
				<h2>Jetzt Deine E-Mail.</h2>
				<div class="leiste">
					<input type="text" name="" value="">
					<i class="fas fa-chevron-right inner next" onclick="slide(event)"></i>
				</div>
				<span>Frage 2 von 6</span>
			</div>
		</div>

		<div class="element" id="field4">
			<div class="flex">
				<h2>In welcher Branche bist Du tätig?</h2>
				<div class="leiste">
					<input type="text" name="" value="">
					<i class="fas fa-chevron-right inner next" onclick="slide(event)"></i>
				</div>
				<span>Frage 3 von 6</span>
			</div>
		</div>

		<div class="element" id="field5">
			<div class="flex">
				<h2>Wie heißt Dein Unternehmen?</h2>
				<div class="leiste">
					<input type="text" name="" value="">
					<i class="fas fa-chevron-right inner next" onclick="slide(event)"></i>
				</div>
				<span>Frage 4 von 6</span>
			</div>
		</div>

		<div class="element" id="field6">
			<div class="flex">
				<h2>Hast Du/Dein Unternehmen schon eine Webseite?</h2>
				<div class="leiste">
					<input type="text" name="" value="">
					<i class="fas fa-chevron-right inner next" onclick="slide(event)"></i>
				</div>
				<span>Frage 5 von 6</span>
			</div>
		</div>

		<div class="element" id="field7">
			<div class="flex">
				<h2>Unter welcher Nummer können wir Dich erreichen?</h2>
				<div class="leiste">
					<input type="text" name="" value="">
					<i class="fas fa-chevron-right inner next" onclick="slide(event)"></i>
				</div>
				<span>Frage 6 von 6</span>
			</div>
		</div>

	</div>
</section>

<section id="header">
	<div class="wrapper">
		<div class="absolute heading">
			<h1>Investiere jetzt in Deine Zukunft!</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
				aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<a href="#schritt1" class="button start">
				<span>Button</span>
			</a>
		</div>
	</div>
</section>

<section id="about">
	<div class="bar">
		<div class="wrapper">
			<div class="absolute img">

			</div>
			<div class="absolute about">
				<h2>Deine Ziele machen uns besonders</h2>
				<div class="indent">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
						aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<a href="#" class="button_dark start">
						<span>Button</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="centered">
	<div class="absolute description">
		<h2>Und was macht dich so besonders?</h2>
		<div class="indent">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
				aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
</section>

<section id="portfolio">
	<div class="wrapper">
		<div class="portfolio">
			<h2>Lass uns gemeinsam etwas erschaffen</h2>
			<div class="indent">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
					aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>
	<div class="portfolio-img absolute"></div>
</section>

<?php get_footer(); ?>
