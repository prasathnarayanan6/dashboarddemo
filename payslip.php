<?php
// session_start();
// //echo $_GET['id'];
// echo "<pre>";
// print_r($_GET);
// echo "</pre>";

require "conn.php";
// if(isset($_GET['id']) && isset($_GET['date'])){
//     $id = $_GET['id'];
//     $date = $_GET['date'];
// }
require_once('tcpdf/tcpdf.php');

class MYPDF extends TCPDF{
    public function Header() {
        $image_file = K_PATH_IMAGES.'tcpdf_logo.jpg';
        $this->Image($image_file, 13, 5, 40, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        date_default_timezone_set('Asia/Calcutta');
        $tDate = date("F j, Y, g:i a");
        $html = '<p>W: www.xyma.in M: info@xyma.in</p>';
        //$this->writeHTML($html, true, false, false, false, 'R');
        // $this->Cell(182.5, 4, 'Report Generated on: '.$tDate, 0, 0, 'R', 0, '', 0, false, 'T', 'M');       
        
        // $html ='<hr>';
        // $html ='<hr>';
        // $this->writeHTML($html, true, false, false, false, ''); 
    }

    // Page footer
    public function Footer() {
        
        $image_file = K_PATH_IMAGES."footer.jpg"; 
        $this->Image($image_file, 0, 270, 210, "", "JPG", "", 'B', false, 300, "", false, false, 0, false, false, false);
        // Position at 15 mm from bottom 
        $this->SetY(0);
        // Set font 
        $this->SetFont("dejavusans", "", 9);
        // Page number
        // Logo 
    }
    
    // public function Header(){
    // $this->SetFont('helvetica', 'B', 20);
    // // Title to right allignment
    // $this->Cell(0, 15, '<< Header TITLE >>', 0, false, 'R', 0, '', 0, false, 'M', 'M');
}
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 003');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

$pdf->SetPrintHeader(true);
$pdf->SetPrintFooter(true); 
// set document information
$pdf->setCreator(PDF_CREATOR);
$pdf->setAuthor('');
$pdf->setTitle('');
$pdf->setSubject('');
$pdf->setKeywords('');

// set default header data
$pdf->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->setMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->setHeaderMargin(PDF_MARGIN_HEADER);
$pdf->setFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->setAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}



// bg image properties
// $pdf->AddPage();

// $bMargin = $pdf->getBreakMargin();
// // get current auto-page-break mode
// $auto_page_break = $pdf->getAutoPageBreak();
// // disable auto-page-break
// $pdf->SetAutoPageBreak(false, 0);


// // set bacground image
// $img_file = K_PATH_IMAGES.'bg2.jpg';
// $pdf->Image($img_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
// // restore auto-page-break status
// $pdf->SetAutoPageBreak($auto_page_break, $bMargin);
// // set the starting point for the page content
// $pdf->setPageMark();


// set font
$pdf->SetFont('times', 'B', 11);

// add a page
$pdf->AddPage();

//Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')

// test Cell stretching
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $date = $_GET['date'];
    $date1 =  date('F Y', strtotime($date));
$pdf->Cell(0, 7, 'XYMA ANALYTICS PRIVATE LIMITED', 1, 1, 'C', 0, '', 0);
$pdf->Cell(0, 8, 'B4 01 B Block 4th Floor Taramani IIT Madras Research Park Chennai-600113', 1, 1, 'C', 0, '', 0);
$pdf->Cell(0, 7, 'PAY SLIP '.$date1.'', 1, 1, 'C', 0, '', 0);
//$pdf->Cell(45, 0, 'TEST CELL STRETCH: scaling', 1, 1, 'C', 0, '', 1);
//$pdf->Cell(45, 0, 'TEST CELL STRETCH: scaling', 1, 1, 'C', 0, '', 1);
}
//$pdf->Cell(0, 0, 'TEST CELL STRETCH: scaling', 1, 1, 'C', 0, '', 1);
//$pdf->Cell(0, 0, 'TEST CELL STRETCH: force scaling', 1, 1, 'C', 0, '', 2);
//$pdf->Cell(0, 0, 'TEST CELL STRETCH: spacing', 1, 1, 'C', 0, '', 3);
//$pdf->Cell(0, 0, 'TEST CELL STRETCH: force spacing', 1, 1, 'C', 0, '', 4);

