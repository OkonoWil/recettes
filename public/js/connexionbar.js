const dropdown = document.querySelector('#dropdown');
const bloclinks = document.querySelector('#bloclinks');
const btntop = document.querySelector('#btntop');
const liItems = document.querySelector('#dropdown li');

let toggleIndex;
btntop.addEventListener('click',toggleDropDown);

function toggleDropDown(){
    if(!toggleIndex){
        bloclinks.classList.remove('h-0');
        bloclinks.classList.add('h-16');
        toggleIndex = true;
    }
    else{
        bloclinks.classList.remove('h-16');
        bloclinks.classList.add('h-0');
        toggleIndex = false;

    }
}