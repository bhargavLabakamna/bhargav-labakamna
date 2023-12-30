<html>

    <head>

        <title>xxx</title>

    </head>

    <body>

        <form action="{{url('insertpost')}}" method="post">
        @csrf

            Name: <input type="text" name="name"><br><br>
            Categorie_id: <input type="number" name="categorie_id"><br><br>
            customer_id: <input type="number" name="customer_id"><br><br>
            categorie_name: <input type="text" name="categorie_name"><br><br>
            

            <input type="submit" name="submit" value="post">

        </form>

    </body>

</html>