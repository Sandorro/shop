$(document).ready(function () {

    $("#sch").click(function () {
        let id = $(this).attr("data-id");
        $.post("/cart/schAjax/"+id, {}, function (data) {
            $("#cart-count").html(data);
        });
        return false;
    });

    $("#price").click(function () {
        $.post("/cart/price/", {}, function (data) {
            $("#price-output").html(data);
        });
        return false;
    });

    $(".udalenie").click(function () {
        let id = $(this).attr("data-id");
        console.log(id);
        $.post("/cart/deleteAjax/" + id, {}, function (data) {
            console.log(data);
            $("#tablica").html(data);
        });
        return false;
    });
});

$(document).ready(function () {
    $(".add-cart").click(function () {
        let tabl = $(this).attr('data-tabl');
        let id = $(this).attr('data-id');
        console.log(tabl);
        console.log(id);
        $.post('/cart/addAjax/'+tabl+'/'+id, {}, function (data) {
            alert("Товар успешно добавлен в корзину!");
        });
        return false;
    });
});








// $(document).ready(function () {
//     $("#price").click(function () {
//         console.log('hello');
//         $.post("/cart/priceAjax", {}, function (data) {
//             $("#price-output").html(data);
//         });
//         return false;
//     });
// })

// function kolichestvo(){
//     return (count($_SESSION['cart']));
// }