$pdf->Ln(5);

//$pdf->Cell(45, 0, 'TEST CELL STRETCH: scaling', 1, 1, 'C', 0, '', 1);
//$pdf->Cell(45, 0, 'TEST CELL STRETCH: force scaling', 1, 1, 'C', 0, '', 2);
//$pdf->Cell(45, 0, 'TEST CELL STRETCH: spacing', 1, 1, 'C', 0, '', 3);
//$pdf->Cell(45, 0, 'TEST CELL STRETCH: force spacing', 1, 1, 'C', 0, '', 4);


// example using general stretching and spacing

// for ($stretching = 90; $stretching <= 110; $stretching += 10) {
//     for ($spacing = -0.254; $spacing <= 0.254; $spacing += 0.254) {

//         // set general stretching (scaling) value
//         $pdf->setFontStretching($stretching);

//         // set general spacing value
//         $pdf->setFontSpacing($spacing);

//         $pdf->Cell(0, 0, 'Stretching '.$stretching.'%, Spacing '.sprintf('%+.3F', $spacing).'mm, no stretch', 1, 1, 'C', 0, '', 0);
//         $pdf->Cell(0, 0, 'Stretching '.$stretching.'%, Spacing '.sprintf('%+.3F', $spacing).'mm, scaling', 1, 1, 'C', 0, '', 1);
//         $pdf->Cell(0, 0, 'Stretching '.$stretching.'%, Spacing '.sprintf('%+.3F', $spacing).'mm, force scaling', 1, 1, 'C', 0, '', 2);
//         $pdf->Cell(0, 0, 'Stretching '.$stretching.'%, Spacing '.sprintf('%+.3F', $spacing).'mm, spacing', 1, 1, 'C', 0, '', 3);
//         $pdf->Cell(0, 0, 'Stretching '.$stretching.'%, Spacing '.sprintf('%+.3F', $spacing).'mm, force spacing', 1, 1, 'C', 0, '', 4);

//         $pdf->Ln(2);
//     }
// }

