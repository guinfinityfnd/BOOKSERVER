<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="shortcut icon" href="/globe.gif">
    <link rel="stylesheet" href="darkmode.css">
    <title>ဝတ္ထုစာအုပ်</title>
</head>

<body style="user-select: none;">
    <div class="progress-container">
        <div class="progress-line" id="myBar"></div>
    </div>
    <div class="container-fluid">
        <div class="form-check form-switch" id="darkmode">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheck" style="cursor: pointer;"
                onclick="changeMode()">
            <label class="form-check-label" for="flexSwitchCheckChecked">Night</label>
        </div><br>
        <span onclick="history.back()" id="his-back">Back</span>
        <button class="topButton" onclick="topFunction()">&uarr;</button>
        <h2>သစ်နက်တောင်မြို့ဟောင်းသခင်မ</h2>
        <?php include './Fiction/thit_net.php'?>
    </div>
    <script src="darkmode.js"></script>
</body>

</html>