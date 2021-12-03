<script src="{{URL::to('/public/admin')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{URL::to('/public/admin')}}/plugins/bootstrap/js/popper.min.js"></script>
<script src="{{URL::to('/public/admin')}}/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{URL::to('/public/admin')}}/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="{{URL::to('/public/admin')}}/js/waves.js"></script>
<!--Menu sidebar -->
<script src="{{URL::to('/public/admin')}}/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="{{URL::to('/public/admin')}}/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<!--Custom JavaScript -->
<script src="{{URL::to('/public/admin')}}/js/custom.min.js"></script>
<script src="{{URL::to('/public/admin')}}/js/dashboard1.js"></script>
<script src="{{URL::to('/public/admin')}}/js/prodWishList.js"></script>
<script src="{{URL::to('/public/admin')}}/js/dev/user.js"></script>





 <script src="{{URL::to('/public/admin')}}/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- ============================================================== -->
    <!-- Plugins for this page -->
    <!-- ============================================================== -->
    <!-- jQuery file upload -->
    <script src="{{URL::to('/public/admin')}}/plugins/dropify/dist/js/dropify.min.js"></script>
    <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script>

    <script src="{{URL::to('/public/admin')}}/plugins/styleswitcher/jQuery.style.switcher.js"></script>
