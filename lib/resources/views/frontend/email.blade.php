<div class="cart col-12" data-url="{{ asset('delete-cart') }}">
    <h4 class="mb-3">Thông tin thanh toán</h4>
    <div class="cart-table">
        <div id="wrap-inner">
            <div id="khach-hang">
                <h3>Thông tin khách hàng</h3>
                <p>
                    <span class="info">Khách hàng: </span>
                    {{$info['name']}}
                </p>
                <p>
                    <span class="info">Email: </span>
                    {{$info['email']}}
                </p>
                <p>
                    <span class="info">Điện thoại: </span>
                    {{$info['phone']}}
                </p>
                <p>
                    <span class="info">Địa chỉ: </span>
                    {{$info['add']}}
                </p>
            </div>						
            <div id="hoa-don">
                <h3>Hóa đơn mua hàng</h3>							
                <table class="table-bordered table-responsive">
                    <tbody><tr class="bold">
                        <td width="30%">Tên sản phẩm</td>
                        <td width="25%">Giá</td>
                        <td width="20%">Số lượng</td>
                        <td width="15%">Thành tiền</td>
                    </tr>
                    <tr>
                        <td>iPhone 5s 16GB gold</td>
                        <td class="price">4.000.000 VNĐ</td>
                        <td>1</td>
                        <td class="price">4.000.000 VNĐ</td>
                    </tr>
                    <tr>
                        <td>iPhone 6Plus 64GB grey</td>
                        <td class="price">8.500.000 VNĐ</td>
                        <td>2</td>
                        <td class="price">17.000.000VNĐ</td>
                    </tr>
                    <tr>
                        <td colspan="3">Tổng tiền:</td>
                        <td class="total-price">21.000.000VNĐ</td>
                    </tr>
                </tbody></table>
            </div>
            <div id="xac-nhan">
                <br>
                <p>
                    <b>Quý khách đã đặt hàng thành công!</b><br>
                    • Sản phẩm của Quý khách sẽ được chuyển đến Địa chỉ có trong phần Thông tin Khách hàng của chúng Tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này.<br>
                    • Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước khi giao hàng 24 tiếng.<br>
                    <b><br>Cám ơn Quý khách đã sử dụng Sản phẩm của Công ty chúng Tôi!</b>
                </p>
            </div>
        </div>
    </div> 
      
</div>

