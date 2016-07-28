<?php

namespace backend\controllers;

use Yii;
use backend\models\JcfmUnder18;
use backend\models\JcfmUnder18Search;
use backend\models\TanggunganJcfmUnder18;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;

/**
 * JcfmUnder18Controller implements the CRUD actions for JcfmUnder18 model.
 */
class JcfmUnder18Controller extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all JcfmUnder18 models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new JcfmUnder18Search();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single JcfmUnder18 model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new JcfmUnder18 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new JcfmUnder18();
        $modelTanggungan = new TanggunganJcfmUnder18();

        if ($model->load(Yii::$app->request->post()) 
            && $modelTanggungan->load(Yii::$app->request->post())) {

            $model->sebab = serialize($model->sebab);
            $model->hasrat = serialize($model->hasrat);

            if ($model->save()) {
                # cari last insert ID
                $last_id = Yii::$app->db->getLastInsertID();

                #last insert id == id_jcfm_under_18
                $modelTanggungan->id_jcfm_under_18 = $last_id;
                $modelTanggungan->save();

                #for loop count berapa banyak form di isi
                $nama = count($_POST['TanggunganJcfmUnder18']['nama']);
                $no_ic = count($_POST['TanggunganJcfmUnder18']['no_ic']);
                $bangsa = count($_POST['TanggunganJcfmUnder18']['bangsa']);
                $warganegara = count($_POST['TanggunganJcfmUnder18']['warganegara']);
                $jantina = count($_POST['TanggunganJcfmUnder18']['jantina']);
                $no_kad_oku = count($_POST['TanggunganJcfmUnder18']['no_kad_oku']);
                $hubungan = count($_POST['TanggunganJcfmUnder18']['hubungan']);

                for ($i=0; $i < $nama; $i++) { 
                    $modelTanggungan = new TanggunganJcfmUnder18();
                    $modelTanggungan->nama = $_POST['TanggunganJcfmUnder18']['nama'][$i];
                    $modelTanggungan->no_ic = $_POST['TanggunganJcfmUnder18']['no_ic'][$i];
                    $modelTanggungan->bangsa = $_POST['TanggunganJcfmUnder18']['bangsa'][$i];
                    $modelTanggungan->warganegara = $_POST['TanggunganJcfmUnder18']['warganegara'][$i];
                    $modelTanggungan->jantina = $_POST['TanggunganJcfmUnder18']['jantina'][$i];
                    $modelTanggungan->no_kad_oku = $_POST['TanggunganJcfmUnder18']['no_kad_oku'][$i];
                    $modelTanggungan->hubungan = $_POST['TanggunganJcfmUnder18']['hubungan'][$i];
                    $modelTanggungan->id_jcfm_under_18 = $model->id;
                    $modelTanggungan->save();
                }

            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'modelTanggungan' => $modelTanggungan,
            ]);
        }
    }

    /**
     * Updates an existing JcfmUnder18 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $modelTanggungan = new ActiveDataProvider([
                'query' => TanggunganJcfmUnder18::find()->where(['id_jcfm_under_18'=>$model->id]),
            ]);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'modelTanggungan' => $modelTanggungan,
            ]);
        }
    }

    public function actionLists($id){
        
        $daerahCount = \backend\models\DaerahLookup::find()
                ->where(['id_negeri'=>$id])
                ->count();

        $daerah = \backend\models\DaerahLookup::find()
                ->where(['id_negeri'=>$id])
                ->all();

        if ($daerahCount > 0) {
            foreach ($daerah as $post) {
                echo "<option value='".$post->senarai_daerah."'>".$post->senarai_daerah."</options>";
            }
        }else{
            echo "<option>-</option>";
        }

    }

    /**
     * Deletes an existing JcfmUnder18 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        TanggunganJcfmUnder18::deleteAll(['id_jcfm_under_18'=>$id]);

        return $this->redirect(['index']);
    }

    /**
     * Finds the JcfmUnder18 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return JcfmUnder18 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = JcfmUnder18::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
