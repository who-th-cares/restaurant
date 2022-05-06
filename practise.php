<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
  <div class="header">
    <div class="nav">
        <ul>
        
        <li style="float:right"><a href="#Contact">Contact us</a> </li>  
        <li style="float:right"><a href="#menu"> Menu</a></li>
        <li style="float:right"><a href="#outlet"> Outlet</a></li>
        <li style="float:right"><a href="#home"> Home</a></li>
        <li style="float:right"><a href="/staff2.html"> Login</a></li>

        </ul>
    </div>
</div>
    <div class="home" id="home">
        <img src="assets/home4.jpg" alt="main_image">
        <div class="text">
            THE <br> BAR-B-Q<a href="#Contact">
            <div class="button">
              Reserve now
            </div></a>
        </div>
    </div>
    <div class="About-us">
      <h1>About us</h1>
      <br><h3>
        "It's like nothing else you've ever tasted before."
      </h3>
      <h1>Outlet</h1>
    </div>

    <div class="outlet" id="outlet"> 
     
      <div class="Card">
        <h1>Kolkata</h1>
        <h3>Mother Teresa Sarani, Taltala Kolkata,
          West Bengal
          700016</h3>
      </div>
      <div class="Card">
        <h1>Bangaluru</h1>
        <h3>
          7th floor, 34a, Church St Shanthi Nagar, Ashok Nagar Bengaluru, Karnataka 560001
          </h3>
      </div>
    </div>
    <div id="overlay" onclick="off()">
      <div id="text" >Overlay Text hahaha</div>
    </div>
    <div class="menu" id="menu">  
   
        <div class="logo_menu clicker">
            <img src="/assets/menu.png" alt="" onclick="show()">
    </div> 
    <div id="hiddendiv">
        <div class="container">
            <div class="card">
              <div class="imgBx">
                <img src="/assets/dish.png">
              </div>
              <div class="contentBx">
                <h2>Main Course</h2>
                <div class="size">
                  <h3>Book for:</h3>
                  <span>1</span>
                  <span>2</span>
                  <span>3</span>
                  <span>4</span>
                </div>
                <br>
                <a onclick="on()">Show</a>
              </div>
            </div>
            <div class="card">
                <div class="imgBx">
                  <img src="/assets/dish2.png">
                </div>
                <div class="contentBx">
                  <h2>Rice</h2>
                  <div class="size">
                    <h3>Book for:</h3>
                    <span>1</span>
                    <span>2</span>
                    <span>3</span>
                    <span>4</span>
                  </div>
                  <br>
                  <a onclick="on()">Show Now</a>
                </div>
              </div>
              <div class="card">
                <div class="imgBx">
                  <img src="/assets/dish3.png">
                </div>
                <div class="contentBx">
                  <h2>Starters</h2>
                  <div class="size">
                    <h3>Book for:</h3>
                    <span>1</span>
                    <span>2</span>
                    <span>3</span>
                    <span>4</span>
                  </div>
                  <br>
                  <a onclick="on()">Show Now</a>
                </div>
              </div>
          </div>
          <div class="container">
            <div class="card">
              <div class="imgBx">
                <img src="/assets/noodle2 1.png">
              </div>
              <div class="contentBx">
                <h2>Noodles</h2>
                <div class="size">
                  <h3>Book for:</h3>
                  <span>1</span>
                  <span>2</span>
                  <span>3</span>
                  <span>4</span>
                </div>
                <br>
                <a onclick="on()">Show</a>
              </div>
            </div>
            <div class="card">
                <div class="imgBx">
                  <img src="/assets/soup 1.png">
                </div>
                <div class="contentBx">
                  <h2>Soups</h2>
                  <div class="size">
                    <h3>Book for:</h3>
                    <span>1</span>
                    <span>2</span>
                    <span>3</span>
                    <span>4</span>
                  </div>
                  <br>
                  <a onclick="on()">Show Now</a>
                </div>
              </div>
              <div class="card">
                <div class="imgBx">
                  <img src="/assets/Frame 2.png">
                </div>
                <div class="contentBx">
                  <h2>Desserts</h2>
                  <div class="size">
                    <h3>Book for:</h3>
                    <span>1</span>
                    <span>2</span>
                    <span>3</span>
                    <span>4</span>
                  </div>
                  <br>
                  <a onclick="on()">Show Now</a>
                </div>
              </div>
          </div>
           <div class="container">
            <div class="card">
              <div class="imgBx">
                <img src="/assets/Frame 1.png">
              </div>
              <div class="contentBx">
                <h2>Beverages</h2>
                <div class="size">
                  <h3>Book for:</h3>
                  <span>1</span>
                  <span>2</span>
                  <span>3</span>
                  <span>4</span>
                </div>
                <br>
                <a onclick="on()">Show</a>
              </div>
            </div>
           
          </div>
          
    </div> 

    <div class="Feedback">
      <form id="complain" action="" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder=" Enter Your Name"><br><br>
    
        <label for="email">Email address</label>
        <input type="email" name="email" id="email" placeholder=" Enter your email"><br><br>
        <button id="submit" value="submit">Submit</button>
      </form>
    </div>

<p id="result" style="background-color: blue"></p>
<br><br>
</div>
<div class="contact" id="Contact">
  <h1>Contact us</h1>
  <div class="items">
    <div class="con call">
  <table>
    <tr>
      <td rowspan="2"><img src="/assets/kol.png" alt=""></td>
      <th>Call us</th>
    </tr>
    <tr>
      <?php 
      $num=9988776655;
      echo $num ?>
    </tr>
  </table>
</div>
<div class="con email">
  <table>
    <tr>
      <td rowspan="2"><img src="/assets/email.png" alt=""></td>
      <th>Email</th>
    </tr>
    <tr>
      <?php
      const EMAIL="barbq@gmail.com";
      echo EMAIL;
      ?>
    </tr>
  </table>
</div>
<div class="con location">
  <table>
    <tr>
      <td rowspan="2"><img src="/assets/location.png" alt=""></td>
      <th>Location</th>
    </tr>
    <tr>
      <td>Bangaluru,<br>
        Karnataka</td>
    </tr>
  </table>
</div>
  </div>

</div>
<footer>
  <a href="#">Privacy policy</a>
  
  <a href="#">Terms of use</a>
  <div class="info">
  <p id="info"></p>  
  </div>
  
</footer>
    <script src="main.js"></script>
<?php
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['Email'];   
    
}
?>
</body>
</html>