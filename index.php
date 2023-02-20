<?php
require_once 'vendor/autoload.php';

// Initialize and load PDF Parser library 
$parser = new \Smalot\PdfParser\Parser(); 
 
// Source PDF file to extract text 
$file = 'exemple.pdf'; 
 
// Parse pdf file using Parser library 
$pdf = $parser->parseFile($file); 
 
// Extract text from PDF 
$textContent = $pdf->getText();

// Replace new line with break

$pdfText = nl2br($textContent);

echo $pdfText;