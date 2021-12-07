<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D-Day❤</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Single+Day&display=swap" rel="stylesheet">
    <?php
    echo "<meta http-equiv='refresh' content='0.5; url=(Your redirect Link!)'>";
    $rem = strtotime('2021-12-02 00:02:00') - time();
    $day = floor($rem / 86400);
    $hr  = floor(($rem % 86400) / 3600);
    $min = floor(($rem % 3600) / 60);
    $sec = ($rem % 60);
    ?>
</head>

<body>
    <div class="black-overlay"></div>
    <div class="container">
        <h1>D-Day❤</h1>
        <div class="countdown">
            <div>
                <p class="count-text"><?php if ($day) echo "$day "; ?></p>
                <span>일</span>
            </div>
            <div>
                <p class="count-text"><?php if ($hr) echo "$hr  "; ?></p>
                <span>시간</span>
            </div>
            <div>
                <p class="count-text"><?php if ($min) echo "$min "; ?></p>
                <span>분</span>
            </div>
            <div>
                <p class="count-text"><?php if ($sec) echo "$sec  "; ?></p>
                <span>초</span>
            </div>
        </div>
    </div>
    <div style="position: fixed; bottom: 5px; right: 5px;">
        Github:<a href="https://github.com/LeeWonchan4531">https://github.com/LeeWonchan4531</a><br>Copyrighted by
        Leewonchan
    </div>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url('background.jpg');
            background-size: cover;
            width: 100%;
            height: 100%;
            font-family: 'Single Day', cursive;
            position: relative;
        }

        .black-overlay {
            display: block;
            position: absolute;
            width: 100%;
            height: 100vh;
            opacity: 0.7;
            z-index: 1;
        }

        .container {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: rgb(0, 0, 0);
            text-align: center;
            z-index: 2;
            padding-top: 2rem;
        }

        h1 {
            font-size: 3rem;
        }

        .countdown {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-top: 4rem;
        }

        .countdown .count-text {
            font-size: 4rem;
            margin: 1rem 2rem;
        }

        .countdown span {
            font-size: 1.5rem;
        }

        @media (min-width: 576px) {
            h1 {
                font-size: 3rem;
            }

            .countdown .count-text {
                font-size: 4rem;
            }
        }

        @media (min-width: 768px) {
            .container {
                padding-top: 12rem;
            }

            .countdown {
                flex-direction: row;
            }

            h1 {
                font-size: 4rem;
            }

            .countdown .count-text {
                font-size: 6rem;
                margin: 1rem 3rem;
            }
        }

        @media (min-width: 992px) {
            .container {
                padding-top: 12rem;
            }

            h1 {
                font-size: 5rem;
            }

            .countdown .count-text {
                font-size: 8rem;
                margin: 2rem 3rem;
            }
        }

        @media (min-width: 1200px) {
            .container {
                padding-top: 12rem;
            }

            h1 {
                font-size: 5rem;
            }

            .countdown .count-text {
                font-size: 8rem;
                margin: 2rem 4rem;
            }
        }
    </style>
</body>

</html>
