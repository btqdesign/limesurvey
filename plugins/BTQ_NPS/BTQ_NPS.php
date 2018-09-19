<?php

class BTQ_NPS extends \LimeSurvey\PluginManager\PluginBase
{
    static protected $name = 'btq_nps';
    static protected $description = 'BTQ Design NPS Question';

    public function init()
    {
        $this->subscribe('beforeSurveyPage');
        $this->subscribe('afterSavedResponse');
        $this->subscribe('beforeActivate');
        $this->subscribe('beforeAdminMenuRender');
    }

    public function beforeSurveyPage()
    {  
        $event = $this->getEvent();
        $oAutoLog = $this->api->newModel($this, 'log');
        $surveyID = $event->get('surveyId');
        $oAutoLog->action='Viewed';
        $oAutoLog->surveyid = $surveyID;
        $oAutoLog->save();
    }

    public function afterSavedResponse()
    { 
        $event = $this->getEvent();
        $oAutoLog = $this->api->newModel($this, 'log');
        $surveyID = $event->get('surveyID');
        $username = $event->get('username');
        $oAutoLog->action='Saved';
        $oAutoLog->username = $username;
        $oAutoLog->surveyid = $surveyID;
        $oAutoLog->save();
    }

    public function beforeActivate()
    {
        if (!$this->api->tableExists($this, 'log'))
        {
            $this->api->createTable(
                $this,
                'log',
                array(
                    'id'=>'pk',
                    'created'=>'datetime',
                    'username'=>'string',
                    'surveyid'=>'integer',
                    'action'=>'string'
                )
            );
        }
    }

    public function beforeToolsMenuRender()
    {
        $event = $this->getEvent();
        $surveyId = $event->get('surveyId');
        $href = Yii::app()->createUrl(
            'admin/pluginhelper',  // Call the plugin helper controller
            array(
                'sa' => 'sidebody',  // subaction is "sidebody"
                'plugin' => 'BTQ_NPS',  // Name of this plugin
                'method' => 'actionIndex',  // Plugin action that PluginHelper will call
                'surveyId' => $surveyId
            )
        );
        // TODO: Class ExtraMenuItem is not part of core yet
        $menuItem = new ExtraMenuItem(array(
            'label' => 'BTQ NPS',
            'iconClass' => 'fa fa-table',
            'href' => $href
        ));
        $event->set('menuItems', array($menuItem));
    }
    
    public function actionIndex()
    {
        // TODO: Add view and layout
        return "This is the content of the side-body";
    }
}
