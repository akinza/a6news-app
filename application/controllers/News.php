<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url_helper');
	}
	public function index()	{
		$this->load->view('home');
	}

	public function business()	{
		$this->load->view('news/business');
	}
	public function international()	{
		$this->load->view('news/international');
	}
	public function national()	{
		$this->load->view('news/national');
	}
	public function social()	{
		$this->load->view('news/social');
	}
	public function sports()	{
		$this->load->view('news/sports');
	}
	public function tech()	{
		$this->load->view('news/tech');
	}
}
