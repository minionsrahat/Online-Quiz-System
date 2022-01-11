<?php include_once('mql_connection.php');
?>

<?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['submit']))
 {
     $cat_id=$_GET['cat_id'];   
     $selector=$_POST['selector'];
    # $selector = isset($selector[2]) ? $selector[2] : 'o';
     $count=count($_POST['selector']);
     echo $count;
     $quesql="SELECT ans_id FROM `questions` where cat_id=$cat_id";
     $quesesult=$con->query($quesql);
     $total=$_GET['limit'];
     $ans=0;
     $time=3.4;
     $i=1;
     $wrans=0;
     while($ques_row=mysqli_fetch_assoc($quesesult))
     {
         if(isset($selector[$i]))
         {
             if($selector[$i]==$ques_row['ans_id'])
             {
                 $ans=$ans+1;
             }
             else{
                $wrans=$wrans+1;
             }
         }
         $i=$i+1;
         
     }
     $points=ceil(((20/$total)*$ans)+(5/$time));

 }
 }
?>
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
if(isset($_GET['cat_id']))
{
    $cat_id=$_GET['cat_id'];
    $sql="SELECT * FROM `categories_quiz` WHERE cat_id='$cat_id'";
    $result=$con->query($sql);
    $row=mysqli_fetch_array($result);
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
                    <div class="row pt-3">
                        <div class="col-6 mx-auto text-center">
                            <h4>Online Quiz (10 Ques)</h4>
                            <h4>Topic: <span><?php echo $row['cat_name'] ?></span></h4>
                            <h4>Time: 5 min</h4>
                        </div>
                    </div>
                    <div>
                        <hr>
                    </div>
                    <div class="row p-3">
                        <div class="col-6 mx-auto ">
                            <h3 class="mb-3">Your Result:</h3>
                            <table class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <td scope="row">Test Name</td>
                                        <td><span><?php echo $row['cat_name'] ?></span> Quiz Test</td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Total Question</td>
                                        <td><?php echo $total ?></td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Correct Answer</td>
                                        <td><?php echo $ans  ?></td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Wrong Answer</td>
                                        <td class="text-danger"><?php echo $wrans  ?></td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Not Answered</td>
                                        <td class="text-danger"><?php echo ($total-($wrans+$ans )); ?></td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Your Time</td>
                                        <td>3.4 min</td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Your Points</td>
                                        <td><span class="text-success"><?php echo $points ?></span>/<span class="text-primary">25</span></td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row p-5">
                            <p class="lead">Hopefully, you have enjoyed the C Quiz. We hope you would like solving the
                                different question related to the C programming concept. We want to thank you for taking
                                the time to run through this quiz.</p>
                        </div>
                        

                    </div>
                    <div class="row pb-3">
                            <div class="mx-auto">
                                <div class="btn-group" role="group" aria-label="">
                                    <button type="button" class="btn btn-success">Restart Quiz</button>
                                    <button type="button" class="btn btn-success">View Answer</button>
                                </div>

                            </div>
                     </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-12 right-col">
            <div class="right-div">
                    <div class="heading text-center p-3">
                        <h3>Recent Post</h3>
                    </div>
                    <hr>
                    <div class="row p-2">
                        <div class="col-12">
                            <img src="logo.png" alt="" srcset="">
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <h4>Post title</h4>
                            <p>Post description</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row p-2">
                        <div class="col-12">
                            <img src="logo.png" alt="" srcset="">
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <h4>Post title</h4>
                            <p>Post description</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row p-2">
                        <div class="col-12">
                            <img src="logo.png" alt="" srcset="">
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <h4>Post title</h4>
                            <p>Post description</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row p-2">
                        <div class="col-12">
                            <img src="logo.png" alt="" srcset="">
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <h4>Post title</h4>
                            <p>Post description</p>
                        </div>
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