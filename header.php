<?php
// Current page slug, resolved from the request so it works with the extensionless
// URLs produced by .htaccess as well as direct *.php hits.
$act_slug = strtolower(basename(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: ''));
$act_slug = preg_replace('/\.(php|html?)$/', '', $act_slug);
if ($act_slug === '') {
    $act_slug = 'index';
}

$act_sections = [
    'home'     => ['index'],
    'about'    => ['mission', 'history', 'hist', 'policies', 'philosophy', 'chancellor', 'principal',
                   'concil', 'staff', 'doctrinal', 'statement', 'stm', 'request_form', 'boardchair',
                   'welcome_board_chair'],
    'programs' => ['mat', 'pgd', 'pgc', 'ba', 'short-course', 'fees'],
    'campus'   => ['life', 'student', 'graduations', 'library'],
    'news'     => ['news', 'gallery'],
    'contact'  => ['contact'],
];

$act_section = '';
foreach ($act_sections as $name => $slugs) {
    if (in_array($act_slug, $slugs, true)) {
        $act_section = $name;
        break;
    }
}

$act_titles = [
    'index' => 'Africa College of Theology (ACT) Rwanda',
    'mission' => 'Mission & Vision', 'history' => 'Our History', 'hist' => 'Our History',
    'policies' => 'Policies', 'philosophy' => 'Educational Philosophy',
    'chancellor' => 'Chancellor Welcome', 'principal' => 'Principal Welcome',
    'concil' => 'Governing Board', 'staff' => 'Faculty & Staff',
    'doctrinal' => 'Doctrinal Statement', 'statement' => 'Statement of Faith',
    'stm' => 'Statement of Faith', 'request_form' => 'Academic Request Forms',
    'boardchair' => 'Board Chair Tribute', 'welcome_board_chair' => 'Board Chair Welcome',
    'mat' => 'MA in Theology', 'pgd' => 'PGD in Theology', 'pgc' => 'PGCC in Counselling',
    'ba' => 'BA in Theology', 'short-course' => 'Short Courses', 'fees' => 'Fees & Requirements',
    'life' => 'Campus Life', 'student' => 'Student Council', 'graduations' => 'Graduation',
    'library' => 'Library', 'news' => 'News & Events', 'gallery' => 'Photo Gallery',
    'contact' => 'Contact Us',
];

if (!isset($page_title)) {
    $page_title = $act_titles[$act_slug] ?? 'Africa College of Theology';
}
$act_doc_title = ($act_slug === 'index')
    ? $page_title
    : $page_title . ' | Africa College of Theology';

// Per-page meta description for search results and link previews.
$act_descriptions = [
    'index' => 'Africa College of Theology (ACT) is an accredited theological college in Kigali, Rwanda, training redemptive servant leaders through degrees, postgraduate diplomas and short courses.',
    'mission' => 'The mission, vision and core values of Africa College of Theology - equipping redemptive servant leaders to serve Christ and transform communities in Rwanda and beyond.',
    'history' => 'The history and founding of Africa College of Theology in Kigali, Rwanda.',
    'philosophy' => 'The educational philosophy that shapes teaching, mentorship and formation at Africa College of Theology.',
    'policies' => 'Academic and institutional policies of Africa College of Theology, available to download.',
    'chancellor' => 'A welcome message from the Chancellor of Africa College of Theology.',
    'principal' => 'A welcome message from Prof. Nathan Chiroma, Principal of Africa College of Theology.',
    'concil' => 'Meet the Governing Board of Africa College of Theology.',
    'staff' => 'Meet the faculty and staff of Africa College of Theology - scholars and practitioners who teach and mentor our students.',
    'doctrinal' => 'The doctrinal statement of Africa College of Theology.',
    'statement' => 'The statement of faith of Africa College of Theology.',
    'request_form' => 'Download official academic request forms for Africa College of Theology students.',
    'mat' => 'Master of Arts in Theology at Africa College of Theology - entry requirements, structure and how to apply.',
    'pgd' => 'Postgraduate Diploma in Theology at Africa College of Theology - entry requirements, structure and how to apply.',
    'pgc' => 'Postgraduate Certificate in Counselling at Africa College of Theology - entry requirements and how to apply.',
    'ba' => 'Bachelor of Arts in Theology at Africa College of Theology - entry requirements, structure and how to apply.',
    'short-course' => 'Short courses at Africa College of Theology for church leaders and lifelong learners.',
    'fees' => 'Fees structure, admission policy, application forms and entry requirements for Africa College of Theology.',
    'life' => 'Campus life at Africa College of Theology - worship, mentorship, student services and community.',
    'student' => 'The Student Council of Africa College of Theology.',
    'graduations' => 'Graduation at Africa College of Theology - ceremony details, past ceremonies and clearance forms.',
    'library' => 'The Africa College of Theology library - over 29,000 volumes plus e-resources and journals.',
    'news' => 'Latest news and events from Africa College of Theology.',
    'gallery' => 'Photos of graduation, chapel worship, classrooms and campus life at Africa College of Theology.',
    'contact' => 'Contact Africa College of Theology in Kigali, Rwanda - phone, email, department contacts and campus location.',
];
$act_meta_description = $act_descriptions[$act_slug]
    ?? 'Africa College of Theology (ACT) Rwanda - training redemptive servant leaders through accessible, accredited theological education.';

