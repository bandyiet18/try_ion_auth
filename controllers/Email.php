<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
* CLASS EMAIL -> for sending email automatically
* Aldita Budi S.
*/

class Email extends CI_Controller{

  function __construct(argument){
    # code...
    parent:: __construct();
  }

  public function index(){
		//email person
		$this->email->from('alditagapetek@gmail.com','ALDITA BUDI SUSANTO');
		$this->email->to('alditasusanto@gmail.com');

		//email content
		$this->email->subject('EMAIL TEST');
		$this->email->message('Just testing email class library');

		//eamil command
		$this->email->send();
	}

	public function sendemail(){
		//dapat contoh dari
		//http://harviacode.com/2015/07/01/cara-mengirim-email-melalui-localhost-dengan-codeigniter/

		$ci = get_instance();
        $ci->load->library('email');
        $config['protocol'] 	= "smtp";
        $config['smtp_host'] 	= "ssl://smtp.gmail.com";
        $config['smtp_port'] 	= "465";
        $config['smtp_user'] 	= "alditasusanto@gmail.com";
        $config['smtp_pass'] 	= "mimocinika18";
        $config['charset'] 		= "utf-8";
        $config['mailtype'] 	= "html";
        $config['newline'] 		= "\r\n";


        $ci->email->initialize($config);

        $ci->email->from('alditasusanto@gmail.com', 'ALDITA BUDI SUSANTO');
        $list = array('alditagaptek@gmail.com');
        $ci->email->to($list);
        $ci->email->subject('judul email');
        $ci->email->message('INI HANYA PERCOBAAN PENGGUNAAN LIBRARI EMAIL PADA CODEIGNITER');
				//$ci->email->send();
        if ($this->email->send()) {
            echo 'Email sent.';
        } else {
            show_error($this->email->print_debugger());
        }
    }
	}
}


?>
