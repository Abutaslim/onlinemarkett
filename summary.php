<?php

// require 'inc/phpspreadsheet/autoload.php';
require 'vendor/autoload.php';
// require_once('connection.php');
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'tps';
$con = mysqli_connect($hostname, $username, $password, $dbname);
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
// Create new Spreadsheet object
//This is for generating only rawmarks for level 400 (final year) where
// we have both first and second semester courses.
//$grade = '';


    // $session = $_POST['select'];
    // $session=strtoupper(trim($select));
    // $level = $_POST['select'];
    // $level=strtoupper(trim($select));
    // $semester = 2;
    // $nature=$_POST['select'];
   


//if ($nature == "1") {
  $spreadsheet = new Spreadsheet();
// Style for worksheet
  $styleArray_abs = [
        'font' => [
            'bold' => true,
        ],
        'alignment' => [
            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
        ],
    ];
    $styleArray_tableHeader = [
        'font' => [
            'bold' => true,
        ],
        'alignment' => [
            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
        ],
        'borders' => [
            'allBorders' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            ],
        ],
        'fill' => [
            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR,
            'rotation' => 90,
            'startColor' => [
                'argb' => 'FFA0A0A0',
            ],
            'endColor' => [
                'argb' => 'FFFFFFFF',
            ],
        ],
    ];

    $styleArray_Header = [
        'font' => [
            'bold' => true,
            'size' => 13,
        ],
        'alignment' => [
            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
        ],
    ];
    $styleArray_Header2 = [
        'font' => [
            'bold' => true,
            'size' => 10,
        ],
        'alignment' => [
            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
        ],
    ];
    $styleArray_tableBody = [
      'font' => [
            // 'bold' => true,
            'size' => 10,
        ],
        'borders' => [
            'allBorders' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            ],
        ],
    ];
    $styleArray_tableBody2 = [
        'borders' => [
            'right' => [
                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
            ],
        ],
    ];
    $styleArray = [
    'borders' => [
        'outline' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
            'color' => ['argb' => 'FFFF0000'],
            ],
        ],
    ];
    $styleArray_tableBody_Center = [
        'alignment' => [
            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
        ],
    ];

    $styleArray_student_Info = [
        'font' => [
            'bold' => true,
            'size' => 14,
        ],
    ];

    $styleArray_hidden = [
        'font' => [
            'color' => array('rgb' => 'FFFFFF'),
            'size'  => 1,
        ],
    ];

    $sn = 1;
      $_GET['semester_id'];
     //  echo $raw_id = $_GET['raw_id'];

     // // $raw = explode("&", $raw_id);
      $semester_id =$_GET['semester_id'];
      $session_id = $_GET['session_id'];
      $level_id = $_GET['level_id'];
      $num_student = $_GET['num_student'];
      $style_num_row = $num_student;
      $session_name = "";
      $semester_name = "";
      $level_name = "";

      if ($semester_id == 1) {
        $semester_name = "FIRST";
      } else {

        $semester_name = "SECOND";

      }
      $programme_name = "B.Sc. AGRICULTURAL EXTENSION";

      $query = "SELECT d.session_name, c.level_name FROM exams a JOIN session d  ON  d.id = a.session_id JOIN level c ON c.id = a.level_id WHERE  a.session_id = '$session_id' AND a.level_id = '$level_id' LIMIT 1";
        $result = mysqli_query($con, $query);

       while ($row = mysqli_fetch_array($result)) {


         $session_name = $row[0];
         //$semester_name = $row[1];
         $level_name = $row[1];
       }


// $workbook = new Spreadsheet_Excel_Writer('test.xls');
   $spreadsheet->getActiveSheet()->getPageSetup()->setRowsToRepeatAtTopByStartAndEnd(1,2);
//SETTING OF PAGE ORIETATION

    //$sheet->getPageSetup()->setOreintation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::PRIENTATION_LANSCAPE);
    $sheet_index=0;
    $spreadsheet->removeSheetByIndex(0);

    $spreadsheet->createSheet();
// Add some data
    $spreadsheet->setActiveSheetIndex($sheet_index);
    // $sheet_index++;

    $sheet = $spreadsheet->getActiveSheet();

    $spreadsheet->getActiveSheet()->setCellValue('A1', "BAYERO UNIVERSITY, KANO");
    $spreadsheet->getActiveSheet()->setCellValue('A2', 'FACURLTY OF AGRICULTURE');
    $spreadsheet->getActiveSheet()->setCellValue('A3', 'DEPARTMEN OF AGRICULTURAL ECONOMICS AND EXTENSION');
    //if ($semester == 1) {
        //$semester_name = "FIRST SEMESTER";
    // }
    // else
    // {
        //$semester_name = "SECOND SEMESTER";
    //}
   $spreadsheet->getActiveSheet()->setCellValue('A4', "SUBMISSION TO THE SENATE THROUGH SBC ( RESULT SUMMARY)");
    //$date = date('l\, jS F Y');
    //$spreadsheet->getActiveSheet()->mergeCells('A5:H5');
   $spreadsheet->getActiveSheet()->setCellValue('A5', 'PROGRAMME: '.$programme_name."  Session: ". $session_name. "     Semester: ".$semester_name.  "    Level:  ".$level_name. "     Date:".date("d, M, Y") );
 $spreadsheet->getActiveSheet()->getStyle('A5')->applyFromArray($styleArray_tableBody_Center);
//$moe ="Fulltime";
 //$sheet->setCellValue('B6', );
 //$sheet->setCellValue('E6','Category: '.$moe );

 //    $spreadsheet->getActiveSheet()->mergeCells('A4:E4');
    // $spreadsheet->getActiveSheet()->getStyle('A4')->getAlignment()->setShrinkToFit(true);
