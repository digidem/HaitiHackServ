<?php

class CommuneController extends Controller
{
	public $layout='//layouts/column2';
	private $_model;
	
	
	
	public function actionView()
	{   if (isset($_GET['pageSize'])) {
		    Yii::app()->user->setState('pageSize',(int)$_GET['pageSize']);
		    unset($_GET['pageSize']);
		}
		$model=new Commune('search');
		if(isset($_GET['Commune']))
			$model->attributes=$_GET['Commune'];

		$this->render('view',array(
			'model'=>$this->loadModel(),
		));
	}

	public function actionCreate()
	{
		$model=new Commune;

		$this->performAjaxValidation($model);

		if(isset($_POST['Commune']))
		{
			$model->attributes=$_POST['Commune'];
              $model->setAttribute('departement',$_GET['depId']);

			if($model->save())
			  {	//$this->redirect(array('view','id'=>$model->id,'depId'=>$_GET['depId']));
			      if(isset($_POST['save']))	
				           $this->redirect(array('view','id'=>$model->id, 'depId'=>$_GET['depId']));
				    elseif(isset($_POST['addNewCommune']))
					      $this->redirect(array('Commune/create','from'=>0,'id'=>0,'depId'=>$_GET['depId']));
					elseif(isset($_POST['addQuartier']))
					      $this->redirect(array('Quartier/create','from'=>0,'id'=>0,'comId'=>$model->id, 'depId'=>$_GET['depId']));
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

		if(isset($_POST['Commune']))
		{
			$model->attributes=$_POST['Commune'];
             $model->setAttribute('departement',$_GET['depId']);
			 
			if($model->save())
			  {	//$this->redirect(array('view','id'=>$model->id,'depId'=>$_GET['depId']));
			     if(isset($_POST['save']))	
				           $this->redirect(array('view','id'=>$model->id, 'depId'=>$_GET['depId']));
				    elseif(isset($_POST['addNewCommune']))
					      $this->redirect(array('Commune/create','from'=>0,'id'=>0,'depId'=>$_GET['depId']));
					elseif(isset($_POST['addQuartier']))
					      $this->redirect(array('Quartier/create','from'=>0,'id'=>0,'comId'=>$model->id, 'depId'=>$_GET['depId']));
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
		/*$dataProvider=new CActiveDataProvider('Commune');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));*/
		
		 if (isset($_GET['pageSize'])) {
		    Yii::app()->user->setState('pageSize',(int)$_GET['pageSize']);
		    unset($_GET['pageSize']);
		}
		$model=new Commune('search');
		if(isset($_GET['Commune']))
			$model->attributes=$_GET['Commune'];

		$this->render('admin',array(
			'model'=>$model,
		));
	} 

	public function actionAdmin()
	{    if (isset($_GET['pageSize'])) {
		    Yii::app()->user->setState('pageSize',(int)$_GET['pageSize']);
		    unset($_GET['pageSize']);
		}
		$model=new Commune('search');
		if(isset($_GET['Commune']))
			$model->attributes=$_GET['Commune'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel()
	{
		if($this->_model===null)
		{
			if(isset($_GET['id']))
				$this->_model=Commune::model()->findbyPk($_GET['id']);
			if($this->_model===null)
				throw new CHttpException(404, Yii::t('app', 'The requested page does not exist.'));
		}
		return $this->_model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='commune-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
