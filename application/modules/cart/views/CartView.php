<?php include 'application/views/layouts/head.php';?>
</head>
    <body>
        <div class="container">
          <div class="row">
            <div class="col-8">
                <p class="text-start fs-3 fw-bold">
                  Shopping Cart
                </p>
            </div>
            <div class="col-4">
                <p class="text-start fs-3 fw-bold">
                  Order Summary
                </p>
            </div>
            <div class="col-8">
                <div class="row me-5">
                  <!-- CART-1-PRODUCT -->
                  <div class="card rounded-0 border border-none">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-6 m-0 p-0 text-center">
                          <img src="<?php echo base_url('public/images/cart-1.png');?>" alt="" height="500px;" width="80%;">
                        </div>
                        <div class="col-6">
                          <div class="row">
                            <div class="col-9 text-start">
                              <p class="h2 text-danger fw-semibold text-uppercase">Pluckerman Rock 400</p>
                            </div>
                            <div class="col-3 text-center">
                              <a href="" class="btn btn-md btn-danger text-uppercase">Remove</a>
                            </div>
                          </div>
                          <br>
                          <p class="h4 text-muted">Details</p>
                          <p class="h5 fw-light">Guitar combines exceptional craftsmanship, versatile sound, and timeless elegance, making it the ultimate instrument for musicians seeking unparalleled performance and style.</p>
                          <br>
                          <ul>
                            <li>1 Year Warranty</li>
                            <li>Free Plectrums</li>
                            <li>Free Extra Strings</li>
                          </ul>
                          <br>
                          <div class="row">
                            <div class="col-6">
                              <p class="h4 text-muted">₱26,399.00</p>
                            </div>
                            <div class="col-6">
                              <div class="input-group">
                                <button class="btn btn-outline-secondary" type="button"><i class="bi bi-dash text-dark"></i></button>
                                <input type="number" class="form-control border border-secondary" value="1">
                                <button class="btn btn-outline-secondary fw-bold" type="button"><i class="bi bi-plus text-dark"></i></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- CART-2-PRODUCT -->
                  <div class="card rounded-0 border border-none">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-6 m-0 p-0 text-center">
                          <img src="<?php echo base_url('public/images/cart-2.png');?>" alt="" height="500px;" width="70%;">
                        </div>
                        <div class="col-6">
                          <div class="row">
                            <div class="col-9 text-start">
                              <p class="h2 text-danger fw-semibold text-uppercase">Plucker A33</p>
                            </div>
                            <div class="col-3 text-center">
                              <a href="" class="btn btn-md btn-danger text-uppercase">Remove</a>
                            </div>
                          </div>
                          <br>
                          <p class="h4 text-muted">Details</p>
                          <p class="h5 fw-light">Guitar combines exceptional craftsmanship, versatile sound, and timeless elegance, making it the ultimate instrument for musicians seeking unparalleled performance and style.</p>
                          <br>
                          <ul>
                            <li>1 Year Warranty</li>
                            <li>Free Plectrums</li>
                            <li>Free Extra Strings</li>
                          </ul>
                          <br>
                          <div class="row">
                            <div class="col-6">
                              <p class="h4 text-muted">₱17,899.00</p>
                            </div>
                            <div class="col-6">
                              <div class="input-group">
                                <button class="btn btn-outline-secondary" type="button"><i class="bi bi-dash text-dark"></i></button>
                                <input type="number" class="form-control border border-secondary" value="1">
                                <button class="btn btn-outline-secondary fw-bold" type="button"><i class="bi bi-plus text-dark"></i></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- CART-3-PRODUCT -->
                  <div class="card rounded-0 border border-none">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-6 m-0 p-0 text-center">
                          <img src="<?php echo base_url('public/images/cart-3.png');?>" alt="" height="500px;" width="70%;">
                        </div>
                        <div class="col-6">
                          <div class="row">
                            <div class="col-9 text-start">
                              <p class="h2 text-danger fw-semibold text-uppercase">Plucker Rock 61</p>
                            </div>
                            <div class="col-3 text-center">
                              <a href="" class="btn btn-md btn-danger text-uppercase">Remove</a>
                            </div>
                          </div>
                          <br>
                          <p class="h4 text-muted">Details</p>
                          <p class="h5 fw-light">Guitar combines exceptional craftsmanship, versatile sound, and timeless elegance, making it the ultimate instrument for musicians seeking unparalleled performance and style.</p>
                          <br>
                          <ul>
                            <li>1 Year Warranty</li>
                            <li>Free Plectrums</li>
                            <li>Free Extra Strings</li>
                          </ul>
                          <br>
                          <div class="row">
                            <div class="col-6">
                              <p class="h4 text-muted">₱21,999.00</p>
                            </div>
                            <div class="col-6">
                              <div class="input-group">
                                <button class="btn btn-outline-secondary" type="button"><i class="bi bi-dash text-dark"></i></button>
                                <input type="number" class="form-control border border-secondary" value="1">
                                <button class="btn btn-outline-secondary fw-bold" type="button"><i class="bi bi-plus text-dark"></i></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-4">
              <table class="table">
                <tbody>
                  <tr>
                    <th scope="row fw-light">Items</th>
                    <td class="text-end">3</td>
                  </tr>
                  <tr>
                    <th scope="row">Item Subtotal</th>
                    <td class="text-end">₱66,297.00</td>
                  </tr>
                  <tr>
                    <th scope="row">Shipping Subtotal</th>
                    <td class="text-end">Free</td>
                  </tr>
                  <tr>
                    <th scope="row"><input type="text" class="form-control border border-secondary" placeholder="Address" aria-label="Address"></th>
                    <td class="text-end"><input type="text" class="form-control border border-secondary" placeholder="Coupons" aria-label="Coupons"></td>
                  </tr>
                  <tr>
                    <th scope="row">Discount</th>
                    <td class="text-end">₱1,299.00</td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <th scope="row">Total</th>
                    <td class="text-end fw-bold">₱64,998.00</td>
                  </tr>
                </tfoot>
              </table>
              <div class="row">
                <a href="" class="btn btn-success btn-lg">Checkout</a>
              </div>
            </div>
          </div>
        </div>
<?php include 'application/views/layouts/foot.php';?>