<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณภาษี</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-2">คำนวณภาษี</h1>
        <form action="culvat.php" method="POST" class="row g-3 mt-2">
            <div class="col-md-8">
                <input type="text" name="tax" class="form-control" placeholder="เงินเดือน" required>
            </div>
            <div class=" col-md-4 text-center">
                <button type="submit" name="calculate" class="btn btn-primary">คำนวณ</button>
                <button type="reset" class="btn btn-danger">รีเซ็ต</button>
            </div>
        </form>
    </div>
</body>

</html>