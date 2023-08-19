// console.log(Routing.generate('delete_item_from_cart',{id: 3}));




function verifPanier() {
    $.ajax({
        url: Routing.generate('verification_panier'), success: function (result) {
            $("#qte"+id).val(0);
        }
    });
}
function deleteSize(id, sizeid,qte,prix,nbpromotion,total_product_price,isDelivered,minprixLivraison,user) {
    $.ajax({
        url: Routing.generate('delete_size_from_cart', {id: id,sizeid: sizeid}), success: function (result) {
            $("#"+sizeid).remove();
            var quantiy = parseInt($("#qte" + id).val())-qte;
            var price = document.getElementById("price" + id).innerText;
            var totalprice=$("#total-price").text()
            if($("#promotion"+ id).val()) var promotion = parseInt(document.getElementById("promotion" + id).innerText);


            if(quantiy == 0){
                $(".product-" + id).remove();
            }

            $("#qte" + id).val(quantiy);
           // $("#price" + id).val(price*(quantiy));
           // var spanprice = document.getElementById("price" + id);
          //  spanprice.innerText = span.textContent =price*quantiy;

            if(promotion > 0 && quantiy > nbpromotion   ){
                $.ajax({
                    url: Routing.generate('promotion',{id: id,qte: quantiy}), success: function (result) {
                        $("#price"+ id).text(result["prix"].toFixed(3));
                        if(document.getElementById("promotion" + id)) $("#promotion"+ id).text(result["old_prix"].toFixed(3)+'DT');

                    }
                });

            }
            else {
                $("#promotion" + id).remove();
            }

            if (isDelivered  && (totalprice-(prix*qte) <= minprixLivraison)){
                const divrow = document.createElement('div');
                divrow.className = 'alert alert-danger alert-dismissible';
                divrow.innerHTML =
                    'Pour la livraison à domicile, il faut une commande d´un montant minimum de ' +
                    minprixLivraison.toFixed(3) +
                    'DT' ;
                document.getElementById("divlivraison").innerHTML = "";
                document.getElementById("divlivraison").appendChild(divrow);
            }

            $(".my_nav_bar").html(result);
            $(".total_price_cart_empty").html($(".total_price_cart").html());
            $("#total-price").html($(".total_price_cart_empty").html())
            $("img.lazy").lazyload({
                threshold : 50
            });
            $(window).load(function(){
                $("html,body").trigger("scroll");
            });
            if($(".total_price_cart_empty").html()!="0.000" && user=='true'){
                $('#btn-livrer').addClass("btn-primary");
                $('#btn-livrer').attr("href",Routing.generate('verification_panier'));

                if (isDelivered && $("#total-price").text() >= minprixLivraison){
                    $('#btn-livrer').html("Choisir entre drive et livraison <i class='fa fa-arrow-right'></i>");
                }
                else{
                    $('#btn-livrer').html(" Sélectionnez votre créneau<i class='fa fa-arrow-right'></i>");
                }
            }else if($(".total_price_cart_empty").html()=="0.000" && user=='true'){
                $('#btn-livrer').attr("href","#");
                $('#btn-livrer').addClass("btn-danger");
                $('#btn-livrer').html("Panier vide <i class='fa fa-exclamation-circle'></i>");
            }else{
                $('#btn-livrer').attr("href",Routing.generate('fos_user_security_login'));
                $('#btn-livrer').addClass("btn-danger");
                $('#btn-livrer').html("Connecter pour commander&nbsp; <i class='fa fa-exclamation-circle'></i>");
            }
        }
    });
}

function deleteArticle(id, total_product_price) {
    $("#qte"+id).val(0);
    $.ajax({
        url: Routing.generate('delete_item_from_cart', {id: id}), success: function (result) {
            /*$(".product-"+id).remove();

             total_price = $(".total_price_cart").html() - total_product_price;

             if(total_price<0 || $(".nb-article").html() - 1 == 0) total_price = 0;
             $(".total_price_cart").html(total_price.toFixed(2));
             $(".total_price_cart_empty").html(total_price.toFixed(2));

             $(".nb-article").html($(".nb-article").html() - 1);*/
            $(".product-" + id).remove();
            $(".my_nav_bar").html(result);
            $(".total_price_cart_empty").html($(".total_price_cart").html());
            $("#total-price").html($(".total_price_cart_empty").html())
            $("img.lazy").lazyload({
                threshold : 50
            });
            $(window).load(function(){
                $("html,body").trigger("scroll");
            });
        }
    });
}

