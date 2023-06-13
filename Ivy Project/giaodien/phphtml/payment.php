<?php
include "header.php";
include "slider.php";
?>
<Section class="payment">
    <div class="container">
        <div class="payment-top-wrap">
            <div class="payment-top">
                <div class="payment-top-delivery payment-top-item">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="payment-top-adress payment-top-item">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="payment-top-payment payment-top-item">
                    <i class="fas fa-money-check"></i>
                </div>
            </div>
        </div> 
    </div>
    <div class="container" style="padding-left: 45px;">
        <div class="payment-content row">
            <div class="payment-content-left">
                <div class="payment-content-left-method-delivery">
                    <p style="font-weight: bold;">Phương thức giao hàng</p>
                    <div class="payment-content-left-method-delivery-item">
                        <input checked type="radio">
                        <label for="">Giao hàng chuyển phát nhanh</label>
                    </div>
                </div>
                <div class="payment-content-left-method-payment">
                    <p style="font-weight: bold;">Phương thức thanh toán</p> <br>
                    <p>Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ tín dụng sẽ không bao giờ được lưu lại.</p>
                    <div class="payment-content-left-method-payment-item">
                        <input name="method-payment" type="radio">
                        <label for="">Thanh toán bằng thẻ tín dụng(Onepay)</label>
                    </div>
                    <div class="payment-content-left-method-payment-item-img">
                        <img src="images/visa.png" alt="">
                    </div>
                    <div class="payment-content-left-method-payment-item">
                        <input checked name="method-payment" type="radio">
                        <label for="">Thanh toán bằng thẻ ATM(Onepay)</label>
                    </div>
                    <div class="payment-content-left-method-payment-item-img">
                        <img src="images/visa.png" alt="">
                    </div>
                    <div class="payment-content-left-method-payment-item">
                        <input name="method-payment" type="radio">
                        <label for="">Thanh toán Momo</label>
                    </div>
                    <div class="payment-content-left-method-payment-item-img">
                        <img src="images/visa.png" alt="">
                    </div>
                    <div class="payment-content-left-method-payment-item">
                        <input name="method-payment" type="radio">
                        <label for="">Thu tiền tận nơi</label>
                    </div>
                </div>
            </div>
            <div class="payment-content-right">
                <div class="payment-content-right-button">
                    <input type="text" placeholder="Mã giảm giá/ quà tặng">
                    <button><i class="fas fa-check"></i></button>
                </div>
                <div class="payment-content-right-button">
                    <input type="text" placeholder="Mã cộng tác viên">
                    <button><i class="fas fa-check"></i></button>
                </div>
                <div class="payment-content-right-mnv">
                    <select name="" id="">
                        <option value="">chọn mã nhân viên thân thiết</option>
                        <option value="">A345</option>
                        <option value="">B345</option>
                        <option value="">C345</option>
                        <option value="">D345</option>
                        <option value="">E345</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="payment-content-right-payment">
            <button>Tiếp tục thanh toán</button>
        </div>
    </div>
</Section>
<?php
include "bottom.php";
?>