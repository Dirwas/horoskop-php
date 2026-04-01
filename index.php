<?php
$zodiak = "";
$sifat = "";

if (isset($_POST['tanggal'])) {

    $tanggal = $_POST['tanggal'];

    $tgl = date('d', strtotime($tanggal));
    $bln = date('m', strtotime($tanggal));

    if (($tgl >= 21 && $bln == 3) || ($tgl <= 19 && $bln == 4)) {
        $zodiak = "Aries";
        $sifat = "Berani, percaya diri, dan penuh energi.";
    } elseif (($tgl >= 20 && $bln == 4) || ($tgl <= 20 && $bln == 5)) {
        $zodiak = "Taurus";
        $sifat = "Setia, sabar, dan pekerja keras.";
    } elseif (($tgl >= 21 && $bln == 5) || ($tgl <= 20 && $bln == 6)) {
        $zodiak = "Gemini";
        $sifat = "Cerdas, komunikatif, dan fleksibel.";
    } elseif (($tgl >= 21 && $bln == 6) || ($tgl <= 22 && $bln == 7)) {
        $zodiak = "Cancer";
        $sifat = "Penyayang, emosional, dan intuitif.";
    } elseif (($tgl >= 23 && $bln == 7) || ($tgl <= 22 && $bln == 8)) {
        $zodiak = "Leo";
        $sifat = "Pemimpin, percaya diri, dan karismatik.";
    } elseif (($tgl >= 23 && $bln == 8) || ($tgl <= 22 && $bln == 9)) {
        $zodiak = "Virgo";
        $sifat = "Teliti, analitis, dan perfeksionis.";
    } elseif (($tgl >= 23 && $bln == 9) || ($tgl <= 22 && $bln == 10)) {
        $zodiak = "Libra";
        $sifat = "Adil, diplomatis, dan romantis.";
    } elseif (($tgl >= 23 && $bln == 10) || ($tgl <= 21 && $bln == 11)) {
        $zodiak = "Scorpio";
        $sifat = "Misterius, kuat, dan emosional.";
    } elseif (($tgl >= 22 && $bln == 11) || ($tgl <= 21 && $bln == 12)) {
        $zodiak = "Sagittarius";
        $sifat = "Petualang, optimis, dan jujur.";
    } elseif (($tgl >= 22 && $bln == 12) || ($tgl <= 19 && $bln == 1)) {
        $zodiak = "Capricorn";
        $sifat = "Disiplin, ambisius, dan bertanggung jawab.";
    } elseif (($tgl >= 20 && $bln == 1) || ($tgl <= 18 && $bln == 2)) {
        $zodiak = "Aquarius";
        $sifat = "Kreatif, unik, dan mandiri.";
    } elseif (($tgl >= 19 && $bln == 2) || ($tgl <= 20 && $bln == 3)) {
        $zodiak = "Pisces";
        $sifat = "Empati, artistik, dan sensitif.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Horoskop</title>

    <style>
        body {
            font-family: Arial;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            text-align: center;
            padding: 50px;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            width: 350px;
            margin: auto;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        input, button {
            padding: 10px;
            width: 100%;
            margin-top: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        button {
            background: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background: #45a049;
        }

        .hasil {
            margin-top: 20px;
            padding: 15px;
            background: #f1f1f1;
            border-radius: 10px;
        }
    </style>

</head>
<body>

<div class="container">

    <h2>🔮 Cek Zodiak Kamu</h2>

    <form method="post">
        <input type="date" name="tanggal" required>
        <button type="submit">Cek</button>
    </form>

    <?php if ($zodiak != "") { ?>
        <div class="hasil">
            <h3>Hasil:</h3>
            <p><b>Zodiak:</b> <?php echo $zodiak; ?></p>
            <p><b>Sifat:</b> <?php echo $sifat; ?></p>
        </div>
    <?php } ?>

</div>

</body>
</html>