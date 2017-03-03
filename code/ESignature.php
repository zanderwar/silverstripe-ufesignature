<?php

/*
*	An e-signature extension of Userform's 'EditableFormField'
*/
class ESignature extends EditableFormField 
{
	private static $singular_name = 'Signature Field';

	private static $plural_name = 'Signature Fields';
	
	public function getFormField() 
	{
		$field = ESignatureField::create($this->Name, $this->EscapedTitle)
			->setFieldHolderTemplate('UserFormsField_holder')
			->setTemplate('UserFormsFileField');

		$this->doUpdateFormField($field);

		return $field;
	}

	/*
	*	Returning custom 'SubmittedESignatureFormField'
	*/
	public function getSubmittedFormField() 
	{
		return new SubmittedESignatureFormField();
	}
	
	/*
	*	Set template as the base64 PNG value as the source of an image tag
	*/
	public function forTemplate() 
	{
		if($this->value){
			return '<img src="'.$this->value.'" />';
		}
	}

	public function processNext(EditableFormField $field) 
	{
		if($field instanceof EditableFormStep) {
			return $this->getParent()->processNext($field);
		}

		$formField = $field->getFormField();
		if(!$formField) {
			return $this;
		}

		$this->push($formField);

		if($formField instanceof UserFormsFieldContainer) {
			return $formField->setParent($this);
		}

		return $this;
	}
}
