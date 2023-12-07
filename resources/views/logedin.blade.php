<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body class="container container-fluid pt-3">
    <div class="row">
        <h1>well hi there!</h1>
    </div>

    <div class="row justify-content-around">
        <div class="col-4">
            <p>Here's all your data cuz we don't care about security!</p>
        </div>

        <div class="col-4">
            <pre>@dump($user)</pre>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p>But thankfully, the Engineers at JUSTIA do! that's why they always implement the best practices on all their projects so that the end user get's as smooth as an experience as they can!</p>
            <p>Please be mindfull when creating your application or when adding features to it. SQL Injections can be prevented easily by simply making sure you sanitize your inputs before using them!</p>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-4">
            <a href="{{ route('home') }}?logout=1" class="btn btn-danger w-100">Good bye!</a>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
