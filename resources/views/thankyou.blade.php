<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Fine Restourant</title>
</head>

<body>
    <h1 style="margin-bottom: 100px"></h1>
    <div class="w3-container" align=center>

        <div class="w3-card-4 rounded" style="width:40%">
            <header class="w3-container w3-light-grey">
                <h3>Sdr. Kartika</h3>
            </header>
            <div class="w3-container">
                <p>Berhasil Reservasi Tanggal 01-08-2022</p>
                <hr>

                <p>Terimakasih telah menggunakan layanan kami untuk reservasi di fine restourant. Silahkan tunjukkan
                    pesan ini sebagai bukti reservasi.</p><br>
            </div>
            <button class="w3-button w3-block w3-dark-grey"><a href="{{ route('dashboard') }}"
                    style="text-decoration: none">Home</a></button>
        </div>
    </div>

</body>

</html>
