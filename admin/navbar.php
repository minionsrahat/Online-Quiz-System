
<?php 
session_start();
if(!isset($_SESSION['admin_login']))
{
    header('location:login.php');
}
?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">techQuiz</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Profile</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link " href="view_categoris.php">
                   <i class="fa fa-folder" aria-hidden="true"></i>
                    <span>View Quiz Categories</span>
                </a>
            </li>


            <!-- Divider -->

            <li class="nav-item">
                <a class="nav-link " href="view_questions.php">
                 <i class="fa fa-question" aria-hidden="true"></i>
                    <span>View Quiz Questions</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="view-forum-questions.php">
                 <i class="fa fa-question" aria-hidden="true"></i>
                    <span>View Forum Questions</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="view_user.php">
                    <!-- <i class="fas fa-fw fa-wrench"></i> -->
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                    <span>View User</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="view_quiz_result.php">
                   <i class="fa fa-list-alt" aria-hidden="true"></i>
                    <span>View Quiz result</span>
                </a>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

           


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>