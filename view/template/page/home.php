<?php Response::setMetaTitle(__('title.home')) ?>
<?php Response::setMetaDescription(__('description.home')) ?>

<main class="home">
  <section class="home__hero">
    <div class="inner-wrap">
      <aside class="home__cta">
        <h1>Experience<br/>Content Freedom</h1>

        <div>
          <?php echo View::render('download/_downloadButton', ['buttonStyle' => 'primary'])?>
          <a href="/get?showall=1" class="button--link">show all platforms</a>
        </div>
      </aside>

      <figure class="home__preview">
        <a href="/get">
          <img alt="Picture of LBRY Browser" src="https://spee.ch/7/home-demo.gif"/>
        </a>
      </figure>
    </div>
  </section>

  <section class="home__callout">
    <p>LBRY is a free, open, and community-run digital marketplace.</p>
    <p><strong>You</strong> own your data. <strong>You</strong> control the network. Indeed, you <em>are</em> the network.</p>
  </section>

  <section class="home__sites">
    <div class="inner-wrap">
      <aside class="home__site site-tech">
        <h3>😎<br/>LBRY.tech</h3>
        <p>Curious about the underlying technology? Maybe you have ideas for features to add yourself!</p>
        <a href="https://lbry.tech" class="button--inverse">Enter lbry.tech</a>
      </aside>

      <aside class="home__site site-org">
        <h3>🥰<br/>LBRY.org</h3>
        <p>Have an awesome idea you want funded? Or a community project you would like help with?</p>
        <a href="https://lbry.org" class="button--inverse">Join us at lbry.org</a>
      </aside>
    </div>
  </section>
</main>
