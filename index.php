<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjumlahan Dua Bilangan</title>
    <!-- Link ke Google Fonts untuk font yang lebih modern -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* Global Styles */
        body {
            font-family: 'Raleway', sans-serif;
            background: linear-gradient(45deg, #f06, #ff9);
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.3s ease;
        }

        /* Styling untuk container utama */
        .container {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
            padding: 30px 40px;
            width: 100%;
            max-width: 450px;
            text-align: center;
            transform: scale(0.95);
            transition: transform 0.5s ease;
        }

        /* Efek animasi pada container ketika halaman dimuat */
        body:hover .container {
            transform: scale(1);
        }

        h1 {
            font-size: 36px;
            color: #333;
            margin-bottom: 20px;
            letter-spacing: 2px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);
        }

        /* Styling untuk input dan tombol */
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        label {
            font-size: 16px;
            color: #333;
            margin-bottom: 8px;
            display: block;
            font-weight: 600;
        }

        input[type="number"] {
            width: 100%;
            padding: 14px;
            font-size: 18px;
            border: 2px solid #ddd;
            border-radius: 10px;
            outline: none;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            background-color: #fafafa;
        }

        input[type="number"]:focus {
            border-color: #ff9;
            box-shadow: 0 0 10px rgba(255, 153, 0, 0.6);
        }

        input[type="submit"] {
            width: 100%;
            padding: 15px;
            font-size: 20px;
            color: #fff;
            background-color: #ff9;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #f06;
            transform: translateY(-5px);
        }

        .result {
            font-size: 22px;
            font-weight: bold;
            color: #333;
            background-color: #f0f0f0;
            padding: 20px;
            margin-top: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            opacity: 0;
            animation: fadeIn 1s forwards;
        }

        /* Animasi fade-in untuk hasil */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-message {
            font-size: 14px;
            color: #888;
            margin-top: 20px;
            text-align: center;
        }

        /* Styling untuk animasi loading */
        .loading {
            font-size: 20px;
            font-weight: bold;
            color: #ff9;
            animation: loadingAnimation 1.5s infinite;
        }

        /* Animasi loading */
        @keyframes loadingAnimation {
            0% { color: #ff9; }
            50% { color: #f06; }
            100% { color: #ff9; }
        }

    </style>
</head>
<body>

    <div class="container">
        <h1>Penjumlahan Dua Bilangan</h1>
        
        <form method="POST">
            <div class="form-group">
                <label for="bilangan1">Bilangan 1:</label>
                <input type="number" id="bilangan1" name="bilangan1" required placeholder="Masukkan bilangan pertama">
            </div>
            <div class="form-group">
                <label for="bilangan2">Bilangan 2:</label>
                <input type="number" id="bilangan2" name="bilangan2" required placeholder="Masukkan bilangan kedua">
            </div>
            <input type="submit" value="Hitung">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Mengambil nilai inputan
            $bilangan1 = $_POST['bilangan1'];
            $bilangan2 = $_POST['bilangan2'];

            // Melakukan penjumlahan
            $hasil = $bilangan1 + $bilangan2;

            // Menampilkan hasil dengan animasi
            echo "<div class='result'>Hasil Penjumlahan: <strong>$hasil</strong></div>";
        }
        ?>

        <div class="form-message">
            <p>Masukkan dua angka dan tekan tombol hitung untuk melihat hasil penjumlahan.</p>
        </div>
    </div>

</body>
</html>
