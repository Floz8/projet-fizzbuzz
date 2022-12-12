function Fizzbuzz($nombre) 
{
    if($nombre % 3 == 0 && $nombre % 5 == 0)
    {
        //Test, on mettra le résultat dans une interface
        console.log("FizzBuzz")
    }
    else if($nombre % 3 == 0)
    {
        //idem
        console.log("Fizz");
    }
    else if($nombre %5 == 0) 
    {
        console.log("Buzz");
    }
    else{
        return $nombre;
    }
    

}