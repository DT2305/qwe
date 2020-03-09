<!DOCTYPE html>
<html lang="vn">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Đăng ký ứng tuyển</title>

    @include('candidate.includes.head')
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
    @include('candidate.includes.navbar')
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @include('candidate.includes.content-head')

    @yield('content')
  </div>
  <!-- /.content-wrapper -->
    @include('candidate.includes.sidebar')
  <!-- Main Footer -->
</div>
<!-- ./wrapper -->
    @include('candidate.includes.foot')
</body>
</html>
