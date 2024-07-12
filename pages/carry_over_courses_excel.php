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
    $styleArray_tableBody = [
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
            'size' => 12,
        ],
    ];

    $styleArray_hidden = [
        'font' => [
            'color' => array('rgb' => 'FFFFFF'),
            'size'  => 1,
        ],
    ];
// $workbook = new Spreadsheet_Excel_Writer('test.xls');
   $spreadsheet->getActiveSheet()->getPageSetup()->setRowsToRepeatAtTopByStartAndEnd(1,2);

    $sheet_index=0;
    $spreadsheet->removeSheetByIndex(0);

    $spreadsheet->createSheet();
// Add some data
    $spreadsheet->setActiveSheetIndex($sheet_index);
    // $sheet_index++;

    $sheet = $spreadsheet->getActiveSheet();

      $sn = 1;
      $_GET['semester_id'];
     //  echo $raw_id = $_GET['raw_id'];

     // // $raw = explode("&", $raw_id);
      $semester_id = $_GET['semester_id'];
      $session_id = $_GET['session_id'];
      $level_id = $_GET['level_id'];
      $num_student = $_GET['num_student'];
      $style_num_row = $num_student;
      $list_courses = '';
   
  $i = 0;
  $sn = 1;
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
   $spreadsheet->getActiveSheet()->setCellValue('A4', "SUBMISSION TO THE SENATE THROUGH SBC (RAW RESULT)");
    //$date = date('l\, jS F Y');
    //$spreadsheet->getActiveSheet()->mergeCells('A5:H5');
    $spreadsheet->getActiveSheet()->setCellValue('A5', 'PROGRAMME: B. Sc. AGRICULTURAL Extension'.    "  Session: ". $session_name. "     Semester: ".$semester_name.  "    Level:  ".$level_name. "     Date:".date("d, M, Y") );
 $spreadsheet->getActiveSheet()->getStyle('A5')->applyFromArray($styleArray_tableBody_Center);

 //    $spreadsheet->getActiveSheet()->mergeCells('A4:E4');
    // $spreadsheet->getActiveSheet()->getStyle('A4')->getAlignment()->setShrinkToFit(true);
//setting style as defined above from line 27

 //setting style as define above for centrelising Header
    $spreadsheet->getActiveSheet()->getStyle("A1:H5")->applyFromArray($styleArray_Header);


    // setting footer
    $sheet->getHeaderFooter()->setOddFooter('&LLevel Coordinator&CChief Examiner');
   //setting logo
    $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
    $drawing->setName('Logo');
    $drawing->setDescription('Logo');
    $drawing->setPath('./images/logo.png');
    $drawing->setWorksheet($spreadsheet->getActiveSheet());
    $drawing->setCoordinates('A1');
    $drawing->setHeight(70);


    //$spreadsheet->getActiveSheet()->getStyle("B6:E7")->applyFromArray($styleArray_student_Info);

    //SPACING
    $sheet->getColumnDimension('A')->setWidth(4);
    $sheet->getColumnDimension('B')->setWidth(18);
    $sheet->getColumnDimension('C')->setWidth(20);
    $sheet->getColumnDimension('D')->setWidth(10);


    // Line break in Excel
        $sheet->getStyle('B')->getAlignment()->setWrapText(true);
        $sheet->getStyle('D7')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP);
       



        $headings = '';
$headings .= "S/N,REG NUM, NAME, COURSE CODES AND SCORES";
    
 $heading_record = explode(",", $headings);
    //$sub_credit =explode(",", $credits);
    //$sub_subject = explode(",", $subj); //get all the subjects in array
    //$heading_count = count($heading_record);
  $student_id = []; $regno = 0;

    $sheet->fromArray($heading_record, NULL, 'A6');


