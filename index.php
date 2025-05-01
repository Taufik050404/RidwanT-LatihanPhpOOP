<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Makanan Kantin</title>
</head>
<body>
<h2>Pemesanan Makanan Kantin</h2>
    <form action="prosesPesanan.php" method="post">
        <p>Pilih Menu:</p>
        <input type="checkbox" name="menu[]" value="Nasi Goreng|Makanan|15000"> Nasi Goreng - Rp 15.000<br>
        <input type="checkbox" name="menu[]" value="Mie Ayam|Makanan|12000"> Mie Ayam - Rp 12.000<br>
        <input type="checkbox" name="menu[]" value="Es Teh|Minuman|5000"> Es Teh - Rp 5.000<br>
        <input type="checkbox" name="menu[]" value="Kopi Hitam|Minuman|7000"> Kopi Hitam - Rp 7.000<br><br>
        <input type="submit" value="Pesan Sekarang">
    </form>
</body>
</html>