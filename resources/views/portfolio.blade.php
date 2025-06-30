@extends('layouts.app')

@section('title', 'Your Name - Portfolio')

@section('content')
<section id="portfolio" class="section-padding">
    <div class="container mx-auto px-4 md:px-8 max-w-7xl card-base rounded-2xl p-8 lg:p-12 opacity-0" data-animate="fadeIn" data-delay="100">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-12 text-gradient opacity-0" data-animate="slideInUp" data-delay="200">My Recent Work</h2>
        <p class="text-center text-gray-400 text-lg mb-10 max-w-3xl mx-auto opacity-0" data-animate="fadeIn" data-delay="400">
            A showcase of my projects, demonstrating my skills in full-stack development, UI/UX design, and problem-solving. Each project represents a unique challenge and solution.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            
            <div class="card-base rounded-xl overflow-hidden group opacity-0" data-animate="slideInUp" data-delay="500">
                <img src="https://placehold.co/600x400/1E293B/60A5FA?text=E-com merce" alt="E-commerce Platform Thumbnail" class="w-full h-56 object-cover object-center border-b border-gray-700 transform group-hover:scale-105 transition duration-300">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-3 text-blue-300">BRIN Project</h3>
                    <p class="text-gray-400 text-sm mb-4 line-clamp-3">
                        Brin project make especially in camera so it will detect using esp 32 cam
                </p>
                    <a href="#" class="text-blue-400 hover:text-blue-300 font-medium text-lg flex items-center group">
                        View Project
                        <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4-4m0 0l-4-4m4 4H3"></path></svg>
                    </a>
                </div>
            </div>

            
            <div class="card-base rounded-xl overflow-hidden group opacity-0" data-animate="slideInUp" data-delay="700">
                <img src="https://placehold.co/600x400/1E293B/60A5FA?text=Task+Manager" alt="Task Management App Thumbnail" class="w-full h-56 object-cover object-center border-b border-gray-700 transform group-hover:scale-105 transition duration-300">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-3 text-blue-300">Cibarusah Project 1</h3>
                    <p class="text-gray-400 text-sm mb-4 line-clamp-3">
                        Built a sophisticated task management application with real-time updates and collaborative features. Users can create, organize, assign, and track tasks with custom deadlines, priorities, and categories. Key features include drag-and-drop task reordering, user collaboration with permissions, and real-time notifications leveraging WebSockets for an instant feedback loop.
                    </p>
                    <a href="#" class="text-blue-400 hover:text-blue-300 font-medium text-lg flex items-center group">
                        View Project
                        <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4-4m0 0l-4-4m4 4H3"></path></svg>
                    </a>
                </div>
            </div>

            
            <div class="card-base rounded-xl overflow-hidden group opacity-0" data-animate="slideInUp" data-delay="900">
                <img src="https://placehold.co/600x400/1E293B/60A5FA?text=Blog+Platform" alt="Blog Platform Thumbnail" class="w-full h-56 object-cover object-center border-b border-gray-700 transform group-hover:scale-105 transition duration-300">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-3 text-blue-300">Cibarusah Project 2</h3>
                    <p class="text-gray-400 text-sm mb-4 line-clamp-3">
                        Designed and developed a custom blogging platform from scratch, featuring an intuitive content management system (CMS) for authors. Supports rich text editing, markdown integration, image uploads, and category management. Includes a robust commenting system with moderation capabilities and search engine optimization (SEO) friendly URLs.
                    </p>
                    <a href="#" class="text-blue-400 hover:text-blue-300 font-medium text-lg flex items-center group">
                        View Project
                        <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4-4m0 0l-4-4m4 4H3"></path></svg>
                    </a>
                </div>
            </div>

           
            <div class="card-base rounded-xl overflow-hidden group opacity-0" data-animate="slideInUp" data-delay="1100">
                <img src="https://placehold.co/600x400/1E293B/60A5FA?text=Social+App" alt="Social Media Clone Thumbnail" class="w-full h-56 object-cover object-center border-b border-gray-700 transform group-hover:scale-105 transition duration-300">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-3 text-blue-300">Intership In winata </h3>
                    <p class="text-gray-400 text-sm mb-4 line-clamp-3">
                        Exploration and development of a simplified social media platform focusing on core functionalities: user profiles, post creation, liking, and commenting. Emphasized a scalable database design and efficient data retrieval for a smooth user experience, simulating real-world social interactions.
                    </p>
                    <a href="#" class="text-blue-400 hover:text-blue-300 font-medium text-lg flex items-center group">
                        View Project
                        <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4-4m0 0l-4-4m4 4H3"></path></svg>
                    </a>
                </div>
            </div>

            
            <div class="card-base rounded-xl overflow-hidden group opacity-0" data-animate="slideInUp" data-delay="1300">
                <img src="https://placehold.co/600x400/1E293B/60A5FA?text=API+Service" alt="RESTful API Service Thumbnail" class="w-full h-56 object-cover object-center border-b border-gray-700 transform group-hover:scale-105 transition duration-300">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-3 text-blue-300">RESTful API Service</h3>
                    <p class="text-gray-400 text-sm mb-4 line-clamp-3">
                        Designed and implemented a comprehensive RESTful API for inventory management, complete with robust authentication (JWT), thorough input validation, and full CRUD (Create, Read, Update, Delete) operations. The API is meticulously documented using Swagger/OpenAPI specifications for easy integration by client applications.
                    </p>
                    <a href="#" class="text-blue-400 hover:text-blue-300 font-medium text-lg flex items-center group">
                        View Project
                        <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4-4m0 0l-4-4m4 4H3"></path></svg>
                    </a>
                </div>
            </div>

            
            <div class="card-base rounded-xl overflow-hidden group opacity-0" data-animate="slideInUp" data-delay="1500">
                <img src="https://placehold.co/600x400/1E293B/60A5FA?text=Data+Viz" alt="Data Visualization Thumbnail" class="w-full h-56 object-cover object-center border-b border-gray-700 transform group-hover:scale-105 transition duration-300">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-3 text-blue-300">Interactive Data Visualization</h3>
                    <p class="text-gray-400 text-sm mb-4 line-clamp-3">
                        Created dynamic and interactive data visualization dashboards using D3.js, transforming complex datasets into easily digestible and engaging visual stories. Users can filter, sort, and drill down into data insights through various chart types and interactive elements, providing a powerful analytical tool.
                    </p>
                    <a href="#" class="text-blue-400 hover:text-blue-300 font-medium text-lg flex items-center group">
                        View Project
                        <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4-4m0 0l-4-4m4 4H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection