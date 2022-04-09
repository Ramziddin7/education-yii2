<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use backend\models\Registration;
use yii\data\Pagination;
use backend\models\OurCourses;
use backend\models\Teachers;
use backend\models\AddVideo;
use backend\models\Events;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }


    


     /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionSearch()
    {
       $search = trim(Yii::$app->request->get('search'));

       if(!empty($search)){
          $ourcourses = Ourcourses::find()->where(['like','name_uz',$search])->all();
            if($ourcourses == true){
                return $this->render('search',[
                    'ourcourses' => $ourcourses,
                    ]);
                }else{
                    $ourcourses = Ourcourses::find()->where(['like','name_ru',$search])->all();
                    if($ourcourses == true){
                        return $this->render('search',[
                            'ourcourses' => $ourcourses,
                            ]);
                    }else{
                        $ourcourses = Ourcourses::find()->where(['like','name_en',$search])->all();
                         if($ourcourses == true){
                            return $this->render('search',[
                                'ourcourses' => $ourcourses,
                                ]);
                         }else{
                            $ourcourses = Ourcourses::find()->where(['like','content_uz',$search])->all();
                            if($ourcourses == true){
                                return $this->render('search',[
                                    'ourcourses' => $ourcourses,
                                    ]);
                            }else{
                                $ourcourses = Ourcourses::find()->where(['like','content_ru',$search])->all();
                                if($ourcourses == true){
                                    return $this->render('search',[
                                        'ourcourses' => $ourcourses,
                                        ]);
                                }else{
                                    $ourcourses = Ourcourses::find()->where(['like','content_en',$search])->all();
                                    if($ourcourses == true){
                                        return $this->render('search',[
                                            'ourcourses' => $ourcourses,
                                            ]);
                                    }else{
                                        $ourcourses = Ourcourses::find()->where(['like','date',$search])->all();
                                        if($ourcourses == true){
                                            return $this->render('search',[
                                                'ourcourses' => $ourcourses,
                                                ]);
                                        }else{
                                            $teachers = Teachers::find()->where(['like','name_uz',$search])->all();
                                            if($teachers == true){
                                                return $this->render('search',[
                                                    'teachers' => $teachers,
                                                    ]);
                                            }else{
                                                $teachers = Teachers::find()->where(['like','name_ru',$search])->all();
                                                if($teachers == true){
                                                    return $this->render('search',[
                                                        'teachers' => $teachers,
                                                    ]);
                                                }else{
                                                    $teachers = Teachers::find()->where(['like','name_en',$search])->all();
                                                      if($teachers == true){
                                                        return $this->render('search',[
                                                            'teachers' => $teachers,
                                                        ]);
                                                      }else{
                                                        $teachers = Teachers::find()->where(['like','field_uz',$search])->all();
                                                           if($teachers == true){
                                                            return $this->render('search',[
                                                                'teachers' => $teachers,
                                                                ]);
                                                           }else{
                                                            $teachers = Teachers::find()->where(['like','field_ru',$search])->all();
                                                            if ($teachers == true){
                                                                return $this->render('search',[
                                                                    'teachers' => $teachers,
                                                                    ]);
                                                            }else{
                                                                $teachers = Teachers::find()->where(['like','field_en',$search])->all();
                                                                if($teachers == true){
                                                                    return $this->render('search',[
                                                                        'teachers' => $teachers,
                                                                        ]);
                                                                }else{
                                                                    $teachers = Teachers::find()->where(['like','telegram',$search])->all();
                                                                    if($teachers == true){
                                                                        return $this->render('search',[
                                                                            'teachers' => $teachers,
                                                                            ]);
                                                                    }else{
                                                                        $teachers = Teachers::find()->where(['like','facebook',$search])->all();
                                                                        if($teachers == true){
                                                                            return $this->render('search',[
                                                                                'teachers' => $teachers,
                                                                                ]);
                                                                        }else{
                                                                            $teachers = Teachers::find()->where(['like','instagram',$search])->all();
                                                                             if($teachers == true){
                                                                                return $this->render('search',[
                                                                                    'teachers' => $teachers,
                                                                                    ]);
                                                                             }else{
                                                                                $teachers = Teachers::find()->where(['like','phone',$search])->all();
                                                                                 if($teachers == true){
                                                                                    return $this->render('search',[
                                                                                        'teachers' => $teachers,
                                                                                        ]);
                                                                                 }else{
                                                                                    $events = Events::find()->where(['like','title_uz',$search])->all();
                                                                                    if( $events == true){
                                                                                        return $this->render('search',[
                                                                                            'events' => $events,
                                                                                            ]);
                                                                                    }else{
                                                                                        $events = Events::find()->where(['like','title_ru',$search])->all();
                                                                                        if($events == true){
                                                                                            return $this->render('search',[
                                                                                                'events' => $events,
                                                                                                ]);
                                                                                        }else{
                                                                                            $events = Events::find()->where(['like','title_en',$search])->all();
                                                                                            if($events == true){
                                                                                                return $this->render('search',[
                                                                                                    'events' => $events,
                                                                                                    ]);
                                                                                            }else{
                                                                                                $events = Events::find()->where(['like','moreinformation_uz',$search])->all();
                                                                                                if($events == true){
                                                                                                    return $this->render('search',[
                                                                                                        'events' => $events,
                                                                                                        ]);
                                                                                                }else{
                                                                                                    $events = Events::find()->where(['like','moreinformation_ru',$search])->all();
                                                                                                    if($events == true){
                                                                                                        return $this->render('search',[
                                                                                                            'events' => $events,
                                                                                                            ]);
                                                                                                    }else{
                                                                                                        $events = Events::find()->where(['like','moreinformation_en',$search])->all();
                                                                                                        if($events == true){
                                                                                                            return $this->render('search',[
                                                                                                                'events' => $events,
                                                                                                                ]);
                                                                                                        }else{
                                                                                                            $events = Events::find()->where(['like','where_uz',$search])->all();
                                                                                                            if($events == true){
                                                                                                                return $this->render('search',[
                                                                                                                    'events' => $events,
                                                                                                                    ]);
                                                                                                            }else{
                                                                                                                $events = Events::find()->where(['like','where_ru',$search])->all();
                                                                                                                if($events == true){
                                                                                                                    return $this->render('search',[
                                                                                                                        'events' => $events,
                                                                                                                        ]);
                                                                                                                }else{
                                                                                                                    $events = Events::find()->where(['like','where_en',$search])->all();
                                                                                                                    if($events == true){
                                                                                                                        return $this->render('search',[
                                                                                                                            'events' => $events,
                                                                                                                            ]);
                                                                                                                    }else{
                                                                                                                        return $this->render('search',[
                                                                                                                            'events' => $events,
                                                                                                                            'teachers' => $teachers,
                                                                                                                            'ourcourses' => $ourcourses,
                                                                                                                            ]);
                                                                                                                    }
                                                                                                                }
                                                                                                            }
                                                                                                        }
                                                                                                    }
                                                                                                }
                                                                                            }
                                                                                        }
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                 }
                                                             }
                                                        }
                                                      }
                                                 }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
                                    

    
    /**
     * Displays corse.
     *
     * @return mixed
     */
    public function actionCourse()
    {
        $newvideo = AddVideo::find()->where(['type_menu' => '2'])->limit(1)->all();

        $ourcourse = OurCourses::find()->orderBy(['id'=> SORT_DESC]);
        $count = $ourcourse->count();
        $pagination = new Pagination([
            'totalCount'=>$count,
            'pageSize' => 5,
        ]);
        $ourcourse = $ourcourse->limit($pagination->limit)->offset($pagination->offset)->all();

        $teachers = Teachers::find()->where(['type'=>'1'])->orderBy(['id' => SORT_DESC])->limit(4)->all();
        return $this->render('course',[
            'ourcourse' =>$ourcourse,
            'pagination' => $pagination,
            'teachers' => $teachers,
            'newvideo'=> $newvideo,
        ]);
    }



        /**
     * Displays teachers.
     *
     * @return mixed
     */
    public function actionTeacher()
    {
        $newvideo = AddVideo::find()->where(['type_menu' => '3'])->limit(1)->all();
        $teachers = Teachers::find()->orderBy(['id' => SORT_DESC]);
        $count = $teachers->count();
        $pagination = new Pagination([
            'totalCount' => $count,
            'pageSize'=> 8,
        ]);
        $teachers = $teachers->limit($pagination->limit)->offset($pagination->offset)->all();
        return $this->render('teacher',[
            'teachers' => $teachers,
            'pagination'=> $pagination,
            'newvideo'=> $newvideo,
        ]);
    }


            /**
     * Displays events.
     *
     * @return mixed
     */
    public function actionEvent()
    {
        $newvideo = Events::find()->orderBy(['id' => SORT_DESC]);
        $navvideo = Events::find()->limit(1)->orderBy(['id' => SORT_DESC])->all();
        $count = $newvideo->count();
        $pagination = new Pagination([
            'totalCount' => $count,
            'pageSize'=> 9,
        ]);
        $newvideo = $newvideo->limit($pagination->limit)->offset($pagination->offset)->all();
        return $this->render('event',[
            'newvideo' =>$newvideo,
            'pagination'=>$pagination,
            'navvideo' =>$navvideo,
        ]);
    }



             /**
     * Displays aboutus.
     *
     * @return mixed
     */
    public function actionAboutus()
    {
        $newvideo = AddVideo::find()->where(['type_menu' => '5'])->limit(1)->all();
        return $this->render('aboutus',[
            'newvideo' => $newvideo,
        ]);
    }


    /**
     * Logs in a user.
     *
     * @return mixed
     */
    // public function actionLogin()
    // {
    //     if (!Yii::$app->user->isGuest) {
    //         return $this->goHome();
    //     }

    //     $model = new LoginForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->login()) {
    //         return $this->goBack();
    //     } else {
    //         $model->password = '';

    //         return $this->render('login', [
    //             'model' => $model,
    //         ]);
    //     }
    // }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
       return $this->render('contact');
    }

    public function actionView(){
        $today = date('Y-M-d H:i:s');
        $model = new Registration();

        $name = trim(Yii::$app->request->get('name'));
        $age = trim(Yii::$app->request->get('age'));
        $subject = trim(Yii::$app->request->get('subject'));
        $begining_date  = trim(Yii::$app->request->get('begining_date'));
        $duration = trim(Yii::$app->request->get('duration'));
        $phone = trim(Yii::$app->request->get('phone'));
        $address = trim(Yii::$app->request->get('address'));

        if(!empty($name) || !empty($age) || !empty($subject) || !empty($begining_date) || !empty($duration) || !empty($phone) || !empty($address)){
            $model->name = $name;
            $model->age = $age;
            $model->subject = $subject;
            $model->begining_date = $begining_date;
            $model->duration = $duration;
            $model->phone = $phone;
            $model->address = $address;
            $model->enrolled = $today;
           
            if( $model->save()){
                \Yii::$app->session->setFlash('success', 'good, saved');
                return $this->render('contact',[
                    'model' => $model,
            ]);
            }else{
                \Yii::$app->session->setFlash('error', 'Sorry, Error accured!');
                return $this->render('contact',[
                    'model' => $model,
                ]);
            }
        }
    }


    
    // if ($model->load(Yii::$app->request->post())) {
    //     $model->enrolled = $today;
    //     $model->save();
        
    //     return $this->render('view',[
    //     ]);
    // } else {
    //    
    // }
    /**
     * Signs user up.
     *
     * @return mixed
     */
    // public function actionSignup()
    // {
    //     $model = new SignupForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->signup()) {
    //         Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
    //         return $this->goHome();
    //     }

    //     return $this->render('signup', [
    //         'model' => $model,
    //     ]);
    // }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    // public function actionRequestPasswordReset()
    // {
    //     $model = new PasswordResetRequestForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->validate()) {
    //         if ($model->sendEmail()) {
    //             Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

    //             return $this->goHome();
    //         } else {
    //             Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
    //         }
    //     }

    //     return $this->render('requestPasswordResetToken', [
    //         'model' => $model,
    //     ]);
    // }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    // public function actionResetPassword($token)
    // {
    //     try {
    //         $model = new ResetPasswordForm($token);
    //     } catch (InvalidArgumentException $e) {
    //         throw new BadRequestHttpException($e->getMessage());
    //     }

    //     if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
    //         Yii::$app->session->setFlash('success', 'New password saved.');

    //         return $this->goHome();
    //     }

    //     return $this->render('resetPassword', [
    //         'model' => $model,
    //     ]);
    // }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    // public function actionVerifyEmail($token)
    // {
    //     try {
    //         $model = new VerifyEmailForm($token);
    //     } catch (InvalidArgumentException $e) {
    //         throw new BadRequestHttpException($e->getMessage());
    //     }
    //     if ($user = $model->verifyEmail()) {
    //         if (Yii::$app->user->login($user)) {
    //             Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
    //             return $this->goHome();
    //         }
    //     }

    //     Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
    //     return $this->goHome();
    // }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    // public function actionResendVerificationEmail()
    // {
    //     $model = new ResendVerificationEmailForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->validate()) {
    //         if ($model->sendEmail()) {
    //             Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
    //             return $this->goHome();
    //         }
    //         Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
    //     }

    //     return $this->render('resendVerificationEmail', [
    //         'model' => $model
    //     ]);
    // }
}
