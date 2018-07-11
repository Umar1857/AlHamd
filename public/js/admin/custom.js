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

/* Header Notification Code */
$('.notification_links, .notification_lnks').click(function (e) {

    var a_element = $(this);
    e.preventDefault();
    var notif_id = $(this).attr('notif-id');

    $.ajax({
        url: '/admin/notifications/markasread',
        type: 'GET',
        data: {id: notif_id},
        success: function (data) {
            if(data){
                if(data == 1){
                    window.location.href = a_element.attr("href");
                }
            }
        }
    });
});