<?php session_start() ?>
<!doctype html>
<html lang="en">

<head>
    <title>Discussion Forum</title>
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
    </style>
</head>
<?php include_once('scripts/mql_connection.php');
include_once('scripts/php_query_functions.php'); ?>

<?php
if (isset($_GET['question_id'])) {
    $question_id = $_GET['question_id'];
   $sql="SELECT discussion_questions.id as id,discussion_questions.title as title, discussion_questions.description 
   as description,discussion_questions.code_snippet as code_snippet,discussion_questions.date as date,users.fname as name 
   ,users.user_id as user_id 
   FROM discussion_questions,users WHERE discussion_questions.id='$question_id' and discussion_questions.posted_by=users.user_id";
    $result = $con->query($sql);
    $row = mysqli_fetch_array($result);
}
else{
    echo '<script> location.replace("index.php"); </script>';
}
if (isset($_POST['submit'])) {
    $code_snippet = htmlentities($_POST['code_snippet'], ENT_QUOTES, $encoding = 'UTF-8');
    $user_id = $_SESSION['user_id'];
    $sql = "INSERT INTO `discussion_answers`(`id`, `question_id`, `answer`, `answer_by`, `date`) VALUES (null,'$question_id','$code_snippet','$user_id', CURRENT_TIMESTAMP())";
    $result = $con->prepare($sql);
    $result->execute();
    echo $con->error;
    // echo $code_snippet;
}
?>


<body>

    <?php include_once('php-layout-files/header.php'); ?>
    <section>
        <div class="row mt-4">
            <?php include('php-layout-files/left-side-bar.php')  ?>

            <div class="col-lg-6 col-md-12  center-col col-12">
                <div class="center-div p-2">
                    <div class="jumbotron">
                        <h2 class=""><?php echo $row['title'] ?></h2>
                        <p class=""><?php echo $row['description'] ?></p>
                        <hr class="my-2">
                        <div class="posted-by d-flex flex-row">
                            <span>Posted at: <?php echo $row['date'] ?></span>
                            <hr width="2" size="50" style="display:inline-block">
                            <span></span>
                            <hr width="2" size="500">
                            <span>Posted by: <a href="profile_page.php?profile_id=<?php echo $row['user_id'] ?>"> <?php echo $row['name'] ?> </a></span>
                        </div>
                        <hr class="my-2">
                        <p>More info</p>
                        <!-- <p class="lead">
                           <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
                       </p> -->
                        <div class="code-block">
                            <?php $string = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", ($row['code_snippet'])) ?>
                            <pre class="code" data-language="js">
                       <?php echo $string;
                        ?>
                       </pre>

                        </div>
                    </div>

                </div>
                <div class="center-div my-3 p-2">
                    <h4>Comments (
                        <?php
                        $conditon = array(
                            'question_id' => $question_id
                        );
                        if (num_of_rows($con, 'discussion_answers', $conditon, '') > 0) {
                            echo num_of_rows($con, 'discussion_answers', $conditon, '');
                        } else {
                            echo "No Comments";
                        }

                        ?>

                        )</h4>
                    <div class="some-list">

                        <?php
                        $sql = "SELECT discussion_answers.answer as answer, discussion_answers.date as date , users.fname as name,users.user_id as user_id FROM discussion_answers, users WHERE users.user_id=discussion_answers.answer_by AND question_id='$question_id'";
                        $result = $con->query($sql);
                        ?>
                        <?php
                        foreach ($result as $key => $value) {
                            $date = strtotime($value['date']);
                            $date = date('m/d/y', $date);
                        ?>
                            <div class='single-item'>
                                <div class="jumbotron">
                                    <div style="white-space:nowrap;">
                                        <pre>
                                            <code>
                                            <p class=""><?php
                                                        $string = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", ($value['answer']));
                                                        echo ($string) ?></p>
                                            </code>
                                        </pre>
                                    </div>


                                    <hr class="my-2">
                                    <div class=" d-flex flex-row">
                                    <span class="">Ansered at: <?php echo $date ?></span>
                                        <hr width="2" size="50" style="display:inline-block">
                                        <span>Answered by: <a href="profile_page.php?profile_id=<?php echo $value['user_id'] ?>"> <?php echo $value['name'] ?> </a></span>
                                    </div>

    
                                </div>
                            </div>

                        <?php
                        }
                        ?>

                    </div>


                </div>

                <div class="center-div my-1 p-1">
                    <form action="single-question.php?question_id=<?php echo  $question_id ?>" method="post">
                        <div class="jumbotron">
                            <?php
                            if (isset($_SESSION['user_id'])) {
                            ?>

                                <div class="shadow">
                                    <div id="editor"></div>
                                    <button type="submit" name="submit" class=" post-btn btn my-3 text-white ml-2">Post Your Answer</button>
                                </div>
                            <?php
                            } else {
                                echo ' <h4 class="mb-3">You have to login to post your comment</h4>';
                            }
                            ?>
                        </div>
                    </form>
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

    <script src="code-editor/editor.js"></script>
    <script src="code-editor/lang/en_EN.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.5/ace.js"></script>
    <script src="code-editor/icons/font-awesome-4.js"></script>
    <script src="code-editor/icons/font-awesome-5.js"></script>
    <script src="highlighter/jquery.highlight.js"></script>
    <script src="static-load-more/jquery.simpleLoadMore.min.js"></script>

    <script>
        $(document).ready(function() {
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
            $('pre.code').highlight();
            $(function() {
                $('#editor').wysiwyg_editor({
                    enableFooter: false
                });
            });
            setTimeout(() => {
                $(".wysiwyg_editor_textarea").attr('name', 'code_snippet');
                $(".wysiwyg_editor_textarea").val('');
            }, 500);

            $('.some-list').simpleLoadMore({
                item: '.single-item',
                count: 5,
                counterInBtn: true,
                btnHTML: '<a name="" id="" class="btn topic-btn text-white load-more__btn"  href="" role="button">View More {showing}/{total} <i class="fas fa-angle-down"></i></a>',
                btnText: 'View More {showing}/{total}',
            });

            // 
        });
    </script>
</body>

</html>