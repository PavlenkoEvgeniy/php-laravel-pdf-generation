<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Грамота</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .certificate {
            width: 680px;
            margin: 0;
            padding: 20px;
            border: 2px solid #000;
        }
        .title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .recipient {
            text-align: center;
            font-size: 20px;
            margin-bottom: 30px;
        }
        .message {
            font-size: 18px;
            text-align: center;
            margin-bottom: 30px;
        }
        .signature {
            text-align: center;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="certificate">
        <div class="title">ГРАМОТА</div>
        <div class="recipient">Награждается</div>
        <div class="message">За выдающиеся достижения в области [Укажите область]</div>
        <div class="signature">
            <p>___________________________</p>
            <p>Подпись</p>
            <p>Дата: [Укажите дату]</p>
        </div>
    </div>

    <button><a href="{{ route('generate-pdf') }}">Save as PDF</a></button>
</body>
</html>
