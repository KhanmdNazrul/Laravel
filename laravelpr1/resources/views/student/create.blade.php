<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Student info. Form</h3>

    <form action="{{route('student.store')}}" method="post">
        @csrf
       Name: <input type="text" name="name"> <br>
      Email: <input type="text" name="email"> <br>
       Phone: <input type="text" name="phone"><br>
       <input type="submit" name="submit" value="Submit" >

    </form>
</body>
</html>