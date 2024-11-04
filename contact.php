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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="assets/css/scroll.css"> -->
    <style>


.nii{
        font-size: 16px !important;
    }

    </style>
</head>

<body>
    <header>
    <button class=" ml-auto mr-3 ml-md-0 mr-md-auto nav-link" style="border-radius:5px;border:none;">
            Today: <?=date("F, D Y")?>
        </button>
        <nav class="collapsible-nav" id="collapsible-nav">
            <a href="index.php" class="nav-link ">HOME</a>
            <a href="publications.php" class="nav-link ">PUBLICATIONS</a>
            <!-- <a href="portfolio.html" class="nav-link">PORTFOLIO</a>
            <a href="blog.html" class="nav-link">BLOG</a> -->
            <a href="#" class="nav-link active">CONTACT</a>
        </nav>
        <button class="btn btn-menu-toggle btn-white rounded-circle" data-toggle="collapsible-nav"
            data-target="collapsible-nav"><img src="assets/images/hamburger.svg" alt="hamburger"></button>
    </header>
    <div class="content-wrapper">
    <aside >
                    <div class="profile-img-wrapper">
                        <img src="assets/images/profile.jpg" alt="profile" style="border:solid 5px #ddd">
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
                            <!-- <p>BIRTHDAY : 15 April 1990</p> -->
                            <!-- <p>WEBSITE : www.example.com</p> -->
                            <p>PHONE : +44 7466 076674</p>
                            <p>eghopromise@yahoo.com</p>
                            <p>Location : Birmingham, UK</p><hr>
                            <a href="assets/documents/Ehigiator_Egho_Promise_CV.docx"><button class="btn btn-download-cv btn-primary rounded-pill"> <i class='bx bxs-download bx-burst btn-img' style='color:#fff;font-size:14px;'></i>DOWNLOAD CV </button></a><p></p>
                                <a href="https://scholar.google.com/citations?user=X-jERmIAAAAJ&hl=en"><button class="btn btn-download-cv btn-primary rounded-pill"> Google Scholar Id</button></a><p></p>
                                <a href="https://www.researchgate.net/profile/Ehigiator-Egho-Promise"><button class="btn btn-download-cv btn-primary rounded-pill"> ResearchGate Id</button></a><p></p>
                                <a href="https://orcid.org/0000-0001-8948-1813"><button class="btn btn-download-cv btn-primary rounded-pill"> ORCID Id </button></a>
                        </div>
                    </div>
                    <div class="widget card">
                        <div class="card-body">
                            <div class="widget-content">
                                <h5 class="widget-title card-title">LANGUAGES</h5>
                                <HR>
                                <p>English : Fluent</p>
                                <p>Yuroba : Native</p>
                                <!-- <p>Italian : fluent</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="widget card">
                        <div class="card-body">
                            <div class="widget-content">
                                <h5 class="widget-title card-title">RESEARCH INTERESTS</h5><HR>
                                <p>Cyber security </p>
                                <p>Cyber Forensics</p>
                                <p>Artificial intelligence</p>
                                <p>Machine Learning</p>
                                <p>Mobile Communications</p>
                                <p>Networking </p>
                            </div>
                        </div>
                    </div>
                </aside>
   
                
                <main style="border-radius: 50px;">
            <section class="contact-section">
                <h2 class="section-title">GET IN TOUCH</h2>
                <p class="mb-4 nii">If you’d like to talk about a project, my works or anything else then get in touch.</p>
                
                <div class="contact-cards-wrapper">
                    <div class="contact-card">
                        <h6 class="contact-card-title nii">CALL ME</h6>
                        <p class="contact-card-content nii">+44 7466 076674</p>
                    </div>
                    <div class="contact-card">
                        <h6 class="contact-card-title nii">EMAIL ME</h6>
                        <p class="contact-card-content nii">eghopromise@yahoo.com </p>
                    </div>
                </div>

                <form action="#!" class="contact-form nii">
                    <div class="form-group form-group-name">
                      <label for="name" class="sr-only">Name</label>
                      <input type="text" name="name" id="name" class="form-control nii" placeholder="NAME">
                    </div>
                    <div class="form-group form-group-email">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" name="email" id="email" class="form-control nii" placeholder="EMAIL">
                    </div>
                    <div class="form-group">
                        <label for="message" class="sr-only">Message</label>
                        <textarea name="message" id="message" class="form-control nii" placeholder="MESSAGE" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary form-submit-btn" id="submit">SEND MESSAGE</button>
                </form>

            </section>
            <section class="location-section">
                <h5 class="section-title">MY LOCATION</h5>

                <div class="map-wrapper embed-responsive embed-responsive-16by9" style="height:450px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6780.360388122327!2d-73.94920877520023!3d40.64704896956227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b449a659007%3A0xc4308a4849d49943!2s135%20E%2029th%20St%2C%20Brooklyn%2C%20NY%2011226%2C%20USA!5e0!3m2!1sen!2sin!4v1582520722599!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>
                </div>
            </section>

        </main>

     

    </div>