//setting style as defined above from line 27

 //setting style as define above for centrelising Header
    $spreadsheet->getActiveSheet()->getStyle("A1:H4")->applyFromArray($styleArray_Header);
    $spreadsheet->getActiveSheet()->getStyle("A1:H5")->applyFromArray($styleArray_Header2);

   //setting logo
    $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
    $drawing->setName('Logo');
    $drawing->setDescription('Logo');
    $drawing->setPath('./images/logo.png');
    $drawing->setWorksheet($spreadsheet->getActiveSheet());
    $drawing->setCoordinates('A1');
    $drawing->setHeight(70);



    //SPACING
    $sheet->getColumnDimension('A')->setWidth(4);
    $sheet->getColumnDimension('B')->setWidth(18);
    $sheet->getColumnDimension('C')->setWidth(20);
    $sheet->getColumnDimension('D')->setWidth(8);
    $sheet->getColumnDimension('E')->setWidth(8);
    $sheet->getColumnDimension('F')->setWidth(8);
    if ($semester_id == 1 && $level_id != 5) {
    $sheet->getColumnDimension('G')->setWidth(30);
      
    }elseif ($level_id == 5) {
    
    	$sheet->getColumnDimension('G')->setWidth(8);
    	$sheet->getColumnDimension('J')->setWidth(30);

    } else {

	    $sheet->getColumnDimension('G')->setWidth(8);
	    $sheet->getColumnDimension('H')->setWidth(30);

    }

// $subjects = "";  //header for the result table
//      $subj = "";
//      $credits = "";

   //LEVEL 5 HEADINGS
   	if ($level_id == 5) {
    $spreadsheet->getActiveSheet()->mergeCells('D6:F6');

	   $spreadsheet->getActiveSheet()->setCellValue('D6', "CREDITS EARNED");
	   $spreadsheet->getActiveSheet()->setCellValue('D7', "L3");
	   $spreadsheet->getActiveSheet()->setCellValue('E7', "L4");
	   $spreadsheet->getActiveSheet()->setCellValue('F7', "L5");
		
		} 	
			//
			//SELECT b.level_id, sum(a.credit_unit) as total_credits, c.regno FROM exams b JOIN course a ON a.id = b.course_id JOIN student c ON c.id =b.stud_id join level d on d.id = b.level_id GROUP BY b.level_id, b.stud_id WHERE exam_id != 0
		   
      $style_num_row = $num_student;
      $list_courses = [];
      $scores = '';
  $sn = 1;
    $sn1 = 1;
           $courseData =[] ;
    $id = 0;
  
  
  $heading = ''; $student_scores = ''; $scores_count = '';
  $s =''; $r =''; $d ='';$f =''; $l =''; $sem1 ='';$sem2 ='Second'; $ses =''; $p = '';$stce =0; $stpe;$name =''; $regno = ''; $carry_over ='';

  $score =0; $course =''; $code =''; $course_name ='';$credit =''; $tcr =0; $tce =0; $tpe =0; $grade = ''; $point = 0; $gp =0; $gpa = 0.00; $co_count = 0; $class = ''; $cgpa =0; $n_f = 0; $n_u = 0; $n_l =0; $n_p = 0; $l3 = 0; $l4 = 0; $l5 = 0;
  $heading = "S/N,REG. NUMBER,NAME";
     if ($level_id == 5) {
       
     	$heading .=",100,100,100,TCE,MCR";

        }  

		if ($level_id != 5) { 

			 		
			 		

    $heading .=",TCR,TCE,GPA";
}
     if ($semester_id == 2 || $level_id == 5) {
         
         $heading .= ",CGPA";
        
        } 

        $heading .= ",Course to Carry Over,remarks";
  // Heading

         $heading_record = explode(",", $heading);
    //$sub_credit =explode(",", $credits);
    //$sub_subject = explode(",", $subj); //get all the subjects in array
    $heading_count = count($heading_record);
    // $subj_count = count($sub_subject);  // no of subjects
    // $header = array("S/N","REGNO","NAME","COURSES");

    $sheet->fromArray($heading_record, NULL, 'A8');

$col = '';
    if ($heading_count == 4) {
        
            $col = 'D';

    }

    if ($heading_count == 5) {
        
            $col = 'E';

    } 

    if ($heading_count == 6) {
        
            $col = 'F';

    }

    if ($heading_count == 7) {
        
            $col = 'G';

    }
    if ($heading_count == 8) {
        
            $col = 'H';

    }

    if ($heading_count == 9) {
        
            $col = 'I';

    }

    if ($heading_count == 10) {
        
            $col = 'J';

    }
    if ($heading_count == 11) {
        
            $col = 'K';

    }
    if ($heading_count == 12) {
        
            $col = 'L';

    }

    if ($heading_count == 13) {
        
            $col = 'M';

    }

    if ($heading_count == 14) {
        
            $col = 'N';

    }

    if ($heading_count == 15) {
        
            $col = 'O';

    }
    if ($heading_count == 16) {
        
            $col = 'P';

    }

    if ($heading_count == 17) {
        
            $col = 'Q';

    }
    //DATA TO FILL THE EXCEL CELL
    //$sheet->fromArray($heading_record, NULL, 'A7');
    // $sheet->fromArray($sub_credit, NULL, 'D11');

// Formatting worksheet
    $spreadsheet->getActiveSheet()->mergeCells('A1:'.$col.'1');
    $spreadsheet->getActiveSheet()->mergeCells('A2:'.$col.'2');
    $spreadsheet->getActiveSheet()->mergeCells('A3:'.$col.'3');
    $spreadsheet->getActiveSheet()->mergeCells('A4:'.$col.'4');
    $spreadsheet->getActiveSheet()->mergeCells('A5:'.$col.'5');
    // $spreadsheet->getActiveSheet()->mergeCells('A6:'.$col.'6');

    $style_num_row = $num_student+8;
       $sheet->getStyle("A8:".$col.'8')->applyFromArray($styleArray_tableHeader);
       $sheet->getStyle("D8:F".$style_num_row)->applyFromArray($styleArray_tableBody_Center);

       if ($semester_id == 2) {

       $sheet->getStyle("D8:G".$style_num_row)->applyFromArray($styleArray_tableBody_Center);

         
       }
       $sheet->getStyle("A8:".$col.$style_num_row)->applyFromArray($styleArray_tableBody);

    
    // $student_id = []; 
         $q = "SELECT b.`stud_id` FROM `exams` b JOIN student a ON b.`stud_id` = a.id WHERE b.`session_id` = '$session_id' AND b.`level_id` =  '$level_id' and b.`semester_id` = '$semester_id'" ;
      $result = mysqli_query($con, $q);
    $i = 0;
      while ($row = mysqli_fetch_array($result)) {
        if ($i < $num_student) {
         $courseData[$i] = $row[0];
        }
        

        $i++;
      }   

      for ($i=0; $i < $num_student; $i++) { 
        $id = $courseData[$i];
      
        
        
        
      $query = "SELECT b.score, h.course_code, h.course_name, h.credit_unit, a.student_name, a.regno FROM `exams` b INNER JOIN student a ON a.id = b.stud_id INNER JOIN course h ON h.id = b.course_id WHERE b.stud_id = '$id' AND b.session_id = '$session_id' AND b.semester_id = '$semester_id'";
    
    $result = mysqli_query($con, $query);
     while ($rows = mysqli_fetch_array($result)) {
      $score = $rows [0];
      if($score < 40 ){
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
        if ($grade == 'A') {
          $tce += $rows [3];
        $point = 7*5;
        $gp = 5;

      } elseif ($grade == 'B') {
        $tce += $rows [3];
        $point = 7*4;
        $gp = 4;

      } if ($grade == 'C') {
        $tce += $rows [3];
        $point = 7*3;


        $gp = 3;

      } elseif ($grade == 'D') {
        $point = 7*2;
        $tce += $rows [3];
        $gp = 2;

      } elseif ($grade == 'E') {
        $tce += $rows [3];
        $point = 7*1;
        $gp = 1;

      }  elseif ($grade == 'F' ) {
        $tce +=0;
        $point = 7*0;
        $gp = 0;
        $carry_over .= $rows[1].', ';
        $co_count += 1;
      } }   

      elseif ($rows [3] == 6) {
        if ($grade == 'A') {
          $tce += $rows [3];
        $point = 6*5;
        $gp = 5;

      } elseif ($grade == 'B') {
        $tce += $rows [3];
        $point = 6*4;
        $gp = 4;

      } if ($grade == 'C') {
        $tce += $rows [3];
        $point = 6*3;


        $gp = 3;

      } elseif ($grade == 'D') {
        $point = 6*2;
        $tce += $rows [3];
        $gp = 2;

      } elseif ($grade == 'E') {
        $tce += $rows [3];
        $point = 6*1;
        $gp = 1;

      }  elseif ($grade == 'F' ) {
        $tce +=0;
        $point = 6*0;
        $gp = 0;
        $carry_over .= $rows[1].', ';
        $co_count += 1;
      }    
      }elseif ($rows [3] == 4) {
        if ($grade == 'A' ) {
          $tce += $rows [3];
        $point = 4*5;
        $gp = 5;

      } elseif ($grade == 'B') {
        $tce += $rows [3];
        $point = 4*4;
        $gp = 4;

      } if ($grade == 'C') {
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
        $carry_over .= $rows[1].', ';
        $co_count += 1;
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

      } elseif ($grade == 'D') {
        $tce += $rows [3];
        $point = 3*2;
        $gp = 2;

      } elseif ($grade == 'E') {
        $tce += $rows [3];
        $point = 3*1;
        $gp = 1;

      }  elseif ($grade == 'F') {
        $tce += 0;
        $point = 3*0;
        $gp = 0;
        $carry_over .= $rows[1].', ';
        $co_count += 1;

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
        $carry_over .= $rows[1].', ';
        $co_count += 1;

      }    
      }
        $tcr += $rows [3];
        $tpe += $point;
        $sem1 = '';
        $regno =  $rows [5];
        $name = $rows [4];
         // echo $id++;
      }
       
        if ($level_id == 5) {
      	$scores = $sn.",".$regno.",".$name; 
        }	
          
            $row_tce1 = 0;
            $sum_tce = 0;
        if ($level_id != 5) {
           $scores = $sn.",".$regno.",".$name.",".$tcr; 

          //To continue tommorow by Allah's Grace 
          // SELECT * FROM `gps` WHERE session_id < 41 AND semester_id =1 and student_id =1 ORDER BY id DESC LIMIT 1
          $query = "SELECT * FROM `gps` WHERE student_id = '$id' AND session_id < '$session_id' AND semester_id = 2 ";
          $result = mysqli_query($con, $query);
          $sppe = 0;$spcr =0;
          while ($rows = mysqli_fetch_array($result)) {
            
            $scores .=",".$rows['tce'];
            $sum_tce += $rows['tce'];
          }
          $sum_tce += $tce;
          //  $query = "SELECT * FROM `gps` WHERE student_id = '$id' AND session_id < '$session_id' AND semester_id = 2 ";
            // $result = mysqli_query($con, $query);
            // $sppe = 0;$spcr =0;
          //  while ($rows = mysqli_fetch_array($result)) {
          //    if (condition) {
          //      # code...
          //    }
              
          //    echo('<th class="head">'.$rows['tce'].'</th>');
          //  }
        
       //$scores .= ",".$tce; 
        } 
        
          
if ($level_id != 5) {
		 			
			 		
		 	
           if ($tcr == 0) {
            $scores.=",ABS";
          } 

          if ($tce == '') {
            $scores.=",ABS";
          
          } 

           else{ $scores.=",".$tce; }

          if ($tpe != 0) {
           
            $gpa =($tpe/$tcr);
            // function to test whether a number is an integer.
          
            
            $scores.=",".$gpa;
            }

            
         

           else {
              $scores.=",ABS";
            
          } 
           
} else {
	//           //To continue tommorow by Allah's Grace 
           // SELECT * FROM `gps` WHERE session_id < 41 AND semester_id =1 and student_id =1 ORDER BY id DESC LIMIT 1
          $q = "SELECT SUM(a.credit_unit), b.level_id FROM `exams` b JOIN course a ON b.`course_id` = a.id WHERE b.score > 39 AND b.stud_id = '$id' GROUP by b.level_id" ;
      $result = mysqli_query($con, $q);
    //$i = 0;
      $mcr = 0;
      while ($row = mysqli_fetch_array($result)) {
        $mcr +=$row[0];

        if ($row[1] == 3) {
         

           $l3 =  $row[0];  

         
        }
        
        if ($row[1] == 4) {
        

           $l4 =  $row[0];  
        }


        if ($row[1] == 5) {
        

           $l5 =  $row[0];  
        }
      }  
      $gtce = $l3+$l4+$l5;
      $scores.= ",".$l3.",".$l4.",".$l5.",".$gtce.",97";

}
    $c = date("Y");
    $p = $c-1;
    $student_id = $id;
    $current_session = $p."/".$c;  $current_session_id =''; $sppe1 = 0; $spcr1 = 0;
    $query = "SELECT  id FROM `session`WHERE  session_name = '$current_session' ";
    $result = mysqli_query($con, $query);
    $sppe = 0;$spcr =0;
      while ($rows = mysqli_fetch_array($result)) {
        
        $current_session_id = $rows['0'];
      }

     if ($level_id == 3) {

		 		$query = "SELECT *  FROM `gps`WHERE  student_id = '$id'  ";
		 $result = mysqli_query($con, $query);
		 $sppe = 0;$spcr =0;
		 if( mysqli_num_rows($result) != 0){
		 	while ($rows = mysqli_fetch_array($result)) {
		 		// getting the sum of previous point and credit earns as sppe and spce
		 		
		 			if (  $rows['session_id'] == $session_id  AND $semester_id == 2) {
		 				
		 		$sppe += $rows['tpe'];  $spcr += $rows['tcr'];

		 			}
		 		} 
		 	}

		 		
		 	} else {
		 $query = "SELECT *  FROM `gps`WHERE  student_id = '$id'  ";
		 $result = mysqli_query($con, $query);
		 $sppe = 0;$spcr =0;
		 if( mysqli_num_rows($result) != 0){
		 	while ($rows = mysqli_fetch_array($result)) {
		 		// getting the sum of previous point and credit earns as sppe and spce
		 		
		 			if (  $rows['session_id'] < $session_id ) {
		 				continue;
		 			} else{
		 		
		 		$sppe += $rows['tpe'];  $spcr += $rows['tcr'];

		 			}
		 		} 
		 	}

		 		 $query = "SELECT *  FROM `gps`WHERE  student_id = '$id'  ";
		 $result = mysqli_query($con, $query);
		 
		 if( mysqli_num_rows($result) != 0){
		 	while ($rows = mysqli_fetch_array($result)) {
		 		// getting the sum of previous point and credit earns as sppe and spce
		 		
		 			if (  $rows['session_id'] == $session_id AND $semester_id == 2) {
		 				continue;
		 			} else{
		 		
		 		$sppe1 += $rows['tpe'];  $spcr1 += $rows['tcr'];

		 			}
		 		}  
		 	}
		 	} 
		 	 $sppe +=$sppe1;  $spcr +=$spcr1;
   if ($semester_id == 2 OR $level_id == 5) {
            if ($sppe != 0) {
            	
           

                     if ($level_id == 5) {
				 	 		
				 	 		$cgpa =($sppe+$tpe)/($spcr+$tcr);

				 	 	} else{

				 	 		$cgpa =($sppe)/($spcr);
				 	 	
			}
            // function to test whether a number is an integer.
                      
			 }
              
              $scores.=",".$cgpa;
              //echo($scores);
            }
             

          
             
 
          
          
          
          
$query = "SELECT * FROM `gps`WHERE session_id = '$session_id' AND student_id = '$student_id' AND semester_id = '$semester_id'";
       $result = mysqli_query($con, $query);
       if (mysqli_num_rows($result) != 0) {
        while ($rows = mysqli_fetch_array($result)) {
          if ($tpe != $rows['tpe'] AND $tcr != $rows['tcr'] ) {
            $student_id = $rows['id'];
            //echo "update";
            $update = "UPDATE `gps` SET tpe = '$tpe', tcr = '$tcr' WHERE student_id = '$student_id' ";
             mysqli_query($con, $update);
          } else{
            //echo "Record exist";
          }
        }
        
        }else {
          if ($semester_id == 2) {
            $tce_2 = 0;
          $query_tce = "SELECT tce FROM `gps` WHERE session_id = '$session_id'  AND semester_id = 1 and student_id ='$student_id' ORDER BY id DESC LIMIT 1";
          $result_tce = mysqli_query($con, $query_tce);
          while ($row_tce = mysqli_fetch_array($result_tce)) {
             $tce_2 = $row_tce['tce'];  
          }
          $tce_2 += $tce;
            $query = "INSERT INTO `gps` (student_id, tce, sum_tce, tcr, tpe, session_id, semester_id) VALUES ('$student_id', '$tce', '$tce_2', '$tcr', '$tpe', '$session_id', '$semester_id')";
        mysqli_query($con, $query);
          
          } else{
        $query = "INSERT INTO `gps` (student_id, tce, tcr, tpe, session_id, semester_id) VALUES ('$student_id', '$tce', '$tcr', '$tpe', '$session_id', '$semester_id')";
         mysqli_query($con, $query);
         if($cgpa < 1 AND $semester_id == 2){

          $query = "SELECT * FROM `gps` WHERE student_id = '$student_id' AND semester_id = 2 AND session_id = '$session_id'";
              if ($num_rows = mysqli_num_rows( mysqli_query($con, $query)) == 1) {
           $update = "UPDATE `gps` SET status = 1 WHERE student_id = '$student_id' ";
             mysqli_query($con, $update);
         }
       }

       }
      } 
      //$count++;
    
    
      //INSERTING OF STUDENT SCORE INTO EXCEL CELL
      $row = $sn+8;

      // echo($scores)."<br>";
      $student_scores = explode(",", $scores);
      // print_r($student_scores);
    // //$sub_credit =explode(",", $credits);
    // //$sub_subject = explode(",", $subj); //get all the subjects in array
    $scores_count = count($student_scores);
    // // $subj_count = count($sub_subject);  // no of subjects
    // // $header = array("S/N","REGNO","NAME","COURSES");

    $sheet->fromArray($student_scores, NULL, 'A'.$row);

      $tce = 0; $tcr = 0; $tpe = 0; 

      $c_o = '';
      $query = '';
    if ($level_id == 5) {

							$query = "SELECT a.course_id, b.course_code FROM carry_over a JOIN course b on a.course_id = b.id WHERE  a.stud_id = '$id' AND a.status = 0";
						} else {

				 	$query = "SELECT a.course_id, b.course_code FROM carry_over a JOIN course b on a.course_id = b.id WHERE a.session_id = '$session_id' AND a.semester_id = '$semester_id' AND a.level_id = '$level_id' AND a.stud_id = '$id' AND a.status = 0";

				 	}
          $result = mysqli_query($con, $query);
          $num_rows = mysqli_num_rows($result);
          $count = 0;
          while ($rows = mysqli_fetch_array($result)) {
            $count++;
            $c_o .= $rows[1];
            if ($count < $num_rows) {
              $c_o .=(', ');
              $r_count = $count/3;
              //echo($id);
            }
          } 
           //echo $c_o;
          if ($semester_id == 2){
    	$spreadsheet->getActiveSheet()->setCellValue('H'.$row, $c_o);
    	} 

    	if ($level_id == 5){

    	$spreadsheet->getActiveSheet()->setCellValue('J'.$row, $c_o);


    	}
    	if ($semester_id == 1 && $level_id != 5) {
    		
    	$spreadsheet->getActiveSheet()->setCellValue('G'.$row, $c_o);

    	}
    	//how to set line break in excel
    	//CA$sheet->getStyle('C'.$row)->getAlignment()->setWrapText(true);
    		$sheet->getStyle('C'.$row)->getAlignment()->setWrapText(true);

    	if ($semester_id == 1 && $level_id != 5) {
    	$sheet->getStyle('G'.$row)->getAlignment()->setWrapText(true);
    		
    	}elseif ($level_id == 5) {
    
    		$sheet->getStyle('J'.$row)->getAlignment()->setWrapText(true);
    		
    	} else {
    		
    		$sheet->getStyle('H'.$row)->getAlignment()->setWrapText(true);

    	}
      	$sn++;   

      

      	$sn1++;
      
        
        }
      
              
      
      // echo($scores)."<br>";
    


   // $level = $level+1;
