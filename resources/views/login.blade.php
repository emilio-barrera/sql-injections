<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>
<body class="container container-fluid">
    <div class="row vh-100 align-items-center">
        <div class="row justify-content-center">
            <div class="col-4 p-4 rounded-4" style="align-content: space-around; background: #efefef">
                <div class="row justify-content-center">
                    <div class="col-3"><h3>Not</h3></div>
                    <div class="col-6">
                        <img src="https://justatic.com/v/20170809141636/branding/logos/justia.svg" alt="">
                    </div>
                </div>
                @if (isset($error))
                    <div class="row mt-3 bg-danger">
                        <h3>Invalid data; try again!</h3>
                    </div>
                @endif
                <form action="{{ route('attemptLogin') }}" method="post">
                    @csrf
                    <div class="row mt-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input id="user_input" name="user_input" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                          </div>
                    </div>
                    <div class="row mt-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">*</span>
                            <input id="pass_input" name="pass_input" type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                          </div>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <div class="col-6"><button class="btn btn-primary w-100">Login</button></div>
                    </div>
                </form>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="row">
                    <h1>What is going on here?</h1>
                </div>
                <div class="row">
                    <code style="font-size: 2em">SELECT * from users where email = <strong>'<span id="name"></span>'</strong> and password = <strong>'<span id="pass"></span>'</strong></code>
                </div>
            </div>

        </div>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    let usernameInput = document.getElementById("user_input");
    let passInput = document.getElementById("pass_input");

    usernameInput.oninput = function () {
        document.getElementById('name').innerHTML = usernameInput.value;
    };


    passInput.oninput = function () {
        document.getElementById('pass').innerHTML = passInput.value;
    };

</script>

</html>
