<div class="col-lg-3 col-md-12 col-12 right-col">
    <div class="right-div">
        <div class="right-col-ul">
            <li class="left_col_main_topic">Give Online Test</li>
            <?php if (!isset($_SESSION['login'])) {       ?>
                <li><a href="/Online%20Quiz%20System/signup.php">Register Now</a></li>
                <li><a href="/Online%20Quiz%20System/login.php">Login</a></li>
            <?php } ?>
            <li><a href="/Online%20Quiz%20System/all_test.php">All Test List</a></li>
            <li><a href="/Online%20Quiz%20System/ask-question.php">Ask a Question</a></li>
        </div>
    </div>
    <?php
    $sql = "SELECT * FROM discussion_questions ORDER by rand() LIMIT 10";
    $result = $con->query($sql);
    ?>
    <div class="right-div  sticky-top my-3">
        <div class="right-col-ul">
            <li class="left_col_main_topic">Frequently Asked Questions</li>
            <?php
            foreach ($result as $key => $value) {
                $date = strtotime($value['date']);
                $date = date('m/d/y', $date);
            ?>

                <li><a  href="single-question.php?question_id=<?php echo $value['id'] ?>"><?php
                echo  substr($value['title'], 0, 30);
                ?></a></li>
            <?php }
            ?>
        </div>
    </div>
</div>