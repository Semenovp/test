$(function () {

    $.material.init();

    $('input[type=date]').pickadate();

    $('select[multiple]').multipleSelect({
        selectAll: false,
        placeholder: 'Выбрать',
        allSelected: 'Все'
    });


});