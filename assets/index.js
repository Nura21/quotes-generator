// function generate(){
//     // //CREATE ARRAY DATA
//     var quotes = '{"quotes1" : "agusph", "quotes2" : "Agus Prawoto Hadi", "quotes3" : "Jagowebdev.com"}';
//     //MAKE JSON
//     quotesObj = JSON.parse(quotes);

//     //CREATE RANDOM CALL
//     var randomNumber = Math.floor(Math.random() * 4);
    
//     //CREATE DATA
//     var quotesData = '';
//         if(randomNumber == 1){
//             quotesData = quotesObj.quotes1;
//         }else if(randomNumber == 2){
//             quotesData = quotesObj.quotes2;
//         }else{
//             quotesData = quotesObj.quotes3;
//         }

//     //GET id words
//     let words = document.getElementById("words");
//     words.innerHTML = quotesData;

// }

//GET DATA FROM API
// api url
const api_url = "https://api.adviceslip.com/advice";

// Defining async function
async function getapi(url) {

    // Storing response
    const response = await fetch(url);

    // Storing data in form of JSON
    var data = await response.json();
        console.log(data);
        show(data);
}
    
// Calling that async function
function generate(){
    getapi(api_url);
}
function show(data) {
    //GET id words
    let words = document.getElementById("words");
    words.innerHTML ='"' + data.slip.advice +'"';
}