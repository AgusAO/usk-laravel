 <?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Menu extends Model
    {
        private static $menu_kopi = [
            [
                "nama" => "Capuccino Coffe",
                "harga" => "15000",
                "ket" => "200ml",
                "gambar" => "cappuccino.jpg"
            ],
            [
                "nama" => "Coffe Latte",
                "harga" => "25000",
                "ket" => "1 pcs",
                "gambar" => "latte.png"
            ],
            [
                "nama" => "Espresso Coffe",
                "harga" => "10000",
                "ket" => "1 sachet",
                "gambar" => "espresso.jpg"
            ],
            [
                "nama" => "Americano Coffe",
                "harga" => "20000",
                "ket" => "1 pcs",
                "gambar" => "americano.png"
            ],
            [
                "nama" => "Doritos",
                "harga" => "7000",
                "ket" => "1 pcs",
                "gambar" => "doritos.jpg"
            ],
            [
                "nama" => "Aqua",
                "harga" => "3000",
                "ket" => "200ml",
                "gambar" => "aqua.jpg"
            ],
            [
                "nama" => "Beng-Beng",
                "harga" => "2000",
                "ket" => "1 pcs",
                "gambar" => "beng2.jpg"
            ],
            [
                "nama" => "Coca Cola",
                "harga" => "20000",
                "ket" => "1L",
                "gambar" => "cola.jpg"
            ],

        ];

        public static function all()
        {
            return self::$menu_kopi;
        }
    }
