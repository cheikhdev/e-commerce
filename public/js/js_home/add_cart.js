let form = document.getElementById('panier_form');

form.addEventListener('submit',function (e) {
    e.preventDefault();
    let form_data = $(this).serialize();
    //alert(form_data);
    
    //// envoie des données
    $.ajax({
        type: "POST",
        url: "{{route('cart.store')}}",
        data: form_data,
        success: function (data) {
            alert(data)
            if(data.success){
                $(`#form${data.id} button`).html('produit ajouter au panier');
                console.log("Tout va bien");
                Swal.fire({
                    title: 'Produit Ajouté dans le panier!',
                    text: 'Do you want to continue',
                    icon: 'success',
                    html:'<a href="/cart" class="btn btn-success">Ouvrir le panier</a>',
                    showCloseButton: true,
                    showCancelButton: false,
                    focusConfirm: false,
                    confirmButtonText:
                        '<i class="fa fa-thumbs-up"></i> Ajouter d\'autres produits!',
                    confirmButtonAriaLabel: 'Ajouter d\'autres produits!'
                });
            }else{
                console.log("il y une erreur");
            }
        }
    })
    ////  fin récuperation
})