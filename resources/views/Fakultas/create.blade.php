<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <form action="/fakultas" method="post">
        @csrf
        <div class="mb-3">
            <h5>form pengisian data</h5>
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="text" class="form-control" id="NAMA" placeholder="MASUKKAN NAMA FAKULTAS">

            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="text" class="form-control" id="singkatan" placeholder="MASUKKAN SINGKATAN FAKULTAS">

            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="text" class="form-control" id="dekan" placeholder="MASUKKAN NAMA DEKAN FAKULTAS">
            <button type="submit" class="brn btn-primary mt-3"> submit </button>
        </div>

</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>