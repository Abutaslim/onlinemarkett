
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<style type="text/css">
    h3 {
        margin: 2px;

    }
    
.data {
  text-align: center;

}
table, tr, td, th {
  border: 1px solid black;
}
 td, th {
  height: 10px;


}
table{
  margin-left: auto;
  margin-right: auto;
  border-collapse: collapse;
  font-size: 14px;
}
</style>

<?php
    session_start();
    
    include 'connection.php';
    require '../FPDF/fpdf.php';
    
    $student_id = $_SESSION['student_id'];
    $session_id = $_SESSION['session_id'];
    $level_id = 0;
    $query = "SELECT level_id FROM `exams` WHERE stud_id = '$student_id' AND session_id = '$session_id'";
    $result = mysqli_query($con, $query);

    while ($rows = mysqli_fetch_array($result) ) {
        
        $level_id = $rows[0];
    }

    $student_reg = 0;
    $query = "SELECT * FROM `student` WHERE id = '$student_id'";
    $result = mysqli_query($con, $query);

    while ($rows = mysqli_fetch_array($result) ) {
        
        $student_reg = $rows[2].$rows[1];
    }
    

    
    // $this->Image('../images/departmental_letter_head_image.png',10,6,190);
   
    $trancript_count = 0;
   
    if ($level_id == 7) {
         $session_id = $session_id - 4;
        $trancript_count = 5;
    }elseif ($level_id == 6) {
         $session_id = $session_id - 3;
        $trancript_count = 4;
    }elseif ($level_id == 5) {
        $session_id = $session_id - 2;
        $trancript_count = 3;
    } elseif ($level_id == 4) {
         $session_id = $session_id - 1;
        $trancript_count = 2;
    } elseif ($level_id == 3) {
        $trancript_count = 1;
    }
?>
<table style="border: none;">
    <tr style="border: none;">
        <td style="border: none;">
            <img  src="../images/departmental_letter_head_image1.png">
        </td>      
     </tr>
</table>
    <div style=" margin-bottom: 10px; margin-left: auto; margin-right: auto; "> 

    </div>

         <table id="export_excel">
            <caption><b>SAFE STUDENT ACADEMIC TRANSCRIPT (B. Sc Agric Extension)</b></caption>

