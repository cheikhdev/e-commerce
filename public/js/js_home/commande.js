let nom = document.getElementById('nom');
let prenom = document.getElementById('prenom');
let email = document.getElementById('email');
let phone = document.getElementById('phone');
let adresse = document.getElementById('adresse');
let form = document.getElementById('form');
let conteur =0;
let suiv = document.getElementById('suivantbtn');
let inputs= [nom,prenom,email,phone,adresse];
let infoChamps = document.getElementById('infoChamps');
for(let i=0;i<inputs.length; i++){
    inputs[i].addEventListener('change', function(){
        conteur=conteur+1;
    });
}

suiv.addEventListener('click', function(){
    if(conteur<5 || nom=="" || prenom=="" || email=="" || phone=="" || adresse==""){
        infoChamps.innerText="Veuiller renseigner tous les champs";
        infoChamps.classList.add("alert","alert-danger");
    }
});

if(conteur==5){
    next.disabled=false;
}
else{

}

/// controle des champs

