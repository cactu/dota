<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$title}}</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('admin/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/AdminLTE/bower_components/Ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/AdminLTE/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/AdminLTE/dist/css/skins/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/AdminLTE/bower_components/morris.js/morris.css')}}">
    <link rel="stylesheet"
          href="{{asset('admin/AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('admin/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('admin/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include('admin.layouts.header')

    @include('admin.layouts.left')

    @include('admin.layouts.main')

    @include('admin.layouts.footer')

    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>

<script src="{{asset('admin/AdminLTE/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('admin/AdminLTE/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="{{asset('admin/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/AdminLTE/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('admin/AdminLTE/bower_components/morris.js/morris.min.js')}}"></script>
<script src="{{asset('admin/AdminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('admin/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('admin/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('admin/AdminLTE/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<script src="{{asset('admin/AdminLTE/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('admin/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('admin/AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('admin/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{asset('admin/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('admin/AdminLTE/bower_components/fastclick/lib/fastclick.js')}}"></script>
<script src="{{asset('admin/AdminLTE/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('admin/AdminLTE/dist/js/pages/dashboard.js')}}"></script>
<script src="{{asset('admin/AdminLTE/dist/js/demo.js')}}"></script>
</body>
</html>
