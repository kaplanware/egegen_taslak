<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (! function_exists('codeprint')) {
    function codeprint($par, $bool = false)
    {
        echo "<pre>";
        print_r($par);
        echo "</pre>";
        if ($bool) die;
    }
}

if (! function_exists('convertToSeo')) {
    function convertToSeo($text){
        $turkce=array("ç","Ç","ğ","Ğ","ü","Ü","ö","Ö","ı","İ","ş","Ş");
        $convert=array("c","C","g","G","u","U","o","O","i","I","s","S");
        return $seo=strtolower(str_replace($turkce,$convert,$text));
    }
}

if (! function_exists('convertToSize')) {
    function convertToSize($text, $toUpper = true){
        $kucuk=array("ç","ğ","ü","ö","ı","i","ş");
        $buyuk=array("Ç","Ğ","Ü","Ö","I","I","Ş");
        if($toUpper)
            return str_replace($kucuk,$buyuk,$text);
        else
            return str_replace($buyuk,$kucuk,$text);
    }
}

if (! function_exists('convertToWord')) {
    function convertToWord($text, $bool = false){
        $alphabet = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        if(!$bool)
            return $alphabet[$text];
        else {
            foreach($alphabet as $key => $val){
                if($val == strtoupper($text))
                    return $key;
            }
        }
    }
}

if (! function_exists('convertToSeo2')) {
    function convertToSeo2($text){
        $turkce=array("ç","Ç","ğ","Ğ","ü","Ü","ö","Ö","ı","İ","ş","Ş",".",",","!","'"," ","?","*","_","|","=","(",")","[","]","{","}");
        $convert=array("c","C","g","G","u","U","o","O","i","i","s","S","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-");
        return $seo=strtolower(str_replace($turkce,$convert,$text));
    }
}

//check explorer
if (! function_exists('isMobile')) {
    function isMobile()
    {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }
}

//explode referer
if (! function_exists('refPart')) {
    function refPart($x){
        $ref = $_SERVER["HTTP_REFERER"];
        $exp = explode("/", $ref);
        return $exp[count($exp)-$x];
    }
}

//referer
if (! function_exists('goRef')) {
    function goRef(){
        redirect($_SERVER["HTTP_REFERER"]);
    }
}

//uri-segment
if (! function_exists('uriseg')) {
    function uriseg($num)
    {
        $ci =& get_instance();
        return $ci->uri->segment($num);
    }
}

if (! function_exists('loadView')) {
    function loadView($view, $data = array()){
        $ci = & get_instance();
        return $ci->load->view($view, $data);
    }
}

if (! function_exists('fileUploads')) {
    function fileUploads($input,$path){
        $ci =& get_instance();
        $files = 0;
        $filenames = array();
        for($i = 0; $i < count($_FILES[$input]["name"]) ; $i++) {

            $_FILES['kaplanware']['name'] = $_FILES[$input]['name'][$i];
            $_FILES['kaplanware']['type'] = $_FILES[$input]['type'][$i];
            $_FILES['kaplanware']['tmp_name'] = $_FILES[$input]['tmp_name'][$i];
            $_FILES['kaplanware']['error'] = $_FILES[$input]['error'][$i];
            $_FILES['kaplanware']['size'] = $_FILES[$input]['size'][$i];
            $extension = pathinfo($_FILES[$input]["name"][$i], PATHINFO_EXTENSION);
            $file_name = pathinfo($_FILES[$input]["name"][$i], PATHINFO_FILENAME) . "." . $extension;
            $config["allowed_types"] = "jpg|jpeg|png|jfif|pdf";
            $config["upload_path"] = $path;
            $config['encrypt_name'] = TRUE;

            $ci->load->library("upload", $config);
            $upload = $ci->upload->do_upload("kaplanware");

            if ($upload) {
                $file_name_enc = $ci->upload->data("file_name");
                $files++;
                array_push($filenames, array(
                    "file_name" => $file_name,
                    "file_name_enc" => $file_name_enc
                ));
            }
        }
        if(count($_FILES[$input]["name"]) == $files)
            return array("status" => true, "filenames" => $filenames);
        else
            return array("status" => false, "filenames" => $filenames);

    }
}

if (! function_exists('fileUpload')) {
    function fileUpload($input, $path, $pdfOnly = false)
    {
        $ci =& get_instance();
        $file_name = pathinfo($_FILES[$input]["name"], PATHINFO_FILENAME) . "." . pathinfo($_FILES[$input]["name"], PATHINFO_EXTENSION);
        $config["allowed_types"] = ($pdfOnly == true ? "pdf" : "jpg|jpeg|png|jfif|pdf");
        $config["upload_path"] = $path;
        $config['encrypt_name'] = TRUE;

        $ci->load->library("upload", $config);
        $upload = $ci->upload->do_upload($input);

        if ($upload) {
            $uploaded_file = $ci->upload->data("file_name");
            return $uploaded_file;
        }
        return false;

    }
}

if (! function_exists('post')) {
    function post($par)
    {
        $ci =& get_instance();
        return $ci->security->xss_clean(trim($ci->input->post($par)));
    }
}

if (! function_exists('session')) {
    function session($param)
    {
        $ci =& get_instance();
        return $ci->session->userdata($param);
    }
}

if (! function_exists('jsonKey')) {
    function json_Key($json, $key)
    {
        $json = json_decode($json, 1);
        foreach ($json as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $vk => $vv) {
                    if ($vk == $key)
                        return $vv;
                }
            }
            if ($k == $key)
                return $v;
        }
    }
}

if (! function_exists('numToKeys')) {
    function numToKeys($num){
        $alphabet = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        $options = "";
        for($i = 0; $i < $num ; $i++)
        {
            $options .= $alphabet[$i];
        }
        return $options;
    }
}

if (! function_exists('getSettings')){
    function getSettings($par){
        $ci =& get_instance();

        $query = "";
        if(count($par) == 1)
            $query = "key = " . $par[0];
        else {
            for ($i = 0; $i < count($par); $i++) {
                if ($i == (count($par) - 1))
                    $query .= "s.key = '" . $par[$i] . "'";
                else
                    $query .= "s.key = '" . $par[$i] . "' || ";
            }
        }

        return $ci->basic_model->query("SELECT * FROM settings s WHERE $query");
    }
}

function getAbout(){
    $ci =& get_instance();
    return json_decode($ci->basic_model->getRow("about", array("lang" => $ci->basic_model->getRow("languages", array("title" => session("language")))->id))->aboutJson,1);
}