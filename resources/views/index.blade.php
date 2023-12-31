<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Cormorant+Infant:wght@700&family=Maitree:wght@300&display=swap" rel="stylesheet">
    <title>HAPPY NEW YEAR SAYANGNYA AKU - FEBRIYENI HENDRIKA VICTORIA</title>
    <style>
        #image-container {
            flex-shrink: 0;
            width: 200px;
            height: 150%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
            gap: 25px;
            overflow: hidden;
            transform: rotate(15deg);
            }
            .image {
            flex-shrink: 0;
            height: 200px;
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
            animation: move 15s linear infinite alternate;
            user-select: none;
            }
            .picture {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            }
            @keyframes move {
            0% {
                transform: translatey(0);
            }
            100% {
                transform: translatey(500%);
            }
            }
            #image-container:nth-child(2) .image {
            animation-direction: alternate-reverse;
            }
            #image-container:nth-child(3) .image {
            animation-direction: alternate-reverse;
            flex-direction: column-reverse;
            justify-content: flex-start;
            }

            #image-container:hover .image {
            animation-play-state: paused;
            }
    </style>
</head>
<body class="mx-auto max-w-sm p-5 bg-black overflow-hidden">
    <div id="section1" class="absolute left-0 top-0 bottom-0">
        <canvas id="fireworksCanvas"></canvas>
    </div>
    <div data-aos="zoom-in-up"
        data-aos-delay="20"
        data-aos-duration="1000"
        data-aos-easing="ease-in-out"
        data-aos-mirror="true"
        data-aos-once="false"
        data-aos-anchor-placement="top-center">
        <div class="relative z-50 w-72 mx-auto bg-white/70 hover:scale-105 hover:bg-white transition-all duration-300 backdrop-blur-sm border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div>
                <div class="absolute p-3 bg-white/70 backdrop-blur-sm rounded-br-xl">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 font-balsamiq">Happy New Year 2024</h5>
                </div>
                <img class="rounded-t-lg" src="assets/cover.jpg" alt="" />
            </div>
            <div class="relative p-5">
                <div>
                    <h5 class="mb-2 text-2xl tracking-tight font-infant text-gray-900 dark:text-white">Hi, Febriyeni Hendrika Victoria!</h5>
                </div>
                <p class="font-infant text-gray-700 dark:text-gray-400">Someone precious that I love so deeply, my lovely girlfie <span class="animate-pulse">❤️</span></p>
                <a href="#section2" class="absolute">
                    <div class="w-14 ml-48 rounded-2xl pt-3 pb-1 mx-auto backdrop-blur-lg bg-white">
                        <img class="w-3 mx-auto animate-bounce" src="/assets/down.png" alt="" />
                    </div>  
                </a>
            </div>
        </div>
    </div>

    <div id="section2" class="relative h-screen w-full p-5">
        <div id="image-container" class="absolute">
            <div class="image">
                <img src="assets/1.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/2.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/8.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/4.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/5.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/6.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/9.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/10.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/11.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/12.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/13.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/14.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/15.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/16.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/17.jpg" alt="" class="picture">
            </div>
        </div>
        <div id="image-container" class="absolute ml-56">
            <div class="image">
                <img src="assets/1.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/2.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/8.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/4.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/5.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/6.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/9.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/10.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/11.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/12.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/13.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/14.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/15.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/16.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/17.jpg" alt="" class="picture">
            </div>
        </div>
        <div id="image-container" class="absolute -ml-56">
            <div class="image">
                <img src="assets/1.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/2.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/8.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/4.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/5.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/6.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/9.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/10.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/11.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/12.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/13.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/14.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/15.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/16.jpg" alt="" class="picture">
            </div>
            <div class="image">
                <img src="assets/17.jpg" alt="" class="picture">
            </div>
        </div>
        <div data-aos="zoom-in-down"
            data-aos-delay="20"
            data-aos-duration="1000"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center">
            <div class="relative my-24 w-72 p-6 bg-white/50 backdrop-blur-sm shadow-2xl hover:bg-white hover:scale-110 transition-all duration-300 ease-in-out dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <img class="absolute w-24 ml-56 -mt-16 rotate-45 hover:scale-150 hover:rotate-12 transition-all duration-300 ease-in-out" src="assets/unicorn.png" alt="" />
                <img class="absolute z-50 w-24 -ml-20 -mt-20 -rotate-45 hover:scale-150 hover:rotate-12 hover:-ml-16 transition-all duration-300 ease-in-out" src="assets/nagak.png" alt="" />
                <svg class="absolute -z-50 w-8 h-8 text-gray-900 dark:text-gray-600 mb-4 rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                    <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
                </svg>
                <p class="ml-10 mt-3 mb-4 font-maitree text-gray-900 dark:text-gray-400">
                    Happy New Year sayangkuu,
                    I wanna take a moment to thank you for bringing me so much happiness in 2023,
                    May our happiness continue in 2024,
                    all I wish for is we continue the sparks, to love deeply, annoy each other, laugh together and success together then being richyyy.
                </p>
                <p class="ml-10 font-maitree text-gray-900 dark:text-gray-400">
                    I want you to know that I am yours wholeheartedly and you are undeniably mine
                    Our love is a bond that grows stronger with time and it's a love that I cherish more and more each passing day. I love you so much pretty 
                    <span class="animate-pulse">❤️</span>
                </p>
                <img class="absolute w-24 -mt-20 -ml-10 rotate-0 hover:scale-150 hover:rotate-12 transition-all duration-300 ease-in-out" src="assets/unicorn2.png" alt="" />
                <a href="#section1" class="absolute">
                    <div class="w-14 ml-48 rounded-2xl pt-3 pb-1 mx-auto backdrop-blur-lg bg-white rotate-180">
                        <img class="w-3 mx-auto animate-bounce" src="/assets/down.png" alt="" />
                    </div>  
                </a>
            </div>
        </div>
    </div>

    <script>
        const canvas = document.getElementById("fireworksCanvas");
        const ctx = canvas.getContext("2d");

        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        function resizeCanvas() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        }

        window.addEventListener("resize", resizeCanvas, false);

        class Firework {
        constructor() {
            this.x = Math.random() * canvas.width;
            this.y = canvas.height;
            this.sx = Math.random() * 3 - 1.5;
            this.sy = Math.random() * -3 - 3;
            this.size = Math.random() * 2 + 1;
            this.shouldExplode = false;

            const colorVal = Math.round(0xffffff * Math.random());
            const r = colorVal >> 16;
            const g = (colorVal >> 8) & 255;
            const b = colorVal & 255;
            this.r = r;
            this.g = g;
            this.b = b;
        }

        update() {
            if (
            this.sy >= -2 ||
            this.y <= 100 ||
            this.x <= 0 ||
            this.x >= canvas.width 
            ) {
            this.shouldExplode = true;
            } else {
            this.sy += 0.01;
            }
            this.x += this.sx;
            this.y += this.sy;
        }

        draw() {
            ctx.fillStyle = `rgb(${this.r},${this.g},${this.b})`;
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fill();
        }
        }

        class Particle {
        constructor(x, y, r, g, b) {
            this.x = x;
            this.y = y;
            this.sx = Math.random() * 3 - 1.5;
            this.sy = Math.random() * 3 - 1.5;
            this.size = Math.random() * 2 + 1;
            this.life = 100;
            this.r = r;
            this.g = g;
            this.b = b;
        }

        update() {
            this.x += this.sx;
            this.y += this.sy;
            this.life -= 1;
        }

        draw() {
            ctx.fillStyle = `rgba(${this.r}, ${this.g}, ${this.b}, ${this.life / 100})`;
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fill();
        }
        }

        const fireworks = [new Firework()];
        const particles = [];

        function animate() {
        ctx.fillStyle = "rgba(0, 0, 0, 0.2)";
        ctx.fillRect(0, 0, canvas.width, canvas.height);

        if (Math.random() < 0.05) {
            fireworks.push(new Firework());
        }

        for (let i = fireworks.length - 1; i >= 0; i--) {
            fireworks[i].update();
            fireworks[i].draw();

            if (fireworks[i].shouldExplode) {
            for (let j = 0; j < 50; j++) {
                particles.push(
                new Particle(
                    fireworks[i].x,
                    fireworks[i].y,
                    fireworks[i].r,
                    fireworks[i].g,
                    fireworks[i].b
                )
                );
            }
            fireworks.splice(i, 1);
            }
        }

        for (let i = particles.length - 1; i >= 0; i--) {
            particles[i].update();
            particles[i].draw();

            if (particles[i].life <= 0) {
            particles.splice(i, 1);
            }
        }
        requestAnimationFrame(animate);
        }

        animate();

    </script>
</body>
</html>