// Marks the nav item for the section currently being viewed.
function act_nav_class($section, $current) {
    return $section === $current ? ' class="active"' : '';
}
// Marks the exact page inside a dropdown.
function act_link_current($slug, $current) {
    return $slug === $current ? ' class="act-subnav-current" aria-current="page"' : '';
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- index-mp-layout102:13-->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="<?php echo htmlspecialchars($act_meta_description, ENT_QUOTES, 'UTF-8'); ?>" />
<meta name="keywords" content="ACT Rwanda, Africa College of Theology, theology Rwanda, Christian education Kigali, theological college Rwanda" />

<!-- Open Graph / link previews -->
<meta property="og:site_name" content="Africa College of Theology" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo htmlspecialchars($act_doc_title, ENT_QUOTES, 'UTF-8'); ?>" />
<meta property="og:description" content="<?php echo htmlspecialchars($act_meta_description, ENT_QUOTES, 'UTF-8'); ?>" />
<meta property="og:image" content="images/logo/act-logo.png" />

<!-- Page Title -->
<title><?php echo htmlspecialchars($act_doc_title, ENT_QUOTES, 'UTF-8'); ?></title>

<!-- Favicon and Touch Icons -->
<link href="images/logo/act-logo.png" rel="shortcut icon" type="image/png">
<link href="images/logo/act-logo.png" rel="apple-touch-icon">
<link href="images/logo/act-logo.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/logo/act-logo.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/logo/act-logo.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">
<link href="css/act-responsive-nav.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
<!-- Include Google Translate script in the head section -->
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
  }
</script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<!-- JavaScript Function for Google Translate -->
<script type="text/javascript">
  function googleTranslate(lang) {
    setTimeout(function() {
      var translateSelect = document.querySelector('.goog-te-combo');
      if (translateSelect) {
        translateSelect.value = lang;
        translateSelect.dispatchEvent(new Event('change'));
      } else {
        console.error("Google Translate dropdown not found.");
      }
    }, 500);
  }

  document.addEventListener('DOMContentLoaded', function() {
    var dropdown = document.getElementById('languageDropdown');
    var trigger = dropdown.querySelector('.language-trigger');
    var menuItems = dropdown.querySelectorAll('.language-menu li');

    function setLanguage(langCode, flagUrl) {
      var triggerFlag = trigger.querySelector('.country-flag');
      var triggerShort = trigger.querySelector('.language-short');
      triggerFlag.src = flagUrl;
      triggerFlag.alt = langCode + ' flag';
      if (langCode === 'en') triggerShort.textContent = 'Eng';
      if (langCode === 'fr') triggerShort.textContent = 'Fr';
      if (langCode === 'sw') triggerShort.textContent = 'Sw';
      if (langCode === 'rw') triggerShort.textContent = 'Rw';
      menuItems.forEach(function(item) {
        item.classList.toggle('active', item.dataset.lang === langCode);
      });
      googleTranslate(langCode);
      dropdown.classList.remove('open');
    }

    trigger.addEventListener('click', function() {
      dropdown.classList.toggle('open');
    });

    menuItems.forEach(function(item) {
      item.addEventListener('click', function() {
        var lang = item.dataset.lang;
        var flagUrl = item.dataset.flag;
        setLanguage(lang, flagUrl);
      });
    });

    document.addEventListener('click', function(event) {
      if (!dropdown.contains(event.target)) {
        dropdown.classList.remove('open');
      }
    });
  });
</script>

</head>
<body class="">
    <style>
  .language-selector {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    position: relative;
  }

  .language-dropdown {
    position: relative;
    display: inline-block;
  }

  .language-trigger {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    min-height: 26px;
    padding: 4px 10px 4px 8px;
    border: 1px solid rgba(255, 255, 255, 0.75);
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.02);
    color: #fff;
    font-size: 12px;
    font-weight: 700;
    line-height: 1;
    letter-spacing: 0.02em;
    cursor: pointer;
    box-shadow: none;
    transition: all 0.2s ease;
  }

  .language-trigger:hover,
  .language-trigger:focus {
    background: rgba(255, 255, 255, 0.06);
    outline: none;
  }

  .country-flag {
    width: auto;
    height: auto;
    display: inline-block;
    font-size: 14px;
    line-height: 1;
    position: relative;
    flex-shrink: 0;
    vertical-align: middle;
    text-shadow: 0 0 1px rgba(0,0,0,0.15);
  }

  .language-trigger .code {
    font-size: 13px;
    line-height: 1;
    letter-spacing: 0.03em;
    font-weight: 800;
  }

  .language-trigger .caret {
    font-size: 12px;
    opacity: 1;
    margin-left: 2px;
  }

  .language-menu {
    position: absolute;
    top: calc(100% + 7px);
    right: 0;
    min-width: 130px;
    margin: 0;
    padding: 5px;
    list-style: none;
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
    border: 1px solid rgba(16, 64, 35, 0.08);
    display: none;
    z-index: 999;
  }

  .language-dropdown.open .language-menu {
    display: block;
  }

  .language-menu li {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 8px 10px;
    border-radius: 6px;
    color: #1b3d63;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 0.01em;
    cursor: pointer;
    transition: all 0.2s ease;
    text-transform: none;
    justify-content: flex-start;
  }

  .country-flag {
    width: 18px;
    height: 12px;
    display: inline-block;
    object-fit: cover;
    border-radius: 2px;
    box-shadow: 0 0 0 1px rgba(0,0,0,0.08);
    flex-shrink: 0;
    vertical-align: middle;
  }

  .language-short {
    display: inline-block;
    color: #fff;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 0.04em;
    padding-left: 2px;
  }

  .language-name {
    display: inline-block;
    min-width: 90px;
    text-align: left;
    line-height: 1.2;
    font-size: 14px;
    font-weight: 600;
  }

  .language-menu li:hover,
  .language-menu li.active {
    background: #edf4e7;
    color: #234f1a;
  }

  .header-top {
    min-height: 38px;
  }

  .header-top .container {
    height: 100%;
  }

  .header-top .row {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    min-height: 38px;
  }

  .header-top .widget {
    display: flex;
    align-items: center;
    min-height: 38px;
  }

  .header-top .list-inline {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-end;
    gap: 14px;
    margin: 0;
    padding: 0;
    list-style: none;
    min-height: 38px;
  }

  .header-top .list-inline > li {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    color: #fff;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.01em;
    line-height: 1;
    white-space: nowrap;
  }

  .header-top .list-inline > li a,
  .header-top .list-inline > li {
    color: #fff;
    text-decoration: none;
  }

  .header-top .list-inline > li i {
    font-size: 14px;
    opacity: 0.98;
    margin-right: 2px;
  }

  .header-top .text-white {
    color: #fff !important;
  }

  .header-top .list-inline > li.text-white {
    opacity: 0.55;
    font-size: 13px;
    padding: 0 2px;
  }

  @media (max-width: 991px) {
    .header-top .list-inline {
      justify-content: center;
      gap: 8px 14px;
      min-height: 0;
      padding: 6px 0;
    }

    .header-top .list-inline > li {
      font-size: 13px;
    }

    .header-top .list-inline > li i {
      font-size: 16px;
    }

    /* Separators only make sense on a single row */
    .header-top .list-inline > li.text-white {
      display: none;
    }

    .header-top .widget,
    .header-top .row {
      min-height: 0;
    }
  }

  @media (max-width: 480px) {
    .header-top .list-inline > li {
      font-size: 12px;
    }

    .header-top .list-inline {
      gap: 6px 10px;
    }
  }
