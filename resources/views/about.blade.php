@extends('layouts.app')

@section('title', 'Your Name - About')

@section('content')
<section id="about" class="section-padding bg-gradient-to-br from-gray-950 via-gray-900 to-gray-950 text-white">
    <div class="container mx-auto max-w-7xl px-6 py-20 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center opacity-0" data-animate="fadeIn" data-delay="100">
        

    <div class="relative group opacity-0" data-animate="slideInLeft" data-delay="400">
            <div class="w-full h-full bg-gray-800 rounded-2xl p-6 shadow-2xl border border-gray-700 transform transition hover:scale-105">
                <img src="WhatsApp Image 2023-02-05 at 20.14.19.jpg" alt="Profile Image" class="w-full rounded-xl mb-6">
                <div class="text-center">
                    <h3 class="text-2xl font-bold text-blue-400">Rafi Nurfadhil Putra</h3>
                    <p class="text-gray-400 mt-2">Internet of Things</p>
                </div>
            </div>
        </div>

        
        <div class="space-y-8">
            <h2 class="text-4xl md:text-5xl font-extrabold text-gradient opacity-0" data-animate="slideInUp" data-delay="200">About Me</h2>

            <div class="space-y-4 text-lg text-gray-300 leading-relaxed">
                <p class="opacity-0" data-animate="slideInUp" data-delay="600">
                    Hello IM Rafi Nurfadhil Putra from Informatic Technology my major from IoT (Internet of things) and i am a full stack developer
            </p>
                <p class="opacity-0" data-animate="slideInUp" data-delay="800">
                    my hobby its pkaying games handphone shooter, reading some books from japanese manga, and watching anime
            </p>
                <p class="opacity-0" data-animate="slideInUp" data-delay="1000">
                    I am passionate about creating innovative and user-centric web applications that solve real-world problems. With a strong foundation in both front-end and back-end technologies, I strive to deliver seamless and engaging user experiences.
            </p>
            </div>

            <a href="{{ url('/contact') }}" class="inline-block btn-primary-gradient text-white font-bold py-3 px-6 rounded-full text-lg shadow-xl transform transition duration-300 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 opacity-0" data-animate="slideInUp" data-delay="1200">
                Let's Connect
            </a>
        </div>
    </div>
</section>
@endsection