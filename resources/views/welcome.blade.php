
@extends('index')
@push('style')
    <title>Home - Portfolio</title>
@endpush

@section('main-content')

    <!-- Hero Section -->
    <header>
            <div class="container" id="Home">
                <nav class="fixed-nav">
                    <div class="logo">🔴</div>
                    <ul class = "manu">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#experience">Experience</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#clients"> Clients Say</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <a href="#" class="btn" id="change">Hire Me</a>
                </nav>
            </div>
        </header>

        <!-- main content -->


    
        <main class="content">

            <section id="home" class="section">
                <div class="hero container" >
                        <div class="hero-text">
                            <h1 id= "innerText">I'm Web Developer<br><span>From Bangladesh</span></h1>
                            <p>Moshiur Rahman is a passionate BSc student specializing in Computer Science and Engineering and an emerging software developer with a strong interest in building efficient and user-friendly applications. With a focus on continuous learning and practical development, actively explores modern technologies and frameworks, aiming to grow into a skilled mobile app developer. Driven by curiosity and creativity, he is dedicated to solving real-world problems through innovative software solutions.</p>
                            <a href="#" class="btn">Learn more</a>
                        </div>
                        <div class="hero-img">
                            <img src="assets/image/ph1.png" alt="Natalie Watson">
                        </div>
                    </div>
            </section>
            <section id="about" class="section">
                <div class="container">
                    <h2>About Me</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="about-content">
                        <div>
                            <h3>Hi! I'm Moshiur Rahman, a BSc student in Computer Science and Engineering and an enthusiastic software developer. </h3>
                            <p>I have a strong passion for creating clean, efficient, and user-friendly applications, and I’m constantly exploring new tools and technologies to expand my skills.</p>
                            <p>Currently, I’m focusing on learning modern frameworks and development techniques to build real-world solutions. Whether it’s a mobile app, web platform, or backend system, I love turning ideas into working software.

I believe in continuous learning, teamwork, and solving problems through smart code. My future goal is to become a highly skilled, creative, and professional developer who makes an impact through technology.</p>
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
                            <h4>Modile App Designer</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam nihil nulla.</p>
                        </div>
                        <div class="card">
                            <h4>Web Development</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam nihil nulla.</p>
                        </div>
                        <div class="card">
                            <h4>Digital Marketing</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam nihil nulla.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="experience" class="section">
                <div class="container">
                    <h2>Work Experience</h2>
                    <div class="experience-grid">
                        <div class="exp-item" onclick="showInfo('UI/UX Designer','UI stands for User Interface. It refers to the point of contact between a human user and a computer or device, encompassing the visual elements, layout, and interactive components that allow users to interact with and control a system.','https://plus.unsplash.com/premium_photo-1722155330821-2557249cdb52?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8dWklMjBpY29ufGVufDB8fDB8fHww')"><strong>UI/UX Designer</strong><br>2015–2018</div>

                            <div class="exp-item" onclick="showInfo('Modile App Designer','UI stands for User Interface. It refers to the point of contact between a human user and a computer or device, encompassing the visual elements, layout, and interactive components that allow users to interact with and control a system.','https://images.unsplash.com/photo-1423784346385-c1d4dac9893a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fGFwcHxlbnwwfHwwfHx8MA%3D%3D')"><strong>Modile App Designer</strong><br>2015–2018</div>

                                <div class="exp-item" onclick="showInfo('Web Developer','UI stands for User Interface. It refers to the point of contact between a human user and a computer or device, encompassing the visual elements, layout, and interactive components that allow users to interact with and control a system.','https://images.unsplash.com/photo-1608499296275-1f22c6391b88?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fFdlYiUyMERldmVsb3BlcnxlbnwwfHwwfHx8MA%3D%3D')"><strong>Web Developer</strong><br>2015–2018</div>

                                    <div class="exp-item" onclick="showInfo('Marketing','UI stands for User Interface. It refers to the point of contact between a human user and a computer or device, encompassing the visual elements, layout, and interactive components that allow users to interact with and control a system.','https://images.unsplash.com/photo-1562577308-9e66f0c65ce5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fE1hcmtldGluZ3xlbnwwfHwwfHx8MA%3D%3D')"><strong>Marketing</strong><br>2015–2018</div>






                        <!-- 
                        <div class="exp-item"><strong>Modile App Designer</strong><br>2018–2020</div>
                        <div class="exp-item"><strong>Web Developer</strong><br>2020–2023</div>
                        <div class="exp-item"><strong>Marketing</strong><br>2020–Now</div> -->
                    </div>
                    <br>
                    <br>
                </div>
                <div class="" id="infoDisplay">

                </div>
            </section>

            <section id="portfolio" class="section">
                <div class="container">
                    <h2>My Portfolio</h2>
                    <div class="portfolio-grid">
                        <img src="https://plus.unsplash.com/premium_photo-1741253392721-f1c955e97829?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fE15JTIwUG9ydGZvbGlvfGVufDB8fDB8fHww" alt="Project 1">
                        <img src="https://plus.unsplash.com/premium_photo-1696972235467-6820100b603f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjV8fE15JTIwUG9ydGZvbGlvfGVufDB8fDB8fHww" alt="Project 2">
                        <img src="https://images.unsplash.com/photo-1616873065098-9bdc6fda9c68?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzB8fE15JTIwUG9ydGZvbGlvfGVufDB8fDB8fHww" alt="Project 3">
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

        </main>

        <footer>
            <div class="container">
                <p>&copy; 2025 Bangladesh , Dhaka</p>
                <p>Email: moshiurr1555@email.com</p>
            </div>
        </footer>

@endsection