<?php Response::setMetaDescription(__('description.news')) ?>

<main class="news ancillary">
  <section class="hero --news" style="background-image: url(/img/teamcropped.jpg)">
    <div class="inner-wrap">
      <div class="hero-content text-center">
        <h1 class="cover-title">{{news.desk}}</h1>
        <h2 class="cover-subtitle">{{news.musings}}</h2>
      </div>
    </div>
  </section>

  <section>
    <div class="inner-wrap">
      <ul class="news-items">
        <?php foreach ($posts as $post): ?>
        <li class="news-item">
          <h3>
            <a href="<?php echo $post->getRelativeUrl() ?>" class="link-primary">
              <?php echo $post->getTitle() ?>
            </a>
          </h3>

          <small class="meta" title="<?php echo $post->getDate()->format('F jS, Y') ?>">
            <?php echo $post->getDate()->format('M j, Y') ?> &middot;
            <?php echo $post->getAuthorName() ?>
          </small>
        </li>
        <?php endforeach ?>
      </ul>
    </div>
  </section>
</main>
