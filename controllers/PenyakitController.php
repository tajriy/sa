<?php
    namespace app\controllers;

    use app\models\Kf;
    use Yii;
    use app\models\Penyakit;
    use app\models\PenyakitSearch;
    use yii\web\Controller;
    use yii\web\NotFoundHttpException;
    use yii\filters\VerbFilter;
    use yii\web\UploadedFile;

    /**
     * PenyakitController implements the CRUD actions for Penyakit model.
     */
    class PenyakitController extends Controller{
        /**
         * @inheritdoc
         */
        public function behaviors()
        {
            return [
                'verbs' => [
                    'class'   => VerbFilter::className() ,
                    'actions' => [
                        'delete' => ['POST'] ,
                    ] ,
                ] ,
            ];
        }

        /**
         * Lists all Penyakit models.
         * @return mixed
         */
        public function actionIndex()
        {
            $searchModel = new PenyakitSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

            return $this->render('index' , [
                'searchModel'  => $searchModel ,
                'dataProvider' => $dataProvider ,
            ]);
        }

        /**
         * Displays a single Penyakit model.
         *
         * @param string $id
         *
         * @return mixed
         */
        public function actionView($id)
        {
            return $this->render('view' , [
                'model' => $this->findModel($id) ,
            ]);
        }

        /**
         * Creates a new Penyakit model.
         * If creation is successful, the browser will be redirected to the 'view' page.
         * @return mixed
         */
        public function actionCreate()
        {
            $model = new Penyakit();
            $kd = new Kf();
            $model->kodePenyakit = $kd->genIdChar("P" , "" , "penyakit" , "kd_penyakit");
            $data = Yii::$app->request->post();
            $model->photo = UploadedFile::getInstance($model , 'photo');
            if($model->photo != NULL) $data['Penyakit']['photo'] = $model->photo;
            if($model->load($data) && $model->save()){
                $model->photo->saveAs(Yii::$app->basePath . "/web/assets/" . $model->photo->name);

                return $this->redirect([
                    'view' ,
                    'id' => $model->kd_penyakit ,
                ]);
            }

            return $this->render('create' , [
                'model' => $model ,
            ]);
        }

        /**
         * Updates an existing Penyakit model.
         * If update is successful, the browser will be redirected to the 'view' page.
         *
         * @param string $id
         *
         * @return mixed
         */
        public function actionUpdate($id)
        {
            $model = $this->findModel($id);
            $data = Yii::$app->request->post();
            $model->photo = UploadedFile::getInstance($model , 'photo');
            if($model->photo != NULL) $data['Penyakit']['photo'] = $model->photo;
            if($model->load($data) && $model->save()){
                if($data['Penyakit']['photo']!=""){
                    $model->photo->saveAs(Yii::$app->basePath . "/web/assets/" .
                    $model->photo->name);
                }

                return $this->redirect([
                    'view' ,
                    'id' => $model->kd_penyakit ,
                ]);
            }
            $model = $this->findModel($id);
            return $this->render('update' , [
                'model' => $model ,
            ]);
        }

        /**
         * Deletes an existing Penyakit model.
         * If deletion is successful, the browser will be redirected to the 'index' page.
         *
         * @param string $id
         *
         * @return mixed
         */
        public function actionDelete($id)
        {
            $model = $this->findModel($id);
            unlink(Yii::$app->basePath . "/web/assets/" . $model->photo);
            $this->findModel($id)->delete();
            return $this->redirect(['index']);
        }

        /**
         * Finds the Penyakit model based on its primary key value.
         * If the model is not found, a 404 HTTP exception will be thrown.
         *
         * @param string $id
         *
         * @return Penyakit the loaded model
         * @throws NotFoundHttpException if the model cannot be found
         */
        protected function findModel($id)
        {
            if(($model = Penyakit::findOne($id)) !== NULL){
                return $model;
            }else{
                throw new NotFoundHttpException('The requested page does not exist.');
            }
        }
    }
