<div id="loginZone" class="login__zone d-none">
    <div class="row">
        <div class="col-4">
        </div>
        <div class="col-4">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item bg-white text-center" style="width: 50%; border-radius:5px 0 0 0 ">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="Đăng nhập" aria-selected="true">Đăng nhập</a>
                </li>
                <li class="nav-item bg-white text-center" style="width: 50%;border-radius:0 5px 0 0">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="Đăng ký" aria-selected="false">Đăng ký</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div id="loginForm">
                <div class="row">
                    <div class="col-4">
                    </div>
                    <div class="col-4">
                        <div class="login-wrap p-4 p-md-5" style="border-radius:0 0 5px 5px">
                            <form action="xuly.php?do=dangnhap" name="dangnhap" class="login-form" method="post">
                                <div class="form-group">
                                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                                    <input type="text" class="form-control rounded-left" placeholder="Username" name="txtUsername" required="">
                                </div>
                                <div class="form-group">
                                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                                    <input type="password" class="form-control rounded-left" placeholder="Password" name="txtPassword" required="">
                                </div>
                                <div class="form-group d-flex align-items-center">
                                    <div class="w-100">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Lưu mật khẩu
                                            <input type="checkbox" checked="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>


                                </div>
                                <div class="form-group d-flex align-items-center row">
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <div class=" d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary rounded submit">Đăng nhập</button>
                                        </div>

                                    </div>
                                    <div class="col-4">
                                        <div class=" d-flex justify-content-end closeLogin">
                                            <button type="button" class="btn rounded submit">Bỏ qua</button>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group mt-4">
                                    <div class="w-100 text-center">
                                        <!-- <p class="mb-1">Bạn chưa có tài khoản? <a href="#">Đăng ký ngay</a></p> -->
                                        <span><a href="#">Quên mật khẩu</a></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div id="loginForm">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <div class="login-wrap p-4 p-md-5" style="border-radius:0 0 5px 5px">
                            <form action="xuly.php?do=dangky" name="dangky" class="login-form" method="post">
                                <div class="form-group">
                                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                                    <input type="text" class="form-control rounded-left" placeholder="Tài khoản" name="txtUsername" id="txtUsername" required="">
                                </div>
                                <div class="form-group">
                                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                                    <input type="password" class="form-control rounded-left" placeholder="Mật khẩu" name="txtPassword" id="txtPassword" required="">
                                </div>
                                <div class="form-group">
                                    <div class="icon d-flex align-items-center justify-content-center"><span class="fas fa-envelope"></span></div>
                                    <input type="email" class="form-control rounded-left" placeholder="Email" name="txtEmail" id="txtEmail" required="">
                                </div>

                                <div class="form-group d-flex align-items-center">
                                    <div class="w-100">
                                        <!-- <label class="checkbox-wrap checkbox-primary mb-0">Lưu mật khẩu
                                            <input type="checkbox" checked="">
                                            <span class="checkmark"></span>
                                        </label> -->
                                    </div>
                                    <div class="w-100 d-flex justify-content-end">
                                        <input type="submit" class="btn btn-primary rounded submit" value="Đăng ký ngay" />
                                    </div>
                                    <div class="w-100 d-flex justify-content-end">
                                        <button type="button" class="btn rounded submit closeLogin">Bỏ qua</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
// session_start();


?>