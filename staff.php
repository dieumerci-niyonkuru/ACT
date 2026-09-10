<?php include 'header.php'; ?>

<!-- Start main-content -->
<div class="main-content bg-lighter">

    <!-- =========================================================
         INNER HEADER
         ========================================================= -->
    <section
        class="inner-header divider parallax layer-overlay overlay-dark-5"
        data-bg-img="images/backgrounds/ben02154.jpg"
    >
        <div class="container pt-70 pb-20">

            <div class="section-content">

                <div class="row">

                    <div class="col-md-12">

                        <h2 class="title text-white text-center">
                            ACT Faculty &amp; Staff Member
                        </h2>

                        <ol class="breadcrumb text-left text-black mt-10">

                            <li>
                                <a href="index">Home</a>
                            </li>

                            <li>
                                <a href="mission">About ACT</a>
                            </li>

                            <li class="active text-gray-silver">
                                Faculty &amp; Staff
                            </li>

                        </ol>

                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- =========================================================
         STAFF / FACULTY PHOTO CSS
         ========================================================= -->
    <style>

        /* =====================================================
           MAIN GALLERY
           ===================================================== */

        #gallery {
            width: 100%;
            overflow: hidden;
        }


        /* =====================================================
           CARD
           ===================================================== */

        #gallery .staff-card {
            width: 100% !important;

            background: #ffffff !important;

            border: 1px solid #e2e2e2 !important;

            border-radius: 12px !important;

            overflow: hidden !important;

            cursor: default !important;

            box-sizing: border-box !important;

            margin-bottom: 30px !important;

            box-shadow: 0 10px 24px rgba(15, 23, 42, 0.06) !important;

            transition: transform 0.2s ease, box-shadow 0.2s ease !important;
        }


        #gallery .staff-card:hover {
            transform: translateY(-3px) !important;

            box-shadow: 0 14px 30px rgba(13, 58, 33, 0.12) !important;
        }


        #gallery .owl-carousel-4col .owl-item,
        #gallery-staff .owl-carousel-4col .owl-item {
            padding: 0 8px !important;
        }


        /* =====================================================
           PHOTO FRAME

           Every card uses the exact same frame size, and every
           photo (see below) fills it completely via object-fit:
           cover — that's what keeps the grid looking even.
           Frame height is kept moderate (rather than very tall)
           because a shorter frame needs less enlargement from a
           given source photo, which keeps images looking sharp.
           ===================================================== */

        #gallery .staff-card .thumb {

            position: relative !important;

            width: 100% !important;

            height: 300px !important;

            min-height: 300px !important;

            max-height: 300px !important;

            overflow: hidden !important;

            background: #f3f4f6 !important;

            display: flex !important;

            align-items: center !important;

            justify-content: center !important;

            padding: 0 !important;

            margin: 0 !important;

            line-height: 0 !important;

            box-sizing: border-box !important;
        }


        /* =====================================================
           ALL STAFF PHOTOS

           COVER = every photo fills the frame edge-to-edge at
           the exact same size, regardless of that photo's own
           width/height. This is what makes the grid look even
           and professional instead of some photos "floating" in
           a smaller box than others. object-position is anchored
           to the top so a crop trims shoulders/background first,
           never the top of someone's head.
           ===================================================== */

        #gallery .staff-card .thumb img,
        #gallery .staff-photo {

            display: block !important;

            width: 100% !important;

            height: 100% !important;

            max-width: 100% !important;

            max-height: 100% !important;

            min-width: 0 !important;

            min-height: 0 !important;

            margin: 0 !important;

            padding: 0 !important;

            border: 0 !important;

            outline: none !important;

            object-fit: cover !important;

            object-position: center top !important;

            transform: none !important;

            -webkit-transform: none !important;

            transition: none !important;

            filter: none !important;

            opacity: 1 !important;

            vertical-align: middle !important;

            box-sizing: border-box !important;
        }


        /* =====================================================
           REMOVE HOVER IMAGE CHANGES
           ===================================================== */

        #gallery .staff-card:hover .thumb,
        #gallery .staff-card:hover .thumb img,
        #gallery .staff-card .thumb:hover,
        #gallery .staff-card .thumb:hover img,
        #gallery .item:hover .thumb,
        #gallery .item:hover .thumb img {

            transform: none !important;

            -webkit-transform: none !important;

            transition: none !important;

            filter: none !important;

            opacity: 1 !important;
        }


        /* =====================================================
           PREVENT ZOOM / SCALE
           ===================================================== */

        #gallery .staff-card img,
        #gallery .staff-card:hover img {

            transform: scale(1) !important;

            -webkit-transform: scale(1) !important;

            -moz-transform: scale(1) !important;

            -o-transform: scale(1) !important;
        }


        /* =====================================================
           MISSING PHOTO PLACEHOLDER

           If a photo fails to load, the onerror handler on the
           <img> (see render_staff_card below) hides the broken
           image and adds this class to .thumb instead — so a
           missing file shows a neat, on-brand placeholder rather
           than a blank box or a tiny broken-image icon.
           ===================================================== */

        #gallery .staff-card .thumb.img-missing {

            background-color: #f3f4f6 !important;

            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23c3c9d4'%3E%3Cpath d='M12 12c2.7 0 4.9-2.2 4.9-4.9S14.7 2.2 12 2.2 7.1 4.4 7.1 7.1 9.3 12 12 12zm0 2.5c-3.3 0-9.8 1.6-9.8 4.9v2.4h19.6v-2.4c0-3.3-6.5-4.9-9.8-4.9z'/%3E%3C/svg%3E") !important;

            background-repeat: no-repeat !important;

            background-position: center 42% !important;

            background-size: 72px 72px !important;
        }


        /* =====================================================
           CARD DETAILS
           ===================================================== */

        #gallery .staff-card .details {

            width: 100% !important;

            min-height: 150px !important;

            padding: 22px 18px 24px !important;

            margin: 0 !important;

            background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%) !important;

            text-align: center !important;

            box-sizing: border-box !important;

            display: flex !important;

            flex-direction: column !important;

            justify-content: center !important;
        }


        /* =====================================================
           STAFF NAME
           ===================================================== */

        #gallery .staff-card .details .title {

            width: 100% !important;

            margin: 0 !important;

            padding: 0 !important;

            font-size: 16px !important;

            line-height: 1.4 !important;

            font-weight: 800 !important;

            letter-spacing: 0.06em !important;

            color: #15263d !important;

            text-transform: uppercase !important;

            text-align: center !important;

            box-sizing: border-box !important;
        }


        /* =====================================================
           GOLD LINE
           ===================================================== */

        #gallery .staff-card .details .title:after {

            content: "" !important;

            display: block !important;

            width: 42px !important;

            height: 3px !important;

            margin: 10px auto 12px !important;

            background: linear-gradient(90deg, #5fa94d 0%, #7ccf62 100%) !important;

            border-radius: 999px !important;
        }


        /* =====================================================
           STAFF POSITION
           ===================================================== */

        #gallery .staff-card .details .sub-title {

            width: 100% !important;

            margin: 0 !important;

            padding: 0 !important;

            font-size: 13px !important;

            line-height: 1.6 !important;

            font-weight: 600 !important;

            color: #475569 !important;

            letter-spacing: 0.02em !important;

            text-align: center !important;

            box-sizing: border-box !important;
        }


        /* =====================================================
           OWL CAROUSEL ITEMS
           ===================================================== */

        #gallery .owl-carousel-4col .item {

            height: auto !important;

            box-sizing: border-box !important;
        }


        #gallery .owl-carousel-4col .staff-card {

            height: auto !important;

            box-sizing: border-box !important;
        }


        /* =====================================================
           REMOVE OLD THEME IMAGE EFFECTS
           ===================================================== */

        #gallery .img-fullwidth {

            max-width: 100% !important;

            border: 0 !important;

            outline: none !important;
        }


        /* =====================================================
           DESKTOP
           ===================================================== */

        @media (min-width: 1200px) {

            #gallery .staff-card .thumb {

                height: 300px !important;

                min-height: 300px !important;

                max-height: 300px !important;
            }

        }


        /* =====================================================
           LAPTOP
           ===================================================== */

        @media (min-width: 992px) and (max-width: 1199px) {

            #gallery .staff-card .thumb {

                height: 280px !important;

                min-height: 280px !important;

                max-height: 280px !important;
            }

        }


        /* =====================================================
           TABLET
           ===================================================== */

        @media (min-width: 768px) and (max-width: 991px) {

            #gallery .staff-card .thumb {

                height: 290px !important;

                min-height: 290px !important;

                max-height: 290px !important;
            }

            #gallery .staff-card .details {

                min-height: 145px !important;
            }

        }


        /* =====================================================
           MOBILE
           ===================================================== */

        @media (max-width: 767px) {

            #gallery .staff-card .thumb {

                height: 300px !important;

                min-height: 300px !important;

                max-height: 300px !important;
            }

            #gallery .staff-card .details {

                min-height: 140px !important;
            }

        }


        /* =====================================================
           SMALL MOBILE
           ===================================================== */

        @media (max-width: 480px) {

            #gallery .staff-card .thumb {

                height: 280px !important;

                min-height: 280px !important;

                max-height: 280px !important;
            }

        }


        /* =====================================================
           IMAGE LOADING STABILITY
           ===================================================== */

        #gallery .staff-photo {

            image-rendering: auto !important;

            backface-visibility: hidden !important;

            -webkit-backface-visibility: hidden !important;
        }


        /* =====================================================
           IMPORTANT:
           NEVER CHANGE PHOTO SIZE ON HOVER
           ===================================================== */

        #gallery .staff-card:hover {

            transform: none !important;

            -webkit-transform: none !important;
        }

    </style>


    <?php
    /* =============================================================
       FACULTY & STAFF DATA

       One row per person. To add/remove/edit someone, just edit
       this list — the card markup below is generated automatically
       so every card always stays identical and in sync with the CSS.

       Image paths are left exactly as provided. If a file is ever
       missing on the server, render_staff_card() below shows a
       clean placeholder automatically instead of a blank box.
       ============================================================= */

    $faculty = [
        [
            'name'  => 'PROF. NATHAN CHIROMA',
            'title' => 'Professor of Practical Theology / Principal',
            'img'   => 'images/team/counciimage/prof-nathan-chiroma.jpg',
            'alt'   => 'Prof. Nathan Chiroma',
        ],
        [
            'name'  => 'DR. MANASE OGOLA',
            'title' => 'Deputy Principal, Academic Affairs & Lecturer',
            'img'   => 'images/team/dr-manase-ogola.jpg',
            'alt'   => 'Dr. Manase Ogola',
        ],
        [
            'name'  => 'DR. WOLE ADEGBILE',
            'title' => 'Senior Lecturer (On Leave of Absence)',
            'img'   => 'images/team/dr-wole-adegbile.jpg',
            'alt'   => 'Dr. Wole Adegbile',
        ],
        [
            'name'  => 'DR. GABRIEL AKIMANA',
            'title' => 'Senior Lecturer / Head of Postgraduate Studies',
            'img'   => 'images/team/gola3.jpg',
            'alt'   => 'Dr. Gabriel Akimana',
        ],
        [
            'name'  => 'DR. TINDIMWEBWA JUDITH',
            'title' => 'Lecturer / Director of Quality Assurance',
            'img'   => 'images/gallery/jidith.jpeg',
            'alt'   => 'Dr. Tindimwebwa Judith',
        ],
        [
            'name'  => 'MRS. ANNET KYOMUGISHA',
            'title' => 'Deputy Principal Administration and Operations',
            'img'   => 'images/team/copyannet.jpeg',
            'alt'   => 'Mrs. Annet Kyomugisha',
        ],
        [
            'name'  => 'DR. CHRISPINE KATIYI BANDA',
            'title' => 'Lecturer & Chaplain',
            'img'   => 'images/team/dr-banda-chrispine.jpg',
            'alt'   => 'Dr. Chrispine Katiyi Banda',
        ],
        [
            'name'  => 'REV. BENJAMIN NKUSI',
            'title' => 'Lecturer / Dean of Students',
            'img'   => 'images/team/whatsapp-image-2024-04-02-at-03-31-21.jpg',
            'alt'   => 'Rev. Benjamin Nkusi',
        ],
        [
            'name'  => 'DR. MUKE NAGAJU',
            'title' => 'Lecturer & Research Coordinator',
            'img'   => 'images/team/dr-muke-nagaju.jpg',
            'alt'   => 'Dr. Muke Nagaju',
        ],
        [
            'name'  => 'REV. GODFREY GATETE',
            'title' => 'Lecturer (On Study Leave)',
            'img'   => 'images/team/passport-size-phot.jpg',
            'alt'   => 'Rev. Godfrey Gatete',
        ],
        [
            'name'  => 'MRS. JACKLINE ADEGBILE',
            'title' => 'Lecturer',
            'img'   => 'images/team/ogola4.jpg',
            'alt'   => 'Mrs. Jackline Adegbile',
        ],
        [
            'name'  => 'MS. SOLANGE BALIKUNDE',
            'title' => 'Lecturer / Internship Coordinator',
            'img'   => 'images/team/solange-balikunde-2.jpg',
            'alt'   => 'Ms. Solange Balikunde',
        ],
    ];

    $staff = [
        [
            'name'  => 'ISSA NTAMBARA',
            'title' => 'Director of Finance',
            'img'   => 'images/team/cpa-issa-ntambara12.jpg',
            'alt'   => 'Issa Ntambara',
        ],
        [
            'name'  => 'LYLIANE NYIRARUKUNDO',
            'title' => 'ICT & e-Learning Director',
            'img'   => 'images/team/ben050471.jpg',
            'alt'   => 'Lyliane Nyirarukundo',
        ],
        [
            'name'  => 'MOSES ASIIMWE',
            'title' => 'Academic Registrar',
            'img'   => 'images/team/ben054921.jpg',
            'alt'   => 'Moses Asiimwe',
        ],
        [
            'name'  => 'REV. BENJAMIN OYEYE',
            'title' => 'Language Coordinator',
            'img'   => 'images/team/ben055181.jpg',
            'alt'   => 'Rev. Benjamin Oyeye',
        ],
        [
            'name'  => 'IMMACULATE INGABIRE',
            'title' => 'Head of Library',
            'img'   => 'images/team/ogalo1.jpg',
            'alt'   => 'Immaculate Ingabire',
        ],
        [
            'name'  => 'DATIVE KABAYIRO',
            'title' => 'Assistant Librarian',
            'img'   => 'images/team/ogola51.jpg',
            'alt'   => 'Dative Kabayiro',
        ],
        [
            'name'  => 'FILLETTE UMWALI',
            'title' => 'Front-desk Officer',
            'img'   => 'images/team/ogo61.jpg',
            'alt'   => 'Fillette Umwali',
        ],
        [
            'name'  => 'GISA TRESOR',
            'title' => 'IT Officer',
            'img'   => 'images/act/whatsapp-image-2025-02-14-at-16-19-38-a17f81c8.jpg',
            'alt'   => 'Gisa Tresor',
        ],
        [
            'name'  => 'MR. SIBOMANA THEOGENE',
            'title' => 'College Facility',
            'img'   => 'images/act/sibomana-theogene-college-facility-staff.jpg',
            'alt'   => 'Sibomana Theogene',
        ],
        [
            'name'  => 'MR. TUYISENGE FRED',
            'title' => 'College Facility',
            'img'   => 'images/act/tuyisenge-fred-college-facility-staff.jpg',
            'alt'   => 'Tuyisenge Fred',
        ],
        [
            'name'  => 'KABATESI HOPE',
            'title' => 'Accountant',
            'img'   => 'images/act/kabatesi-hope-accountant.jpg',
            'alt'   => 'Kabatesi Hope',
        ],
    ];

    /**
     * Render one faculty/staff carousel card.
     * Keeping the markup in one place means every card is
     * guaranteed to match what the CSS above expects.
     */
    function render_staff_card($person) {
        $name  = htmlspecialchars($person['name']);
        $title = htmlspecialchars($person['title']);
        $img   = htmlspecialchars($person['img']);
        $alt   = htmlspecialchars($person['alt']);
        ?>
        <div class="item">
            <div class="staff-card">
                <div class="thumb">
                    <img class="staff-photo" src="<?php echo $img; ?>" alt="<?php echo $alt; ?>" onerror="this.onerror=null; this.style.display='none'; this.closest('.thumb').classList.add('img-missing');">
                </div>
                <div class="details">
                    <h4 class="title"><?php echo $name; ?></h4>
                    <h5 class="sub-title"><?php echo $title; ?></h5>
                </div>
            </div>
        </div>
        <?php
    }
    ?>


    <!-- =========================================================
         FACULTY SECTION
         ========================================================= -->

    <section id="gallery">

        <div class="container pt-70 pb-40">

            <div class="row">

                <div class="col-md-12">

                    <h3 class="line-bottom mt-20 line-height-1">
                        MEET FACULTY
                        <span class="text-theme-color-2">
                            TEAM
                        </span>
                    </h3>


                    <div class="row multi-row-clearfix">

                        <div class="col-md-12">

                            <div class="owl-carousel-4col" data-nav="true">
                                <?php foreach ($faculty as $person) { render_staff_card($person); } ?>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- =========================================================
         STAFF SECTION
         ========================================================= -->

    <section id="gallery-staff">

        <div class="container pt-20 pb-40">

            <div class="row">

                <div class="col-md-12">

                    <h3 class="line-bottom mt-20 line-height-1">
                        MEET THE
                        <span class="text-theme-color-2">
                            STAFF
                        </span>
                    </h3>


                    <div class="row multi-row-clearfix">

                        <div class="col-md-12">

                            <div class="owl-carousel-4col" data-nav="true">
                                <?php foreach ($staff as $person) { render_staff_card($person); } ?>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


</div>
<!-- End main-content -->


<?php include 'footer.php'; ?>