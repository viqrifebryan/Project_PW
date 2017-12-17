<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Lemina extends CI_Model {

      public function __construct()
      {
              parent::__construct();
              // Your own constructor code
      }


      public function input($userID, $userRole, $userPassword, $userName, $userBirthDate, $userSex, $userAddress)
      {
        $dataUsers = array(
          'userID' => $userID, 
          'userRole' => $userRole, 
          'userPassword' => $userPassword, 
          'userName' => $userName, 
          'userBirthDate' => $userBirthDate, 
          'userSex' => $userSex, 
          'userAddress' => $userAddress
        );


        $this->db->select('userID');
        $this->db->from('user');
        $this->db->where("userID = '".$userID."'");
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
          return FALSE;
        } else {
          $this->db->insert('user', $dataUsers);
          return TRUE;
        }

      }
    
      public function wish($userID, $productID)
      {
        $dataID = array(
          'User_userID' => $userID, 
          'Product_productID' => $productID, 
        );

        if ($this->db->insert('user_buys_product', $dataID))
          return TRUE; 
      }

      public function wishList($userID){
        $a = $this->db->get_where('user_buys_product', array('User_userID' => $userID));
        return $a;
      }

      public function getUserData($userID){  
        $query = $this->db->get_where('user', array('userID' => $userID));
        return $query;
      }

      public function getSpesificUserData($userID, $column){  
        $this->db->select($column);
        $query = $this->db->get_where('user', array('userID' => $userID));
        return $query->result();
      }

      public function cekGanti($userID, $userName, $userBirthDate){
        $condition = "userID = '".$userID."' AND userName = '".$userName."' AND userBirthDate = '". $userBirthDate ."'";
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
          return true;
        } else {
          return false;
        }
      }

      public function gantiPass($userID, $userPassword){  
        $data = array(
              'userID' => $userID,
              'userPassword' => $userPassword
             );
        $this->db->where('userID', $userID);
        $this->db->update('user', $data);
        return true;
      }

      public function pilih($nip)
      {
        $query = $this->db->get_where('biodata', array('nip' => $nip))->row();
        return $query;
      }

      public function delete($nip){
        $this->db->delete('biodata', array('nip' => $nip));
        $this->db->delete('users', array('nip' => $nip));
        return true;
      }

      public function auth($userID, $userPassword){
        $condition = "userID = '".$userID."' AND userPassword = '".$userPassword."'";
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
          return true;
        } else {
          return false;
        }
      }
}