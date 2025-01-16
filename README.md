<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รูปภาพและอิโมจิเด้ง</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        h1 {
            margin-top: 50px;
            color: #ff69b4;
        }
        button {
            background-color: #ff69b4;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            border-radius: 25px;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }
        button:hover {
            background-color: #ff85c1;
            transform: scale(1.1);
        }
        .emoji-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }
        .emoji {
            position: absolute;
            font-size: 30px;
            opacity: 0;
            animation: flyAndSpin 3s cubic-bezier(0.25, 0.1, 0.25, 1) forwards;
        }
        .emoji img {
            width: 80px;
            height: 80px;
            transform-origin: center; /* ตั้งจุดหมุนที่กลาง */
        }
        @keyframes flyAndSpin {
            0% {
                transform: translate(0, 0) rotate(0deg) scale(0.5);
                opacity: 1;
            }
            50% {
                transform: translate(calc(var(--x) * 0.5), calc(var(--y) * 0.5)) rotate(360deg) scale(1.2);
                opacity: 0.8;
            }
            100% {
                transform: translate(var(--x), var(--y)) rotate(180deg) scale(1);
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <h1>BIBI Click Here !!!</h1>
    <button onclick="launchEmojis()">:)))</button>

    <div class="emoji-container" id="emojiContainer"></div>

    <script>
        function getRandomPositionAndDirection() {
            const angle = Math.random() * 2 * Math.PI; // มุมแบบสุ่ม
            const distance = Math.random() * 500 + 300; // ระยะทางพุ่ง
            const x = Math.cos(angle) * distance; // คำนวณตำแหน่ง X
            const y = Math.sin(angle) * distance; // คำนวณตำแหน่ง Y
            return { x, y };
        }

        function launchEmojis() {
            const container = document.getElementById('emojiContainer');
            const emojis = [ '💖', '✨',]     ;
            const images = [
                'https://scontent.fbkk10-1.fna.fbcdn.net/v/t1.15752-9/473074686_633430365725133_1658561027266464650_n.png?_nc_cat=107&ccb=1-7&_nc_sid=9f807c&_nc_ohc=8M5Ph3ctkvIQ7kNvgE3qMM2&_nc_zt=23&_nc_ht=scontent.fbkk10-1.fna&oh=03_Q7cD1gEqahsSmEhHIBJPmPYPkQ0_CYYoxJ3ZbxooQi3xzdTdzw&oe=67AFF1EC',
                'https://scontent.fbkk14-1.fna.fbcdn.net/v/t1.15752-9/474006326_519749213810331_5273234009984477625_n.png?_nc_cat=111&ccb=1-7&_nc_sid=9f807c&_nc_ohc=X4zM5oxeqesQ7kNvgGZi66_&_nc_zt=23&_nc_ht=scontent.fbkk14-1.fna&oh=03_Q7cD1gH-a9akePABBWcnSTzUUMs1iW1lyTC9rvuqotn-CEmCPQ&oe=67AFE2B6',
                'https://freepnglogo.com/images/all_img/1718884189hello-kitty-png-stickers.png'
            ];

            for (let i = 0; i < 30; i++) {
                const div = document.createElement('div');
                div.className = 'emoji';

                // สุ่มเลือกอิโมจิหรือรูปภาพ
                if (Math.random() > 0.5) {
                    div.textContent = emojis[Math.floor(Math.random() * emojis.length)];
                } else {
                    const img = document.createElement('img');
                    img.src = images[Math.floor(Math.random() * images.length)];
                    div.appendChild(img);
                }

                // ตั้งค่าตำแหน่งเริ่มต้นและปลายทาง
                const startX = window.innerWidth / 2;
                const startY = window.innerHeight / 2;
                const { x, y } = getRandomPositionAndDirection();
                div.style.left = `${startX}px`;
                div.style.top = `${startY}px`;
                div.style.setProperty('--x', `${x}px`);
                div.style.setProperty('--y', `${y}px`);

                container.appendChild(div);

                // ลบหลังจากแอนิเมชันสิ้นสุด
                setTimeout(() => {
                    div.remove();
                }, 3000);
            }
        }
    </script>
</body>
</html>
