<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About - RedStore</title>
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
    <x-layout></x-layout>

    <!-- About Section -->
    <div class="small-container">
      <div class="row">
        <div class="col-2">
          <img src="https://images.unsplash.com/photo-1577978924027-8657e5e9cfe3?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" width="80%" alt="" />
        </div>
        <div class="col-2">
          <h1>About Us</h1>
          <p>
            RedStore is a leading e-commerce platform that offers a wide range of high-quality products at
            competitive prices. Our mission is to provide our customers with a seamless shopping experience,
            exceptional customer service, and a vast selection of products to meet their diverse needs.
          </p>
          <p>
            With a team of dedicated professionals and a commitment to innovation, we strive to continuously
            improve our platform and offer the latest products and trends to our valued customers.
          </p>
          <a href="#" class="btn">Explore More &#8594;</a>
        </div>
      </div>
    </div>

    <x-footer></x-footer>

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
  </body>
</html>