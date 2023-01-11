<?php

include("configure.php");

require __DIR__ . "/vendor/autoload.php";

use Dompdf\Dompdf;
use Dompdf\Options;

$fullname= $_GET['fullname'];
$email = $_GET['email'];
$mobile = $_GET['mobile'];
$dogo = $_GET['dogo'];
$hire_you = $_GET['hire_you'];
$achievements = $_GET['achievements'];
$position = $_GET['position'];
$have_laptop_internetconnection = $_GET['have_laptop_internetconnection'];
$know_aboutus = $_GET['know_aboutus'];

//$html = '<h1 style="color: green">Example</h1>';
//$html .= "Hello <em>$name</em>";
//$html .= '<img src="example.png">';
//$html .= "Quantity: $quantity";

/**
 * Set the Dompdf options
 */
$options = new Options;
$options->setChroot(__DIR__);
$options->setIsRemoteEnabled(true);

$dompdf = new Dompdf($options);

/**
 * Set the paper size and orientation
 */
$dompdf->setPaper("A4", "landscape");

/**
 * Load the HTML and replace placeholders with values from the form
 */
$html = file_get_contents("index.php");
$html = str_replace("{{fullname}}", $fullname, $html);
$html = str_replace("{{email}}", $email, $html);
$html = str_replace("{{mobile}}", $mobile, $html);
$html = str_replace("{{dogo}}", $dogo, $html); 
$html = str_replace("{{hire_you}}", $hire_you, $html);
$html = str_replace("{{achievements}}", $achievements, $html);
$html = str_replace("{{position}}", $position, $html);
$html = str_replace("{{have_laptop_internetconnection}}", $have_laptop_internetconnection, $html);
$html = str_replace("{{know_aboutus}}", $know_aboutus, $html);



$dompdf->loadHtml($html);
//$dompdf->loadHtmlFile("template.html");

/**
 * Create the PDF and set attributes
 */
$dompdf->render();


/**
 * Send the PDF to the browser
 */
$dompdf->stream("invoice.pdf", ["Attachment" => 0]);

/**
 * Save the PDF file locally
 */
$output = $dompdf->output();
file_put_contents("file.pdf", $output);