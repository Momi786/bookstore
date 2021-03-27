<?php
    include '../include/header.php';
?>
    <section>
    <div>
        <div class="container">
            <h1>Shoping Cart</h1>
        </div>

    </div>

    </section>

    <div class="container">

    

<section class="mt-5">
<div class="shopping-cart">

<div class="column-labels">
  <label class="product-image">Image</label>
  <label class="product-details">Product</label>
  <label class="product-price">Price</label>
  <label class="product-quantity">Quantity</label>
  <label class="product-removal">Remove</label>
  <label class="product-line-price">Total</label>
</div>

<div class="product">
  <div class="product-image">
    <img src="../img/book.jpg" class="img-fluid w-100 h-100 mr-3">
  </div>
  <div class="product-details">
    <div class="product-title">book</div>
    <p class="product-description">The best Book</p>
  </div>
  <div class="product-price">12.99</div>
  <div class="product-quantity">
    <input type="number" class="border-0" value="2" min="1">
  </div>
  <div class="product-removal">
    <button class="remove-product">
      Remove
    </button>
  </div>
  <div class="product-line-price">25.98</div>
</div>



<div class="totals">
  <div class="totals-item">
    <label>Subtotal</label>
    <div class="totals-value" id="cart-subtotal">71.97</div>
  </div>
  <div class="totals-item">
    <label>Tax (5%)</label>
    <div class="totals-value" id="cart-tax">3.60</div>
  </div>
  <div class="totals-item">
    <label>Shipping</label>
    <div class="totals-value" id="cart-shipping">15.00</div>
  </div>
  <div class="totals-item totals-item-total">
    <label>Grand Total</label>
    <div class="totals-value" id="cart-total">90.57</div>
  </div>
</div>
    
    <button class="checkout">Checkout</button>

</div>


</section>


<?php
    include '../include/footer.php';
?>

<script>
   
</script>