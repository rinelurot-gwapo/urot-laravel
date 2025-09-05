<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Landing Page - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../../../landing-welcome/assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../../../landing-welcome/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="#!">Start Bootstrap</a>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <h1 class="mb-5">WELCOME TO MARVELOUS</h1>
                             <div style = "display: flex; align-items: center; justify-content: center;">
                                <a href="{{route ('login')}}">
                                    <div>
                                        <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">LOGIN</button>
                                    </div>
                                </a>

                                <a href="{{route ('register')}}">
                                    <div>
                                        <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">REGISTER</button>
                                    </div>
                                </a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
      
    </body>
</html>
