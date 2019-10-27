<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>golden-retriever</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans|Cabin|Caveat|Chewy&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="navbar fixed-top navbar-expand-xl navbar-light navbar-image">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="index.php">
                                <i class="fa fa-home" aria-hidden="true"></i>Головна</a></li>
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i><img class="dog-img" src="img/dog.svg"> </i> Реєстрація
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="registration.php">Зареєструвати тварину</a>
                                <a class="dropdown-item" href="registration-clinic.php"> Зареєструвати клініку</a>
                                
                                <a class="dropdown-item" href="entrance-user.php">Увійти для користувача</a>
                                <a class="dropdown-item" href="entrance.php">Увійти для пошуку донора</a>

                            </div>
                        </li>   
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-paw">Пошук донора</i> 
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="donor-search.php">Пошук</a>
                            </div>
                        </li>                                   
                        <li class="nav-item"><a class="nav-link" href="transfusions.php">Трансфузія у тварин</a></li>
                        <li class="nav-item"><a class="nav-link" href="questions.php">Часті запитання</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Зв’язатися з нами</a></li>
                        <li class="nav-item"><a class="nav-link" href="support-project.php">Підтримати проект</a></li>
                        <li class="nav-item"><a class="nav-link" href="reviews-book.php">Книга відгуків</a></li>
                    </ul>
                </div>
            </nav> 
        </div>
    </header>
            

        <div class="parallax-window-registration" data-parallax="scroll" data-image-src="img/f7.jpg"></div>

            <!-- Форма входу -->
            <form action="#" class="form">
                <div class="container form-white">
                    <div class="spacer"></div>
                    <h3 class="text-center text-Bubblegum">Увійти до власного кабінету</h3>
                <div class="row justify-content-center">
                <div class="col-md-6">
                    <input type="name" required class="form-control" id="name" placeholder="Ім'я" >
                    <input type="email" required class="form-control" id="email"  placeholder="Електронна адреса">
                    <input type="password" required class="form-control" id="userPassword"  placeholder="Пароль">

                    <div class="col-md-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-success w-50">Увійти</button>
                    </div>
                    </div>
                </div>
            </div>
        </form>

        <script src="https://use.fontawesome.com/675ad26ce2.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/parallax.min.js"></script>
        <script src="js/main.js"></script>
</body>
</html>