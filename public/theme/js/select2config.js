$(document).ready(function () {
    function initSelect2() {
        $('.select2').each(function () {
            $(this).select2({
                placeholder: $(this).data('placeholder'),
            });

            $(this).off('change').on('change', function(e) {
                const val = $(this).val();
                const model = $(this).data('model');
                const data = {
                    'model': model,
                    'value': val,
                };
                console.log(data);
                Livewire.emit('setOptionValue', data);
            });
        });
    }

    // Initialize Select2 on document ready
    initSelect2();

    // Reinitialize Select2 when Livewire updates the DOM
    Livewire.hook('message.processed', (message, component) => {
        initSelect2();
    });
});