function deleteArticlePagePanier(id,qte, prix,isDelivered,minprixLivraison,total_product_price,user) {
    $("#qte"+id).val(0); /*added by me to test*/
    $.ajax({
        url: Routing.generate('delete_item_from_cart', {id: id}), success: function (result) {

            var totalprice=$("#total-price").text()
            if (isDelivered  && (totalprice-(prix*qte) <= minprixLivraison)){
                const divrow = document.createElement('div');
                divrow.className = 'alert alert-danger alert-dismissible';
                divrow.innerHTML =
                    'Pour la livraison à domicile, il faut une commande d´un montant minimum de ' +
                    minprixLivraison.toFixed(3) +
                    'DT' ;
                document.getElementById("divlivraison").appendChild(divrow);
            }
            $(".product-" + id).remove();
            $(".my_nav_bar").html(result);
            $("img.lazy").lazyload({
                threshold : 50
            });
            $(window).load(function(){
                $("html,body").trigger("scroll");
            });
            $(".total_price_cart_empty").html($(".total_price_cart").html());
            $("#total-price").html($(".total_price_cart_empty").html())

            if($(".total_price_cart_empty").html()!="0.000" && user=='true'){
                $('#btn-livrer').addClass("btn-primary");
                $('#btn-livrer').attr("href",Routing.generate('verification_panier'));
                if (isDelivered && $("#total-price").text() >= minprixLivraison){
                    $('#btn-livrer').html("Choisir entre drive et livraison <i class='fa fa-arrow-right'></i>");
                }
                else{
                    $('#btn-livrer').html(" Sélectionnez votre créneau<i class='fa fa-arrow-right'></i>");

                }

            }else if($(".total_price_cart_empty").html()=="0.000" && user=='true'){
                $('#btn-livrer').attr("href","#");
                $('#btn-livrer').addClass("btn-danger");
                $('#btn-livrer').html("Panier vide <i class='fa fa-exclamation-circle'></i>");
            }else{
                $('#btn-livrer').attr("href",Routing.generate('fos_user_security_login'));
                $('#btn-livrer').addClass("btn-danger");
                $('#btn-livrer').html("Connecter pour commander&nbsp; <i class='fa fa-exclamation-circle'></i>");
            }
        }
    });
}
function addfavoris(id) {
    $.ajax({
        url: Routing.generate('add_favoris', {id: id}), success: function (result) {
            $(".my_nav_bar").html(result);
            $(".total_price_cart_empty").html($(".total_price_cart").html());
            $this.button('reset');
            $("img.lazy").lazyload({
                threshold : 50
            });


            $(window).load(function(){
                $("html,body").trigger("scroll");
            });

           // window.location.reload();
            /////rw add

            //  $(this).addClass("active")///rahma add to test
           // location.reload();///rahma add to test
        }
    });

}
function deletefavoris(id,key) {

    $.ajax({
        url: Routing.generate('add_favoris', {id: id}), success: function (result) {
            $(".my_nav_bar").html(result);
            $(".total_price_cart_empty").html($(".total_price_cart").html());
            $("img.lazy").lazyload({
                threshold : 50
            });
            $(window).load(function(){
                $("html,body").trigger("scroll");
            });
            /*var row = document.getElementById('fav'+id);
            row.parentElement.removeChild(row);*/
            window.location.reload();
        }
    });

}

function addArticle(id, quantity,max) {
    var qte = parseInt(  $("#qte"+id).val());
    var qte_input = document.querySelectorAll("[id=qte" + id+"]");


    if(qte+ 1  > quantity  ){
        document.getElementById("idinputtwo"+id).innerHTML = quantity;

        $("document").ready(function () {
            $('#modal-panier'+id).modal({
                backdrop: 'static',
                keyboard: false
            });
            //  $('select').select2();
        })
    }
    else if (qte + 1 > max) {
        $("document").ready(function () {
            $('#modal-quantity-max'+id).modal({
                backdrop: 'static',
                keyboard: false});
        })
    }
    else {


        for(var i = 0; i < qte_input.length; i++){
            qte_input[i].value = qte + 1;
        }

    //   alert("qtettee"+qte)

            var $this = $("#addArticle"+id);
            $.ajax({
                url: Routing.generate('add_quantity_to_cart', {id: id}), success: function (result) {
                    $(".my_nav_bar").html(result);
                    $(".total_price_cart_empty").html($(".total_price_cart").html());
                   /* commented by rw 18/05/2022
                    $("img.lazy").lazyload({
                        threshold : 50
                    });*/

                    $(window).load(function(){
                        $("html,body").trigger("scroll");
                    });
                    $this.button('reset');

                 //   window.location.reload();

                }
            });



}
}

