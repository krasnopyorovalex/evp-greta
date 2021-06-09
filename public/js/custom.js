jQuery(document).ready(function (){
    jQuery('.excursions .order').on('click', function () {
        const excursion = jQuery(this).attr('data-excursion');
        return jQuery('.form__order').find("#excursion__name option[value='"+excursion+"']").prop("selected",!0)
    });

    jQuery('.mobile__menu').on('click', 'a', function () {
        return jQuery('.close-menu-btn').trigger('click');
    });

    /*
    |-----------------------------------------------------------
    |   custom datepicker
    |-----------------------------------------------------------
    */
    const arrival_date = jQuery('input[name=date_in]'),
        departure_date = jQuery('input[name=date_out]'),
        tomorrow = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);

    departure_date.datepicker({
        'autoClose': true,
        'dateFormat': 'dd.mm.yyyy',
        'minDate': tomorrow,
        'position': 'bottom right'
    });

    arrival_date.datepicker({
        'autoClose': true,
        'dateFormat': 'dd.mm.yyyy',
        'minDate': new Date(),
        onSelect: function (fd, date) {
            if(date){
                let change_date = new Date(date.getTime()),
                    departure_date_val = departure_date.val().split('.');

                departure_date_val = new Date(
                    parseInt(departure_date_val[2]),
                    parseInt(departure_date_val[1]) - 1,
                    parseInt(departure_date_val[0])
                );
                departure_date.data('datepicker').update('minDate', new Date(date.getTime() + 24*60*60*1000));

                if(departure_date_val <= change_date){
                    return departure_date.val('');
                }
            }
            return true;
        }
    });
});