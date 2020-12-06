let quantite =[]; 
let edit = document.getElementById('edit');
let update = document.getElementById('updcart');

let vider = document.getElementById('vider');
let i=0;
do{
    quantite[i]=document.getElementById('quantite'+i);
    
    i=i+1;
    
}
while((document.getElementById('quantite'+i)));
/// Ecoute sur le champ quantite pour activer le bouton edit
for( i=0;i<quantite.length;i++){
    
    quantite[i].addEventListener('change', function(event){
        event.preventDefault();
        update.disabled=false;
        update.classList.remove('update-disable');
        update.classList.add('update-enable');
    });
}



