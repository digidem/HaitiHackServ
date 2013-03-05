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
		$model = new Branchsite;

		$this->performAjaxValidation($model);

		if(isset($_POST['Branchsite']))
			$this->updateModel($model);

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionUpdate()
	{
		$model = $this->loadModel();

		$this->performAjaxValidation($model);

		if(isset($_POST['Branchsite']))
			$this->updateModel($model);

		$this->render('update',array(
			'model'=>$model,
		));
	}

	private function updateModel($model)
	{
		$this->branchsiteGeocoding();

		$model->attributes = $_POST['Branchsite'];

		if (isset($_POST['Branchsite']['Category']))
			$model->categories = $_POST['Branchsite']['Category'];

		if (isset($_POST['Branchsite']['Service']))
			$model->services = $_POST['Branchsite']['Service'];

		if ($model->save())
			$this->redirect(array('view', 'id' => $model->id));
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
		if ((isset($_GET["format"]) && $_GET["format"] == "json") || Yii::app()->request->isAjaxRequest)
		{
			$this->JSONIndex();
		}
		else
		{
			$dataProvider=new CActiveDataProvider('Branchsite');
			$this->render('index',array(
				'dataProvider'=>$dataProvider,
			));
		}
	}

	private function JSONIndex()
	{
		header('Content-type: application/json');
		$models = Branchsite::model()->findAll($this->criteriaForJSONIndex());
		$ret = $this->createDataForJSONIndex($models);
		echo CJSON::encode($ret);
		Yii::app()->end();
	}

	private function criteriaForJSONIndex()
	{
		$criteria = new CDbCriteria();
		$criteria->with = array("organisation0", "quartier0", "commune0", "categories");
		$criteria->addCondition("t.longitude is not NULL and t.latitude is not NULL");
		$criteria->addCondition("t.longitude <> '' and t.latitude <> ''");
		return $criteria;
	}

	private function createDataForJSONIndex($models)
	{
		$ret = array();
		$i = 0;

		foreach($models as $model)
		{
			$ret[$i] = $model->flattenRelationalAttributes();
			$i++;
		}

		return $ret;
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

	private function loadModel()
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
		$coordinates = array();
		try
		{
			/**
			 * REMOVING THIS CODE FOR NOW AS NOMINATUM SHOULD BE OUR MAIN SOURCE
			 * FOR LOOKING UP LAT/LON, WE CAN READD THIS LATER IF WE HAVE TIME TO
			 * FIGURE OUT HOW TO CONNECT TO THE DB
			 $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			$bdd = new PDO('mysql:host=;dbname=testdrive', 'root', '', $pdo_options);

			$req = $bdd->query("SELECT latitude, longitude FROM infos where
				addresse like '%$address%' or nom like '%$address%'");

			$json = array();
			 */
			//Si l'adresse se trouve dans la base, nous recuperons les coordonnees
			//(Latitude, longitude)...
			//if($donnees = $req->fetch())

			if (FALSE)
			{
				$json[]=$donnees;
				json_encode($json); //Conversion d'un tableau php en objet json
				$lat = $json[0][0];
				$lon = $json[0][1];

				$coordinates[] =
					array('display_name'=>$address, 'lat'=>$lat, 'lon'=>$lon);

				$req->closeCursor();
			}
			//Sinon, nous allons les recuperer sur le net...
			else
			{
				$address = urlencode($address);

				$format = "json";

				$url = "http://nominatim.openstreetmap.org/search?q=$address&format=$format";

				$json = file_get_contents($url);
				$results = json_decode($json);
				$result_count = count($results);
				foreach($results as $i=>$result) {
					$lat = $result->lat;
					$lon = $result->lon;
					$display_name = $result->display_name;
					$coordinates[] =
						array('display_name'=>$display_name, 'lat'=>$lat, 'lon'=>$lon);
				}
			}

		}
		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}

		return $coordinates;
	}

	public function branchsiteGeocoding() {
		$lat = (isset($_POST['Branchsite']['latitude'])) ?
			$_POST['Branchsite']['latitude'] : 0;

		$lon = (isset($_POST['Branchsite']['longitude'])) ?
			$_POST['Branchsite']['longitude'] : 0;

		if (!$lat || !$lon)
		{
			$quartier = Quartier::model()->findbyPk($_POST['Branchsite']['quartier']);

			$quartier = ($quartier && $quartier['name']) ?
				", ".$quartier['name'] : "";

			$commune =
				Commune::model()->findbyPk($_POST['Branchsite']['commune']);

			$commune = ($commune && $commune['name']) ?
				", ".$commune['name'] : "";

			$departement = Departement::model()->findbyPk
				($_POST['Branchsite']['departement']);

			$departement = ($departement && $departement['name']) ?
				", ".$departement['name'] : "";

			$address = $_POST['Branchsite']['street_address']." ".$quartier.
				" ".$commune." ".$departement.", Haiti";

			$results = BranchsiteController::geocodeAddress($address);

			if ($results && count($results) == 1) {
				$coordinates = array_pop($results);
				$_POST['Branchsite']['longitude'] = $coordinates['lon'];
				$_POST['Branchsite']['latitude'] = $coordinates['lat'];
			}
			else {
				//FIXME ADD THIS CODE TO A VALIDATOR METHOD
				//else if more than one, store results in the Session and forward
				//Yii::app()->session['kofaviv_nominatum_results'] = $results;
			}
		}
	}
}
