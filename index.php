<?php include 'header.php'?>
  <style>
      .thumb1 {
    width: 200px; 
    height: 200px;
    overflow: hidden;
}

.thumb1 img {
    width: 100%;
    height: auto; 
    object-fit: cover; 
}
@media (max-width: 768px) {
  .gallery-item .thumb img {
    width: 100%;
    height: auto !important; 
  }
}

/* Improve Event Box */
.pricing.table-horizontal {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    overflow: hidden;
    transition: all 0.3s ease-in-out;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
}
.pricing.table-horizontal:hover {
    transform: translateY(-5px);
    box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.4);
}

/* Event Images - Hover Zoom */
.thumb img {
    transition: transform 0.3s ease-in-out;
    border-radius: 8px;
}
.thumb img:hover {
    transform: scale(1.05);
}

/* Call-to-Action Button Enhancements */
.btn-colored {
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    transition: all 0.3s ease-in-out;
    border-radius: 5px;
}
.btn-colored:hover {
    background: linear-gradient(45deg, #4a6329, #e02629);
    box-shadow: 0px 0px 15px rgba(224, 38, 41, 0.55);
    transform: scale(1.05);
}
/* Smooth Fade-in Animation */
/*.wow.fadeInRight, .wow.fadeInLeft {*/
/*    opacity: 0;*/
/*    transform: translateY(40px);*/
/*    transition: opacity 0.3s ease-out, transform 0.3s ease-out;*/
/*}*/
.wow.fadeInRight.animated, .wow.fadeInLeft.animated {
    opacity: 1;
    transform: translateY(0);
}

/* Video Section Styles */
.video-hero-section {
    position: relative;
    width: 100%;
    /* Sized to the copy rather than a fixed 650px, which left a large empty
       band above the heading. */
    min-height: 460px;
    padding: 70px 0;
    overflow: hidden;
    background: #000;
}

.video-hero-section video {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    transform: translate(-50%, -50%);
    object-fit: cover;
    z-index: 1;
}

/* Dark on the left where the copy sits, clear on the right so the footage shows. */
.video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, rgba(12, 20, 8, .88) 0%, rgba(12, 20, 8, .72) 38%, rgba(12, 20, 8, .28) 70%, rgba(12, 20, 8, .18) 100%);
    z-index: 2;
}

.video-content {
    position: relative;
    z-index: 3;
    color: #fff;
}

.video-content .container {
    max-width: 1170px;
}

.video-title {
    max-width: 17ch;
    margin: 0 0 18px;
    color: #fff;
    font-size: clamp(30px, 4.4vw, 52px);
    font-weight: 800;
    line-height: 1.12;
    letter-spacing: -.01em;
    text-shadow: 0 3px 18px rgba(0, 0, 0, .55);
}

.video-subtitle {
    display: inline-block;
    margin-bottom: 20px;
    padding: 12px 22px;
    border-left: 6px solid #e02629;
    border-radius: 0 6px 6px 0;
    background: #4a6329;
    color: #fff;
    font-size: clamp(17px, 2.1vw, 26px);
    font-weight: 700;
    line-height: 1.25;
    box-shadow: 0 10px 26px rgba(0, 0, 0, .32);
}

.video-description {
    max-width: 54ch;
    margin-bottom: 28px;
    color: #eef3e7;
    font-size: clamp(15px, 1.25vw, 17px);
    line-height: 1.65;
    text-shadow: 0 2px 10px rgba(0, 0, 0, .5);
}

.video-actions {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-wrap: wrap;
}

.video-actions .act-hero-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 48px;
    padding: 0 26px;
    border-radius: 999px;
    font-size: 14px;
    font-weight: 800;
    letter-spacing: .04em;
    text-transform: uppercase;
    white-space: nowrap;
    transition: transform .2s ease, background-color .2s ease, color .2s ease, border-color .2s ease, box-shadow .2s ease;
}

.video-actions .act-hero-btn--primary {
    border: 2px solid #e02629;
    background: #e02629;
    color: #fff;
    box-shadow: 0 12px 26px rgba(224, 38, 41, .34);
}

.video-actions .act-hero-btn--primary:hover,
.video-actions .act-hero-btn--primary:focus {
    border-color: #fff;
    background: #fff;
    color: #b91d20;
    transform: translateY(-2px);
    text-decoration: none;
}

