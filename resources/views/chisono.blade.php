<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>

<body>
<h1> {{ $title }}</h1>  
<h2> {{ $subtitle }}</h2>

<ul>
    @foreach($list as $item)
    <li>{{$item}}</li>
    @endforeach
</ul>
</body>
</html>