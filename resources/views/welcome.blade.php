<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posinnove</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            light: '#9d50bb',
                            DEFAULT: '#6e48aa',
                            dark: '#5d3d99',
                        },
                        secondary: '#ff9a44',
                    },
                }
            }
        }
    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="font-poppins bg-gray-50 text-gray-800 leading-relaxed">
    <nav class="flex justify-between items-center py-5 px-[5%] bg-gradient-to-r from-primary to-primary-light text-white sticky top-0 z-50 shadow-lg">
        <div class="links">
            <a href="#home" class="mx-4 text-white no-underline font-medium transition-all duration-300 py-2 px-3 rounded hover:bg-white hover:bg-opacity-20">Home</a>
            <a href="#about" class="mx-4 text-white no-underline font-medium transition-all duration-300 py-2 px-3 rounded hover:bg-white hover:bg-opacity-20">About Us</a>
            <a href="#services" class="mx-4 text-white no-underline font-medium transition-all duration-300 py-2 px-3 rounded hover:bg-white hover:bg-opacity-20">Services</a>
            <a href="#contact" class="mx-4 text-white no-underline font-medium transition-all duration-300 py-2 px-3 rounded hover:bg-white hover:bg-opacity-20">Contact</a>
        </div>
        <div class="auth">
            @if (Route::has('login'))
                @auth
                    
                @else
                    <a href="{{ route('login') }}" class="ml-4 text-white no-underline font-medium py-2 px-4 rounded transition-all duration-300 hover:-translate-y-0.5 bg-white bg-opacity-20">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-white no-underline font-medium py-2 px-4 rounded transition-all duration-300 hover:-translate-y-0.5 bg-secondary">Register</a>
                    @endif
                @endauth
            @endif
        </div>
    </nav>

    <section id="home" class="bg-gradient-to-r from-primary to-primary-light text-white text-center py-32 px-[5%]">
        <h1 class="text-5xl font-bold mb-5">Welcome to Posinnove</h1>
        <p class="text-xl max-w-3xl mx-auto">Innovative software solutions for a better tomorrow</p>
    </section>

    <section id="about" class="bg-white my-10 rounded-xl py-10 px-10 shadow-lg max-w-6xl mx-auto">
        <h2 class="text-4xl mb-8 text-center text-primary relative">
            About Us
            <div class="w-20 h-1 bg-gradient-to-r from-primary to-primary-light rounded-full mx-auto mt-4"></div>
        </h2>
        <p class="text-lg text-gray-700 mb-5">
           Posinnove is a tech innovation platform dedicated to creating smart digital solutions that transform business, education, and society.
        </p>
    </section>

    <section id="services" class="bg-white my-10 rounded-xl py-10 px-10 shadow-lg max-w-6xl mx-auto">
        <h2 class="text-4xl mb-8 text-center text-primary relative">
            Our Services
            <div class="w-20 h-1 bg-gradient-to-r from-primary to-primary-light rounded-full mx-auto mt-4"></div>
        </h2>
        <p class="text-lg text-gray-700 mb-5">
            At Posinnove, we are committed to delivering a wide range of innovative and impactful services to help organizations and individuals embrace technology more effectively. 
        </p>
        <p class="text-lg text-gray-700 mb-5">
            We specialize in custom software development tailored to the unique needs of each client, ensuring efficient and scalable solutions. 
            Our team also develops mobile and web applications that are user-friendly, responsive, and designed to solve real-world problems across various industries. 
        </p>
        <p class="text-lg text-gray-700 mb-5">
            In the education sector, we build and maintain powerful school platforms and reporting systems that streamline communication, improve record-keeping, and enhance learning experiences. 
            Additionally, we offer expert-led tech training and consulting programs to equip teams, students, and professionals with the digital skills they need to succeed in today's technology-driven world. 
        </p>
        <p class="text-lg text-gray-700">
            Every service we offer is guided by a passion for innovation, excellence, and making a positive difference.
        </p>
    </section>

    <section id="contact" class="bg-white my-10 rounded-xl py-10 px-10 shadow-lg max-w-6xl mx-auto">
        <h2 class="text-4xl mb-8 text-center text-primary relative">
            Contact Us
            <div class="w-20 h-1 bg-gradient-to-r from-primary to-primary-light rounded-full mx-auto mt-4"></div>
        </h2>
        <p class="text-lg text-gray-700 my-4 flex items-center">
            <span class="text-primary-light font-bold mr-3"></span> Email: contact@posinnove.com
        </p>
        <p class="text-lg text-gray-700 my-4 flex items-center">
            <span class="text-primary-light font-bold mr-3"></span> Phone: +250 788 123 456
        </p>
        <p class="text-lg text-gray-700 my-4 flex items-center">
            <span class="text-primary-light font-bold mr-3"></span> Location: Kigali, Rwanda
        </p>
    </section>

    <footer class="bg-gradient-to-r from-primary to-primary-light text-white text-center py-8 mt-16">
        <p class="m-0 text-base">&copy; {{ date('Y') }} Posinnove. All rights reserved.</p>
    </footer>

    <script>
        
        // the codes below will be showing the mobile navigation handling 
        
        document.addEventListener('DOMContentLoaded', function() {
            const nav = document.querySelector('nav');
            const links = document.querySelector('.links');
            const auth = document.querySelector('.auth');
            
            function handleResize() {
                if (window.innerWidth <= 768) {
                    nav.classList.add('flex-col', 'py-4', 'px-4');
                    links.classList.add('mt-4', 'flex-wrap', 'justify-center');
                    auth.classList.add('mt-4');
                    
                    const navLinks = links.querySelectorAll('a');
                    navLinks.forEach(link => {
                        link.classList.add('mx-1', 'my-1');
                    });
                } else {
                    nav.classList.remove('flex-col', 'py-4', 'px-4');
                    links.classList.remove('mt-4', 'flex-wrap', 'justify-center');
                    auth.classList.remove('mt-4');
                    
                    const navLinks = links.querySelectorAll('a');
                    navLinks.forEach(link => {
                        link.classList.remove('mx-1', 'my-1');
                    });
                }
            }
            
           
            handleResize();
            
           
            window.addEventListener('resize', handleResize);
        });
    </script>
</body>
</html>