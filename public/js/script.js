$('body').on('click', '#addNew', function (event) {
    event.preventDefault();

    $('#title').text('Add New Item');
    $('#addButton').show();
    $('#delete').hide();
    $('#saveChanges').hide();
    $('#addItem').val('');
});

$('body').on('click', '.ourItem', function (event) {
    event.preventDefault();

    var txt = $(this).text();
    var id = $(this).find('#itemId').val();
    $('#title').text('Edit Item');
    $('#addItem').val(txt);
    $('#delete').show();
    $('#saveChanges').show();
    $('#addButton').hide();
    $('#id').val(id);
});

$('body').on('click', '#addButton', function (event) {
    event.preventDefault();

    var txt = $('#addItem').val();
    $.post('list', { 'txt': txt, '_token': $('input[name=_token]').val() }, function (data) {
        console.log(data);
        $('.card-body').load(location.href + ' .card-body');
    });
});

$('#delete').click(function (event) {
    event.preventDefault();

    var id = $('#id').val();
    console.log(id);
});