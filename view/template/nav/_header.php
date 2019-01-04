<?php if (!defined('HEADER_RENDERED')): ?>
  <?php define('HEADER_RENDERED', 1) ?>
  <?php extract([
    'isDark' => false,
    'isAbsolute' => false,
    'isLogoOnly' => false,
    'isBordered' => true
  ], EXTR_SKIP) ?>
  <header class="header<?php echo $isDark ? ' header--dark' : ' header--light' ?>">
    <div class="inner-wrap">
      <a href="/" class="header__logo">LBRY</a>

      <nav class="header__navigation">
        <ul class="header__navigation-parent">
          <li>Creators</li>

          <div class="header__navigation-children-wrap">
            <ul class="header__navigation-children inner-wrap">
              <li class="flex-half">
                <a href="">
                  <strong>YouTube Partner Program</strong>
                  <span>Mirror or move your awesome content to the LBRY network</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>Publisher FAQ</strong>
                  <span>Have questions about publishing on the LBRY network? Look no further</span>
                </a>
              </li>

              <li class="flex-full">
                <a href="">
                  <strong>3D Printing Program</strong>
                  <span>THREE-DEEEEE</span>
                </a>
              </li>
            </ul>
          </div>
        </ul>

        <ul class="header__navigation-parent">
          <li>Developers</li>

          <div class="header__navigation-children-wrap">
            <ul class="header__navigation-children inner-wrap">
              <li class="flex-half">
                <a href="">
                  <strong>Source Code</strong>
                  <span>Here is a short blurb about this link</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>LBRY.tech</strong>
                  <span>Here is a short blurb about this link</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>Contributor's Guide</strong>
                  <span>Here is a short blurb about this link</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>LBRY Tech Forum</strong>
                  <span>Here is a short blurb about this link</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>Discord</strong>
                  <span>Here is a short blurb about this link</span>
                </a>
              </li>
            </ul>
          </div>
        </ul>

        <ul class="header__navigation-parent">
          <li>Company</li>

          <div class="header__navigation-children-wrap">
            <ul class="header__navigation-children inner-wrap">
              <li class="flex-full">
                <a href="">
                  <strong>Latest News</strong>
                  <span>Here is a short blurb about this link</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>FAQ</strong>
                  <span>Here is a short blurb about this link</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>Blockchain Explorer</strong>
                  <span>Here is a short blurb about this link</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>Roadmap</strong>
                  <span>Here is a short blurb about this link</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>Team</strong>
                  <span>Here is a short blurb about this link</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>Credit Reports</strong>
                  <span>Here is a short blurb about this link</span>
                </a>
              </li>
            </ul>
          </div>
        </ul>
      </nav>

      <span class="header__download">
        <?php echo View::render('download/_downloadButton', ['buttonStyle' => 'primary'])?>
      </span>

      <!--/
      <?php if (!$isLogoOnly): ?>
        <div class="mobile header-navigation-mobile">
          <a href="javascript:;" data-action="toggle-class" data-for=".header" data-class="header-open">
            <span class="icon icon-bars"></span>
            <span class="icon icon-close"></span>
          </a>
        </div>
        <div class="fullscreen header-navigation-fullscreen">
          <nav class="control-group">
            <?php echo View::render('nav/_globalItems') ?>
          </nav>
        </div>
      <?php endif ?>
      /-->
    </div>
  </header>
<?php endif ?>
