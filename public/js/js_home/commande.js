let nom = document.getElementById('nom');
let prenom = document.getElementById('prenom');
let email = document.getElementById('email');
let phone = document.getElementById('phone');
let adresse = document.getElementById('adresse');
let form = document.getElementById('form');
let conteur =0;
let suiv = document.getElementById('suivantbtn1');

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
// passage à Livraison
let phaseValLiv1 = document.getElementById("phaseValLiv1");
let phaseValLiv2 = document.getElementById("phaseValLiv2");
let phaseValBordLiv = document.getElementById("phaseValBordLiv");
////Recupération du button suivant dans livraison
let suiv2 = document.getElementById('suivantbtn2');
///Récuperation de la l'espace livraison
let livraison = document.getElementById("livraison");

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
        livraison.style.display="block";
        labnom.innerText=prenom.value+" "+nom.value;
        labmail.innerText=email.value;
        labphone.innerText=phone.value;
        labadresse.innerText=adresse.value;
        phaseValLiv1.classList.remove('phase-non-valide');
        phaseValBordLiv.classList.remove('phase-non-valide-border');
        phaseValLiv2.classList.remove('phase-non-valide');

        phaseValLiv1.classList.add('phase-valide');
        phaseValBordLiv.classList.add('phase-valide-border');
        phaseValLiv2.classList.add('phase-valide');

    }
});


document.getElementById("livMagazin").addEventListener('click',function(){
    if(document.getElementById("livMagazin").checked==true){
        document.getElementById("livDomicile").disabled=true;
    }
    if(document.getElementById("livMagazin").checked==false){
        document.getElementById("livDomicile").disabled=false;
    }
});

document.getElementById("livDomicile").addEventListener('click',function(){
    if(document.getElementById("livDomicile").checked==true){
        labnomL.innerText=prenom.value+" "+nom.value;
        labmailL.innerText=email.value;
        labphoneL.innerText=phone.value;
        labadresseL.innerText=adresse.value;
        document.getElementById("detailLiv").style.display="block";
        document.getElementById("livMagazin").disabled=true;
    }
    if(document.getElementById("livDomicile").checked==false){
        document.getElementById("livMagazin").disabled=false;
        document.getElementById("detailLiv").style.display="none";
    }
});

suiv2.addEventListener('click', function(){
    if(document.getElementById("livMagazin").checked==false && document.getElementById("livDomicile").checked==false){
        infoChamps2.innerText="Veuiller selectionner une option";
        infoChamps2.classList.add("alert","alert-danger");
    }
    else{
        
        livraison.style.display="none";
        commande.style.display="block";
        
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
        livraison.style.display="none";
        facturation.style.display="block";
        phaseValLiv1.classList.remove('phase-valide');
        phaseValBordLiv.classList.remove('phase-valide-border');
        phaseValLiv2.classList.remove('phase-valide');

        phaseValLiv1.classList.add('phase-non-valide');
        phaseValBordLiv.classList.add('phase-non-valide-border');
        phaseValLiv2.classList.add('phase-non-valide');
});
/////
document.getElementById("retourlivraison").addEventListener('click', function(){
    commande.style.display="none";
    livraison.style.display="block";
    phaseValComm1.classList.remove('phase-valide');
    phaseValBordComm.classList.remove('phase-valide-border');
    phaseValComm2.classList.remove('phase-valide');

    phaseValComm1.classList.add('phase-non-valide');
    phaseValBordComm.classList.add('phase-non-valide-border');
    phaseValComm2.classList.add('phase-non-valide');
});
///
if(conteur==5){
    next.disabled=false;
}
else{

}

/// controle des champs

