<?php

class OpinionsController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Opinions'),
		));
	}

	public function actionCreate() {
		$model = new Opinions;


		if (isset($_POST['Opinions'])) {
			$model->setAttributes($_POST['Opinions']);

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
		$model = $this->loadModel($id, 'Opinions');


		if (isset($_POST['Opinions'])) {
			$model->setAttributes($_POST['Opinions']);

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
			$this->loadModel($id, 'Opinions')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Opinions');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Opinions('search');
		$model->unsetAttributes();

		if (isset($_GET['Opinions']))
			$model->setAttributes($_GET['Opinions']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}