<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if (session('msg'))
    <div class="alert">{{session('msg')}}</div>
    @endif

    <h1>Student List</h1>
    
   @foreach ($students as $student)
  Name:  {{$student->name}} <br>
  Email:  {{$student->email}} <br>
  Phone:  {{$student->phone}} &nbsp;&nbsp; &nbsp;<br><br>

   @endforeach
</body>
</html>