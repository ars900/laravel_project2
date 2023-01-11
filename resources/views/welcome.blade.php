<html>
<head>
    <title>Login Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap');
    </style>
</head>
<body>
<div class="container">
    <h2 class="text-center text-white p-2 pt-4">Login Form</h2>
    <div class="row m-4">
        <div class="col-md-6 col-sm-12 bg-custom none">
            <h1 class="text-center pt-3">Login Form</h1>
        </div>
        <div class="col-md-6 col-sm-12 bg-custom-form">
            <form action="#" class="p-3">
                <div class="form-group">
                    <label for="email">EMAIL</label>
                    <input type="password" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">PASSWORD</label>
                    <input type="password" class="form-control" id="pwd">
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Remember me
                    </label>
                </div>
                <button type="submit" class="btn btn-custom mb-3 mt-3">LOG IN</button>
            </form>
            <div style = "color: #4ed4b4">Dont have an account?&nbsp<a href = "/register"><span class = "RegLogCss" style = "color:white;cursor:pointer;">Register now</span></a></div>
        </div>
    </div>
</div>

<script src="js/main.js"></script>
</body>
</html>