//     $spreadsheet->getActiveSheet()->setTitle('1st Semester');



// code that output the result summary in excel format
header('Content-Type: application/vnd.ms-excel');
// // $filen= str_replace('/', '_', $regno);
$filen=$level_name."_".$session_name. "_Summary";
header('Content-Disposition: attachment;filename='.$filen.'.xls');
// // header('Content-Disposition: attachment;filename="GeneratedFile.xlsx"');
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
// // $writer->save('helloworld.xlsx');
// // $writer->save('php://output');
$writer->save('php://output');


    // }
//     else
//     {
//         $_SESSION['R'] ='N';
//         $url = 'gdownload.php?id=3';
//         ob_end_clean(); // Delete the buffer.
//         header("Location: $url");
//         exit(); // Quit the script.

//     }

// }
// elseif ($nature == "Summary") {
//    $spreadsheet = new Spreadsheet();
// // Style for worksheet
//     $styleArray_tableHeader = [
//         'font' => [
//             'bold' => true,
//         ],
//         'alignment' => [
//             'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
//         ],
//         'borders' => [
//             'allBorders' => [
//                 'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
//             ],
//         ],
//         'fill' => [
//             'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR,
//             'rotation' => 90,
//             'startColor' => [
//                 'argb' => 'FFA0A0A0',
//             ],
//             'endColor' => [
//                 'argb' => 'FFFFFFFF',
//             ],
//         ],
//     ];

