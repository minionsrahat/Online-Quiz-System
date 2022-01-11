<div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">

                <div class="col-auto">
                    <h5><i class="fa fa-folder" aria-hidden="true"></i> Total Catagories: <?php echo get_total_row_counts("categories_quiz",$con) ?></h5>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">

                <div class="col-auto">
                <h5><i class="fa fa-question-circle" aria-hidden="true"></i> Total Quiz Questions: <?php echo get_total_row_counts("questions",$con) ?></h5>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">

                <div class="col-auto">
                <h5><i class="fa fa-list-alt" aria-hidden="true"></i> Total Quiz Held: <?php echo get_total_row_counts("results",$con) ?></h5>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">

                <div class="col-auto">
                <h5><i class="fa fa-user" aria-hidden="true"></i> Total User: <?php echo get_total_row_counts("user_info",$con) ?></h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-1">
        <div class="card-body">
            <div class="row no-gutters align-items-center">

                <div class="col-auto">
                <h5>Total Forum Questions: <?php echo get_total_row_counts("discussion_questions",$con) ?></h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-1">
        <div class="card-body">
            <div class="row no-gutters align-items-center">

                <div class="col-auto">
                <h5>Total Comments: <?php echo get_total_row_counts("discussion_answers",$con) ?></h5>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
