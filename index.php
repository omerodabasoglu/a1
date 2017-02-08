<!DOCTYPE html>
<!--Author: Omer Odabasoglu
    Date  : Spring 2017
    Title : Assignment 1, CSCI E15, Harvard University, Extension School -->
<html lang="en-US">
<head>
    <title>Assignment 1</title>
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico/OO-57x57.png" />
    <link type="text/css" rel="stylesheet" href="p5.css" />
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah%7CLato%7CUbuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css" />
    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <header id="header">
                <h1><span id="first">OMER</span> ODABASOGLU</h1>
            </header>
        </div>
        <div class="row">
            <img id="headshot" src="./images/photo.JPG" alt="photo">
        </div>
        <div class="row">
            <main id="main">
                <h2>ABOUT ME</h2>
                <p>
                  In pursuit of a graduate degree in <a id="ims" href="https://www.extension.harvard.edu/academics/graduate-degrees/information-management-systems-degree">
                  Information Management Systems</a> at Harvard Extension School, I have started spending most
                  of my free time having fun by coding, designing, reading and studying.
                  <img alt="smileyface" id="smileyface" src="images/smileyface.png" height="20">
                <br>
                <br>
                  I am currently an educational consultant working for a non-profit company in Orange
                  county, CA. Before this position, I had the opportunity of working in different positions
                  in a school setting from a teacher to a assitant principal, from a counselor to an extracurricular
                  activity director.
                <br>
                <br>
                  I always had passion in computer science, especially the security aspect.
                  That is why I am also working on a graduate certification in cybersecutiry.
                <br>
                <br>
                  I regularly play soccer and like to travel when I find time. I have also taken some steps forward
                  getting into sailing as well as hang gliding. PURE FUN!
                </p>
              <div id="quote" class="col-md-10">
                <span id="randomquote">RANDOM QUOTE</span>
              <br>
                <?php
                  function RandQuote()
                  {
                      $quotes = array('Education is the most powerful weapon which you can use to
                      change the world. (Nelson Mandela)', 'A leader is one who knows the way,
                      goes the way, and shows the way. (John C. Maxwell)', 'A genuine leader is
                      not a searcher for consensus but a molder of consensus. (Martin Luther King, Jr.)',
                      'I am not afraid of an army of lions led by a sheep; I am afraid of an army of
                      sheep led by a lion. (Alexander the Great)', 'Leadership and learning are
                      indispensable to each other. (John F. Kennedy)', );
                      $order = rand(0, 4);
                      echo "$quotes[$order]";
                  }
                    RandQuote();
                 ?>
              </div>
            </main>
        </div>
            <footer id="footer" class="row">
                <div id="copyright" class="col-md-2">
                  &#169; Omer Odabasoglu
                </div>
                <div class="col-md-10">
                    <img id="logo" src="images/favicon.ico/OO-1inx1in.png" alt="logo" height="100">
                </div>
            </footer>
    </div>
</body>
</html>
