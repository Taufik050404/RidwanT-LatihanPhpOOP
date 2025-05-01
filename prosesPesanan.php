<?php
class MenuMakanan {
    public $nama, $kategori, $harga;

    public function __construct($nama, $kategori, $harga) {
        $this->nama = $nama;
        $this->kategori = $kategori;
        $this->harga = $harga;
    }

    public function getInfo() {
        return "{$this->nama} ({$this->kategori}) - Rp " . number_format($this->harga, 0, ',', '.');
    }
}

class Pesanan {
    public $daftarMakanan = [];

    public function tambahMakanan(MenuMakanan $makanan) {
        $this->daftarMakanan[] = $makanan;
    }

    public function hitungTotal() {
        $total = 0;
        foreach ($this->daftarMakanan as $makanan) {
            $total += $makanan->harga;
        }
        return $total;
    }

    public function tampilkanPesanan() {
        echo "<h2>Detail Pesanan</h2><ul>";
        foreach ($this->daftarMakanan as $makanan) {
            echo "<li>" . $makanan->getInfo() . "</li>";
        }
        echo "</ul>";
        echo "<strong>Total: Rp " . number_format($this->hitungTotal(), 0, ',', '.') . "</strong>";
    }
}

if (isset($_POST['menu'])) {
    $pesanan = new Pesanan();
    foreach ($_POST['menu'] as $item) {
        list($nama, $kategori, $harga) = explode('|', $item);
        $makanan = new MenuMakanan($nama, $kategori, $harga);
        $pesanan->tambahMakanan($makanan);
    }
    $pesanan->tampilkanPesanan();
} else {
    echo "Tidak ada menu yang dipilih.";
}
?>
