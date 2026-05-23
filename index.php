<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nduka Ebube Junior | Portfolio</title>

    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Navigation -->
    <header>
        <nav>
            <h2 class="logo">Nduka.</h2>

            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Hello, I'm <span>Nduka Ebube Junior</span></h1>
            <p>Web Developer | Data Analyst (Data visualization) | Educator | Tech Enthusiast</p>

            <a href="#projects" class="btn">View Projects</a>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="about">
        <h2>About Me</h2>

        <div class="about-content">
            <img src="assets/profile.jpg" alt="Profile">

            <p>
                I am a passionate web developer and Mathematics graduate from
                Nnamdi Azikiwe University, Awka. I specialize in building
                responsive websites and modern web applications using HTML,
                CSS, JavaScript, PHP, and MySQL.
            </p>
        </div>
    </section>

    <!-- Skills -->
    <section id="skills" class="skills">
        <h2>My Skills</h2>

        <div class="skills-container">
            <div class="skill-card">HTML5</div>
            <div class="skill-card">CSS3</div>
            <div class="skill-card">JavaScript</div>
            <div class="skill-card">PHP</div>
            <div class="skill-card">MySQL</div>
            <div class="skill-card">WordPress</div>
            <div class="skill-card">Ms Excel</div>
            <div class="skill-card">Power BI</div>
            <div class="skill-card">Python</div>
            <div class="skill-card">Git & GitHub</div>
        </div>
    </section>

    <!-- Projects -->
    <section id="projects" class="projects">
        <h2>Projects</h2>

        <div class="project-container">

            <div class="project-card">
                <h3>School Management System</h3>
                <p>
                    A complete school management platform developed using PHP and MySQL.
                </p>
            </div>

            <div class="project-card">
                <h3>Receipt Generator</h3>
                <p>
                    Automated receipt generator built with Excel integration.
                </p>
            </div>

            <div class="project-card">
                <h3>Company Website</h3>
                <p>
                    Responsive business website for Techboar Global Services Limited.
                </p>
            </div>

        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="contact">
        <h2>Contact Me</h2>

        <form action="contact.php" method="POST">

            <input type="text" name="name" placeholder="Your Name" required>

            <input type="email" name="email" placeholder="Your Email" required>

            <textarea name="message" placeholder="Your Message"></textarea>

            <button type="submit">Send Message</button>

        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2026 Nduka Ebube Junior. All Rights Reserved.</p>
    </footer>

</body>
</html>
