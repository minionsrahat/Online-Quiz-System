<!doctype html>
<html lang="en">

<head>
    <title>Online Quiz System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
 <?php include_once('mql_connection.php');
$cat_id=2;
if(isset($_GET['cat_id']))
{
    $cat_id=$_GET['cat_id'];
}
?>

    <div class="navigation">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">techQUIZ</a>
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
                            aria-haspopup="true" aria-expanded="false">Interview ques</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Python</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Software Testing</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Java Programing</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">C Programing</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Blogs</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Python</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Software Testing</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Java Programing</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">C Programing</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Programing quiz</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Python</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Software Testing</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Java Programing</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">C Programing</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 ">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
    <section>
        <div class="row mt-4">
            <div class="col-lg-3 col-md-12 col-12 left-col">
                <div class="left-div">
                    <div class="left-col-ul mx-auto">
                        <li class="left_col_title">Quiz Test Links</li>
                        <li><a href="">All Quiz Test List</a></li>
                        <li><a href="">Java Online Quiz Test</a></li>
                        <li><a href="/Online%20Quiz%20System/phpscript/quiz.php?id=">C Online Quiz Test</a></li>
                        <li><a href="">C++ Online Quiz Test</a></li>
                        <li><a href="">HTML Online Quiz Test</a></li>
                        <li><a href="">CSS Online Quiz Test</a></li>
                        <li><a href="">JavaScript Online Quiz Test</a></li>
                        <li><a href="">SQL Online Quiz Test</a></li>
                        <li><a href="">PHP Online Quiz Test</a></li>
                        <li><a href="">Perl Online Quiz Test</a></li>
                        <li><a href="">Python Online Quiz Test</a></li>
                        <li><a href="">C# Online Quiz Test</a></li>
                        <li><a href="">Objective-C Online Quiz Test</a></li>
                    </div>
                </div>


            </div>

            <div class="col-lg-6 col-md-12 center-col col-12">
                <div class="center-div">
                  
                        <div class="row ">
                            <div class="col-10 mx-auto">
                                <div class="loader">

                             <?php
                            $quesql="SELECT * FROM `questions` where cat_id='$cat_id'";
                            $quesesult=$con->query($quesql);
                            while($ques_row=mysqli_fetch_assoc($quesesult))
                            {
                                $ques_id=$ques_row['ques_id'];
                            ?>
                                    <div class="mt-5 p-3" id="quiz">
                                        <div class="question">
                                            <p class="text-center"><span class="" id="qid"><?php echo $ques_id ?></span>
                                                <span id="question"><?php echo $ques_row['ques_title'];?></span>
                                            </p>
                                        </div>
                                        <ul>
                                            <?php
                                         $i=0;
                                         $ans=['a','b','c','d'];
                                         $optsql="SELECT * FROM `options` where ques_id='$ques_id'";
                                         $optresult=$con->query($optsql);
                                         while($opt_row=mysqli_fetch_assoc($optresult))
                                         {
                                        ?>
                                            <li>
                                                <input type="radio" id="" name="selector[<?php echo $ques_id;?>]"
                                                    value="<?php echo $ans[$i];?>">
                                                <label for="f-option" class="element-animation  <?php
                    if($ans[$i]==$ques_row['ans_id'])
                    {
                        echo "text-primary";
                    }
                    ?>"><?php echo $opt_row['option_det']; ?></label>
                                                <div class="check"></div>
                                            </li>
                                            <?php
                                         $i=$i+1;
                                         }
                                        ?>
                                        </ul>
                                    </div>
                                    <?php } ?>
                                </div>

                            </div>
                        </div>


                     
                    

                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-12 right-col">
                <div class="right-div">
                    <div class="right-col-ul">
                        <li class="left_col_main_topic">Give Online Test</li>
                        <li><a href="">Register Now</a></li>
                        <li><a href="">Login</a></li>
                        <li><a href="">All Test List</a></li>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>