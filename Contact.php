<?php include 'header.php' ?>
  <!-- Start main-content -->
  <div class="main-content bg-lighter">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/backgrounds/ben02154.jpg">
      <div class="container pt-70 pb-20">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white text-center">Contact Us</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="index">Home</a></li>
                <li class="active text-gray-silver">Contact Us</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Quick contact cards -->
    <section class="bg-white">
      <div class="container pt-50 pb-20">
        <div class="row">

          <div class="col-sm-6 col-md-4 mb-30">
            <div class="act-contact-card">
              <span class="act-contact-icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
              <h4>Call Us</h4>
              <a href="tel:+250792863935">+250 792 863 935</a>
              <a href="tel:+250783490776">+250 783 490 776</a>
              <p class="act-contact-note">General enquiries &amp; admissions</p>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 mb-30">
            <div class="act-contact-card">
              <span class="act-contact-icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
              <h4>Email Us</h4>
              <a href="mailto:info@actrwanda.org">info@actrwanda.org</a>
              <a href="mailto:admissions@actrwanda.org">admissions@actrwanda.org</a>
              <p class="act-contact-note">We reply within two working days</p>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 mb-30">
            <div class="act-contact-card">
              <span class="act-contact-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
              <h4>Visit Us</h4>
              <address>ACT Main Campus<br>KK 15 Rd, Kagarama<br>Kigali, Rwanda</address>
              <a class="act-contact-link" href="https://www.google.com/maps/search/?api=1&amp;query=Africa+College+of+Theology+Kigali" target="_blank" rel="noopener">Get directions <span aria-hidden="true">&rarr;</span></a>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Section: Form + map -->
    <section>
      <div class="container pt-50 pb-50">
        <div class="row">

          <div class="col-md-7 mb-md-40">
            <h3 class="text-uppercase line-bottom mt-0">Send Us a <span class="text-theme-color-2">Message</span></h3>
            <p class="mb-25">Tell us how we can help &mdash; whether you are applying, looking for a programme,
              or need to reach a department.</p>

            <form action="sendemail.php" class="contact-form act-contact-form" id="cont_form" method="POST" novalidate>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="name">Name <span class="act-required">*</span></label>
                    <input name="name" class="form-control" type="text" id="name" placeholder="Your full name" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="email">Email <span class="act-required">*</span></label>
                    <input name="email" class="form-control" id="email" type="email" placeholder="you@example.com" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="subject">Subject <span class="act-required">*</span></label>
                    <input name="subject" class="form-control" type="text" id="subject" placeholder="What is this about?" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="phone">Phone <small class="text-gray">(optional)</small></label>
                    <input name="phone" class="form-control" type="tel" id="phone" placeholder="+250 7xx xxx xxx">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="message">Message <span class="act-required">*</span></label>
                <textarea name="comment" class="form-control" rows="6" id="message" placeholder="How can we help?" required></textarea>
              </div>

              <!-- Spam trap: left empty by real visitors -->
              <div class="act-hp" aria-hidden="true">
                <label for="form_botcheck">Leave this field empty</label>
                <input name="form_botcheck" id="form_botcheck" type="text" tabindex="-1" autocomplete="off">
              </div>

              <div id="form-result" class="act-form-result" role="status" hidden></div>

              <button type="submit" id="submit_btn" class="btn btn-flat btn-theme-colored text-uppercase mt-10">Send Your Message</button>
            </form>
          </div>

          <div class="col-md-5">
            <h3 class="text-uppercase line-bottom mt-0">Find <span class="text-theme-color-2">Us</span></h3>
            <div class="act-map-box mb-25">
              <a class="act-map-open" href="https://www.google.com/maps/search/?api=1&amp;query=Africa+College+of+Theology+Kigali" target="_blank" rel="noopener">
                Open in Maps <i class="fa fa-external-link" aria-hidden="true"></i>
              </a>
              <iframe
                title="Map showing Africa College of Theology, Kigali, Rwanda"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.412184234161!2d30.097372!3d-1.9899537999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca626e50f787d%3A0x3fbcc6abaf11b388!2sAfrica%20New%20Life!5e0!3m2!1sen!2srw!4v1736922083250!5m2!1sen!2srw"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen></iframe>
            </div>

            <h4 class="mt-0 mb-15">Online Services</h4>
            <div class="services-list">
              <ul class="list list-border angle-double-right">
                <li><a href="https://mis.act.ac.rw/apply" target="_blank" rel="noopener">Apply Online</a></li>
                <li><a href="https://mis.act.ac.rw/auth" target="_blank" rel="noopener">Student Portal</a></li>
                <li><a href="request_form">Academic Request Forms</a></li>
                <li><a href="fees">Fees &amp; Requirements</a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Section: Departments -->
    <section class="bg-white">
      <div class="container pt-50 pb-50">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12">
              <h3 class="text-uppercase line-bottom mt-0">Reach the Right <span class="text-theme-color-2">Office</span></h3>
              <p>Contacting a department directly is usually the quickest way to get an answer.</p>
            </div>
          </div>
        </div>
        <div class="row">

          <div class="col-sm-6 col-md-4 mb-25">
            <div class="act-dept-card">
              <h4>Admissions</h4>
              <p>Applications, entry requirements and intakes.</p>
              <a href="mailto:admissions@actrwanda.org">admissions@actrwanda.org</a>
              <a href="tel:+250783490776">+250 783 490 776</a>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 mb-25">
            <div class="act-dept-card">
              <h4>General Enquiries</h4>
              <p>Anything else, or if you are unsure who to ask.</p>
              <a href="mailto:info@actrwanda.org">info@actrwanda.org</a>
              <a href="tel:+250792863935">+250 792 863 935</a>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 mb-25">
            <div class="act-dept-card">
              <h4>Principal's Office</h4>
              <p>Institutional matters and partnerships.</p>
              <a href="mailto:principal@actrwanda.org">principal@actrwanda.org</a>
              <a href="principal">Principal's welcome</a>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 mb-25">
            <div class="act-dept-card">
              <h4>Library</h4>
              <p>Catalogue, e-resources and study support.</p>
              <a href="mailto:library@actrwanda.org">library@actrwanda.org</a>
              <a href="library">Library services</a>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 mb-25">
            <div class="act-dept-card">
              <h4>Chaplaincy &amp; Counselling</h4>
              <p>Pastoral care, counselling and outreach.</p>
              <a href="mailto:chaplain@actrwanda.org">chaplain@actrwanda.org</a>
              <a href="life">Campus life</a>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 mb-25">
            <div class="act-dept-card">
              <h4>Programmes &amp; Materials</h4>
              <p>Class materials and programme documents.</p>
              <a href="mailto:pod@actrwanda.org">pod@actrwanda.org</a>
              <a href="MAT">Our programmes</a>
            </div>
          </div>

        </div>
      </div>
    </section>

  </div>
  <!-- end main-content -->

  <script>
    (function () {
      var form = document.getElementById('cont_form');
      if (!form) { return; }
      var btn = document.getElementById('submit_btn');
      var result = document.getElementById('form-result');

      function show(kind, text) {
        result.className = 'act-form-result act-form-result--' + kind;
        result.textContent = text;
        result.hidden = false;
      }

      form.addEventListener('submit', function (e) {
        e.preventDefault();

        if (!form.checkValidity()) {
          show('error', 'Please complete all required fields with a valid email address.');
          return;
        }

        var original = btn.textContent;
        btn.disabled = true;
        btn.textContent = 'Sending...';
        result.hidden = true;

        fetch(form.getAttribute('action'), {
          method: 'POST',
          body: new FormData(form),
          headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
          .then(function (r) { return r.json(); })
          .then(function (data) {
            show(data.status === 'success' ? 'success' : 'error', data.message);
            if (data.status === 'success') { form.reset(); }
          })
          .catch(function () {
            show('error', 'Sorry, something went wrong. Please email info@actrwanda.org directly.');
          })
          .then(function () {
            btn.disabled = false;
            btn.textContent = original;
          });
      });
    })();
  </script>
<?php include 'footer.php' ?>
