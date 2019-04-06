<script>
    $('#fe_vence').datepicker({
        uiLibrary: 'bootstrap4',iconsLibrary: 'fontawesome',
        format: 'dd-mm-yyyy',
        locale: 'es-es',
        weekStartDay: 1,
        size: 'small'
    });
    $('#fe_certifica').datepicker({
        uiLibrary: 'bootstrap4',iconsLibrary: 'fontawesome',
        format: 'dd-mm-yyyy',
        locale: 'es-es',
        weekStartDay: 1,
        size: 'small'
    });

    $(function() {
        $('.list-group-item').on('click', function() {
            $('.fa', this)
                .toggleClass('fa fa-chevron-right')
                .toggleClass('fa fa-chevron-down');
        });

    });

</script>
