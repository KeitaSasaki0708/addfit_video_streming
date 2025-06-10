<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADDFIT-AI</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #9333ea, #db2777);
            font-family: 'Helvetica Neue', sans-serif;
        }

        .logo {
            position: fixed;
            top: 20px;
            right: 40px;
            z-index: 1000;
            width: 80px;
            height: auto;
            filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.3));
            transition: all 0.3s ease;
            animation: float 3s ease-in-out infinite;
        }

        @media screen and (max-width: 768px) {
            .logo {
                display: none;
            }
        }

        @media screen and (max-width: 480px) {
            .logo {
                display: none;
            }
        }

        .logo:hover {
            transform: scale(1.05) rotate(5deg);
            filter: drop-shadow(0 0 15px rgba(255, 255, 255, 0.5));
            animation: none;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .video-container {
            position: relative;
            width: 90vw;
            max-width: 1400px;
            aspect-ratio: 16/9;
            background: #000;
            box-shadow: 0 0 100px rgba(255, 255, 255, 0.05),
                0 20px 50px rgba(255, 255, 255, 0.3);
            overflow: hidden;
            border-radius: 20px;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .video-container:hover {
            box-shadow: 0 0 150px rgba(255, 255, 255, 0.1),
                0 30px 60px rgba(255, 255, 255, 0.4);
            transform: translateY(-5px);
        }

        video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: contrast(1.2) brightness(0.9);
            border-radius: 20px;
        }

        .artistic-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                linear-gradient(90deg, rgba(255, 0, 0, 0.05) 0%, transparent 50%),
                linear-gradient(180deg, rgba(0, 255, 255, 0.05) 0%, transparent 50%),
                linear-gradient(270deg, rgba(255, 255, 0, 0.05) 0%, transparent 50%);
            pointer-events: none;
            mix-blend-mode: screen;
            animation: overlayShift 10s infinite alternate;
            border-radius: 20px;
        }

        @keyframes overlayShift {
            0% {
                transform: translateX(-5%) translateY(-5%);
            }

            100% {
                transform: translateX(5%) translateY(5%);
            }
        }

        .video-container::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #ff0000, #00ff00, #0000ff, #ff0000);
            z-index: -1;
            border-radius: 22px;
            animation: borderRotate 10s linear infinite;
            filter: blur(10px);
            opacity: 0.5;
        }

        @keyframes borderRotate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <img src="{{ asset('images/logo/logo-no-background.png') }}" alt="Logo" class="logo">
    <div class="video-container">
        <video controls>
            <source src="{{ asset('videos/addfit_video.mp4') }}" type="video/mp4">
        </video>
        <div class="artistic-overlay"></div>
    </div>
</body>

</html>
