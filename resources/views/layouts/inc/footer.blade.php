


  <!-- Control Sidebar -->
   <!-- Scripts -->

    <!--   Core JS Files   -->
    <script src="{{ asset('admin/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/jquery-ui.min.js') }}" defer></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script> -->
    <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/Chart.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/sparkline.js') }}" defer></script>
    <script src="{{ asset('admin/js/jquery.knob.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/moment.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/daterangepicker.js') }}" defer></script>
    <script src="{{ asset('admin/js/tempusdominus-bootstrap-4.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/summernote-bs4.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/jquery.overlayScrollbars.min.js') }}" defer></script>
    <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



<!-- AdminLTE App -->
<script src="{{ asset('admin/js/dist/js/adminlte.js') }}" defer></script>
<script src="{{ asset('admin/js/custom.js') }}" defer></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin/js/dist/js/demo.js') }}" defer></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('admin/js/dist/js/pages/dashboard.js') }}" defer></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session('status'))
<script>
swal("{{session('status')}}", "You clicked the button!", "success");
</script>
@endif
</body>
</html>







