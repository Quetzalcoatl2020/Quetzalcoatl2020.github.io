
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portfolio</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/25685dc88d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
<nav class="navbar fixed-top navbar-expand-md navbar-dark" id="navbar-home">
    <div class="container-fluid d-flex justify-content-between">
        <span>
            <h5 class="navbar-brand" id="navbar-brand">Jemrel Mangaliman</h5>
        </span>

        <!--Button that toggles the navbar contents to be visible when the screen is resized to a certain width-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navlist-container" aria-controls="navlist-container" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- div that encases navbar content, that will be collapsed when the screen is resize to a certain width-->
        <div class="collapse navbar-collapse" id="navlist-container">

            <ul class="navbar-nav" id="navlist">
                <li class="nav-item"><a href="#home-section" class ="nav-link" id="home-link" value="home" onclick="highlight('home')">Home</a> </li>
                <li class="nav-item"><a href="#about-section" class ="nav-link" value="about" id="about-link" onclick="highlight('about')">About </a></li>
                <li class="nav-item"><a href="#project-section" class ="nav-link" value="project" id="project-link" onclick="highlight('project')">Project Portfolio </a></li>
                <li class="nav-item"><a href="#contact-section" class ="nav-link" value="contact" id="contact-link" onclick="highlight('contact')">Contact </a></li>
            </ul>
            
        </div>
    </div>
</nav>


<div class="jumbotron jumbotron-fluid" id="home-section">
        <div class="row p-0 m-0" style="height: inherit; width: inherit;">
            <div class="col-5 col-sm-5 col-md-4 col-lg-4 p-0 m-0" id="image-container">
                <img src="jemrel.png" id="site-image">
            </div>
            <div class="col-7 col-sm-7 col-md-8 col-lg-8 d-flex align-items-center p-0 m-0" id="home-right-div">
                <div class="container">
                    <h1 class="text-white" id="introduction-hi">Hi! I am</h1>
                    <h1 id="introduction"><span style="color: #98c2d7; font-weight: bold;">Jemrel Ricky Mangaliman.</span></h1>
                    <div class="container p-0 mt-3">
                        <h3 class="first-text">I am <span class="typing-text" id="typing-text"></span></h3>
                                
                    </div>
                </div>
            </div>
        </div>
</div>

<div class="jumbotron jumbotron-fluid py-3" id="about-section">
    <div class="container mr-auto ml-auto" id="section-title-container">
        <h1 class="text-center mt-4 pb-3" id="lightsection-titles">ABOUT</h1>
    </div>
       <div class="container mr-auto ml-auto w-75 mt-4">
            <p id="section-paragraph">Hi! My name is <span id="highlight-dark">Jemrel Ricky P. Mangaliman</span>. 
            I reside in Carmona, Cavite. I attained my bachelor's degree in <span id="highlight-dark">Information Technology</span> in April 2023. 
            I have a passion for <span id="highlight-dark">Software Development</span> and <span id="highlight-dark">Web Development</span>. 
            For web development, I use <span id="highlight-dark">HTML</span>, <span id="highlight-dark">CSS / Bootstrap</span>, and <span id="highlight-dark">Javascript</span> for frontend; while I use <span id="highlight-dark">PHP</span> and <span id="highlight-dark">MySQL</span> for backend.
            I also have a strong undestanding of <span id="highlight-dark">Java</span> programming language, which we used to develop our capstone project. In addition, I also have considerable knowledge on <span id="highlight-dark">C++</span> and <span id="highlight-dark">Python</span> programming language.
            </p>
       </div>
       <div class="container mr-auto ml-auto mt-4 d-flex justify-content-center">
            <button class="btn btn-secondary shadow" id="CVbutton">Download CV</button>
       </div>
</div>

