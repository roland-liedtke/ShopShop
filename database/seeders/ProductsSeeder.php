<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'PANTON CHAIR',
                'description' => 'Panton Chair, 1999 r. Najsłynniejsze krzesło Pantona. Ze względu na postęp w dziedzinie technologii tworzywa, krzesło przeszło wiele faz w produkcji aż do ostatecznej postaci. Dzięki temu modelowi Verner Panton pokazał krzesło z tworzywa jako niedrogi produkt przemysłowy. Krzesło zostało wykonane z polipropylenu w wersji matowej. Nadaje się do użytku zewnętrznego. Wymiary: wysokość 86 x szerokość 50 x głębokość 61 cm. Projekt: Verner Panton
',
                'price' => 1430.00,
                'image_url' => 'https://rolandliedtke.me/ChairShop/PANTON%20CHAIR%20500x600.png'
            ],
            [
                'name' => 'EGG CHAIR',
                'description' => 'Fotel EGG to jedna z najjaśniejszych gwiazd w plejadzie ikon światowego designu. Zaprojektowany w 1958 roku przez Arne Jacobsena, a wyprodukowane przez FRITZ HANSEN, dla legendarnego, kopenhaskiego SAS Royal Hotel (dziś Radisson Blu Royal Hotel) stanowił element przeznaczonej specjalnie dla tego miejsca kolekcji, w skład której weszły także fotel SWAN i krzesło DROP. Otrzymując zlecenie na zaprojektowanie wnętrz całego hotelu, w tym jego wyposażenia, Jacobsen postanowił wykonać go w duchu designu zintegrowanego, gdzie każdy element pozostając ze sobą w bliskiej relacji tworzy przestrzeń nie tylko wizualnie piękną, ale także funkcjonalną i odpowiadającą na potrzeby użytkownika.',
                'price' => 2450.00,
                'image_url' => 'https://rolandliedtke.me/ChairShop/EGG%20CHAIR%20500x600.png'
            ],
            [
                'name' => 'PLYWOOD CHAIR LCW',
                'description' => 'Charles i Ray Eames zaczęli eksperymentować ze sklejką poszukując nowego materiału, dającego się formować na potrzeby krzesła. Po raz pierwszy Plywood Chair zostało pokazane w 1946r. w Muzeum Sztuki Nowoczesnej w Nowym Jorku i jest teraz uznawane za klasyka w historii mebli nowoczesnych. W produkcji krzeseł Plywood poszczególne warstwy sklejki z jesionu są wyginane, kształtowane a następnie zgrzewane ze sobą. Idealnie wygięte siedziska i oparcia są mocowane do podstawy przy pomocy gumowych połączeń zwiększających komfort użytkowania. Plywood Chair jest produkowane w różnych wysokościach siedzisk w zależności od potrzeb użytkowych jak również z podstawą drewniana lub chromowaną. W kolekcji znajduje się również stolik zaprojektowany głównie do użytku z najniższą wersja Plywood Chair z metalową podstawą. Projekt: Charles & Ray Eames
',
                'price' => 7300.00,
                'image_url' => 'https://rolandliedtke.me/ChairShop/PLYWOOD%20CHAIR%20LCW%20-%20500x600.png'
            ],
            [
                'name' => 'EPA DAR (EAMES PLASTIC ARMCHAIR)',
                'description' => 'Eames Plastic Armchair, czyli EPA zaprojektowane w 1950r. przez Ray & Charles\'a Eamsów. Po raz pierwszy zaprezentowany był podczas konkursu "Low Cost Design" w Muzeum Sztuki Nowoczesnej w Nowym Jorku. Oryginalny kształt był zmieniany poprzez modyfikowanie podstawy krzesła. DAR-Dining Height Armchair Rod Base dostępny jest w wersji siedziska całkowicie plastikowego, z tapicerowaną poduchą lub z całym siedziskiem tapicerowanym. Dodatkowo można wybrać rodzaj bazy: chromowana lub malowana proszkowo w kolorze ciemnoszarym. Projekt: Charles & Ray Eames
',
                'price' => 1900.00,
                'image_url' => 'https://rolandliedtke.me/ChairShop/EPA%20DAR%20(EAMES%20PLASTIC%20ARMCHAIR)%20-%20500x600.png'
            ],
            [
                'name' => 'VICTORIA GHOST',
                'description' => 'Model krzesła bazujący na klasycznych liniach, oparcie jest zaokrąglone i przypomina swoim kształtem antyczne medaliony, podczas gdy siedzisko jest linearne i geometryczne. Krzesło wykonane jest z jednej, wtryskowej formy przezroczystego i kolorowego poliwęglanu. Krzesło Victoria Ghost jest stabilne, wygodne, odporne na porysowania i uderzenia oraz na wpływ czynników atmosferycznych. Produkt o silnej osobowości, który z elegancją dominuje każde wnętrze. Wymiary: szerokość 38 x głębokość 52 x wysokość 89 x wysokość siedziska 46 cm. Projekt: Philippe Starck
',
                'price' => 1200.00,
                'image_url' => 'https://rolandliedtke.me/ChairShop/VICTORIA%20GHOST%20500x600.png'
            ],
            [
                'name' => 'ANT (3100 CLEAR LACQUERED VENEER)',
                'description' => 'Wizualna ekspresja krzesła Ant ™ 3100 Lacquered Veneer jest delikatna i pomysłowa, podobnie jak krzywe instrumentu muzycznego. Zaprojektowane przez Arne Jacobsena w 1952 roku. Krzesło jest wykonane z dziewięciu warstw forniru formowanego ciśnieniowo. Elegancki kształt kryje w sobie niezwykłą wytrzymałość i wygodę. Wymiary: wysokość 77 x szerokość 52 x głębokość 51 cm.
',
                'price' => 1900.00,
                'image_url' => 'https://rolandliedtke.me/ChairShop/ANT%20(3100%20CLEAR%20LACQUERED%20VENEER)%20500x600.png'
            ],
            [
                'name' => 'BRUTUS DINING CHAIR',
                'description' => 'Zainspirowana ruchem architektury brutalistycznej z połowy XX wieku, kolekcja Brutus składa się z krzesła do jadalni, fotela wypoczynkowego, stołka i stolika kawowego odlanych z lekkiego betonu włóknistego, tworzącego unikalną powierzchnię zwiększającą mobilność. Każdy element jest ręcznie malowany, aby stworzyć, niepowtarzalną teksturę. Kolekcja podkreśla subtelną równowagę między ostrymi liniami architektonicznymi a nieco bardziej miękką krzywizną oparcia i podłokietnika. Zaprojektowany przez Kristiana Sofusa Hansena i Tommy\'ego Hyldahla. Materiał: 100% włókno betonowe Wymiary: długość 69 x szerokość 50 x wysokość 60 x wysokość siedziska 44 x głębokość siedziska 37 cm
',
                'price' => 3600.00,
                'image_url' => 'https://rolandliedtke.me/ChairShop/BRUTUS%20DINING%20CHAIR%20500x600.png'
            ],
            [
                'name' => 'HIPPO CHAIR',
                'description' => 'Miękkie kształty są charakterystyczne dla serii Hippo, która stanowi stylowe zestawienie w każdym wnętrzu. Krzesło Hippo stoi na dwóch solidnych nogach i drewnianym profilu łączącym siedzisko i oparcie, który w wyraźnym kontraście do miękkich kształtów jest twardy i mocny. Charakterystyczny drewniany profil nóg występuje w czterech różnych dębowych wykończeniach; naturalne, jasno wędzone, ciemno wędzone i czarne, a siedzisko i oparcie dostępne są w różnych wariantach tapicerki. Projekt:Kristian Sofus Hansen i Tommy Hyldahl, 2021 Wymiary: szerokość 47.5 x głębokość 59 x wysokość 79.5 x wysokość siedziska 49 cm
',
                'price' => 4900.00,
                'image_url' => 'https://rolandliedtke.me/ChairShop/HIPPO%20CHAIR%20500x600.png'
            ],
            [
                'name' => 'KAMODO CHAIR - COFFEE',
                'description' => 'Nazwane na cześć tradycyjnych japońskich pieców glinianych, krzesło Kamado podkreśla wyjątkową japońską estetykę w minimalistycznym fotelu z włóknobetonu. Kamado oznacza „miejsce na kocioł” i tradycyjne piece budowane bezpośrednio na ziemi z gliny. Otwory powietrzne wokół poziomu podłogi sprawiały wrażenie zestawu nóg, który został wykorzystany jako punkt odniesienia dla przednich nóg krzesła Kamado. Krzesło jest odlane z lekkiego betonu włóknistego, tworząc unikalną teksturę powierzchni i zwiększając ogólną mobilność krzesła. Każdy element jest ręcznie malowany, aby stworzyć teksturowaną i niepowtarzalną powierzchnię. Podkreślając doskonałą równowagę między ostrymi liniami architektonicznymi a japońską estetyką, krzesło Kamado to rzeźbiarskie dzieło z komfortowym siedziskiem. Zaprojektowany przez Kristiana Sofusa Hansena i Tommy\'ego Hyldahla. Wymiary: długość 54 x szerokość 62 x wysokość 72 cm',
                'price' => 5600.00,
                'image_url' => 'https://rolandliedtke.me/ChairShop/KAMODO%20CHAIR%20-%20500x600.png'
            ],
            [
                'name' => 'WIGGLE SIDE CHAIR',
                'description' => 'Frank Gehry znany jest z pracy z niezwykłymi materiałami. W Wiggle Side Chair zastosowana została falowana tektura. Efekt jest niesamowity. Projekt: Frank Gehry',
                'price' => 4600.00,
                'image_url' => 'https://rolandliedtke.me/ChairShop/WIGGLE%20SIDE%20CHAIR%20500x600.png'
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
