<?php

// require 'inc/phpspreadsheet/autoload.php';
require 'vendor/autoload.php';
require_once('inc/db.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
// Create new Spreadsheet object

$grade = '';


    $regno = $_GET['regno'];
    $regno=strtoupper(trim($regno));
    $level = $_GET['lev'];
    $session = $_GET['ses'];

    $sql_bio = "SELECT `biodata`.regno,`biodata`.`entry_level`, `biodata`.name, `biodata`.`dob`, `biodata`.`program_id`, tblprogramme.programme FROM `biodata` inner join tblprogramme on biodata.program_id= tblprogramme.programme_id where regno = '$regno'";
    $result_bio = mysqli_query($dbc, $sql_bio);
    if (mysqli_num_rows($result_bio) == 1) {
        $row=mysqli_fetch_array($result_bio);
        $name = strtoupper($row['name']);
        $dateofbirth = $row['dob'];
        $_SESSION['R'] ='Y';
        $programme = $row['programme'];
        $entry_level=$row['entry_level'];

        $spreadsheet = new Spreadsheet();

$header = array("S/N","SUBJECT","TITLE","CREDIT", "GRADE");
// Style for worksheet
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
            'size' => 12,
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
// $workbook = new Spreadsheet_Excel_Writer('test.xls');
   $spreadsheet->getActiveSheet()->getPageSetup()->setRowsToRepeatAtTopByStartAndEnd(1,2);

    $sheet_index=0;
    $spreadsheet->removeSheetByIndex(0);

    $spreadsheet->createSheet();
// Add some data
    $spreadsheet->setActiveSheetIndex($sheet_index);
    // $sheet_index++;

    $sheet = $spreadsheet->getActiveSheet();



 //setting logo
    $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
    $drawing->setName('Logo');
    $drawing->setDescription('Logo');
    $drawing->setPath('./images/logo.png');
    $drawing->setWorksheet($spreadsheet->getActiveSheet());
    $drawing->setCoordinates('C1');
    $drawing->setHeight(80);


    $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
    $drawing->setName('Logo1');
    $drawing->setDescription('Logo1');
    $drawing->setPath('./images/logo.png');
    $drawing->setWorksheet($spreadsheet->getActiveSheet());
    $drawing->setCoordinates('E1');
    $drawing->setHeight(80);

    $spreadsheet->getActiveSheet()->setCellValue('A1', "BAYERO UNIVERSITY, KANO");
    $spreadsheet->getActiveSheet()->setCellValue('A2', $school);
    $spreadsheet->getActiveSheet()->setCellValue('A3', $name1);
    $spreadsheet->getActiveSheet()->setCellValue('A4', "Student's Transcript");


// Formatting worksheet
    $spreadsheet->getActiveSheet()->mergeCells('A1:F1');
    $spreadsheet->getActiveSheet()->mergeCells('A2:F2');
    $spreadsheet->getActiveSheet()->mergeCells('A3:F3');
    $spreadsheet->getActiveSheet()->mergeCells('A4:F4');
 //    $spreadsheet->getActiveSheet()->mergeCells('A4:E4');
    // $spreadsheet->getActiveSheet()->getStyle('A4')->getAlignment()->setShrinkToFit(true);
//setting style as defined above from line 27

 //setting style as define above for centrelising Header
    $spreadsheet->getActiveSheet()->getStyle("A1:A5")->applyFromArray($styleArray_Header);


    $sheet->setCellValue('B5','Regno:' );
    $sheet->setCellValue('B6','Name:' );
    $sheet->setCellValue('B7','Date of Birth:' );
     $sheet->setCellValue('B8','Programme:' );
    // $sheet->setCellValue('B8',"Level:" );

    $sheet->setCellValue('D5',$regno );
    $sheet->setCellValue('D6',$name );
    $sheet->setCellValue('D7',$dateofbirth );
    $sheet->setCellValue('D8',$programme );
    $spreadsheet->getActiveSheet()->mergeCells('D8:E8');


    $spreadsheet->getActiveSheet()->getStyle("B5:D8")->applyFromArray($styleArray_student_Info);
    // $sheet->fromArray($header, NULL, 'B8');
    //Setting header for result
    // $sheet->fromArray($header, NULL, 'B8');
    // //setting style for the header
 //     $sheet->getStyle("B8:D8")->applyFromArray($styleArray_tableHeader);
    $sheet->getColumnDimension('A')->setWidth(2);
    $sheet->getColumnDimension('B')->setWidth(10);
    $sheet->getColumnDimension('C')->setWidth(15);
    $sheet->getColumnDimension('D')->setWidth(45);


    //Retreive data from database
    // $sql_level = "SELECT sbclevel.level, sbclevel.session, scores.regno,scores.subject, scores.score, scores.category FROM `scores` inner join sbclevel on scores.level_id = sbclevel.id where regno = 'CLS/15/MBB/00001' ORDER BY `sbclevel`.`level` ASC ";

     $sql_level = "SELECT distinct scores.level, scores.session,scores.semester
      FROM `scores`  where regno = '$regno' and scores.level = '$level'
      and session = '$session' order by scores.session ASC ";

     $result_level = mysqli_query($dbc,$sql_level);

     if (mysqli_num_rows($result_level) > 0)
     {
            $no_of_years=0;
            $tcu = 0;
            $tce = 0;
            $cgpa = 0;
             $tcucgpa=0;
            $twp = 0;
            $co = false;
            $outstanding ="";  // for outstanding courses
            $all_levels="";
         while ($row_level=mysqli_fetch_array($result_level))
         {
            $no_of_years+=1;
            $all_levels =$row_level['level'];

            $semester = $row_level['semester'];
            $level = $row_level['level'];
            $session=$row_level['session'];

            if ($level == 700) {
            $level_name = "SPILL OVER I";
            }
            elseif ($level == 800) {
            $level_name = "SPILL OVER II";
            }
            else
            {
               $level_name =$level;
            }

            // $sheet->setCellValue('F'.$highestRow, $level);

            // $sheet->setCellValue('C8',"Level: " );
            // $highestRow=$highestRow+1;
            //  $sheet->setCellValue('C'.$highestRow, "Level:" . $level );

             $highestRow = $spreadsheet->getActiveSheet()->getHighestRow();

            $highestRow=$highestRow+2;
             $sheet->setCellValue('B'.$highestRow, "Level: " . $level_name . "   Session: ". $session. "   Semester: ". $semester );

            // $highestRow=$highestRow;
            //  $sheet->setCellValue('D'.$highestRow, "Level:" . $level . "   Session: ". $session. "   Semester: ". $semester );

            $highestRow = $spreadsheet->getActiveSheet()->getHighestRow();
            $highestRow=$highestRow+1;

            //setting header
             $sheet->fromArray($header, NULL, 'B'.$highestRow);
    //setting style for the header
          $sheet->getStyle("B".$highestRow.":F".$highestRow)->applyFromArray($styleArray_tableHeader);




            $sql_sit = "SELECT scores.id, biodata.regno, scores.subject,
            scores.score,scores.grade,tblcourses.credit, tblcourses.coursetitle,
             scores.`session`, scores.level, scores.semester
             FROM scores inner join (`biodata` , tblcourses)
             on biodata.regno = scores.regno
             and scores.subject = tblcourses.coursecode
             where scores.regno = '$regno' and `scores`.level = '$level'
             and `scores`.semester = '$semester'
             and `scores`.`session` = '$session'";
            $result_sit = mysqli_query($dbc,$sql_sit);
            $num =mysqli_num_rows($result_sit);
            //$gpa = 0;
            if ($num > 0)
             {
                $scu = 0;
                $sce = 0;
                $swp = 0;
                $gpa = 0;
                $tcugpa=0;

                $i=1;
                while ($row_semester=mysqli_fetch_array($result_sit))
                {
                    // $grade = '';
                    // $score_d = $row_sit['score'];
                    $subject = strtoupper($row_semester['subject']);
                    $grade = strtoupper($row_semester['grade']);
                    $cu = $row_semester['credit'];
                    if ($grade != "I") {
                        $tcugpa = $tcugpa+ $cu;
                        // $tcucgpa = $tcucgpa+ $cu;
                    }
                        $scu = $scu+ $cu;
                        $tcu = $tcu + $cu;
                        // if ($grade <> "F") {
                        //    $sce =$sce+ $cu; ;
                        // }

                        if ($grade == "A") {
                        $swp = $swp + 5*$cu;
                        // $twp = $twp + 5*$cu;
                        $sce = $sce + $cu;
                        // $tce = $tce + $cu;
                        }
                        elseif ($grade == "B+")
                        {
                            $swp = $swp + 4.5*$cu;
                            $twp = $twp + 4.5*$cu;
                            $sce = $sce + $cu;
                            $tce = $tce + $cu;
                        }
                        elseif ($grade == "B")
                        {
                            $swp = $swp + 4*$cu;
                            // $twp = $twp + 4*$cu;
                            $sce = $sce + $cu;
                            // $tce = $tce + $cu;
                        }
                         elseif ($grade == "C+")
                        {
                            $swp = $swp + 3.5*$cu;
                            // $twp = $twp + 3.5*$cu;
                            $sce = $sce+ $cu;
                            // $tce = $tce+ $cu;
                        }
                        elseif ($grade == "C")
                        {
                            $swp = $swp + 3*$cu;
                            // $twp = $twp + 3*$cu;
                            $sce = $sce+ $cu;
                            // $tce = $tce+ $cu;
                        }
                        elseif ($grade == "ABS")
                        {
                           $swp = $swp + 0;
                            $twp =$twp + 0;
                        }
                        else
                        {
                            $swp = $swp + 0;
                            $twp =$twp + 0;
                        }
                   // grade_($row_sit['score']);

                    $highestRow = $highestRow +1;
                    $sheet->setCellValue('B'.$highestRow, $i);
                    $sheet->getStyle("B".$highestRow)->applyFromArray($styleArray_tableBody);
                    $sheet->setCellValue('C'.$highestRow, $row_semester['subject']);
                    $sheet->getStyle("C".$highestRow)->applyFromArray($styleArray_tableBody);
                    $sheet->setCellValue('D'.$highestRow, $row_semester['coursetitle']);
                     $sheet->getStyle("D".$highestRow)->applyFromArray($styleArray_tableBody);
                    $sheet->setCellValue('E'.$highestRow, $row_semester['credit']);
                     $sheet->getStyle("E".$highestRow)->applyFromArray($styleArray_tableBody);
                     $sheet->setCellValue('F'.$highestRow, $row_semester['grade']);
                     $sheet->getStyle("F".$highestRow)->applyFromArray($styleArray_tableBody);

                     // calculate cur,cue,wgp, gpa and cgpa


                        $i=$i+1;

                $highestRow = $spreadsheet->getActiveSheet()->getHighestRow();

                }  // end of first while for semester




            }
            else
            {

                 $highestRow=$highestRow-1;
             $sheet->setCellValue('D'.$highestRow, "Level:" . $level . "   Session: ". $session. "   Semester: ". $semester );
            }
                $highestRow = $highestRow +1;
                //total credits registered
                $sheet->setCellValue('B'.$highestRow, "CUR: ".$scu);
                //total points earned
                $sheet->setCellValue('C'.$highestRow, "WGP: ".$swp);
                //semester total credits earned
                 $sheet->setCellValue('D'.$highestRow, "CUE: ".$sce);
                  //entire total credits earned


                 $highestRow = $highestRow +1;
                 $gpa = number_format($swp/$tcugpa,2);

                 $sheet->setCellValue('B'.$highestRow, "GPA: ".$gpa);

                //gcpa
                 // $cgpa = number_format($twp/$tcucgpa,2);
                // $sheet->setCellValue('C'.$highestRow, "CGPA: ".$cgpa);
         } // first while loop

         // cgpa
          $cu1= 0;
          $tcugpa1=0;
          $scu1=0;
          $swp1 = 0;
          $twp1 =0;
          $sce1 =0;
          $tce1 =0;
          $tcu1 = 0;
          $tcucgpa1=0;

         $cgpaq = "SELECT scores.id, biodata.regno, scores.subject,
         scores.score,scores.grade,tblcourses.credit, tblcourses.coursetitle,
          scores.`session`, scores.level, scores.semester
          FROM scores inner join (`biodata` , tblcourses)
          on biodata.regno = scores.regno
          and scores.subject = tblcourses.coursecode
          where scores.regno = '$regno' and `scores`.level <= '$level'
        ";
        $cgpar = mysqli_query($dbc, $cgpaq);
        if (mysqli_num_rows($cgpar) > 0)
        {
          while ($rowcgpa = mysqli_fetch_array($cgpar))
          {
            $subject = strtoupper($rowcgpa['subject']);
            $grade = strtoupper($rowcgpa['grade']);
            $cu1 = $rowcgpa['credit'];

            $scu1 = $scu1+ $cu1;
            $tcu1 = $tcu1 + $cu1;
            if ($grade != "I") {
                $tcucgpa1 = $tcucgpa1+ $cu1;
                // $tcucgpa = $tcucgpa+ $cu;
            }

                if ($grade == "A") {
                $swp1 = $swp1 + 5*$cu1;
                $twp1 = $twp1 + 5*$cu1;
                $sce1 = $sce1 + $cu1;
                $tce1 = $tce1 + $cu1;
                }
                elseif ($grade == "B+")
                {
                    $swp1 = $swp1 + 4.5*$cu1;
                    $twp1 = $twp1 + 4.5*$cu1;
                    $sce1 = $sce1 + $cu1;
                    $tce1 = $tce1 + $cu1;
                }
                elseif ($grade == "B")
                {
                    $swp1 = $swp1 + 4*$cu1;
                    $twp1 = $twp1 + 4*$cu1;
                    $sce1 = $sce1 + $cu1;
                    $tce1 = $tce1 + $cu1;
                }
                 elseif ($grade == "C+")
                {
                    $swp1 = $swp1 + 3.5*$cu1;
                    $twp1 = $twp1 + 3.5*$cu1;
                    $sce1 = $sce1+ $cu1;
                    $tce1 = $tce1+ $cu1;
                }
                elseif ($grade == "C")
                {
                    $swp1 = $swp1 + 3*$cu1;
                    $twp1 = $twp1 + 3*$cu1;
                    $sce1 = $sce1+ $cu1;
                    $tce1 = $tce1+ $cu1;
                }
                elseif ($grade == "ABS")
                {
                   $swp1 = $swp1 + 0;
                    $twp1 =$twp1 + 0;
                }
                else
                {
                    $swp1 = $swp1 + 0;
                    $twp1 =$twp1 + 0;
                }
          } // end of while for CGPA

$cgpa=0;

          if ($tcucgpa1 > 0)
          {
           $cgpa = number_format($twp1/$tcucgpa1,2);
          }
          else {
            $cgpa = 0;
          }

          $highestRow = $highestRow +2;


           $sheet->setCellValue('B'.$highestRow, "TCUR: ".$tcu1);
           $sheet->setCellValue('C'.$highestRow, "TCUE: ".$tce1);
           $sheet->setCellValue('D'.$highestRow, "TWGP: ".$twp1);

           $sheet->setCellValue('E'.$highestRow, "CGPA: ".$cgpa);

        } //cgpa

     }
     else {
   //     $highestRow=$highestRow+1;
   // $sheet->setCellValue('D'.$highestRow, "Level:" . $level . "   Session: ". $session. "   Semester: ". $semester );

     }

        //get outstanding courses for the available years

         $outquery = "select * from tblcourses where status = 'Compulsory' and level >= '$entry_level' and level <= '$all_levels'";
         $outresult = mysqli_query($dbc, $outquery);
         while ($row_outstanding = mysqli_fetch_array($outresult)) 
         {

           $course = $row_outstanding['coursecode'];
           $cq = "SELECT scores.id, biodata.regno, scores.subject, scores.score,scores.grade,tblcourses.credit, tblcourses.coursetitle, scores.`session`, scores.level, scores.semester FROM scores inner join (`biodata` , tblcourses) on biodata.regno = scores.regno and `scores`.`subject` = `tblcourses`.`coursecode` where `scores`.`regno` = '$regno' and (`scores`.`grade` = 'A' || `scores`.`grade` = 'B'  || `scores`.`grade` = 'C' || `scores`.`grade` = 'D'|| `scores`.`grade` = 'E') and scores.subject ='$course'";
           $result_out = mysqli_query($dbc,$cq);
           $row_o = mysqli_fetch_array($result_out);

           if (mysqli_num_rows($result_out) != 1) 
           {
              $outstanding  .= $course.";";
              $co = true;
            // $outstanding .= $row_o['subject'] .";.";
           }
           else
           {
              // $outstanding .= $course .";";
            // $outstanding  .= "dk;";
           }
         }

          $highestRow = $highestRow +2;
          if ($co == true)
            {
                $sheet->setCellValue('B'.$highestRow, "Outstanding Courses: ");
                $spreadsheet->getActiveSheet()->mergeCells('B'.$highestRow.':C'.$highestRow);
            }
            else {
                $sheet->setCellValue('B'.$highestRow, "QUALIFICATIONs: ");
                $spreadsheet->getActiveSheet()->mergeCells('B'.$highestRow.':C'.$highestRow);
            }



            $qualification = $outstanding;
             // $spreadsheet->getActiveSheet()->mergeCells('D'.$highestRow.':F'.$highestRow);
             $sheet->setCellValue('D'.$highestRow, $qualification);
          $spreadsheet->getActiveSheet()->getStyle("B".$highestRow.":D".$highestRow)->applyFromArray($styleArray_student_Info);
          $spreadsheet->getActiveSheet()->getStyle("D".$highestRow)->getAlignment()->setWrapText(true);
         


    $level = $level+1;
    $spreadsheet->getActiveSheet()->setTitle('Transcript');




header('Content-Type: application/vnd.ms-excel');
$filen= str_replace('/', '_', $regno);
header('Content-Disposition: attachment;filename='.$filen.'.xls');
// header('Content-Disposition: attachment;filename="GeneratedFile.xlsx"');
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
// $writer->save('helloworld.xlsx');
// $writer->save('php://output');
$writer->save('php://output');


    }
    else
    {
        $_SESSION['R'] ='N';
        $url = 'gdownload.php?id=trans';
        ob_end_clean(); // Delete the buffer.
        header("Location: $url");
        exit(); // Quit the script.

    }

?>
