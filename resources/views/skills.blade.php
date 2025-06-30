@extends('layouts.app')

@section('title', 'Your Name - Skills')

@section('content')
<section id="skills" class="section-padding">
    <div class="container mx-auto px-4 md:px-8 max-w-6xl card-base rounded-2xl p-8 lg:p-12 opacity-0" data-animate="fadeIn" data-delay="100">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-12 text-gradient opacity-0" data-animate="slideInUp" data-delay="200">My Expertise</h2>
       <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10">

            
            <div class="card-base rounded-xl p-8 opacity-0" data-animate="slideInUp" data-delay="400">
                <h3 class="text-3xl font-semibold mb-6 text-blue-400 border-b-2 border-gray-700 pb-3">Technical Skills</h3>
                <ul class="space-y-6">
                    <li>
                        <div class="flex justify-between items-center mb-1">
                            <span class="text-gray-200 text-lg">Laravel & PHP</span>
                            <span class="text-base font-medium text-blue-300">Advanced</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-3">
                            <div class="bg-blue-500 h-3 rounded-full opacity-0" data-animate="pulse-width" data-delay="600" style="width: 90%;"></div>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-between items-center mb-1">
                            <span class="text-gray-200 text-lg">JavaScript (React.js, Vue.js)</span>
                            <span class="text-base font-medium text-blue-300">Proficient</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-3">
                            <div class="bg-blue-500 h-3 rounded-full opacity-0" data-animate="pulse-width" data-delay="700" style="width: 80%;"></div>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-between items-center mb-1">
                            <span class="text-gray-200 text-lg">HTML & CSS (Tailwind CSS)</span>
                            <span class="text-base font-medium text-blue-300">Expert</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-3">
                            <div class="bg-blue-500 h-3 rounded-full opacity-0" data-animate="pulse-width" data-delay="800" style="width: 95%;"></div>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-between items-center mb-1">
                            <span class="text-gray-200 text-lg">Database (MySQL, PostgreSQL)</span>
                            <span class="text-base font-medium text-blue-300">Proficient</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-3">
                            <div class="bg-blue-500 h-3 rounded-full opacity-0" data-animate="pulse-width" data-delay="900" style="width: 75%;"></div>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-between items-center mb-1">
                            <span class="text-gray-200 text-lg">Version Control (Git, GitHub)</span>
                            <span class="text-base font-medium text-blue-300">Advanced</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-3">
                            <div class="bg-blue-500 h-3 rounded-full opacity-0" data-animate="pulse-width" data-delay="1000" style="width: 90%;"></div>
                        </div>
                    </li>
                </ul>
            </div>

            
            <div class="card-base rounded-xl p-8 opacity-0" data-animate="slideInUp" data-delay="600">
                <h3 class="text-3xl font-semibold mb-6 text-blue-400 border-b-2 border-gray-700 pb-3">Soft Skills</h3>
                <ul class="list-disc list-inside space-y-4 text-gray-300 pl-4">
                    <li>**Problem-Solving:** Adept at dissecting complex challenges and architecting elegant, scalable solutions.</li>
                    <li>**Communication:** Articulate and effective communicator, fostering clear and productive collaboration.</li>
                    <li>**Teamwork:** Proven ability to thrive in collaborative environments, contributing to shared success.</li>
                    <li>**Adaptability:** Eager to learn and rapidly integrate new technologies and methodologies.</li>
                    <li>**Time Management:** Highly organized and efficient, consistently delivering projects on schedule.</li>
                    <li>**Critical Thinking:** Analyzes situations thoroughly to make informed decisions.</li>
                    <li>**Leadership:** Capable of guiding and motivating teams towards common goals.</li>
                </ul>
            </div>

            
        </div>
    </div>
</section>
@endsection