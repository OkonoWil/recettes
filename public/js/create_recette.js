const ingredients = document.getElementById('ingredients');
const preparations = document.getElementById('preparations');
const btnIng = document.getElementById('btnIng');
const btnPrepa = document.getElementById('btnPrepa');

btnIng.addEventListener('click', function (){
    ingredients.innerHTML += '<input type="text" name="ingredients[]" id="" class="focus:ring-0 focus:border-transparent focus:outline border-2 rounded-md border-gray-500 p-1 my-1 mx-2">';
});
btnPrepa.addEventListener('click', function (){
    preparations.innerHTML += '<input type="text" name="preparation[]" id="" class="focus:ring-0 focus:border-transparent focus:outline border-2 rounded-md border-gray-500 p-1 my-1 mx-2">';
});