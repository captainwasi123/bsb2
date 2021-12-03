var host = $("meta[name='host']").attr("content");
$(document).ready(function() {

    $(document).on('click', '.buypackage', function() {
          
        var id = $(this).data('id');
        if (confirm('Are you sure want to Buy This Package?')) {
            window.location.href = host + '/user/membership/buyMU/' + id;
        }
       
       

             

       

        });

        
    });




