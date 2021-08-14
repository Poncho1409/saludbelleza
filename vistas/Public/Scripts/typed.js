const text = ['Texto 1 Texto 1 Texto 1 Texto 1', 'Texto 2', 'Texto 3'];
let count = 0;
let index = 0;
let currentText = '';
let letter = '';



(function type(){

    if(count === text.length){
        count = 0;
    }
    currentText = text[count];
    letter = currentText.slice(0, ++index);
    //letter = currentText.slice(0, --index); 

    document.querySelector('.escribir').textContent = letter;
    if(letter.length === currentText.length){
        count++;
        index = 0;
    }

    setTimeout(type, 200);
    

}());