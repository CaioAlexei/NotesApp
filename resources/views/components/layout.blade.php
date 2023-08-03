<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>My Notes</title>
</head>
<body>

<div class="container">

    <div class="d-flex justify-content-center">
        <h1>My Notes</h1>

    </div>

</div>

<div class="container">

    <div class="d-flex justify-content-center mt-4 gap-3">

        <a href="/cards" class="btn btn-dark btn-sm">View Notes</a>
        <a href="/cards/create" class="btn btn-dark btn-sm">Add Note</a>

    </div>

</div>

{{$slot}}

</body>
</html>

