<!-- Single Product Details -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Details - RedStore</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
  <x-layout>
    
  </x-layout>
    <!-- Single Product Details -->

    <div class="small-container single-product">
      <div class="row">
        <div class="col-2">
          <img src="https://i.ibb.co/47Sk9QL/product-1.jpg" alt="" width="100%" id="ProductImg" />

          <div class="small-img-row">
            <div class="small-img-col">
              <img src="https://i.ibb.co/47Sk9QL/product-1.jpg" alt="" class="small-img" />
            </div>
            <div class="small-img-col">
              <img src="https://i.ibb.co/b7ZVzYr/product-2.jpg" alt="" class="small-img" />
            </div>
            <div class="small-img-col">
              <img src="https://i.ibb.co/KsMVr26/product-3.jpg" alt="" class="small-img" />
            </div>
            <div class="small-img-col">
              <img src="https://i.ibb.co/0cMfpcr/product-4.jpg" alt="" class="small-img" />
            </div>
          </div>
        </div>
        <div class="col-2">
          <p>Home / T-Shirt</p>
          <h1>Red Printed T-Shirt by HRX</h1>
          <h4>IDR 50000.00</h4>
          <select>
            <option>Select Size</option>
            <option>XXL</option>
            <option>XL</option>
            <option>Large</option>
            <option>Medium</option>
            <option>Small</option>
          </select>
          <input type="number" value="1" />
          <a href="" class="btn">Add To Cart</a>

          <h3>Product Details <i class="fa fa-indent"></i></h3>
          <br />
          <p>
            Give your summer wardrobe a style upgrade with the HRX Men's Active T-shirt. Team it with a pair of
            shorts for your morning workout or a pair of jeans for an evening out with the guys.
          </p>
        </div>
      </div>
    </div>

    

    <!-- JavaScript for Toggle Menu -->
    <script>
      var MenuItems = document.getElementById("MenuItems");

      MenuItems.style.maxHeight = "0px";

      function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
          MenuItems.style.maxHeight = "200px";
        } else {
          MenuItems.style.maxHeight = "0px";
        }
      }
    </script>

    <!-- JavaScript for Product Gallery -->
    <script>
      var ProductImg = document.getElementById("ProductImg");
      var SmallImg = document.getElementsByClassName("small-img");

      SmallImg[0].onclick = function () {
        ProductImg.src = SmallImg[0].src;
      };
      SmallImg[1].onclick = function () {
        ProductImg.src = SmallImg[1].src;
      };
      SmallImg[2].onclick = function () {
        ProductImg.src = SmallImg[2].src;
      };
      SmallImg[3].onclick = function () {
        ProductImg.src = SmallImg[3].src;
      };
    </script>
  </body>

  <x-footer></x-footer>
</html>