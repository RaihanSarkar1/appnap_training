<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(90deg, hsla(312, 66%, 76%, 1) 0%, hsla(234, 93%, 67%, 1) 100%);
        }
        #login_form{
            margin: auto;
            background: #ffffff;
            width: 60%;
            padding: 70px 100px;
        }

        input {
            width: 70%;
            margin: auto;
        }

        #welcome_txt {
            color: #343434;
            margin-bottom: 40px;
        }

        button {
            margin-top: 20px;  
            width: 200px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form id="login_form" class="border mt-5" url="{{ url('login') }}" method="post">
                    @csrf
                    <h3 id="welcome_txt">Welcome back. Please login to your account.</h3>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control"  name="password" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <div class="row">
                            <div class="col-6">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" style="float: left;" for="exampleCheck1">Remember me</label>
                            </div>
                            <div class="col-6"><a style="float: right;" href="forgot">Forgot password?</a></div>

                        </div>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>