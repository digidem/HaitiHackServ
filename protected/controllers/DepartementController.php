<?php

class DepartementController extends Controller
{
	public $layout='//layouts/column2';
	private $_model;

	public function actionView()
	{    if (isset($_GET['pageSize'])) {
		    Yii::app()->user->setState('pageSize',(int)$_GET['pageSize']);
		    unset($_GET['pageSize']);
		}
					
		$this->render('view',array(
			'model'=>$this->loadModel(),
		));
		
		
	}

	public function actionCreate()
	{
		$model=new Departement;

		$this->performAjaxValidation($model);

		if(isset($_POST['Departement']))
		{
			$model->attributes=$_POST['Departement'];


			if($model->save())
			  {   //$this->redirect(array('view','id'=>$model->id));
			        if(isset($_POST['create']))	
				           $this->redirect(array('view','id'=>$model->id));
				    elseif(isset($_POST['addCommune']))
					      $this->redirect(array('Commune/create','from'=>0,'id'=>0,'depId'=>$model->id));
					 
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
		   
		   if(isset($_GET['id']))
			$idDep=$_GET['id'];

		if(isset($_POST['Departement']))
		{
			$model->attributes=$_POST['Departement'];

			if($model->save())
				{  //$this->redirect(array('view','id'=>$model->id));
				     if(isset($_POST['save']))	
				             $this->redirect(array('Departement/index'));
				     elseif(isset($_POST['addCommune']))
					         $this->redirect(array('Commune/create','from'=>0,'id'=>0,'depId'=>$idDep));
				 
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
				$this->redirect(array('index'));
		}
		else
			throw new CHttpException(400,
					Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	/* public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Departement');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	} */

	public function actionIndex()//actionAdmin()
	{     if (isset($_GET['pageSize'])) {
		    Yii::app()->user->setState('pageSize',(int)$_GET['pageSize']);
		    unset($_GET['pageSize']);
		}
		$model=new Departement('search');
		if(isset($_GET['Departement']))
			$model->attributes=$_GET['Departement'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	public function loadModel()
	{
		if($this->_model===null)
		{
			if(isset($_GET['id']))
				$this->_model=Departement::model()->findbyPk($_GET['id']);
			if($this->_model===null)
				throw new CHttpException(404, Yii::t('app', 'The requested page does not exist.'));
		}
		return $this->_model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='departement-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
