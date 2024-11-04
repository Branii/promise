<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dr. Egho Promise</title>
    <!-- <link href="https://fonts.googleapis.com/css?family=Mukta:300,400,500,600,700&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="assets/vendors/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/css/live-resume.css">
    <link rel="stylesheet" href="assets/css/cover.css">
    <!-- <link rel="stylesheet" href="assets/css/scroll.css"> -->
    <style>

     /* Overlay layer for glass effect */
     /* .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.2); 
      backdrop-filter: blur(5px);
      z-index: 1;
    } */

    .nii{
        font-size: 16px !important;
    }
    .titles{
        font-size: 15px !important;
    }

    .bubble_canvas{
	min-width:100vw;
	min-height:100vh;
	position:fixed;
	top:0;
	left:0;
	z-index:-1;
}

    </style>
</head>

<body>
<div id="example"></div>

            <header>
                <button class="btn btn-white ml-auto mr-3 ml-md-0 mr-md-auto nav-link" style="border-radius:5px;">
                    Today: <?=date("F, D Y")?>
                </button>
                <nav class="collapsible-nav" id="collapsible-nav">
                    <a href="#" class="nav-link active">HOME</a>
                    <a href="publications.php" class="nav-link">PUBLICATIONS</a>
                    <!-- <a href="portfolio.html" class="nav-link">PORTFOLIO</a>
                    <a href="blog.html" class="nav-link">BLOG</a> -->
                    <a href="contact.php" class="nav-link">CONTACT</a>
                </nav>
                <button class="btn btn-menu-toggle btn-white rounded-circle" data-toggle="collapsible-nav"
                    data-target="collapsible-nav"><img src="assets/images/hamburger.svg" alt="hamburger"></button>
            </header>
            <div class="content-wrapper">
                <aside >
                    <div class="profile-img-wrapper" style="">
                        <img src="assets/images/profile.jpg" alt="profile">
                    </div>
                    <h1 class="profile-name">Dr. Egho Promise</h1>
                    <div class="text-center">
                        <span class="badge badge-white badge-pill profile-designation nii">Senior Lecturer</span>
                    </div>
                    <!-- <nav class="social-links">
                        <a href="#!" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#!" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#!" class="social-link"><i class="fab fa-behance"></i></a>
                        <a href="#!" class="social-link"><i class="fab fa-dribbble"></i></a>
                        <a href="#!" class="social-link"><i class="fab fa-github"></i></a>
                    </nav> -->
                    <hr>
                    <p></p>
                    <div class="widget">
                        <h5 class="widget-title">personal information</h5><hr>
                        <div class="widget-content">
                            <p>BIRTHDAY : 15 April 1990</p>
                            <p>WEBSITE : www.example.com</p>
                            <p>PHONE : +1 123 000 4444</p>
                            <p>MAIL : your@example.com</p>
                            <p>Location : California, USA</p><br>
                            <a href="assets/documents/Ehigiator_Egho_Promise_CV.docx"><button class="btn btn-download-cv btn-primary rounded-pill"> <img src="assets/images/download.svg" alt="download"
                                class="btn-img">DOWNLOAD CV </button></a><p></p>
                                <a href="assets/documents/Ehigiator_Egho_Promise_CV.docx"><button class="btn btn-download-cv btn-primary rounded-pill"> Google Scholar Id</button></a><p></p>
                                <a href="assets/documents/Ehigiator_Egho_Promise_CV.docx"><button class="btn btn-download-cv btn-primary rounded-pill"> ResearchGate Id</button></a><p></p>
                                <a href="https://orcid.org/0000-0001-8948-1813"><button class="btn btn-download-cv btn-primary rounded-pill"> ORCID Id </button></a>
                        </div>
                    </div>
                    <div class="widget card">
                        <div class="card-body">
                            <div class="widget-content">
                                <h5 class="widget-title card-title">LANGUAGES</h5>
                                <p>English : native</p>
                                <p>Spanish : fluent</p>
                                <p>Italian : fluent</p>
                            </div>
                        </div>
                    </div>
                    <div class="widget card">
                        <div class="card-body">
                            <div class="widget-content">
                                <h5 class="widget-title card-title">INTERESTS</h5>
                                <p>Video games</p>
                                <p>Finance</p>
                                <p>Basketball</p>
                                <p>Theatre</p>
                            </div>
                        </div>
                    </div>
                </aside>
                <main style="border-radius: 50px;">
                    <section class="intro-section">
                        <h2 class="section-title">Egho Promise Ehigiator (PhD DCN & BA)</h2>
                        <p class="nii">I teach and supervise undergraduate and postgraduate Cybersecurity and Computer Science students' 
                            dissertations at University College Birmingham. Also, I have taught and acted as a Study 
                            Programme Owner (Course Lead) and Lead Internal Verifier at City of Oxford College 
                            and University Centre, UK; Visiting Computer Science Lecturer at Birmingham Newman 
                            University; external examiner for graduate and postgraduate Cybersecurity students at 
                            National Open University of Nigeria; an academic reviewer and editorial member of some 
                            international journals; professional member of BCS, ISACA, ACM, and Chartered Fellow, 
                            Chartered Institute of Strategic Managers and Leaders ... <a href="#popup-article" class="card__link card__readmore">readmore</a></p>
                        <!-- <a href="#!" class="btn btn-primary btn-hire-me">HIRE ME</a> -->
                        <hr>
                    </section>
                    <section class="resume-section">
                 
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- <h6 class="section-subtitle">RESUME</h6> -->
                                <h2 class="section-title">EDUCATION</h2>
                                <ul class="time-line">
                                    <li class="time-line-item">
                                        <span class="badge badge-primary nii">2020 - 2023</span>
                                        <h6 class="time-line-item-title titles">PhD Business Administration with Data Security Management </h6>
                                        <!-- <p class="time-line-item-subtitle">PhD.</p> -->
                                        <p class="widget-content nii">From
        Universidad Empresarial de Costa Rica, San Jose, Costa Rica
        with Distinction grade.
        </p>
                                    </li>
                                    <li class="time-line-item">
                                        <span class="badge badge-primary nii">2014 - 2016</span>
                                        <h6 class="time-line-item-title titles"> M.Sc. IT (Cyber Security specialisation)  </h6>
                                        <!-- <p class="time-line-item-subtitle">UNIVERSITY</p> -->
                                        <p class="widget-content nii">From Sikkim Manipal 
        University, Accra, Ghana. With B grade.

                                        </p>
                                    </li>
                                    <li class="time-line-item">
                                        <span class="badge badge-primary nii">1995 - 1998</span>
                                        <h6 class="time-line-item-title titles">B.Sc. (Hons) in Computer Science. </h6>
                                        <!-- <p class="time-line-item-subtitle">UNIVERSITY</p> -->
                                        <p class="widget-content nii">With 2:1. (Second Class Upper) from 
        University of Benin, Nigeria.

                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <!-- <h6 class="section-subtitle">RESUME</h6> -->
                                <h2 class="section-title" style="color:#fff">.</h2>
                                <ul class="time-line">
                                    <li class="time-line-item">
                                        <span class="badge badge-primary nii">2010 - 2014</span>
                                        <h6 class="time-line-item-title titles">PhD Data Communication and Networking Management </h6>
                                        <!-- <p class="time-line-item-subtitle">Web Agency</p> -->
                                        <p class="widget-content nii">From 
        European-American University, Bunyoro-Kitara, Western Uganda, with Distinction grade.</p>
                                    </li>
                                    <li class="time-line-item">
                                        <span class="badge badge-primary nii">1999 - 2002</span>
                                        <h6 class="time-line-item-title titles">Master Business Administration (MBA) </h6>
                                        <!-- <p class="time-line-item-subtitle">Apple Inc.</p> -->
                                        <p class="widget-content nii">From 
        Ladoke Akintola University of Technology, Ogbomosho, Nigeria with C grade.

                                        </p>
                                    </li>
                                    <li class="time-line-item">
                                        <span class="badge badge-primary nii">1992 - 1994</span>
                                        <h6 class="time-line-item-title titles">Diploma Data Processing </h6>
                                        <!-- <p class="time-line-item-subtitle">Apple Inc.</p> -->
                                        <p class="widget-content nii">with credit from University of Benin, Benin City, Nigeria.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                        <hr>
                        <br>
                        <section class="resume-section">
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- <h6 class="section-subtitle">RESUME</h6> -->
                                <h2 class="section-title">Core competencies</h2>
                                <ul class="time-line">
                                    <li class="time-line-item">
                                        <h6 class="time-line-item-title titles">Creative and innovative  </h6>
                                        <p></p>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                                80%
                                            </div>
                                        </div>
        
                                    </li>
                                    <li class="time-line-item">
                                        <!-- <span class="badge badge-primary">2014 - 2016</span> -->
                                        <h6 class="time-line-item-title titles"> Taking initiative and self-motivated </h6>
                                        <p></p>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                                85%
                                            </div>
                                        </div>
                                    </li>
                                    <li class="time-line-item">
                                        <!-- <span class="badge badge-primary">1995 - 1998</span> -->
                                        <h6 class="time-line-item-title titles">Communication and initiative</h6>
                                        <p></p>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                                90%
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <!-- <h6 class="section-subtitle">RESUME</h6> -->
                                <h2 class="section-title" style="color:#fff">.</h2>
                                <ul class="time-line">
                                    <li class="time-line-item">
                                        <!-- <span class="badge badge-primary">2010 - 2014</span> -->
                                        <h6 class="time-line-item-title titles"> Interpersonal relationship and Leadership   </h6>
                                        <p></p>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                                90% 
                                            </div>
                                        </div>
                                    </li>
                                    <li class="time-line-item">
                                        <!-- <span class="badge badge-primary">1999 - 2002</span> -->
                                        <h6 class="time-line-item-title titles">Ability to work under pressure and deadline-driven  </h6>
                                        <p></p>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                                95%
                                            </div>
                                        </div>
                                    </li>
                                    <li class="time-line-item">
                                        <!-- <span class="badge badge-primary">1992 - 1994</span> -->
                                        <h6 class="time-line-item-title titles">Collaborative and team play </h6>
                                        <p></p>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                                80%
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                      
                    </section>
                 
                </main>

            

            </div>
        
        <div id="popup-article" class="popup">
            <div class="popup__block">
                <h1 class="popup__title">Summary Profile</h1><hr><br>
                <p class="nii">I teach and supervise undergraduate and postgraduate Cybersecurity and Computer Science students' dissertations at University College Birmingham. Also, I have taught and acted as a Study Programme Owner (Course Lead) and Lead Internal Verifier at City of Oxford College and University Centre, UK; </p>
                <img src="assets/images/side2.jpg" class="popup__media popup__media_right" alt="The foto of Dr. Promise">
                <p class="nii">Visiting Computer Science Lecturer at Birmingham Newman University; external examiner for graduate and postgraduate Cybersecurity students at National Open University of Nigeria; an academic reviewer and editorial member of some international journals; professional member of BCS, ISACA, ACM, and Chartered Fellow, Chartered Institute of Strategic Managers and Leaders.</p>
                <p class="nii">As a Lead Internal Verifier and Course Leader at Oxford City College and University Centre, I manage the assessment of units and qualifications as well as signing off assessments and internal verification decisions. I also supervise students’ research, teach, and assess them on the following courses/subjects: Database Development, Software Development, Online World, Project Based Learning, Security, Emerging Issues and Impact of Digital, Legislation and Regulatory Requirements, Digital Environment, Data, Business Context and Occupational Specialism</p>    
                <p class="nii">I examine final year Master and PhD Cyber Security students’ theses and dissertations at National Open University of Nigeria (NOUN), Nigeria virtually. I have more than 10 years of experience teaching Telecommunication Networking, Data Communication & Networking, Project Management, Cybersecurity, Cyber Forensics, Web Engineering, Web Development Concepts, Distributed Computing, Mobile Communication, Sustainable Development, Supply Chain management, Management Information System, Business Management, </p>
                <p class="nii">Being Creative and Innovative, Managing and Leading Others in a Green Business, Understanding Green Entrepreneurship and Economy, Social Entrepreneurship and Enterprise, Research Method, Sales Management, Change management, Corporate Governance, Software Engineering, Database Development, Software Development and Leadership in universities, polytechnics and colleges.</p>
                <p class="nii">Furthermore, I have over 20 years of experience in the industry which extend across banking, IT, Telecommunication, oil, and Gas sectors in the following international companies: Standard Trust Bank Limited now United Bank for Africa limited Nigeria as PC Support and Bulk Teller between March 1999 and December 1999, Tranter International Limited where I was seconded to Shell Petroleum Development Company of Nigeria Limited (SPDC) Nigeria as PC and Network Engineer between January 2000 and December 2003</p>
                <img src="assets/images/side1.jpg" class="popup__media popup__media_left" alt="The foto of Dr. Promise">
                <p class="nii">Peace Global Satellite Communication Limited Nigeria as Head of Network Operations and Maintenance between January 2004 and September 2009, Mobitel Limited Nigeria as Telecom Switch Supervisor between October 2004 and March 2005, Globacom Limited Nigeria as Telecom Switch Manager between April 2005 and December 2010, Glo Mobile Ghana Limited Accra, Ghana as Telecom Core Network Manager between January 2011 and December 2011. </p>
                <p class="nii">I was promoted to a Regional Technical Head (RTH) in Glo Mobile Ghana Limited between January 2012 and February 2022 to manage projects, networks, and security in 14 regions. Between February 2022 and August 2022, I was Senior a Cybersecurity and Network Manager at Digital Core Tech. Ltd Ghana before I relocated to UK in 2022.</p>
                <p class="nii">I managed security, telecommunication network operations and maintenance as Regional Technical Head in 14 regions of 16 regions for 10 years in Glo Mobile Ghana between January 2012 and February 2022. Furthermore, I have a proven acceptable record of success in carrying out security vulnerability management, penetration testing, security operations, compliance assessment, completing 3G and 4G (LTE), Microwave radios and fiber optics projects from start to finish within budget and scheduled.</p>
                <p class="nii">I have PhD in Data Communication and Networking; PhD in Business Administration with specialisation in Data Security Management; Master of Science in Information Technology with specialisation in Cyber Security; Master Business Administration; Bachelor of Science in Computer Science; Diploma Data Processing. I have authored and coauthored over 30 published articles in reputable international journals. I received several awards and letters of recognition which include but not limited to the following</p>
                <ul>
                    <li>Best graduating students award in PhD Data Communication and Networking from European American University, Bunyoro-Kitara, Uganda, 2014</li>
                    <li>Best graduating student award in Master of Science in Information Technology (Cyber Security specialization) from Sikkim Manipal University, Ghana, 2016</li>
                    <li>Letter of recognition for writing a Telecom Networking Switching System operational manual for Globacom Nigeria Ltd</li>
                    <li>Employee of the year award, for cybersecurity and networking contributions to the company in 2022, Digital Core Tech. Ltd Ghana</li>
                </ul>
                <hr>
                <a href="#" class="popup__close">close</a>
            </div>
        </div>
 
    <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendors/@popperjs/core/dist/umd/popper-base.min.js"></script>
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/live-resume.js"></script>
    <script src="assets/js/poly.js"></script>
    <script src="assets/js/back.js"></script>
    <script>

    </script>
</body>

</html>