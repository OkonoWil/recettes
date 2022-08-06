const btn_delete = document.getElementById('btn_delete');
btn_delete.addEventListener('click',function(e){
    if(!confirm('Voulez-vous vraiment supprimer')){
        e.preventDefault();
    }
});