var host = $("meta[name='host']").attr("content");
$(document).ready(function() {

    'use strict'

    $(document).on('click', '.deleteWishlistProduct', function() {
        var id = $(this).data('id');
        if (confirm('Are you sure want to Delete this?')) {
            window.location.href = host + '/user/deleted/' + id;
        }
    });

    
    $(document).on('click', '.deletewhishlistVendors', function() {
        var id = $(this).data('id');
        if (confirm('Are you sure want to Delete this?')) {
            window.location.href = host + '/user/delete/' + id;
        }
    });


});
