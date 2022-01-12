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
        $data["title"] = site_phrase("home");
        $data["slider"] = json_decode($this->basic_model->getRow("settings", array("key" => "slider"))->value);
        $data["about"] = getAbout();
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
        $data["title"] = site_phrase("about_izmir");
        $data["about"] = getAbout();
        $data["slider"] = json_decode($this->basic_model->getRow("settings", array("key" => "slider"))->value);
        $data["view"] = "home/about";

        loadView("index", $data);
    }

    public function language($par)
    {

        if($get = $this->basic_model->getRow("languages", array("id" => $par)))
            $this->session->set_userdata("language", $get->title);

        goRef();
    }
}