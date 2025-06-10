<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADDFIT-AI</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="h-screen flex flex-col justify-center items-center bg-gradient-to-br from-purple-600 to-pink-500 font-sans overflow-hidden">
    <div class="w-full flex flex-col items-center">
        <div class="block text-center text-white font-bold text-2xl md:text-4xl drop-shadow-md mb-4 relative">
            <div class="absolute -left-8 -top-8 w-16 h-16 bg-white/20 rounded-full blur-xl"></div>
            <div class="absolute -right-8 -top-8 w-16 h-16 bg-white/20 rounded-full blur-xl"></div>
            ADDFIT-AIで...
        </div>

        <img src="{{ asset('images/logo/logo-no-background.png') }}" alt="Logo"
            class="absolute right-5 top-5 w-12 md:w-16 drop-shadow-[0_0_10px_rgba(255,255,255,0.5)] z-10">

        <div
            class="relative w-[90vw] max-w-[1200px] aspect-video bg-black rounded-2xl shadow-2xl overflow-hidden flex items-center justify-center">
            <video controls class="w-full h-full object-cover rounded-2xl" poster="{{ asset('images/samune.png') }}">
                <source src="{{ asset('videos/addfit_video.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="block text-center text-white font-bold text-2xl md:text-4xl drop-shadow-md mt-4 relative">
            <div class="absolute -left-8 -bottom-8 w-16 h-16 bg-white/20 rounded-full blur-xl"></div>
            <div class="absolute -right-8 -bottom-8 w-16 h-16 bg-white/20 rounded-full blur-xl"></div>
            バックオフィス業務を自動化！！
        </div>
    </div>
</body>

</html>
