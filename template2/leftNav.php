<?php session_start()?>
<body>
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <?php 
            if(isset($_SESSION['loggedin']) && $_SESSION['user_role']!=1){ ?>
            <a class="navbar-brand" href="./">Welcome <?php echo $_SESSION['user_name']; ?></a><?php } ?>
            <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Salary</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-list"></i><a href="employee_salary_status.php">Salary Status</a></li>
                        <li><i class="fa fa-plus-circle"></i><a href="admin_signup_form.php">Add User</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Employee</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-list"></i><a href="employee_list.php">Employee List</a></li>
                        <li><i class="fa fa-plus-circle"></i><a href="employee_signup_form.php">Add Employee</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Humanitarian Allowance</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-list"></i><a href="allowance_form.php">Allowance Form</a></li>
                        <li><i class="fa fa-plus-circle"></i><a href="allowance_list.php">Allowance List</a></li>
                        <li><i class="fa fa-list"></i><a href="allowance_confirmed_list.php">Allowance Confirmed</a></li>
                    </ul>
                    
                </li>
                <li>
                    <a href="department_index.php"> <i class="menu-icon fa fa-building"></i>Humanitarian Allowance</a>
                </li>
                <li >
                    <a href="batch_index.php"> <i class="menu-icon fa fa-tasks"></i>Manage Batches</a>
                </li>
                <li>
                    <a href="#"> <i class="menu-icon fa fa-user"></i>Application</a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Application</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-list"></i><a href="application_list.php">Public Applications</a></li>
                        <li><i class="fa fa-eye"></i><a href="rickshaw_list.php">Rickshaw</a></li>
                        <li><i class="fa fa-eye"></i><a href="trade_license_list.php">Trade License</a></li>
                        <li><i class="fa fa-eye"></i><a href="house_permission_list.php">House/Building Permission</a></li>
                    </ul>
                </li>


            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
