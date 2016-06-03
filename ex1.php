<DOCTYPE html>
<head>
  <title>Everything 1</title>
  <meta name="author" content="Don Lab">
</head>
<body>
  <div class="row">
    <div class="col-100">
      <div id="nav">
        <ul>
          <li><a class="active" href="#">Home</a></li>
          <li><a href="#">Photos</a></li>
          <li><a href="#">Video</a></li>
          <li><a href="#">Social</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="row">
    <div class='col-100'>
      <h1 id="header"></h1>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <h3>Lorem</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
        odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla
        quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent
        mauris. Fusce nec tellus sed augue semper porta. Mauris massa.
        Vestibulum lacinia arcu eget nulla. </p>
    </div>

    <div class="col-25">
      <h3>Ipsum</h3>
      <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra,
        per inceptos himenaeos. Curabitur sodales ligula in libero. Sed
        dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean
        quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis
        tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus
        risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis
        quis ligula lacinia aliquet. Mauris ipsum. </p>
    </div>

    <div class="col-50">
      <h3>Form</h3>
      <center>
      <form name="form" action="#" method="post" onsubmit="return fValid()">
        Name: <input name="user">
        <br />
        <br />
        Email: <input name="email">
        <br />
        <br />
        <input class="sub" type="submit">
      </form>
      </center>
    </div>
  </div>

  <div class="row">
    <div class='col-50'>
      <h3>PHP Code</h3>
      <?php
      echo "<center>";
        //date
        echo "PHP <code>date(\"m-d-Y\")</code> says it is " . date("m-d-Y");
        echo "<br />";

        //day
        echo "PHP <code>date(\"l\")</code> says it is " . date("l");
        echo "<br />";

        //time
        date_default_timezone_set("America/New_York");
        echo "PHP <code>date(\"h:i:sa\")</code> & <code>date_default_timezone_set(\"America/New_York\")</code> says it is " .date("h:i:sa");
        echo "<br />";

        //day quotes
        $quote;
        switch(date("l")) {
          case "Sunday":
            $quote = "Start of the week";
            break;
          case "Monday":
            $quote = "I'm sorry it's Monday";
            break;
          case "Tuesday":
            $quote = "Keep going";
            break;
          case "Wednesday":
            $quote = "Hump Day";
            break;
          case "Thursday":
            $quote = "Almost done";
            break;
          case "Friday":
            $quote = "TGIF!";
            break;
          case "Saturday":
            $quote = "Time to relax";
            break;
        }
        echo $quote . "<br />";

        //loop
        for ($x=1;$x<=10;$x++) {
          echo "This is iteration " . $x . "<br />";
        }
       echo "<br />";
       ?>
    </div>

    <div class='col-50'>
      <h3>JS Code</h3>
      <center>
      <div id="script">
        <!--Javascript-->
      </div>
      <br />
      <button class="sub" onclick="game()">Play a Game</button>
    </center>
    </div>
  </div>

  <div class='row'>
    <div class="col-25">
      &nbsp;
    </div>

    <div class="col-50">
      <h3>Lorem Ipsum</h3>
      <hr width="80%">
      <p id="quote">Praesent libero. Sed cursus ante dapibus diam.</p>
    </div>

    <div class="col-25">
      &nbsp;
    </div>
  </div>

  <div class="row">
    <div class="col-100">
      <h3 id="footer"></h3>
    </div>
  </div>

  <style>
  body {
    font-family: Tahoma, Verdana;
    color: #4d4c4c;
    background-color: #d8d8d8;
  }

  /*Grid*/
  * {
    box-sizing: border-box;
  }
  .row:after {
    content: "";
    clear: both;
    display: block;
  }
  .col-25 {
    width: 25%;
    float: left;
    padding: 15px;
  }
  .col-50 {
    width: 50%;
    float: left;
    padding: 15px;
  }
  .col-75 {
    width: 75%;
    float: left;
    padding: 15px;
  }
  .col-100 {
    width: 100%;
    float: left;
    padding: 15px;
  }

  /*Navbar*/
  #nav ul {
    background-color: #fff;
    padding: 0px;
    margin: 0px;
    overflow: hidden;
    list-style-type: none;
    border: 1px solid #4D4C4C;
    border-radius: 7px;
  }
  #nav li {
    float: left;
  }
  #nav li a {
    color: #4D4C4C;
    text-align: center;
    text-decoration: none;
    padding: 14px 16px;
    display: block;
  }
  #nav li a.active {
    color: #fff;
    background-color: #ccc;
  }
  #nav li a:hover:not(.active) {
    background-color: #4d4c4c;
    color: #fff;
  }



  h1, h3 {
    color: #000;
    text-align: center;
  }
  p {
    text-indent: 20px;
  }
  .sub {
    background-color: #fff;
    color: #4d4c4c;
    padding: 14px 16px;
    text-decoration: bold;
    font-size: 19px;
    border-radius: 5px;
    border: 1px solid #000;
  }
  .sub:hover {
    background-color: #4d4c4c;
    color: #fff;
  }
  #quote {
    text-align: center;
  }
  </style>

  <script>
  //header
    var user = prompt("Welcome. What is your name?");
    if (user == "" || user == null) {
      var user = "Person";
    }
    document.getElementById("header").innerHTML = "Hello " + user;

  //form validation
    function fValid() {
      var user = document.forms["form"]["user"].value;
      if (user == "" || user == null) {
        alert(' Form Error \n Missing Input: Name');
        return false
      }
      var email = document.forms["form"]["email"].value;
      if (email == null || email == "") {
        alert(' Form Error \n Missing Input: Email');
        return false;
      }
    }

  //js panel
    //time
    var h = new Date().getHours();
    var m = new Date().getMinutes();
    var s = new Date().getSeconds();
    document.getElementById("script").innerHTML = "The JS time is " + h + ":" + m + ":" + s;

    //game
    function game() {
      var num = Math.floor(Math.random() * 11);
      if (num == 0) {
        var num = num + 0;
      }
      for (x=3;x>=1;x--) {
        var guess = prompt("Guess a number! \n Tries: " + x);
        if (guess == num) {
          alert("Correct!");
          break;
        }
        else if (guess > num) {
          alert("Guess is too high");
        }
        else if (guess < num) {
          alert("Guess is too low");
        }
      }
      if (guess != num) {
        alert("The correct answer is " + num);
      }
    }
  //footer
    var y = new Date().getFullYear();
    document.getElementById("footer").innerHTML = "&copy;" + y + " Don Lab";
  </script>

</body>
</html>
