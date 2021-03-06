<?php
/**
 * widget class
 *
 * @package	Vunsy
 * @subpackage	Vunsy
 * @category	model file
 * @author	Emad Elsaid
 * @link	http://github.com/blazeeboy/vunsy
 */
class Widget extends Content{
		
	function Widget()
	{
		parent::Content();
	}
	
	function render()
	{
		if( !empty($this->path) )
		{
			$text = $this->load->view(
							'content/'.$this->path,
							array(
									'id'=> $this->id
									,'info'=>json_decode($this->info)
									,'mode'=>'view'
							),
							TRUE
			);
		}
		else
		{
			$text = 'Widget Not found';
		}
		
		return parent::render( $text );
	}
	function save($object='')
	{
		$this->type = 'widget';
		parent::save($object);
	}
}
