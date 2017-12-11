<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }


      public function input($npm,$nama)
      {
        $data = array(
        'npm' => $npm,
        'nama' => $nama
        );

       if ($this->db->insert('identitas', $data))
       {
           return TRUE;
       }
          
      }
    
    
      public function tampil()
      {  
         return $this->db->get('identitas');
      }
}