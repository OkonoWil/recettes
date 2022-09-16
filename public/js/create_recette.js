const ingredients = document.getElementById('ingredients');
const preparations = document.getElementById('preparations');
const btnIng = document.getElementById('btnIng');
const btnPrepa = document.getElementById('btnPrepa');
const eltPrepa = document.getElementsByClassName('preparation')
const eltIng = document.getElementsByClassName('ingredients')

let i = 0
let j = 0
btnIng.addEventListener('click', function (){
    var ing = new Array()
    for (var a = 0; a <= i ; a++) {
        ing[a] = eltIng[a].value
     }
    ++i
    console.log('avant')
    ingredients.innerHTML += '<input type="text" name="ingredients['+i+']" id="" class="ingredients focus:ring-0 focus:border-transparent focus:outline border-2 rounded-md border-gray-500 p-1 my-1 mx-2">';
    for (var b = 0; b < i ; b++) {
        eltIng[b].value = ing[b]  
    }
    console.log('apres')
});
btnPrepa.addEventListener('click', function (){
    var prepa = new Array()
    for (var a = 0; a <= j ; a++) {
        prepa[a] = eltPrepa[a].value
     }
    ++j
    preparations.innerHTML += '<input type="text" name="preparation['+j+']" id="" class="preparation focus:ring-0 focus:border-transparent focus:outline border-2 rounded-md border-gray-500 p-1 my-1 mx-2">';
    for (var b = 0; b < j ; b++) {
        eltPrepa[b].value = prepa[b] 
     }
});