<?php

Router::connect('/admin/login', array('plugin' => 'admin', 'controller' => 'admin', 'action' => 'login'));
Router::connect('/admin/logout', array('plugin' => 'admin', 'controller' => 'admin', 'action' => 'logout'));
