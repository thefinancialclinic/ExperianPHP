<?php
namespace Experian\Exceptions;

class MissingMandatoryFieldException extends \Exception{
	public function __construct (
		$fieldName, 
		$code = 412 ,
		\Throwable $previous = NULL
	){
		$message=sprintf('%s is required.',$fieldName);
		parent::__construct($message,$code,$previous);
	}
}