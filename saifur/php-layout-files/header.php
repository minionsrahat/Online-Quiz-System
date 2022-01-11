<div class="logo">
<form action="search-results.php" method="post">
<nav class="navbar navbar-dark bg-dark upper-navbar">
    <div class="input-group">
        <input type="text"required class="form-control" name="search_text" placeholder="Search ">
        <div class="input-group-append">
            <button class="btn search-icon btn-secondary" name="submit" type="submit">
                <i class="fa fa-search"></i>
            </button>
          
        </div>
        
    </div>
    </form>

    <?php if (isset($_SESSION['user_id'])) {
    ?>

        <div class="nav-item dropdown mr-5">

            <a class="nav-link dropdown-toggle profile-icon text-white" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">



                <img src="
           <?php if ($_SESSION['gender'] == 1 || $_SESSION['gender'] == 3) {
                echo 'images/male-profile-pic.jpg';
            } else {
                echo 'images/female-profile-icon.png';
            }
            ?>" alt="" srcset=""><?php echo $_SESSION['name'] ?>


            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="dropdown-item" href="profile_page.php?profile_id=<?php echo $_SESSION['user_id'] ?>">Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/Online%20Quiz%20System/view_result_history.php">Previous Quiz Result</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Feedback</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/Online%20Quiz%20System/scripts/logout.php">Log out</a>

            </div>
        </div>


    <?php
    } else { ?>
        <a name="" id="" class="btn btn-primary log-in-btn mr-2 curve-btn" href="login.php" role="button">Log In</a>
        <a name="" id="" class="btn btn-primary reg-btn curve-btn" href="signup.php" role="button">Registration</a>
    <?php
    } ?>

</nav>
<div class="navigation">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="questions-list.php?cat_id=0">Discussion Forum</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blogs</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="https://www.fullstackpython.com/blog.html">Python</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="https://www.testingxperts.com/blog/">Software Testing</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="https://phrase.com/blog/posts/14-must-read-blogs-for-java-developer/">Java Programing</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="http://www.robertgamble.net/">C Programing</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Programing Quiz</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="/Online%20Quiz%20System/indi_quiz_test.php?cat_id=2">PHP</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/Online%20Quiz%20System/indi_quiz_test.php?cat_id=4">C++ Programming</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/Online%20Quiz%20System/indi_quiz_test.php?cat_id=3">Javascript</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/Online%20Quiz%20System/indi_quiz_test.php?cat_id=4">C Programming</a>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="about-us.php">About Us</a>
                </li> <li class="nav-item ">
                    <a class="nav-link" href="our-team.php">Our Team</a>
                </li>
                <!-- <?php if (isset($_SESSION['login'])) { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My account</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/Online%20Quiz%20System/scripts/view_result_history.php">Previous Quiz Result</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Feedback</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/Online%20Quiz%20System/scripts/logout.php">Log out</a>
                        </div>
                    </li>
                <?php } ?> -->
            </ul>
        </div>
    </nav>

</div>

<a href="index.php"><div class="content">
<img src="images/logo-02.png"/>
</div></a>


</div>