<?php use \yii\helpers\Html;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= ($this->title) ?></title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/media.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans|Cabin|Caveat|Chewy&display=swap" rel="stylesheet">
    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginPage() ?>
        <header class="header">
                <div class="container">
                    <nav class="navbar fixed-top navbar-expand-xl navbar-light navbar-image">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">

                        <?php
                        echo \yii\bootstrap\Nav::widget([
                            'options' => ['class' => 'navbar-nav '],
                            'items' => [
                                ['label' => 'Home', 'url' => ['/site/index']],
                                ['label' => 'Danila', 'url' => ['/site/danila']],
                                ['label' => 'About', 'url' => ['/site/about']],
                                ['label' => 'Contact',
                                    'items' => [
                                        ['label' => 'Level 1 - Dropdown A', 'url' => '#'],
                                        '<li class="divider"></li>',
                                        '<li class="dropdown-header">Dropdown Header</li>',
                                        ['label' => 'Level 1 - Dropdown B', 'url' => '#'],
                                    ],
                                ],

                                Yii::$app->user->isGuest ? (
                                    ['label' => 'Login', 'url' => ['/site/login']]
                                ) : (
                                    '<li>'
                                    . \yii\helpers\Html::beginForm(['/site/logout'], 'post')
                                    . \yii\helpers\Html::submitButton(
                                        'Logout (' . Yii::$app->user->identity->username . ')',
                                        ['class' => 'btn btn-link logout']
                                    )
                                    . \yii\helpers\Html::endForm()
                                    . '</li>'
                                )
                            ],
                        ]);
                        ?>
                        </div>

                        <?php /*

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
                        */?>
                    </nav>
                </div>
            </header>

            <div class="slider">
				<div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
					<div class="carousel-inner">
						  <div class="carousel-item active">
                            <img src="img/slider1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption">
                                <h3>Dogs can be heroes too!</h3>
                                <p></p>
                              </div>
                          </div>

						  <div class="carousel-item">
							<img src="img/slider2.jpg" class="d-block w-100" alt="...">
						  </div>
						  <div class="carousel-item">
							<img src="img/slider3.jpg" class="d-block w-100" alt="...">
						  </div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						  <span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						  <span class="carousel-control-next-icon" aria-hidden="true"></span>
						  <span class="sr-only">Next</span>
                        </a>

				</div>
        </div>

        <div class="container">
            <div class="col">
                <?=$content?>
            </div>
        </div>

        <div class="parallax-window" data-parallax="scroll" data-image-src="img/f2.jpg"></div>

        <div class="spacer"></div>

        <div class="section">
                <div class="container">
                    <div class="col">
                        <div class="single-post">
                            <h2>Ваша уверенность, только добросовестные ветеринары!</a></h2>
                            <p class="text">Мы предоставляем ветеринарным врачам онлайновую базу данных потенциальных доноров крови собак, домашних животных, таких же, как ваши!</p>
                            <p class="text">Ветеринары должны только зарегистрироваться у нас на AnimalBloodRegister.com, чтобы начать пользоваться нашими услугами.</p>
                            <p class="text">Это бесплатно для всех добросовестных ветеринаров. Там нет вступительного взноса.</p>
                            <p class="text">Ветеринары должны сначала зарегистрировать свою практику. Сначала они должны предоставить свой ветеринарный регистрационный номер.</p>
                            <p class="text">Каждая практика должна подтвердить свою запись по факсу, прежде чем они смогут начать использовать наш веб-сайт, в дополнение к этому каждый отдельный ветеринар должен предоставить свой ветеринарный регистрационный номер. Ветеринарный регистрационный номер является уникальным для каждого квалифицированного ветеринара, и в Соединенном Королевстве его может подтвердить Королевский коллаж ветеринарных хирургов.</p>
                            <p class="text">Получив логин у ветеринара, он может получить доступ к нашей базе данных, используя средства поиска на веб-сайте, разработанные для скорости и эффективности, чтобы дать им наилучшие шансы найти донора крови для своего пациента, это может быть ваша собака!</p>
                            <p class="text">Как только ветеринар найдет потенциального донора собаки, он / она может запросить контактные данные владельца, возможно, вы? Затем они могут связаться, чтобы договориться о пожертвовании. Просто, быстро и эффективно, именно то, что нам нужно в чрезвычайной ситуации.</p>
                            <p class="text">Ваш собственный ветеринар не должен быть зарегистрирован на нашем веб-сайте, мы попросим его контактные данные, когда вы присоединитесь, и могут связаться с ними с приглашением присоединиться. После регистрации вы можете пригласить друга присоединиться, добавив своих домашних животных в схему, если они того пожелают.</p>
                        </div>
                    </div>
                </div>
        </div>

<?php $this->endBody() ?>

    <script src="https://use.fontawesome.com/675ad26ce2.js"></script>
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/parallax.min.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>