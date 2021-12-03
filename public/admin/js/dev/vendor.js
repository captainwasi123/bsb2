var host = $("meta[name='host']").attr("content");
$(document).ready(function() {

    'use strict'

    $(document).on('click', '.deleteProduct', function() {
        var id = $(this).data('id');
        if (confirm('Are you sure want to delete this product?')) {
            window.location.href = host + '/product/delete/' + id;
        }
    });

      $(document).on('click', '.vendorbuypackage', function() {
          
        var id = $(this).data('id');
        if (confirm('Are you sure want to Buy This Package?')) {
            window.location.href = host + '/virtual/buyMV/' + id;
        }
       

        });

        

          $(document).on('click', '.featureProPend', function() {
            var is_feature = 0;
          var product_id = $(this).data('id');

        if (confirm('Are you sure want to Product Feature ?')) {
            window.location.href = host + "/product/featureStatusPend/" + product_id + "/" + is_feature;

            // window.location.href = host + '/product/featureStatusPend/' + id;

        }
    });


     $(document).on('click', '.unfeaturePro', function() {
            var is_feature = 4;
          var product_id = $(this).data('id');

        if (confirm('Are you sure want to Product Feature ?')) {
            window.location.href = host + "/product/unfeaturePro/" + product_id + "/" + is_feature;

            // window.location.href = host + '/product/featureStatusPend/' + id;

        }
    });

      $(document).on('click', '.cancelmembership', function() {
            var status = 5;
          var product_id = $(this).data('id');

        if (confirm('Are you sure want to Cancel Membership?')) {
            window.location.href = host + "/cancelmembership/" + product_id + "/" + status;

            // window.location.href = host + '/product/featureStatusPend/' + id;

        }
    });


});
