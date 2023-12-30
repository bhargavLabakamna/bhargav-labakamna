<html>

    <head>

        <title>xxx</title>

    </head>

    <body>
        @if(session('success'))
        <span>{{session('success')}}</span>
        @endif

        <form action="{{url('/signinauth')}}" method="post">
        @csrf

            E-mail: <input type="email" name="email"><br><br>
            Password: <input type="password" name="password"><br><br>

            <input type="submit" name="submit" value="signin">

        </form>

    </body>

</html>