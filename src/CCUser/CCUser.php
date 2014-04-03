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
        global $itzy;
        $itzy->data['title'] = "The User Controller";
    }

    public function Profile() {
        global $itzy;
        $itzy->data['title'] = 'En profil';
    }

}