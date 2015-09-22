<?php

namespace OpenSRS\publishing;

use OpenSRS\Base;
use OpenSRS\Exception;

class Enable extends Base
{
    public $action = "enable";
    public $object = "publishing";

    public $_formatHolder = "";
    public $resultFullRaw;
    public $resultRaw;
    public $resultFullFormatted;
    public $resultFormatted;

    public $requiredFields = array(
        'attributes' => array(
            'domain',
            'service_type'
            ),
        );

    public function __construct( $formatString, $dataObject, $returnFullResponse = true ) {
        parent::__construct();

        $this->_formatHolder = $formatString;

        $this->_validateObject( $dataObject );

        $this->send( $dataObject, $returnFullResponse );
    }

    public function __destruct()
    {
        parent::__destruct();
    }
}
