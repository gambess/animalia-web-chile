<?php
/**
 * Created by PhpStorm.
 * User: vdjkelly
 * Date: 12/11/18
 * Time: 09:51 AM
 */

class Payment_actions_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getPaymentActions()
    {
        $q = $this->db->get('payment_actions');
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return FALSE;
    }
}