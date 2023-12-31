<?php

namespace PANTHEONSYMLINKS\Interfaces;

if ( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Abstraction that provides contract relating to activation.
 * Any model that needs some code executed on plugin activation must implement this interface.
 *
 * @since 2.0
 */
interface Activatable_Interface
{
    /**
     * Contract for activation.
     *
     * @since 2.0
     * @access public
     */
    public function activate();
}