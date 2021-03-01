<div class="cart col-12" data-url="{{ asset('delete-cart') }}">
    <h4 class="mb-3">Thông tin thanh toán</h4>
    <div class="cart-table">
        <table class="table bordered" data-url="{{ asset('update-cart') }}">
            <thead class="thead-orange">
              <tr>
                <th scope="col">Sản phẩm&nbsp;</th>
                <th scope="col">Đơn giá&nbsp;</th>
                <th scope="col">Số lượng&nbsp;</th>
                <th scope="col">Thành tiền&nbsp;</th>
                <th scope="col" class="text-center">Xóa</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $total = 0;
                @endphp
                @foreach($cart as $id => $item)
                
                
                <tr>
                    <td scope="row">
                        <div class="cart-box">
                            <img class="img-fluid"  style="width: 70px;" src="{{ asset('lib/storage/app/product/' . $item['img']) }}" alt="">                                
                            <span class="">{{$item['name']}}</span>
                        </div>
                    </td>
                    <td>{{ number_format($item['price'], 0, ',', '.') }}</td>
                    <td><input style="width: 70px;" type="number" class="form-control quantity" aria-label="Username" aria-describedby="basic-addon1" min="1" value="{{$item['quantity']}}" data-id="{{$id}}"></td>
                    <td class="font-weight-bold">{{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</td>
                    <td class=" text-center">
                        <a href=""><i data-id="{{$id}}" class="fa fa-times text-danger cart-delete"></i></a>
                    </td>
                </tr>
    
                @php
                    $total += $item['price'] * $item['quantity'];
                @endphp
    
                @endforeach
    
    
              <tr>
                <td colspan="5">
                    <div class="row">                                
                        <div class="col-md-4 col-12">
                            <table class="no-border">
                                <tr>
                                    <td>Tổng cộng:</td>
                                    <td class="font-weight-bold">{{ number_format($total, 0, ',', '.') }} VND</td>
                                </tr>
                                <tr>
                                    <td>Thuế VAT (10%):</td>
                                    <td class="font-weight-bold">{{ number_format($total * 0.1, 0, ',', '.') }} VND</td>
                                </tr>                                        
                                <tr>
                                    <td>Tổng thanh toán:</td>
                                    <td class="font-weight-bold text-danger">{{ number_format($total * 1.1, 0, ',', '.') }} VND</td>
                                </tr>
                                
                            </table>
                            
                        </div>
                    </div>
                </td>
              </tr>
            </tbody>
        </table>
    </div>   
    
    
    <div id="xac-nhan">
        <h4>Xác nhận mua hàng</h4>
        <form method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email address:</label>
                <input required="" type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="name">Họ và tên:</label>
                <input required="" type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại:</label>
                <input required="" type="number" class="form-control" id="phone" name="phone">
            </div>
            <div class="form-group">
                <label for="add">Địa chỉ:</label>
                <input required="" type="text" class="form-control" id="add" name="add">
            </div>
            <div class="form-group text-right">
                <button type="submit" class="btn btn-primary">Thực hiện đơn hàng</button>
            </div>
        </form>
    </div>
      
</div>