$student_score = ''; $student_score_data = ''; $num_rows = 0; $num_rows_final = ''; $heading_count = ''; $row = 0;
    $result = mysqli_query($con,"SELECT DISTINCT stud_id  FROM `exams`  WHERE  session_id = '$session_id' AND semester_id = '$semester_id' AND level_id = '$level_id' AND examtype_id = 2");



  $i = 0; $sn = 1;
  while ($row = mysqli_fetch_array($result)) {
    
        //$student_id[$i] = $row[0];

        // echo($row[0]."<br>");

        $result1 = @mysqli_query($con,"SELECT b.regno, b.student_name, c.course_code, a.score  FROM `exams` a JOIN student b ON b.id = a.stud_id  JOIN course c ON c.id = a.`course_id`  WHERE `stud_id` = '$row[0]' AND a.session_id = '$session_id' AND a.semester_id = '$semester_id' AND a.level_id = '$level_id' AND a.examtype_id = 2 "); 
  $num_rows = mysqli_num_rows($result);
   if ($num_rows > $num_rows_final) {
     $num_rows_final = $num_rows;
   }
 $r =  0; $prev_reg = ''; 
  while ($row1 = @mysqli_fetch_array($result1)) {

    
if ($prev_reg == $row1[0]) {
  $student_score .= $row1[2]." (".$row1[3].")"; 


} else {

    $student_score = $sn.','.$row1[0].','.$row1[1].','.$row1[2]." (".$row1[3]."),";


}

 $prev_reg = $row1[0];
 if ($r == 0) {

  $num_rows_final = $num_rows;

   
 }
 $r++;
    }

    $student_score_data = explode(",", $student_score);
    //$sub_credit =explode(",", $credits);
    //$sub_subject = explode(",", $subj); //get all the subjects in array
    $student_score_count = count($student_score_data);
    $student_id = []; $regno = 0;
    $row =  $sn + 6;
    $sheet->fromArray($student_score_data, NULL, 'A'.$row);


  $sn++;
      
  }   
   
 $heading_count = $num_rows_final +3;

//     $heading_record = explode(",", $headings);
//     //$sub_credit =explode(",", $credits);
//     //$sub_subject = explode(",", $subj); //get all the subjects in array
//     $heading_count = count($heading_record);
//     // $subj_count = count($sub_subject);  // no of subjects
//     // $header = array("S/N","REGNO","NAME","COURSES");

// //     $sheet->fromArray($student_records, NULL, 'A11');
// //     // $sheet->fromArray($sub_credit, NULL, 'D11');
// // $sub_records = explode(",", $subjects);
// //     //$sub_credit =explode(",", $credits);
//     //$sub_subject = explode(",", $subj); //get all the subjects in array
//     // $sub_count = count($sub_records);
//     // $subj_count = count($sub_subject);  // no of subjects
//     // $header = array("S/N","REGNO","NAME","COURSES");
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

    
//     //code for styling of "Course Code and Scores" 
//     $sheet->fromArray($heading_record, NULL, 'A7');
//     // $sheet->fromArray($sub_credit, NULL, 'D11');
if ($num_rows_final = 2) {
  $heading_count += 1; 
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

     $spreadsheet->getActiveSheet()->mergeCells('D6:'.$col.'6');
}
// Formatting worksheet
    $spreadsheet->getActiveSheet()->mergeCells('A1:J1');
    $spreadsheet->getActiveSheet()->mergeCells('A2:J2');
    $spreadsheet->getActiveSheet()->mergeCells('A3:J3');
    $spreadsheet->getActiveSheet()->mergeCells('A4:J4');
    $spreadsheet->getActiveSheet()->mergeCells('A5:J5');
    $spreadsheet->getActiveSheet()->mergeCells('D6:'.$col.'6');
    //$spreadsheet->getActiveSheet()->getStyle('D')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);

    // // setting style for the header
    // $style_num_row = $num_student+7;
       $sheet->getStyle("A6:".$col.'6')->applyFromArray($styleArray_tableHeader);
    //    $sheet->getStyle("D8:".$col.$style_num_row)->applyFromArray($styleArray_tableBody_Center);
      // $sheet->getStyle("A7:".$col.$row)->applyFromArray($styleArray_tableBody);
       
//SET CELL DIMENSION
    // $sheet->getColumnDimension('D')->setWidth(5/);

// //SCORES FROM HERE
// $i = 0; $c = 0;
//     //print_r($list_courses);
//     $regno = $courseData[$r]; $student_score = '';
//     //$cc_id = $list_courses[$r];

