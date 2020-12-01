let quantite = document.querySelector('.quantite');
let edit = document.getElementById('edit');
let update = document.getElementById('updcart');

let vider = document.getElementById('vider');

/// Ecoute sur le champ quantite pour activer le bouton edit
quantite.addEventListener('change', function(event){
    event.preventDefault();
    update.disabled=false;
    update.classList.remove('update-disable');
    update.classList.add('update-enable');
   
    
});