<!--  -->

   <div id="popup-article" class="popup">
    <div class="popup__block">
        <h1 class="popup__title">Summary Profile</h1>
        <p>I teach and supervise undergraduate and postgraduate Cybersecurity and Computer Science students' dissertations at University College Birmingham. Also, I have taught and acted as a Study Programme Owner (Course Lead) and Lead Internal Verifier at City of Oxford College and University Centre, UK; </p>
        <img src="assets/images/side2.jpg" class="popup__media popup__media_right" alt="The foto of Dr. Promise">
        <p>Visiting Computer Science Lecturer at Birmingham Newman University; external examiner for graduate and postgraduate Cybersecurity students at National Open University of Nigeria; an academic reviewer and editorial member of some international journals; professional member of BCS, ISACA, ACM, and Chartered Fellow, Chartered Institute of Strategic Managers and Leaders.</p>
        <p>As a Lead Internal Verifier and Course Leader at Oxford City College and University Centre, I manage the assessment of units and qualifications as well as signing off assessments and internal verification decisions. I also supervise students’ research, teach, and assess them on the following courses/subjects: Database Development, Software Development, Online World, Project Based Learning, Security, Emerging Issues and Impact of Digital, Legislation and Regulatory Requirements, Digital Environment, Data, Business Context and Occupational Specialism</p>    
        <p>I examine final year Master and PhD Cyber Security students’ theses and dissertations at National Open University of Nigeria (NOUN), Nigeria virtually. I have more than 10 years of experience teaching Telecommunication Networking, Data Communication & Networking, Project Management, Cybersecurity, Cyber Forensics, Web Engineering, Web Development Concepts, Distributed Computing, Mobile Communication, Sustainable Development, Supply Chain management, Management Information System, Business Management, </p>
        <p>Being Creative and Innovative, Managing and Leading Others in a Green Business, Understanding Green Entrepreneurship and Economy, Social Entrepreneurship and Enterprise, Research Method, Sales Management, Change management, Corporate Governance, Software Engineering, Database Development, Software Development and Leadership in universities, polytechnics and colleges.</p>
        <p>Furthermore, I have over 20 years of experience in the industry which extend across banking, IT, Telecommunication, oil, and Gas sectors in the following international companies: Standard Trust Bank Limited now United Bank for Africa limited Nigeria as PC Support and Bulk Teller between March 1999 and December 1999, Tranter International Limited where I was seconded to Shell Petroleum Development Company of Nigeria Limited (SPDC) Nigeria as PC and Network Engineer between January 2000 and December 2003</p>
        <img src="assets/images/side1.jpg" class="popup__media popup__media_left" alt="The foto of Dr. Promise">
        <p>Peace Global Satellite Communication Limited Nigeria as Head of Network Operations and Maintenance between January 2004 and September 2009, Mobitel Limited Nigeria as Telecom Switch Supervisor between October 2004 and March 2005, Globacom Limited Nigeria as Telecom Switch Manager between April 2005 and December 2010, Glo Mobile Ghana Limited Accra, Ghana as Telecom Core Network Manager between January 2011 and December 2011. </p>
        <p>I was promoted to a Regional Technical Head (RTH) in Glo Mobile Ghana Limited between January 2012 and February 2022 to manage projects, networks, and security in 14 regions. Between February 2022 and August 2022, I was Senior a Cybersecurity and Network Manager at Digital Core Tech. Ltd Ghana before I relocated to UK in 2022.</p>
        <p>I managed security, telecommunication network operations and maintenance as Regional Technical Head in 14 regions of 16 regions for 10 years in Glo Mobile Ghana between January 2012 and February 2022. Furthermore, I have a proven acceptable record of success in carrying out security vulnerability management, penetration testing, security operations, compliance assessment, completing 3G and 4G (LTE), Microwave radios and fiber optics projects from start to finish within budget and scheduled.</p>
        <p>I have PhD in Data Communication and Networking; PhD in Business Administration with specialisation in Data Security Management; Master of Science in Information Technology with specialisation in Cyber Security; Master Business Administration; Bachelor of Science in Computer Science; Diploma Data Processing. I have authored and coauthored over 30 published articles in reputable international journals. I received several awards and letters of recognition which include but not limited to the following</p>
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
    <!-- <script src="assets/js/scroll.js"></script> -->
    <script>
        $(function(){
            $("#submit").click(function(e){
                e.preventDefault()
                const params = [$("#name").val(),$("#email").val(),$("#message").val()]
                let isEmpty =params.some(param => param == "")
                const data = {
                    name:params[0],
                    email:params[1],
                    message:params[2]
                }
                $.post("sendMail.php",data,function(res){
                    console.log(res);
                })
            })
        })
    </script>
</body>

</html>