<?php

use troba\EQM\EQM;
use Scandio\lmvc\LVC;
use Scandio\lmvc\modules\assetpipeline;

class Bootstrap extends \Scandio\lmvc\Bootstrap
{
    public function initialize()
    {
        EQM::initialize([
            'dsn' => LVC::get()->config->dsn,
            'username' => LVC::get()->config->username,
            'password' => LVC::get()->config->password
        ]);

        ui\UI::registerSnippetDirectory(static::getPath() . '/ui/snippets/');

        assetpipeline\Bootstrap::configure(static::getPath());
    }
}