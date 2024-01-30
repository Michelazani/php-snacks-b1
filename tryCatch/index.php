Creare un nuovo oggetto Person con un metodo setAge() 
che cambia il valore della proprieta' age della classe Persona, 
che accetti esclusivamente un numero intero. 
Se il numero inserito come argomento non dovesse essere un numero intero: 
allora lanciare un'eccezione!
Includendo con try e catch una chiamata a setAge con una stringa come argomento,
 catturare l'eccezione e invece di emettere un errore bloccante, 
scrivere in pagina il messaggio di errore.
<?php
class Person{
    protected $age;

    public function setAge(int $age){
        if ( !is_int($age)  ){
            throw new Exception('it is not a number');
        } else {
            $this->age = $age;
        }
    }
}

$person = new Person();

try {
    $person->setAge('ciao');
} catch (Throwable $e){
    echo 'valore assegnato in modo sbagliato' '. $e->getMessage();
}