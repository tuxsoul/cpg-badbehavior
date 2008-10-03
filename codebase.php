<?php
/*
        ******************************************************************************
        CPG-BadBehavior Plugin
        ******************************************************************************
        Author: Mario Oyorzabal Salgado
        Blog:   http://blog.tuxsoul.com/
        E-mail: <tuxsoul@tuxsoul.com>
        Web:    http://code.google.com/p/cpg-dnsbl/
        Donate: http://pledgie.org/campaigns/1537
        ******************************************************************************
        This program is free software; you can redistribute it and/or modify
        it under the terms of the GNU General Public License as published by
        the Free Software Foundation; either version 2 of the License, or
        (at your option) any later version.
        ******************************************************************************
*/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

define ('CPG_BADBEHAVIOR_CWD', dirname(__FILE__));

// load bad-behavior core
include (CPG_BADBEHAVIOR_CWD . '/bad-behavior/bad-behavior-generic.php');

?>
