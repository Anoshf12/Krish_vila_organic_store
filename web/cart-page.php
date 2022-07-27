<?php include('head.php'); ?>
<?php include('header.php'); ?>
 <div class="breadcrumb-area bg-image-3 ptb-150">
            <div class="container">
                <div class="breadcrumb-content text-center">
					<h3>CART PAGE</h3>
                </div>
            </div>
        </div>
        <div class="cart-main-area ptb-100">
            <div class="container">
                <h3 class="page-title">Your cart items</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Until Price</th>
                                            <th>Qty</th>
                                            <th>Subtotal</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        </tr>
                                        <tr>
                                        </tr>
                                        <tr>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-shiping-update-wrapper">
                                        <div class="cart-shiping-update">
                                            <a href="#">Continue Shopping</a>
                                        </div>
                                        <div class="cart-clear">
                                            <button>Update Shopping Cart</button>
                                            <a href="#">Clear Shopping Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="cart-tax">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gray">Estimate Shipping And Tax</h4>
                                    </div>
                                    <div class="tax-wrapper">
                                        <p>Enter your destination to get a shipping estimate.</p>
                                        <div class="tax-select-wrapper">
                                            <div class="tax-select">
                                                <label>
                                                    * City
                                                </label>
                                                <select class="email s-email s-wid">
                                                    <option>Colombo</option>
                                                    <option>Lindula</option>
                                                    <option>Bandaragama</option>
                                                    <option>Bandarawela</option>
                                                    <option>Moneragala</option>
                                                    <option>Horana</option>
                                                    <option>Nuwara eliya</option>
                                                </select>
                                            </div>
                                            <div class="tax-select">
                                                <label>
                                                    * District
                                                </label>
                                                <select class="email s-email s-wid">
                                                    <option>Colombo</option>
                                                    <option>Nuwara Eliya</option>
                                                    <option>Kalutara</option>
                                                    <option>Badulla</option>
                                                    <option>Moneragala</option>
                                                </select>
                                            </div>
                                            <div class="tax-select">
                                                <label>
                                                    * Zip/Postal Code
                                                </label>
                                                <input type="text">
                                            </div>
                                            <button class="cart-btn-2" type="submit">Get A Quote</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="discount-code-wrapper">
                                    <div class="title-wrap">
                                       <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4> 
                                    </div>
                                    <div class="discount-code">
                                        <p>Enter your coupon code if you have more than Rs.5000 Total price</p>
                                        <form>
                                            <input type="text" required="" name="name">
                                            <button class="cart-btn-2" type="submit">Apply Coupon</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="grand-totall">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                                    </div>
                                    <h5>Total products</h5> 
                                    <div class="total-shipping">
                                        <h5>Total shipping</h5>
                                        <ul>
                                            <li><input type="checkbox"> Standard <span>RS.100.00</span></li>
                                            <li><input type="checkbox"> Express <span>Rs.150.00</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="grand-totall-title">Grand Total</h4>  
                                    <a href="checkout.php">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include('footer.php'); ?>