<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {

        $arr = array(
            array(
                "img" => "izmir1.img",
                "text" => "Slider 1"
            ),
            array(
                "img" => "izmir2.img",
                "text" => "Slider 2"
            ),
            array(
                "img" => "celcius.img",
                "text" => "Slider 3"
            )
        );

        echo json_encode($arr);
        die;

        $data["title"] = site_phrase("settings");

        $data["view"] = "settings/content";

        loadView("index", $data);
    }

}