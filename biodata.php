<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="potoaku.jpg">
    <title>Hasil Daffa</title>
</head>
<body style="background-image:url(unsri.png); display: flex; flex-direction: column; align-items: center; 
            justify-content: center; height: 100vh; margin: 0;overflow: hidden;">
    <?php
    $nim = "09031282328090";
    $nama = "Daffa Pratama Putra";
    $ttl = "30 Desember 2005";
    $universitas = "Universitas Sriwijaya";
    ?>
    <div style="background-color:red;color:white;padding: 10px; border-radius: 30px;margin-bottom: 20px;">
        <h1>
            Tugas Pertemuan 2: <i>Marquee</i> dan method <b>GET & POST</b>
        </h1>
    </div>
    <marquee behavior="slide" direction="right" width="70%" style="margin-bottom: 20px;margin-left: -60%;">
        <img src="potoaku.jpg" width="300" height="300" style="border-radius: 50%;">
    </marquee>
    <marquee behavior="slide" direction="right" width="70%" style="margin-left: -60%;">
        <div style="background-color: grey; padding: 20px; border-radius: 10px;margin-bottom: 20px;
                    box-shadow: 5px 10px; display: inline-block; text-align: left; width: auto;">
            <p style="margin: 10px 0;">Nama: <?php echo $nama ?></p>
            <p style="margin: 10px 0;">NIM: <?php echo $nim ?></p>
            <p style="margin: 10px 0;">Tanggal Lahir: <?php echo $ttl ?></p>
            <p style="margin: 10px 0;">Universitas: <?php echo $universitas ?></p>
            <div style="text-align: center; margin-top: 10px;">
                <a href="https://www.linkedin.com/in/daffapp" style="color: blue; text-decoration: none;">
                    LinkedIn Saya
                </a>
            </div>
        </div>
    </marquee>
        <div style="background-color:red;color:white;">
            <marquee>
                <p>Harap menunggu sebentar ketika <i><b>marquee</b></i> sedang proses bergerak</p>
            </marquee>
        </div>
</body>
</html>