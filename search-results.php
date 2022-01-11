<?php session_start() ?>
<!doctype html>
<html lang="en">

<head>
    <title>Search Results</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?php include_once('php-layout-files/css-links.php'); ?>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="highlighter/jquery.highlight.css">
    <link rel="stylesheet" href="code-editor/editor.css">

    <style>
        .code-block {
            max-height: 600px !important;

        }

        .code {
            word-wrap: break-word !important;
            white-space: pre-wrap !important;
            max-width: fit-content !important;
            max-height: 550px !important;
        }

        .single-queston {
            padding: 20px;
            /* text-decoration: none; */
        }

        .single-queston a {
            text-decoration: none;
        }

        .posted-by span {
            padding: 10px;
            color: black;

        }
    </style>
</head>
<?php include_once('scripts/mql_connection.php');
include_once('scripts/php_query_functions.php');
$search_query ="";
if (isset($_POST['submit'])) {
    $search_query=$_POST['search_text'];
    // echo $search_query;
}

// $result=PullData()
?>
<body>

    <?php include_once('php-layout-files/header.php'); ?>
    <section>
        <div class="row mt-4">
            <?php include('php-layout-files/left-side-bar.php')  ?>

            <div class="col-lg-6 col-md-12  center-col col-12">
              
                <?php
               
                    $sql = "SELECT COUNT(discussion_answers.question_id) as comments,users.fname as name,questions.title as title,questions.id as id, questions.date as date,questions.posted_by FROM 
                    (SELECT * FROM discussion_questions WHERE MATCH(discussion_questions.title,discussion_questions.description) against('$search_query')) as questions LEFT join discussion_answers on questions.id=discussion_answers.question_id JOIN users
                                       WHERE questions.posted_by=users.user_id 
                                       GROUP by questions.id  ORDER by questions.date DESC";

                $result = $con->query($sql);
                ?>
                <div class="center-div p-2">
                    <div class="jumbotron">
                        <?php
                        if(mysqli_num_rows($result)>0)
                        {
                        ?>
                        <div class="some-list">
                            <?php
                            foreach ($result as $key => $value) {
                            ?>
                                <div class="single-item">

                                    <div class="single-queston">
                                        <a href="single-question.php?question_id=<?php echo $value['id'] ?>">
                                            <h4 class=""><?php echo $value['title'] ?></h4>

                                            <div class="posted-by d-flex flex-row">
                                                <span>Posted at: <?php echo $value['date'] ?></span>
                                                <hr width="2" size="50" style="display:inline-block">
                                                <span>Comments(<?php echo $value['comments'] ?>)</span>
                                                <hr width="2" size="500">
                                                <span>Posted by: <?php echo $value['name'] ?></span>
                                            </div>
                                        </a>
                                    </div>

                                    <hr>
                                </div>

                            <?php
                            }

                            ?>
                        </div>

                        <?php
                        }
                        else
                        {
                            ?>
                                <h4>Sorry!!!! No Result Founds</h4>
                            <?php
                        }
                        
                        ?>
                    </div>
                </div>

            </div>

            <?php
            include('php-layout-files/right-side-bar.php')
            ?>
        </div>
    </section>


    <?php
    include('php-layout-files/footer.php')
    ?>
    <?php include_once('php-layout-files/js-links.php'); ?>

    
    <script src="static-load-more/jquery.simpleLoadMore.min.js"></script>
    <script>
        $(document).ready(function() {
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }

            $('.some-list').simpleLoadMore({
                item: '.single-item',
                count: 5,
                counterInBtn: true,
                btnHTML:'<a name="" id="" class="btn topic-btn text-white load-more__btn"  href="" role="button">View More {showing}/{total} <i class="fas fa-angle-down"></i></a>',
                btnText: 'View More {showing}/{total}',
            });

            // 
        });
    </script>
</body>

</html>