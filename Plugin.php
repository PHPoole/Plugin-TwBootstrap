<?php
namespace PHPoole;

/**
 * PHPoole plugin TwBootstrap
 */
Class TwBootstrap extends Plugin
{
    const DEBUG = false;

    public function preInit($e)
    {
        $this->trace(self::DEBUG, $e);
        //
        $phpoole = $e->getTarget();
        $phpoole->setMessage('TwBoostrap plugin available');
    }

    public function postInit($e)
    {
        $this->trace(self::DEBUG, $e);
        //
        $phpoole = $e->getTarget();
        RecursiveCopy(
            __DIR__ . '/assets',
            $phpoole->getWebsitePath() . '/' . PHPoole::PHPOOLE_DIRNAME . '/' . PHPoole::ASSETS_DIRNAME
        );
        RecursiveCopy(
            __DIR__ . '/layouts',
            $phpoole->getWebsitePath() . '/' . PHPoole::PHPOOLE_DIRNAME . '/' . PHPoole::LAYOUTS_DIRNAME
        );
        $phpoole->setMessage('Twitter Boostrap layouts ans assets copied');
    }
}
