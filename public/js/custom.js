jQuery(document).ready(function (){
    jQuery('.excursions .order').on('click', function () {
        const excursion = jQuery(this).attr('data-excursion');
        return jQuery('.form__order').find("#excursion__name option[value='"+excursion+"']").prop("selected",!0)
    });

    jQuery('.mobile__menu').on('click', 'a', function () {
        return jQuery('.close-menu-btn').trigger('click');
    });
});