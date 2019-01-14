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
          <li>Community</li>

          <div class="header__navigation-children-wrap">
            <ul class="header__navigation-children inner-wrap">
              <li class="flex-half">
                <a href="/get">
                  <strong>Use LBRY</strong>
                  <span>Here is a short blurb about this link</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>Tour</strong>
                  <span>Have questions about publishing on the LBRY network? Look no further</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>FAQ / Support</strong>
                  <span>Here is a short blurb about this link</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>News</strong>
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
                  <strong>Chat</strong>
                  <span>Here is a short blurb about this link</span>
                </a>
              </li>

              <li class="flex-full">
                <strong>Social</strong>
                <a href="">Discord</a>
                <a href="">Facebook</a>
                <a href="">GitHub</a>
                <a href="">Instagram</a>
                <a href="">Reddit</a>
                <a href="">Telegram</a>
                <a href="">Twitter</a>
              </li>
            </ul>
          </div>
        </ul>

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
                  <strong>Creator Tour</strong>
                  <span>Here is a short blurb about this link</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>Creator FAQ</strong>
                  <span>Here is a short blurb about this link</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>Makers</strong>
                  <span>THREE-DEEEEE</span>
                </a>
              </li>

              <li class="flex-full">
                <a href="">
                  <strong>Fund a Project</strong>
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
              <li class="flex-half">
                <a href="">
                  <strong>Team / About</strong>
                  <span>Here is a short blurb about this link</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>Credit Reports</strong>
                  <span>Here is a short blurb about this link</span>
                </a>
              </li>

              <li class="flex-full">
                <a href="">
                  <strong>Join Us</strong>
                  <span>Here is a short blurb about this link</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>Contact</strong>
                  <span>Here is a short blurb about this link</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>Choice Blog Post #1</strong>
                  <span>Here is a short blurb about this link</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>Choice Blog Post #2</strong>
                  <span>Here is a short blurb about this link</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>Choice Blog Post #3</strong>
                  <span>Here is a short blurb about this link</span>
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
                  <strong>GitHub</strong>
                  <span>Here is a short blurb about this link</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>Forum</strong>
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
    </div>
  </header>
<?php endif ?>
