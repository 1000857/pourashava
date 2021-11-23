<body>
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./">Welcome Admin!</a>
            <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>User</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-list"></i><a href="user_list.php">User List</a></li>
                        <li><i class="fa fa-plus-circle"></i><a href="admin_signup_form.php">Add User</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Employee</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-list"></i><a href="employee_list.php">Employee List</a></li>
                        <li><i class="fa fa-plus-circle"></i><a href="employee_signup_form.php">Add Employee</a></li>
                        <li><i class="fa fa-list"></i><a href="employee_salary_list.php">Issue Salary</a></li>
                        <li><i class="fa fa-list"></i><a href="employee_salary_confirm_list.php">Salary Dispatch</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Doctor</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-list"></i><a href="doctor_list_all.php">Doctor List</a></li>
                        <li><i class="fa fa-plus-circle"></i><a href="doctor_appoinment_form.php"> Create Doctor Appointment</a></li>
                        <li><i class="fa fa-list"></i><a href="view_appointment_list.php">Appoinment List</a></li>
                        <li><i class="fa fa-list"></i><a href="employee_salary_confirm_list.php">Salary Dispatch</a></li>
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
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Tax Management</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-list"></i><a href="tax_list.php">Issue Tax</a></li>
                        <li><i class="fa fa-plus-circle"></i><a href="tax_confirmed_list.php">Tax List</a></li>
                        <li><i class="fa fa-list"></i><a href="allowance_confirmed_list.php">Allowance Confirmed</a></li>
                    </ul>
                    
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
                <li class="active">
                    <a href="notice_form.php"> <i class="menu-icon fa fa-dashboard"></i>Add Notice </a>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
