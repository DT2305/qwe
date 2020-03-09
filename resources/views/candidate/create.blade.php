@extends('candidate.layouts.candidate-default')

@section('content')
<!-- Main content -->
<div class="content">
    <div class="container" id="content-submit">
        <!-- @if(count($errors) > 0)
                <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div>
                @endif -->

        <form action="/candidates" method="post">
            <h2><strong>Thông tin cá nhân:</strong></h2>
            <!-- Họ tên -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="required" for="last_name">Họ và chữ lót:</label>
                        <input type="text" class="form-control" placeholder="Nhập họ và chữ lót" name="last_name" autocomplete="off" value="{{old('last_name')}}">
                        @error('last_name')<p style="color: red">{{$message}}</p> @enderror
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="required" for="first_name">Tên:</label>
                        <input type="text" class="form-control" placeholder="Nhập tên" name="first_name" autocomplete="off" value="{{old('first_name')}}">
                        @error('first_name')<p style="color: red">{{$message}}</p> @enderror
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="required">Ngày sinh:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-mask name="birthday" value="{{old('birthday')}}">
                            
                        </div>
                        <!-- /.input group -->
                        @error('birthday')<p style="color: red">{{$message}}</p> @enderror
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="required" for="gender">Giới tính:</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio1" name="gender" value="Nam" checked>
                            <label for="customRadio1" class="custom-control-label">Nam</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio2" name="gender" value="Nữ">
                            <label for="customRadio2" class="custom-control-label">Nữ</label>
                        </div>
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="required">Chứng minh nhân dân:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" data-inputmask='"mask": "999999999999"'  data-mask name="identify_number" autocomplete="off" value="{{old('identify_number')}}">

                        </div>
                        <!-- /.input group -->
                        @error('identify_number')<p style="color: red">{{$message}}</p> @enderror
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-6">

                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->

            <br>
            <h2><strong>Thông tin liên hệ & đăng nhập:</strong></h2>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="required">Số điện thoại:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="text" class="form-control" data-inputmask='"mask": "9999999999"' data-mask name="phone_number" autocomplete="off" value="{{old('phone_number')}}">
                            
                        </div>
                        <!-- /.input group -->
                        @error('phone_number')<p style="color: red">{{$message}}</p> @enderror
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-6">
                <div class="form-group">
                        <br>
                        <strong>Chú ý:</strong><p>Số điện thoại sẽ được dùng làm tên đăng nhập</p>
                        
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="required" for="email">Email:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off" value="{{old('email')}}">

                        </div>
                        @error('email')<p style="color: red">{{$message}}</p> @enderror
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label class="required" for="password">Mật khẩu:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu" value="{{old('password')}}">

                        </div>
                        @error('password')<p style="color: red">{{$message}}</p> @enderror
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-6">
                <div class="form-group">
                    <label class="required" for="password_confirmation">Xác nhận mật khẩu:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Nhập lại mật khẩu" value="{{old('password_confirmation')}}">

                        </div>
                        
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->

            <br>
            <h2><strong>Thông tin xét tuyển:</strong></h2>

            <!-- Đối tượng ưu tiên -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="required" for="priority">Đối tượng ưu tiên:</label>
                        <select class="custom-select" name="priority">
                            <option value="0" selected="selected">Không có</option>
                            <option value="1">Đối tượng 1</option>
                            <option value="2">Đối tượng 2</option>
                            <option value="3">Đối tượng 3</option>
                            <option value="4">Đối tượng 4</option>
                            <option value="5">Đối tượng 5</option>
                            <option value="6">Đối tượng 6</option>
                            <option value="7">Đối tượng 7</option>
                        </select>
                        @error('priority')<p style="color: red">{{$message}}</p> @enderror
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="form-group">
                        <br>
                        <strong>Để biết rõ hơn về các đối tượng ưu tiên, các bạn có thể truy cập </strong>
                        <a href="http://tuyensinhvnuk.edu.vn/doi-tuong-uu-tien/" target="_blank">Tại đây!</a>
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="required" for="admission">Hình thức xét tuyển:</label>
                        <select class="custom-select" name="admission">
                            <option disabled="disabled">Hình thức xét tuyển</option>
                            <option value="Đăng kí xét kết quả học bạ">Đăng kí xét kết quả học bạ</option>
                            <option value="Xét kết quả thi trung học phổ thông quốc gia" selected="selected">Xét kết quả thi trung học phổ thông quốc gia</option>
                            <option value="Đăng kí tuyển thẳng">Đăng kí tuyển thẳng</option>
                            <option value="Đăng kí xét điểm thi năng lực của Đại học quốc gia Hồ Chí Minh">Đăng kí xét điểm thi năng lực của Đại học quốc gia Hồ Chí Minh</option>
                        </select>
                        @error('admission')<p style="color: red">{{$message}}</p> @enderror
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="required" for="">Tên trường THPT:</label>
                        <input type="text" class="form-control" placeholder="Nhập tên trường THPT bạn đã học" name="highschool_name" autocomplete="off"  value="{{old('highschool_name')}}">
                        @error('highschool_name')<p style="color: red">{{$message}}</p> @enderror
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-4">
                    <!-- Tỉnh/Thành phố -->
                    <div class="form-group">
                        <label class="required">Tỉnh/Thành phố:</label>
                        <select class="form-control select2bs4" style="width: 100%;" name="province" id="province">
                            <option>-- Chọn Tỉnh/Thành phố</option>
                            <option selected="selected">TP Cần Thơ</option>
                        </select>
                        @error('province')<p style="color: red">{{$message}}</p> @enderror
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4">
                    <!-- Quận/Huyện -->
                    <div class="form-group">
                        <label class="required">Quận/Huyện:</label>
                        <select class="form-control select2bs4" style="width: 100%;" name="district" id="district">
                            <option>-- Chọn Quận/Huyện</option>
                            <option selected="selected">Quận Ninh Kiều</option>
                        </select>
                        @error('district')<p style="color: red">{{$message}}</p> @enderror
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4">
                    <!-- Tỉnh/Thành phố -->
                    <div class="form-group">
                        <label class="required">Xã/Phường:</label>
                        <select class="form-control select2bs4" style="width: 100%;" name="ward" id="ward">
                            <option>-- Chọn Xã/Phường</option>
                            <option selected="selected">Phường An Lạc</option>
                        </select>
                        @error('ward')<p style="color: red">{{$message}}</p> @enderror
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->

            @csrf
            <div class="row mt-3 ">
                <button class="btn-lg btn-primary mx-auto"><strong>Đăng ký</strong></button>
            </div>
        </form>

    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection