<?php
/**
 * Created by PhpStorm.
 * User: vdjkelly
 * Date: 09/11/18
 * Time: 12:44 PM
 */

class Payment_type_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getPayments()
    {
        $q = $this->db->get('payment_type');
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return FALSE;
    }
}