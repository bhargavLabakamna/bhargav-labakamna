<html>
    <head></head>
    <body>
        <form action="{{url('/edit')}}/{{$customers->id}}" method="post">
            @csrf
            New Password: <input type="password" name="password">

            <input type="submit" name="submit" value="change password">
        </form>
    </body>
</html>