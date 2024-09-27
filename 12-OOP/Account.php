<?php

    class Account {

        public string $name;
        public int $balance;

        // creating our constructor
        public function __construct(string $newName, int $newBalance){
            $this->name = $newName;
            $this->balance = $newBalance;
        }

        public function deposit(int $amount){
            $this->balance += $amount;
        }

    }

    // creating a new object of the account class
    $newGtAccount = new Account("Beauty's Account", 30000000000);

    $ledorAccount = new Account("Ledor's Account", 50000000000);

    //var_dump($ledorAccount);

    // echo $newGtAccount->balance . "<br>";
    // echo $newGtAccount->name . "<br>";

    $ledorAccount->deposit(30000000000);
    echo $ledorAccount->balance . "<br>";




    


    // LISTS ALL BUILT-IN & CUSTOM CLASSES 
    // $classes = get_declared_classes();

    // foreach($classes as $class) {
    //     echo $class . "<br />";
    // }


?>