//     $styleArray_Header = [
//         'font' => [
//             'bold' => true,
//             'size' => 13,
//         ],
//         'alignment' => [
//             'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
//         ],
//     ];
//     $styleArray_tableBody = [
//         'borders' => [
//             'allBorders' => [
//                 'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
//             ],
//         ],
//     ];
//     $styleArray_tableBody_Center = [
//         'alignment' => [
//             'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
//         ],
//     ];

//     $styleArray_student_Info = [
//         'font' => [
//             'bold' => true,
//             'size' => 14,
//         ],
//     ];

//     $styleArray_hidden = [
//         'font' => [
//             'color' => array('rgb' => 'FFFFFF'),
//             'size'  => 1,
//         ],
//     ];
// // $workbook = new Spreadsheet_Excel_Writer('test.xls');
//    $spreadsheet->getActiveSheet()->getPageSetup()->setRowsToRepeatAtTopByStartAndEnd(1,2);

//     $sheet_index=0;
//     $spreadsheet->removeSheetByIndex(0);

//     $spreadsheet->createSheet();
// // Add some data
//     $spreadsheet->setActiveSheetIndex($sheet_index);
//     // $sheet_index++;
// $semester = 2;
//     $sheet = $spreadsheet->getActiveSheet();

//     $spreadsheet->getActiveSheet()->setCellValue('A1', "BAYERO UNIVERSITY, KANO");
//     $spreadsheet->getActiveSheet()->setCellValue('A2', $school);
//     $spreadsheet->getActiveSheet()->setCellValue('A3', $name1);
//     if ($semester == 1) {
//         $semester_name = "FIRST SEMESTER";
//     }
//     else
//     {
//         $semester_name = "SECOND SEMESTER";
//     }
//     $spreadsheet->getActiveSheet()->setCellValue('A4', "SUBMISSION TO THE SENATE THROUGH SBC THROUGH (RESULT SUMMARY)");
//     $date = date('l\, jS F Y');
//     $spreadsheet->getActiveSheet()->mergeCells('A5:M5');
//    $spreadsheet->getActiveSheet()->setCellValue('A5', "Session: ". $session . "     Semester: 1st and 2nd    Level:".$level. "     Date:". $date );
//  $spreadsheet->getActiveSheet()->getStyle('A5')->applyFromArray($styleArray_tableBody_Center);


