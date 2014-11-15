# PDF Merge for PHP

## Highlights

Pdf merging with modes portrait/landscape.

Tested in Laravel4 framework.

## Usage

//Create new merger instance

$merger = new PDFMerge;

// config params

$params = [
    'pages' => 'all',
    'orientation' => 'vertical'
];

//Put files IN

$merger

    ->addPDF('path/to/file.pdf', $params)

    ->addPDF('path/to/second/file.pdf')

   ->merge('file', 'path/to/output/directory/file.pdf');
