<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <!--<link rel="stylesheet" href="scripts/responsive.css">-->
    </head>
    <body>
        <div class="container">
            <header>
                <a class="title" href="./">
                <img src="images/zirtaro.png" alt="">
                <span>giranaga</span>
                </a>
                <div class="menu-list">
                    <a href="/link">
                        <div class="menu-content">
                            <span>リンク</span>
                        </div>
                    </a>
                </div>
            </header>
            <div class="contents">
                @yield('contents')
            </div>
            <footer>
                <span> 2021 giranaga </span>
            </footer>
        </div>
    </body>
</html>