<?php

/*
*   An extension of 'SubmittedFormField' to modify the getFormattedValue of the
*   e-signature in the 'Submissions' GridField.
*/
class SubmittedESignatureFormField extends SubmittedFormField 
{
    /**
    *   Return an image in the submissions gridfield
    *   @return 'LiteralField'
    */
    public function getFormattedValue() 
    {
        return new LiteralField('', '<img style=\'background: #FFF;\' src=\''.$this->Value.'\'/>');
    }
}