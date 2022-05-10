function generate(){
    //CREATE ARRAY DATA
    var fruits = ["Banana", "Orange", "Apple", "Mango"];

    //CREATE RANDOM CALL
    var randomNumber = Math.floor(Math.random() * 4);

    //GET id words
    let words = document.getElementById("words");
    words.innerHTML = fruits[randomNumber];
}