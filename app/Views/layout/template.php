<!DOCTYPE html>
<html>

<head>
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="/css/layout.css">

    <script>
        function totalIt() {
            var input = document.getElementsByName("harga[]");
            var input2 = document.getElementsByName("jumlah[]");
            var total = 0;
            for (var i = 0; i < input.length; i++) {
                if (input[i].checked) {
                    total += parseFloat(input[i].value * input2[i].value);
                }
            }
            document.getElementById("total").value = total;
        }
    </script>


</head>

<body>
    <!-- mengambil navbar -->
    <?= $this->include('layout/navbar'); ?>

    <div class="container" style="margin-top:90px">
        <!-- menghubungkan content -->
        <?= $this->rendersection('content'); ?>
    </div>
</body>

<footer class="text-center" style="margin-top: 120px;" id="background">
    <div class="text-center p-3" id="warnafooter">
        <div>
            &copy;2021 Copyright: Cofee Roastery
        </div>
    </div>
</footer>

</html>