</style>
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <!--<div id="preloader">-->
  <!--  <div id="spinner">-->
  <!--    <img alt="" src="images/act-logo-2024.png">-->
  <!--  </div>-->
  <!--  <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>-->
  <!--</div>-->
  
  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-theme-color-2 sm-text-center" style="background: linear-gradient(90deg, #3a4e20 0%, #4a6329 100%);">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="widget no-border m-0">
              <ul class="list-inline">
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i> <a class="text-white" href="tel:+250792863935">0792863935 / 0783490776</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="widget no-border m-0">
              <ul class="list-inline text-right sm-text-center">
                <li>
                   <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="https://mail.actrwanda.org:2096/">info@actrwanda.org</a> 
                </li>
                <li class="text-white">|</li>
                <li>
                   <a href="tel:+250 788763156" class="text-white">Support</a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <div class="language-selector">
                    <div class="language-dropdown" id="languageDropdown">
                      <button type="button" class="language-trigger" aria-label="Select language">
                        <img class="country-flag" src="https://flagcdn.com/w40/gb.png" alt="United Kingdom flag" />
                        <span class="language-short">Eng</span>
                        <span class="caret">▾</span>
                      </button>
                      <ul class="language-menu" aria-label="Language menu">
                        <li class="active" data-lang="en" data-flag="https://flagcdn.com/w40/gb.png"><img class="country-flag" src="https://flagcdn.com/w40/gb.png" alt="United Kingdom flag" /><span class="language-name">English</span></li>
                        <li data-lang="fr" data-flag="https://flagcdn.com/w40/fr.png"><img class="country-flag" src="https://flagcdn.com/w40/fr.png" alt="France flag" /><span class="language-name">Français</span></li>
                        <li data-lang="sw" data-flag="https://flagcdn.com/w40/tz.png"><img class="country-flag" src="https://flagcdn.com/w40/tz.png" alt="Tanzania flag" /><span class="language-name">Kiswahili</span></li>
                        <li data-lang="rw" data-flag="https://flagcdn.com/w40/rw.png"><img class="country-flag" src="https://flagcdn.com/w40/rw.png" alt="Rwanda flag" /><span class="language-name">Kinyarwanda</span></li>
                      </ul>
                    </div>
                    <div id="google_translate_element" style="display: none;"></div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default">
            <a class="menuzord-brand pull-left flip" href="index" aria-label="Africa College of Theology home">
              <img src="images/logo/act-logo.png" alt="Africa College of Theology">
            </a>
            <ul class="menuzord-menu">
              <li<?php echo act_nav_class('home', $act_section); ?>><a href="index"<?php echo $act_section === 'home' ? ' aria-current="page"' : ''; ?>>Home</a></li>
              <li class="nav-mega-parent<?php echo $act_section === 'about' ? ' active' : ''; ?>"><a href="mission">About ACT</a>
                <ul class="dropdown nav-mega">
                  <li><span class="nav-group-title">Discover ACT</span><a href="history"<?php echo act_link_current('history', $act_slug); ?>>History</a><a href="mission"<?php echo act_link_current('mission', $act_slug); ?>>Mission &amp; Vision</a><a href="policies"<?php echo act_link_current('policies', $act_slug); ?>>Policies</a><a href="philosophy"<?php echo act_link_current('philosophy', $act_slug); ?>>Educational Philosophy</a></li>
                  <li><span class="nav-group-title">Leadership</span><a href="chancellor"<?php echo act_link_current('chancellor', $act_slug); ?>>Chancellor Welcome</a><a href="principal"<?php echo act_link_current('principal', $act_slug); ?>>Principal Welcome</a><a href="concil"<?php echo act_link_current('concil', $act_slug); ?>>Governing Board</a><a href="staff"<?php echo act_link_current('staff', $act_slug); ?>>Faculty &amp; Staff</a></li>
                  <li><span class="nav-group-title">Our Faith</span><a href="doctrinal"<?php echo act_link_current('doctrinal', $act_slug); ?>>Doctrinal Statement</a><a href="statement"<?php echo act_link_current('statement', $act_slug); ?>>Statement of Faith</a><a href="request_form"<?php echo act_link_current('request_form', $act_slug); ?>>Academic Request Forms</a></li>
                </ul>
              </li>
              <li class="nav-mega-parent<?php echo $act_section === 'programs' ? ' active' : ''; ?>"><a href="MAT">Programs &amp; Admissions</a>
                <ul class="dropdown nav-mega">
                  <li><span class="nav-group-title">Graduate Programs</span><a href="MAT"<?php echo act_link_current('mat', $act_slug); ?>>MA in Theology</a><a href="PGD"<?php echo act_link_current('pgd', $act_slug); ?>>PGD in Theology</a><a href="PGC"<?php echo act_link_current('pgc', $act_slug); ?>>PGCC Counselling</a></li>
                  <li><span class="nav-group-title">Undergraduate &amp; Short Courses</span><a href="BA"<?php echo act_link_current('ba', $act_slug); ?>>BA in Theology</a><a href="short-course"<?php echo act_link_current('short-course', $act_slug); ?>>Short Courses</a><a href="documents/physical-admission-form-latest.pdf" target="_blank" rel="noopener">Application Form</a></li>
                  <li><span class="nav-group-title">Plan Your Application</span><a href="documents/act-academic-calendar-2026.pdf" target="_blank" rel="noopener">Academic Calendar</a><a href="https://mis.act.ac.rw/apply" target="_blank" rel="noopener">Online Application</a><a href="fees"<?php echo act_link_current('fees', $act_slug); ?>>Fees &amp; Requirements</a></li>
                </ul>
              </li>
              <li class="nav-mega-parent<?php echo $act_section === 'campus' ? ' active' : ''; ?>"><a href="life">Campus</a>
                <ul class="dropdown nav-mega">
                  <li><span class="nav-group-title">Life at ACT</span><a href="life"<?php echo act_link_current('life', $act_slug); ?>>Campus Life</a><a href="student"<?php echo act_link_current('student', $act_slug); ?>>Student Council</a><a href="graduations"<?php echo act_link_current('graduations', $act_slug); ?>>Graduation</a></li>
                  <li><span class="nav-group-title">Learning Resources</span><a href="library"<?php echo act_link_current('library', $act_slug); ?>>Library</a><a href="https://elearning.act.ac.rw/" target="_blank" rel="noopener">Moodle E-learning</a><a href="https://journal.act.ac.rw/index.php/actrw" target="_blank" rel="noopener">ACT Journal</a></li>
                  <li><span class="nav-group-title">Digital Services</span><a href="https://repository.act.ac.rw/" target="_blank" rel="noopener">Digital Repository</a><a href="https://library.act.ac.rw/" target="_blank" rel="noopener">Koha Library</a><a href="https://mis.act.ac.rw/auth" target="_blank" rel="noopener">Student Portal</a><a href="https://mail.actrwanda.org:2096/webmaillogout.cgi" target="_blank" rel="noopener">Staff E-mail</a></li>
                </ul>
              </li>
              <li class="nav-mega-parent<?php echo $act_section === 'news' ? ' active' : ''; ?>"><a href="news">News</a>
                <ul class="dropdown">
                  <li><a href="news"<?php echo act_link_current('news', $act_slug); ?>>News &amp; Events</a></li>
                  <li><a href="gallery"<?php echo act_link_current('gallery', $act_slug); ?>>Photo Gallery</a></li>
                </ul>
              </li>
              <li<?php echo act_nav_class('contact', $act_section); ?>><a href="Contact"<?php echo $act_section === 'contact' ? ' aria-current="page"' : ''; ?>>Contact</a></li>
            </ul>
            <a class="header-apply-btn" href="https://mis.act.ac.rw/apply" target="_blank" rel="noopener">Apply Now</a>
          </nav>
        </div>
      </div>
    </div>
  </header>