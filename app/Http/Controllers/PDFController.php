<?php

namespace App\Http\Controllers;

use App\Models\Documents;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PDF;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Achievement record!',
            'recipient' => 'for Ivanov Ivan Ivanich',
            'message' => 'Congratulations!'
        ];

        $pdf = PDF::loadView('pdf', $data);

        $title = Str::random(15) . '.pdf';
        $path = public_path('/pdf/' . $title);
        $pdf->save($path . $title);
        $documetData = [
            'title' => $title,
            'path' => $path,
        ];
        $document = Documents::create($documetData);

        echo 'Successfully generated PDF';
        echo '<br>';
        echo '<a href="' . url('/pdf/' . $title) . '">Download</a>';
    }
}
