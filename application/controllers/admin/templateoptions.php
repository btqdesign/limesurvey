<?php
/*
* LimeSurvey
* Copyright (C) 2007-2011 The LimeSurvey Project Team / Carsten Schmitz
* All rights reserved.
* License: GNU/GPL License v2 or later, see LICENSE.php
* LimeSurvey is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*
* Template Options controller
*/

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class templateoptions  extends Survey_Common_Action
{

    /**
     * @param string $controller
     */
    public function __construct($controller=null, $id=null)
    {
        parent::__construct($controller, $id);
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function view($id)
    {
        if ( Permission::model()->hasGlobalPermission('templates','read')){
            $this->_renderWrappedTemplate('templateoptions', 'read', array(
                'model'=>$this->loadModel($id),
            ));
        }else{
            Yii::app()->setFlashMessage(gT("We are sorry but you don't have permissions to do this."),'error');
            $this->getController()->redirect(App()->createUrl("/admin"));
        }

    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function create()
    {
        if ( Permission::model()->hasGlobalPermission('templates','update')){
            $model = new TemplateOptions;

            if(isset($_POST['TemplateOptions'])){
                $model->attributes=$_POST['TemplateOptions'];
                if($model->save()){
                    $this->getController()->redirect(array('admin/templateoptions/sa/update/id/'.$model->id));
                }
            }

            $this->render('create',array(
                'model'=>$model,
            ));
        }else{
            Yii::app()->setFlashMessage(gT("We are sorry but you don't have permissions to do this."),'error');
            $this->getController()->redirect(array("admin/templateoptions"));
        }
    }


    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function update($id)
    {
        if ( Permission::model()->hasGlobalPermission('templates', 'update')){
            $model = $this->loadModel($id);

            if(isset($_POST['TemplateConfiguration'])){
                $model->attributes=$_POST['TemplateConfiguration'];
                if($model->save())
                    $this->getController()->redirect(array('admin/templateoptions/sa/update/id/'.$model->id));
            }

            $this->_updateCommon($model);
        }else{
            Yii::app()->setFlashMessage(gT("We are sorry but you don't have permissions to do this."),'error');
            $this->getController()->redirect(Yii::app()->getController()->createUrl("/admin/templateoptions"));
        }
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $sid the ID of the model to be updated
     */
    public function updatesurvey($sid)
    {
        if ( Permission::model()->hasGlobalPermission('templates', 'update')){
            $model = TemplateConfiguration::getInstance(null, null, $sid);

            if(isset($_POST['TemplateConfiguration'])){
                $model->attributes=$_POST['TemplateConfiguration'];
                if($model->save())
                    $this->getController()->redirect(Yii::app()->getController()->createUrl("/admin/templateoptions/sa/updatesurvey",['surveyid'=>$sid,'sid'=>$sid]));
            }

            $this->_updateCommon($model, $sid);
        }else{
            Yii::app()->setFlashMessage(gT("We are sorry but you don't have permissions to do this."),'error');
            $this->getController()->redirect(Yii::app()->getController()->createUrl("/admin/templateoptions/sa/updatesurvey",['surveyid'=>$sid,'sid'=>$sid]));
        }
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function updatesurveygroup($id=null, $gsid)
    {
        if ( Permission::model()->hasGlobalPermission('templates', 'update')){
            $sTemplateName = $id !==null ? TemplateConfiguration::model()->findByPk($id)->template_name : null;
            $model = TemplateConfiguration::getInstance($sTemplateName, $gsid);
            
            if(isset($_POST['TemplateConfiguration'])){
                $model = TemplateConfiguration::getInstance($_POST['TemplateConfiguration']['template_name'], $gsid);
                $model->attributes=$_POST['TemplateConfiguration'];
                if($model->save())
                    $this->getController()->redirect(Yii::app()->getController()->createUrl("/admin/surveysgroups/sa/update/",['id'=>$gsid]));
            }

            $this->_updateCommon($model);
        }else{
            Yii::app()->setFlashMessage(gT("We are sorry but you don't have permissions to do this."),'error');
            $this->getController()->redirect(Yii::app()->getController()->createUrl("/admin/surveysgroups/sa/update/",['id'=>$gsid]));
        }
    }

    /**
     * Lists all models.
     */
    public function index()
    {
        if ( Permission::model()->hasGlobalPermission('templates', 'read') ){
            $model          = new TemplateConfiguration();
            $aData          = array();
            $aData['model'] = $model;
            $this->_renderWrappedTemplate('templateoptions', 'index', $aData);
        }else{
            Yii::app()->setFlashMessage(gT("We are sorry but you don't have permissions to do this."),'error');
            $this->getController()->redirect(App()->createUrl("/admin"));
        }
    }

    /**
     * Manages all models.
     */
    public function admin()
    {
        if ( Permission::model()->hasGlobalPermission('templates','read')){
            $model=new TemplateOptions('search');
            $model->unsetAttributes();  // clear any default values
            if(isset($_GET['TemplateOptions'])){
                $model->attributes=$_GET['TemplateOptions'];
            }

            $this->render('admin',array(
                'model'=>$model,
            ));
        }else{
            Yii::app()->setFlashMessage(gT("We are sorry but you don't have permissions to do this."),'error');
            $this->getController()->redirect(App()->createUrl("/admin"));
        }
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return TemplateOptions the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model=TemplateConfiguration::model()->findByPk($id);
        if($model===null){
            throw new CHttpException(404,'The requested page does not exist.');
        }

        return $model;
    }


    public function importManifest($templatename)
    {
        if ( Permission::model()->hasGlobalPermission('templates', 'update')){
            TemplateManifest::importManifest($templatename);
            $this->getController()->redirect(array("admin/templateoptions"));
        }else{
            Yii::app()->setFlashMessage(gT("We are sorry but you don't have permissions to do this."),'error');
            $this->getController()->redirect(array("admin/templateoptions"));
        }

    }

    public function uninstall($templatename)
    {
        if ( Permission::model()->hasGlobalPermission('templates','update')){
            if (!Template::hasInheritance($templatename)){
                TemplateConfiguration::uninstall($templatename);
            }else{
                Yii::app()->setFlashMessage(sprintf(gT("You can't uninstall template '%s' because some templates inherit from it."), $templatename), 'error');
            }
        }else{
            Yii::app()->setFlashMessage(gT("We are sorry but you don't have permissions to do this."),'error');
        }

        $this->getController()->redirect(array("admin/templateoptions"));
    }

    /**
     * Performs the AJAX validation.
     * @param TemplateOptions $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='template-options-form'){
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }


    private function _updateCommon($model,$sid=null)
    {
        $oModelWithInheritReplacement = TemplateConfiguration::model()->findByPk($model->id);
        $templateOptionPage           = $oModelWithInheritReplacement->optionPage;

        Yii::app()->clientScript->registerPackage('bootstrap-switch', LSYii_ClientScript::POS_BEGIN);
        $aData = array(
            'model'=>$model,
            'templateOptionPage' => $templateOptionPage
        );

        if($sid !== null){
            $aData['surveybar']['savebutton']['form'] = true;
            $aData['surveyid'] = $sid;
            $aData['title_bar']['title'] = gT("Survey template options");
            $aData['subaction'] = gT("Survey template options");
        }

        $this->_renderWrappedTemplate('templateoptions', 'update', $aData);
    }
}
