<?php
    namespace app\controllers;

    use app\models\Gejala;
    use app\models\Kf;
    use app\models\Penyakit;
    use Yii;
    use app\models\Rules;
    use app\models\RulesSearch;
    use yii\web\Controller;
    use yii\web\NotFoundHttpException;
    use yii\filters\VerbFilter;

    /**
     * RulesController implements the CRUD actions for Rules model.
     */
    class RulesController extends Controller{
        /**
         * @inheritdoc
         */
        public function behaviors()
        {
            return [
                'verbs' => [
                    'class' => VerbFilter::className() ,
                    'actions' => [
                        'delete' => ['POST'] ,
                    ] ,
                ] ,
            ];
        }

        /**
         * Lists all Rules models.
         * @return mixed
         */
        public function actionIndex()
        {
            $searchModel = new RulesSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

            return $this->render('index' , [
                'searchModel' => $searchModel ,
                'dataProvider' => $dataProvider ,
            ]);
        }

        /**
         * Displays a single Rules model.
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
         * Creates a new Rules model.
         * If creation is successful, the browser will be redirected to the 'view' page.
         * @return mixed
         */
        public function actionCreate()
        {
            $model = new Rules();
            $kf = new Kf();
            $model->kodeRules = $kf->genIdChar("R" , "" , "rules" , "kd_rules");
            if($model->load(Yii::$app->request->post())){
                $data = Yii::$app->request->post();
                $data = $data["Rules"];
                $model->kd_rules = $data["kd_rules"];
                $model->jika = implode(" and " , $data["jika"]);
                $model->maka = $data["maka"];
                if($model->save()){
                    return $this->redirect([
                        'view' ,
                        'id' => $model->kd_rules ,
                    ]);
                }

                return $this->render('create' , [
                    'model' => $model ,
                ]);
            }else{
                return $this->render('create' , [
                    'model' => $model ,
                ]);
            }
        }

        /**
         * Updates an existing Rules model.
         * If update is successful, the browser will be redirected to the 'view' page.
         *
         * @param string $id
         *
         * @return mixed
         */
        public function actionUpdate($id)
        {
            $model = $this->findModel($id);
            if($model->load(Yii::$app->request->post())){
                $data = Yii::$app->request->post();
                var_dump($data);
                $data = $data["Rules"];
                $model->kd_rules = $data["kd_rules"];
                $model->jika = $data["jika"];
                $model->maka = $data["maka"][0] != "" ? $data["maka"][0] : $data["maka"][1];
                if($model->save()){
                    return $this->redirect([
                        'view' ,
                        'id' => $model->kd_rules ,
                    ]);
                }

                return $this->render('update' , [
                    'model' => $model ,
                ]);
            }else{
                return $this->render('update' , [
                    'model' => $model ,
                ]);
            }
        }

        /**
         * Deletes an existing Rules model.
         * If deletion is successful, the browser will be redirected to the 'index' page.
         *
         * @param string $id
         *
         * @return mixed
         */
        public function actionDelete($id)
        {
            $this->findModel($id)->delete();

            return $this->redirect(['index']);
        }

        /**
         * Finds the Rules model based on its primary key value.
         * If the model is not found, a 404 HTTP exception will be thrown.
         *
         * @param string $id
         *
         * @return Rules the loaded model
         * @throws NotFoundHttpException if the model cannot be found
         */
        protected function findModel($id)
        {
            if(($model = Rules::findOne($id)) !== NULL){
                return $model;
            }else{
                throw new NotFoundHttpException('The requested page does not exist.');
            }
        }

        public function actionKonsultasi()
        {
            $model = new Rules();
            return $this->render('konsultasi' , [
                'model' => $model ,
            ]);
        }
        public function actionDiagnosa()
        {
            $model = new Gejala();
            if($model->load(Yii::$app->request->post())){
                $data = Yii::$app->request->post();
                $data = $data["Gejala"];
              $data_gejala  = implode(" and ",$data["kd_gejala"]);
              $cariRules=function($data_gejala){
                  $kf=new Kf();
                  $result=$kf->runquery(["sql"=>"SELECT * FROM rules WHERE jika='$data_gejala'","fetch"=>"fetch"]);
                  $keys=array_keys($result);
                  $penyakit=$result[$keys[2]];
                  return $penyakit;
              };

              $kode_penyakit=($cariRules($data_gejala));
              $model = Penyakit::findOne($kode_penyakit);
                return $this->render('result' , [
                    'model' => $model ,
                ]);
            }else{
                return $this->render('diagnosa' , [
                    'model' => $model ,
                ]);
            }
        }
    }

    /**
     * baca  data tabel rules
     * lalu simpan dalam variable baru
     * setelah itu ambil isi field IF pada tabel rules
     * setelah itu ambil
     */