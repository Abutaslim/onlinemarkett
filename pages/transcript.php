<?php
    session_start();
    
    include 'connection.php';
    require '../FPDF/fpdf.php';
    
    $student_id = $_SESSION['student_id'];
    $session_id = $_SESSION['session_id'];
    $student_reg = 0;
    $query = "SELECT * FROM `student` WHERE id = '$student_id'";
    $result = mysqli_query($con, $query);

    while ($rows = mysqli_fetch_array($result) ) {
        
        $student_reg = $rows[2].$rows[1];
    }
    

    
class PDF extends FPDF
{


// Page header
function Header()
{
    // Logo
    $this->Cell(20,5,'',0,0, '');
    $this->Image('../images/departmental_letter_head_image1.png',10,6,190);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // $this->Cell(190,10,'CLASSIC TAILORING SERVICES ',0,0,'C');
    // Move to the right
    //$this->Cell(80);
    //$this->Ln(23);
    // Title
    
  //   $this->Ln();

     // $this->Cell(-30,10,'Department of Computer Science ',0,0,'');
    // Line break
    $this->Ln(23);

}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','B',8);
    // Page number
    $this->Cell(189,5,'TCR=Total Credit Registered, TCE= Total Credit Earned, TPE=Total Point Earned, GP=Grade Point, PE=Point Earned ',0,1,'C');
    $this->SetFont('Arial','I',8);
    //$this->Cell(0,5,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
for ($i=0; $i <3 ; $i++) {
$pdf = new FPDF('p', 'mm', array(100, 150));
//  $student_id = $_SESSION['student_id'];
//  $session_id = $_SESSION['session_id'];
// $year = $_SESSION['year'];
 // $student_id = 2;
 // $session_id = 36;
// $year = 2020;
//$level_id =3; $session_id=36; $semester_id =1;

    $s =''; $r =''; $d ='';$f =''; $l =''; $sem1 ='First';$sem2 ='Second'; $ses =''; $p = '';$stce =0; $stpe; $tcr1 = 0.00; $tcr2 = 0.00; $level_id = 0;
    $query = "SELECT a.student_name, a.regno,  e.level_name, f.semester_name, g.session_name, e.id FROM `student` a INNER JOIN exams b ON a.id = b.stud_id INNER JOIN level e ON e.id = b.level_id INNER JOIN semester f ON f.id = b.semester_id INNER JOIN session g on g.id = '$session_id'  WHERE b.stud_id = '$student_id' and b.session_id = '$session_id'";
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


 
    
// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',10);
//cell (width, height, text, border, end line, [align])
// $pdf->Cell(189,5,'________________________________________________',0,1, 'C');
$pdf->Cell(189,5,'SAFE STUDENT ACADEMIC SESSION TRANSCRIPT',0,1, 'C');
$pdf->Cell(40,5,'Name:',0,0, 'R');
$pdf->SetFont('Times','',10);

$pdf->Cell(67,5,$s,0,0);
$pdf->SetFont('Times','B',10);

$pdf->Cell(35,5,'Registration Number:',0,0, 'R');
$pdf->SetFont('Times','',10);

$pdf->Cell(47,5,$r,0,1);
$pdf->SetFont('Times','B',10);

$pdf->Cell(40,5,'Level:',0,0, 'R');
$pdf->SetFont('Times','',10);

$pdf->Cell(67,5,$l,0,0);
$pdf->SetFont('Times','B',10);

$pdf->Cell(35,5,'Session:',0, 0,'R');
$pdf->SetFont('Times','',10);

$pdf->Cell(47,5,$ses,0,1);
$pdf->SetFont('Times','B',10);

$pdf->Cell(40,5,'Programme:',0,0, 'R');
$pdf->SetFont('Times','',10);

$pdf->Cell(67,5,'B. Sc. Agricultural Extension',0,1);
$pdf->SetFont('Times','B',10);

$pdf->Cell(189,0.01,'_____________________________________________________________________________________________',0,1, 'C');

// $pdf->Cell(189,7,'Date:'.' '.date('Y/m/d'),0,1, 'R');
$pdf->Cell(189,5,'',0,1);
$pdf->SetFont('Times','B',10);
//Student Exams details
$pdf->Cell(12,5,'',0,0, 'C');
$pdf->Cell(18,5,'Semester',1,0, 'C');
$pdf->Cell(18,5,'Code ',1,0, 'C');
$pdf->Cell(80,5,'Course Title ',1,0, 'C');
$pdf->Cell(12,5,'Credit ',1,0, 'C');
$pdf->Cell(13,5,'Grade ',1,0, 'C');
$pdf->Cell(12,5,'GP',1,0, 'C');
$pdf->Cell(12,5,'PE',1,1, 'C');
 
 $score =0; $course =''; $code =''; $course_name ='';$credit =''; $tcr =0; $tce =0; $tpe =0; $grade = ''; $point = 0; $gp =0; $gpa = 0.00;

if ($level_id == 5) {
   $score =0; $course =''; $code =''; $course_name ='';$credit =''; $tcr =0; $tce =0; $tpe =0; $grade = ''; $point = 0; $gp =0; $gpa = 0.00;
        $query = "SELECT b.score, h.course_code, h.course_name, h.credit_unit FROM `exams` b INNER JOIN course h ON h.id = b.course_id WHERE b.stud_id = '$student_id' AND b.session_id = '$session_id'AND b.semester_id = 1";
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
        $pdf->Cell(12,5,'',0,0, 'C');
        $pdf->SetFont('Times','',9);
        $pdf->Cell(18,5,$sem1,1,0, '');
        $pdf->Cell(18,5, $rows [1],1,0, 'C');
        $pdf->Cell(80,5,$rows [2],1,0, 'L');
        $pdf->Cell(12,5,$rows [3],1,0, 'C');
        $pdf->Cell(13,5,$grade ,1,0, 'C');
        $pdf->Cell(12,5,$gp,1,0, 'C');
        $pdf->Cell(12,5,$point,1,1, 'C');

        $sem1 = '';

        }
        
        $gpa =($tpe/$tcr1);
        //$tcr1= $tcr;
        $pdf->Cell(12,5,'',0,0, 'C');
        $pdf->SetFont('Times','B',10);
        $pdf->Cell(80,5,'TCR = '.$tcr1.', '.'TCE = '.$tce.', '.'TPE = '.$tpe ,0,0, 'C');
        $pdf->Cell(80,5,'GPA = '.round($gpa,2),0,1, 'C');

        $pdf->SetFont('Times','',9);
     // $gpa =($tpe1/$tcr);
     // $tcr2 = $tcr;
     // $stpe =$tpe+$tpe1;
     // $stcr1 = $tcr2+$tcr1;

    
     $query = "SELECT * FROM `gps`WHERE session_id = '$session_id' AND student_id = '$student_id' ";
     $result = mysqli_query($con, $query);
     if (mysqli_num_rows($result) != 0) {
        while ($rows = mysqli_fetch_array($result)) {
            if ($tpe != $rows['tce'] AND $tcr1 != $rows['tce'] ) {
                $id = $rows['id'];
                //echo "update";
                $update = "UPDATE `gps` SET tpe = '$tpe', tcr = '$tcr' WHERE id = '$id' ";
                 mysqli_query($con, $update);
            } else{
                //echo "Record exist";
            }
        }
        
     } else {
        $query = "INSERT INTO `gps` (student_id, tcr, tpe, session_id) VALUES ('$student_id', '$tcr1', '$tpe', '$session_id')";
         mysqli_query($con, $query);
     }


     
    $pdf->SetFont('Times','B',10);
 //    $pdf->Cell(12,5,'',0,0, 'C');
 //    $pdf->Cell(80,5,'TCR = '.$tcr.', '.'TCE = '.$tce1.', '.'TPE = '.$tpe1 ,0,0, 'C');
 //    $pdf->Cell(80,5,'GPA = '.round($gpa,2),0,1, 'C');
 // // getting last inseted CGPA
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
            
                
            
            $sppe += $rows['tpe'];  $stcr2 += $rows['tcr'];


            }
            
                

