<?php
/**
 * Standard controller layout.
 *
 * @package LydiaCore
 */
class CCIndex implements IController {

    /**
     * Implementing interface IController. All controllers must have an index action.
     */
    public function Index() {
        global $itzy;
        $itzy->data['title'] = "The Index Controller";
        $itzy->data['main'] = "<h1>The Index Controller</h1>";
    }

}