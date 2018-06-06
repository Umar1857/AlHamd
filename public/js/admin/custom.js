$('#deleteForm').submit( function(event) {
    alert('Hii');
    var form = this; // storing the form
    event.preventDefault(); // prevent form submit

    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
        if (willDelete) {
            alert(form);
            form.submit();
        } else {
        }
});
});