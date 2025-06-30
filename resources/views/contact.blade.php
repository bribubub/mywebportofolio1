@extends('layouts.app')

@section('title', 'Your Name - Contact')

@section('content')
<section id="contact" class="section-padding">
    <div class="container mx-auto px-4 md:px-8 max-w-5xl card-base rounded-2xl p-8 lg:p-12 opacity-0" data-animate="fadeIn" data-delay="100">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-12 text-gradient opacity-0" data-animate="slideInUp" data-delay="200">Let's Connect</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            
            <div class="bg-gray-900 p-8 rounded-xl shadow-lg border border-gray-700 opacity-0" data-animate="slideInLeft" data-delay="400">
                <h3 class="text-3xl font-semibold mb-6 text-blue-400 border-b-2 border-gray-700 pb-3">Reach Out Directly</h3>
                <ul class="space-y-6 text-gray-300 text-lg">
                    <li class="flex items-center">
                        <svg class="w-7 h-7 mr-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <span>Email: <a href="mailto:rnurfadil5@gmail.com" class="text-blue-400 hover:underline">rnurfadil5@gmail.com</a></span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-7 h-7 mr-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>Phone: <a href="tel:+628989103032" class="text-blue-400 hover:underline">08989103032</a></span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-7 h-7 mr-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        <span>Location: Depok, West Java, Indonesia</span>
                    </li>
                </ul>
                <div class="mt-10">
                    <h3 class="text-3xl font-semibold mb-5 text-blue-400 border-b-2 border-gray-700 pb-3">Find Me Online</h3>
                    <div class="flex space-x-8 justify-center md:justify-start">
                        <a href="https://linkedin.com/in/yourprofile" target="_blank" class="text-gray-400 hover:text-blue-400 transition duration-300 transform hover:scale-110">
                            <svg fill="currentColor" viewBox="0 0 24 24" class="w-9 h-9"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2zM4 6a2 2 0 110-4 2 2 0 010 4z"></path></svg>
                        </a>
                        <a href="https://github.com/yourprofile" target="_blank" class="text-gray-400 hover:text-blue-400 transition duration-300 transform hover:scale-110">
                            <svg fill="currentColor" viewBox="0 0 24 24" class="w-9 h-9"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.475.088.687-.206.687-.457 0-.223-.008-.813-.013-1.636-2.782.603-3.37-1.34-3.37-1.34-.454-1.15-1.11-1.462-1.11-1.462-.908-.62.068-.608.068-.608 1.007.073 1.532 1.03 1.532 1.03.89 1.528 2.336 1.085 2.903.829.09-.643.349-1.085.635-1.336-2.22-.25-4.555-1.11-4.555-4.945 0-1.09.39-1.986 1.029-2.684-.103-.252-.446-1.272.097-2.659 0 0 .84-.27 2.75 1.025A9.643 9.643 0 0112 6.844c.85.006 1.7.113 2.508.337 1.909-1.295 2.748-1.025 2.748-1.025.542 1.387.2 2.407.098 2.659.64.698 1.028 1.594 1.028 2.684 0 3.844-2.339 4.69-4.565 4.935.359.309.678.92.678 1.855 0 1.336-.012 2.417-.012 2.747 0 .254.209.55.694.456C20.137 20.19 23 16.42 23 12.017 23 6.484 18.522 2 13 2h-1z" clip-rule="evenodd"></path></svg>
                        </a>
                        <a href="https://twitter.com/yourprofile" target="_blank" class="text-gray-400 hover:text-blue-400 transition duration-300 transform hover:scale-110">
                            <svg fill="currentColor" viewBox="0 0 24 24" class="w-9 h-9"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646A4.18 4.18 0 0021.6 4.6c-.772.434-1.62.75-2.527.921A4.149 4.149 0 0012.02 2c-2.457 0-4.444 1.992-4.444 4.444 0 .35.04.69.118 1.02A12.553 12.553 0 013 4.298a4.484 4.484 0 001.385 5.978 4.095 4.095 0 01-1.8-.49v.056c0 2.152 1.53 3.945 3.567 4.368A4.183 4.183 0 016.35 15.6c-.198 0-.394-.01-.585-.055.56 1.76 2.195 3.044 4.138 3.078A8.346 8.346 0 013.5 20.08c-.768 0-1.52-.045-2.246-.132.98 1.83 2.766 3.102 4.885 3.23a11.758 11.758 0 007.457 2.585c8.455 0 13.045-6.974 13.045-13.046 0-.199-.004-.398-.013-.597A9.324 9.324 0 0022 5.92l-.001-.001-.001-.001z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-gray-900 p-8 rounded-xl shadow-lg border border-gray-700 opacity-0" data-animate="fadeIn" data-delay="600">
                <h3 class="text-3xl font-semibold mb-6 text-blue-400 border-b-2 border-gray-700 pb-3">Send Me a Message</h3>

                <!-- Area untuk menampilkan pesan sukses/gagal dari Email.js -->
                <div id="form-messages" class="mb-4"></div>

                <form id="contact-form" class="space-y-6">
                    <div>
                        <label for="name" class="block text-gray-300 text-sm font-bold mb-2">Name</label>
                        <input type="text" id="name" name="name" class="input-style shadow-sm appearance-none rounded-lg w-full py-3 px-4 leading-tight focus:outline-none focus:ring-2" placeholder="Your Name" required>
                    </div>
                    <div>
                        <label for="email" class="block text-gray-300 text-sm font-bold mb-2">Email</label>
                        <input type="email" id="email" name="email" class="input-style shadow-sm appearance-none rounded-lg w-full py-3 px-4 leading-tight focus:outline-none focus:ring-2" placeholder="your.email@example.com" required>
                    </div>
                    <div>
                        <label for="message" class="block text-gray-300 text-sm font-bold mb-2">Message</label>
                        <textarea id="message" name="message" rows="7" class="input-style shadow-sm appearance-none rounded-lg w-full py-3 px-4 leading-tight focus:outline-none focus:ring-2" placeholder="Your message..." required></textarea>
                    </div>
                    <button type="submit" id="submit-button" class="btn-primary-gradient text-white font-bold py-3 px-8 rounded-full text-lg shadow-xl transform transition duration-300 hover:scale-105 w-full focus:outline-none focus:ring-4 focus:ring-blue-300 focus:ring-opacity-75">Send Message</button>
                    <div id="loading-indicator" class="hidden text-center text-blue-400 mt-4">Mengirim...</div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Sertakan CDN Email.js -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