            // echo "Previous CGPA = ";
                $pdf->Cell(189,0.05,'______________________________________________________________________________________________',0,1, 'C');

            if ( $sppe != 0 and $stcr2 !=0) {
                $pcgpa =round($sppe/$stcr2, 2) ;
                $pdf->Cell(70,10,'Previous CGPA = '.$pcgpa  ,0,0, 'C');
                
              
            } else{
                $pdf->Cell(70,10,'Previous CGPA = 0.00'  ,0,1, 'C');
                
            }
            // echo $sppe.$stpe.$spce.$stce;
            // $pdf->Cell(189,5,$sppe+$stpe,0, 1, '');//end line

    $cgpa = (round(($sppe+$tpe)/($tcr1+$stcr2),2));


    $pdf->Cell(103,10,'Current CGPA = '.round($cgpa,2),0,1, 'R');
    $class = '';
    // // if ($cgpa>= 4.50 && $cgpa <= 5.00) {
    // //     $class = 'First Class Honour';
    // // } elseif ($cgpa>= 3.50 && $cgpa <= 4.49) {
    // //     $class = 'Upper Second Class Honour';
    // // }elseif ($cgpa>= 2.50 && $cgpa <= 3.49) {
    // //     $class = 'Lower Second Class Honour';
    // // }elseif ($cgpa>= 1.50 && $cgpa <= 2.49) {
    // //     $class = 'Third Class Honour';
    // // }
    
