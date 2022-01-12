<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $settings = getSettings(array("title", "slider", "about_title", "about_content"));

        $data["title"] = $settings[0]->value;
        $data["slider"] = json_decode($settings[3]->value);
        $data["about_title"] = $settings[1]->value;
        $data["about_content"] = $settings[2]->value;
        $data["view"] = "home/home";

        loadView("index", $data);
    }

    public function dashboard()
    {
        $data['title'] = get_phrase("dashboard");
        $data['view'] = "dashboard/content";
        $data["users"] = $this->basic_model->getTable("users");
        $data["companies"] = $this->basic_model->getTable("companies");
        $data["exams"] = $this->basic_model->getTable("exams");
        $data["classes"] = $this->basic_model->getTable("classes");
        $data["categories"] = $this->basic_model->getTable("categories");
        $data["income"] = "";
        $this->load->view("index", $data);
    }

    public function company(){
        $data['title'] = get_phrase("company");
        $data['view'] = "company/list";
        $data['breadcrumb'] = array(
            array(
                "title" => site_phrase("company")
            ),
        );
        $data["items"] = $this->basic_model->query("select * from companies");
        $this->load->view("index", $data);
    }

    public function company_preview(){
        $data['title'] = get_phrase("company");
        $data['view'] = "company/preview";
        $data["items"] = $this->basic_model->getRow("companies", array("id" => uriseg(3)));
        $data['breadcrumb'] = array(
            array(
                "link" => "admin/company",
                "title" => site_phrase("company")
            ),
            array(
                "title" => site_phrase("company_preview") . " (". $data['items']->cmp_title .")"
            )
        );
        $this->load->view("index", $data);
    }

    public function teacher_info($id){
        $data["user"] = $this->basic_model->getRow("users", array("id" => $id));
        $data['title'] = get_phrase("teacher") . " | " . $data["user"]->u_name;
        $data['company'] = $this->basic_model->getRow("companies", array("id" => (!is_numeric(refPart(1)) ? $this->session->userdata("cmp_id") : refPart(1))));
        $data['exams'] = $this->basic_model->getTable("exams", array("u_id" => $id));
        $data['classes'] = $this->basic_model->getTable("classes", array("u_id" => $id));
        $data['view'] = "company/teacher_info";
        $data['breadcrumb'] = array(
            array(
                "link" => "admin/company",
                "title" => site_phrase("company")
            ),
            array(
                "link" => "admin/company_preview/" . refPart(1),
                "title" => site_phrase("company_preview") . " (". $data['company']->cmp_title .")"
            ),
            array(
                "title" => site_phrase("teacher") . " (". $data['user']->u_name .")"
            )
        );
        $this->load->view("index", $data);
    }

    public function add_company(){
        if($_POST){
            $return = $this->admin_model->add_company();
            if($return) {

                echo json_encode(array("title" => site_phrase("success"), "message" => site_phrase("company_saved_successfully!"), "status" => 2));
            }
            else
                echo json_encode(array("title" => site_phrase("failed"), "message" => $return, "status" => 0));
        }
        else
            goRef();
    }

    public function add_teacher_in_company(){
        if($_POST){
            $return = $this->admin_model->add_teacher_in_company();
            if($return == "true")
                echo json_encode(array("title" => site_phrase("success"), "message" => site_phrase("teacher_saved_successfully!"), "status" => 1));
            else
                echo json_encode(array("title" => site_phrase("failed"), "message" => $return, "status" => 0));
        }
        else
            goRef();
    }

    public function company_settings(){
        if($this->admin_model->add_charge("","","","", post("id"), $_POST))
            echo json_encode(array("title" => site_phrase("success"), "message" => site_phrase("company_updated!"), "status" => 2));

    }
}