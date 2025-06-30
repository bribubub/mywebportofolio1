<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Rafi Nurfadhil Putra')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0d1222; /* Even deeper charcoal blue */
            color: #e2e8f0; /* Light gray text */
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            /* Subtle background pattern for depth */
            background-image: radial-gradient(circle at top left, #1a202c 1px, transparent 1px),
                              radial-gradient(circle at bottom right, #1a202c 1px, transparent 1px);
            background-size: 20px 20px;
            background-position: 0 0, 10px 10px;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
        }
        /* Custom styles for smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
        .section-padding {
            padding: 100px 0; 
        }
        .card-base {
            background-color: #1a202c; /* Slightly lighter dark for cards */
            border: 1px solid rgba(49, 56, 75, 0.7); /* Refined subtle border */
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5); /* Deeper, softer shadow */
            transition: all 0.4s cubic-bezier(0.2, 0.8, 0.2, 1); /* Smoother transition curve */
        }
        .card-base:hover {
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.7);
            transform: translateY(-8px) scale(1.01); /* More pronounced lift and slight scale */
            border-color: #4a75ff; /* Accent border on hover */
        }
        .text-gradient {
            background-image: linear-gradient(to right, #4a75ff, #00c6ff, #007bff); /* Richer blue gradient */
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            color: transparent;
        }
        .btn-primary-gradient {
            background-image: linear-gradient(to right, #4a75ff, #00c6ff);
            transition: all 0.4s cubic-bezier(0.2, 0.8, 0.2, 1);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        .btn-primary-gradient:hover {
            background-image: linear-gradient(to right, #00c6ff, #4a75ff); /* Reverse gradient on hover */
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5), 0 0 20px rgba(74, 117, 255, 0.6); /* More prominent glow */
            transform: translateY(-3px); /* Subtle lift */
        }
        .input-style {
            background-color: #1e293b; /* Darker input background */
            border: 1px solid #334155; /* Subtle border */
            color: #f8fafc; /* Light input text */
            transition: all 0.3s ease-in-out;
            border-radius: 0.5rem; /* Rounded corners */
        }
        .input-style:focus {
            border-color: #4a75ff; /* Primary blue focus border */
            box-shadow: 0 0 0 3px rgba(74, 117, 255, 0.5); /* Primary blue focus ring */
            background-color: #151a2e; /* Slightly darker on focus */
        }

      
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-30px); } 
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes pulse-subtle {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.05); opacity: 0.9; }
        }
        @keyframes pulse-width {
            from { width: 0%; opacity: 0; }
            to { opacity: 1; } 
        }

        .animated-fadeIn {
            animation: fadeIn 1s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
        }
        .animated-slideInUp {
            animation: slideInUp 0.9s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
        }
        .animated-slideInLeft {
            animation: slideInLeft 0.9s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
        }
        .animated-pulse-subtle {
            animation: pulse-subtle 2.5s infinite ease-in-out;
        }
        .animated-pulse-width {
            animation: pulse-width 1.5s ease-out forwards;
        }

        [data-animate] {
            opacity: 0;
        }

        @media (max-width: 767px) {
            .header-cta {
                display: none; 
            }
            .footer-grid {
                grid-template-columns: 1fr; 
                text-align: center;
            }
            .footer-grid div {
                margin-bottom: 1.5rem; 
            }
            .footer-grid div:last-child {
                margin-bottom: 0;
            }
            .footer-grid ul {
                padding-left: 0;
            }
            .footer-grid li {
                list-style: none;
            }
            .footer-social-links {
                justify-content: center; 
            }
        }
    </style>
