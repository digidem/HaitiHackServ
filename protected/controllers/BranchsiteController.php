<?php

class BranchsiteController extends Controller
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
		$model=new Branchsite;

		$this->performAjaxValidation($model);

		if(isset($_POST['Branchsite']))
		{
		   if (!isset($_POST['Branchsite']['latitude']) || 
		       !isset($_POST['Branchsite']['longitude'])) 
		   {
		     //take address and pass it into geocode function
             //$results = array();
		     //if geocode returns one and only one results, set lat/lon
		     
		     //else if more than one, store results in the Session and forward
		     
		     //Yii::app()->session['kofaviv_nominatum_results'] = $results;
		   }
		  
			$model->attributes=$_POST['Branchsite'];
			if(isset($_POST['Branchsite']['Category']))
		$model->categories = $_POST['Branchsite']['Category'];


			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
		
	}

	public function actionUpdate()
	{
		$model=$this->loadModel();

		$this->performAjaxValidation($model);

		if(isset($_POST['Branchsite']))
		{
			$model->attributes=$_POST['Branchsite'];
			if(isset($_POST['Branchsite']['Category']))
		$model->categories = $_POST['Branchsite']['Category'];

			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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

	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Branchsite');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionAdmin()
	{
		$model=new Branchsite('search');
		if(isset($_GET['Branchsite']))
			$model->attributes=$_GET['Branchsite'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function loadModel()
	{
		if($this->_model===null)
		{
			if(isset($_GET['id']))
				$this->_model=Branchsite::model()->findbyPk($_GET['id']);
			if($this->_model===null)
				throw new CHttpException(404, Yii::t('app', 'The requested page does not exist.'));
		}
		return $this->_model;
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='branchsite-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	protected function geocodeAddress($address) {
      $address = urlencode($address);
    
      $format = "json";
    
      $url = "http://nominatim.openstreetmap.org/search?q=".$address.
        "&format=".$format;
    
      $json = file_get_contents($url);
    
      $results = json_decode($json);
    
      $result_count = count($results);
    
      $coordinates = array();  
      foreach($results as $i=>$result) {
        $lat = $result->lat;
        $lon = $result->lon;
        $display_name = $result->display_name;
    
        $coordinates[] = array(
          "lat"=>$lat, 
          "lon"=>$lon,
          "display_name"=>$display_name);
      }

  
  

  return $coordinates;
}
         
        
}
