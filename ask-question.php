<?php session_start() ?>
<!doctype html>
<html lang="en">

<head>
    <title>Online Quiz System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?php include_once('php-layout-files/css-links.php'); ?>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="highlighter/jquery.highlight.css">
    <link rel="stylesheet" href="code-editor/editor.css">
    <style>
        .category .form-control {

            width: 400px !important;
        }

        .title p {
            font-size: 16px;
        }

        .description p {
            font-size: 16px;
        }

        .code-snippet p {
            font-size: 16px;
        }

        .post-btn {
            background-color: #008080 !important;
            color: white;
        }
      
    </style>
</head>
<?php if (!isset($_SESSION['user_id'])) {
    header('Location:login.php');
} ?>

<?php include_once('scripts/mql_connection.php');
include_once('scripts/php_query_functions.php'); ?>
<?php


if (isset($_POST['submit'])) {

    $title =CONVERT_TEXT_htmlentities_ENT_QUOTES($_POST['title'],$con);
    $des = CONVERT_TEXT_htmlentities_ENT_QUOTES($_POST['description'],$con);
    $code_snippet = htmlentities($_POST['code_snippet'], ENT_QUOTES, $encoding = 'UTF-8');
?>
<!-- <div class="div-code">
<?php  $string=preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", ($code_snippet)) ?>
<pre class="code" data-language="js">
 <?php echo ($code_snippet); ?>

</pre>
</div> -->
 

<?php
   


    $user_id=$_SESSION['user_id'];
    $catid=$_POST['category'];
//    $columns=array('id', 'cat_id', 'title', 'description', 'code_snippet', 'posted_by','date');
//    $values=array(null,$catid,$title,"".$des,$code_snippet,$user_id,null);
//    PushData($con, 'discussion_questions', $columns, $values);
   $sql="INSERT INTO `discussion_questions`(`id`, `cat_id`, `title`, `description`, `code_snippet`, `posted_by`,`date`) VALUES(null,'$catid','$title','$des','$code_snippet','$user_id', CURRENT_TIMESTAMP())";
   $result=$con->prepare($sql);
   $result->execute();
   $id = $con->insert_id;
   if(!$con->error)
   {
    header("location:single-question.php?question_id=".$id);
   }
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
                        <form action="ask-question.php" method="post">
                            <div class="form-group category">
                                <h4 for="">Category</h4>

                                <?php
                                $result = PullData($con, 'discussion_category', '*', '', '');

                                ?>

                                <select class="form-control " name="category" id="">
                                    <?php
                                    foreach ($result as $key => $value) {

                                    ?>
                                        <option value="<?php echo $value['cat_id'];  ?>"><?php echo $value['cat_name'];  ?></option>
                                    <?php
                                    }
                                    ?>


                                </select>
                            </div>



                            <div class="form-group title">
                                <h4 for="">Title</h4>
                                <p class="">Be specific and imagine you’re asking a question to another person</p>
                                <input type="text" class="form-control" name="title" required id="" aria-describedby="helpId" placeholder="">
                            </div>

                            <div class="form-group description">
                                <h4 for="">Body</h4>
                                <p class="">
                                    Include all the information someone would need to answer your question</p>
                                <textarea class="form-control" name="description" required id="" rows="3"></textarea>
                            </div>
                            <hr class="my-2">
                            <div class="code-snippet">
                                <h4 for="">Code Snippet</h4>
                                <p class="">
                                    Include necessary code snippet</p>
                                <div id="editor"></div>
                            </div>
                            <button type="submit" name="submit" class=" post-btn btn my-3 ml-2">Post Your Question</button>

                        </form>

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
    <script>
        function getvalue() {
            // console.log($(".wysiwyg_editor_textarea").val());

            // console.log( $(".wysiwyg_editor_textarea").attr("name"));
        }

        $(document).ready(function() {

            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }


            $('pre .code').highlight();

            $(function() {
                $('#editor').wysiwyg_editor({
                    enableFooter: false
                });
            });
            setTimeout(() => {
                $(".wysiwyg_editor_textarea").attr('name', 'code_snippet');
                $(".wysiwyg_editor_textarea").val('');
            }, 500);



            // 
        });
    </script>
</body>

</html>