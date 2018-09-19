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
        $this->subscribe('onPluginRegistration');
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

    public function onPluginRegistration(){
        $pluginName = $this->get('btq_nps');
        //Maybe add a check for the correct pluginName here
        //Check if the menu/menu entries are already created use yii database methods for that
        
        $menuArray = array(
            "parent_id" => 2, //1 -> main surveymenu, 2-> quickemenu, NULL -> new base menu in sidebar
            "name" => "btq_nps",
            "title" => "BTQ NPS Title",
            "position" => "side", // possible positions are "side" and "collapsed" state 3.0.0.beta-2
            "description" => "Descripcion"
        );
        $newMenuId = Surveymenu::staticAddMenu($menuArray);
    
        // repeat this as often as you need it
        $menuEntryArray = array(
            "name" => "accion",
            "title" => "Titulo de la accion",
            "menu_title" => "Titulo del menu", 
            "menu_description" => "Descripcion de la accion",
            "menu_icon" => "empire", //it is either the fontawesome classname withot the fa- prefix, or the iconclass classname, or a src link
            "menu_icon_type" => "fontawesome", // either 'fontawesome', 'iconclass' or 'image'
            "menu_link" => "[admin/]controller/sa/action", //the link will be parsed through yii's createURL method
            "addSurveyId" => true, //add the surveyid parameter to the url
            "addQuestionGroupId" => true, //add gid parameter to url
            "addQuestionId" => true, //add qid parameter to url
            "linkExternal" => false, //open link in a new tab/window
            "hideOnSurveyState" => null, //possible values are "active", "inactive" and null
            "manualParams" => "" //please read up on this setting as it may render the link useless
        );
        SurveymenuEntries::staticAddMenuEntry($newMenuId, $menuEntryArray);
    }
}
