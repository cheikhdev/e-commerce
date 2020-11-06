let quantite = document.getElementById('quantite');
let edit = document.getElementById('edit');

let vider = document.getElementById('vider');

/// Ecoute sur le champ quantite pour activer le bouton edit
quantite.addEventListener('change', function(event){
    event.preventDefault();
    edit.disabled=false;
    
});