<script type="text/javascript">
    // Inisialisasi Email.js dengan Kunci Publik Anda
    // Anda bisa menemukan Kunci Publik Anda di dashboard Email.js di bagian Account -> API Keys
    (function() {
        emailjs.init("_cPXMwdoKLiLG3I9V"); // Ganti dengan Kunci Publik Anda yang sebenarnya
    })();

    window.onload = function() {
        const contactForm = document.getElementById('contact-form');
        const submitButton = document.getElementById('submit-button');
        const loadingIndicator = document.getElementById('loading-indicator');
        const formMessages = document.getElementById('form-messages');

        contactForm.addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah pengiriman formulir bawaan

            // Tampilkan indikator loading dan nonaktifkan tombol
            submitButton.disabled = true;
            submitButton.classList.add('opacity-50', 'cursor-not-allowed');
            loadingIndicator.classList.remove('hidden');
            formMessages.innerHTML = ''; // Hapus pesan sebelumnya

            // Kirim formulir menggunakan Email.js
            // Ganti 'YOUR_SERVICE_ID' dan 'YOUR_TEMPLATE_ID' dengan ID Layanan dan Template Anda
            emailjs.sendForm('service_npdjdgg', 'template_tvt6de5', this)
                .then(function() {
                    // Saat berhasil
                    formMessages.innerHTML = `
                        <div class="bg-green-600 text-white p-4 rounded-lg mb-4 shadow-md animated-fadeIn">
                            Pesan Anda telah berhasil terkirim!
                        </div>
                    `;
                    contactForm.reset(); // Bersihkan kolom formulir
                }, function(error) {
                    // Saat terjadi kesalahan
                    formMessages.innerHTML = `
                        <div class="bg-red-600 text-white p-4 rounded-lg mb-4 shadow-md animated-fadeIn">
                            Gagal mengirim pesan Anda. Silakan coba lagi. Error: ${JSON.stringify(error)}
                        </div>
                    `;
                })
                .finally(function() {
                    // Aktifkan kembali tombol dan sembunyikan indikator loading
                    submitButton.disabled = false;
                    submitButton.classList.remove('opacity-50', 'cursor-not-allowed');
                    loadingIndicator.classList.add('hidden');
                });
        });
    };
</script>
@endsection