</head>
<body class="antialiased flex flex-col min-h-screen">
    {{-- NEW Header Design --}}
    <header class="bg-gray-900 bg-opacity-90 backdrop-blur-md shadow-xl p-4 sticky top-0 z-50 border-b border-gray-700/50">
        <div class="container mx-auto flex items-center justify-between px-4 md:px-8">
            {{-- Logo / Brand Name --}}
            <a href="{{ url('/') }}" class="text-3xl lg:text-4xl font-extrabold text-blue-400 hover:text-blue-300 transition duration-300 ease-in-out tracking-wider">
                Rafi Nurfadhil Putra <span class="text-gray-500 text-base font-inter font-normal ml-2 hidden sm:inline"></span>
            </a>

            {{-- Desktop Navigation --}}
            <nav class="hidden md:flex items-center space-x-6 lg:space-x-8">
                <a href="{{ url('/') }}" class="text-gray-300 hover:text-blue-400 text-lg font-medium transition duration-300 ease-in-out relative group p-2 rounded-md">
                    Home
                    <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="{{ url('/about') }}" class="text-gray-300 hover:text-blue-400 text-lg font-medium transition duration-300 ease-in-out relative group p-2 rounded-md">
                    About Me
                    <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="{{ url('/skills') }}" class="text-gray-300 hover:text-blue-400 text-lg font-medium transition duration-300 ease-in-out relative group p-2 rounded-md">
                    Skills
                    <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="{{ url('/portfolio') }}" class="text-gray-300 hover:text-blue-400 text-lg font-medium transition duration-300 ease-in-out relative group p-2 rounded-md">
                    Portfolio
                    <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
                </a>
            
                <a href="{{ url('/contact') }}" class="btn-primary-gradient text-white px-5 py-2 rounded-full text-base font-semibold shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out">
                    Contact Now
                </a>
            </nav>

            {{-- Mobile Menu Button --}}
            <button id="mobile-menu-button" class="md:hidden text-gray-300 hover:text-blue-400 focus:outline-none p-2 rounded-md transition duration-300 ease-in-out">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        {{-- Mobile Menu (slide-down) --}}
        <div id="mobile-menu" class="hidden md:hidden bg-gray-800 bg-opacity-95 backdrop-blur-sm px-4 pt-4 pb-6 shadow-xl transition-all duration-300 ease-in-out">
            <a href="{{ url('/') }}" class="block text-gray-200 hover:text-blue-400 py-3 px-6 rounded-lg text-lg font-medium transition duration-300 ease-in-out hover:bg-gray-700/50 mb-2">Home</a>
            <a href="{{ url('/about') }}" class="block text-gray-200 hover:text-blue-400 py-3 px-6 rounded-lg text-lg font-medium transition duration-300 ease-in-out hover:bg-gray-700/50 mb-2">About Me</a>
            <a href="{{ url('/skills') }}" class="block text-gray-200 hover:text-blue-400 py-3 px-6 rounded-lg text-lg font-medium transition duration-300 ease-in-out hover:bg-gray-700/50 mb-2">Skills</a>
            <a href="{{ url('/portfolio') }}" class="block text-gray-200 hover:text-blue-400 py-3 px-6 rounded-lg text-lg font-medium transition duration-300 ease-in-out hover:bg-gray-700/50 mb-2">Portfolio</a>
            <a href="{{ url('/contact') }}" class="block text-gray-200 hover:text-blue-400 py-3 px-6 rounded-lg text-lg font-medium transition duration-300 ease-in-out hover:bg-gray-700/50 mb-2">Contact</a>
        </div>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- NEW Footer Design --}}
    <footer class="bg-gray-950 text-gray-400 py-12 border-t border-gray-800 shadow-2xl">
        <div class="container mx-auto px-4 md:px-8 footer-grid grid grid-cols-1 md:grid-cols-3 gap-10">
            {{-- Section 1: Brand & About --}}
            <div class="md:col-span-1">
                <h3 class="text-3xl font-extrabold text-blue-400 mb-4 font-montserrat tracking-wide">
                    Rafi Nurfadhil Putra
                </h3>
                <p class="text-gray-300 text-sm leading-relaxed mb-4">
                    Passionate about crafting dynamic web experiences and bringing innovative ideas to life. Dedicated to clean code, user-centric design, and continuous learning.
                </p>
            </div>

            {{-- Section 2: Navigation --}}
            <div class="md:col-span-1">
                <h4 class="text-xl font-semibold text-white mb-5 font-montserrat">Navigation</h4>
                <ul class="space-y-3">
                    <li><a href="{{ url('/') }}" class="text-gray-400 hover:text-blue-400 transition-colors duration-300 flex items-center"><i class="fas fa-chevron-right text-xs mr-2 text-blue-500"></i> Home</a></li>
                    <li><a href="{{ url('/about') }}" class="text-gray-400 hover:text-blue-400 transition-colors duration-300 flex items-center"><i class="fas fa-chevron-right text-xs mr-2 text-blue-500"></i> About Me</a></li>
                    <li><a href="{{ url('/skills') }}" class="text-gray-400 hover:text-blue-400 transition-colors duration-300 flex items-center"><i class="fas fa-chevron-right text-xs mr-2 text-blue-500"></i> Skills</a></li>
                    <li><a href="{{ url('/portfolio') }}" class="text-gray-400 hover:text-blue-400 transition-colors duration-300 flex items-center"><i class="fas fa-chevron-right text-xs mr-2 text-blue-500"></i> Portfolio</a></li>
                    <li><a href="{{ url('/contact') }}" class="text-gray-400 hover:text-blue-400 transition-colors duration-300 flex items-center"><i class="fas fa-chevron-right text-xs mr-2 text-blue-500"></i> Contact</a></li>
                </ul>
            </div>

            {{-- Section 3: Contact & Social Media --}}
            <div class="md:col-span-1">
                <h4 class="text-xl font-semibold text-white mb-5 font-montserrat">Get In Touch</h4>
                <p class="text-gray-300 mb-4">Have an exciting project in mind or just want to chat? Reach out!</p>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-center">
                        <i class="fas fa-envelope text-blue-500 mr-3"></i>
                        <a href="mailto:your.email@example.com" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">rnurfadil5@gmail.com</a>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone-alt text-blue-500 mr-3"></i>
                        <a href="tel:+1234567890" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">08989103032</a>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-map-marker-alt text-blue-500 mr-3"></i>
                        <span class="text-gray-400">Depok, West Java, Indonesia</span>
                    </li>
                </ul>

                <div class="flex space-x-6 footer-social-links">
                    <a href="https://linkedin.com/in/yourprofile" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-blue-400 transition duration-300 transform hover:scale-125">
                        <i class="fab fa-linkedin fa-2x"></i>
                    </a>
                    <a href="https://github.com/bribubub" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-blue-400 transition duration-300 transform hover:scale-125">
                        <i class="fab fa-github fa-2x"></i>
                    </a>
                    <a href="https://x.com/ImpactKonin" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-blue-400 transition duration-300 transform hover:scale-125">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-800/60 mt-10 pt-6 text-center text-gray-500 text-sm">
            <p>&copy; <span id="current-year-footer"></span> Rafi Nurfadhil Putra. All rights reserved.</p>
        </div>
    </footer>

    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        document.getElementById('current-year-footer').textContent = new Date().getFullYear();

        const animateElements = document.querySelectorAll('[data-animate]');

        const observerOptions = {
            root: null, 
            rootMargin: '0px',
            threshold: 0.1 
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const animationType = element.dataset.animate;
                    const animationDelay = element.dataset.delay || '0'; 

                    if (!element.classList.contains('opacity-0')) {
                        element.classList.add('opacity-0');
                    }

                    setTimeout(() => {
                        element.classList.remove('opacity-0'); 
                        element.classList.add(`animated-${animationType}`); 
                        element.style.animationDelay = `${animationDelay}ms`; 
                    }, 0); 

                   
                    observer.unobserve(element);
                }
            });
        }, observerOptions);

        animateElements.forEach(element => {
            observer.observe(element);
        });
    </script>
</body>
</html>