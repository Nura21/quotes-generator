function generate(){
    //CREATE ARRAY DATA
    var quotes = '{"quotes1" : "agusph", "quotes2" : "Agus Prawoto Hadi", "quotes3" : "Jagowebdev.com"}';
    //MAKE JSON
    quotesObj = JSON.parse(quotes);

    //CREATE RANDOM CALL
    var randomNumber = Math.floor(Math.random() * 4);
    
    //CREATE DATA
    var quotesData = '';
        if(randomNumber == 1){
            quotesData = quotesObj.quotes1;
        }else if(randomNumber == 2){
            quotesData = quotesObj.quotes2;
        }else{
            quotesData = quotesObj.quotes3;
        }

    //GET id words
    let words = document.getElementById("words");
    words.innerHTML = quotesData;




}

