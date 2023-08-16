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
        }

        #input_email {
            margin: auto;
            width: 70%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form id="login_form" class="border p-3 mt-4 text-center">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Enter a valid email address</label>
                        <input type="email" id="input_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <div class="mb-3">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Request password reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>