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

    public function beforeAdminMenuRender()
    {
        // Create the URL to the plugin action
        $url = $this->api->createUrl(
            'admin/pluginhelper',
            array(
                'sa'     => 'fullpagewrapper',
                'plugin' => $this->getName(),
                'method' => 'actionIndex'  // Method name in our plugin
            )
        );

        // Append menu
        $event = $this->getEvent();
        $event->append(
            'extraMenus', 
            array(
                new Menu(array(
                    'label' => 'Menu label',
                    'href'  => $url
                ))
            )
        );
    }
}
