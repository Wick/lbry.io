<?php Response::setMetaDescription(__('description.join')) ?>
<?php Response::setMetaTitle(__('title.join')) ?>

<main class="ancillary">
  <section class="hero">
    <div class="inner-wrap">
      <div class="hero-content text-center">
        <h1 class="cover-title">Join Our List for LBRY Updates</h1>
      </div>
    </div>
  </section>

  <section>
    <div class="inner-wrap">
      <h3>Enter your email below</h3>

      <?php echo View::render('mail/_subscribeForm', [
        'tag' => 'news',
        'submitLabel' => 'Sign me up',
        'hideDisclaimer' => true,
        'largeInput' => true,
        'btnClass' => 'btn-alt btn-large'
      ]) ?>
    </div>
  </section>
</main>
