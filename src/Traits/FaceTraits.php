<?php

namespace Kvaksrud\AzureCognitiveServices\Api\Traits;

use Kvaksrud\AzureCognitiveServices\Api\Objects\FaceObject;

trait FaceTraits {

    protected $detectedFaces;

    public function getFacesAsObjects(): ?array
    {
         if($this->detectedFaces !== null){
            $returnArr = array();
            foreach($this->detectedFaces as $face){
                $returnArr[] = New FaceObject($face);
            }
            return $returnArr;
        }
        return null;
    }

}
