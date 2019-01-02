<?php if (!isset($showHeader) || $showHeader): ?>
  <?php Response::setMetaDescription('description.press') ?>
  <?php NavActions::setNavUri('/learn') ?>
  <?php echo View::render('nav/_header', ['isDark' => false]) ?>
<?php endif ?>
<main>
  <div class="content content-light markdown">
    <h1>{{press.title}}</h1>
    <p>For a current press-kit, please contact:</p>

    <?php echo View::render('content/_bio', ['person' => 'brinck-slattery']) ?>
  </div>
</main>

<?php echo View::render('nav/_footer') ?>