.video-actions .act-hero-btn--ghost {
    border: 2px solid rgba(255, 255, 255, .8);
    background: rgba(255, 255, 255, .08);
    color: #fff;
}

.video-actions .act-hero-btn--ghost:hover,
.video-actions .act-hero-btn--ghost:focus {
    border-color: #8bd32b;
    background: #8bd32b;
    color: #1b2714;
    transform: translateY(-2px);
    text-decoration: none;
}

@media (max-width: 991px) {
    .video-hero-section {
        min-height: 400px;
        padding: 54px 0;
    }

    .video-overlay {
        background: linear-gradient(180deg, rgba(12, 20, 8, .62) 0%, rgba(12, 20, 8, .84) 100%);
    }

    .video-title {
        max-width: none;
    }
}

@media (max-width: 767px) {
    .video-hero-section {
        min-height: 340px;
        padding: 44px 0;
    }

    .video-actions .act-hero-btn {
        min-height: 42px;
        padding: 0 18px;
        font-size: 12.5px;
    }
}

  </style>
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home">
        
      <!-- Video Hero Section Start -->
      <div class="video-hero-section">
        <video autoplay muted loop>
          <source src="documents/act-promo-version-2.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        
        <div class="video-overlay"></div>
        
        <div class="video-content">
          <div class="container">
            <h1 class="video-title font-raleway">Welcome to Africa College of Theology</h1>
            <div class="video-subtitle font-raleway">For Accessible Theological Education</div>
            <p class="video-description">Training redemptive servant leaders for the Church in Africa and beyond &mdash;
              through accredited degrees, postgraduate diplomas and short courses.</p>
            <div class="video-actions">
              <a class="act-hero-btn act-hero-btn--primary" href="https://mis.act.ac.rw/apply" target="_blank" rel="noopener">Apply Now</a>
              <a class="act-hero-btn act-hero-btn--ghost" href="MAT">Explore Programmes</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Video Hero Section End -->

    </section>
    
    <!-- Section: Sevices -->
    <section class="act-intro-cards">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
              <img class="img-fullwidth" src="images/act/computer-lab.avif" alt="">
              <div class="bg-silver-light border-1px p-20 pt-0 pb-30 mb-sm-180" style="box-shadow: 0 5px 15px rgba(0,0,0,0.3); position: relative; z-index: 15;">
                <h4 class=" letter-space-1 mt-10">Online<span class="text-theme-color-2"> Learning</span></h4>
                <p>Studying online at our university is convenient and easy with the various resources and tools provided</p>
                <a href="https://elearning.act.ac.rw/" class="btn btn-sm btn-theme-colored">E-Learning</a>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
              <img class="img-fullwidth" src="images/act/ben00056.avif" alt="">
              <div class="bg-silver-light border-1px p-20 pt-0 pb-30 mb-sm-180" style="box-shadow: 0 5px 15px rgba(0,0,0,0.3); position: relative; z-index: 15;">
                    <h4 class="letter-space-1 mt-10">Our First <span class="text-theme-color-2"> Graduation</span></h4>
                <p> We ensure ou students meet all the requirements to their journey to be enjoyable and interesting</p>
                <a href="graduations" class="btn btn-sm btn-theme-colored">Read More!</a>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-0 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
              <img class="img-fullwidth" src="images/act/ben1640.avif" alt="">
              <div class="bg-silver-light border-1px p-20 pt-0 pb-30" style="box-shadow: 0 5px 15px rgba(0,0,0,0.3); position: relative; z-index: 15;">
                  <h4 class=" letter-space-1 mt-10">Our Student <span class="text-theme-color-2">ACT Life Experience</span></h4>
                <p>Experiencing new things in Africa College of Theology is important for personal<br> growth.</p>
                <a href="life" class="btn btn-sm btn-theme-colored">Read More!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
     <!-- Section: events -->
    <!-- Section: Highlights & Upcoming Event -->
    <section class="bg-lighter">
      <div class="container pt-60 pb-60">
        <div class="row">

          <div class="col-md-7 mb-sm-40">
            <h3 class="text-uppercase line-bottom mt-0">Graduation <span class="text-theme-color-2">Highlights</span></h3>
            <div class="act-video-frame">
              <video controls preload="none" poster="images/backgrounds/graduation-2nd-banner.jpg" class="img-fullwidth">
                <source src="documents/act-promo-version-2.mp4" type="video/mp4">
                Your browser does not support embedded video.
              </video>
            </div>
          </div>

          <div class="col-md-5">
            <h3 class="text-uppercase line-bottom mt-0">Upcoming <span class="text-theme-color-2">Event</span></h3>
            <div class="act-event-card">
              <img class="img-responsive img-fullwidth" src="images/graduation/graduation-3rd-ceremony-poster.jpeg" alt="ACT 3rd Graduation Ceremony poster">
              <div class="act-event-body">
                <h4 class="mt-0 mb-10">3rd Graduation Ceremony</h4>
                <p class="mb-10"><em>&ldquo;Redeemed to Redeem: The Mandate of a Servant Leader&rdquo;</em></p>
                <ul class="list-inline act-event-meta mb-15">
                  <li><i class="fa fa-calendar mr-5" aria-hidden="true"></i>14 August 2026</li>
                  <li><i class="fa fa-map-marker mr-5" aria-hidden="true"></i>Kagarama, Kigali</li>
                </ul>
                <a class="btn btn-theme-colored btn-sm" href="graduations">Learn More</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- Section: About -->
    <section id="about">
      <div class="container mt-0 pb-70 pt-0">
        <div class="section-content">
          <div class="row mt-10">
            <div class="col-sm-12 col-md-6 mb-sm-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <h3 class="text-uppercase mt-0">About <span class="text-theme-color-2"> Africa College of Theology </span></h3>
              <p class="mb-15">Africa College of Theology is an accredited theological institution in Kigali, Rwanda,
                training redemptive servant leaders for the Church and society.</p>
              <p class="mb-15">We offer graduate and undergraduate degrees, postgraduate diplomas and short courses &mdash;
                grounded in Scripture, strengthened by research, and shaped by personal mentorship from a
                dedicated faculty.</p>
              <a class="btn btn-colored btn-theme-colored btn-lg text-uppercase font-13 mt-0" href="mission">About ACT</a>
            </div>
            <div class="col-sm-12 col-md-6 mt-0 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="video-popup">                
                <a href="https://www.youtube.com/watch?v=pW1uVUg5wXM" data-lightbox-gallery="youtube-video" title="Video">
                  <img alt="" src="images/act/ben1575.avif" class="img-responsive img-fullwidth mt-10 ml-30 ml-xs-0 ml-sm-0">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Principal's Welcome -->
    <section class="act-principal">
      <div class="container pt-60 pb-60">
        <div class="row">
          <div class="col-md-12">
            <h3 class="text-uppercase line-bottom mt-0 mb-30">A Word From Our <span class="text-theme-color-2">Principal</span></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-5 mb-sm-30">
            <div class="act-principal-photo">
              <img class="img-responsive img-fullwidth" src="images/team/nathan-chiroma.jpg" alt="Prof. Nathan Chiroma, Principal of Africa College of Theology">
            </div>
            <h4 class="mt-15 mb-0">Prof. Nathan Chiroma</h4>
            <p class="text-theme-colored font-weight-600 mb-0">Principal</p>
          </div>
          <div class="col-md-8 col-sm-7">
            <p class="act-principal-lead">Welcome to Africa College of Theology, where Redemptive Servant Leaders Are Made!</p>
            <p>The Africa College of Theology is one of the leading theological institutions in Rwanda and in the
              region. We have the vision to train redemptive servant leaders for the church and society. Hence, we
              take seriously our responsibility to mentor our students and offer them an experience of spiritual,
              intellectual, pastoral, and redemptive servant leadership formation.</p>
            <p>Africa College of Theology is a place to learn, grow, discover, and become. As a redemptive learning
              community of students, scholars, and staff, we are on a journey together to discover our best selves,
              develop our skills and knowledge, grow our sense of purpose and faith, and be committed to grander
              service to the world around us.</p>
            <a class="btn btn-theme-colored btn-sm mt-10" href="principal">Read the Full Message</a>
          </div>
        </div>
      </div>
    </section>
   <!-- Divider: why choose us 1 -->
    <section class="divider parallax" data-bg-img="images/act/library-interior.jpg" data-parallax-ratio="0.7">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-md-8 col-md-offset-4">
            <div class="bg-white-transparent-9 pb-10 p-40">
              <h2 class="mb-20 mt-30 line-height-1 text-center text-uppercase">Why <span class="text-theme-color-2"> Choose ACT?</span></h2>
              <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="icon-box p-15 mb-0 mb-sm-0 mt-sm-0">
                      <span class="icon pull-left sm-pull-none flip">
                      <i class="fa fa-building text-theme-colored font-50"></i>
                      </span>
                      <div class="ml-70 ml-sm-0">
                        <h4 class="icon-box-title mt-15 mb-5">Comprehensive Theological Education</h4>
                        <p>ACT offers a robust curriculum that blends academic rigor with practical application, ensuring that students not only gain profound theological insights but also develop the leadership skills necessary for effective ministry.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="icon-box p-15 mb-0 mb-sm-0 mt-sm-0">
                      <span class="icon pull-left sm-pull-none flip">
                      <i class="fa fa-users text-theme-colored font-50"></i>
                      </span>
                      <div class="ml-70 ml-sm-0">
                        <h4 class="icon-box-title mt-15 mb-5">Accessible & Inclusive Learning</h4>
                        <p>We are committed to making high-quality theological education accessible to all. Through affordable tuition, and flexible learning options, ACT ensures that financial barriers do not prevent passionate individuals from receiving a transformative education. </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="icon-box p-15 mb-30 mb-sm-0 mt-sm-0">
                      <span class="icon pull-left sm-pull-none flip">
                      <i class="fa fa-book text-theme-colored font-50"></i>
                      </span>
                      <div class="ml-70 ml-sm-0">
                        <h4 class="icon-box-title mt-15 mb-5">Experienced Faculty and Mentorship</h4>
                        <p>At ACT, you’ll learn from faculty members who are experienced scholars, practitioners, and mentors with a deep understanding of both the Bible and the needs of modern-day ministry. </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="icon-box p-15 mb-30 mb-sm-0 mt-sm-0">
                      <span class="icon pull-left sm-pull-none flip">
                      <i class="fa fa-money text-theme-colored font-50"></i>
                      </span>
                      <div class="ml-70 ml-sm-0">
                        <h4 class="icon-box-title mt-15 mb-5">Community and Network Building</h4>
                        <p>ACT provides more than just education; it’s a community. As a student here, you’ll be part of a vibrant, supportive network of fellow students, alumni, and faculty.</p>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: courses  -->

    <!-- Section: Gallery -->
    <!-- Section: Gallery teaser -->
    <section id="gallery" class="bg-lighter">
      <div class="container pt-60 pb-60">
        <div class="section-title">
          <div class="row">
            <div class="col-md-8">
              <h3 class="text-uppercase line-bottom mt-0">Photo <span class="text-theme-color-2">Gallery</span></h3>
              <p class="mb-0">Graduations, chapel worship, classrooms and campus life at ACT.</p>
            </div>
            <div class="col-md-4 text-right hidden-xs">
              <a class="btn btn-theme-colored btn-sm mt-20" href="gallery">View Full Gallery</a>
            </div>
          </div>
        </div>
        <div class="row act-gallery-strip mt-20" data-lightbox="gallery">
          <div class="col-xs-6 col-sm-4 col-md-2"><a href="images/act/benny198.jpg" data-lightbox-gallery="home-gallery" title="Graduation day"><img class="img-responsive img-fullwidth" src="images/act/benny198.jpg" alt="ACT graduation day"></a></div>
          <div class="col-xs-6 col-sm-4 col-md-2"><a href="images/act/benny204.jpg" data-lightbox-gallery="home-gallery" title="Graduation day"><img class="img-responsive img-fullwidth" src="images/act/benny204.jpg" alt="ACT graduation day"></a></div>
          <div class="col-xs-6 col-sm-4 col-md-2"><a href="images/backgrounds/chapel-worship.jpg" data-lightbox-gallery="home-gallery" title="Chapel worship"><img class="img-responsive img-fullwidth" src="images/backgrounds/chapel-worship.jpg" alt="Chapel worship at ACT"></a></div>
          <div class="col-xs-6 col-sm-4 col-md-2"><a href="images/gallery/computer-lab.jpg" data-lightbox-gallery="home-gallery" title="Computer laboratory"><img class="img-responsive img-fullwidth" src="images/gallery/computer-lab.jpg" alt="ACT computer laboratory"></a></div>
          <div class="col-xs-6 col-sm-4 col-md-2"><a href="images/act/students-group.jpeg" data-lightbox-gallery="home-gallery" title="ACT students"><img class="img-responsive img-fullwidth" src="images/act/students-group.jpeg" alt="ACT students"></a></div>
          <div class="col-xs-6 col-sm-4 col-md-2"><a href="images/act/library-interior.jpg" data-lightbox-gallery="home-gallery" title="ACT library"><img class="img-responsive img-fullwidth" src="images/act/library-interior.jpg" alt="ACT library"></a></div>
        </div>
        <div class="row visible-xs-block">
          <div class="col-xs-12 text-center mt-20">
            <a class="btn btn-theme-colored btn-sm" href="gallery">View Full Gallery</a>
          </div>
        </div>
      </div>
    </section>
    
        <!-- Section: teachers -->
    <!-- Section: Faculty teaser -->
    <section id="faculty">
      <div class="container pt-60 pb-60">
        <div class="section-title">
          <div class="row">
            <div class="col-md-8">
              <h3 class="text-uppercase line-bottom mt-0">Meet Our <span class="text-theme-color-2">Faculty</span></h3>
              <p class="mb-0">Scholars and practitioners who mentor as well as teach.</p>
            </div>
            <div class="col-md-4 text-right hidden-xs">
              <a class="btn btn-theme-colored btn-sm mt-20" href="staff">All Faculty &amp; Staff</a>
            </div>
          </div>
        </div>
        <div class="row mt-20">

          <div class="col-xs-6 col-sm-6 col-md-3 mb-30">
            <div class="act-faculty-card">
              <img class="img-responsive img-fullwidth" src="images/team/nathan-chiroma.jpg" alt="Prof. Nathan Chiroma">
              <div class="act-faculty-body">
                <h4 class="mt-0 mb-5">Prof. Nathan Chiroma</h4>
                <p class="mb-0">Principal</p>
              </div>
            </div>
          </div>

          <div class="col-xs-6 col-sm-6 col-md-3 mb-30">
            <div class="act-faculty-card">
              <img class="img-responsive img-fullwidth" src="images/team/manase-ogola.jpg" alt="Dr. Manase Ogola">
              <div class="act-faculty-body">
                <h4 class="mt-0 mb-5">Dr. Manase Ogola</h4>
                <p class="mb-0">Deputy Principal, Academic Affairs</p>
              </div>
            </div>
          </div>

          <div class="col-xs-6 col-sm-6 col-md-3 mb-30">
            <div class="act-faculty-card">
              <img class="img-responsive img-fullwidth" src="images/team/annet-kyomugisha.jpeg" alt="Mrs. Annet Kyomugisha">
              <div class="act-faculty-body">
                <h4 class="mt-0 mb-5">Mrs. Annet Kyomugisha</h4>
                <p class="mb-0">Deputy Principal, Administration</p>
              </div>
            </div>
          </div>

          <div class="col-xs-6 col-sm-6 col-md-3 mb-30">
            <div class="act-faculty-card">
              <img class="img-responsive img-fullwidth" src="images/team/judith-tindimwebwa.jpeg" alt="Dr. Tindimwebwa Judith">
              <div class="act-faculty-body">
                <h4 class="mt-0 mb-5">Dr. Tindimwebwa Judith</h4>
                <p class="mb-0">Director of Quality Assurance</p>
              </div>
            </div>
          </div>

        </div>
        <div class="row visible-xs-block">
          <div class="col-xs-12 text-center">
            <a class="btn btn-theme-colored btn-sm" href="staff">All Faculty &amp; Staff</a>
          </div>
        </div>
      </div>
    </section>
    
    
    <!-- Section: Blog -->
    <section id="blog">
      <div class="container pt-70">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="mt-0 line-height-1 text-uppercase">Recent  <span class="text-theme-color-2"> News</span></h2>
              <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>-->
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
              <div class="owl-carousel-3col owl-nav-top mb-sm-0" data-dots="true">
              <div class="item">
                <article class="post clearfix maxwidth600 mb-sm-30 wow fadeInRight" data-wow-delay=".2s">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="images/blog/graduation-graduands.jpg" style="height:250px" alt="" class="img-responsive img-fullwidth"> </div>
                    <div class="entry-meta meta-absolute text-center pl-10 pr-10">
                    <div class="display-table">
                      <div class="display-table-cell">
                        <ul>
                          <li><span class="text-white"><i class="fa fa-comments-o mt-0 pt-0"></i> 85 <br> comments</span></li>
                          <li><span class="text-white"><i class="fa fa-thumbs-o-up mt-20"></i> 250 <br> Likes</span></li>
                        </ul>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="entry-content border-1px p-20">
                    <h4 class="entry-title mt-0 pt-0">ACT GRADUATION CEREMONY 2024</h4>
                      <span class="text-theme-colored mr-10 font-14">Admin | <i class="fa fa-calendar mr-5 text-theme-colored"></i>On March 15, 2024</span>
                    <p class="text-left mb-20 mt-5 font-13">ACT proudly hosted its graduation ceremony, celebrating the achievements of 166 students who earned Bachelor of Arts degrees in Theology and Leadership, as well as Postgraduate Diplomas in Theology and Leadership.</p>
                    <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="graduations">Read more</a>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
              <div class="item">
                <article class="post clearfix maxwidth600 mb-sm-30 wow fadeInRight" data-wow-delay=".4s">
                  <div class="entry-header"> 
                    <div class="post-thumb thumb"> <img src="images/blog/class-2024-retreat.jpg" style="height:250px" alt="" class="img-responsive img-fullwidth"> </div>
                    <div class="entry-meta meta-absolute text-center pl-10 pr-10">
                      <div class="display-table">
                        <div class="display-table-cell">
                          <ul>
                            <li><span class="text-white"><i class="fa fa-comments-o mt-0 pt-0"></i> 85 <br> comments</span></li>
                            <li><span class="text-white"><i class="fa fa-thumbs-o-up mt-20"></i> 250 <br> Likes</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="entry-content border-1px p-20">
                    <h4 class="entry-title mt-0 pt-0">CLASS OF 2024 RETREAT</h4>
                      <span class="text-theme-colored mr-10 font-14">Admin | <i class="fa fa-calendar mr-5 text-theme-colored"></i> On March 11, 2024</span>
                    <p class="text-left mb-20 mt-5 font-13">On March 11, 2024 up to March 12, 2024  Our graduate participated in a retreat aimed at revitalizing them, preparing them to venture into the world with renewed energy and dedication to serve their community.</p>
                    <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="news">Read more</a>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
              <div class="item">
                <article class="post clearfix maxwidth600 mb-sm-30 wow fadeInRight" data-wow-delay=".6s">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="images/blog/staff-meeting.jpg" style="height:250px" alt="" class="img-responsive img-fullwidth"> </div>
                    <div class="entry-meta meta-absolute text-center pl-10 pr-10">
                      <div class="display-table">
                        <div class="display-table-cell">
                          <ul>
                            <li><span class="text-white"><i class="fa fa-comments-o mt-0 pt-0"></i> 85 <br> comments</span></li>
                            <li><span class="text-white"><i class="fa fa-thumbs-o-up mt-20"></i> 250 <br> Likes</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="entry-content border-1px p-20">
                    <h4 class="entry-title mt-0 pt-0">ACADEMIC CALENDAR 2025</h4>
                      <span class="text-theme-colored mr-10 font-14">Admin | <i class="fa fa-calendar mr-5 text-theme-colored"></i>April 22nd, 2024.</span>
                    <p class="text-left mb-20 mt-5 font-13">April 22nd, 2024. The Academic department conducted a review of the curriculum for both the BA and PGD programs.</p>
                    <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="documents/act-academic-calendar-2025.pdf" target="_blank">Read more</a>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
              <!--<div class="item">-->
              <!--  <article class="post clearfix maxwidth600 mb-sm-30">-->
              <!--    <div class="entry-header">-->
              <!--      <div class="post-thumb thumb"> <img src="images/blog/2.jpg" alt="" class="img-responsive img-fullwidth"> </div>-->
              <!--      <div class="entry-meta meta-absolute text-center pl-10 pr-10">-->
              <!--        <div class="display-table">-->
              <!--          <div class="display-table-cell">-->
              <!--            <ul>-->
              <!--              <li><a class="text-white" href="#"><i class="fa fa-comments-o mt-0 pt-0"></i> 85 <br> comments</a></li>-->
              <!--              <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up mt-20"></i> 250 <br> Likes</a></li>-->
              <!--            </ul>-->
              <!--          </div>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="entry-content border-1px p-20">-->
              <!--      <h4 class="entry-title mt-0 pt-0"><a href="#">Post Title Here</a></h4>-->
              <!--        <span class="text-theme-colored mr-10 font-14">Admin | <i class="fa fa-calendar mr-5 text-theme-colored"></i> 21 February 2016</span>-->
              <!--      <p class="text-left mb-20 mt-5 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>-->
              <!--      <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="blog-single-left-sidebar.html">Read more</a>-->
              <!--      <div class="clearfix"></div>-->
              <!--    </div>-->
              <!--  </article>-->
              <!--</div>-->
              <!--<div class="item">-->
              <!--  <article class="post clearfix maxwidth600 mb-sm-30">-->
              <!--    <div class="entry-header">-->
              <!--      <div class="post-thumb thumb"> <img src="images/blog/3.jpg" alt="" class="img-responsive img-fullwidth"> </div>-->
              <!--      <div class="entry-meta meta-absolute text-center pl-10 pr-10">-->
              <!--        <div class="display-table">-->
              <!--          <div class="display-table-cell">-->
              <!--            <ul>-->
              <!--              <li><a class="text-white" href="#"><i class="fa fa-comments-o mt-0 pt-0"></i> 85 <br> comments</a></li>-->
              <!--              <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up mt-20"></i> 250 <br> Likes</a></li>-->
              <!--            </ul>-->
              <!--          </div>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="entry-content border-1px p-20">-->
              <!--      <h4 class="entry-title mt-0 pt-0"><a href="#">Post Title Here</a></h4>-->
              <!--        <span class="text-theme-colored mr-10 font-14">Admin | <i class="fa fa-calendar mr-5 text-theme-colored"></i> 21 February 2016</span>-->
              <!--      <p class="text-left mb-20 mt-5 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>-->
              <!--      <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="blog-single-left-sidebar.html">Read more</a>-->
              <!--      <div class="clearfix"></div>-->
              <!--    </div>-->
              <!--  </article>-->
              <!--</div>-->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Clients -->
    <section class="clients" style="background-color:white">
      <div class="container pt-10 pb-10 pb-sm-0 pt-sm-0">
        <div class="row">
          <div class="col-md-12">
              <h3 style="text-align:center;padding-bottom:20px">Our Sponsor </h3>
            <!-- Section: Clients -->
            <div class="owl-carousel-6col transparent text-center owl-nav-top">
              <div class="item"> <img src="images/clients/w3.png" alt="ACT sponsor"></div>
              <div class="item"> <img src="images/clients/w4.png" alt="ACT sponsor"></div>
              <div class="item"> <img src="images/clients/sponsor-1.png" alt="ACT sponsor"></div>
              <div class="item"> <img src="images/clients/w5.png" alt="ACT sponsor"></div>
              <div class="item"> <img src="images/clients/logo-nlbc.png" alt="New Life Bible Church"></div>
              <!--<div class="item"> <a href="#"><img src="images/clients/w3.pg" alt=""></a></div>-->
              <!--<div class="item"> <a href="#"><img src="images/clients/w4.pg" alt=""></a></div>-->
              <!--<div class="item"> <a href="#"><img src="images/clients/w5.pg" alt=""></a></div>-->
              <!--<div class="item"> <a href="#"><img src="images/clients/w6.pg" alt=""></a></div>-->
            </div>
          </div>
        </div>
      </div>
    </section>         

  </div>
  <!-- end main-content -->

  <?php include 'footer.php'?>