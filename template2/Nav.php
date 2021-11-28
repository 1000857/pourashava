
<body>
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <?php 
            if(isset($_SESSION['loggedin']) && $_SESSION['user_role']!=1){ ?>
            <a class="navbar-brand" href="employee_portal.php">Welcome <?php echo $_SESSION['user_name']; ?></a><?php } ?>

            <a class="navbar-brand hidden" href="employee_portal.php"><img src="images/logo2.png" alt="Logo"></a>
        </div>


        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="employee_portal.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Assigned Work</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-list"></i><a href="working_assign.php">Assigned Work</a></li>
                         <li><i class="fa fa-list"></i><a href="work_distribution_list_portal.php">Distributed Work</a></li>
                        
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Salary</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-list"></i><a href="employee_salary_status.php">Salary Status</a></li>
                        
                    </ul>
                </li>
                <?php 
            if(isset($_SESSION['loggedin']) && $_SESSION['employee_role']==10){ ?>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>APPOINMENT</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-list"></i><a href="view_appointment_list.php">APPOINMENT LIST</a></li>
                        
                    </ul>
                </li>
            <?php } ?>
               
             
             

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