// $count_array = count($list_courses);
//     $result1 = mysqli_query($con,"SELECT a.student_name, a.regno, b.score,c.course_name, c.course_code, c.id FROM `exams` b JOIN student a ON b.`stud_id` = a.id JOIN course c ON c.id = b.`course_id`  WHERE `stud_id` = '$regno' AND b.session_id = '$session_id' AND b.semester_id = '$semester_id' AND b.level_id = '$level_id' "); 
//     // echo $num = mysqli_num_rows($result);
    
//     while ($row1 = mysqli_fetch_array($result1)) {

//       if ($c < $count_array) {
       
      
// $num_rows = '';
//       $result = mysqli_query($con,"SELECT a.student_name, a.regno, b.score,c.course_name, c.course_code, c.id FROM `exams` b JOIN student a ON b.`stud_id` = a.id JOIN course c ON c.id = b.`course_id`  WHERE `stud_id` = '$regno' AND b.session_id = '$session_id' AND b.semester_id = '$semester_id' AND b.level_id = '$level_id' AND c.id ='".$list_courses[$c]."'"); 
//       $num_rows = mysqli_num_rows($result);
    
//     while ($row = mysqli_fetch_array($result)) {

//         if ($i == 0) {
//            $student_score .=  $sn.','. $row[0].','.$row[1];

//         }
         
//          if ($row[2] <40 AND $row[2] !=0 ) {
            
//             $student_score .= ','.$row[2];

            
            
            
//         } elseif ($row[2] == 0) {
//             $student_score .= ',ABS';
//             $student_score_data = explode(",", $student_score);
//     //$sub_credit =explode(",", $credits);
//     //$sub_subject = explode(",", $subj); //get all the subjects in array
//     $heading_count = count($student_score_data);
//     $col = '';
//  // $sheet->setCellValue('I1',$heading_count );
//     // $sheet->fromArray($heading_count, NULL, 'I1');

//     if ($heading_count == 4) {
        
//             $col = 'D';

//     }

//     if ($heading_count == 5) {
        
//             $col = 'E';

//     } 

//     if ($heading_count == 6) {
        
//             $col = 'F';

//     }

//     if ($heading_count == 7) {
        
//             $col = 'G';

//     }
//     if ($heading_count == 8) {
        
//             $col = 'H';

//     }

//     if ($heading_count == 9) {
        
//             $col = 'I';

//     }

//     if ($heading_count == 10) {
        
//             $col = 'J';

//     }
//     if ($heading_count == 11) {
        
//             $col = 'K';

//     }
//     if ($heading_count == 12) {
        
//             $col = 'L';

//     }

//     if ($heading_count == 13) {
        
//             $col = 'M';

//     }

//     if ($heading_count == 14) {
        
//             $col = 'N';

//     }

//     if ($heading_count == 15) {
        
//             $col = 'O';

//     }
//     if ($heading_count == 16) {
        
//             $col = 'P';

//     }

//     if ($heading_count == 17) {
        
//             $col = 'Q';

//     }

//      $sheet->getStyle($col.$r)->applyFromArray($styleArray_abs);
//         }  else {
            
//             $student_score .=','. $row[2];

//             }

            
            
//         $i++;


//     }
//     if ($num_rows == 0) {

//                $student_score .=',ABS';

//             }
// $c++;
//   } }
//     $row =$sn+7;
    
//      $student_score_data = explode(",", $student_score);
//     //$sub_credit =explode(",", $credits);
//     //$sub_subject = explode(",", $subj); //get all the subjects in array
//     // $sub_count = count($sub_records);
//     // $subj_count = count($sub_subject);  // no of subjects
//     // $header = array("S/N","REGNO","NAME","COURSES");

// //     $sheet->fromArray($student_records, NULL, 'A11');
// //     // $sheet->fromArray($sub_credit, NULL, 'D11');
// // $sub_records = explode(",", $subjects);
// //     //$sub_credit =explode(",", $credits);
//     //$sub_subject = explode(",", $subj); //get all the subjects in array
//     // $sub_count = count($sub_records);
//     // $subj_count = count($sub_subject);  // no of subjects
//     // $header = array("S/N","REGNO","NAME","COURSES");

