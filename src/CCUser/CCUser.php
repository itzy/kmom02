<?php
/**
 * Standard controller layout.
 *
 * @package LydiaCore
 */
class CCUser implements IController {

    /**
     * Implementing interface IController. All controllers must have an index action.
     */
    public function Index() {
        global $ly;
        $ly->data['title'] = "The User Controller";
    }

    public function Profile() {
        global $ly;
        $ly->data['title'] = 'En profil';
    }

}