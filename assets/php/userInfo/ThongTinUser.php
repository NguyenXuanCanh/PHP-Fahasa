<div class="col-2 pt-3">
    <ul>
        <li>
            <label>
                Họ tên
            </label>
        </li>
        <li class="mt-3">
            <label>
                Số điện thoại
            </label>
        </li>
        <li class="mt-3">
            <label>
                Email
            </label>
        </li>
        <li class="mt-3">
            <label>
                Địa chỉ
            </label>
        </li>
    </ul>
</div>
<div class="col-5 pt-3">
    <form method="post" action="thongtinuser.php">
        <input type="text" name="name" value="<?php
                                                if ($row['ten']) {
                                                    echo ($row['ten']);
                                                } else {
                                                    echo "";
                                                } ?>" class="w-100">
        <input type="text" name="phone" value="<?php
                                                if ($row['soDienThoai']) {
                                                    echo ($row['soDienThoai']);
                                                } else {
                                                    echo "";
                                                } ?>" class="w-100 mt-3">
        <input type="text" name="email" value="<?php
                                                if ($row['email']) {
                                                    echo ($row['email']);
                                                } else {
                                                    echo "";
                                                } ?>" class="w-100 mt-3">
        <input type="text" name="address" value="<?php
                                                    if ($row['diaChi']) {
                                                        echo ($row['diaChi']);
                                                    } else {
                                                        echo "";
                                                    } ?>" class="w-100 mt-3">
        <!-- <input type="submit" class="view__more mt-3 btn" value="Lưu thay đổi"> -->
        <input type="button" data-toggle="modal" data-target="#exampleModal" class="btn mt-3 mb-3" value="Lưu thông tin" style="color: #fff !important;
    font-weight: bold;
    text-align: center;
    padding: 10px;
    border-radius: 25px;
    width: 220px;
    display: inline-block;
    background-image: linear-gradient(to right, #ff9800, #f7695d);">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top:25%">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Bạn có chắc muốn cập nhật chứ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- <div class="modal-body">
                        Bạn chắc chưaaaa?
                    </div> -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thôi để xem lại</button>
                        <button type="submit" name="submit" class="btn btn-primary" style="background: #f7941e !important;
    border: 1px solid #f7941e !important;
    color: #fff !important;">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>