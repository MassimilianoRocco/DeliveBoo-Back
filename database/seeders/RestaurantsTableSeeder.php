<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('restaurants')->insert([
            ['name' => 'Pizza & Panini del Gusto', 'description' => 'Un angolo accogliente dove puoi gustare pizze artigianali e panini preparati con ingredienti freschi e di alta qualità. Ideale per una pausa pranzo veloce o una cena informale.', 'phone' => '123 456 7890', 'address' => 'Via Roma 1', 'PIVA' => '12345678901', 'image_path' => 'https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/325fb5439f302efd73a03d7261fb9957e0ae05b9/Pizzeriagusto.png','user_id'=>1],
            ['name' => 'FastBite', 'description' => 'Il posto perfetto per chi cerca un pasto veloce senza compromessi sulla qualità. Offriamo una vasta scelta di hamburger, patatine e bevande, perfetti per una pausa pranzo o una cena su due piedi.', 'phone' => '098 765 4321', 'address' => 'Via Milano 2', 'PIVA' => '23456789012', 'image_path' => 'https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/325fb5439f302efd73a03d7261fb9957e0ae05b9/FastBite.png','user_id'=>2],
            ['name' => 'BelaVita', 'description' => 'Ristorante italiano con un menu che celebra i sapori tradizionali della cucina mediterranea. Perfetto per una cena romantica o una serata in famiglia. Offriamo anche opzioni vegane per soddisfare ogni palato.', 'phone' => '234 567 8901', 'address' => 'Via Napoli 3', 'PIVA' => '34567890123', 'image_path' => 'https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/325fb5439f302efd73a03d7261fb9957e0ae05b9/Ristorante_Bellavita.png','user_id'=>3],
            ['name' => 'Grill & Wrap', 'description' => "Specializzati in hamburger succulenti e wrap deliziosi, offriamo anche piadine fatte in casa. Il nostro ambiente informale è l'ideale per un pasto rilassato con amici e familiari.", 'phone' => '345 678 9012', 'address' => 'Via Torino 4', 'PIVA' => '45678901234', 'image_path' => 'https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/325fb5439f302efd73a03d7261fb9957e0ae05b9/Grill__Wrap.png','user_id'=>4],
            ['name' => 'Waggshii', 'description' => 'Un angolo di Asia in città con una selezione di sushi fresco e piatti cinesi preparati con cura. Goditi una cena raffinata o una pausa pranzo esotica con piatti dal sapore autentico.', 'phone' => '456 789 0123', 'address' => 'Via Firenze 5', 'PIVA' => '56789012345', 'image_path' => 'https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/325fb5439f302efd73a03d7261fb9957e0ae05b9/Ristorante_Giapponese_Wagashi.png','user_id'=>5],
            ['name' => "Gelato d'Amore", 'description' => 'Il paradiso dei golosi, con una vasta gamma di gelati artigianali preparati con ingredienti freschi e naturali. Perfetto per una dolce pausa o per concludere un pasto con un tocco di dolcezza.', 'phone' => '567 890 1234', 'address' => 'Via Genova 6', 'PIVA' => '67890123456', 'image_path' => 'https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/325fb5439f302efd73a03d7261fb9957e0ae05b9/Gelato_dAmore.png','user_id'=>6],
            ['name' => 'Kebab e Pizza King', 'description' => 'Offriamo una combinazione imperdibile di kebab succulenti e pizze croccanti, preparati con passione e ingredienti di qualità. Il nostro locale è ideale per pasti veloci e gustosi.', 'phone' => '678 901 2345', 'address' => 'Via Bologna 7', 'PIVA' => '78901234567', 'image_path' => 'https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/325fb5439f302efd73a03d7261fb9957e0ae05b9/Kebab_e_Pizza_King.png','user_id'=>7],
            ['name' => 'El Sombrero Mexicano', 'description' => "Scopri il vero sapore del Messico con i nostri piatti tipici come tacos, burritos e nachos. L'atmosfera vivace e i sapori autentici rendono ogni pasto una festa.", 'phone' => '789 012 3456', 'address' => 'Via Venezia 8', 'PIVA' => '89012345678', 'image_path' => 'https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/325fb5439f302efd73a03d7261fb9957e0ae05b9/El_Sombrero_Mexicano.png','user_id'=>8],
            ['name' => 'La Cina in Tavola', 'description' => 'Un ristorante che offre una vasta selezione di piatti cinesi tradizionali e moderni, preparati con ingredienti freschi e tecniche culinarie autentiche. Ideale per una cena elegante o un pranzo soddisfacente.', 'phone' => '890 123 4567', 'address' => 'Via Verona 9', 'PIVA' => '90123456789', 'image_path' => 'https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/325fb5439f302efd73a03d7261fb9957e0ae05b9/La_Cina_in_Tavola.png','user_id'=>9],
            ['name' => 'Burger Express', 'description' => "Hamburger gourmet e snack rapidi preparati con ingredienti freschi e locali. Il nostro servizio veloce e l'atmosfera accogliente sono perfetti per un pranzo o una cena senza stress.", 'phone' => '901 234 5678', 'address' => 'Via Bari 10', 'PIVA' => '01234567890', 'image_path' => 'https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/325fb5439f302efd73a03d7261fb9957e0ae05b9/Burger_Express.png','user_id'=>10],
            ['name' => 'Sushi Sensation', 'description' => 'Un ristorante di sushi che offre piatti freschissimi e creativi in un ambiente elegante. Ideale per una cena sofisticata o per una pausa pranzo dal gusto raffinato.', 'phone' => '012 345 6789', 'address' => 'Via Cagliari 11', 'PIVA' => '11234567891', 'image_path' => 'https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/325fb5439f302efd73a03d7261fb9957e0ae05b9/SushiSensation.png','user_id'=>11],
            ['name' => 'Bella Pizza e Cucina', 'description' => "Un ristorante che celebra l'arte della pizza e della cucina italiana con ingredienti freschi e ricette tradizionali. Perfetto per una cena in famiglia o una serata romantica.", 'phone' => '123 456 7891', 'address' => 'Via Palermo 12', 'PIVA' => '21234567892', 'image_path' => 'https://raw.githubusercontent.com/davidearbola/prod-img-deliveboo/325fb5439f302efd73a03d7261fb9957e0ae05b9/Bella_Roma_Cucina.png','user_id'=>12],
        ]);
    }
}
