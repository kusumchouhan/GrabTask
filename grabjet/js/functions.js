/**
 *
 * Contains handlers for date picker & dropdown select.
 */
(function($) {
    $('#form_datetime').datepicker({
        dateFormat: 'dd MM yy',
        minDate: new Date()
    });
    $('.total_amount').html('$199');

    $('#price_box').on('change', function() {
        var selectval = this.value,
            amount = selectval.replace(/[^0-9]/g, ''),
            total_amount = 199;

        if (amount !== '') {
            total_amount += parseInt(amount);
        }
        $('.total_amount').html('$' + total_amount);

    });
})(jQuery);