<div class="jumbotron jumbotron-fluid py-3" id="project-section">
    <div class="container mr-auto ml-auto" id="section-title-container">
        <h1 class="text-center mt-4 pb-3" id="darksection-titles">PROJECT PORTFOLIO</h1>
    </div>
    <div class="container mr-auto ml-auto mt-4">
            <div class="row">
            
                <div class="col-md-4 mt-3">
                    <a href="#" 
                    class="text-dark text-decoration-none"
                    data-bs-toggle="modal" 
                    data-bs-target="#modal-ViewVideo1"
                    >
                        <div class="card ml-auto mr-auto shadow-lg" id="project-card">
                            <img class="card-img-top" src="librarymscover.png" alt="Card image cap">
                            <div class="card-body">
                                <h6 class="card-title font-weight-bold text-center mb-4" id="highlight">Library Management System</h5>
                                <div class="container-fluid ml-auto mr-auto d-flex justify-content-center">
                                        <span class="badge py-2 px-3 mx-1" id="badge">HTML</span>
                                        <span class="badge py-2 px-3 mx-1" id="badge">CSS</span>
                                        <span class="badge py-2 px-3 mx-1" id="badge">JavaSript</span>
                                        <span class="badge py-2 px-3 mx-1" id="badge">PHP</span>
                                </div>
                            </div>
                        </div> 
                    </a>
                </div>
                <div class="col-md-4 mt-3">
                    <a href="#" 
                    class="text-dark text-decoration-none"
                    data-bs-toggle="modal" 
                    data-bs-target="#modal-ViewVideo2"
                    >
                        <div class="card ml-auto mr-auto" id="project-card">
                            <img class="card-img-top" src="clearancesystemcover.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h6 class="card-title font-weight-bold text-center mb-4" id="highlight">Mobile E-Clearance System (Capstone)</h5>
                                
                                <div class="container-fluid ml-auto mr-auto d-flex justify-content-center">
                                    <span class="badge py-2 px-3 mx-1" id="badge">Java</span>
                                    <span class="badge py-2 px-3 mx-1" id="badge">Firebase</span>
                                    <span class="badge py-2 px-3 mx-1" id="badge">SQLite</span>
                                </div>
                            </div>
                        </div> 
                    </a>
                </div>


                <div class="col-md-4 mt-3">
                    <div class="card ml-auto mr-auto" id="project-card">
                            <img class="card-img-top" src="librarymscover.png" alt="Card image cap">
                            <div class="card-body">
                                <h6 class="card-title font-weight-bold text-center mb-4" id="highlight">Single Vendor E-Commerce System</h5>
                                <div class="container-fluid ml-auto mr-auto d-flex justify-content-center">
                                    <span class="badge py-2 px-3 mx-1" id="badge">HTML</span>
                                    <span class="badge py-2 px-3 mx-1" id="badge">CSS</span>
                                    <span class="badge py-2 px-3 mx-1" id="badge">JavaSript</span>
                                    <span class="badge py-2 px-3 mx-1" id="badge">PHP</span>
                            </div>
                            </div>
                        </div> 
                    </div>
            </div>
       
    </div>
</div>

<div class="jumbotron jumbotron-fluid py-3" id="contact-section">
    <div class="container mr-auto ml-auto" id="section-title-container">
        <h1 class="text-center mt-4 pb-3" id="lightsection-titles">CONTACT</h1>
    </div>
    <div class="container mr-auto ml-auto w-75 mt-4">
            <p id="section-paragraph"> 
            <span id="highlight-dark">Need more details? Got any questions?</span> You can connect with me using the following information below.
            </p>
                   
                    <div class="row d-flex align-items-center justify-content-center ml-auto mr-auto" id="link-row">
                        <div class="col-3 text-center">
                            <a href="https://www.facebook.com/Jemrel.Mangaliman"><button class="btn btn-success m-0" id="linkbutton"><i class="bi bi-facebook"></i></button></a>
                        </div>
                        <div class="col-6">
                            <h5 id="highlight-dark">Jemrel.Mangaliman</h5>
                        </div>
                    </div>

                    <div class="row d-flex align-items-center justify-content-center ml-auto mr-auto mt-2" id="link-row">
                        <div class="col-3 text-center">
                        <a href="https://www.instagram.com/jem.rpm_/"><button class="btn btn-success" id="linkbutton"><i class="bi bi-instagram"></i></button></a>
                        </div>
                        <div class="col-6">
                            <h5 id="highlight-dark">jem.rpm_</h5>
                        </div>
                    </div>
                    
                    <div class="row d-flex align-items-center justify-content-center ml-auto mr-auto mt-2" id="link-row">
                        <div class="col-3 text-center">
                        <a href="https://www.github.com/Quetzalcoatl2020"><button class="btn btn-success" id="linkbutton"><i class="bi bi-github"></i></button></a>
                        </div>
                        <div class="col-6">
                            <h5 id="highlight-dark">Quetzalcoatl2020</h5>
                        </div>
                    </div>

                    <div class="row d-flex align-items-center justify-content-center ml-auto mr-auto mt-2" id="link-row">
                        <div class="col-3 text-center">
                        <a href="https://mail.google.com/mail/u/0/#inbox?compose=new"><button class="btn btn-success" id="linkbutton"><i class="bi bi-envelope"></i></button></a>
                        </div>
                        <div class="col-6">
                            <h5 id="highlight-dark">mangalimanjemrel@gmail.com</h5>
                        </div>
                    </div>
                    
            </div>
    </div>
</div>

<div class="container-fluid" id="footer">
    <footer class="py-3 my-4 mb-0">
        <p class="text-center text-white"> Created by <span id="highlight">Jemrel Mangaliman</span> | <i class="bi bi-c-circle"></i> 2023</p>
    </footer>
</div>


<div class="modal fade" id="modal-ViewVideo1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header border border-0">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modal-body">  
                <div class="ratio ratio-16x9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ke7l2AuTeSk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>                        
            </div>    
        </div>
    </div>
</div>

<div class="modal fade" id="modal-ViewVideo2" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header border border-0">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modal-body">  
                <div class="ratio ratio-16x9">
                    <iframe src="https://player.vimeo.com/video/829377622?h=093f457d7e&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" width="1088" height="614" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen title="E-Clearance System Demonstration"></iframe>
                </div>                           
            </div>    
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="scripts.js"></script>
<script>
    //navbar scroll effect 
var navbar = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
    if (window.scrollY > 70 ) {
        navbar.classList.add('navbar-scrolled');
    }
    else {
        navbar.classList.remove('navbar-scrolled');
    }
});

</script>    
</body>
</html>
