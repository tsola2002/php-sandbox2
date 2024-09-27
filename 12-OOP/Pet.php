<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <h1>Working with inheritance</h1>

    <?php 
    
        class Pet {

            public $name;

            // CONSTRUCTOR    
            public function __construct($pet_name){
                $this->name = $pet_name;
                // self::sleep();
            }

            function eat(){
                echo "<p> $this->name is eating.</p>";
            }

            function sleep(){
                echo "<p>$this->name is sleeping.</p>";
            }
    
            function play(){
                echo "<p>$this->name is playing.</p>";
            }


        }


        class Cat extends Pet {

            // function play(){
            //     // call the parent claases method 
            //     parent::play();
            // }

            // function eat(){
            //     // call the parent claases method 
            //     parent::eat();
            // }

            // function sleep(){
            //     // call the parent claases method 
            //     parent::sleep();
            // }

            function live(){
                parent::eat();
                parent::play();
                parent::sleep();
            }

        }

        $pet = new Pet("Pet");
        $tom = new Cat("Tom");


        $pet->eat();
        $tom->eat();
        $tom->live();

        // Deleting the objects
        unset($tom, $pet);

       // $pet->eat();
       // $tom->eat();
    
    ?>
</body>
</html>