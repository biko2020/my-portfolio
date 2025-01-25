<header>
  <div class="header-container">
    <div class="top-bar-container">
      <div class="row">
        <div class="col-xs-12 header-top">
          <ul class="list-inline info-list">
            <li>
              <a href="tel:&#43;&#50;&#49;&#50;&#54;&#54;&#51;&#56;&#50;&#56;&#52;&#48;&#53;">
                <img src="https://cdn-icons-png.flaticon.com/512/724/724664.png" alt="Phone" width="21" height="21">
                &nbsp;
                &#43;&#50;&#49;&#50;&#54;&#54;&#51;&#56;&#50;&#56;&#52;&#48;&#53;
              </a>
            </li>
            <li>
              <a
                href="mailto:&#97;&#105;&#116;&#111;&#117;&#102;&#107;&#105;&#114;&#98;&#114;&#97;&#104;&#105;&#109;&#97;&#98;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;">
                <img src="https://cdn-icons-png.flaticon.com/512/561/561127.png" alt="Envelope" width="21" height="21"
                  style="filter: invert(100%);">
                &nbsp;
                &#97;&#105;&#116;&#111;&#117;&#102;&#107;&#105;&#114;&#98;&#114;&#97;&#104;&#105;&#109;&#97;&#98;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;
              </a>
            </li>
          </ul>
          <div id="social-links">
            <a href="https://www.linkedin.com/in/brahim-aitoufkir-74506021a" target="_blank">
              <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn Profile" width="21"
                height="21">
            </a>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="logo">
        <a href="/">
          <img src="/<?php echo $img_data['picture']; ?>" alt="AIT OUFKIR BRAHIM" width="50" height="50" />
        </a>
      </div>
      <button id="menu-toggle" class="menu-toggle" aria-label="Toggle Menu">
        <span class="hamburger-icon"></span>
      </button>
      <ul id="menu" class="nav-menu">
        <li><a href="/#services">
            <?php echo $lang_data['menu_services']; ?>
          </a></li>
        <li><a href="/#skills">
            <?php echo $lang_data['menu_skills']; ?>
          </a></li>
        <li><a href="/#portfolio">
            <?php echo $lang_data['menu_portfolio']; ?>
          </a></li>
        <li><a href="/#about-me">
            <?php echo $lang_data['menu_about']; ?>
          </a></li>
        <li><a href="/#contact">
            <?php echo $lang_data['menu_contact']; ?>
          </a></li>
      </ul>
      <div class="language-switcher">
        <button id="language-toggle" aria-label="Toggle Language">
          <span id="current-lang">
            <?php echo strtoupper($lang); ?>
          </span>
          <i class="arrow-icon"></i>
        </button>
        <ul id="language-options" class="hidden">
          <?php if ($lang !== 'fr'): ?>
          <li><a href="?lang=fr">FR</a></li>
          <?php endif; ?>
          <?php if ($lang !== 'en'): ?>
          <li><a href="?lang=en">EN</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </nav>
  </div>
</header>
 