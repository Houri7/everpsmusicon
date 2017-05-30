<?php
/**
 * Project : EverPsMusicOn
 * @author Team-Ever
 * @link https://www.team-ever.com/
 * @copyright Team-Ever
 * @license Tous droits réservés / Le droit d'auteur s'applique (All rights reserved / French copyright law applies)
 */
if (!defined('_PS_VERSION_'))
    exit;

class EverPsMusicOn extends Module {

    public function __construct()
    {
        $this->name = 'everpsmusicon' ;
        $this->tab = 'front_office_features';
        $this->version = '0.1';
        $this->author = 'Team-Ever';
        $this->bootstrap = true;
        parent::__construct();
        $this->displayName = $this->l('EverPsMusicOn');
        $this->description = $this->l('Play a music from your shop');
        $this->confirmUninstall = $this->l('Are you sure you want to delete these details?');
    }

    public function install()
    {
        return parent::install()
            && $this->registerHook('header')
            && $this->registerHook('DisplayFooter');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function hookHeader()
    {
        $this->context->controller->addCSS($this->_path.'/views/css/everpsmusicon.css');
        $this->context->controller->addJS($this->_path.'/views/js/everpsmusicon.js', 'all');
    }

    public function hookDisplayFooter()
    {
        return $this->display(__FILE__, 'everpsmusicon.tpl');
    }

}
