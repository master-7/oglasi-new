$(".extremum-click").click(function () {
    $(this).siblings(".extremum-slide").slideToggle("fast");
});

$(".extremum-click2").click(function () {
    $(this).siblings(".extremum-slide2").slideToggle("fast");
});

$(function() {
    $( "#slider_price" ).slider({
        range: true,
        min: 0,
        max: 900,
        values: [ 75, 300 ],
        slide: function( event, ui ) {
            //Поле минимального значения
            $( "#price" ).val(ui.values[ 0 ]);
            //Поле максимального значения
            $("#price2").val(ui.values[1]);			}
    });
    //Записываем значения ползунков в момент загрузки страницы
    //То есть значения по умолчанию
    $( "#price" ).val($( "#slider_price" ).slider( "values", 0 ));
    $("#price2").val($("#slider_price").slider( "values", 1 ));
});









