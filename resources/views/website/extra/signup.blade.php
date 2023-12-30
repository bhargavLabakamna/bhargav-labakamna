<html>

    <head>

        <title>xxx</title>

    </head>

    <body>

        <form action="{{$url}}" method="post">
        @csrf

            Name: <input type="text" name="name"><br><br>
            E-mail: <input type="email" name="email"><br><br>
            Password: <input type="password" name="password"><br><br>

            <input type="submit" name="submit" value="signup">

        </form>

    </body>

</html>