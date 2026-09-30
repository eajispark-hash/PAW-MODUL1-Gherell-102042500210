<?php
$produk_cia = [
    [
        "nama" => "SoundCard Focusrite",
        "kategori" => "AUDIO INTERFACE",
        "harga" => 1800000,
        "stok" => 4,
        "gambar" => "18482858_800.jpg"
    ],
    [
        "nama" => "Audio Technica AT2020",
        "kategori" => "MICROPHONE",
        "harga" => 8500000,
        "stok" => 3,
        "gambar" => "10fed25fd41776114499ca7ca1ba8a08.jpg_720x720q80.jpg"
    ],
    [
        "nama" => "Audio Technica ATH-M50x",
        "kategori" => "HEADPHONE",
        "harga" => 1200000,
        "stok" => 5,
        "gambar" => "M40x_1_1080x1080.webp"
    ],
    [
        "nama" => "Yamaha Midi Keyboard",
        "kategori" => "KEYBOARD",
        "harga" => 750000,
        "stok" => 10,
        "gambar" => "images.jpg"
    ],
    [
        "nama" => "Logic Pro X",
        "kategori" => "SOFTWARE",
        "harga" => 250000,
        "stok" => 0,
        "gambar" => "apple-logic-pro-for-ipad-2_atyy.jpg"
    ],
    [
        "nama" => "Fl Studio Producer Edition",
        "kategori" => "SOFTWARE",
        "harga" => 900000,
        "stok" => 2,
        "gambar" => "FL-Studio-Logo-3.webp"
    ]
];

// Menghitung jumlah seluruh produk secara otomatis
$total_produk = count($produk_cia);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cia Store</title>
    <style>
        /* CSS Reset & Variabel Dasar */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7fafc;
            color: #1a202c;
        }

        /* 12. Navbar / Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        header h1 { margin: 0; font-size: 24px; }
        nav a { margin-left: 20px; text-decoration: none; color: #4a5568; font-weight: bold; }
        
        /* 12. Hero Section */
        .hero {
            background-image: url('IMG_20251110_155517.png'); 
            background-size: cover;       
            background-position: center;  
            background-repeat: no-repeat; 
            color: white;
            margin: 30px 50px;
            padding: 60px 40px;
            border-radius: 12px;
        }
        
        .hero span { font-size: 14px; letter-spacing: 2px; color: #ae883e; }
        .hero h2 { font-size: 40px; margin: 15px 0; }
        .hero p { font-size: 18px; margin-bottom: 25px; color: #ffffff; }
        .hero button {
            background-color: white;
            color: #1a202c;
            border: none;
            padding: 12px 24px;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
        }

        /* 12. Bagian Katalog */
        .catalog-container { padding: 20px 50px 50px; }
        .catalog-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 25px;
        }
        .catalog-header h3 { margin: 0; font-size: 28px; }
        .catalog-header span { color: #074aad; font-weight: bold; }
        
        /* 13. CSS Grid untuk Susunan Card */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        /* 6. Card Produk */
        .card {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            display: flex;
            flex-direction: column;
        }
        
        /* CSS Tambahan untuk Gambar Produk */
        .gambar-produk {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .kategori-diskon { display: flex; justify-content: space-between; font-size: 12px; font-weight: bold; margin-bottom: 10px; }
        .kategori { color: #718096; }
        .badge-diskon { color: #e53e3e; }
        
        .nama-produk { font-size: 20px; font-weight: bold; margin-bottom: 15px; color: #2d3748; }
        
        .harga-normal { font-size: 14px; color: #a0aec0; text-decoration: line-through; margin-bottom: 5px; }
        .harga-akhir { font-size: 22px; font-weight: bold; color: #1a202c; margin-bottom: 15px; }
        
        .status-container { margin-top: auto; }
        .status { font-size: 14px; font-weight: bold; margin-bottom: 15px; }
        .tersedia { color: #38a169; }
        .habis { color: #e53e3e; }

        /* 8 & 9. Tombol Pembelian */
        .btn-beli {
            width: 100%;
            padding: 12px;
            background-color: #1a202c;
            color: white;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
        }
        .btn-beli:hover { opacity: 0.9; }

        /* 12. Footer */
        footer { text-align: center; padding: 25px; background-color: white; color: #718096; font-size: 14px; }

        /* 15. Responsive Layout */
        @media (max-width: 900px) {
            .product-grid { grid-template-columns: repeat(2, 1fr); }
            header, .hero, .catalog-container { padding-left: 20px; padding-right: 20px; }
        }
        @media (max-width: 600px) {
            .product-grid { grid-template-columns: 1fr; }
            .hero { margin: 20px; }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <header>
        <h1>Cia Store</h1>
        <nav>
            <a href="#">Home</a>
            <a href="#">Products</a>
            <a href="#">About</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <div class="hero">
        <span>CIA STORE</span>
        <h2>Bengkel Musik.</h2>
        <p>Temukan berbagai perangkat dan alat musik digital untuk kebutuhanmu.</p>
        <button>Lihat Produk</button>
    </div>

    <!-- Katalog Produk -->
    <div class="catalog-container">
        
        <div class="catalog-header">
            <div>
                <span style="font-size: 14px;">OUR PRODUCTS</span>
                <h3>Katalog Produk</h3>
            </div>
            <!-- 11. Menampilkan total produk -->
            <span>Total Produk: <?php echo $total_produk; ?></span>
        </div>

        <div class="product-grid">
          
            <?php foreach($produk_cia as $p): ?>
                <?php 
                    $dapat_diskon = $p["harga"] >= 1000000;
                    $harga_tampil = $p["harga"];
                    
                    if ($dapat_diskon) {
                        $potongan = $p["harga"] * 0.10;
                        $harga_tampil = $p["harga"] - $potongan;
                    }
                ?>
                <div class="card">
                    <!-- Menampilkan Gambar Produk -->
                    <img src="<?php echo $p["gambar"]; ?>" alt="<?php echo $p["nama"]; ?>" class="gambar-produk">

                    <div class="kategori-diskon">
                        <span class="kategori"><?php echo $p["kategori"]; ?></span>
                        <?php if($dapat_diskon): ?>
                            <span class="badge-diskon">DISKON 10%</span>
                        <?php endif; ?>
                    </div>
                    
                    <div class="nama-produk"><?php echo $p["nama"]; ?></div>
                    
                  
                    <?php if($dapat_diskon): ?>
                        <div class="harga-normal">Rp<?php echo number_format($p["harga"], 0, ',', '.'); ?></div>
                    <?php endif; ?>
                    
                   
                    <div class="harga-akhir">Rp<?php echo number_format($harga_tampil, 0, ',', '.'); ?></div>
                    
                    <div class="status-container">
                     
                        <?php if($p["stok"] > 0): ?>
                            <div class="status tersedia">Stok: <?php echo $p["stok"]; ?> - Tersedia</div>
                            <button class="btn-beli">Beli Sekarang</button>
                        <?php else: ?>
                            <div class="status habis">Stok Habis</div>
                           
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <footer>
        &copy; 2026 Cia Store. All rights reserved.
    </footer>

</body>
</html>