<?php
/**
 * Description of FormValidator
 *
 * @author Rana
 */
class Formvalidator {
    //put your code here
 
    function __construct() {
        $this->ci =& get_instance();
    }
     
    /**
     * Determin whether a submitted form is valid or not according to given rule on config file
     * @param String $form_name
     * @return boolean 
     */
    function isValid($form){
        $this->ci->load->library('Form_validation');
        $this->ci->load->helper('form');
        $this->ci->form_validation->set_rules($form);
         
        if($this->ci->form_validation->run()){
            return true;
        }
        else{
            return false;
        }
         
    }
}