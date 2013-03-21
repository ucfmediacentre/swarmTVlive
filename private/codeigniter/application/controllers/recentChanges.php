<?php
class RecentChanges extends CI_Controller {  
    
    public function __construct()
    {
	parent::__construct();
    }
    
    function index()  
    {
		
		$this->load->helper('url');
		$this->load->library('Simplepie');
		
		//Set up simplepie
		$this->simplepie->set_feed_url('http://ucfmediacentre.co.uk/swarmtv/index.php/feed/');
		$this->simplepie->set_cache_location(APPPATH.'cache/rss');
		$this->simplepie->init();
		$this->simplepie->handle_content_type();
		$data['res_feed'] = $this->simplepie->get_items();
		//pass data into rssInHtml.php
		$this->load->view('rssInHtml', $data);
		
	}

}  