    // $pdf->Cell(189,5,'',0, 1, '');//end line
    // $pdf->Cell(189,0.05,'Remark: '. $class,0,1, 'C');


} else {
        $query = "SELECT b.score, h.course_code, h.course_name, h.credit_unit FROM `exams`b INNER JOIN course h ON h.id = b.course_id WHERE b.stud_id = '$student_id' AND b.session_id = '$session_id'AND b.semester_id = 1";
    $result = mysqli_query($con, $query);
     while ($rows = mysqli_fetch_array($result)) {
        $score = $rows [0];
        if ($score < 40 ) {
            $grade = 'F';

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
        $pdf->Cell(12,5,'',0,0, 'C');
        $pdf->SetFont('Times','',9);
        $pdf->Cell(18,5,$sem1,1,0, '');
        $pdf->Cell(18,5, $rows [1],1,0, 'C');
        $pdf->Cell(80,5,$rows [2],1,0, 'L');
        $pdf->Cell(12,5,$rows [3],1,0, 'C');
        $pdf->Cell(13,5,$grade ,1,0, 'C');
        $pdf->Cell(12,5,$gp,1,0, 'C');
        $pdf->Cell(12,5,$point,1,1, 'C');

        $sem1 = '';

        }
        
        $gpa =($tpe/$tcr1);
        //$tcr1= $tcr;
        $pdf->Cell(12,5,'',0,0, 'C');
        $pdf->SetFont('Times','B',10);
        $pdf->Cell(80,5,'TCR = '.$tcr1.', '.'TCE = '.$tce.', '.'TPE = '.$tpe ,0,0, 'C');
        $pdf->Cell(80,5,'GPA = '.round($gpa,2),0,1, 'C');

        $pdf->SetFont('Times','',9);
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
        $pdf->Cell(12,5,'',0,0, 'C');
        $pdf->Cell(18,5,$sem2,1,0, '');
        $pdf->Cell(18,5, $rows [1],1,0, 'C');
        $pdf->Cell(80,5,$rows [2],1,0, 'L');
        $pdf->Cell(12,5,$rows [3],1,0, 'C');
        $pdf->Cell(13,5,$grade ,1,0, 'C');
        $pdf->Cell(12,5,$gp,1,0, 'C');
        $pdf->Cell(12,5,$point,1,1, 'C');
        
        $sem2 = '';
     }
    
     $gpa =($tpe1/$tcr);
     $tcr2 = $tcr;
     $stpe =$tpe+$tpe1;
     $stcr1 = $tcr2+$tcr1;

    
     

     
    $pdf->SetFont('Times','B',10);
    $pdf->Cell(12,5,'',0,0, 'C');
    $pdf->Cell(80,5,'TCR = '.$tcr.', '.'TCE = '.$tce1.', '.'TPE = '.$tpe1 ,0,0, 'C');
    $pdf->Cell(80,5,'GPA = '.round($gpa,2),0,1, 'C');
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
            
                

            // echo "Previous CGPA = ";
                $pdf->Cell(189,0.05,'_______________________________________________________________________________________________',0,1, 'C');

            if ( $sppe != 0 and $stcr2 !=0) {
                $pcgpa = $sppe/$stcr2;
                $pdf->Cell(70,10,'Previous CGPA = '.round($pcgpa,2)  ,0,0, 'C');
                
              
            } else{
                $pdf->Cell(70,10,'Previous CGPA = 0.00'  ,0,0, 'C');
                
            }
            // echo $sppe.$stpe.$spce.$stce;
            // $pdf->Cell(189,5,$sppe+$stpe,0, 1, '');//end line

    $cgpa = (round(($sppe+$stpe)/($stcr1+$stcr2),2));


    $pdf->Cell(103,10,'Current CGPA = '.round($cgpa,2),0,0, 'R');
     // echo 'Current CGPA = '.$cgpa.' ';
}

$pdf->Cell(189,5,'',0, 1, '');//end line
$pdf->Cell(189,5,'',0, 1, '');//end line
$pdf->Cell(189,5,'',0, 1, '');//end line

$pdf->Cell(189,5,'',0, 1, '');//end line
$pdf->Cell(189,5,'',0, 1, '');//end line
$pdf->Cell(189,5,'',0, 1, '');//end line

// $pdf->Cell(189,5,'...............................',0, 1, '');//end line

$pdf->Cell(63,5,'Signature and Date',0, 0, 'R');//end line
$pdf->Cell(63,5,'',0, 0, '');//end line
$pdf->Cell(63,5,'Signature and Date ',0, 1, '');//end line
$pdf->Cell(63,5,'SAFE Coordinator',0, 0, 'R');//end line
$pdf->Cell(63,5,'',0, 0, 'C');//end line
$pdf->Cell(63,5,'Head of Department',0, 1, '');//end line

 

 }  
$pdf->Output($student_reg, 'D');


    ?>

