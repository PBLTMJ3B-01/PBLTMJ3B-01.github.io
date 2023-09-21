<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
    header("Location: login.php"); // Redirect to the login page if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tama's Portfolio.</title>
    <link rel="icon" href="images/icon.png" type="image/png">
    <link rel="stylesheet" href="internal.css">
    <script src="https://kit.fontawesome.com/80e469cea0.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="https://drive.google.com/uc?export=view&id=1-bGMYjBaggzACH7p1LCztLQktnjn7oiK" srcset="images/logo.png" alt="" class="logo">
                <ul id="sidemenu">
                    <li><a href="#header">HOME</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#">Experience</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#services">Service</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <i class="fa-solid fa-xmark" onclick="closemenu()"></i>
                </ul>
                <i class="fa-solid fa-bars" onclick="openmenu()"></i>
            </nav>
            <div class="header-text">
                <p>Multimedia and Network Engineering Student</p>
                <h1>Hi! I'm Pratama<span>.</span> <br> From Indonesia</h1>
            </div>
        </div>
    </div>

<!-- ------------------About------------------- -->

<div id="about">
    <div class="container">
        <div class="row">
            <div class="about-col-1">
                <img src="https://drive.google.com/uc?export=view&id=1-hCK_x98LpHNT1NY8qUV4-xO1o22mrsD" srcset="images/About.jpg">
            </div>
            <div class="about-col-2">
                <h1 class="sub-title">About Me</h1>
                <p>An enthusiastic student pursuing a dual passion for network engineering and multimedia. I'm currently studying at Jakarta State Polytechnic, I'm driven by the fascinating world of technology and its transformative potential. Beyond the classroom, I've dived into the realm of network management and AI experimentation, successfully crafting my own home network and leveraging artificial intelligence to boost productivity. <br><br> Beyond the classroom, I've dived into the realm of network management and AI experimentation, successfully crafting my own home network and leveraging artificial intelligence to boost productivity. My journey isn't just about acquiring skills; it's about a burning desire to contribute to the field. I'm on the lookout for a role in a forward-thinking company where I can bring my expertise to the table and create a positive impact on the industry. <br><br> My previous internship experience has shown me the power of collaboration and innovation, and I thrive in environments that foster creativity and teamwork.Thank you for stopping by my portfolio. Feel free to explore and learn more about my projects and experiences in the world of network engineering and multimedia.</p>

                <div class="tab-titles">
                    <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                    <p class="tab-links"onclick="opentab('education')">Education</p>
                </div>
                <div class="tab-contents active-tab" id="skills">
                    <ul>
                        <li><span>Network Engineer</span><br>Designing and implementing computer networks</li>
                        <li><span>Cyber Security Specialist</span><br>Penetration testing and protecting against cyber threats</li>
                        <li><span>Web Design</span><br>Designing Web/App interfaces</li>
                    </ul>
                    <div class="button-container">
                        <button>Learn More</button>
                    </div>
                </div>
                <div class="tab-contents" id="education">
                    <ul>
                        <li><span>2020-2022</span><br>SMK ANANDA BEKASI | Teknik Komputer dan Jaringan</li>
                        <li><span>2022-2025</span><br>POLITEKNIK NEGERI JAKARTA | Teknik Multimedia dan Jaringan</li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>




<!-- --------------------Services------------------------->    
<div id="services">
    <div class="container">
        <h1 class="sub-title">My Services</h1>
        <div class="services-list">
            <div>
                <i class="fa-solid fa-code"></i>
                <h2>Web Design</h2>
                <p>I can transform your digital presence with expert web design services. I'll craft a stunning website that not only captivates but also performs. From concept to launch, Send me an email and let's see what we can make.</p>
                <a href="#">learn more</a>
            </div>
            <div>
                <i class="fa-solid fa-pen-nib"></i>
                <h2>Graphic Design</h2>
                <p>While my forte lies in crafting business cards, I certainly am capable of lots of different medias. Explore my portfolio for a glimpse of how I can elevate your brand through captivating visuals. Let's bring your creative ideas to life. .</p>
                <a href="#">learn more</a>
            </div>
            <div>
                <i class="fa-regular fa-comment"></i>
                <h2>General IT Consultation</h2>
                <p>I'm a mentor in my campus's Computer Student Club. Got an IT question? Shoot me a DM on Instagram for swift solutions. From troubleshooting to coding, I'm here to guide you through the tech maze.</p>
                <a href="#">learn more</a>
            </div>
        </div>
    </div>
</div>

<!-- ------------------portfolio------------------- -->
<div id="portfolio">
    <div class="container">
        <h1 class="sub-title">My Recent Work!</h1>
        <div class="work-list">
            <div class="work">
                <img src="https://drive.google.com/uc?export=view&id=10-wV3B5mJAKE3QpDpLBs0rzyPRuxmKkO" alt="">
                <div class="layer">
                    <h2>Computer Student Club Website</h2>
                    <p>I led the development of the new website for the Computer Student Club at Jakarta State Polytechnic. Explore the website to see how we revamped their online presence..</p>
                    <a href="https://s.id/cscpnj " target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="https://drive.google.com/uc?export=view&id=10TIjLiKQzefdG1mGZth6LzmT3F-SVG5v" alt="">
                <div class="layer">
                    <h2>Costum Social Cards</h2>
                    <p>I specialize in designing custom-made "Social Cards," perfect for cosplayers and event-goers looking to effortlessly share their online presence. Let's create a memorable first impression together.</p>
                    <a href="s.id/cscpnj"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="https://drive.google.com/uc?export=view&id=10UW2oC6Uq8zUsjMFo08w71uDLGEYsS5i" alt="">
                <div class="layer">
                    <h2>This Website!</h2>
                    <p>You're Here! <br><br>
                        You're currently browsing my portfolio—this very website! Explore my skills and creativity showcased right here.</p>
                    <a href="s.id/cscpnj"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>       
        </div>
        <a href="#" class="btn">See All ⇂</a>

    </div>


</div>

     <!-- CONTACT -->
     <div id="contact">
        <div class="container">
            
                <div class="contact-left">
                    <h1 class="sub-title">Contact Me</h1>
                    <p><i class="fa-regular fa-envelope"></i>PratamaSiregar.Business@gmail.com</p>
                    
                    <div class="social-icons">
                    <a href="https://instagram.com/pratamasiregar08" target="_blank"><i class="fa-brands fa-instagram" ></i></a>
                    <a href="https://linked" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                    <a href="https://drive.google.com/uc?export=download&id=10iV_ynovTPfiKA-KJ8k9FetN1S_xWp51" download class="btn btn2">Download CV</a>
             </div>
             
             <div class="contact-right"><img src="https://drive.google.com/uc?export=view&id=10iNQGkpgc2-mYfWcnqGKULpXvJFPhX6-" alt=""></div>
                
            

        </div>
        
    </div>

    <div class="copyright"><p>Copyright © 2023 Designed and Developed With Love By Pratama. </p></div>



       




        <script>
    var tablinks = document.getElementsByClassName("tab-links")
    var tabcontents = document.getElementsByClassName("tab-contents")
    function opentab(tabname){
        for(tablink of tablinks){
            tablink.classList.remove("active-link");
        }
        for(tabcontent of tabcontents){
            tabcontent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link")
        document.getElementById(tabname).classList.add("active-tab");
    }
</script>

<script>
    var sidemenu = document.getElementById("sidemenu");
    function openmenu(){
        sidemenu.style.right="0";
    }
    function closemenu(){
        sidemenu.style.right="-200px";
    }
</script>
