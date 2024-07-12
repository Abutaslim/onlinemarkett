<?php //session_start(); ?>
<li class="nav-item"></li>

<?php 
require_once('connection.php');
 $role= $_SESSION["role"];
//session_start();
 $stm = $pdo->query("SELECT a.* FROM `privileges` a JOIN access b ON a.ukey = b.privilegeukey WHERE b.roleukey = ".$_SESSION['role']." AND a.status = 1  ORDER BY sort ASC");
 //$role = $_SESSION['role'];
 $rows = $stm->fetchAll(PDO::FETCH_NUM);
 // $_SESSION['ukey'] = $row[0];
 
 $sn = 1;
 foreach ($rows as $row) {
   // $_SESSION['ukey'] = $row[0];
   echo '
   <a href="'.$row[2].'" class="nav-link">
   <i class="'.$row[3].' nav-icon"></i>
   <p>' . $row[1] . '</p>
 </a>';
 }
//echo $_SESSION["username"];

// if ($_SESSION["username"] =='') {
//   echo "<meta http-equiv='refresh' content = '0; url = ../login1.php'/>";
// }
?>
    
            
             
                
              <li class="nav-item">
                <a href="dashboard.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dash</p>
                </a>
              
              </li> 
 <!--
              <li class="nav-item">
                <a href="faculties_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List of Faculties</p>
                </a>
              
              </li> 
              <li class="nav-item">
                <a href="department.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Department Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="departments_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List of Departments</p>
                </a>
              </li>
             
            </ul>
            <li class="nav-item">
                <a href="dashboard.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
            <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Tracker
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="cluster_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cluster</p>
                </a>
              </li>
              
              
              <li class="nav-item">
                <a href="data_operator_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data OPerator</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="enumerator_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enumerator</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="enumerator_inventory_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enumerator Inventory</p>
                </a>
              </li> -->

              <!-- <li class="nav-item">
                <a href="supervisor_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supervisor</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="supervisor_inventory.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supervisor Inventory</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="supervisor_allocation_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supervisor Allocation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="logbook_list.php" class="nav-link">
                  <i class="fa fa-book nav-icon"></i>
                  <p>Logbook</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="form_price_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Price</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="roles_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="privileges_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Previllage</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="access_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Access</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="plaza_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Plaza List</p>
                </a>
               -->
              <!-- <li class="nav-item">
                <a href="programmes_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List of Programmes</p>
                </a>
              </li> -->
              
              <!-- <li class="nav-item">
                <a href="exam.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tracker</p>
                </a>
              </li> -->
               <!-- <li class="nav-item">
                <a href="cluster_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cluster</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="exam_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Exam Scores List</p>
                </a> -->
              <!-- </li>
              <li class="nav-item">
                <a href="exam.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Exam Scores List</p>
                </a>
              </li> -->
              
            <!-- </ul>
            <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-certificate"></i>
              <p>
                Result Processing
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="generate_raw_marks.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Raw Marks</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="generate_result_summary.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Result Summary</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="generate_carry_over_courses.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Carry Over Courses</p>
                </a>
              </li>
              
            </ul>
               <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-certificate"></i>
              <p>
                Transcripts
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            
              <li class="nav-item">
                <a href="generate_transcript.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Session Transcript</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="generate_custom_transcript.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Custom Transcript</p>
                </a>
              </li>
            -->
            </ul>

            <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-certificate"></i>
              <p>
                Account Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            
              <li class="nav-item">
                <a href="change_password.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
              
           
            </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <?php 

    $current_year = date("Y");
     include 'connection.php';
   $nrows = $pdo->exec("SELECT max(year_name) FROM years");
   
     if (($current_year - $nrows) == 1 ) {}

$year1  = 1979;
$year2  = 1980;
      for ($i=1; $i <=42 ; $i++) { 
        
      //     $session = $year1.'/'.$year2;
        
      // echo "string";
      //   $query = "INSERT INTO `session` (`session_name`, `year`) VALUES ('$session', '$year2')";
      //   mysqli_query($con, $query);
      //     $year2++; $year1++;
        
   }
   