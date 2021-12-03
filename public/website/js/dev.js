var host = $("meta[name='host']").attr("content");
$(document).ready(function() {

    $(document).on('click', '.favproduct', function() {
        var id = $(this).data('id');
        var element = $(this);
        $.get(host + "/product/fav/" + id, function(data) {
            if (data == '1') {
                $(element).html('<i class="material-icons md-18"> favorite</i>');
            } else {

                $(element).html('<i class="material-icons md-18"> favorite_border </i>');

            }
        });

    });

    $(document).on('click', '.favouriteVendor', function() {
        var id = $(this).data('id');
        var element = $(this);
        $.get(host + "/vendr/fav/" + id, function(data) {
            if (data == '1') {
                $(element).html('<i class="material-icons md-18"> favorite</i>');
            } else {
                $(element).html('<i class="material-icons md-18"> favorite_border </i>');
            }


        });
    });




});