<?php

class AjaxSearchController extends Controller
{
		/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
				'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(


				array('allow', // allow admin user to perform 'admin' and 'delete' actions
						'actions'=>array('index','searchfilter'),
						'users'=>array('@'),
				),
				array('deny',  // deny all users
						'users'=>array('*'),
				),
		);
	}

	
	
	public function actionSearchFilter()
	{
		
			if(isset($_REQUEST['keyword'])){
			$model = new AkimboSearch();
			$model->unsetAttributes();
			$model->keyword = $_REQUEST['keyword'];
		}

		elseif(isset($_REQUEST['AkimboSearch'])){
			$model = new AkimboSearch();
			$model->unsetAttributes();
			if(isset($_REQUEST['AkimboSearch']['keyword'])){
				$model->keyword = $_REQUEST['AkimboSearch']['keyword'];
				
			}
			if(isset($_REQUEST['AkimboSearch']['role_id'])){
				$model->role_id = $_REQUEST['AkimboSearch']['role_id'];
			
			}
			
			$model->createFiltersFromActiveForm($_REQUEST);
		}
		else{
			$model = new AkimboSearch();
			$model->unsetAttributes();
		
		}


		$this->renderPartial('search',array(
				'model'=>$model,
		));;
	
	}


	public function actionIndex()
	{



		if(isset($_POST['keyword'])){
			$model = new AkimboSearch();
			$model->unsetAttributes();
			$model->keyword = $_POST['keyword'];
		}

		elseif(isset($_GET['ajax'])){
			$model = new AkimboSearch();
			$model->unsetAttributes();
			if(isset($_GET['AkimboSearch']['keyword'])){
				$model->keyword = $_GET['AkimboSearch']['keyword'];
				$model->createFiltersFromActiveForm($_GET);
			}
		}
		else{
			$model = new AkimboSearch();
			$model->unsetAttributes();
			$model->attributes = $_POST;
		}

		$this->render('search',array(
				'model'=>$model,
		));

	}


}