<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Info_model extends CI_Model
{
    public $table = 'info';
    public $id = 'info.id';
    private $_client;

    public function __construct()
    {
        parent::__construct();
        $this->_client = new Client([
            'base_uri' => 'localhost/rest-api-info/info'
        ]);
    }

    public function get()
    {
        // $this->db->from($this->table);
        // $query = $this->db->get();
        // return $query->result_array();
        $response = $this->_client->request('GET', 'info');
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function update($data)
    {
        // $this->db->update($this->table, $data, $where);
        // return $this->db->affected_rows();
        $response = $this->_client->request('PUT', 'info', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function insert($data)
    {
        // $this->db->insert($this->table, $data);
        // return $this->db->insert_id();
        $response = $this->_client->request('POST', 'info', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function delete($id)
    {
        // $this->db->where($this->id, $id);
        // $this->db->delete($this->table);
        // return $this->db->affected_rows();
        $response = $this->_client->request('DELETE', 'info', [
            'form_params' => [
                'id' => $id
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
}