//     $sheet->fromArray($student_score_data, NULL, 'A'.$row);
    
//     // $sheet->fromArray($sub_credit, NULL, 'D11');
//         $sn++;  
//         // echo $r;
//       $row_final = $row +3;   
//     //$c_o = '';
    
//     }
//     $courses = '';
//     $result = mysqli_query($con,"SELECT * FROM course  WHERE  level_id = '$level_id' AND semester_id = '$semester_id'  ORDER BY `course_code` ");
//   while ($row = mysqli_fetch_array($result)) {
  
//     $courses =$row[1].','. $row[2];
//     $spreadsheet->getActiveSheet()->mergeCells('C'.$row_final.':G'.$row_final);

//      $courses_data = explode(",", $courses);
//     $sheet->fromArray($courses_data, NULL, 'B'.$row_final);

//     $row_final++;
//   }


     // if ($sub_count > 0)
     // {
     //     $q2 = "SELECT distinct scores.regno from scores INNER JOIN BIODATA ON scores.regno = biodata.regno where scores.session = '$session' and scores.level = '$level' and biodata.program_id = '$programme'  and biodata.moe = '$moe' ";
     //    $r2 = mysqli_query($dbc,$q2);
     //    $regnos= "";
     //    if (mysqli_num_rows($r2) > 0)
     //    {
     //        $serial= 0;
     //        while ($row2=mysqli_fetch_array($r2))
     //        {
     //            $serial+=1;

     //            $co="";
     //            $INC="";
     //            $remarks = "";
     //        // $regnos .= $row2['regno'].",";
     //        $regno = $row2['regno'];
     //        $q3 = "SELECT biodata.regno, biodata.name, biodata.program_id, scores.subject,tblcourses.credit,scores.score,scores.grade, scores.session, scores.semester, scores.level FROM `scores` inner join (biodata, tblcourses) on scores.regno = biodata.regno and scores.subject = tblcourses.coursecode where scores.session = '$session' and scores.level = '$level' and  scores.regno = '$regno'";
     //        $r3 = mysqli_query($dbc, $q3);
     //            if (mysqli_num_rows($r3) > 0)
     //            {


     //                $stud_record_1 = "";

     //            if ( $row3=mysqli_fetch_array($r3))
     //            {
     //            $stud_record_1 =$serial.",". $row3['regno'].",";
     //            $stud_record_1.= strtoupper($row3['name']).",";

    

     //             for ($i=0; $i <  $subj_count-1 ; $i++)
     //             {
     //                 $q4 = "SELECT biodata.regno, biodata.name, biodata.program_id, scores.subject,tblcourses.credit,scores.score,scores.grade, scores.session, scores.semester, scores.level FROM `scores` inner join (biodata, tblcourses) on scores.regno = biodata.regno and scores.subject = tblcourses.coursecode where scores.session = '$session' and scores.level = '$level' and  scores.regno = '$regno' and subject = '$sub_subject[$i]'";
     //                    $r4 = mysqli_query($dbc, $q4);

     //                if (mysqli_num_rows($r4)> 0)
     //                {

     //                    $row4 = mysqli_fetch_array($r4);

     //                    //credit registered
     //                    $cu = $row4['credit'];
     //                     $grade = strtoupper($row4['grade']);

     //                    if ($row4['score'] == '-2') {
     //                        $stud_record_1.= "INC,";
     //                    }
     //                    elseif ($row4['score'] == '-1') {
     //                         $stud_record_1.= "ABS,";
     //                    }
     //                    else
     //                    {
     //                         $stud_record_1.= $row4['score'].",";
     //                    }

     //                }

     //                else
     //                {

     //                    $stud_record_1.= ",";
     //                    // $stud_record_2.= ",";
     //                    // $stud_record_3.=",";


     //                }


     //             }
     //             //calculating cgpa.


     //             $highestRow = $spreadsheet->getActiveSheet()->getHighestRow();
     //                $x=$highestRow+1;//first row

     //                $stud_record_1_array =
     //                explode(",", $stud_record_1);

     //                 $sheet->fromArray($stud_record_1_array, NULL, 'A'.$x);




     //                   //merging gpa section
     //                   $c = "";
     //                   if ($subj_count == 1) {
     //                        $c = 'D';

     //                   }
     //                   elseif ($subj_count == 2) {
     //                        $c = 'E';

     //                   }
     //                   elseif ($subj_count == 3) {
     //                        $c = 'F';

     //                   }
     //                   elseif ($subj_count == 4) {
     //                    $c = 'G';

     //                   }
     //                   elseif ($subj_count == 5) {
     //                    $c = 'H';

     //                   }
     //                    elseif ($subj_count == 6) {
     //                    $c = 'I';

     //                   }
     //                    elseif ($subj_count == 7) {
     //                    $c = 'J';

     //                   }
     //                    elseif ($subj_count == 8) {
     //                    $c = 'K';

     //                   }
     //                    elseif ($subj_count == 9) {
     //                    $c = 'L';

     //                   }
     //                   elseif ($subj_count == 10) {
     //                    $c = 'M';

     //                   }

     //                    elseif ($subj_count == 11) {
     //                    $c = 'N';

     //                   }
     //                   elseif ($subj_count == 12) {
     //                    $c = 'O';

     //                   }
     //                   elseif ($subj_count == 13) {
     //                    $c = 'P';

     //                   }
     //                   elseif ($subj_count == 14) {
     //                    $c = 'Q';

     //                   }
     //                   elseif ($subj_count == 15) {
     //                    $c = 'R';

     //                   }
     //                   elseif ($subj_count == 16) {
     //                    $c = 'S';

     //                   }
     //                   elseif ($subj_count == 17) {
     //                    $c = 'T';

     //                   }
     //                   elseif ($subj_count == 18) {
     //                    $c = 'U';

     //                   }
     //                   elseif ($subj_count == 19) {
     //                    $c = 'V';

     //                   }
     //                   elseif ($subj_count == 20) {
     //                    $c = 'W';

     //                   }
     //                   elseif ($subj_count == 21) {
     //                    $c = 'X';

     //                   }
     //                   elseif ($subj_count == 22) {
     //                    $c = 'Y';

     //                   }

     //                   $f = "";
     //                   if ($firstsemCoursesCount == 1) {
     //                      $f = "D";
     //                   }
     //                   elseif ($firstsemCoursesCount == 2) {
     //                      $f = "E";
     //                   }
     //                    elseif ($firstsemCoursesCount == 3) {
     //                      $f = "F";
     //                   }

     //                    elseif ($firstsemCoursesCount == 4) {
     //                      $f = "G";
     //                   }

     //                    elseif ($firstsemCoursesCount == 5) {
     //                      $f = "H";
     //                   }

     //                    elseif ($firstsemCoursesCount == 6) {
     //                      $f = "I";
     //                   }
     //                    elseif ($firstsemCoursesCount == 7) {
     //                      $f = "J";
     //                   }

     //                    elseif ($firstsemCoursesCount == 8) {
     //                      $f = "K";
     //                   }
     //                    elseif ($firstsemCoursesCount == 9) {
     //                      $f = "L";
     //                   }
     //                    elseif ($firstsemCoursesCount == 10) {
     //                      $f = "M";
     //                   }
     //                    elseif ($firstsemCoursesCount == 11) {
     //                      $f = "N";
     //                   }
     //                    elseif ($firstsemCoursesCount == 12) {
     //                      $f = "O";
     //                   }
     //                    elseif ($firstsemCoursesCount == 13) {
     //                      $f = "P";
     //                   }
     //                    elseif ($firstsemCoursesCount == 14) {
     //                      $f = "Q";
     //                   }
     //                    elseif ($firstsemCoursesCount == 15) {
     //                      $f = "R";
     //                   }
     //                    elseif ($firstsemCoursesCount == 16) {
     //                      $f = "S";
     //                   }
     //                    elseif ($firstsemCoursesCount == 17) {
     //                      $f = "T";
     //                   }
     //                   elseif ($firstsemCoursesCount == 18) {
     //                      $f = "U";
     //                   }
     //                   elseif ($firstsemCoursesCount == 19) {
     //                      $f = "V";
     //                   }
     //                   elseif ($firstsemCoursesCount == 20) {
     //                      $f = "W";
     //                   }
     //                   elseif ($firstsemCoursesCount == 21) {
     //                      $f = "X";
     //                   }
     //                   elseif ($firstsemCoursesCount == 22) {
     //                      $f = "Y";
     //                   }
     //                   elseif ($firstsemCoursesCount == 23) {
     //                      $f = "Z";
     //                   }
     //                   elseif ($firstsemCoursesCount == 24) {
     //                      $f = "AA";
     //                   }
     //                   elseif ($firstsemCoursesCount == 25) {
     //                      $f = "AB";
     //                   }
     //                   elseif ($firstsemCoursesCount == 26) {
     //                      $f = "AC";
     //                   }
     //                   elseif ($firstsemCoursesCount == 27) {
     //                      $f = "AD";
     //                   }
     //                   elseif ($firstsemCoursesCount == 28) {
     //                      $f = "AE";
     //                   }
     //                   elseif ($firstsemCoursesCount == 29) {
     //                      $f = "AF";
     //                   }
     //                   elseif ($firstsemCoursesCount == 30) {
     //                      $f = "AG";
     //                   }
     //                   elseif ($firstsemCoursesCount == 31) {
     //                      $f = "AH";
     //                   }
     //                   elseif ($firstsemCoursesCount ==32 ) {
     //                      $f = "AI";
     //                   }

     //                   //getting first letter for second semester

     //                   $q = "";
     //                   if ($secondsemCoursesCount == 1) {
     //                      $q = "";
     //                   }
     //                   elseif ($secondsemCoursesCount == 2) {
     //                      $q = "";
     //                   }
     //                   elseif ($secondsemCoursesCount == 3) {
     //                      $q = "";
     //                   }
     //                   elseif ($secondsemCoursesCount == 4) {
     //                      $q = "";
     //                   }
     //                   elseif ($secondsemCoursesCount == 5) {
     //                      $q = "";
     //                   }
     //                   elseif ($secondsemCoursesCount == 6) {
     //                      $q = "";
     //                   }



                      //setting border to all cells
                        //$spreadsheet->getActiveSheet()->getStyle('A10'.':'.$c.'10')->applyFromArray($styleArray_tableHeader);


                       //$spreadsheet->getActiveSheet()->getStyle('A'.$x.':'.$c.$x)->applyFromArray($styleArray_tableBody);

                       //BOrder seperating first and second semester
                      // $spreadsheet->getActiveSheet()->getStyle('D10:'.$f.$x)->applyFromArray($styleArray_tableBody2);

                       //setting cell d9 to indicate first semester and set it value and centralise it
                       // $spreadsheet->getActiveSheet()->mergeCells('D9:'.2.'9');
                       // $sheet->setCellValue('D9','First Semester' );
                       // $spreadsheet->getActiveSheet()->getStyle('D9')->applyFromArray($styleArray_tableBody_Center);
                       // $spreadsheet->getActiveSheet()->getStyle('D9:'.$f.'9')->applyFromArray($styleArray_tableBody);

                        //setting cell d9 to indicate second semester and set it value and centralise it
                       //$secondsemCoursesCount = $firstsemCoursesCount+4;

                      // $spreadsheet->getActiveSheet()->setCellValueByColumnAndRow($secondsemCoursesCount,9, 'Second Semester');


                // }


                // }





                // }

            // }
            //$regno = explode(",", $regnos);



        // }




   // $level = $level+1;
//     $spreadsheet->getActiveSheet()->setTitle('1st Semester');




header('Content-Type: application/vnd.ms-excel');
// $filen= str_replace('/', '_', $regno);
$filen=$level_id."_".$session_id. "_RAW";
header('Content-Disposition: attachment;filename='.$filen.'.xls');
// header('Content-Disposition: attachment;filename="GeneratedFile.xlsx"');
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
// $writer->save('helloworld.xlsx');
// $writer->save('php://output');
$writer->save('php://output');


//     // }
// //     else
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