<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SubscriptionListing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('loginModel');
    }

    function checkLogin()
    {
        if ($this->session->userdata('id') != "" && $this->session->userdata('type') == "admin") {
        } else {
            redirect(base_url() . 'admin-login', 'Auto');
        }
    }

    function getSubscription()
    {
        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));
        $id = $this->session->userdata('id');
        $updatePermission = getDataByVal('update_data', 'permission', array('employee_id' => $id, 'type' => 'subscription'));

        foreach ($_POST as $key => $value) {
            $data[$key] = $value;
        }
        $query = $this->loginModel->searchData('subscription', $data);

        $data = [];
        $sno = 1;
        foreach ($query->result() as $r) {
            $status = $r->status == 1 ? "<span class='badge badge-success'>Enable</span>" : "<span class='badge badge-danger'>Disabled</span>";
            $checkbox_class = $r->status == 1 ? "checkbox_delete" : "checkbox_active";
            $checbox = '<input type="checkbox" class="' . $checkbox_class . '" value="' . $r->id . '">';
            if ($updatePermission == "yes") {
                $updateButton = '<button type="button" data-toggle="modal" data-target="#editModal" id="getEditData" data-id="' . $r->id . '" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></button>';
            } else {
                $updateButton = '';
            }
            if ($r->type == "new") {
                $subscriptionFor = '<span class="badge badge-danger">For New User Only</span>';
            } elseif ($r->type == "old") {
                $subscriptionFor = '<span class="badge badge-warning">For Old Users Only (Renewal)</span>';
            } else {
                $subscriptionFor = '<span class="badge badge-info">For Both</span>';
            }
            $data[] = array(
                $sno,
                $checbox,
                $status,
                $updateButton,
                getDataByVal('name', 'shop_type', array('id' => $r->shop_type)),
                $subscriptionFor,
                $r->name,
                $r->original_price,
                $r->selling_price,
                $r->validity_number . ' ' . $r->validity_type,
                $r->description,
                $r->profit
            );
            $sno++;
        }

        $result = array(
            "draw" => $draw,
            "recordsTotal" => $query->num_rows(),
            "recordsFiltered" => $query->num_rows(),
            "data" => $data
        );

        echo json_encode($result);
    }
}