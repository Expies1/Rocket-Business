<?php
$conn = mysqli_connect('localhost', 'root', '', 'maximdb');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
    <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
            crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/media.css">
</head>
<style>
    .intro {
        background: url(img/ph.jpg) center no-repeat;
    }
</style>
<body>
<div class="head__menu">
    <div class="container">
        <div class="row">
            <div class="left__items">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#"
                    ><img src="img/logo.png" alt=""
                        /></a>
                    <button
                            class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarNav"
                            aria-controls="navbarNav"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav items">
                            <li class="nav-item">
                                <a class="nav-link" style="color: #2b2b2b;" href="#"
                                >Услуги</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                        class="nav-link"
                                        style="color: #2b2b2b;"

                                        href="#"
                                >Портфолио</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color: #2b2b2b;" href="#"
                                >Отзывы</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color: #2b2b2b;" href="#"
                                >Вакансии</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color: #2b2b2b;" href="#"
                                >Контакты</a
                                >
                            </li>
                        </ul>

                        <ul class="right__menu">
                            <li class="bolds"><a href="#"> 8(863)243-15-10 </a></li>
                            <li>
                                <a href="#"> <b>Ростов-на-Дону</b> </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="intro">
    <div class="container">
        <div class="row row-cols-1">
            <h1 class="zag col-lg-6 col-md-7">Рекламно-информационное агенство</h1>
            <div class="w-100"></div>
            <p class="inform col-lg-6 col-md-7">
                Будем рады, если Вы обратитесь в наше Агенство. Мы готовы предложить
                Вам передовые решения для продвижения Вашего бизнеса
            </p>
            <div class="w-100"></div>
           
            <input class="feedb phone form-control col-lg-3 col-md-4 col-sm-4 col-4" type="text" placeholder="Номер телефона">
            <button class=" btn col-lg-2 col-md-3 col-sm-4 col-4">Обратный звонок</button>
        
        </div>
    </div>
</div>

<div class="newss">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 offset-lg-5" style="margin-bottom: 48px;">
                <h1 class="news_title">Новости</h1>
            </div>
            <div class="w-100"></div>

            
                <div class="news_card col-lg-4 ">
                    <div class="t red_color card size__card">
                        <div class="card-body">
                            <h5 class="card-title date">
                                <?php
                                $query = "SELECT `date` FROM `news` where id = 1";
                                $result = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                    $original_date = ("" . $row["date"]);
                                    $changed_date_view = strtotime($original_date);
                                    print_r(date('d.m.Y', $changed_date_view));
                                }
                                ?>
                            </h5>
                            <p class="card-text text__news">
                                <?php
                                $query = "SELECT `title` FROM `news` where id = 1";
                                $result = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                    print_r("" . $row["title"]);
                                }
                                ?></p>
                            <button class="podr"> Подробнее</button>
                        </div>
                    </div>
                </div>
            
            <div class="news_card col-lg-4">
                <div class="card size__card">
                    <div class="card-body">
                        <h5 class="card-title date">
                            <?php
                            $query = "SELECT `date` FROM `news` where id = 2";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_array($result)) {
                                $original_date = ("" . $row["date"]);
                                $changed_date_view = strtotime($original_date);
                                print_r(date('d.m.Y', $changed_date_view));
                            }
                            ?>
                        </h5>
                        <p class="card-text text__news">
                            <?php
                            $query = "SELECT `title` FROM `news` where id = 2";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_array($result)) {
                                print_r("" . $row["title"]);
                            }
                            ?>
                        </p>
                        <button class="podr"> Подробнее</button>
                    </div>
                </div>
            </div>
            
                <div class="news_card col-lg-4">
                    <div class="blue_color card size__card">
                        <div class="card-body">
                            <h5 class="card-title date">
                                <?php
                                $query = "SELECT `date` FROM `news` where id = 3";
                                $result = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                    $original_date = ("" . $row["date"]);
                                    $changed_date_view = strtotime($original_date);
                                    print_r(date('d.m.Y', $changed_date_view));
                                }
                                ?>
                            </h5>
                            <p class="card-text text__news">
                                <?php
                                $query = "SELECT `title` FROM `news` where id = 3";
                                $result = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                    print_r("" . $row["title"]);
                                }
                                ?>
                            </p>
                            <button class="podr"> Подробнее</button>
                        </div>
                    </div>
                </div>
            


            <div class="navig">


            </div>
        </div>
    </div>

</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer__menu">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="#"
                    ><img src="img/logo.png" alt=""
                        /></a>
                    <div class="footer_menu">
                        <a href="#">Услуги</a>
                        <a href="#">Портфолио</a>
                        <a href="#">Отзывы</a>
                        <a href="#">Вакансии</a>
                        <a href="#">Контакты</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>

</div>
<script
        src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"
></script>
<script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"
></script>
<script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"
></script>
</body>
</html>