// ---------------------------------------------------------
// table starts from here
include 'conn.php';
if(isset($_GET['id']) && isset($_GET['date'])){

    $id = $_GET['id'];
    $date = $_GET['date'];
    //$date = $_GET['date'];
   // $date = $_GET['date'];
   // $sql= "select e.*,s.desig, s.salary, d.epf, d.pt, d.hi, d.tds, d.deduction, b.bname, b.bno, b.ifsc, b.bbranch from emp e , salary s, deduction d, bank b where e.emp_id='$id' AND e.emp_id = s.emp_id AND e.emp_id = d.emp_id AND e.emp_id = b.emp_id";
    $sql= "select employee.*,deduction.* from employee, deduction where employee.id='$id' AND employee.id= deduction.id AND month='".$date."'";
    //$sql= "select e.*,s.desig, s.salary, d.deduction, b.bname, b.bno, b.ifsc, b.bbranch from emp e , salary s, deduction d, bank b where e.emp_id='$id' AND e.emp_id = s.emp_id AND e.emp_id = d.emp_id AND e.emp_id = b.emp_id";
    $result = $conn->query($sql);
//if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    //{
        $id = $row["id"];
        $name = $row["name"];
        $uan = $row["uan"];
        $desig = $row["desig"];
        //$desig = $row["desig"];
        //$salary = $row["salary"];
        $dep = $row['dep'];
        $dj = $row["dj"];
        $bank = $row["bank"]; 
        $ifsc = $row["ifsc"];
        $acc=$row['acc'];
        $branch = $row["branch"];
        $desig = $row["desig"];
        $dep = $row["dep"];
        //
        $month=$row["month"];
        $salary=$row["salary"];
        $basic = $row["basic"];
        $da=$row["da"];
        $hra=$row["pf"];
        $sa=$row['sa'];
        $epfe=$row['epfe'];
        $epfr=$row['epfr'];
        $esic=$row['tds'];
        $tds=$row['tds'];
        $hi=$row['hi'];
        $gs=$row['gs'];
        $td=$row['td'];
        $twd=$row['twd'];
        $pd = $row['pd'];
        $na=$row['na'];
        // $pf=$row['pf'];
        function convertNumber($num = false)
{
    $num = str_replace(array(',', ''), '' , trim($num));
    if(! $num) {
        return false;
    }
    $num = (int) $num;
    $words = array();
    $list1 = array('', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven',
        'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'
    );
    $list2 = array('', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety', 'hundred');
    $list3 = array('', 'thousand', 'million', 'billion', 'trillion', 'quadrillion', 'quintillion', 'sextillion', 'septillion',
        'octillion', 'nonillion', 'decillion', 'undecillion', 'duodecillion', 'tredecillion', 'quattuordecillion',
        'quindecillion', 'sexdecillion', 'septendecillion', 'octodecillion', 'novemdecillion', 'vigintillion'
    );
    $num_length = strlen($num);
    $levels = (int) (($num_length + 2) / 3);
    $max_length = $levels * 3;
    $num = substr('00' . $num, -$max_length);
    $num_levels = str_split($num, 3);
    for ($i = 0; $i < count($num_levels); $i++) {
        $levels--;
        $hundreds = (int) ($num_levels[$i] / 100);
        $hundreds = ($hundreds ? ' ' . $list1[$hundreds] . ' hundred' . ( $hundreds == 1 ? '' : '' ) . ' ' : '');
        $tens = (int) ($num_levels[$i] % 100);
        $singles = '';
        if ( $tens < 20 ) {
            $tens = ($tens ? ' and ' . $list1[$tens] . ' ' : '' );
        } elseif ($tens >= 20) {
            $tens = (int)($tens / 10);
            $tens = ' and ' . $list2[$tens] . ' ';
            $singles = (int) ($num_levels[$i] % 10);
            $singles = ' ' . $list1[$singles] . ' ';
        }
        $words[] = $hundreds . $tens . $singles . ( ( $levels && ( int ) ( $num_levels[$i] ) ) ? ' ' . $list3[$levels] . ' ' : '' );
    } //end for loop
    $commas = count($words);
    if ($commas > 1) {
        $commas = $commas - 1;
    }
    $words = implode(' ',  $words);
    $words = preg_replace('/^\s\b(and)/', '', $words );
    $words = trim($words);
    $words = ucfirst($words);
    $words = $words." ";
    return $words;
} 
$amountword = convertNumber($na);

  
        //$salary = $row["salary"];
        //$ded = $row["deduction"];
        //$net = $row["salary"] - $row["deduction"];

        // set color for background
        //////newwwww start
        // $txt1="Employee Name";
$pdf->SetFillColor(255, 255, 255);

// Vertical alignment
$pdf->MultiCell(45, 9, 'Employee Name', 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 9, ''.$name, 1, 'J', 1, 0, '', '', true,0,true,true, 12, 'T');
$pdf->MultiCell(45, 9, 'Total Working Days', 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 9, ''.$twd, 1, 'J', 1, 0, '', '', true, 0, false, true, 12, 'T');


$pdf->Ln();
// Vertical alignment
$pdf->MultiCell(45, 9, 'Employee ID', 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 9, ''.$id, 1, 'J', 1, 0, '', '', true, 0, false, true, 12, 'T');
$pdf->MultiCell(45, 9, 'Paid Days', 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 9, ''.$pd, 1, 'J', 1, 0, '', '', true, 0, false, true, 12, 'T');


$pdf->Ln();
// Vertical alignment
$pdf->MultiCell(45, 9, 'Designation', 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 9, ''.$desig, 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 9, 'UAN No'.$txt, 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 9, ''.$uan, 1, 'J', 1, 0, '', '', true, 0, true     , true, 12, 'T');


$pdf->Ln();
// Vertical alignment
$pdf->MultiCell(45, 9, 'Department', 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 9, ''.$dep, 1, 'J', 1, 0, '', '', true, 0, false, true, 12, 'T');
$pdf->MultiCell(45, 9, 'Bank Name'.$txt, 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 9, ''.$bank, 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');


$pdf->Ln();
// Vertical alignment
$pdf->MultiCell(45, 9, 'Date of Joining', 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 9, ''.$dj, 1, 'J', 1, 0, '', '', true, 0, false, true, 12, 'T');
$pdf->MultiCell(45, 9, 'Bank A/c No'.$txt, 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 9, ''.$acc, 1, 'J', 1, 0, '', '', true, 0, false, true, 12, 'T');


$pdf->Ln();
////new end

//$html = '<div style="text-align:center; line-height:3px;">PERSONAL INFORMATION</div><br/>';
// $pdf->writeHTML($html, true, false, true, false, '');
// $tbl = '<br><table border="1" cellpadding="8">
// <tr>
// <td style="padding: 10px">Employee Name</td>
// <td style="padding: 10px">'.$name.'</td>
// </tr>
// <tr>
// <td>Employee Email</td>
// <td>'.$email.'</td>
// </tr>
// <tr>
// <td>Employee Id</td>
// <td>'.$empid.'</td>
// </tr>
// <tr>
// <td>Phone</td>
// <td>'.$phone.'</td>
// </tr>
// <tr>
// <td>Date Of Joining</td>
// <td>'.$jd.'</td>
// </tr>
// <tr>
// <td>Bank</td>
// <td>'.$bname.'</td>
// </tr>
// <tr>
// <td>Bank Account</td>
// <td>'.$bno.'</td>
// </tr>
// <tr>
// <td>IFSC</td>
// <td>'.$ifsc.'</td>
// </tr>

// </table><br/>';
   // }
//}
//}
// $pdf->writeHTML($tbl, true, false, true, false, 'C');
//Table02
//  include 'connection.php';
//  if(isset($_GET['id']) ){
//      $id = $_GET['id'];
//      $sql= "select e.*,s.desig, s.salary, d.epf, d.pt, d.hi, d.tds, d.deduction, b.bname, b.bno, b.ifsc, b.bbranch from emp e , salary s, deduction d, bank b where e.emp_id='$id' AND e.emp_id = s.emp_id AND e.emp_id = d.emp_id AND e.emp_id = b.emp_id";
 //    $result = $conn->query($sql);
 //    if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
//     {
//         $name = $row["name"];
//         $email = $row["email"];
//         $empid = $row["emp_id"];
//         $phone = $row["phone"];
//         $desig = $row["desig"];
//         $salary = $row["salary"];
//         $jd = $row['jdate'];
//         $bname = $row["bname"];
//         $bno = $row["bno"];
//         $ifsc = $row["ifsc"];
//         $epf = $row["epf"];
//         $pt = $row["pt"];
//         $hi = $row["hi"];
//         $tds = $row["tds"];
//         $bbranch = $row["bbranch"];
//         $salary = $row["salary"];
//         $ded = $row["deduction"];
//         $net = $row["salary"] - $row["deduction"];

// $html = '<div style="text-align:center; line-height:3px;">DEDUCTION</div><br/>';
// $pdf->writeHTML($html, true, false, true, false, '');
// $tbl = '<br><table border="1" cellpadding="8">
// <tr>
// <td style="padding: 10px">EPF</td>
// <td style="padding: 10px">'.$epf.'</td>
// </tr>
// <tr>
// <td>Professional Tax</td>
// <td>'.$pt.'</td>
// </tr>
// <tr>
// <td>Health Insurance</td>
// <td>'.$hi.'</td>
// </tr>
// <tr>
// <td>TDS</td>
// <td>'.$tds.'</td>
// </tr>
// <tr>

// </table><br/>';
//     }
// }
// }
// }
//$pdf->writeHTML($tbl, true, false, true, false, 'C');
// table starts from here

//life begins here---------------------------------------------------------->

//include 'connection.php';
//$date = 
// if(isset($_GET['id']) && isset($_GET['date'])){
//     $id = $_GET['id'];
//     $date = $_GET['date'];
//     //$date = $_date['date'];
//     $sql= "select deduction.* from deduction where deduction.date='$date' AND deduction.emp_id='$id'";

//     //$sql= "select e.*,s.desig, s.salary, d.deduction, b.bname, b.bno, b.ifsc, b.bbranch from emp e , salary s, deduction d, bank b where e.emp_id='$id' AND e.emp_id = s.emp_id AND e.emp_id = d.emp_id AND e.emp_id = b.emp_id";
//     $result = $conn->query($sql);
//    if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
//     {
//     //     $name = $row["name"];
//     //     $email = $row["email"];
//         $empid = $row["emp_id"];
//     //     $phone = $row["phone"];
//         $desig = $row["desig"];
//         $bs = $row['bs'];
//         $da = $row['da'];
//         $hra = $row['hra'];
//         $ca = $row['ca'];
//         $ma = $row['ma'];
//         $sa = $row['sa'];
//         $salary = $row["salary"];
//     //     $jd = $row['jdate'];
//     //     $bname = $row["bname"];
//     //     $bno = $row["bno"];
//     //     $ifsc = $row["ifsc"];
//     //     $bbranch = $row["bbranch"];
//     //     $salary = $row["salary"];
//         $epf = $row["epf"];
//         $pt = $row["pt"];
//         $hi = $row["hi"];
//         $tds = $row["tds"];
//         $ded = $row["deduction"];
//         $net = $row["salary"] - $row["deduction"];


//         // Vertical alignment
$pdf->MultiCell(90, 9, 'EARNINGS', 1, 'C', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(90, 9, 'DEDUCTIONS', 1, 'C', 1, 0, '', '', true, 0, false, true, 12, 'T');
// $pdf->MultiCell(44, 9, 'Bank A/c No'.$txt, 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
// $pdf->MultiCell(44, 9, ''.$bno, 1, 'J', 1, 0, '', '', true, 0, false, true, 12, 'T');


$pdf->Ln();

// Vertical alignment
$pdf->MultiCell(45, 21, 'Basic Salary', 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 21, 'Rs '.$basic, 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 21, 'EPF<br>Employee Contribution<br>Employee Contribution', 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 21, 'Rs '.$epfe.'<br>Rs '.$epfr, 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');


$pdf->Ln();

// Vertical alignment
$pdf->MultiCell(45, 10, 'Dearness Allowances', 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 10, 'Rs '.$da, 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 10, 'ESIC', 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 10, 'Rs '.$esic, 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');


$pdf->Ln();

// Vertical alignment
$pdf->MultiCell(45, 9, 'House Rent Allowances', 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 9, 'Rs '.$hra, 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 9, 'Health Insurance/ESI'.$txt, 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 9, 'Rs '.$hi, 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');


$pdf->Ln();

// // Vertical alignment
// $pdf->MultiCell(45, 9, 'Conveyance Allowances', 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
// $pdf->MultiCell(45, 9, 'Rs ', 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
// $pdf->MultiCell(45, 9, '', 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
// $pdf->MultiCell(45, 9, '', 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');


// $pdf->Ln();

// // Vertical alignment
// $pdf->MultiCell(45, 9, 'Medical Allowances', 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
// $pdf->MultiCell(45, 9, 'Rs '.$ma, 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
// $pdf->MultiCell(45, 9, '', 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
// $pdf->MultiCell(45, 9, '', 1, 'J', 1, 0, '', '', true, 0, false, true, 12, 'T');


// $pdf->Ln();

// Vertical alignment
$pdf->MultiCell(45, 9, 'Special Allowances', 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 9, 'Rs '.$sa, 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 9, 'LOP Days', 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 9, '', 1, 'J', 1, 0, '', '', true, 0, false, true, 12, 'T');


$pdf->Ln();

// Vertical alignment
$pdf->MultiCell(45, 9, 'Gross Salary', 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 9, 'Rs '.$gs, 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 9, 'Total Deductions', 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 9, 'Rs '.$td, 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');


$pdf->Ln();

// Vertical alignment
$pdf->MultiCell(135, 9, 'Net Pay', 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(45, 9, 'Rs '.$na, 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');

$pdf->Ln();

// Vertical alignment
$pdf->MultiCell(90, 11, 'Amount in Words', 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');
$pdf->MultiCell(90, 11, ''.$amountword.'Rupees only', 1, 'J', 1, 0, '', '', true, 0, true, true, 12, 'T');


$pdf->Ln();

}

    //     //$net = $row["salary"] - $row["deduction"];

// $html = '<div style="text-align:center; line-height:3px;">DEDUCTION</div><br/>';
// $pdf->writeHTML($html, true, false, true, false, '');
// $tbl = '<br><table border="1" cellpadding="8">
// <tr>
// <td>EPF</td>
// <td>'.$epf.'</td>
// </tr>
// <tr>
// <td>Professional tax</td>
// <td>'.$pt.'</td>
// </tr>
// <tr>
// <td>Health Insurance</td>
// <td>'.$hi.'</td>
// </tr>
// <tr>
// <td>TDS</td>
// <td>'.$tds.'</td>
// </tr>
// <tr>
// <td>Deduction</td>
// <td>'.$ded.'</td>
// </tr>

// </table><br/>';
//    }
// }
// }
// }
// $pdf->writeHTML($tbl, true, false, true, false, 'C');


// $html = '<table border="1" cellpadding="9">';
// $html .="<tr>
//         <th>Designation</th>
//         <th>Salary</th>
//         <th>Deduction</th>
//         <th>Net pay</th>
//         </tr>";


// include 'connection.php';
// if(isset($_GET['id']) && isset($_GET['date'])){
//     $id = $_GET['id'];
//     $date = $_GET['date'];
//     $sql= "select d.* from deduction d where d.date='$date' AND d.emp_id='$id'";
// //$sql= "select e.*,s.desig, s.salary, s.date, d.date, d.deduction from emp e , salary s, deduction d where s.date='$date' AND s.date = d.date AND e.emp_id='$id' AND e.emp_id = s.emp_id AND e.emp_id = d.emp_id";
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
//     {
//         $desig = $row["designation"];
//         $salary = $row["salary"];
//         $ded = $row["deduction"];
//         $net = $row["salary"] - $row["deduction"];

//         $html .="<tr>
//         <td>". $desig."</td>
//         <td>". $salary ."</td>
//         <td>". $ded ."</td>
//         <td>". $net ."</td>
//         </tr>";
//     }
// }
// }
// }
// $html .= '</table>';
// $pdf->writeHTML($html, true, false, true, false, '');
$html = '<div></div><img src="./TCPDF/examples/images/InShot_20230124_154749554.jpg" width="145"></img><h4>Naznin Nisha</h4>
<h3>HR &amp; Legal Manager</h3>';
$pdf->writeHTML($html, true, false, true, false, '');

//Close and output PDF document
$pdf->Output('"'.$id.'_'.$month.'".pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+