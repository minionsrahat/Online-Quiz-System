<div class="navigation">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/Online%20Quiz%20System">techQUIZ</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Blogs</a>
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
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Programing quiz</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="/Online%20Quiz%20System/scripts/indi_quiz_test.php?cat_id=2">PHP</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/Online%20Quiz%20System/scripts/indi_quiz_test.php?cat_id=4">C++ Programming</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/Online%20Quiz%20System/scripts/indi_quiz_test.php?cat_id=3">Javascript</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/Online%20Quiz%20System/scripts/indi_quiz_test.php?cat_id=4">C Programming</a>
                        </div>
                    </li>
                    <?php  if(isset($_SESSION['login'])){ ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">My account</a>
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
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </div>