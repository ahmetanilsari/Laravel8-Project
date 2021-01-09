<!DOCTYPE html>
<html>
<head>
    <title>Lavavel Test Page</title>
</head>
<body>

<h1>Laravel Test</h1>
Id no : {{$id}}<br>
Name : {{$name}}
<br>
<?php
echo "Id Number :", $id;
echo "<br>Name :", $name;
?>
<br>
<a href="{{route('home')}}">Ana Sayfa</a>

</body>
</html>
