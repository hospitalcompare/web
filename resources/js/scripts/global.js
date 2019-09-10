$(document).ready(function () {
    //Set the first option of the Procedures dropdown to 'Not Known'
    $("select[name='procedure_id'] option:first").attr('disabled', true).attr('hidden', true);

    //Set the checked value of checkboxes to boolean 0/1
    $("input[type='checkbox']").on('change', function(){
        $(this).val(this.checked ? 1 : 0);
    })
});


