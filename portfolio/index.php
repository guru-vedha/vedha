<?php
session_start();
?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Vedagnanaguru's Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>
  <!-- Move to up button -->
  <div class="scroll-button">
    <a href="#home"><i class="fas fa-arrow-up"></i></a>
  </div>
  <!-- navgaition menu -->
  <nav>
    <div class="navbar">
      <div class="logo"><a href="#">Portfolio</a></div>
      <ul class="menu">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#review">Review</a></li>
          <li><a href="#contact">Contact</a></li>
          <div class="cancel-btn">
            <i class="fa fa-times"></i>
          </div>
      </ul>
      <div class="media-icons">
        <a href="https://www.facebook.com/people/Guru-Rko/100009432606132/"><i class="fab fa-facebook-f"></i></a>
        <a href="https://github.com/guru-vedha/"><i class="fab fa-github"></i></a>
        <a href="https://www.instagram.com/guru__rko/"><i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/in/vedagnanaguru-s-aa298b181/"><i class="fab fa-linkedin"></i></a>
      </div>
    </div>
    <div class="menu-btn">
      <i class="fas fa-bars"></i>
    </div>
  </nav>

<!-- Home Section Start -->
<section class="home" id="home">
  <div class="home-content">
    <div class="text">
      <div class="text-one">Hello,</div>
      <div class="text-two">I'm Vedagnanaguru</div>
      <div class="text-three">Web Developer</div>
    </div>
    <div class="button">
      <button>Hire Me</button>
    </div>
  </div>
</section>

<!-- About Section Start -->
<section class="about" id="about">
  <div class="content">
    <div class="title"><span>About Me</span></div>
  <div class="about-details">
    <div class="left">
      <img src="profile.JPG" alt="">
    </div>
    <div class="right">
      <div class="topic">Developing Is My Passion</div>
      <p>
        <When>
        <li> Web Developer and CyberSecurity Enthusiast.</li>
        <br>
        <li>I am good at designing and developing User-friendly Websites.</li>
        <br>
        <li>Apart from being a web developer, I enjoy most of my time being outdoors. I enjoy roaming with friends, playing Cricket and badminton.</li>
        <br>
        <li>When forced indoors, I follow movies, cricket matches and television shows, I spend my free time exploring the latest technology advancements.</li>
        </ul>
      </p>
      <div class="button">
        <a href="Vedagnanaguru S Resume.pdf"><button>Download CV</button></a>
      </div>
    </div>
  </div>
  </div>
</section>

<!-- My Skill Section Start -->
<!-- Section Tag and Other Div will same where we need to put same CSS -->
<section class="skills" id="skills">
  <div class="content">
  <div class="title"><span>My Skills</span></div>
    <div class="skills-details">
      <div class="text">
        <div class="topic">Skills Reflects Our Knowledge</div>
        <p> I have a strong foundation in C,C++,python and as a web developer, I have known HTML, CSS and JavaScript. I also know MySQL. </p>
        <div class="experience">
          <div class="num">Fresher</div>
        </div>
      </div>
      <div class="boxes">
        <div class="box">
          <div class="topic">HTML</div>
          <div class="per">90%</div>
        </div>
        <div class="box">
          <div class="topic">CSS</div>
          <div class="per">80%</div>
        </div>
        <div class="box">
          <div class="topic">JavScript</div>
          <div class="per">70%</div>
        </div>
        <div class="box">
          <div class="topic">Python</div>
          <div class="per">80%</div>
        </div>
      </div>
    </div>
  </div> 
</section>

<!-- My Services Section Start -->
<section class="services" id="services">
    <div class="content">
      <div class="title"><span>My Projects</span></div>
      <div class="boxes">
        <div class="box">
          <div class="icon">
            <i class="fas fa-project-diagram"></i>
        </div>
        <div class="topic">Earlier Diagnosis of Congestive Heart Failure</div>
        <p>Detection of Congestive Heart Failure and early diagnosis using RNN with LSTM architecture for CHF and NSR classification</p>
      </div>
      <div class="box">
        <div class="icon">
            <i class="fas fa-project-diagram"></i>
        </div>
        <div class="topic">Community Based Event Suggestions</div>
        <p>A system to provide event Suggestions based on your interests and your locality.</p>
      </div>
    </div>
</section>

<?php include 'ReviewDisplay.php'; ?>
<!-- Contact Me section Start -->
<section class="contact" id="contact">
  <div class="content">
    <div class="title"><span>Contact Me</span></div>
    <div class="text">
      <div class="topic">Have Any Project?</div>
      <p></p>
      <div class="button">
        <a href="mailto:lordsparkguru@gmail.com"><button>Let's Chat</button></a>
      </div>
    </div>
  </div>
</section>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.6.2/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
  https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.6.2/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyDsHwCJhu4uD-Jf_IBfjF6orEKjLL3g0gM",
    authDomain: "vedha-dabd3.firebaseapp.com",
    projectId: "vedha-dabd3",
    storageBucket: "vedha-dabd3.appspot.com",
    messagingSenderId: "104697314736",
    appId: "1:104697314736:web:d1390aadcf7c3bc92daa75",
    measurementId: "G-CGV3YHB5PY"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>

  <script src="script.js"></script>
</body>
</html>
