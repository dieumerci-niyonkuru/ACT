<?php include 'header.php' ?>
  <!-- Start main-content -->
  <div class="main-content bg-lighter">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/backgrounds/graduation-2nd-banner.jpg">
      <div class="container pt-70 pb-20">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white text-center">Gallery</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="index">Home</a></li>
                <li><a href="news">News</a></li>
                <li class="active text-gray-silver">Gallery</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Gallery -->
    <section>
      <div class="container pt-60 pb-60">

        <div class="section-title text-center mb-30">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h3 class="text-uppercase mt-0">Life at <span class="text-theme-color-2">ACT</span></h3>
              <p>Moments from our graduation ceremonies, chapel worship, classrooms and campus.
                Select a category or click any photo to view it full size.</p>
            </div>
          </div>
        </div>

        <!-- Filter -->
        <div class="row">
          <div class="col-md-12">
            <ul class="act-gallery-filter text-center">
              <li><button type="button" class="active" data-filter="all">All</button></li>
              <li><button type="button" data-filter="graduation">Graduation</button></li>
              <li><button type="button" data-filter="worship">Worship &amp; Chapel</button></li>
              <li><button type="button" data-filter="campus">Campus &amp; Facilities</button></li>
              <li><button type="button" data-filter="student-life">Student Life</button></li>
            </ul>
          </div>
        </div>

        <!-- Grid -->
        <div class="row">
          <div class="col-md-12">
            <div class="act-gallery-grid" data-lightbox="gallery">

              <?php
              $act_gallery = [
                  // [file, category, caption]
                  ['images/backgrounds/graduation-2nd-ceremony.jpg',        'graduation',   '2nd Graduation Ceremony'],
                  ['images/blog/graduation-graduands.jpg',      'graduation',   'Graduands at the ceremony'],
                  ['images/blog/graduation-address.jpg',      'graduation',   'Address in academic regalia'],
                  ['images/backgrounds/ben02154.jpg',        'graduation',   'Congratulations, Class of 2024'],
                  ['images/act/benny198.jpg',       'graduation',   'Graduation day'],
                  ['images/act/benny200.jpg',       'graduation',   'Graduation day'],
                  ['images/act/benny201.jpg',       'graduation',   'Graduation day'],
                  ['images/act/benny203.jpg',       'graduation',   'Graduation day'],
                  ['images/act/benny204.jpg',       'graduation',   'Graduation day'],
                  ['images/act/benny206.jpg',       'graduation',   'Graduation day'],
                  ['images/act/benny207.jpg',       'graduation',   'Graduation day'],
                  ['images/act/benny208.jpg',       'graduation',   'Graduation day'],
                  ['images/act/benny210.jpg',       'graduation',   'Graduation day'],
                  ['images/act/benny211.jpg',       'graduation',   'Graduation day'],
                  ['images/act/benny213.jpg',       'graduation',   'Graduation day'],
                  ['images/act/benny215.jpg',       'graduation',   'Graduation day'],

                  ['images/backgrounds/chapel-worship.jpg',          'worship',      'Chapel worship'],
                  ['images/backgrounds/dm4t7696.jpg',        'worship',      'Staff devotions'],
                  ['images/backgrounds/dm4t7705.jpg',        'worship',      'Staff devotions'],
                  ['images/backgrounds/dm4t7709.jpg',        'worship',      'Staff prayer day'],

                  ['images/gallery/computer-lab.jpg',   'campus',       'ACT computer laboratory'],
                  ['images/gallery/w9a4397.jpg',   'campus',       'On campus'],
                  ['images/gallery/w9a4527.jpg',   'campus',       'On campus'],
                  ['images/gallery/w9a4555.jpg',   'campus',       'On campus'],
                  ['images/gallery/w9a4666.jpg',   'campus',       'On campus'],
                  ['images/act/library-interior.jpg',        'campus',       'ACT library'],
                  ['images/backgrounds/bus.jpg',             'campus',       'College transport'],
                  ['images/backgrounds/coffe.jpg',           'campus',       'Campus cafeteria'],
                  ['images/backgrounds/printer.jpg',         'campus',       'Student services'],

                  ['images/act/students-group.jpeg',    'student-life', 'ACT students'],
                  ['images/blog/class-2024-retreat.jpg',      'student-life', 'Class of 2024 retreat'],
                  ['images/backgrounds/counceling.jpg',      'student-life', 'Counselling programme'],
              ];

              foreach ($act_gallery as $item) {
                  [$src, $cat, $caption] = $item;
                  $esc = htmlspecialchars($src, ENT_QUOTES, 'UTF-8');
                  $alt = htmlspecialchars($caption, ENT_QUOTES, 'UTF-8');
                  ?>
                  <div class="act-gallery-item" data-category="<?php echo $cat; ?>">
                    <a class="act-gallery-thumb" href="<?php echo $esc; ?>" data-lightbox-gallery="gallery" title="<?php echo $alt; ?>" aria-label="View larger: <?php echo $alt; ?>">
                      <img alt="<?php echo $alt; ?>" src="<?php echo $esc; ?>" loading="lazy">
                      <span class="act-gallery-zoom" aria-hidden="true"><i class="fa fa-search-plus"></i></span>
                      <span class="act-gallery-caption"><?php echo $alt; ?></span>
                    </a>
                  </div>
                  <?php
              }
              ?>

            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- Section: CTA -->
    <section class="bg-white">
      <div class="container pt-40 pb-40">
        <div class="row">
          <div class="col-md-12 text-center">
            <h4 class="mt-0 mb-15">Want to see more of ACT?</h4>
            <a class="btn btn-theme-colored btn-sm mr-10" href="news">Read Our News</a>
            <a class="btn btn-default btn-sm mr-10" href="life">Campus Life</a>
            <a class="btn btn-default btn-sm" href="graduations">Graduation</a>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end main-content -->

  <script>
    (function () {
      var filters = document.querySelectorAll('.act-gallery-filter button');
      var items = document.querySelectorAll('.act-gallery-item');
      if (!filters.length || !items.length) { return; }

      Array.prototype.forEach.call(filters, function (btn) {
        btn.addEventListener('click', function () {
          var want = btn.getAttribute('data-filter');

          Array.prototype.forEach.call(filters, function (b) { b.classList.remove('active'); });
          btn.classList.add('active');

          Array.prototype.forEach.call(items, function (item) {
            var show = (want === 'all') || (item.getAttribute('data-category') === want);
            item.hidden = !show;
          });
        });
      });
    })();
  </script>
<?php include 'footer.php' ?>
