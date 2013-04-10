<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ClipPlayer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function playClip($id, $width, $height)
	{		
		echo "current directory =".getcwd();
		
		$this->load->helper('url');
		$this->load->model('Elements_model');
		
		$record = $this->Elements_model->get_clip_details($id);
		
		$data['id'] = $record->id;
		$data['altText'] = $record->description;
		$timelineJSON = $record->timeline;
		$timeline = json_decode($timelineJSON);
		if ($timeline !== NULL){
			$data['in'] = $timeline->in;
			$data['out'] = $timeline->out;
			$data['duration'] = $timeline->duration;
		} else {
			$data['in'] = 0;
			$data['out'] = "";
			$data['duration'] = "";
		}
		$data['filename']=substr($record->filename, 0 , -4);
		$data['width']=$record->width;
		$data['height']=$record->height;
		
		$this->load->view('clipPlayer_view', $data);
		
	}
}