<?php
// No direct access
defined('_JEXEC') or die;


class ProjectforkHelper
{
	public static $extension = 'com_projectfork';

	/**
	 * Configure the Linkbar.
	 *
	 * @param	string	$vName	The name of the active view.
	 * @return	void
	 */
	public static function addSubmenu($vName)
	{
		
	}
    
    public static function getActions()
	{
		$user	= JFactory::getUser();
		$result	= new JObject;
		$asset  = 'com_projectfork';

		$actions = array(
		    'core.admin', 
            'core.manage', 
            'core.create', 
            'core.edit', 
            'core.edit.own', 
            'core.edit.state', 
            'core.delete'
		);

		foreach ($actions as $action) 
        {
			$result->set($action, $user->authorise($action, $asset));
		}

		return $result;
	}
}
?>