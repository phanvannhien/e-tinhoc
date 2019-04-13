</div>
<!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="{{ url('admin/bower_components/jquery/dist/jquery.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ url('admin/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ url('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Select2 -->
    <script src="{{ url('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
    <!-- InputMask -->
    <script src="{{ url('admin/plugins/input-mask/jquery.inputmask.js')}}"></script>
    <script src="{{ url('admin/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
    <script src="{{ url('admin/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>

    <!-- date-range-picker -->
    <script src="{{ url('admin/bower_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ url('admin/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!-- bootstrap datepicker -->
    <script src="{{ url('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>

    <!-- bootstrap color picker -->
    <script src="{{ url('admin/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>

    <!-- bootstrap time picker -->
    <script src="{{ url('admin/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>

    <!-- SlimScroll -->
    <script src="{{ url('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>

    <!-- iCheck 1.0.1 -->
    <script src="{{ url('admin/plugins/iCheck/icheck.min.js') }}"></script>

    <!-- FastClick -->
    <script src="{{ url('admin/bower_components/fastclick/lib/fastclick.js') }}"></script>

    <!-- Sweet alert -->
    <script src="{{ url('admin/plugins/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Editor -->
    <script src="{{ url('admin/bower_components/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ url('admin/bower_components/ckeditor/adapters/jquery.js') }}"></script>

 
    <!-- Slimscroll -->
    <script src="{{ url('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ url('admin/bower_components/select2/dist/js/select2.full.min.js') }}"></script>


    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <!-- AdminLTE App -->
    <script src="{{ url('admin/dist/js/adminlte.min.js')}}"></script>

    <script src="{{ url('admin/dist/js/custom.js')}}"></script>
    <script src="{{ url('admin/plugins/fontawesome-picker/js/fontawesome-iconpicker.js')}}"></script>

    <script>
        var token = document.head.querySelector('meta[name="csrf-token"]');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': token.content
            }
        });
    </script>

    @yield('footer')
    <div class="modal fade" id="app-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</body>
</html>
