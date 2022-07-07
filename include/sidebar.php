<?php
    $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?>

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center"
        href="./../../employee/admin/adminDashboard.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">
            EMS
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= $page == 'adminDashboard.php' ? 'active':' ' ?>">
        <a class="nav-link" href="./../../employee/admin/adminDashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item  <?= $page == 'addEmployee.php' ? 'active':' ' ?>">
        <a class="nav-link" href="../../employee/admin/addEmployee.php">
            <span>Add Employee</span></a>
    </li>


    <li class="nav-item  <?= $page == 'viewEmploee.php' ? 'active':' ' ?>">
        <a class="nav-link" href="../../employee/admin/viewEmploee.php">
            <span>View Employee</span></a>
    </li>

    <li class="nav-item  <?= $page == 'assignTask.php' ? 'active':' ' ?>">
        <a class="nav-link" href="../../employee/admin/assignTask.php">

            <span>Assign Task</span></a>
    </li>

    <li class="nav-item  <?= $page == 'viewTaskStatus.php' ? 'active':' ' ?>">
        <a class="nav-link" href="../../employee/admin/viewTaskStatus.php">

            <span>View Task</span></a>
    </li>

    <li class="nav-item  <?= $page == 'viewEmpLeave.php' ? 'active':' ' ?>">
        <a class="nav-link" href="../../employee/admin/viewEmpLeave.php">

            <span>View Employee Leaves</span></a>
    </li>
</ul>