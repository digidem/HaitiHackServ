<?php

class OrganisationController extends Controller
{
	public $layout='//layouts/column2';
	private $_model;

	public $idOrga;

	public function actionView()
	{
		$model=new Organisation('search');
		if(isset($_GET['Organisation']))
		    $model->attributes=$_GET['Organisation'];


		$this->render('view',array(
			'model'=>$this->loadModel(),
		));
	}

	public function actionCreate()
	{
		$model=new Organisation;

		$this->performAjaxValidation($model);

		if(isset($_POST['Organisation']))
		{
			$model->attributes=$_POST['Organisation'];

			if($model->save())
			  {
				//$this->redirect(array('view','id'=>$model->id));
				if(isset($_POST['create']))
				    $this->redirect(array('view','id'=>$model->id));
				 elseif(isset($_POST['addBranch']))
					 $this->redirect(array('Branchsite/create','from'=>0,'id'=>0,'orgaId'=>$model->id));
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
			$idOrga=$_GET['id'];

		if(isset($_POST['Organisation']))
		{
			$model->attributes=$_POST['Organisation'];

			if($model->save())
				{//$this->redirect(array('view','id'=>$model->id));
				if(isset($_POST['save']))
				    $this->redirect(array('Organisation/index'));
				 elseif(isset($_POST['addBranch']))
					 $this->redirect(array('Branchsite/create','from'=>0,'id'=>0,'orgaId'=>$idOrga));
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
		$dataProvider=new CActiveDataProvider('Organisation');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	} */

	public function actionIndex() //actionAdmin()
	{
		if (isset($_GET['pageSize'])) {
		    Yii::app()->user->setState('pageSize',(int)$_GET['pageSize']);
		    unset($_GET['pageSize']);
		}
		$model=new Organisation('search');
		if(isset($_GET['Organisation']))
		    $model->attributes=$_GET['Organisation'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	public function loadModel()
	{
		if($this->_model===null)
		{
			if(isset($_GET['id']))
				$this->_model=Organisation::model()->findbyPk($_GET['id']);
			if($this->_model===null)
				throw new CHttpException(404, Yii::t('app', 'The requested page does not exist.'));
		}
		return $this->_model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='organisation-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
