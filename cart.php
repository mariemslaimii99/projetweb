<?php
include "inc/header.php";
?>

        <div class="container cart-container">
            <div class="row">
                <div class="col-md-12 col-sm-12 ol-lg-12">
                    <form action="#">
                        <div class="table-content wnro__table table-responsive">
                            <table>
                                <thead>
                                <tr class="title-top">
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img src="img/prods/1.jpg" width="80px" alt="product img"></a></td>
                                    <td class="product-name"><a href="#">Natoque penatibus</a></td>
                                    <td class="product-price"><span class="amount">165.00 TND</span></td>
                                    <td class="product-quantity"><input type="number" value="1"></td>
                                    <td class="product-subtotal">165.00 TND  </td>
                                    <td class="product-remove"><a href="#">X</a></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img src="img/prods/1.jpg" width="80px" alt="product img"></a></td>
                                    <td class="product-name"><a href="#">Quisque fringilla</a></td>
                                    <td class="product-price"><span class="amount">50.00 TND</span></td>
                                    <td class="product-quantity"><input type="number" value="1"></td>
                                    <td class="product-subtotal">50.00 TND</td>
                                    <td class="product-remove"><a href="#">X</a></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img src="img/prods/1.jpg" width="80px" alt="product img"></a></td>
                                    <td class="product-name"><a href="#">Vestibulum suscipit</a></td>
                                    <td class="product-price"><span class="amount">50.00 TND</span></td>
                                    <td class="product-quantity"><input type="number" value="1"></td>
                                    <td class="product-subtotal">50.00 TND</td>
                                    <td class="product-remove"><a href="#">X</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                    <div class="cartbox__btn">
                        <ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                            <li><a href="#">Coupon Code</a></li>
                            <li><a href="#">Apply Code</a></li>
                            <li><a href="#">Update Cart</a></li>
                            <li><a href="#">Check Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="cartbox__total__area">
                        <div class="cartbox-total d-flex justify-content-between">
                            <ul class="cart__total__list">
                                <li>Cart total</li>
                                <li>Sub Total</li>
                            </ul>
                            <ul class="cart__total__tk">
                                <li>70 TND</li>
                                <li>70 TND</li>
                            </ul>
                        </div>
                        <div class="cart__total__amount">
                            <span>Grand Total</span>
                            <span>140 TND</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
include "inc/footer.php";
?>