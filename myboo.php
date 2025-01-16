
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ปุ่มน่ารัก</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
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
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
        }
        .popup img {
            width: 100px;
            height: auto;
        }
        .popup .emoji {
            font-size: 50px;
            margin-top: 10px;
        }
        .popup button {
            margin-top: 10px;
            background-color: #ff85c1;
        }
    </style>
    <script>
        function showPopup() {
            document.querySelector('.popup').style.display = 'block';
        }
        function hidePopup() {
            document.querySelector('.popup').style.display = 'none';
        }
    </script>
</head>
<body>
    <h1>ยินดีต้อนรับ</h1>
    <button onclick="showPopup()">กดที่นี่</button>
    
    <div class="popup">
        <img src="https://via.placeholder.com/100x100.png?text=Image" alt="ภาพน่ารัก">
        <div class="emoji">😊🌸✨</div>
        <button onclick="hidePopup()">ปิด</button>
    </div>
</body>
</html>
