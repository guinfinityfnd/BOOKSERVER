<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="shortcut icon" href="/globe.gif">
    <link rel="stylesheet" href="spanTag.css">
    <link rel="stylesheet" href="darkmode.css">
    <title>ဟာသများနှင့်ရယ်စရာ</title>
</head>

<body>
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
        <h3>လူလည်ကြီး</h3>
        <?php include './Funny/thecleverman.php'?>
        <hr>
        <h3>အငှားချမိမယ်</h3>
        <?php include './Funny/angar_cha.php'?>
        <hr>
        <h3>မိုးပါးလိုက်ပုံက</h3>
        <?php include './Funny/moe_par_like_pone.php'?>
        <hr>
        <h3>ရည်းစားစာ</h3>
        <?php include './Funny/ye_sa_sar.php'?>
    </div>
    <script src="darkmode.js"></script>
    <script>
    const topButtonTag = document.querySelector('.topButton');
    window.onscroll = function() {
        scrollFunction();
        myFunction();
    }

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            topButtonTag.style.display = 'block';
        } else {
            topButtonTag.style.display = 'none';
        }
    }

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    //////////progress bar counter in top///////////
    function myFunction() {
        const mybar = document.querySelector('#myBar');
        let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        let scrolled = (winScroll / height) * 100;
        mybar.style.width = scrolled + '%';
    }
    </script>
</body>

</html>