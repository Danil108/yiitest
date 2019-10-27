<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
// my comment ******************************************************************
use app\models\EntryForm;
use app\models\TestForm;

// *****************************************************************************

class SiteController extends Controller
{
    public $layout = 'main';

// my code ***********************************************************************
    public function actionEntry()
    {
        $model = new EntryForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // данные в $model удачно проверены

            // делаем что-то полезное с $model ...

            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('entry', ['model' => $model]);
        }
    }
// *******************************************************************************


    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
//    public function actionAbout()
//    {
//        $this->view->title = 'О нас';
//        return $this->render('about');
//    }

    public function actionIndex()
    {
        $model = new TestForm();

        $this->view->title = 'Головна';
        return $this->render('index', compact('model'));
    }

    public function actionRegistration()
    {

        $this->view->title = 'Зареєструвати тварину';
        return $this->render('registration');
    }

    public function actionRegistrationClinic()
    {
        $this->view->title = 'Зареєструвати клініку';
        return $this->render('registration-clinic', []);
    }

    public function actionEntranceUser()
    {
        $this->view->title = 'Увійти для користувача';
        return $this->render('entrance-user', []);
    }

    public function actionEntrance()
    {
        $this->view->title = 'Увійти для пошуку донора';
        return $this->render('entrance', []);
    }

//    public function actionIndexTest()
//    {
//        $this->view->title = '';
//        return $this->render('index-test', []);
//    }

    public function actionDonorSearch()
    {
        $this->view->title = 'Пошук Донора';
        return $this->render('donor-search', []);
    }

    public function actionTransfusions()
    {
        $this->view->title = 'Трансфузія у тварин';
        return $this->render('transfusions', []);
    }

    public function actionQuestion()
    {
        $this->view->title = 'Часті запитання';
        return $this->render('questions', []);
    }

    public function actionContactUs()
    {
        $this->view->title = 'Зв’язатися з нами';
        return $this->render('contact-us', []);
    }

    public function actionSupportProject()
    {
        $this->view->title = 'Підтримати проект';
        return $this->render('support-project', []);
    }

    public function actionReviewsBook()
    {
        $this->view->title = 'Книга відгуків';
        return $this->render('reviews-book', []);
    }

}
