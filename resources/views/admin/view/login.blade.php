<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC</title>
    <!-- Core CSS - Include with every page -->
    <link href="{{url('admin/assets/plugins/bootstrap/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{url('admin/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{url('admin/assets/plugins/pace/pace-theme-big-counter.css')}}" rel="stylesheet" />
   <link href="{{url('admin/assets/css/style.css')}}" rel="stylesheet" />
      <link href="{{url('admin/assets/css/main-style.css')}}" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="assets/img/logo.png" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password">
                                </div>

                                <button id="adminLogin" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="{{url('admin/assets/plugins/jquery-1.10.2.js')}}"></script>
    <script src="{{url('admin/assets/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{url('admin/assets/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{url('admin/assets/scripts/login.js')}}"></script>

</body>

</html>
