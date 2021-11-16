<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./Photo-alblum/globe.gif" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Book-Server</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="nav-link active">BookServer<span id="check"></span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="Rhatha.php">ရသစာပေ
                                    <span class="badge bg-success">2</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="Funny.php">ဟာသစာပေ
                                    <span class="badge bg-success">1</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="Story.php">ပုံပြင်
                                    <span class="badge bg-success">4</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="Fiction.php">ဝတ္ထုစာပေ
                                    <span class="badge bg-success">1</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!--Slide-image start-->
            <!--Slide-image start-->
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./Photo-alblum/General_Aung_San_cropped.jpg" class="d-block w-100" alt="Aung-San">
                    </div>
                    <div class="carousel-item">
                        <img src="./Photo-alblum/library-book-bookshelf-read.jpg" class="d-block w-100"
                            alt="libary-book">
                    </div>
                    <div class="carousel-item">
                        <img src="./Photo-alblum/library-books-interior-monastery-wallpaper-preview.jpg"
                            class="d-block w-100" alt="libary-book">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div id="textphpfile"><?php include './Text/text.php'?>
            </div>
            <!--for mobile phone-->
            <!--for mobile phone-->
            <!--for mobile phone-->
            <div id="textphp">
                <div class="cards">
                    <div class="container-fluid">
                        <!--first paragraph starts-->
                        <div class="textandimg">
                            <div class="main-body">
                                <p class="text-break">ကိုယ့်ဘဝကို အရယူ သူများဘဝကိုလည်း ကိုယ်အရယူ
                                    ကိုယ့်ဘဝကိုအရယူချင်၊အတွေအကြုံကို
                                    မှတ်၊သူများဘဝကို ယူချင်၊သူတို့စာတွေဖတ်</p>
                            </div>
                            <img src="./Photo-alblum/sky.jpeg" alt="bagan1" width="100%">
                        </div>
                    </div>
                    <div style="border-bottom: 2px dotted red; padding-top:2px;"></div>
                    <br>
                    <!--first paragraph ends-->
                    <div class="container-fluid">
                        <div class="textandimg">
                        </div>
                        <div class="main-body">
                            <p class="text-break">မိတ်ကောင်းဆွေကောင်းဆိုသည်မှာ
                                တစ်ခါဆက်ဆံရုံနှင့်ပြီးသည်မဟုတ်ပေါင်းလေကောင်းလေဖြစ်သည်။စာကောင်းပေကောင်းဆိုသည်မှာ
                                တစ်ခါဖတ်ရုံနှင့်ပြီးသည်မဟုတ် အကြိမ်ကြိမ်ဖတ်ရသည်။ဖတ်လေမြတ်လေဖြစ်သည်။</p>
                        </div>
                        <img src="./Photo-alblum/fri&book.jpeg" alt="bagan1" width="100%">
                    </div>
                    <div style="border-bottom: 2px dotted red; padding-top:2px;"></div>
                    <br>
                    <!--second paragraph ends-->
                    <div class="container-fluid">
                        <div class="textandimg">
                            <img src="./Photo-alblum/time.jpeg" alt="bagan1" width="100%">
                            <div class="main-body">
                                <p class="text-break">အချိန်ကိုတန်ဖိုးထားသောသူသည် ဘဝကိုတန်ဖိုးထားသောသူဖြစ်သည်။</p>
                            </div>
                        </div>
                    </div>
                    <div style="border-bottom: 2px dotted red; padding-top:2px;"></div>
                    <br>
                </div>
            </div>
            <footer>
                <small>Copyright&copy;2021.BookServer, All rights reserved.</small>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script>
    const lineCheck = document.querySelector('#check');
    if (navigator.onLine) {
        lineCheck.classList.add('online');
    };
    </script>
</body>

</html>
<!-- osition: relative;
    display: none;
    float: left;
    width: 100%;
    margin-right: -100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    /* transition: transform .6s ease-in-out; -->