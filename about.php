<!-- ABOUT page.
  - Used to give users an overview of the LaTCh website.
  -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap links -->
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- End of Bootstrap links -->
    <link rel="stylesheet" type="text/css" href="mymain.css">
    <title>LaTCh</title>
  </head>
  <body>
    <?php session_start(); ?>
    <div id="nav" class="header">
      <ul>
        <li class="not-dropdown"><a class="no-hover"><img src="img/logo1.png" height="20" width="35"></img></a></li>
        <li class="dropdown"><a><img src="img/drop-down.png" height="20" width="35"></img></a></li>
        <li id="nav-dropdown"><a href="index.php">LaTCh</a></li>
        <?php
            include "MACSorLH.php";

            if(!isset($_SESSION['user_no']))
            {
                echo "<li id='nav-dropdown' class='fright'><b><a href='login.php'>Login</a></b></li>";
            }
            else
            {
              echo "<li id='nav-dropdown' class='fright'><b><a href='User/logout.php'>Logout</a></b></li>";
              echo "<li id='nav-dropdown' class='fright'><b><a href='User/edit-details.php'>" . $_SESSION['first_name'] . "</a></b></li>";
            }
        ?>
        <li id="nav-dropdown" class="fright"><a href="DiscussionBoard/allboards.php">Discussion Board</a></li>
        <li id="nav-dropdown" class="fright"><a href="Languages/all.php">Languages</a></li>
      </ul>
    </div>
    <br>
    <br>
    <h6><a id="breadcrumbs" href="index.php">Home</a> > About</h6>
    <h1 class="nametitle">About LaTCh</h1>
    <h3 class="subtitle">Language and Technology Chooser</h3>

    <div class="para" align="left">
      This is the final version of the LaTCh website, created by <a target="_blank" href="http://ronanjsmith.com">Ronan Smith</a> for his Honours project
      <i>An online tool to choose a programming language</i>.  The acronym 'LaTCh' stands for Language and Technology Chooser, which describes
      the aim of this website.  That aim is to provide programmers of any level a way (or a number of ways) to <b>choose</b> a programming language or other technology to help
      them solve a problem.  In this context, 'other technology' may include scripting languages, database manipulation languages, frameworks or software packages.
    </div>
    <br>
    <div class="para" align="left">
      The front-end of this website was created using HTML, CSS and JavaScript, and inherits some of its style from Bootstrap.  At the back-end is a relational MySQL database and PHP scripts
      to communicate with the front-end.  Input forms use PHP/MySQL prepared statements to protect against JavaScript and SQL injection.  On the note of security, all user passwords
      are stored using a hashing function.
    </div>
    <br>
    <div class="para" align="left">
      The LaTCh end-user interface (EUI) has been designed to be as intuitive and easy to use as possible.  And although this website has been designed mainly for use on a PC,
      it has been designed with Responsive Web Design (RWD) in mind, and will adjust its shape based on the size of screen you view it on.  There are many different functions
      on this website including a questionnaire, a search by categories section and a discussion board, which all aim to help you with your quest to find a programming language.
      These are described further below.
      You can also view a comprehensive list of all programming languages in the LaTCh database on the <a href="Languages/all.php">languages page</a>, and you can find out more information about any of
      these languages including the average salary for developers in this language.  I hope you enjoy using LaTCh Language and Technology Chooser.
      Feel free to leave any feeback you have on the <a href="feedback.php">feedback</a> page, and I will get back to you as soon as I can if necessary.
    </div>
    <br>
    <div class="para" align="left">
      <b>Main Features to help you choose a programming language:</b>
    </div>
    <br>
    <div class="para" align="left">
      1. A <b>Questionnaire</b> function which allows you to choose a programming language based on your needs in just 3 questions or less.  The questionnaire has been
      designed based on an underlying decision tree, which in the future will update dynamically when new programming languages are added to the LaTCh database.
      Available <a href="Questionnaire/questionnaire.php">here</a>.
    </div>
    <br>
    <div class="para" align="left">
      2. A <b>Categories</b> section where you can choose a language based on a category that it belongs to.  Categories can be completely flexible, and currently
      include popularity, paradigms, web development languages, scripting languages and more. Available <a href="Categories/categories.php">here</a>.  There is also a
      category based on scenarios, which users may be able to relate to.
    </div>
    <br>
    <div class="para" align="left">
      3. <b>Discussion Board</b>.  In theory, any programming language can be used to solve any computational task.  So it is not always simple to choose a language.
      Use this feature to start a discussion with the friendly LaTCh community about programming languages that suit your needs or some other area of computing.
      At LaTCh, we believe no question is a stupid question.  But if you would prefer people not to know you were the one asking a certain question, you can also post it completely
      anonymously! Available <a href="DiscussionBoard/allboards.php">here</a>.
    </div>
    <br>
    <div class="para" align="left">
      4. The <b>Languages</b> section allows you to see every programming language or technology in the LaTCh database, along with a corresponding overview page
      of each of these languages and technologies.  The ultimate aim for this feature is to eventually include every programming language in existence.
      Available <a href="Languages/all.php">here</a>.
    </div>
    <br>
    <div class="para" align="left">
      LaTCh allows users to choose a language in a number of different ways, with the aim of making the selection process an experience that works well for each individual user.
      It is hoped that the LaTCh 'Language and Technology Chooser' can be useful for all different types of programmers, from complete beginners who have never
      even used a computer before, to full-on experts who love to code.
    </div>
    <br>
    <br>
    <h1 class="subtitle"><img padding-top: "0" class="logo" src="img/LaTCh-black.png"></img></h1>
    <br>
    <div class="para" align="left">
      The images on this website are not my own, apart from the LaTCh logos.
    </div>
    <br>

    <div class="clear"></div>

    <div class="footer">
      <ul>
        <li style="float: right"><a href="about.php">About this site</a></li>
        <li style="float: right"><a href="feedback.php">Give feedback</a></li>
        <li style="float: right"><a href="support.php">Support</a></li>
      </ul>
    </div>
  </body>
</html>
