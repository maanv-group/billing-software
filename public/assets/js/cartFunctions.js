function changeInt(e, ch) {
    var numberElement = $(e).closest(".input-group").find("input[type=number]");
    var max = parseInt(numberElement.attr("max"));
    var min = parseInt(numberElement.attr("min"));
    var value; // Declare 'value' variable here to avoid any potential issues.
    var productSinglePrice = parseInt(
        $(e).closest("tr").find("label[data-property=productPrice]").text()
    );

    switch (ch) {
        case "-":
            value = numberElement.val(function (index, currentValue) {
                var newValue = parseInt(currentValue) - 1;
                var priceTotalProduct = productSinglePrice * newValue;
                changeTotal(e, priceTotalProduct);
                return newValue <= min ? min : newValue;
            });
            break;

        case "+":
            value = numberElement.val(function (index, currentValue) {
                var newValue = parseInt(currentValue) + 1;
                var priceTotalProduct = productSinglePrice * newValue;
                changeTotal(e, priceTotalProduct);
                return newValue >= max ? max : newValue;
            });
            break;

        // Add more cases here if needed.

        default:
            // Handle the default case if necessary.
            break;
    }

    return value;
}

function deleteNode(e) {
    $(e).parent().parent().remove();
    changeTotalCart($("#cartTable"));
}

function changeTotal(e, price) {
    $(e).closest("tr").find("label[data-property=productTotal]").text(price);
    changeTotalCart($("#cartTable"));
}

function changeInput(e) {
    var productSinglePrice = parseInt(
        $(e).closest("tr").find("label[data-property=productPrice]").text()
    );
    changeTotal(e, productSinglePrice * $(e).val());
    changeTotalCart($("#cartTable"));
}

function changeTotalCart(e) {
    var totalPriceOfCart = 0;
    $(e)
        .find("label[data-property=productTotal]")
        .map(function () {
            totalPriceOfCart += parseInt($(this).text());
        });
    $("#totalPriceOfCart").val(totalPriceOfCart);
    $("#totalPriceOfCartLabel").text(totalPriceOfCart);
}
