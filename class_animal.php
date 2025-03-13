<?php
class Animal
{
    public $animals;

    public function __construct($ar_animal){
        $this->animals = $ar_animal;
    }

    public function index(){
        foreach ($this->animals as $animal) {
            echo "- $animal <br/>";
        }
    }
    
    public function store() {}
    public function update() {}
    public function destory() {}
}

#membuat object
#kirimkan data array ke dalam constructor
$animal = new Animal(["Ayam", "Ikan"]);

echo "Index - Menampilkan seluruh hewan <br/>";
$animal->index();
echo "<br/>";