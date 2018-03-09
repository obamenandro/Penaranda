<?= $this->Session->flash(); ?>
<section class="showcase">
	<div class="container">
		<h1 class="showcase__highlight">Peñaranda Nueva Ecija</h1>
		<p class="showcase__paragraph">Peñaranda Budang Ganda!</p>
	</div>
</section>

<section class="newsletter">
	<div class="container">
		<h2 class="newsletter__left"> Welcome to Peñaranda Website.
            <span class="newsletter__highlight">See the beautiful of our Place! </span>
        </h2>
	</div>
</section>

<section class="boxes">
	<div class="container">
        <div class="boxes__title"> 
            <h2>Mayor's Project</h2>
        </div>
        <?php foreach($projects as $project): ?>
        <div class="boxes__list">
			<div class="boxes__image-container">
				<img class="boxes__list-image" src="<?= h($project['Project']['image']) ?>">
			</div>
			<h3 class="boxes__list-h3"><?= h($project['Project']['title']) ?></h3>
			<p class="boxes__list-paragraph"><?= h($project['Project']['description']) ?></p>
		</div>
		<?php endforeach; ?>
	</div>
</section>

<section class="newsletter">
	<div class="container">
		<h2 class="newsletter__center">Peñaranda Budang Ganda</h2>
	</div>
</section>

<section class="boxes boxes--expectation">
	<div class="container">
		<div class="boxes__image-wrapper">
            <img class="boxes__image-info" src="images/events/6.jpg">
        </div>
        <div class="boxes__image-description">
            <div class="boxes__image-title">
                <h2>What to expect from Peñaranda Nueva Ecija?</h2>
            </div>
            <div class="boxes__list-offer">
                <p class="boxes__list-paragraph">We offer a good quality service for all business</p>
                <p class="boxes__list-paragraph">There are many resorts from different places here in our place</p>
                <p class="boxes__list-paragraph">You can go in our Irrigation and Beautiful sightings</p>
                <p class="boxes__list-paragraph">Go in our Mini Zoo</p>
            </div>
		</div>
	</div>
</section>

<section class="newsletter">
	<div class="container">
		<h2 class="newsletter__center">Feedback and Suggestions</h2>
	</div>
</section>

<div class="feedback">
	<div class="container">
			<?= $this->Form->create('Comment', [
				'type' => 'POST',
				'url'  => '/tops/comment/',
				'class' => "feedback__form"
			]); ?>
			<div class="feedback__form-list">
				<label class="feedback__label">Name:<span class="feedback__required">*<span></label>
				<?=
                    $this->Form->input('name', [
                        'type'     => 'text',
                        'div'      => false,
                        'label'    => false,
                        'required' => false,
                        'error'    => false,
                        'class'    => 'feedback__textbox'
                    ]);
                ?>
			</div>
			<div class="feedback__form-list">
				<label class="feedback__label">Message:</label>
				<?=
                    $this->Form->input('comment', [
                        'type'     => 'textarea',
                        'div'      => false,
                        'label'    => false,
                        'required' => false,
                        'error'    => false,
                        'class'    => 'feedback__textarea'
                    ]);
                ?>
				<span class="feedback__form-error"><?php echo __("you've reached 200 characters")?></span>
			</div>
			<?= $this->Form->submit('Submit' , ['class' => 'feedback__submit']); ?>
			<?= $this->Form->end(); ?>

		<div class="feedback__message">
			<ul class="feedback__message-list">
				<?php foreach($comments as $comment): ?>
				<li class="feedback__message-item">
					<span class="feedback__message-name"><?= $comment['Comment']['name'] ?></span>
					<span class="feedback__message-date"><?= date('Y-m-d', strtotime($comment['Comment']['created'])) ?></span>
					<p class="feedback__message-result"><?= h($comment['Comment']['comment']) ?></p>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>

<?= $this->element('gototop'); ?>

<script>
	if ( $(window).width() > 767 ) {
		window.sr = ScrollReveal();
		sr.reveal('.boxes', { duration: 2000 }, 50);
		sr.reveal('.boxes--expectation', { duration: 2000 }, 50);
	}

	$('.feedback__textarea').keyup(function(e){
		var countLength = $(this).val().length;
		if ( countLength >= 200 ) {
			$('.feedback__form-error').show();
			$(this).val($(this).val().substring(0, 200));
		}
		else {
			$('.feedback__form-error').hide();
		}
	})
</script>