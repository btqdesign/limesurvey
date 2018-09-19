<?php

class BtqNPS extends \LimeSurvey\PluginManager\PluginBase
{
    static protected $name = 'BTQ NPS';
    static protected $description = 'BTQ Design NPS Question';

    public function init()
    {
        $this->subscribe('beforeSurveyPage');
        $this->subscribe('afterSavedResponse');
        $this->subscribe('beforeActivate');
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
}
