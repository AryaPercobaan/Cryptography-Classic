<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('assets/_header.php');
		$this->load->view('index.php');
		$this->load->view('assets/_footer.php');
	}

	public function Beranda()
	{
		$this->load->view('assets/_header.php');
		$this->load->view('beranda.php');
		$this->load->view('assets/_footer.php');
	}

	public function Vigenere()
	{
		$this->load->view('assets/_header.php');
		$this->load->view('vigenere.php');
		$this->load->view('assets/_footer.php');
	}

	public function Playfair()
	{
		$this->load->view('assets/_header.php');
		$this->load->view('playfair.php');
		$this->load->view('assets/_footer.php');
	}

	public function Caesar()
	{
		$this->load->view('assets/_header.php');
		$this->load->view('caesar.php');
		$this->load->view('assets/_footer.php');
	}

	public function Transposisi()
	{
		$this->load->view('assets/_header.php');
		$this->load->view('transposisi.php');
		$this->load->view('assets/_footer.php');
	}

	public function Affine()
	{
		$this->load->view('assets/_header.php');
		$this->load->view('affine.php');
		$this->load->view('assets/_footer.php');
	}

	public function Hill()
	{
		$this->load->view('assets/_header.php');
		$this->load->view('hill.php');
		$this->load->view('assets/_footer.php');
	}

	public function Hill_encrypt()
	{
		$this->load->view('assets/_header.php');
		$this->load->view('hill_encrypt.php');
		$this->load->view('assets/_footer.php');
	}

	public function Hill_decrypt()
	{
		$this->load->view('assets/_header.php');
		$this->load->view('hill_decrypt.php');
		$this->load->view('assets/_footer.php');
	}

}
