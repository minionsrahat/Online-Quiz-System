<?php session_start() ?>
<!doctype html>
<html lang="en">

<head>
    <title>Question List</title>
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
$cat_id = 0;
if (isset($_GET['cat_id'])) {
    $cat_id = $_GET['cat_id'];
}
else{
    echo '<script> location.replace("index.php"); </script>';
}
// $result=PullData()
?>




<body>

    <?php include_once('php-layout-files/header.php'); ?>
    <section>
        <div class="row mt-4">
            <?php include('php-layout-files/left-side-bar.php')  ?>

            <div class="col-lg-6 col-md-12  center-col col-12">
                <div class="center-div p-2">
                    <div class="jumbotron p-1 ">
                        <?php
                        if ($cat_id == 0) {
                        ?>
                            <a name="" id="" class="btn btn-primary topic-btn" disabled href="questions-list.php?cat_id=0" role="button">All</a>
                        <?php
                        } else {
                        ?>
                            <a name="" id="" class="btn btn-primary" href="questions-list.php?cat_id=0" role="button">All</a>

                        <?php
                        }
                        ?>

                        <?php
                        $result = PullData($con, 'discussion_category', '*', '', '');

                        ?>
                        <?php
                        foreach ($result as $key => $value) {

                        ?>
                            <?php
                            if ($cat_id == $value['cat_id']) {
                            ?>

                                <a name="" id="" class="btn btn-primary topic-btn m-1" href="questions-list.php?cat_id=<?php echo $value['cat_id']; ?>" role="button"><?php echo $value['cat_name']; ?></a>

                            <?php
                            } else {
                            ?>
                                <a name="" id="" class="btn btn-primary m-1" href="questions-list.php?cat_id=<?php echo $value['cat_id']; ?>" role="button"><?php echo $value['cat_name']; ?></a>


                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <?php
                if ($cat_id == 0) {
                    $sql = "SELECT COUNT(discussion_answers.question_id) as comments,users.fname as name,users.user_id as user_id,discussion_questions.title as title,discussion_questions.id as id, discussion_questions.date as date,discussion_questions.posted_by FROM discussion_questions LEFT join discussion_answers on discussion_questions.id=discussion_answers.question_id JOIN users
                    WHERE discussion_questions.posted_by=users.user_id
                    GROUP by discussion_questions.id  ORDER by discussion_questions.date DESC  ";
                } else {
                    $sql = "SELECT COUNT(discussion_answers.question_id) as comments,users.fname as name,users.user_id as user_id,discussion_questions.title as title, discussion_questions.id as id, discussion_questions.date as date,discussion_questions.posted_by FROM discussion_questions LEFT join discussion_answers on discussion_questions.id=discussion_answers.question_id JOIN users
                    WHERE discussion_questions.cat_id='$cat_id' and discussion_questions.posted_by=users.user_id
                    GROUP by discussion_questions.id   ORDER by discussion_questions.date DESC";
                }

                $result = $con->query($sql);
                ?>
                <div class="center-div p-2">
                    <div class="jumbotron">
                        <div class="some-list">
                            <?php
                            foreach ($result as $key => $value) {
                            ?>
                                <div class="single-item">

                                    <div class="single-queston">
                                        <a href="single-question.php?question_id=<?php echo $value['id'] ?>">
                                            <h4 class=""><?php echo $value['title'] ?></h4>
                                        </a>
                                        <div class="posted-by d-flex flex-row">
                                            <span>Posted at: <?php echo $value['date'] ?></span>
                                            <hr width="2" size="50" style="display:inline-block">
                                            <span>Comments(<?php echo $value['comments'] ?>)</span>
                                            <hr width="2" size="500">
                                          
                                            <span>Posted by:  <a href="profile_page.php?profile_id=<?php echo $value['user_id'] ?>"> <?php echo $value['name'] ?> </a></span>
                                         
                                          
                                        </div>

                                    </div>

                                    <hr>
                                </div>

                            <?php
                            }

                            ?>
                        </div>
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

    <script src="code-editor/editor.js"></script>
    <script src="code-editor/lang/en_EN.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.5/ace.js"></script>
    <script src="code-editor/icons/font-awesome-4.js"></script>
    <script src="code-editor/icons/font-awesome-5.js"></script>
    <script src="highlighter/jquery.highlight.js"></script>
    <script src="static-load-more/jquery.simpleLoadMore.min.js"></script>
    <script>
        $(document).ready(function() {



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