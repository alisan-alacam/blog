(function($) {

    $(document).ready(function () {

        $('[data-toggle="datetimepicker"]').datetimepicker({
            icons: {
                time: 'glyphicon glyphicon-clock-o',
                date: 'glyphicon glyphicon-calendar',
                up: 'glyphicon glyphicon-chevron-up',
                down: 'glyphicon glyphicon-chevron-down',
                previous: 'glyphicon glyphicon-chevron-left',
                next: 'glyphicon glyphicon-chevron-right',
                today: 'glyphicon glyphicon-check-circle-o',
                clear: 'glyphicon glyphicon-trash',
                close: 'glyphicon glyphicon-remove'
            }
        });

        $(document).on('submit', 'form[data-confirmation]', function (event) {
            var $form = $(this),
                $confirmModal = $('#confirmationModal');

            if ($confirmModal.data('result') !== 'yes') {

                event.preventDefault();

                $confirmModal
                    .off('click', '#btnYes')
                    .on('click', '#btnYes', function () {
                        $confirmModal.data('result', 'yes');
                        $form.find('input[type="submit"]').attr('disabled', 'disabled');
                        $form.submit();
                    })
                    .modal('show');
            }
        });
    });
})(window.jQuery);