// $sheet->setCellValue('B6','PROGRAMME: '.$programme_name );
// $sheet->setCellValue('E6','PROGRAMME: '.$moe );
// // Formatting worksheet
//     $spreadsheet->getActiveSheet()->mergeCells('A1:M1');
//     $spreadsheet->getActiveSheet()->mergeCells('A2:M2');
//     $spreadsheet->getActiveSheet()->mergeCells('A3:M3');
//     $spreadsheet->getActiveSheet()->mergeCells('A4:M4');
//  //    $spreadsheet->getActiveSheet()->mergeCells('A4:E4');
//     // $spreadsheet->getActiveSheet()->getStyle('A4')->getAlignment()->setShrinkToFit(true);
// //setting style as defined above from line 27

//  //setting style as define above for centrelising Header
//     $spreadsheet->getActiveSheet()->getStyle("A1:M5")->applyFromArray($styleArray_Header);
//     $no_students=0;
//     $no_std_co=0;
//     $no_std_probation=0;
//     $no_std_withdrwan=0;
//     $no_std_incomplete=0;
//     $no_std_abs = 0;

//    //setting logo
//     $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
//     $drawing->setName('Logo');
//     $drawing->setDescription('Logo');
//     $drawing->setPath('./images/logo.png');
//     $drawing->setWorksheet($spreadsheet->getActiveSheet());
//     $drawing->setCoordinates('A1');
//     $drawing->setHeight(70);


//     //SPACING
//     $sheet->getColumnDimension('A')->setWidth(4);
//     $sheet->getColumnDimension('B')->setWidth(18);
//     $sheet->getColumnDimension('C')->setWidth(20);
//     $sheet->getColumnDimension('D')->setWidth(10);

//   $headerdata = "S/N;Jamb No; Reg No;Name; L1;L2;L3;L4;L5;L6;TCE;MCR;CGPA;Carry Over;Outstanding Courses;REMARKS";
//   $header = explode(";", $headerdata);
//   $sheet->fromArray($header, NULL, "A10");
//   $sheet->getStyle("A10:P10")->applyFromArray($styleArray_tableHeader);


//      $q1 = "SELECT distinct scores.regno, biodata.name, biodata.jambno FROM `scores` inner join biodata on scores.regno = biodata.regno  where scores.session = '$session' and scores.level = '$level' and program_id = '$programme'  and biodata.moe = '$moe' order by subject ASC ";
//      $subjects = "";  //header for the result table
//      $subj = "";

//      $credits = "";
//      $r1 = mysqli_query($dbc,$q1);
//      if (mysqli_num_rows($r1) > 0) {
//         //header for the result table
//       $level_array =array();
//       $level_array = ['100' , '200', '300', '400', '500', '600'];
//       $serial=0;
//       while ($row1=mysqli_fetch_array($r1))
//       {
//         $passmark = 0;
//         $regno = $row1['regno'];
//         $name = $row1['name'];
//         $jambno = $row1['jambno'];
//         $serial+=1;
//         $outstanding_course="";
//         $co="";
//         $ABS="";
//         $INC="";
//         //variables for cgpa calculaions
//         $total_credits_earned=0;
//         $total_credits_registered=0;
//         $cgpa=0;
//         $cgpa_point=0;

//         $no_subj=0;
//         $no_abs  = 0;



