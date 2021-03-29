<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <title>Document</title>
</head>
<style>
    .nav {
        width: 100%;
        display: flex;
        justify-content: space-between;

    }

    .nav div a {
        padding: 0 20px;
        font-size: 3rem;
        text-decoration: none;
        color: black;
        box-shadow: 0 0 50px 0 black;

    }

    .nav div a:hover {
        color: beige;
    }

    .container {
        width: 100vw;
        height: 60vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center
    }

    h1 {
        width: 37.2ch;
        font-size: 2rem;
        color: black;
        overflow: hidden;
        white-space: nowrap;
        animation: tapper 3s steps(35), blink .5s infinite;
        box-shadow: 0 0 50px 0 black;

    }

    @media only screen and (max-width: 600px) {
        h1 {
            width: 36.5ch;
            font-size: 1rem;
        }

        .container {
            height: 61vh;
        }

        .nav div a {
            padding: 4px;
            font-size: 20px;
        }

        .navv {
            margin-top: 0;
        }
    }


    @keyframes tapper {
        from {
            width: 0ch;
        }
    }

    @keyframes blink {
        50% {
            border-color: transparent;
        }
    }
</style>

<body>
    <header>
        <nav class="nav">
            <div>
                <a><i class="fab fa-yoast"></i>YouChat</a>
            </div>
            <div>
                <a href="register.php">Sing up</a>
                <a href="login.php">login</a>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <h1 class="tapper">Welcome back : Abdelilah Site YouChat <i class="far fa-laugh-wink"></i></h1>
        </div>
    </main>
</body>

</html>