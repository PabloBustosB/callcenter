<?php

namespace App\Http\Controllers;

use Google\Cloud\Dialogflow\V2\SessionsClient;
use Google\Cloud\Dialogflow\V2\QueryInput;
use Google\Cloud\Dialogflow\V2\QueryParameters;
use Google\Cloud\Dialogflow\V2\TextInput;
use Google\Cloud\Dialogflow\V2\SessionName;

class DialogflowService
{
    protected $sessionsClient;

    public function __construct()
    {
        $options = [
            'credentials' => __DIR__ . '/claves.json',
        ];

        $this->sessionsClient = new SessionsClient($options);
    }

    public function detectIntent($sessionId, $query)
    {
        $id_proy = "callcenter-392113";
        $session = $this->sessionsClient->sessionName($id_proy, $sessionId);

        $textInput = new TextInput();
        $textInput->setText($query);
        $textInput->setLanguageCode('es');

        $queryInput = new QueryInput();
        $queryInput->setText($textInput);

        $response = $this->sessionsClient->detectIntent($session, $queryInput);
        $queryResult = $response->getQueryResult();
        $intentDisplayName = $queryResult->getIntent()->getDisplayName();
        $respuesta = $queryResult->getFulfillmentText();
        $sentiment = $queryResult->getSentimentAnalysisResult()->getQueryTextSentiment()->getScore();
        
        $array_response = [$intentDisplayName,$respuesta,$sentiment];
        return $array_response;
    }
}