//         // Checking $passmark
//         $q = "Select Distinct level_id from scores where regno = '$regno' and level = '$level'
//         and semester = '$semester' and `session` = '$session' ";
//         $r = mysqli_query($dbc, $q);
//         if (mysqli_num_rows($r) == 1)
//         {
//           if ($rr=mysqli_fetch_array($r))
//           {
//              $passmark = $rr['level_id'];
//           }

//         }


//         $stud_record_1 =$serial.";". $jambno.";".$regno.";".$name.";";

//         for ($i=100; $i <= 600; $i=$i+100)
//         {
//           $credits_earned = 0;
//           $q2="SELECT distinct subject, tblcourses.credit,`tblcourses`.`status`, tblcourses.level
//           FROM `scores` inner join tblcourses on scores.subject = tblcourses.coursecode
//           where regno = '$regno' and tblcourses.level = '$i' order by subject ASC";
//           $r2=mysqli_query($dbc, $q2);
//           if (mysqli_num_rows($r2)> 0)
//           {
//             $status = "Optional";
//             while ($row2=mysqli_fetch_array($r2))
//             {
//               $code = $row2['subject'];
//               $status = $row2['status'];

//               $q3 = "SELECT scores.*, tblcourses.credit, tblcourses.level as course_level
//               FROM `scores` inner join tblcourses on scores.subject = tblcourses.coursecode
//               where regno = '$regno' and tblcourses.level = '$i'
//               and scores.subject = '$code' ORDER BY `scores`.`session` ASC";
//                $r3 = mysqli_query($dbc, $q3);
//                if (mysqli_num_rows($r3) > 0 )
//                {
//                  while ($row3=mysqli_fetch_array($r3))
//                  {


//                    $pass_core_course = true;

//                    $grade =trim($row3['grade']);

//                    $credit = trim($row3['credit']);
//                    $total_credits_registered+=intval($credit); //obtaining total credits registerd for cgpa
//                    $result_level = trim($row3['level']);


//                    if ($grade == 'A' || $grade == 'B' || $grade == 'C' || $grade == 'D' || $grade =='E')
//                    {
//                      if ($level== $result_level)
//                       {
//                         $no_subj+=1;
//                       }
//                      $credits_earned += intval($credit);
//                      $total_credits_earned+=intval($credit);
//                    }
//                    else
//                    {
//                      $pass_core_course = false;
//                      if ($level== $result_level)
//                       {
//                         $no_subj+=1;

//                         if ($grade == "F")
//                         {
//                           $co.=$code.",";
//                         }
//                         elseif ($grade == "ABS") {
//                            $ABS.=$code.",";
//                            $co.=$code.",";
//                            $no_abs+=1;
//                         }
//                         elseif ($grade == "INC") {
//                           $INC .=$code.",";
//                         }
//                       } // checking current carry over

//                    }   // else part for  testing  failed course

//                  }  /// end of while for r3 result per course

//                  if (($status == 'Compulsory') and ($pass_core_course == false))
//                  {
//                      $outstanding_course .= $code.",";
//                      $pass_core_course = true;
//                      $status = "Optional";
//                  }  // taking Outstanding courses
//                }// end of num_rows for r3 result per course
//             } // end of while for  r2 distinct courses
//             $stud_record_1 = $stud_record_1. $credits_earned. ";";
//           } // end of if for r2 checking result for a level
//           else  //  if no result for a giving level
//           {
//           $stud_record_1 = $stud_record_1. "". ";";
//           }

//         }  // end of for for levels
//         $remarks = "";
//         // if (!empty($INC))
//         // {
//         //   $remarks = "Incomplete in " . $INC;
//         // }

//         // calculation for CGPA

//         $cu_cgpa = 0;
//         $tcu_cgpa=0;
//         $tce_cgpa = 0;
//      $tcu_cgpa2 =0;

//      $q5 = "SELECT biodata.regno, biodata.name, biodata.program_id, scores.subject,tblcourses.credit,scores.score,scores.grade, scores.session, scores.semester, scores.level FROM `scores` inner join (biodata, tblcourses) on scores.regno = biodata.regno and scores.subject = tblcourses.coursecode where  scores.level <= '$level' and scores.regno = '$regno'";
//      $r5 = mysqli_query($dbc, $q5);
//      if (mysqli_num_rows($r5) > 0)
//      {
//           $twp_cgpa=0;
//          while ($row5= mysqli_fetch_array($r5))
//          {
//              $cu_cgpa = 0;
//              $cgpa_grade =0;


//              $cu_cgpa = $row5['credit'];
//              $cgpa_grade = strtoupper($row5['grade']);
//              //total credit registered
//              if ($cgpa_grade != "I") {
//                 $tcu_cgpa2= $tcu_cgpa2 + $cu_cgpa;
//              }

//             $tcu_cgpa = $tcu_cgpa + $cu_cgpa;

//              if ($cgpa_grade == "A") {

//              $twp_cgpa = $twp_cgpa + 5*$cu_cgpa ;
//              $tce_cgpa = $tce_cgpa + $cu_cgpa ;

//              }
//              elseif ($cgpa_grade == "B+")
//              {

//              $twp_cgpa = $twp_cgpa + 4.5*$cu_cgpa ;
//              $tce_cgpa = $tce_cgpa + $cu_cgpa ;
//              }
//              elseif ($cgpa_grade == "B")
//              {

//              $twp_cgpa = $twp_cgpa + 4*$cu_cgpa ;
//              $tce_cgpa = $tce_cgpa + $cu_cgpa ;
//              }
//              elseif ($cgpa_grade == "C+")
//              {

//                  $twp_cgpa = $twp_cgpa + 3.5*$cu_cgpa ;
//                  $tce_cgpa = $tce_cgpa + $cu_cgpa ;
//              }
//              elseif ($cgpa_grade == "C")
//              {

