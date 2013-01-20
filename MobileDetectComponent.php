<?php
/**
 * MobileDetectComponent class file.
 *
 * @author Alexander Kochetov <creocoder@gmail.com>
 * @link https://github.com/yiiext/mobile-detect-component
 */

/**
 * Mobile devices detecting with Mobile_Detect.
 *
 * @version 0.01
 * @package yiiext.mobile-detect-component
 */
class MobileDetectComponent extends CApplicationComponent
{
	private $_class;

	/**
	 * Initializes the application component.
	 */
	public function init()
	{
		parent::init();
		$this->_class=new Mobile_Detect;
	}

	/**
	 * Calls the named method which is not a class method.
	 * @param string $name the method name
	 * @param array $params method parameters
	 * @return mixed the method return value
	 */
	public function __call($name,$params)
	{
		if(method_exists($this->_class,$name))
			return call_user_func_array(array($this->_class,$name),$params);

		return parent::__call($name,$params);
	}
}
