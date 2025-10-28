@extends('layouts.app')

@section('content')

<div class="page-wrapper">

    <header class="main-header">
        <div class="container">
            <div class="logo">
            </div>
            <nav class="main-nav">
                <ul>
                    {{-- Tautan href diubah untuk mengarah ke ID bagian --}}
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#hire">Hire</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#case-study">Case Study</a></li>
                    <li><a href="#blog">Blog</a></li>
                </ul>
            </nav>
            {{-- Tautan href diubah untuk mengarah ke ID bagian --}}
            <a href="#contact" class="cta-button nav-cta">Contact Us</a>
        </div>
    </header>

    <main class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1>LARAVEL DEVELOPMENT COMPANY</h1>
                <p>Looking for the best Laravel development company in Canada? Looking to solve business
                    challenges with a Laravel web app? Monocubedprovides custom Laravel solutions to help
                    resolve challenges and increase efficiency, bringing innovation to your organization. Validate
                    your idea with our professionals and get a free personalized quote for your project.</p>

                <ul class="hero-features">
                    <li><span class="icon-box"><i class="fa-solid fa-square"></i></span> NDA</li>
                    <li><span class="icon-box"><i class="fa-solid fa-square"></i></span> Free consultation</li>
                    <li><span class="icon-box"><i class="fa-solid fa-square"></i></span> Experienced Team</li>
                </ul>

                <div class="hero-buttons">
                    <a href="#" class="cta-button primary">Get Your Free Consultation</a>
                    <a href="#" class="cta-button secondary">Get Your Free Consultation</a>
                </div>
            </div>
        </div>
    </main>

    <section class="features-grid">
        <div class="container-grid">
            <div class="feature-card">

                <div class="card-icon"><i class="fa-solid fa-display"></i></div>
                <p>Build your customer base
                    with modern web apps</p>
            </div>
            <div class="feature-card">
                <div class="card-icon"><i class="fa-solid fa-building"></i></div>
                <p>Streamline your business
                    processes with custon
                    Laravel apps</p>
            </div>
            <div class="feature-card">
                <div class="card-icon"><i class="fa-solid fa-display"></i></div>
                <p>Build your customer base
                    with modern web apps</p>
            </div>
            <div class="feature-card">
                <div class="card-icon"><i class="fa-solid fa-building"></i></div>
                <p>Streamline your business
                    processes with custon
                    Laravel apps</p>
            </div>
        </div>
    </section>

    {{-- ID: id="about" untuk tautan navbar --}}
    <section class="why-laravel-section" id="about">
        <div class="container">
            <div class="why-laravel-wrapper">

                <div class="image-grid">
                    <img src="https://images.unsplash.com/photo-1554415707-6e8cfc93fe23?q=80&w=400&h=300&fit=crop" alt="Woman working on laptop">
                    <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=400&h=300&fit=crop" alt="Team presentation on whiteboard">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=400&h=300&fit=crop" alt="Man raising hand in office">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=400&h=300&fit=crop" alt="Team collaborating around table">
                </div>

                <div class="content-block">
                    <h2>Why Use Laravel For Web Development Projects?</h2>
                    <p>Laravel is a top-notch PHP framework for web development projects. It is an easy-to-use tool that provides high security and scalability. As a Laravel web development company, we recommend Laravel to our clients because of these advantages it offers –</p>

                    <div class="features-list">
                        <ul>
                            <li>Flexible and scalable</li>
                            <li>High performance</li>
                            <li>Seamless user experience</li>
                            <li>SEO-friendly</li>
                        </ul>
                        <ul>
                            <li>Faster time-to-market</li>
                            <li>Easily extensible</li>
                            <li>High security</li>
                            <li>Adaptable</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="cta-banner">
        <div class="container">
            <h2>Want to Develop a Custom Laravel Web Solution?</h2>
            <p>We can help. Let us discuss your project requirements and get your idea validated with our professionals. Start developing with us.</p>
            <a href="#" class="cta-button primary">Book Free Consultation with Us</a>
        </div>
    </section>

    <section class="custom-solution-section">
        <div class="container">
            <div class="section-header">
                <h2>Want to Develop a Custom Laravel Web Solution?</h2>
                <p>Laravel is one of the top-notch web development technologies we use in our projects. We provide custom Laravel development services to all businesses and organizations from diverse industries, being a leading Laravel development company in Canada. We are your ideal partner to help you drive business growth. Here's why you should choose us as your development partner.</p>
            </div>

            <div class="solution-grid">
                <div class="solution-card">
                    <div class="card-icon"><i class="fa-solid fa-comments"></i></div>
                    <h3>30-min free consultation</h3>
                </div>
                <div class="solution-card">
                    <div class="card-icon"><i class="fa-solid fa-file-signature"></i></div>
                    <h3>Signs NDA</h3>
                </div>
                <div class="solution-card">
                    <div class="card-icon"><i class="fa-solid fa-comments"></i></div>
                    <h3>30-min free consultation</h3>
                </div>

                <div class="solution-card">
                    <div class="card-icon"><i class="fa-solid fa-shield-halved"></i></div>
                    <h3>100% data security</h3>
                </div>
                <div class="solution-card">
                    <div class="card-icon"><i class="fa-solid fa-arrows-spin"></i></div>
                    <h3>Constant feedback cycle</h3>
                </div>
                <div class="solution-card">
                    <div class="card-icon"><i class="fa-solid fa-comments"></i></div>
                    <h3>30-min free consultation</h3>
                </div>

                <div class="solution-card">
                    <div class="card-icon"><i class="fa-solid fa-eye"></i></div>
                    <h3>Complete transparency</h3>
                </div>
                <div class="solution-card">
                    <div class="card-icon"><i class="fa-solid fa-check-double"></i></div>
                    <h3>Quality Assurance</h3>
                </div>
                <div class="solution-card">
                    <div class="card-icon"><i class="fa-solid fa-wrench"></i></div>
                    <h3>90-days maintenance support</h3>
                </div>
            </div>
        </div>
    </section>

    {{-- ID: id="services" untuk tautan navbar --}}
    <section class="services-section" id="services">
        <div class="container">
            <div class="section-title-vertical">
                <h2>Want to Develop a Custom Laravel Web Solution?</h2>
            </div>

            <div class="services-grid">
                <div class="service-card">
                    <div class="service-number">1</div>
                    <h3>Laravel Web Applications</h3>
                    <p>Want to build a highly-efficient web app? Leverage our experience in Laravel development to build robust web applications...</p>
                </div>
                <div class="service-card">
                    <div class="service-number">2</div>
                    <h3>Enterprise Solutions</h3>
                    <p>Are you looking to increase efficiency & productivity in your daily business operations? Automate and streamline...</p>
                </div>
                <div class="service-card">
                    <div class="service-number">3</div>
                    <h3>Custom Web Solutions</h3>
                    <p>Build custom web solutions with our professional Laravel developers that align with your business requirements...</p>
                </div>
                <div class="service-card">
                    <div class="service-number">4</div>
                    <h3>eCommerce Solutions</h3>
                    <p>Want to reach more customers with your products & services? We can build a scalable and high-performative eCommerce...</p>
                </div>
                <div class="service-card">
                    <div class="service-number">5</div>
                    <h3>Laravel Migration Services</h3>
                    <p>Want to upgrade your website to the latest Laravel version? Looking to migrate your legacy systems to Laravel?...</p>
                </div>
                <div class="service-card">
                    <div class="service-number">6</div>
                    <h3>Laravel Cloud Integration</h3>
                    <p>Our experienced developers use the latest cloud tools to develop custom cloud web applications. Get high data security...</p>
                </div>
            </div>
        </div>
    </section>

    <section class="tech-stack-section">
        <div class="container">
            <div class="section-header">
                <h2>Our Technology Stack</h2>
                <p>The Laravel framework is widely used for backend web development. But as a top Laravel application development company, we also use other technologies for full-stack web development.</p>
            </div>

            <nav class="tech-stack-tabs">
                <ul>
                    <li><a href="#" class="active">Frontend Technologies</a></li>
                    <li><a href="#">Database</a></li>
                    <li><a href="#">Server</a></li>
                    <li><a href="#">Payment Gateways</a></li>
                </ul>
            </nav>

            <div class="tech-stack-content">
                <div id="frontend-tab" class="tab-panel active">
                    <div class="tech-logo-grid">
                        <div class="tech-logo-card">
                            <i class="fab fa-react"></i>
                            <h4>React</h4>
                        </div>
                        <div class="tech-logo-card">
                            <i class="fab fa-angular"></i>
                            <h4>Angular</h4>
                        </div>
                        <div class="tech-logo-card">
                            <i class="fab fa-vuejs"></i>
                            <h4>Vue</h4>
                        </div>
                        <div class="tech-logo-card">
                            <i class="fab fa-bootstrap"></i>
                            <h4>Bootstrap</h4>
                        </div>
                    </div>
                </div>
                <div id="database-tab" class="tab-panel">
                </div>
                <div id="server-tab" class="tab-panel">
                </div>
                <div id="payment-tab" class="tab-panel">
                </div>
            </div>
        </div>
    </section>

    {{-- ID: id="hire" untuk tautan navbar --}}
    <section class="dedicated-developer-cta" id="hire">
        <div class="container">
            <h2>Looking for a Dedicated Laravel Developer?</h2>
            <p>Hire our Laravel web developers to work dedicatedly on your project. Let's discuss your requirements and find the right developers for your team.</p>
            <a href="#" class="cta-button primary">Schedule Your Free Consultation with Us</a>
        </div>
    </section>

    {{-- ID: id="portfolio" untuk tautan navbar --}}
    <section class="recent-work-section" id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2>Check Out Our Recent Work</h2>
                <p>Don't believe our words. Believe in our work. We use Laravel and other PHP frameworks to build custom solutions for businesses. Here are some successfully completed projects for you to see how we work and what we have developed so far.</p>
            </div>

            <div class="portfolio-grid">

                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=400&h=300&fit=crop" alt="InvoiceOwl project screenshot">
                    </div>
                    <div class="portfolio-content">
                        <h3 class="color-invoiceowl">InvoiceOwl</h3>
                        <div class="tags">
                            <span>Web App</span> | <span>PHP</span> | <span>CMS</span> | <span>Accounting Automation</span>
                        </div>
                        <p>InvoiceOwl is an invoice generating web software that helps businesses track and manage their finances.</p>
                        <ul>
                            <li>Create custom invoices within minutes</li>
                            <li>Get templates for purchase orders, quotes, and estimates</li>
                            <li>Manage your client payments efficiently</li>
                        </ul>
                        <a href="#" class="cta-button primary portfolio-btn">Read More About InvoiceOwl</a>
                    </div>
                </div>

                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=400&h=300&fit=crop" alt="Renovs project screenshot">
                    </div>
                    <div class="portfolio-content">
                        <h3 class="color-renovs">Renovs</h3>
                        <div class="tags">
                            <span>Website</span> | <span>PHP</span> | <span>Yii2</span> | <span>Lifestyle</span>
                        </div>
                        <p>We built an online interior design consultancy website that connects users to experienced interior designers near them in the USA.</p>
                        <ul>
                            <li>Browse and filter interior designer profiles</li>
                            <li>Chat and discuss design ideas with them</li>
                            <li>Pay securely and book consultation sessions</li>
                        </ul>
                        <a href="#" class="cta-button primary portfolio-btn">Read More About Renovs</a>
                    </div>
                </div>

                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=400&h=300&fit=crop" alt="Hedge Fund Software project screenshot">
                    </div>
                    <div class="portfolio-content">
                        <h3 class="color-hedgefund">Hedge Fund Software</h3>
                        <div class="tags">
                            <span>Web App</span> | <span>PHP</span> | <span>Laravel</span>
                        </div>
                        <p>Extract Capital is a web-based hedge fund solution to manage investment transactions online.</p>
                        <ul>
                            <li>Directly import a list of more than 2000+ investment data into the program</li>
                            <li>According to user's preferences, track a detailed list of transaction data</li>
                            <li>Make multiple modifications and selections to alter a large number of data</li>
                        </ul>
                        <a href="#" class="cta-button primary portfolio-btn">Read More About Extract Capital</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="testimonials-section">
        <div class="container">
            <h2 class="section-title-light">What Our Clients Say About Us</h2>

            <div class="testimonial-grid">
                <div class="testimonial-item">
                    <div class="testimonial-image">
                        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=400&h=300&fit=crop" alt="Client 1">
                    </div>
                    <div class="testimonial-content">
                        <h3>Lorem Ipsum</h3>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris..."</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-image">
                        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=400&h=300&fit=crop" alt="Client 2">
                    </div>
                    <div class="testimonial-content">
                        <h3>Lorem Ipsum</h3>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris..."</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-image">
                        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=400&h=300&fit=crop" alt="Client 3">
                    </div>
                    <div class="testimonial-content">
                        <h3>Lorem Ipsum</h3>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris..."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="industries-section">
        <div class="container">
            <div class="section-header">
                <h2>Industries We Serve</h2>
                <p>As a Laravel development firm, we serve various industries with solutions tailored to solve unique needs. Here are some industries we provide custom, unique development services for.</p>
            </div>

            <div class="solution-grid">
                <div class="solution-card">
                    <div class="card-icon"><i class="fa-solid fa-notes-medical"></i></div>
                    <h3>Healthcare</h3>
                    <p>Want to develop a web app for the healthcare industry? We provide custom web applications...</p>
                </div>
                <div class="solution-card">
                    <div class="card-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                    <h3>Education</h3>
                    <p>eLearning platforms are becoming a new norm in the traditional schooling model...</p>
                </div>
                <div class="solution-card">
                    <div class="card-icon"><i class="fa-solid fa-shopping-cart"></i></div>
                    <h3>eCommerce</h3>
                    <p>Attract new customers with customized eCommerce web applications. Develop a secure...</p>
                </div>
                <div class="solution-card">
                    <div class="card-icon"><i class="fa-solid fa-truck"></i></div>
                    <h3>Transportation</h3>
                    <p>Get cost-effective web application development services that can streamline your transportation...</p>
                </div>
                <div class="solution-card">
                    <div class="card-icon"><i class="fa-solid fa-box-open"></i></div>
                    <h3>Logistics</h3>
                    <p>At Monocubed, we develop custom logistic solutions for businesses using Laravel technology...</p>
                </div>
                <div class="solution-card">
                    <div class="card-icon"><i class="fa-solid fa-utensils"></i></div>
                    <h3>Food and Drink</h3>
                    <p>Want to develop a food delivery web application or online grocery web app? A customized...</p>
                </div>
                <div class="solution-card">
                    <div class="card-icon"><i class="fa-solid fa-plane"></i></div>
                    <h3>Travel</h3>
                    <p>Want to develop a guiding app like Uber? Or a navigation web app like Waze? Explore new cities...</p>
                </div>
                <div class="solution-card">
                    <div class="card-icon"><i class="fa-solid fa-landmark"></i></div>
                    <h3>Finance and Banking</h3>
                    <p>We provide specialized web development services to the FinTech industry. Get a team...</p>
                </div>
                <div class="solution-card">
                    <div class="card-icon"><i class="fa-solid fa-users"></i></div>
                    <h3>Social Networks</h3>
                    <p>With increasing trends in online interactions, it is perfect for businesses to create...</p>
                </div>
            </div>

            <p class="section-footer-note">
                Didn't find your industry listed here? Let's talk! If you have a project in mind, we are open to servicing other industries with our custom website development experience. Contact us today.
            </p>
        </div>
    </section>

    <section class="final-cta-banner">
        <div class="container">
            <h2>Develop a custom Web App?</h2>
            <p>Talk to us. Validate your web app idea with our professionals for free. Get a detailed cost breakdown with a personalized quote.</p>
            <a href="#" class="cta-button primary">Schedule Your Free Consultation with Us</a>
        </div>
    </section>

    <section class="development-process-section">
        <div class="container">
            <div class="section-header">
                <h2>Our Laravel Development Process</h2>
                <p>Our Laravel website development process is simple and efficient. We analyze your business needs and provide the most suited Laravel web app development services. We follow this process to develop your custom Laravel project –</p>
            </div>

            <div class="process-grid">
                <div class="process-card">
                    <div class="process-number">01</div>
                    <h3>Requirement gathering</h3>
                    <ul>
                        <li>Validating your Laravel web app idea</li>
                        <li>Finalizing your development team</li>
                    </ul>
                    <div class="process-category">Understand your goals</div>
                </div>
                <div class="process-card">
                    <div class="process-number">02</div>
                    <h3>Market research and analysis</h3>
                    <ul>
                        <li>Finalizing the web app feature</li>
                        <li>Resource allocation</li>
                    </ul>
                    <div class="process-category">Research and Analysis</div>
                </div>
                <div class="process-card">
                    <div class="process-number">03</div>
                    <h3>Designing the architecture</h3>
                    <ul>
                        <li>Wireframing the web app</li>
                        <li>UI/UX design of each wireframe</li>
                    </ul>
                    <div class="process-category">Wireframing and Designing</div>
                </div>
                <div class="process-card">
                    <div class="process-number">04</div>
                    <h3>Developing the frontend</h3>
                    <ul>
                        <li>Coding with Laravel framework</li>
                        <li>Designing the database</li>
                    </ul>
                    <div class="process-category">Coding and Development</div>
                </div>
                <div class="process-card">
                    <div class="process-number">05</div>
                    <h3>Functional and non-functional testing</h3>
                    <ul>
                        <li>Error removal and test iterations</li>
                        <li>Getting final approval from you</li>
                    </ul>
                    <div class="process-category">Testing Laravel Solution</div>
                </div>
                <div class="process-card">
                    <div class="process-number">06</div>
                    <h3>Deploying solution on your server</h3>
                    <ul>
                        <li>Continuous tracking and evaluation</li>
                        <li>90-days of additional maintenance</li>
                    </ul>
                    <div class="process-category">Deployment and Maintenance</div>
                </div>
            </div>
        </div>
    </section>

    {{-- ID: id="case-study" untuk tautan navbar --}}
    <section class="case-studies-section" id="case-study">
        <div class="container">
            <h2 class="section-title-light">Recent Case Studies</h2>

            <div class="case-studies-grid">
                <div class="case-study-card">
                    <div class="case-study-image">
                        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=400&h=300&fit=crop" alt="Case Study 1">
                    </div>
                    <div class="case-study-content">
                        <div class="category-tag">Business Automation</div>
                        <h4>How Automating Purchase Order Management System Led to 70% Increase in Productivity for a Roofing Company in USA</h4>
                        <p>Managing your purchase orders is never easy. We built a PHP-powered custom purchase order system to streamline the process.</p>
                    </div>
                </div>
                <div class="case-study-card">
                    <div class="case-study-image">
                        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=400&h=300&fit=crop" alt="Case Study 2">
                    </div>
                    <div class="case-study-content">
                        <div class="category-tag">Sales</div>
                        <h4>Developing Custom Sales Management Software That Spiked Efficiency by 29%</h4>
                        <br>
                        <p>To manage and track their sales goals, we built a highly customized CRM system for our client. Results? 29% hike in their efficiency.</p>
                    </div>
                </div>
                <div class="case-study-card">
                    <div class="case-study-image">
                        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=400&h=300&fit=crop" alt="Case Study 3">
                    </div>
                    <div class="case-study-content">
                        <div class="category-tag">Lifestyle</div>
                        <h4>How We Developed Interior Design Consulting Platform in 3 months</h4>
                        <br>
                        <br>
                        <p>See how our development team built a interior design consultation platform using the powerful Yii framework.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section">
        <div class="container">
            <div class="section-header">
                <h2>Frequently Asked Questions</h2>
            </div>

            <div class="faq-list">
                <div class="faq-item">
                    <p>Do you sign NDA for Laravel Projects?</p>
                </div>
                <div class="faq-item">
                    <p>I didn't find the laravel services I was looking for, what should I do?</p>
                </div>
                <div class="faq-item">
                    <p>Do you sign NDA for Laravel Projects?</p>
                </div>
                <div class="faq-item">
                    <p>I didn't find the laravel services I was looking for, what should I do?</p>
                </div>
                <div class="faq-item">
                    <p>Do you sign NDA for Laravel Projects?</p>
                </div>
                <div class="faq-item">
                    <p>I didn't find the laravel services I was looking for, what should I do?</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ID: id="contact" untuk tautan navbar --}}
    <footer class="main-footer" id="contact">
        <div class="container">

            <div class="contact-box-overlap">
                <h2>Let's Get To Know Each Other</h2>
                <p>We will validate your idea and provide a personalized quote. Without any commitments. Without any fees.</p>
            </div>

            <div class="footer-content">
                <div class="footer-form-side">
                    <form action="#">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name*" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email*" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="cta-button primary">Book Your Free Consultation</button>
                        </div>
                    </form>
                </div>

                <div class="footer-office-side">
                    <h3>Our Offices</h3>

                    <h4>Canada</h4>
                    <p>2 County Court Blvd, Suite 400, Brampton, Ontario L6W 3W8</p>

                    <h4>USA</h4>
                    <p>651 North Broad Street Suite 206, Middletown, Delaware 19709</p>
                </div>
            </div>

        </div>
    </footer>

</div>

@endsection
