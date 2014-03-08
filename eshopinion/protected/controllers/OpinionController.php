<?php

class OpinionController extends ERestController {

    /**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function _filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function _accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'create', 'update'),
				'users'=>array('*'),
			),
                    /*
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
                     
                     */
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Opinion'),
		));
	}

	public function actionCreate() {
		$model = new Opinion;


		if (isset($_POST['Opinion'])) {
			$model->setAttributes($_POST['Opinion']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Opinion');


		if (isset($_POST['Opinion'])) {
			$model->setAttributes($_POST['Opinion']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Opinion')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Opinion');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Opinion('search');
		$model->unsetAttributes();

		if (isset($_GET['Opinion']))
			$model->setAttributes($_GET['Opinion']);

		$this->render('admin', array(
			'model' => $model,
		));
	}
        
                
        public function doRestView($id)
        {
            $this->renderJson(array('success'=>true, 'timestamp'=>date("Y-m-d H:i:s"), 'message'=>'Record Retrieved Successfully', 'data'=>$this->loadModel($id, 'Opinion')));
        }

}