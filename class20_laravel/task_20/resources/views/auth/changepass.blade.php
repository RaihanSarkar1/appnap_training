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
        #change_form{
            margin: auto;
            background: #ffffff;
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
                <form id="change_form" url="{{ url('changePass') }}" class="border p-3 mt-4" method="POST">
                    @csrf

                    <h3 id="welcome_txt">Change Your password.</h3>

                    @if ($errors->any())
                        <div class="bg-red p-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="input_Pass" class="form-label">Enter current password</label>
                        <input type="password" name="password" id="input_Pass" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="input_Pass" class="form-label">Enter new password</label>
                        <input type="password" name="password1" id="input_Pass" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="input_Pass" class="form-label">Retype new password</label>
                        <input type="password" name="password2" id="input_Pass" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <div class="">
                            <button type="submit" class="btn btn-danger">Change password</button>
                            <button type="button" onclick="window.history.back()" class="btn btn-primary">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>