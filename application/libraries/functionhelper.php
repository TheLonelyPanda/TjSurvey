<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class FunctionHelper {

    var $status = false;
    var $title = '';
    var $message = '';
    var $url = '';

    public function __construct() {
        
    }
    
    public function jsonHeader(){
        header('Content-Type: application/json');
    }

    public function jsonEncode($string) {
        echo json_encode($string);
    }

    public function jsonDecode($json) {
        echo json_decode($json);
    }

    public function jsonResponseBasic($status, $message, $url) {
        echo json_encode(array(
            'status' => $status,
            'message' => $message,
            'url' => $url
        ));
    }

    public function jsonResponseFull($status, $title, $message, $url) {
        echo json_encode(array(
            'status' => $status,
            'title' => $title,
            'message' => $message,
            'url' => $url
        ));
    }

    public function jsonDataResponseFull($status, $title, $message, $url, $data) {
        echo json_encode(array(
            'status' => $status,
            'title' => $title,
            'message' => $message,
            'url' => $url,
            'data' => $data
        ));
    }

    public function jsonResponseFormSuccess($title, $message,$err_field, $url) {
        echo json_encode(array(
            'status' => true,
            'title' => $title==''?"ดำเนินการสำเร็จ":$title,
            'message' => $message==''?"ท่านได้ทำการบันทึกข้อมูลเรียบร้อย":$message,
            'err_field' => $err_field,
            'url' => $url
        ));
    }
    public function jsonResponseFormData($title, $message,$err_field, $data) {
        echo json_encode(array(
            'status' => true,
            'title' => $title==''?"ดำเนินการสำเร็จ":$title,
            'message' => $message==''?"ท่านได้ทำการบันทึกข้อมูลเรียบร้อย":$message,
            'err_field' => $err_field,
            'url' => '',
            'data' => $data
        ));
    }

    public function jsonResponseFormFail($title, $message,$err_field, $url) {
        echo json_encode(array(
            'status' => false,
            'title' => $title==''?"ตรวจสอบพบข้อผิดพลาด":$title,
            'message' => $message==''?"ไม่สามารถบันทึกข้อมูลได้":$message,
            'err_field' => $err_field,
            'url' => $url
        ));
    }

}
