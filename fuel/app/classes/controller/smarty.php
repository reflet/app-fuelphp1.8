<?php

/**
 * Smartyテスト
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Smarty extends Controller
{
    /**
     * サンプルページ
     *
     * @access  public
     * @return  Response
     */
    public function action_index()
    {
        return View_Smarty::forge('smarty/index.tpl', array('title' => 'Hello World.'));
    }
}