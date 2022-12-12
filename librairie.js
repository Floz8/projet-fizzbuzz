
//Fonction de test. Ecrit le résultat dans la console
//Pour voir qu'un nombre est divisible 
function Fizzbuzz() 
{
    var $nombre = document.getElementById("number").value;
    console.log($nombre);
        
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


//Fonction qui ajoute le résultat sur la page web.
function FizzbuzzHTML() 
{

    //On veut overwrite l'affichage de résultat s'il y a déjà un résultat sur la page.
    //Le résultat est stocké dans l'élément HTML ayant pour ID nombre. Cet élément est créé en appuyant sur le bouton de la page.
    const el1 = document.getElementById('nombre');

    //l'élément nombre n'existe pas: on ne fait rien
 if (el1 === null) {
      console.log('nombre does NOT exist in DOM');
    //L'élément nombre existe: on le supprime
    }else {
        console.log('element exists in DOM');
        document.getElementById('nombre').remove();

      }
    


    //On récupère la valeur du champ
    var $nombre = document.getElementById("number").value;
  
    //On créé le paragraphe qui va accueillir le résultat
    const para = document.createElement("p");
//const node;


const element = document.getElementById("resultat");
element.appendChild(para);

      //divisible par 3 et 5: on affiche Fizzbuzz
    if($nombre % 3 == 0 && $nombre % 5 == 0)
    {
        
        
        console.log("FizzBuzz")
        const node=document.createTextNode("Fizzbuzz");
        para.setAttribute('id', 'nombre');
        para.appendChild(node);
    }

     //divisible par 3: on affiche fizz
    else if($nombre % 3 == 0)
    {
       
        console.log("Fizz");
        const node= document.createTextNode("Fizz");
        para.setAttribute('id', 'nombre');
        para.appendChild(node);
    }
    //Divisbible par 5: on affiche buzz
    else if($nombre %5 == 0) 
    {
        
        console.log("Buzz");
        const node= document.createTextNode("Buzz");
        para.setAttribute('id', 'nombre');
        para.appendChild(node);
    }
    //Ni divisible par 3, ni 5: on affiche le nombre
    else{
        
        const node= document.createTextNode($nombre);
        para.setAttribute('id', 'nombre');
        para.appendChild(node);
    }
    


}