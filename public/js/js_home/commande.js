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
let check=document.getElementById('check');
let autre_address = document.getElementById('autre_address');
let commande = document.getElementById("commande");
let facturation = document.getElementById("facturation");
let labnom = document.getElementById("labnom");
let labmail = document.getElementById("labmail");
let labphone = document.getElementById("labphone");
let labadresse = document.getElementById("labadresse");
let phaseValComm1 = document.getElementById("phaseValComm1");
let phaseValComm2 = document.getElementById("phaseValComm2");
let phaseValBordComm = document.getElementById("phaseValBordComm");

let retourfacture = document.getElementById("retourfacture");

check.addEventListener('click',function(){
    if(check.checked==true){
        autre_address.style.display="block";
    }
    else{
        autre_address.style.display="none";
    }
});
/*if(check.clicked==true){
    autre_address.style.display="none";
}
else{
    
}*/
for(let i=0;i<inputs.length; i++){
    inputs[i].addEventListener('change', function(){
        conteur=conteur+1;
    });
}

suiv.addEventListener('click', function(){
    if(nom.value=="" || prenom.value=="" || email.value=="" || phone.value=="" || adresse.value==""){
        infoChamps.innerText="Veuiller renseigner tous les champs";
        infoChamps.classList.add("alert","alert-danger");
    }
    else{
        
        facturation.style.display="none";
        commande.style.display="block";
        labnom.innerText=prenom.value+" "+nom.value;
        labmail.innerText=email.value;
        labphone.innerText=phone.value;
        labadresse.innerText=adresse.value;
        phaseValComm1.classList.remove('phase-non-valide');
        phaseValBordComm.classList.remove('phase-non-valide-border');
        phaseValComm2.classList.remove('phase-non-valide');

        phaseValComm1.classList.add('phase-valide');
        phaseValBordComm.classList.add('phase-valide-border');
        phaseValComm2.classList.add('phase-valide');

    }
});

///////////
retourfacture.addEventListener('click', function(){
        commande.style.display="none";
        facturation.style.display="block";
        phaseValComm1.classList.remove('phase-valide');
        phaseValBordComm.classList.remove('phase-valide-border');
        phaseValComm2.classList.remove('phase-valide');

        phaseValComm1.classList.add('phase-non-valide');
        phaseValBordComm.classList.add('phase-non-valide-border');
        phaseValComm2.classList.add('phase-non-valide');
});
/////

if(conteur==5){
    next.disabled=false;
}
else{

}

/// controle des champs

