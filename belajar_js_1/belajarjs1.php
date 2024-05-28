<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Test Java</title>
        <link rel="stylesheet" href="belajarjs1.css">
        <script src="belajarjs1.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="card">
                <h5 class="title-menu">Menu Makanan</h5>
                <div class="menu">
                    <div class="menu-1">
                        <div class="makanan-container">
                            <input type="checkbox" class="makanan" value="Mie Baso - 15000"><label>Mie Baso (Rp. 15.000)</label>
                        </div>
                        <div class="makanan-container">
                            <input type="checkbox" class="makanan" value="Baso - 13000"><label>Baso (Rp. 13.000)</label>
                        </div>
                        <div class="makanan-container">
                            <input type="checkbox" class="makanan" value="Mie Ayam Baso - 10000"><label>Mie Ayam Baso (Rp. 10.000)</label>
                        </div>
                        <div class="makanan-container">
                            <input type="checkbox" class="makanan" value="Mie Ayam - 8000"><label>Mie Ayam (Rp. 8.000)</label>
                        </div>
                    </div>
                    <div class="menu-2">
                        <div class="container-jumlah">
                            <input type="number" class="jumlah" min="0" value="0">
                        </div>
                        <div class="container-jumlah">
                            <input type="number" class="jumlah" min="0" value="0">
                        </div>
                        <div class="container-jumlah">
                            <input type="number" class="jumlah" min="0" value="0">
                        </div>
                        <div class="container-jumlah">
                            <input type="number" class="jumlah" min="0" value="0">
                        </div>
                    </div>
                </div>
                <div class=total-container>
                    <div class="button">
                        <button class="button-1" onclick="clearSelection()">Clear</button>
                        <button class="button-1" onclick="Totalnya()">Hitung</button>
                    </div>    
                    <div class="totalnya">
                        <div class="total" id="total"></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>