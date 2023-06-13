<?php
include "header.php";
include "slider.php";
?>
<section class="delivery" style="padding-left: 35px;">
    <div class="container">
        <div class="delivery-top-wrap">
            <div class="delivery-top">
                <div class="delivery-top-delivery delivery-top-item">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="delivery-top-adress delivery-top-item">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="delivery-top-payment delivery-top-item">
                    <i class="fas fa-money-check"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="delivery-content row">
            <div class="delivery-content-left">
                <p>Vui lòng chọn địa chỉ giao hàng</p>
                <div class="delivery-content-left-dangnhap row">
                    <i class="fas fa-sign-in-alt"></i>
                    <p>Đăng nhập(Nếu bạn đã có tài khoản IVY)</p>
                </div>
                <div class="delivery-content-left-khachle row">
                    <input checked name="loaikhach"  type="radio">
                    <p><span style="font-weight: bold;">Khách lẻ</span> (Nếu bạn muốn lưu lại thông tin)</p>
                </div>
                <div class="delivery-content-left-dangky row">
                    <input name="loaikhach"  type="radio">
                    <p><span style="font-weight: bold;">Đăng ký</span> (tạo mới tài khoản với thông tin bên dưới)</p>
                </div>
                <div class="delivery-content-left-input-top row">
                    <div class="delivery-content-left-input-top-item">
                        <label for="">họ tên<span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                    <div class="delivery-content-left-input-top-item">
                        <label for="">Điện thoại<span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                    <div class="delivery-content-left-input-top-item">
                        <label for="">Tỉnh/Tp<span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                    <div class="delivery-content-left-input-top-item">
                        <label for="">Quận/Huyện<span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                </div>
                <div class="delivery-content-left-input-bottom">
                    <label for="">Địa chỉ<span style="color: red;">*</span></label>
                        <input type="text">
                </div>
                <div class="delivery-content-left-button row">
                    <a href=""><span>&#171;</span><p>Quay lại giỏ hàng</p></a>
                    <a href="../phphtml/payment.php"><button><p style="font-weight: bold;">Thanh toán và giao hàng</p></button></a>
                </div>       
            </div>
            <div class="delivery-content-right">
                <table>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Giảm giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr>
                    <tr>
                        <td>Áo polo kẻ ngang MS 57E</td>
                        <td>- 30%</td>
                        <td>1</td>
                        <td><p>590.000 <sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td>Áo Nam kẻ ngang MS 57E</td>
                        <td>- 10%</td>
                        <td>1</td>
                        <td><p>690.000 <sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;" colspan="3">Tổng</td>
                        <td style="font-weight: bold;"><p>690.000 <sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;" colspan="3">Thuế VAT </td>
                        <td style="font-weight: bold;"><p>69.000 <sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;" colspan="3">Tổng tiền hàng </td>
                        <td style="font-weight: bold;"><p>759.000 <sup>đ</sup></p></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
<?php
include "bottom.php";
?>