function addArticlepopup(id, quantity,max) {
    var qte = parseInt(  $("#qte"+id).val());
    var qte_input = document.querySelectorAll("[id=qte" + id+"]");




    if(qte > quantity  ){

        document.getElementById("idinputtwo"+id).innerHTML = quantity;

        $("document").ready(function () {
            $('#modal-panier'+id).modal({
                backdrop: 'static',
                keyboard: false
            });
            //  $('select').select2();
        })
    }
    else if (qte> max) {
        $("document").ready(function () {
            $('#modal-quantity-max'+id).modal({
                backdrop: 'static',
                keyboard: false});
        })
    }
    else {
        for(var i = 0; i < qte_input.length; i++){
            qte_input[i].value = qte ;
        }


        var $this = $("#addArticlepopup"+id);
        $.ajax({
            url: Routing.generate('add_many_quantity_to_cart', {id: id,qte: 5}), success: function (result) {
                $(".my_nav_bar").html(result);
                $(".total_price_cart_empty").html($(".total_price_cart").html());
                $("img.lazy").lazyload({
                    threshold : 50
                });
                $(window).load(function(){
                    $("html,body").trigger("scroll");
                });
                $this.button('reset');
            }
        });
    }
}

function addArticlewithsize(id,size,quantite) {
        $.ajax({
            url: Routing.generate('add_quantity_to_cart_with_size', {id: id,sizeid: size,qte: quantite}), success: function (result) {
                $(".my_nav_bar").html(result);
                $(".total_price_cart_empty").html($(".total_price_cart").html());
                $("img.lazy").lazyload({
                    threshold : 50
                });
                $(window).load(function(){
                    $("html,body").trigger("scroll");
                });

                //hide modal after add to cart
               // $('#productSetailsModalAjax'+id).modal('hide');


            }
        });

}



function deleteArticleQuantity(id, product_price) {
    var qte_input = document.querySelectorAll("[id=qte" + id+"]");
    var quantity = parseInt(  $("#qte"+id).val());
    if (quantity > 0) {

        for(var i = 0; i < qte_input.length; i++){
            qte_input[i].value = quantity - 1;
        }

        var $this = $("#deleteArticle"+id);

        $.ajax({
            url: Routing.generate('delete_quantity_to_cart', {id: id}), success: function (result) {
                $(".my_nav_bar").html(result);
                $(".total_price_cart_empty").html($(".total_price_cart").html());
                $this.button('reset');
                $("img.lazy").lazyload({
                    threshold : 50
                });

                $(window).load(function(){
                    $("html,body").trigger("scroll");
                });

               // $('#productSetailsModalAjax'+id).modal('hide');
                $('.modal').modal('hide');



            }
        });
    }

}

function addArticleQuantite(id, product_price,quantite) {
    for (var i=0;i<quantite;i++){
        addArticle(id,product_price);
    }
}


function goToURL(url) {
    location.href = url;


}
$(document).ready(function () {
    $(".total_price_cart_empty").html($(".total_price_cart").html());

    last_val = 0;
    $(".code").keyup(function () {

        if ($(this).val().length === 4 && last_val != $(this).val()) {
            last_val = $(this).val();
            $(".delegation option").remove();
            $.ajax({
                type: 'get',
                url: Routing.generate('delegations', {cp: $(this).val()}),
                beforeSend: function () {
                    if ($(".loading").length == 0) {
                        $("form .delegation").parent().append('<i class="loading fa fa-spinner fa-spin" style="font-size: 22px"></i>');
                    }
                    $(".delegation option").remove();
                },
                success: function (data) {
                    if (data.ville) {
                        $.each(data.ville, function (index, value) {
                            $(".delegation").append($('<option>', {value: index, text: value}));
                        });
                    }
                    $(".loading").remove();
                }
            });
        } else {
            $(".delegation").val('');
        }
    });
});
