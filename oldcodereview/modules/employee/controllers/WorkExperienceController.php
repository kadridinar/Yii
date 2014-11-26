<?php

class WorkExperienceController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $user_id;
	public $sector_data; 
	public $layout='//layouts/column2';
        public $portlets = array();
	/**
	 * @return array action filters
	 */
        public function init()
        {
            $this->user_id = Yii::app()->user->getId();
        }
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','delete','showform'),
				'roles'=>array(AkimboNuggetManager::USER_ROLE),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
            $this->layout = '//layout/blank';
            $model = new UserWorkExperience(); 
            $model->create_date = date('Y-m-d H:i:s');
            $model->modified_date = date('Y-m-d H:i:s');
            $this->user_id = Yii::app()->user->getId();
                       
            
           if(isset($_POST["UserWorkExperience"])){
                $error = CActiveForm::validate($model); 
                            
                if(count(json_decode($error,true))>0)
                {
                   echo $error;  
                }else{
                    $model->attributes=$_POST['UserWorkExperience'];
                    $model->save(); 	
                    echo "refresh form";             
                }
                                                                                               
            }else{
                $this->render('create',array(
                        'model'=>$model,
                        'user_id'=>$this->user_id,
                        'sector_data'=>$this->sector_data,  
                 ));
            }
        }
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
            $this->layout = '//layout/blank';
            $model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['UserWorkExperience']))
		{
                    $model->attributes=$_POST['UserWorkExperience'];
                    if($model->save())
                            $this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
			'user_id'=>$this->user_id,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax'])){
				Yii::app()->user->setFlash('success','Work Experience successfully deleted');
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
			}
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
	   if(Yii::app()->request->isAjaxRequest)
                $this->layout = '//layout/blank';
           
           
            $criteria = new CDbCriteria(); 
            $criteria->compare("user_id", $this->user_id);
            
            $dataProvider=new CActiveDataProvider('UserWorkExperience',array('criteria'=>$criteria));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
                        
	    ));
                
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new UserWorkExperience('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['UserWorkExperience']))
			$model->attributes=$_GET['UserWorkExperience'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model = UserWorkExperience::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	/*protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-work-experience-form')
		{
                    echo CActiveForm::validate($model);
                    Yii::app()->end();
		}
	}*/
}
