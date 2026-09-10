<?php include 'header.php'?>
  <!-- Start main-content -->
  <div class="main-content bg-lighter">
     <!--Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/backgrounds/ben02154.jpg">
      <div class="container pt-70 pb-20">
         <!--Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white text-center">Our Policies</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="index">Home</a></li>
                <li><a href="mission">About ACT</a></li>
                <li class="active text-gray-silver">Our Policies</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
   <style>
        .policy-section {
            max-width: 1200px;
            margin: 50px auto;
            padding: 30px;
            background: linear-gradient(to bottom right, #ffffff, #f8f9fa);
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .policy-section h2 {
            color: #2c3e50;
            font-size: 2.5em;
            margin-bottom: 30px;
            text-align: center;
            border-bottom: 3px solid #4b6e22;
            padding-bottom: 15px;
        }

        .policy-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            padding: 20px;
        }

        .policy-card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            border-top: 4px solid #4b6e22;
        }

        .policy-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .policy-card h3 {
            color: #4b6e22;
            margin-bottom: 15px;
            font-size: 1.3em;
        }

        .policy-card p {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .policy-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4b6e22;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .policy-link:hover {
            background-color: #3d5a1b;
        }

        @media (max-width: 768px) {
            .policy-section {
                margin: 20px;
                padding: 20px;
            }

            .policy-section h2 {
                font-size: 2em;
            }
        }
    </style>
</head>
<body>
    <section class="policy-section">
         <!--<h2>Our Policies</h2> -->
        <div class="policy-grid">
            <div class="policy-card">
                <h3>Academic Workload Policy</h3>
                <p>Guidelines and regulations regarding academic workload management and requirements.</p>
                <a href="documents/policies/act-academic-workload-policy-reviewed.pdf" target="_blank"class="policy-link">Read More</a>
            </div>

            <div class="policy-card">
                <h3>Admission and Academic Policy</h3>
                <p>Comprehensive information about admission requirements and academic regulations.</p>
                <a href="documents/act-admission-policy.pdf" target="_blank" class="policy-link">Read More</a>
            </div>

            <div class="policy-card">
                <h3>Code of Practice on Setting and Moderation</h3>
                <p>Standards and procedures for setting and moderating academic assessments.</p>
                <a href="documents/policies/act-code-of-practice-on-setting-and-moderating-examinations-approved-august-2023.pdf" target="_blank" class="policy-link">Read More</a>
            </div>

            <div class="policy-card">
                <h3>eLearning Policy</h3>
                <p>Guidelines for online learning platforms and digital education resources.</p>
                <a href="documents/policies/act-elearning-policy.pdf"  target="_blank" class="policy-link">Read More</a>
            </div>

            <div class="policy-card">
                <h3>Finance Policy and Procedure Manual</h3>
                <p>Comprehensive guide to financial procedures and policies.</p>
                <a href="documents/policies/act-finance-policy-and-procedure-manual-approved-august-2023.pdf"  target="_blank" class="policy-link">Read More</a>
            </div>

            <div class="policy-card">
                <h3>Internship Policy</h3>
                <p>Guidelines and requirements for internship programs.</p>
                <a href="documents/policies/act-internship-policy-approved-august-2023.pdf"   target="_blank" class="policy-link">Read More</a>
            </div>

            <div class="policy-card">
                <h3>Language Policy</h3>
                <p>Standards and guidelines for language requirements and support.</p>
                <a href="documents/policies/act-language-policy-approved-august-2023.pdf"  target="_blank" class="policy-link">Read More</a>
            </div>

            <div class="policy-card">
                <h3>Library Policy</h3>
                <p>Rules and guidelines for library services and resources.</p>
                <a href="documents/policies/act-library-policy-approved-august-2023.pdf"  target="_blank" class="policy-link">Read More</a>
            </div>

            <div class="policy-card">
                <h3>Staff Development Policy</h3>
                <p>Framework for professional growth and development of staff members.</p>
                <a href="documents/policies/act-staff-development-policy-approved-august-2023.pdf"  target="_blank"class="policy-link">Read More</a>
            </div>

            <div class="policy-card">
                <h3>Student Handbook</h3>
                <p>Comprehensive guide for students including policies and procedures.</p>
                <a href="documents/policies/act-student-handbook-approved-august-2023.pdf"  target="_blank"class="policy-link">Read More</a>
            </div>
        </div>
    </section>
    </div>
<?php include 'footer.php'?>