<?php
    $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?>

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center"
        href="./../../employee/emp/empWel.php?id=<?php echo $id ?>">
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
    <li class="nav-item <?= $page == 'empWel.php' ? 'active':' ' ?>">
        <a class="nav-link" href="./empWel.php?id=<?php echo $id ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Employee Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item  <?= $page == 'viewEmployeeTask.php' ? 'active':' ' ?>">
        <a class="nav-link" href="./viewEmployeeTask.php?id=<?php echo $id?>">
            <span>View Task</span></a>
    </li>

    <li class="nav-item  <?= $page == 'applyLeave.php' ? 'active':' ' ?>">
        <a class="nav-link" href="./applyLeave.php?id=<?php echo $id?>">
            <span>Apply Leave</span></a>
    </li>

    <li class="nav-item  <?= $page == 'viewLeaveStatus.php' ? 'active':' ' ?>">
        <a class="nav-link" href="./viewLeaveStatus.php?id=<?php echo $id?>">
            <span>Leave Status</span></a>
    </li>
</ul>