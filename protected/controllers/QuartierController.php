<?php

class QuartierController extends Controller
{
	public $layout='//layouts/column2';
	private $_model;

	public function actionView()
	{
		if (isset($_GET['pageSize'])) {
		    Yii::app()->user->setState('pageSize',(int)$_GET['pageSize']);
		    unset($_GET['pageSize']);
		}

		$this->render('view',array(
			'model'=>$this->loadModel(),
		));
	}

	public function actionCreate()
	{
		$model=new Quartier;

		$this->performAjaxValidation($model);

		if(isset($_POST['Quartier']))
		{
			$model->attributes=$_POST['Quartier'];

              $model->setAttribute('commune',$_GET['comId']);

			if($model->save())
			  {	//$this->redirect(array('view','id'=>$model->id));
			      if(isset($_POST['save']))
				           $this->redirect(array('view','id'=>$model->id,'comId'=>$_GET['comId'], 'depId'=>$_GET['depId']));
				    elseif(isset($_POST['addNewQuartier']))
					      $this->redirect(array('Quartier/create','from'=>0,'id'=>0,'comId'=>$_GET['comId'], 'depId'=>$_GET['depId']));

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

		if(isset($_POST['Quartier']))
		{
			$model->attributes=$_POST['Quartier'];
            $model->setAttribute('commune',$_GET['comId']);

			if($model->save())
			  {	//$this->redirect(array('view','id'=>$model->id));
			      if(isset($_POST['save']))
				           $this->redirect(array('view','id'=>$model->id,'comId'=>$_GET['comId'], 'depId'=>$_GET['depId']));
				    elseif(isset($_POST['addNewQuartier']))
					      $this->redirect(array('Quartier/create','from'=>0,'id'=>0,'comId'=>$_GET['comId'], 'depId'=>$_GET['depId']));
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
		if (isset($_GET['pageSize'])) {
		    Yii::app()->user->setState('pageSize',(int)$_GET['pageSize']);
		    unset($_GET['pageSize']);
		}

		$model=new Quartier('search');
		if(isset($_GET['Quartier']))
			$model->attributes=$_GET['Quartier'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionAdmin()
	{    if (isset($_GET['pageSize'])) {
		    Yii::app()->user->setState('pageSize',(int)$_GET['pageSize']);
		    unset($_GET['pageSize']);
		}
		$model=new Quartier('search');
		if(isset($_GET['Quartier']))
			$model->attributes=$_GET['Quartier'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel()
	{
		if($this->_model===null)
		{
			if(isset($_GET['id']))
				$this->_model=Quartier::model()->findbyPk($_GET['id']);
			if($this->_model===null)
				throw new CHttpException(404, Yii::t('app', 'The requested page does not exist.'));
		}
		return $this->_model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='quartier-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
