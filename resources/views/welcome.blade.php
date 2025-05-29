<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Passinove</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }

        body {
            background-color: #f8f9fa;
            color: #2d3748;
            line-height: 1.6;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 5%;
            background: linear-gradient(135deg, #6e48aa 0%, #9d50bb 100%);
            color: white;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        nav .links a {
            margin: 0 15px;
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 8px 12px;
            border-radius: 4px;
        }

        nav .links a:hover {
            background-color: rgba(255,255,255,0.2);
        }

        nav .auth a {
            margin-left: 15px;
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 8px 16px;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        nav .auth a:first-child {
            background-color: rgba(255,255,255,0.2);
        }

        nav .auth a:last-child {
            background-color: #ff9a44;
        }

        nav .auth a:hover {
            transform: translateY(-2px);
        }

        section {
            padding: 80px 5%;
        }

        .welcome {
            background: linear-gradient(135deg, #6e48aa 0%, #9d50bb 100%);
            color: white;
            text-align: center;
            padding: 120px 5%;
        }

        .welcome h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .welcome p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 30px;
            text-align: center;
            color: #6e48aa;
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, #6e48aa, #9d50bb);
            margin: 15px auto;
            border-radius: 2px;
        }

        .services, .about, .contact {
            background-color: #fff;
            margin: 40px auto;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            max-width: 1200px;
        }

        .services p, .about p {
            font-size: 1.1rem;
            color: #4a5568;
            margin-bottom: 20px;
        }

        .contact p {
            font-size: 1.1rem;
            margin: 15px 0;
            color: #4a5568;
            display: flex;
            align-items: center;
        }

        .contact p::before {
            content: '•';
            color: #9d50bb;
            font-weight: bold;
            margin-right: 10px;
        }

        footer {
            background: linear-gradient(135deg, #6e48aa 0%, #9d50bb 100%);
            color: white;
            text-align: center;
            padding: 30px;
            margin-top: 60px;
        }

        footer p {
            margin: 0;
            font-size: 1rem;
        }

        @media screen and (max-width: 768px) {
            nav {
                flex-direction: column;
                padding: 15px;
            }
            
            nav .links {
                margin-top: 15px;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            nav .links a {
                margin: 5px;
            }
            
            nav .auth {
                margin-top: 15px;
            }
            
            .welcome h1 {
                font-size: 2.5rem;
            }
            
            section {
                padding: 60px 20px;
            }
            
            .services, .about, .contact {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

<nav>
    <div class="links">
        <a href="#home">Home</a>
        <a href="#about">About Us</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
    </div>
    <div class="auth">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        @endif
    </div>
</nav>

<section id="home" class="welcome">
    <h1>Welcome to Passinove</h1>
    <p>Innovative software solutions for a better tomorrow</p>
</section>

<section id="about" class="about">
    <h2 class="section-title">About Us</h2>
    <p>
        Passinove is a tech innovation platform dedicated to creating smart digital solutions that transform business, education, and society.
    </p>
</section>

<section id="services" class="services">
    <h2 class="section-title">Our Services</h2>
     <p>
        At Passinove, we are committed to delivering a wide range of innovative and impactful services to help organizations and individuals embrace technology more effectively. 
    </p>
    <p>
        We specialize in custom software development tailored to the unique needs of each client, ensuring efficient and scalable solutions. 
        Our team also develops mobile and web applications that are user-friendly, responsive, and designed to solve real-world problems across various industries. 
    </p>
    <p>
        In the education sector, we build and maintain powerful school platforms and reporting systems that streamline communication, improve record-keeping, and enhance learning experiences. 
        Additionally, we offer expert-led tech training and consulting programs to equip teams, students, and professionals with the digital skills they need to succeed in today's technology-driven world. 
    </p>
    <p>
        Every service we offer is guided by a passion for innovation, excellence, and making a positive difference.
    </p>
</section>

<section id="contact" class="contact">
    <h2 class="section-title">Contact Us</h2>
    <p>Email: contact@passinove.com</p>
    <p>Phone: +250 788 123 456</p>
    <p>Location: Kigali, Rwanda</p>
</section>

<footer>
    <p>&copy; {{ date('Y') }} Passinove. All rights reserved.</p>
</footer>

</body>
</html>