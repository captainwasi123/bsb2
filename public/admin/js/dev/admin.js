var host = $("meta[name='host']").attr("content");

$(document).ready(function() {
    'use strict'

    //Vendor

    $(document).on('click', '.approveVendor', function() {
        var vendor_status = 2;
        var user_id = $(this).data('id');

        if (confirm('Are you sure want to change status?')) {
            window.location.href = host + "/vendor/changeStatus/" + user_id + "/" + vendor_status;
        }
    });

    $(document).on('click', '.rejectVendor', function() {
        var vendor_status = 3;
        var user_id = $(this).data('id');

        if (confirm('Are you sure want to change status?')) {
            window.location.href = host + "/vendor/changeStatus/" + user_id + "/" + vendor_status;
        }
    });

    $(document).on('click', '.featureVendor', function() {
        var is_feature = 1;
        var user_id = $(this).data('id');

        if (confirm('Are you sure want to become Feature ?')) {
            window.location.href = host + "/vendor/featureStatus/" + user_id + "/" + is_feature;
        }
    });

      $(document).on('click', '.directfeatured', function() {
       
        var user_id = $(this).data('id');

        if (confirm('Are you sure want to become Feature ?')) {
            window.location.href = host + "/vendor/directfeatured/" + user_id ;
        }
    });

    $(document).on('click', '.unfeatureVendor', function() {
        var is_feature = 2;
        var user_id = $(this).data('id');

        if (confirm('Are you sure want to Remove Feature Vendor?')) {
            window.location.href = host + "/vendor/featureStatus/" + user_id + "/" + is_feature;
        }
    });


    $(document).on('click', '.publishVendor', function() {
        var user_id = $(this).data('id');

        if (confirm('Are you sure want to publish this vendor?')) {
            window.location.href = host + "/vendor/publish/" + user_id;
        }
    });

    //Users

    $(document).on('click', '.rejectUser', function() {
        var vendor_status = 2;
        var user_id = $(this).data('id');

        if (confirm('Are you sure want to change status?')) {
            window.location.href = host + "/users/changeStatus/" + user_id + "/" + vendor_status;
        }
    });
    $(document).on('click', '.approveUser', function() {
        var vendor_status = 1;
        var user_id = $(this).data('id');

        if (confirm('Are you sure want to change status?')) {
            window.location.href = host + "/users/changeStatus/" + user_id + "/" + vendor_status;
        }
    });

    //Product

    $(document).on('click', '.rejectProduct', function() {
        var vendor_status = 2;
        var product_id = $(this).data('id');

        if (confirm('Are you sure want to change status?')) {
            window.location.href = host + "/product/changeStatus/" + product_id + "/" + vendor_status;
        }
    });

    $(document).on('click', '.approveProduct', function() {
        var vendor_status = 1;
        var product_id = $(this).data('id');

        if (confirm('Are you sure want to change status?')) {
            window.location.href = host + "/product/changeStatus/" + product_id + "/" + vendor_status;
        }
    });

    // feature product
    $(document).on('click', '.approveFeautreProduct', function() {
        var feature_status = 1;
        var product_id = $(this).data('id');

        if (confirm('Are you sure want to change status?')) {
            window.location.href = host + "/product/changeFeatureStatus/" + product_id + "/" + feature_status;
        }
    });

       $(document).on('click', '.rejectFeautreProduct', function() {
        var feature_status = 2;
        var product_id = $(this).data('id');

        if (confirm('Are you sure want to change status?')) {
            window.location.href = host + "/product/changeStatus/" + product_id + "/" + feature_status;
        }
    });
    

    $(document).on('click', '.cancelFeaPro', function() {
        var feature_status = 4;
        var product_id = $(this).data('id');

        if (confirm('Are you sure want to change status?')) {
            window.location.href = host + "/product/cancelFeaPro/" + product_id + "/" + feature_status;
        }
    });
    
    $(document).on('click', '.rejectFeaPro', function() {
        var feature_status = 3;
        var product_id = $(this).data('id');

        if (confirm('Are you sure want to change status?')) {
            window.location.href = host + "/product/cancelFeaPro/" + product_id + "/" + feature_status;
        }
    });

})
