<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online App</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">🔴</div>
                <ul class = "manu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <a href="#" class="btn">Hire Me</a>
            </nav>
            <div class="hero">
                <div class="hero-text">
                    <h1>I'm Web Developer<br><span>From Bangladesh</span></h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Vitae facilisis lorem, hendrerit nulla.</p>
                    <a href="#" class="btn">Learn more</a>
                </div>
                <div class="hero-img">
                    <img src="assets/image/ph1.png" alt="Natalie Watson">
                </div>
            </div>
        </div>
    </header>

    <section id="about" class="section">
        <div class="container">
            <h2>About Me</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="about-content">
                <div>
                    <h3>Developing With a Passion While Exploring The World.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde labore blanditiis sequi quos beatae. Doloribus minima in voluptates accusantium voluptate.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita dolorem, distinctio maiores aliquid!</p>
                    <a href="#" class="btn">Contact Me</a>
                </div>
                <img src="https://images.unsplash.com/photo-1686984096026-23d6e82f9749?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGpvYiUyMHNlYXJjaHxlbnwwfHwwfHx8MA%3D%3D" alt="Laptop Work">
            </div>
        </div>
    </section>

    <section id="services" class="section">
        <div class="container">
            <h2>What Services I'm Providing</h2>
            <div class="cards">
                <div class="card">
                    <h4>UI/UX Design</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam nihil nulla.</p>
                </div>
                <div class="card">
                    <h4>Digital Marketing</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam nihil nulla.</p>
                </div>
                <div class="card">
                    <h4>Web Development</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam nihil nulla.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="experience" class="section">
        <div class="container">
            <h2>Work Experience</h2>
            <div class="experience-grid">
                <div class="exp-item"><strong>UI/UX Designer</strong><br>2015–2018</div>
                <div class="exp-item"><strong>Web Designer</strong><br>2018–2020</div>
                <div class="exp-item"><strong>Web Developer</strong><br>2020–2023</div>
                <div class="exp-item"><strong>Graphic Designer</strong><br>2017–2020</div>
                <div class="exp-item"><strong>Marketing</strong><br>2020–Now</div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="section">
        <div class="container">
            <h2>My Portfolio</h2>
            <div class="portfolio-grid">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEc9A_S6BPxCDRp5WjMFEfXrpCu1ya2OO-Lw&s" alt="Project 1">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEc9A_S6BPxCDRp5WjMFEfXrpCu1ya2OO-Lw&s" alt="Project 2">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEc9A_S6BPxCDRp5WjMFEfXrpCu1ya2OO-Lw&s" alt="Project 3">
            </div>
        </div>
    </section>

    <section id="clients" class="section">
        <div class="container">
            <h2>What My Clients Say</h2>
            <div class="testimonial-grid">
                <div class="testimonial">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</div>
                <div class="testimonial">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</div>
                <div class="testimonial">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</div>
            </div>
        </div>
    </section>

    <section id="contact" class="section">
        <div class="container">
            <h2>Stay In Touch</h2>
            <p>Subscribe to get updated on upcoming projects and insights.</p>
            <form>
                <input type="email" placeholder="Enter your email address">
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2025 Natalie E. Watson</p>
            <p>Email: natalie@example.com</p>
        </div>
    </footer>


    <script>

    const menu = document.querySelector('.manu');

    if (menu.children.length > 0) {
        for (let i = 0; i < menu.children.length; i++) {
            menu.children[i].addEventListener('click', function (event) {
                alert("Clicked");
            });
        }
    }

    const menu1 = document.querySelector('.experience-grid');

    if (menu1.children.length > 0) {
        for (let i = 0; i < menu1.children.length; i++) {
            menu1.children[i].addEventListener('click', function (event) {
                alert("Clicked");
            });
        }
    }

</script>

</body>
</html>