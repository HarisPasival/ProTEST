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
        <div class="text-center mt-2">
            <div class="card">
                <div class="card-body">
                    <?php
                    if (isset($_POST['calculate'])) {
                        $tax = $_POST['tax'];
                        if ($tax <= "50000") {
                            print "ไม่เสียภาษี" . "<br>";
                            print "รายได้หลังหักค่าภาษี = " . $tax . " บาท";
                        } elseif ($tax <= 100000) {
                            $vat = ($tax * 7) / 100;
                            $sum = $tax - $vat;
                            print "ค่าภาษีที่เสีย 7% = " . $vat . " บาท" . "<br>";
                            print "เงินหลังหักภาษี = " . $sum . " บาท";
                        } elseif ($tax <= 500000) {
                            $vat = ($tax * 10) / 100;
                            $sum = $tax - $vat;
                            print "ค่าภาษีที่เสีย 10% = " . $vat . " บาท" . "<br>";
                            print "เงินหลังหักภาษี = " . $sum . " บาท";
                        } elseif ($tax <= 1000000) {
                            $vat = ($tax * 15) / 100;
                            $sum = $tax - $vat;
                            print "ค่าภาษีที่เสีย 15% = " . $vat . " บาท" . "<br>";
                            print "เงินหลังหักภาษี = " . $sum . " บาท";
                        } elseif ($tax > 1000000) {
                            $vat = ($tax * 20) / 100;
                            $sum = $tax - $vat;
                            print "ค่าภาษีที่เสีย 15% = " . $vat . " บาท" . "<br>";
                            print "เงินหลังหักภาษี = " . $sum . " บาท";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="text-center mt-2">
            <a class="btn btn-warning" href="vat.php">ย้อนกลับ</a>
        </div>
    </div>
</body>

</html>