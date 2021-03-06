<?php
class Faq extends CI_Controller{
    
    var $folder =   "faq";
    var $tables =   "faq";
    var $pk     =   "id";
    var $title  =   "Frequently Asked Questions (FAQ)";
    
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
		$query="SELECT faq.id, faq.prodis, faq.kete FROM faq group by faq.id";
		$data['record']=  $this->db->query($query)->result();		
        $data['title']  = $this->title;
		$data['desc']    =   "";	
	$this->template->load('template', $this->folder.'/view',$data);
    }
	
    function post()
    {
        if(isset($_POST['submit']))
        {
			$prodis    	=   $this->input->post('prodis'); 
			$kete       =   $this->input->post('kete');
			
            $data       =   array(  'prodis'=>$prodis,
									'kete'=>$kete);
			
            $this->db->insert($this->tables,$data);
            redirect($this->uri->segment(1));
        }
        else
        {
            $data['title']  = $this->title;
            $data['desc']    =   "";
            $this->template->load('template', $this->folder.'/post',$data);
        }
    }
    
    
    function edit()
    {
        if(isset($_POST['submit']))
        {
            $id     	= 	$this->input->post('id');
            $prodis     = 	$this->input->post('prodis');
			$kete       =   $this->input->post('kete'); 
			
            $data       =   array(  'prodis'=>$prodis,
									'kete'=>$kete);
                                    
            $this->mcrud->update($this->tables,$data, $this->pk,$id);
            redirect($this->uri->segment(1));
        }
        else
        {
            $data['title']  = $this->title;
            $data['desc']    =   "";
            $id          =  $this->uri->segment(3);
            $data['r']   =  $this->mcrud->getByID($this->tables,  $this->pk,$id)->row_array();
            $this->template->load('template', $this->folder.'/edit',$data);
        }
    }
    
    function delete()
    {
        $id     =  $this->uri->segment(3);
        $chekid = $this->db->get_where($this->tables,array($this->pk=>$id));
        if($chekid->num_rows()>0)
        {
            $this->mcrud->delete($this->tables,  $this->pk,  $this->uri->segment(3));
        }
        redirect($this->uri->segment(1));
    }
}