<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Xin chao{{$userName}}</h2>
<p>Cam on ban da dang ki thanh vien </p>
<p>Xin moi xac thuc tai khoan de tiep tuc su dung he thong</p>

<button>
    <a href="{{route('verify',$token)}}">Xac thuc tai khoan</a>
</button>
</body>
</html>