//                  $twp_cgpa = $twp_cgpa + 3*$cu_cgpa ;
//                  $tce_cgpa = $tce_cgpa + $cu_cgpa ;
//              }
//              elseif ($cgpa_grade == "D")
//              {

//                  $twp_cgpa = $twp_cgpa + 2*$cu_cgpa ;
//                  $tce_cgpa = $tce_cgpa + $cu_cgpa ;
//              }
//              elseif ($cgpa_grade == "E")
//              {

//                  $twp_cgpa = $twp_cgpa + 1*$cu_cgpa ;
//                  $tce_cgpa = $tce_cgpa + $cu_cgpa ;
//              }
//              elseif ($cgpa_grade == "ABS")
//              {
//                  // $co.=$row5['subject']."(ABS) ";
//                  $twp_cgpa =$twp_cgpa + 0;
//              }
//               elseif ($cgpa_grade == "INC")
//              {
//                  // $co.=$row5['subject']."(ABS) ";
//                  $twp_cgpa =$twp_cgpa + 0;
//              }
//              else
//              {
//                  // $co.=$row5['subject']." ";

//                  $twp_cgpa =$twp_cgpa + 0;
//              }


//          }

//                    if ($tcu_cgpa2==0) {
//                      $cgpa = 0;
//                    }
//                    else
//                    {
//                      $cgpa = number_format($twp_cgpa/$tcu_cgpa2, 2);
//                    }

//                    if ($cgpa < 1 and empty($INC) and ($passmark ==40)) {
//                      // $no_std_probation +=1;
//                    }elseif ($cgpa < 1.5 and empty($INC) and ($passmark ==45)) {
//                      // $no_std_probation +=1;
//                    }

//      }
//                       //ending calculating cgpa

//                       // remarks section


//                       if ($no_abs == $no_subj and $no_abs !== 0)
//                       {
//                            $remarks="Recommended for withdrawal for being absent throughout the examinations without valid reason";
//                            $no_std_withdrwan+=1;
//                              $no_std_co+=1;
//                              $no_std_abs+=1;

//                       }
//                       // elseif ((($scu)/3 < $no_failed_credits))
//                       // {
//                       //     $remarks="To withdraw for failing more than 1/3 of the total credits registered";
//                       // }
//                       else
//                       {
//                           if (empty($co) and empty($INC) and empty($ABS))
//                           {
//                             $remarks="";


//                           }
//                           if (!empty($INC) and !empty($ABS))
//                           {
//                              // $stud_record_1
//                              $remarks.="Granted incomplete in ".$INC . " and ABS in ".$ABS;
//                              $no_std_abs+=1;
//                              $no_std_co+=1;
//                              $no_std_incomplete+=1;
//                           }
//                           if (!empty($ABS) and empty($INC))
//                           {
//                               $remarks.="ABS in ".$ABS;
//                               $no_std_abs+=1;
//                               $no_std_co+=1;
//                               // if ($cgpa < 1 and empty($IN) and ($passmark ==40) ) {
//                               //   $remarks.=" On Probation ";
//                               // }
//                               // elseif ($cgpa < 1.5 and empty($IN) and ($passmark ==45) ) {
//                               //   $remarks.=" On Probation ";
//                               // }
//                           }
//                           if (empty($ABS) and !empty($INC))
//                           {
//                               $remarks.="Granted incomplete in ".$INC;

//                                 $no_std_incomplete+=1;


//                           }
//                           if (!empty($co))
//                           {
//                              // $stud_record_1.=$co;
//                               $no_std_co+=1;


//                           }
//                           if ($cgpa < 1 and empty($INC) and ($passmark ==40) ) {
//                           $remarks.=" On Probation ";
//                         }
//                         elseif ($cgpa < 1.5 and empty($INC) and ($passmark ==45) ) {
//                           $remarks.=" On Probation ";
//                         }
//                       }



//        $MCR="";
//           $stud_record_1 = $stud_record_1.$total_credits_earned.";".$MCR.";".$cgpa.";".$co.";".$outstanding_course.";". $remarks;
//           $highestRow = $spreadsheet->getActiveSheet()->getHighestRow();
//              $x=$highestRow+1;//first row
//           $stud_record_1_array = explode(";", $stud_record_1);

//            $sheet->fromArray($stud_record_1_array, NULL, 'A'.$x);
//       } // end of while  for distincts regno/ r1
//       $highestRow = $spreadsheet->getActiveSheet()->getHighestRow();
//          $x=$highestRow+1;//first row
//       //setting border to all cells
//         $spreadsheet->getActiveSheet()->getStyle('A10'.':P'.$x)->applyFromArray($styleArray_tableBody);

//     $level = $level+1;
//     $spreadsheet->getActiveSheet()->setTitle('1st Semester');




// header('Content-Type: application/vnd.ms-excel');
// // $filen= str_replace('/', '_', $regno);
// $filen=$semester."_".$session. "_Summary";
// header('Content-Disposition: attachment;filename='.$filen.'.xls');
// // header('Content-Disposition: attachment;filename="GeneratedFile.xlsx"');
// header('Cache-Control: max-age=0');

// $writer = new Xlsx($spreadsheet);
// // $writer->save('helloworld.xlsx');
// // $writer->save('php://output');
// $writer->save('php://output');


//     }
//     else
//     {
//         $_SESSION['R'] ='N';
//         $url = 'gdownload.php?id=3';
//         ob_end_clean(); // Delete the buffer.
//         header("Location: $url");
//         exit(); // Quit the script.

//     }

// }

?>
