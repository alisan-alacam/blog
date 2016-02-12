(function($) {

    $(document).ready(function () {

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