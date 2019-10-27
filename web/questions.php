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



            <div class="container">
              <div class="spacer"></div>
              <h3 class="text-Bubblegum">Доноры крови собак, вопросы ...</h3>
              <p>Пожалуйста, свяжитесь с нами, если у вас есть вопрос, который не включен здесь.</p>
                <div class="row">
                    <div class="col-md-9">
                                <div class="accordion" id="accordionExample">
            
                                        <div class="card">
                                          <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Сколько стоит присоединиться?
                                              </button>
                                            </h2>
                                          </div>
                                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                    TheDogBloodDonors.com свободен присоединиться.
                                                    Вы не будете платить за использование этого сайта.
                                            </div>
                                          </div>
                                        </div>
            
                                        <div class="card">
                                          <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Если это бесплатно, как вы финансируетесь?
                                              </button>
                                            </h2>
                                          </div>
                                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                    Нажмите » <a href="#">здесь</a> « для получения информации о нашем финансировании.
                                            </div>
                                          </div>
                                        </div>
            
                                        <div class="card">
                                          <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Могу ли я взять плату за сдачу крови моей собаки?
                                              </button>
                                            </h2>
                                          </div>
                                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body">
                                                    Традиционно пожертвования производятся без оплаты, хотя ветеринарная практика, берущая кровь, иногда может предложить жест доброй воли. Это не то, что DogBloodDonors.com, Регистр Крови Животных может контролировать, и это вопрос владельца донора и практики.
                                            </div>
                                          </div>
                                        </div>
                                        
                                        <div class="card">
                                                <div class="card-header" id="headingFour">
                                                  <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                                                          Если это бесплатно, как вы финансируетесь?
                                                    </button>
                                                  </h2>
                                                </div>
                                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                                  <div class="card-body">
                                                          Нажмите » здесь « для получения информации о нашем финансировании.
                                                  </div>
                                                </div>
                                        </div>
            
                                        <div class="card">
                                                <div class="card-header" id="headingFive">
                                                  <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                                                            Ветеринар связался со мной, но я передумал, могу ли я отменить?
                                                    </button>
                                                  </h2>
                                                </div>
                                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                                  <div class="card-body">
                                                        Вы имеете полное право отказаться от сдачи крови от вашей собаки. Если вы согласились на пожертвование, но не можете или не хотите продолжать, сообщите об этом ветеринару как можно скорее, он / она может положиться на вас.
                                                  </div>
                                                </div>
                                        </div>
            
                                        <div class="card">
                                                <div class="card-header" id="headingSix">
                                                  <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseTwo">
                                                            Это банк крови?
                                                    </button>
                                                  </h2>
                                                </div>
                                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                                  <div class="card-body">
                                                        Это не банк крови. Мы предоставляем контактную информацию владельцев с потенциальными донорами крови собак ветеринарным врачам. Ветеринары самостоятельно договариваются с владельцами домашних животных.
                                                  </div>
                                                </div>
                                        </div>
            
                                        <div class="card">
                                                <div class="card-header" id="headingSeven">
                                                  <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseTwo">
                                                            Мой питомец выжил благодаря найденному здесь донору, чем я могу вам помочь?
                                                    </button>
                                                  </h2>
                                                </div>
                                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                                  <div class="card-body">
                                                        Мы хотели бы услышать от всех, кто получает выгоду от нашего сервиса! Возможно, мы могли бы даже опубликовать вашу историю здесь на DogBloodDonors.com. Вы также можете помочь нам, продвигая наш сервис: сообщите другу или, если у вас есть веб-страница, разместите ссылку на наш сайт.
            
                                                        Есть практические способы, которыми вы могли бы помочь. Важно зарегистрировать как можно больше собак с типом крови. Рассматриваете ли вы возмещение ветеринара за анализ крови, они довольно недорогие?
                                                  </div>
                                                </div>
                                        </div>
            
                                        <div class="card">
                                                <div class="card-header" id="headingEight">
                                                  <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseTwo">
                                                            Моей собаке нужна кровь, переливание бесплатно?
                                                    </button>
                                                  </h2>
                                                </div>
                                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                                                  <div class="card-body">
                                                        Ветеринары обычно не получают прибыли от крови, которую сдают, но механизмы организации и проведения переливания отнимают много времени и требуют определенных затрат. Поэтому обычно взимается плата за проведение переливания крови пациенту.
                                                  </div>
                                                </div>
                                        </div>
            
                                        <div class="card">
                                                <div class="card-header" id="headingNine">
                                                  <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseTwo">
                                                            Можете ли вы рассказать мне больше о фактических пожертвованиях?
                                                    </button>
                                                  </h2>
                                                </div>
                                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                                                  <div class="card-body">
                                                        Вы можете найти краткое описание донорства крови собаки здесь .
                                                  </div>
                                                </div>
                                        </div>
            
                                        <div class="card">
                                                <div class="card-header" id="headingTen">
                                                  <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTwo">
                                                            Откуда я знаю, что этот человек настоящий ветеринар?
                                                    </button>
                                                  </h2>
                                                </div>
                                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                                                  <div class="card-body">
                                                        Я добавил своего питомца, и кто-то позвонил мне, чтобы договориться о пожертвовании. Откуда мне знать, что этот человек - настоящий ветеринар?
            
                                                        Мы принимаем меры для обеспечения того, чтобы только квалифицированные ветеринары могли использовать наш веб-сайт. Однако, если у вас есть сомнения, вы должны отметить, что все ветеринары, использующие наши услуги, должны принадлежать практике. Вы можете подтвердить его / ее личность, позвонив на практику напрямую, если хотите.
                                                        
                                                        СОВЕТ: Есть много сайтов в стиле каталогов, где вы можете получить независимую контактную информацию, просто поищите в Google или Yahoo. Кроме того: на нашем веб-сайте, когда ветеринар запрашивает ваши контактные данные, он должен открыть «Билет для контакта», в то время как билет открыт, вы можете просмотреть записанные нами подробности практики. К ним относятся контактные телефоны и т. Д.
                                                  </div>
                                                </div>
                                        </div>
                                        
                                        <div class="card">
                                                <div class="card-header" id="headingEleven">
                                                        <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseTwo">
                                                                Я добавил свою собаку, но ветеринары не вступили в контакт?
                                                        </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            Там может быть много причин. Когда ветеринар просматривает наши списки, он / она должен связаться с владельцами домашних животных, которые наилучшим образом отвечают их требованиям.
                
                                                            Расположение также является важным фактором. Естественно предположить, что ветеринары сначала будут искать доноров в своем городе или регионе. Если ветеринары в вашем регионе не нуждаются, это может занять некоторое время, возможно, никогда. Мы уверены, что все ветеринары, которые используют наш сайт, ценят вашу приверженность.                                      </div>
                                                </div>
                                        </div>                                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-12">
                    <div class="card-border">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Обновления системы</h5>
                                <p class="card-text">После более чем десяти лет непрерывного обслуживания мы в настоящее время модернизируем наши системы, чтобы предлагать более быстрые и более эффективные средства. Эти обновления планируется завершить в конце этого года.</p>
                            </div>
                        </div>
                    </div>
                </div>
                   

                </div>
            </div>




            <script src="https://use.fontawesome.com/675ad26ce2.js"></script>
            <script src="js/jquery-3.3.1.min.js"></script>
            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/parallax.min.js"></script>
            <script src="js/main.js"></script>
</body>
</html>