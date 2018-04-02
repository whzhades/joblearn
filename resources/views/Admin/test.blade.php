<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>Insert title here</title>
</head>
<body>
{{--{{Session::has('message') ? Session::get('message') : 'abc'}}--}}


    <table class="table table-hover">
        <th>
            <td>type</td>
            <td>name</td>
        </th>
        @foreach($user as $value)
        <tr>
            <td>{{$value ->member_type}}</td>
            <td></td>
        </tr>
        @endforeach
    </table>

<p>{{$user}}</p>


</body>
</html>