<?php 
    for ($i=0; $i < $trancript_count; $i++) { 
        # code...
   
    $s =''; $r =''; $d ='';$f =''; $l =''; $sem1 ='First';$sem2 ='Second'; $ses =''; $p = '';$stce =0; $stpe; $tcr1 = 0.00; $tcr2 = 0.00; $level_id =0;
    $query = "SELECT a.student_name, a.regno,  e.level_name, f.semester_name, g.session_name, e.id FROM `student` a INNER JOIN exams b ON a.id = b.stud_id INNER JOIN level e ON e.id = b.level_id INNER JOIN semester f ON f.id = b.semester_id INNER JOIN session g on g.id = '$session_id'  WHERE b.stud_id = '$student_id' and b.session_id = '$session_id'";
    // echo $session_id;
     $result = mysqli_query($con, $query);
     while ($rows = mysqli_fetch_array($result)) {
          $s = $rows [0];
        $r = $rows [1];
        // $d = $rows [2];
        // $f = $rows [3];
        $l = $rows [2];
        // $sem1 = $rows [5];
        $ses = $rows [4];
        // $year = explode('/', $rows [6]); 
        //$p = $rows [5];
        $level_id  = $rows [5];
     }


?>

    
        <?php if ($i == 0): ?>
           

            <tr>
                
                <th style="padding: 3px" colspan="7">Student Name:<?php echo(' '.$s).' |      | '; ?>Registration Number:<?php echo(' '.$r); ?></th>
            
            </tr>
            
        <?php endif ?>

        
        <tr>
            <th style="padding: 3px" colspan="7">Level:<?php echo(' '.$l).' |      | '; ?>Session:<?php echo(' '.$ses); ?></th>
            
        </tr>
        
      

         <tr>
            <th>Semester</th>
            <th>Code</th>
            <th>Course Title</th>
            <th>Gredit</th>
            <th>Grade</th>
            <th style="width: 35px; text-align: center;">GP</th>
            <th style="width: 35px; text-align: center;">PE</th>
        </tr>
    
    
<?php 

// Instanciation of inherited class


 
 $score =0; $course =''; $code =''; $course_name ='';$credit =''; $tcr =0; $tce =0; $tpe =0; $grade = ''; $point = 0; $gp =0; $gpa = 0.00;

if ($level_id == 5 || $level_id == 6) {
   $score =0; $course =''; $code =''; $course_name ='';$credit =''; $tcr =0; $tce =0; $tpe =0; $grade = ''; $point = 0; $gp =0; $gpa = 0.00;
        $query = "SELECT b.score, h.course_code, h.course_name, h.credit_unit FROM `exams` b INNER JOIN course h ON h.id = b.course_id WHERE b.stud_id = '$student_id' AND b.session_id = '$session_id'AND b.semester_id = 1";
    $result = mysqli_query($con, $query);
     while ($rows = mysqli_fetch_array($result)) {
        // echo $session_id;

        $score = $rows [0];
        if ($score < 40 ) {
            $grade = 'F';

        } elseif($score >= 40 &&$score <= 44 ) {
            $grade = 'E';

        }  elseif($score >= 45 &&$score <= 49 ) {
            $grade = 'D';
        }elseif($score >= 50 && $score <= 59 ) {
            $grade = 'C';

        } elseif($score >= 60 && $score <= 69 ) {
            $grade = 'B';

        }elseif($score >= 70 && $score <= 100 ) {
            $grade = 'A';

        } 
        if ($rows [3] == 7) {
            if ($grade == 'A' ) {
                $tce1 += $rows [3];
            $point = 6*5;
            $gp = 5;

        } elseif ($grade == 'B' ) {
            $tce1 += $rows [3];
            $point = 6*4;
            $gp = 4;

        } if ($grade == 'C' ) {
            $tce1 += $rows [3];
            $point = 6*3;


            $gp = 3;

        } elseif ($grade == 'D' ) {
            $point = 6*2;
            $tce1 += $rows [3];
            $gp = 2;

        } elseif ($grade == 'E' ) {
            $tce1 += $rows [3];
            $point = 6*1;
            $gp = 1;

        }  elseif ($grade == 'F' ) {
            $tce1 +=0;
            $point = 6*0;
            $gp = 0;

        }    
        } 
        
        elseif ($rows [3] == 6) {
            if ($grade == 'A' ) {
                $tce += $rows [3];
            $point = 6*5;
            $gp = 5;

        } elseif ($grade == 'B' ) {
            $tce += $rows [3];
            $point = 6*4;
            $gp = 4;

        } if ($grade == 'C' ) {
            $tce += $rows [3];
            $point = 6*3;


            $gp = 3;

        } elseif ($grade == 'D' ) {
            $point = 6*2;
            $tce += $rows [3];
            $gp = 2;

        } elseif ($grade == 'E' ) {
            $tce += $rows [3];
            $point = 6*1;
            $gp = 1;

        }  elseif ($grade == 'F' ) {
            $tce +=0;
            $point = 6*0;
            $gp = 0;

        }    
        }elseif ($rows [3] == 4) {
            if ($grade == 'A' ) {
                $tce += $rows [3];
            $point = 4*5;
            $gp = 5;

        } elseif ($grade == 'B' ) {
            $tce += $rows [3];
            $point = 4*4;
            $gp = 4;

        } if ($grade == 'C' ) {
            $tce += $rows [3];
            $point = 4*3;


            $gp = 3;

        } elseif ($grade == 'D' ) {
            $point = 4*2;
            $tce += $rows [3];
            $gp = 2;

        } elseif ($grade == 'E' ) {
            $tce += $rows [3];
            $point = 4*1;
            $gp = 1;

        }  elseif ($grade == 'F' ) {
            $tce +=0;
            $point = 4*0;
            $gp = 0;

        }    
        }elseif ($rows [3] == 3) {
            if ($grade == 'A' ) {
            $tce += $rows [3];
            $point = 3*5;
            $gp = 5;

        } elseif ($grade == 'B' ) {
            $tce += $rows [3];
            $point = 3*4;
            $gp = 4;

        } if ($grade == 'C' ) {
            $tce += $rows [3];
            $point = 3*3;
            $gp = 3;

        } elseif ($grade == 'D' ) {
            $tce += $rows [3];
            $point = 3*2;
            $gp = 2;

        } elseif ($grade == 'E' ) {
            $tce += $rows [3];
            $point = 3*1;
            $gp = 1;

        }  elseif ($grade == 'F' ) {
            $tce += 0;
            $point = 3*0;
            $gp = 0;

        }    
     }  elseif ($rows [3] == 2) {
            if ($grade == 'A' ) {
                $tce += $rows [3];
            $point = 2*5;
            $gp = 5;

        } elseif ($grade == 'B' ) {
            $tce += $rows [3];
            $point = 2*4;
            $gp = 4;

        } if ($grade == 'C' ) {
            $tce += $rows [3];
            $point = 2*3;


            $gp = 3;

        } elseif ($grade == 'D' ) {
            $point = 2*2;
            $tce += $rows [3];
            $gp = 2;

        } elseif ($grade == 'E' ) {
            $tce += $rows [3];
            $point = 2*1;
            $gp = 1;

        }  elseif ($grade == 'F' ) {
            $tce +=0;
            $point = 2*0;
            $gp = 0;

        }    
        }
        $tcr1 += $rows [3];
        $tpe += $point;
        // function count_digit($number) {
            
        //     return strlen((string) $number);
        
        // }

//function call
//$num = "012312";
        
        ?>
            <tr>
                <td style="padding: 3px" class="sem"><?php echo($sem1); ?></td>
                <td style="text-align: center;"><?php echo($rows [1]);  ?></td>
                <td style="padding: 3px"><?php echo $rows [2];  ?></td>
                <td style="text-align: center;"><?php echo $rows [3]; ?></td>
                <td style="text-align: center;"><?php echo $grade; ?></td>
                <td style="width: 35px; text-align: center;"> <?php echo $gp; ?> </td>
             <td style="width: 35px; text-align: center;"><?php //$number_of_digits_point = //count_digit($point); //this is call :)
        
        // echo $number_of_digits;
        
        // if ($number_of_digits_point == 1) {
            
        //     $point = '0'.$point;
        
        // }  $number_of_digits_point = count_digit($point); //this is call :)
        
        // echo $number_of_digits;
        
        // if ($number_of_digits_point == 1) {
            
        //     $point = '0'.$point;
        
        // } 
                echo $point; ?></td>
            </tr>
        <?php 
        
        $sem1 = '';

        }
        
        $gpa =($tpe/$tcr1);
        //$tcr1= $tcr;
        ?>
        <tr>
            <th colspan="7">TCR = <?php echo($tcr1.', TCE = '. $tce.', TPE = '.$tpe. ', '.'GPA = '. round($gpa, 2) ); ?>
        <?php 

       
    
     $query = "SELECT * FROM `gps`WHERE session_id = '$session_id' AND student_id = '$student_id' ";
     $result = mysqli_query($con, $query);
     if (mysqli_num_rows($result) != 0) {
        while ($rows = mysqli_fetch_array($result)) {
            if ($tpe != $rows['tce'] AND $tcr1 != $rows['tcr'] ) {
                $id = $rows['id'];
                //echo "update";
                $update = "UPDATE `gps` SET tpe = '$tpe', tce = '$tce', tcr = '$tcr' WHERE id = '$id' ";
                 mysqli_query($con, $update);
            } else{
                //echo "Record exist";
            }
        }
        
     } else {
        $query = "INSERT INTO `gps` (student_id, tcr,tce, tpe, session_id) VALUES ('$student_id', '$tcr1','$tce', '$tpe', '$session_id')";
         mysqli_query($con, $query);
     }


     
     $c = date("Y");
     $p = $c-1;
    $current_session = $p."/".$c;  $current_session_id =''; 
    $query = "SELECT  id FROM `session`WHERE  session_name = '$current_session' ";
     $result = mysqli_query($con, $query);
     $sppe = 0;$spce =0; $stcr2 = 0;
        while ($rows = mysqli_fetch_array($result)) {
            $current_session_id = $rows['0'];
        }

     $query = "SELECT *  FROM `gps` WHERE  student_id = '$student_id' AND session_id < '$session_id'";
     $result = mysqli_query($con, $query);
     $sppe = 0;
     $rowCount = mysqli_num_rows($result);
        while ($rows = mysqli_fetch_array($result)) {
            // getting the sum of previous point and credit earns as sppe and spce
            
                
            
            $sppe += $rows['tpe'];  $stcr2 += $rows['tcr']; $spce += $rows['tce'];


            }
            
            // echo $tpe.'/'.$tcr1.'/'.$stcr2; 
            $gtpe = $sppe+$tpe; 
            $gtcr = $stcr2+$tcr1;
            $gtce = $spce+$tce;
            $cgpa = (round(($sppe+$tpe)/($stcr2+$tcr1),2));


    ?>
    </th>
</tr>
    <?php 

    $class = '';
    if ($cgpa>= 4.50 && $cgpa <= 5.00) {
        $class = 'First Class Honour';
    } elseif ($cgpa>= 3.50 && $cgpa <= 4.49) {
        $class = 'Upper Second Class Honour';
    }elseif ($cgpa>= 2.50 && $cgpa <= 3.49) {
        $class = 'Lower Second Class Honour';
    }elseif ($cgpa>= 1.50 && $cgpa <= 2.49) {
        $class = 'Third Class Honour';
    }
    if ($trancript_count == 4 AND $level_id != 5 ) {
        ?>

             <tr>
            <th colspan="7">TCR = <?php echo($gtcr.', TCE = '. $gtce.', TPE = '.$gtpe. ', Final CGPA = '.$cgpa); ?>
       

        <?php
       echo(

        "
        <tr>
            <th style='padding: 3px' colspan='7'>Remark: ".$class."</th>
        </tr>
        "
    );
    } 
    if ($trancript_count == 5 AND $level_id != 7 ) {
       echo(

        "
        <tr>
            <th style='padding: 3px' colspan='7'>Remark: ".$class."</th>
        </tr>
        "
    );
    } 

    if ($trancript_count == 3 AND $level_id = 5) {
        ?>


             <tr>
            <th colspan="7">TCR = <?php echo($gtcr.', TCE = '. $gtce.', TPE = '.$gtpe. ', Final CGPA = '.$cgpa); ?>
       

        <?php
       echo(

        "
        <tr>
            <th style='padding: 3px' colspan='7'>Remark: ".$class."</th>
        </tr>
        "
    );
    } 

} else {
        $query = "SELECT b.score, h.course_code, h.course_name, h.credit_unit FROM `exams`b INNER JOIN course h ON h.id = b.course_id WHERE b.stud_id = '$student_id' AND b.session_id = '$session_id'AND b.semester_id = 1";
    $result = mysqli_query($con, $query);
     while ($rows = mysqli_fetch_array($result)) {
        $score = $rows [0];
        if ($score < 40 ) {
            $grade = 'F';
// echo "this is not level ";
        } elseif($score >= 40 && $score <= 44 ) {
            $grade = 'E';

        }  elseif($score >= 45 && $score <= 49 ) {
            $grade = 'D';
        }elseif($score >= 50 && $score <= 59 ) {
            $grade = 'C';

        } elseif($score >= 60 && $score <= 69 ) {
            $grade = 'B';

        }elseif($score >= 70 && $score <= 100 ) {
            $grade = 'A';

        } 
        if ($rows [3] == 7) {
            if ($grade == 'A' ) {
                $tce1 += $rows [3];
            $point = 6*5;
            $gp = 5;

        } elseif ($grade == 'B' ) {
            $tce1 += $rows [3];
            $point = 6*4;
            $gp = 4;

        } if ($grade == 'C' ) {
            $tce1 += $rows [3];
            $point = 6*3;


            $gp = 3;

        } elseif ($grade == 'D' ) {
            $point = 6*2;
            $tce1 += $rows [3];
            $gp = 2;

        } elseif ($grade == 'E' ) {
            $tce1 += $rows [3];
            $point = 6*1;
            $gp = 1;

        }  elseif ($grade == 'F' ) {
            $tce1 +=0;
            $point = 6*0;
            $gp = 0;

        }    
        } 
        
        elseif ($rows [3] == 6) {
            if ($grade == 'A' ) {
                $tce += $rows [3];
            $point = 6*5;
            $gp = 5;

        } elseif ($grade == 'B' ) {
            $tce += $rows [3];
            $point = 6*4;
            $gp = 4;

        } if ($grade == 'C' ) {
            $tce += $rows [3];
            $point = 6*3;


            $gp = 3;

        } elseif ($grade == 'D' ) {
            $point = 6*2;
            $tce += $rows [3];
            $gp = 2;

        } elseif ($grade == 'E' ) {
            $tce += $rows [3];
            $point = 6*1;
            $gp = 1;

        }  elseif ($grade == 'F' ) {
            $tce +=0;
            $point = 6*0;
            $gp = 0;

        }    
        }elseif ($rows [3] == 4) {
            if ($grade == 'A' ) {
                $tce += $rows [3];
            $point = 4*5;
            $gp = 5;

        } elseif ($grade == 'B' ) {
            $tce += $rows [3];
            $point = 4*4;
            $gp = 4;

        } if ($grade == 'C' ) {
            $tce += $rows [3];
            $point = 4*3;


            $gp = 3;

        } elseif ($grade == 'D' ) {
            $point = 4*2;
            $tce += $rows [3];
            $gp = 2;

        } elseif ($grade == 'E' ) {
            $tce += $rows [3];
            $point = 4*1;
            $gp = 1;

        }  elseif ($grade == 'F' ) {
            $tce +=0;
            $point = 4*0;
            $gp = 0;

        }    
        }elseif ($rows [3] == 3) {
            if ($grade == 'A' ) {
            $tce += $rows [3];
            $point = 3*5;
            $gp = 5;

        } elseif ($grade == 'B' ) {
            $tce += $rows [3];
            $point = 3*4;
            $gp = 4;

        } if ($grade == 'C' ) {
            $tce += $rows [3];
            $point = 3*3;
            $gp = 3;

        } elseif ($grade == 'D' ) {
            $tce += $rows [3];
            $point = 3*2;
            $gp = 2;

        } elseif ($grade == 'E' ) {
            $tce += $rows [3];
            $point = 3*1;
            $gp = 1;

        }  elseif ($grade == 'F' ) {
            $tce += 0;
            $point = 3*0;
            $gp = 0;

        }    
     }  elseif ($rows [3] == 2) {
            if ($grade == 'A' ) {
                $tce += $rows [3];
            $point = 2*5;
            $gp = 5;

        } elseif ($grade == 'B' ) {
            $tce += $rows [3];
            $point = 2*4;
            $gp = 4;

        } if ($grade == 'C' ) {
            $tce += $rows [3];
            $point = 2*3;


            $gp = 3;

        } elseif ($grade == 'D' ) {
            $point = 2*2;
            $tce += $rows [3];
            $gp = 2;

        } elseif ($grade == 'E' ) {
            $tce += $rows [3];
            $point = 2*1;
            $gp = 1;

        }  elseif ($grade == 'F' ) {
            $tce +=0;
            $point = 2*0;
            $gp = 0;

        }    
        }
        $tcr1 += $rows [3];
        $tpe += $point;
         ?>
            <tr>
                <td style="padding: 3px" class="sem"><?php echo($sem1); ?></td>
                <td style="text-align: center;"><?php echo($rows [1]);  ?></td>
                <td style="padding: 3px"><?php echo $rows [2];  ?></td>
                <td style="text-align: center;"><?php echo $rows [3]; ?></td>
                <td style="text-align: center;"><?php echo $grade; ?></td>
                <td style="width: 35px; text-align: center;"><?php echo $gp; ?></td>
                <td style="width: 35px; text-align: center;"><?php echo $point; ?></td>
            </tr>   
        <?php 
       
        $sem1 = '';

        }
        
        $gpa =($tpe/$tcr1);
        ?>
       <tr>
            <th style="padding: 3px" colspan="7">TCR = <?php echo($tcr1.', TCE = '. $tce.', TPE = '.$tpe.', '.'GPA = '. round($gpa, 2)); ?></th>
        </tr>
        <?php
  $score =0; $course =''; $code =''; $course_name ='';$credit =''; $tcr =0;  $tcr2 =0; $tce1 =0; $tpe1 =0; $grade = ''; $point = 0; $gp =0; $gpa = 0.00;
        $query = "SELECT b.score,  h.course_code, h.course_name, h.credit_unit, a.semester_name FROM `exams`b INNER JOIN course h ON h.id = b.course_id INNER JOIN semester a on a.id = b.semester_id WHERE b.stud_id = '$student_id' AND b.session_id = '$session_id' AND b.semester_id = 2";
    $result = mysqli_query($con, $query);
     while ($rows = mysqli_fetch_array($result)) {
        $score = $rows [0];
        if ($score < 40 ) {
            $grade = 'F';

        } elseif($score >= 40 &&$score <= 44 ) {
            $grade = 'E';

        }  elseif($score >= 45 &&$score <= 49 ) {
            $grade = 'D';
        }elseif($score >= 50 && $score <= 59 ) {
            $grade = 'C';

        } elseif($score >= 60 && $score <= 69 ) {
            $grade = 'B';

        }elseif($score >= 70 && $score <= 100 ) {
            $grade = 'A';

        } 
        if ($rows [3] == 7) {
            if ($grade == 'A' ) {
                $tce1 += $rows [3];
            $point = 7*5;
            $gp = 5;

        } elseif ($grade == 'B' ) {
            $tce1 += $rows [3];
            $point = 7*4;
            $gp = 4;

        } if ($grade == 'C' ) {
            $tce1 += $rows [3];
            $point = 7*3;


            $gp = 3;

        } elseif ($grade == 'D' ) {
            $point = 7*2;
            $tce1 += $rows [3];
            $gp = 2;

        } elseif ($grade == 'E' ) {
            $tce1 += $rows [3];
            $point = 7*1;
            $gp = 1;

        }  elseif ($grade == 'F' ) {
            $tce1 +=0;
            $point = 7*0;
            $gp = 0;

        }    
        } 
        
        elseif  ($rows [3] == 6) {
            if ($grade == 'A' ) {
                $tce1 += $rows [3];
            $point = 6*5;
            $gp = 5;

        } elseif ($grade == 'B' ) {
            $tce1 += $rows [3];
            $point = 6*4;
            $gp = 4;

        } if ($grade == 'C' ) {
            $tce1 += $rows [3];
            $point = 6*3;


            $gp = 3;

        } elseif ($grade == 'D' ) {
            $point = 6*2;
            $tce1 += $rows [3];
            $gp = 2;

        } elseif ($grade == 'E' ) {
            $tce1 += $rows [3];
            $point = 6*1;
            $gp = 1;

        }  elseif ($grade == 'F' ) {
            $tce1 +=0;
            $point = 6*0;
            $gp = 0;

        }    
        }elseif ($rows [3] == 4) {
            if ($grade == 'A' ) {
                $tce1 += $rows [3];
            $point = 4*5;
            $gp = 5;

        } elseif ($grade == 'B' ) {
            $tce1 += $rows [3];
            $point = 4*4;
            $gp = 4;

        } if ($grade == 'C' ) {
            $tce1 += $rows [3];
            $point = 4*3;


            $gp = 3;

        } elseif ($grade == 'D' ) {
            $point = 4*2;
            $tce1 += $rows [3];
            $gp = 2;

        } elseif ($grade == 'E' ) {
            $tce1 += $rows [3];
            $point = 4*1;
            $gp = 1;

        }  elseif ($grade == 'F' ) {
            $tce1 +=0;
            $point = 4*0;
            $gp = 0;

        }    
        }elseif ($rows [3] == 3) {
            if ($grade == 'A' ) {
            $tce1 += $rows [3];
            $point = 3*5;
            $gp = 5;

        } elseif ($grade == 'B' ) {
            $tce1 += $rows [3];
            $point = 3*4;
            $gp = 4;

        } if ($grade == 'C' ) {
            $tce1 += $rows [3];
            $point = 3*3;
            $gp = 3;

        } elseif ($grade == 'D' ) {
            $tce1 += $rows [3];
            $point = 3*2;
            $gp = 2;

        } elseif ($grade == 'E' ) {
            $tce1 += $rows [3];
            $point = 3*1;
            $gp = 1;

        }  elseif ($grade == 'F' ) {
            $tce1 += 0;
            $point = 3*0;
            $gp = 0;

        }    
     }  elseif ($rows [3] == 2) {
            if ($grade == 'A' ) {
                $tce1 += $rows [3];
            $point = 2*5;
            $gp = 5;

        } elseif ($grade == 'B' ) {
            $tce1 += $rows [3];
            $point = 2*4;
            $gp = 4;

        } if ($grade == 'C' ) {
            $tce1 += $rows [3];
            $point = 2*3;


            $gp = 3;

        } elseif ($grade == 'D' ) {
            $point = 2*2;
            $tce1 += $rows [3];
            $gp = 2;

        } elseif ($grade == 'E' ) {
            $tce1 += $rows [3];
            $point = 2*1;
            $gp = 1;

        }  elseif ($grade == 'F' ) {
            $tce1 +=0;
            $point = 2*0;
            $gp = 0;

        }    
        }elseif ($rows [3] == 1) {
            if ($grade == 'A' ) {
                $tce1 += $rows [3];
            $point = 1*5;
            $gp = 5;

        } elseif ($grade == 'B' ) {
            $tce1 += $rows [3];
            $point = 1*4;
            $gp = 4;

        } if ($grade == 'C' ) {
            $tce1 += $rows [3];
            $point = 1*3;


            $gp = 3;

        } elseif ($grade == 'D' ) {
            $point = 1*2;
            $tce1 += $rows [3];
            $gp = 2;

        } elseif ($grade == 'E' ) {
            $tce1 += $rows [3];
            $point = 1*1;
            $gp = 1;

        }  elseif ($grade == 'F' ) {
            $tce1 +=0;
            $point = 1*0;
            $gp = 0;

        }    
        }
        $tcr += $rows [3];
        // $sem2 = $rows [4];
        $tpe1 += $point;
         ?>
            <tr>
                <td style="padding: 3px" class="sem"><?php echo($sem2); ?></td>
                <td style="text-align: center;"><?php echo($rows [1]);  ?></td>
                <td style="padding: 3px"><?php echo $rows [2];  ?></td>
                <td style="text-align: center;"><?php echo $rows [3]; ?></td>
                <td style="text-align: center;"><?php echo $grade; ?></td>
                <td style="width: 35px; text-align: center;"><?php echo $gp; ?></td>
                <td style="width: 35px; text-align: center;"><?php echo $point; ?></td>
            </tr>
        <?php 
       
       
        $sem2 = '';
     }
    
     $gpa =($tpe1/$tcr);
     $tcr2 = $tcr;
     $stpe =$tpe+$tpe1;
     $stcr1 = $tcr2+$tcr1;
     $stce = $tce+$tce1;

    
     ?>
       <tr>
            <th style="padding: 3px" colspan="7">TCR = <?php echo($tcr.', TCE = '. $tce1.', TPE = '.$tpe1.', GPA = '.round($tpe1/$tcr,2)); ?>
        
        <?php

     
   
 // getting last inseted CGPA
     $c = date("Y");
     $p = $c-1;
    $current_session = $p."/".$c;  $current_session_id =''; 
    $query = "SELECT  id FROM `session`WHERE  session_name = '$current_session' ";
     $result = mysqli_query($con, $query);
     $sppe = 0;$spce =0; $stcr2 = 0;
        while ($rows = mysqli_fetch_array($result)) {
            $current_session_id = $rows['0'];
        }

     $query = "SELECT *  FROM `gps`WHERE  student_id = '$student_id' AND session_id < '$session_id'";
     $result = mysqli_query($con, $query);
     $sppe = 0;
     $rowCount = mysqli_num_rows($result);
        while ($rows = mysqli_fetch_array($result)) {
            // getting the sum of previous point and credit earns as sppe and spce
            
                
            
            $sppe += $rows['tpe'];  $stcr2 += $rows['tcr'];


            }
            

    $cgpa = (round(($sppe+$stpe)/($stcr1+$stcr2),2));


    echo ', CGPA = '.round($cgpa,2);
    ?>
    </th>
</tr>

    <?php
     // echo 'Current CGPA = '.$cgpa.' ';
}
$session_id++;
 }
?>
</table>

    <button  onclick="exportToExcel('xlsx')">Export to Excel</button>
<script type="text/javascript">
    function exportToExcel(type, fn, dl) {

        var elt = document.getElementById('export_excel');
        var wb = XLSX.utils.table_to_book(elt,{ sheet: "sheet1"});
        return dl ?
        XLSX.write(wb, {bookType, bookSST: true, type: 'base64'}):
        XLSX.writeFile(wb, fn || ('MySheetName.'+ (type || 'xlsx')));
    }
</script>

<table style="width: 70%; border: none; margin-top: 70px;">

    <tr style="border: none;">
        <th style="border: none;">Signature and Date</th>
        <th style="border: none;">Signature and Date</th>
        
    </tr>
    <tr style="border: none;">
        <th style="border: none;">Safe Coordinator</th>
        <th style="border: none;">Head of Department</th>
        
        
    </tr>
</table>
