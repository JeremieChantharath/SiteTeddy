<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Utilisateur_model extends CI_Model{

    protected $table = "utilisateurs";

    public function insert($infos)
    {
        return $this->db->insert($this->table, $infos);
        //return $this->db->insert_id();
    }

    public function get($email)
    {
        return $this->db->get_where($this->table,array('email'=>$email))->row();
    }

    public function getAll()
    {
        return $this->db->select("*")->get($this->table)->result();
    }

    public function update($champs,$donnee)
    {
        return $this->db->set($donnee)
        ->where($champs)
        ->update($this->table);
    }

    public function delete($id)
    {
        return $this->db->where($id)
        ->delete($this->table);
    }



}