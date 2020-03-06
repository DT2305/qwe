@extends('candidate.layouts.candidate-default')

@section('content')
<!-- Main content -->
<div class="content">
    <div class="container" id="content-submit">
        <form action="/candidates" method="post">
            <!-- Họ tên -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="last_name">Họ và chữ lót:</label>
                        <input type="text" class="form-control" placeholder="Nhập họ và chữ lót" name="last_name" value="123456">
                        @error('last_name')<p style="color: red">{{$message}}</p> @enderror
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first_name">Tên:</label>
                        <input type="text" class="form-control" placeholder="Nhập tên" name="first_name" value="123456">
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
                        <label>Ngày sinh:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-mask name="birthday">
                            @error('birthday')<p style="color: red">{{$message}}</p> @enderror
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="gender">Giới tính:</label>
                        <select class="custom-select" name="gender">
                            <option value="0" selected>Nam</option>
                            <option value="1">Nữ</option>
                        </select>
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Chứng mình nhân dân:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" data-inputmask='"mask": "999999999999"' data-mask name="identify_number" value="123456">
                            @error('identify_number')<p style="color: red">{{$message}}</p> @enderror
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Số điện thoại:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask name="phone_number" value="123456">
                            @error('phone_number')<p style="color: red">{{$message}}</p> @enderror
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->

            <!-- Đối tượng ưu tiên -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="priority">Đối tượng ưu tiên:</label>
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
                        <label for="admission_form">Hình thức xét tuyển:</label>
                        <select class="custom-select" name="admission_form">
                            <option disabled="disabled">Hình thức xét tuyển</option>
                            <option value="1">Đăng kí xét kết quả học bạ</option>
                            <option value="2" selected="selected">Xét kết quả thi trung học phổ thông quốc gia</option>
                            <option value="3">Đăng kí tuyển thẳng</option>
                            <option value="4">Đăng kí xét điểm thi năng lực của Đại học quốc gia Hồ Chí Minh</option>
                        </select>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Tên trường THPT:</label>
                        <input type="text" class="form-control" placeholder="Nhập tên trường THPT bạn đã học" name="highschool_name" value="123456">
                        @error('highSchool')<p style="color: red">{{$message}}</p> @enderror
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-4">
                    <!-- Tỉnh/Thành phố -->
                    <div class="form-group">
                        <label>Tỉnh/Thành phố:</label>
                        <select class="form-control select2bs4" style="width: 100%;" name="province" id="province">
                            <option>-- Chọn Tỉnh/Thành phố</option>
                            <option selected="selected">TP Cần Thơ</option>
                        </select>
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4">
                    <!-- Quận/Huyện -->
                    <div class="form-group">
                        <label>Quận/Huyện:</label>
                        <select class="form-control select2bs4" style="width: 100%;" name="district" id="district">
                            <option>-- Chọn Quận/Huyện</option>
                            <option selected="selected">Quận Ninh Kiều</option>
                        </select>
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4">
                    <!-- Tỉnh/Thành phố -->
                    <div class="form-group">
                        <label>Xã/Phường:</label>
                        <select class="form-control select2bs4" style="width: 100%;" name="ward" id="ward">
                            <option>-- Chọn Xã/Phường</option>
                            <option selected="selected">Phường An Lạc</option>
                        </select>
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->

            @csrf
            <div class="row">
                <button class="btn btn-primary">Đăng ký</button>
            </div>
        </form>

    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection