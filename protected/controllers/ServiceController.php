<?php

class ServiceController extends Controller
{
	public $layout='//layouts/column2';
	private $_model;

	public function actionView()
	{
		$this->render('view',array(
			'model'=>$this->loadModel(),
		));
	}

	public function actionCreate()
	{
		$model=new Service;

		$this->performAjaxValidation($model);

		if(isset($_POST['Service']))
		{
			$model->attributes=$_POST['Service'];


			if($model->save())
			 {	//$this->redirect(array('view','id'=>$model->id));
			    if(isset($_POST['save']))	
				           $this->redirect(array('view','id'=>$model->id));
				    elseif(isset($_POST['addNewService']))
					      $this->redirect(array('service/create'));
			 }
		} 

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionUpdate()
	{
		$model=$this->loadModel();

		$this->performAjaxValidation($model);

		if(isset($_POST['Service']))
		{
			$model->attributes=$_POST['Service'];

			if($model->save())
			 {	//$this->redirect(array('view','id'=>$model->id));
			    if(isset($_POST['save']))	
				           $this->redirect(array('view','id'=>$model->id));
				    elseif(isset($_POST['addNewService']))
					      $this->redirect(array('service/create'));
					
			 }
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	public function actionDelete()
	{
		if(Yii::app()->request->isPostRequest)
		{
			$this->loadModel()->delete();

			if(!isset($_GET['ajax']))
				$this->redirect(array('admin'));
		}
		else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Service');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionAdmin()
	{    if (isset($_GET['pageSize'])) {
		    Yii::app()->user->setState('pageSize',(int)$_GET['pageSize']);
		    unset($_GET['pageSize']);
		}
		
		$model=new Service('search');
		if(isset($_GET['Service']))
			$model->attributes=$_GET['Service'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel()
	{
		if($this->_model===null)
		{
			if(isset($_GET['id']))
				$this->_model=Service::model()->findbyPk($_GET['id']);
			if($this->_model===null)
				throw new CHttpException(404, Yii::t('app', 'The requested page does not exist.'));
		}
		return $this->_model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='services-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
