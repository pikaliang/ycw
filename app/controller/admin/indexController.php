<?php

class index extends controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check();
    }

    function init()
    {
        $this->smarty->assign("title", "后台管理中心");
        $this->smarty->display("admin/index.html");
    }

}