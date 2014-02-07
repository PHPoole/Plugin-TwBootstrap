<?php
namespace PHPoole;
use PHPoole\Utils;

/**
 * PHPoole plugin TwBootstrap
 */
Class TwBootstrap extends Plugin
{
    public function preInit($e)
    {
        $phpoole = $e->getTarget();
        $phpoole->addMessage('TwBootstrap plugin available');
    }

    public function postInit($e)
    {
        $phpoole = $e->getTarget();
        Utils\RecursiveCopy(
            __DIR__ . '/assets',
            $phpoole->getWebsitePath() . '/' . PHPoole::PHPOOLE_DIRNAME . '/' . PHPoole::ASSETS_DIRNAME
        );
        Utils\RecursiveCopy(
            __DIR__ . '/layouts',
            $phpoole->getWebsitePath() . '/' . PHPoole::PHPOOLE_DIRNAME . '/' . PHPoole::LAYOUTS_DIRNAME
        );
        $phpoole->addMessage('Twitter Bootstrap layouts and assets copied');
    }
}
