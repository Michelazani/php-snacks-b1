Create una nuova classe che rappresenti un Pokemon e che abbia almeno 
-cinque proprieta, 
-tre metodi 
-il costruttore.
Microbonus: creo un'altra classe che aggiungo al pokemon per composizione che configuri il tipo di pokemon (aria, terra, ecc.)

<?php
    class PokemonCategory {
        public $name;
        public $description;
        public $life;
        public $level;
        public $category;

        public function getName() {
            echo $this->name;
        }
        public function getDescription(){
            return $this->description;
        }
        public function getLife(){
            return $this->life;
        }
        
        public function __construct(String $name, String $description, Float $life, Int $level, String $category) {
            $this->name = $name;
            $this->genre = $description;
            $this->weight = $life;
            $this->level = $level;
            $this->category = $category;
        }
    }

    $Pokemon1 = new PokemonCategory('cane', 'cane che cammina', 8, 15, 'terra');

    $Pokemons = [$Pokemon1, $Pokemon1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Boostrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Pokedex</a>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <?php foreach($Pokemons as $pokemon) { ?>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php $pokemon->getname(); ?></h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">level: <?php echo $pokemon->level; ?></h6>
                            <p class="card-text">description: <?php echo $pokemon->description; ?></p>
                            <p class="card-text">life: <?php echo $pokemon->life; ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>
