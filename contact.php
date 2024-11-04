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


</head>

<body>
    <header>
        <button class="btn btn-white ml-auto mr-3 ml-md-0 mr-md-auto nav-link" style="border-radius:5px;">
            Today: <?=date("F, D Y")?>
        </button>
        <nav class="collapsible-nav" id="collapsible-nav">
            <a href="index.php" class="nav-link ">HOME</a>
            <a href="publications.php" class="nav-link">PUBLICATIONS</a>
            <!-- <a href="portfolio.html" class="nav-link">PORTFOLIO</a>
            <a href="blog.html" class="nav-link">BLOG</a> -->
            <a href="#" class="nav-link active">CONTACT</a>
        </nav>
        <button class="btn btn-menu-toggle btn-white rounded-circle" data-toggle="collapsible-nav"
            data-target="collapsible-nav"><img src="assets/images/hamburger.svg" alt="hamburger"></button>
    </header>
    <div class="content-wrapper">
        <aside >
            <div class="profile-img-wrapper" style="">
                <img src="assets/images/prof.png" alt="profile">
            </div>
            <h1 class="profile-name">Dr. Egho Promise</h1>
            <div class="text-center">
                <span class="badge badge-white badge-pill profile-designation">Senior Lecturer</span>
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
                    <p>Location : California, USA</p>
                    <a href="assets/documents/Ehigiator_Egho_Promise_CV.docx"><button class="btn btn-download-cv btn-primary rounded-pill"> <img src="assets/images/download.svg" alt="download"
                        class="btn-img">DOWNLOAD CV </button></a>
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
        <main>
            <section class="contact-section">
                <h2 class="section-title">GET IN TOUCH</h2>
                <p class="mb-4">If you’d like to talk about a project, our work or anything else then get in touch.</p>
                
                <div class="contact-cards-wrapper">
                    <div class="contact-card">
                        <h6 class="contact-card-title">CALL US</h6>
                        <p class="contact-card-content">+987 654 3210 , +987 654 3210</p>
                    </div>
                    <div class="contact-card">
                        <h6 class="contact-card-title">Email me</h6>
                        <p class="contact-card-content">eghopromise@yahoo.com </p>
                    </div>
                </div>

                <form action="#!" class="contact-form">
                    <div class="form-group form-group-name">
                      <label for="name" class="sr-only">Name</label>
                      <input type="text" name="name" id="name" class="form-control" placeholder="NAME">
                    </div>
                    <div class="form-group form-group-email">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="EMAIL">
                    </div>
                    <div class="form-group">
                        <label for="message" class="sr-only">Message</label>
                        <textarea name="message" id="message" class="form-control" placeholder="MESSAGE" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary form-submit-btn">SEND MESSAGE</button>
                </form>

            </section>
            <section class="location-section">
                <h5 class="section-title">MY LOCATION</h5>

                <div class="map-wrapper embed-responsive embed-responsive-16by9"">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6780.360388122327!2d-73.94920877520023!3d40.64704896956227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b449a659007%3A0xc4308a4849d49943!2s135%20E%2029th%20St%2C%20Brooklyn%2C%20NY%2011226%2C%20USA!5e0!3m2!1sen!2sin!4v1582520722599!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>
                </div>
            </section>

        </main>
    </div>



    <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendors/@popperjs/core/dist/umd/popper-base.min.js"></script>
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/live-resume.js"></script>
    <!-- <script src="assets/js/scroll.js"></script> -->
    <script>

    </script>
</body>

</html>