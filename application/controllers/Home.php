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
        $data["about"] = json_decode($this->basic_model->getRow("");,1);
        $data["blog"] = $this->basic_model->getTable("blog", array(), array(3,0));
        
        $data["view"] = "home/home";
        loadView("index", $data);
    }

    public function blog($slug)
    {
        $get = $this->basic_model->getRow("blog", array("slug" => $slug));
        $data["title"] = $get->title;
        $data["data"] = $get;
        $data["user"] = $this->basic_model->getRow("users", array("id", $data["data"]->u_id));
        $data["view"] = "blog/post";
        loadView("index", $data);
    }

    public function get_blog_posts()
    {
        $blog = $this->basic_model->getTable("blog", array(), array(3,post("limit")));
        if(empty($blog)) {
            $blog = $this->basic_model->getTable("blog", array(), array(3, 0));
            array_push($blog, "end");
        }
        echo json_encode($blog);
    }

    public function about()
    {
        $blog = $this->basic_model->getTable("blog", array(), array(3,post("limit")));
        if(empty($blog)) {
            $blog = $this->basic_model->getTable("blog", array(), array(3, 0));
            array_push($blog, "end");
        }
        echo json_encode($blog);
    }
}