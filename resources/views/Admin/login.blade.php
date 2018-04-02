<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
{{Session::has('message') ? Session::get('message') : ''}}
<h1>用户注册</h1>
<form action="{{url('admin/save')}}" method="post">
    {{ csrf_field() }}
用户名: <input type="text" name="username"/><br/><br/>
密 码 : <input type="password" name="password"/><br/><br/>
<input type="submit" value="提交"/>
</form>
</body>
</html>
