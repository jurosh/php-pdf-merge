<?php require '../vendor/autoload.php';

// create merger instance
$pdf = new \Jurosh\PDFMerge\PDFMerger;

// do work

// add as many pdfs as you want
// $pdf->addPDF('path/to/source/file.pdf', 'all', 'vertical')
//  ->addPDF('path/to/source/file1.pdf', 'all')
//  ->addPDF('path/to/source/file2.pdf', 'all', 'horizontal');

// call merge
//$pdf->merge('file', 'path/to/export/dir/file.pdf');
//

$pdf->addPDF('example1.pdf', 'all', 'vertical')
    ->addPDF('example2.pdf', 'all', 'horizontal');

$pdf->merge('file', 'merged.pdf');
