<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact - RedStore</title>
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

    <!-- Contact Section -->
    <div class="small-container">
      <div class="row">
        <div class="col-2">
          <h1>Contact Us</h1>
          <p>
            We'd love to hear from you! If you have any questions, suggestions, or feedback, please don't
            hesitate to reach out to us.
          </p>
          <div>
            <span><i class="fa fa-home"></i></span>
            <span>123 Main Street, Cityville, State 12345</span>
          </div>
          <div>
            <span><i class="fa fa-phone"></i></span>
            <span>(123) 456-7890</span>
          </div>
          <div>
            <span><i class="fa fa-envelope-o"></i></span>
            <span>contact@redstore.com</span>
          </div>
          <div>
            <span><i class="fa fa-globe"></i></span>
            <span>www.redstore.com</span>
          </div>
        </div>
        <div class="col-2">
          <form>
            <input type="text" placeholder="Name" />
            <input type="email" placeholder="Email" />
            <input type="text" placeholder="Subject" />
            <textarea rows="8" placeholder="Message"></textarea>
            <button type="submit" class="btn">Submit</button>
          </form>
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
