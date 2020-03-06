<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href={{asset("css/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{asset("css/all.css")}}>

    <script src={{asset("js/bootstrap.min.js")}}></script>
    <script src={{asset("js/jquery.min.js")}}></script>
    <script src={{asset("js/popper.min.js")}}></script>


</head>

<body>

    <nav class="navbar navbar-expand-sm bg-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/candidates">Trang chủ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/candidates/create">Thêm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link 3</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Tên</th>
                    <th>Họ và chữ lót</th>
                    {{-- <th>Sinh nhật</th>--}}
                    <th>Giới tính</th>
                    <th>SĐT</th>
                    {{-- <th>Mật khẩu</th>--}}
                    {{-- <th>CMND</th>--}}
                    <th>Email</th>
                    <th>Ưu tiên</th>
                    <th>Dự tuyển</th>
                    {{-- <th>Trường THPT</th>--}}
                    {{-- <th>Tỉnh/Thành phố</th>--}}
                    {{-- <th>Quận/Huyện</th>--}}
                    {{-- <th>Xã/Phường</th>--}}
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @forelse($candidates as $candidates)
                <tr>
                    <td>{{$candidates->first_name}}</td>
                    <td>{{$candidates->last_name}}</td>
                    {{-- <td>{{$candidates->birthday}}</td>--}}
                    <td>{{$candidates->gender}}</td>
                    <td>{{$candidates->phone_number}}</td>
                    {{-- <td>{{$candidates->password}}</td>--}}
                    {{-- <td>{{$candidates->identify_number}}</td>--}}
                    <td>{{$candidates->email}}</td>
                    <td>{{$candidates->priority}}</td>
                    <td>{{$candidates->admission_form}}</td>
                    {{-- <td>{{$candidates->highschool_name}}</td>--}}
                    {{-- <td>{{$candidates->province}}</td>--}}
                    {{-- <td>{{$candidates->district}}</td>--}}
                    {{-- <td>{{$candidates->ward}}</td>--}}
                    <td>
                        <button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-success"><i class="fas fa-pencil-alt"></i></button>
                        <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                    </td>
                </tr>
                @empty
                <tr>
                    <td>Không có ứng viên nào</td>
                </tr>

                @endforelse
            </tbody>
        </table>
    </div>
    {{-- /.container--}}
</body>

</html>