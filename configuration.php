<?php
/*
        ******************************************************************************
        CPG-BadBehavior Plugin
        ******************************************************************************
        Author: Mario Oyorzabal Salgado
        Blog:   http://blog.tuxsoul.com/
        E-mail: <tuxsoul@tuxsoul.com>
        Web:    http://code.google.com/p/cpg-dnsbl/
        Donate: http://tinyurl.com/36mzoa
        ******************************************************************************
        This program is free software; you can redistribute it and/or modify
        it under the terms of the GNU General Public License as published by
        the Free Software Foundation; either version 2 of the License, or
        (at your option) any later version.
        ******************************************************************************
*/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

$name='CPG-BadBehavior Plugin';
$description='Get out spammers of you gallery using project Bad-Behavior v2.0.13.';
$author='Mario Oyorzabal Salgado';
$version='0.1';

/*
 * $extra_info is displayed with the title of a plugin that is NOT installed and
 * can be used to present extra information.  In this case I show a complex
 * example that forms a button the user can click.
 */
$extra_info = <<<EOT
    <table border="0" cellspacing="0" cellpadding="0"> 
    <tr>
        <td class="admin_menu"><a target="_blank" href="http://code.google.com/p/cpg-dnsbl/" title="Home">Website</a></td>
        <td class="admin_menu"><a target="_blank" href="http://tinyurl.com/36mzoa" title="Donate">Donate</a></td>
        <td class="admin_menu"><a target="_blank" href="http://www.bad-behavior.ioerror.us/" title="Bad-Behavior">Bad-Behavior</a></td>
    </tr>
    </table>
EOT;

/*
 * $install_info is displayed with the title of a plugin that IS installed and
 * can be used to present extra information. In this case I show a complex
 * example that forms a button the user can click.
 */
$install_info=<<<EOT
    <table border="0" cellspacing="0" cellpadding="0"> 
    <tr>
        <td class="admin_menu"><a target="_blank" href="http://code.google.com/p/cpg-dnsbl/" title="Home">Website</a></td>
        <td class="admin_menu"><a target="_blank" href="http://tinyurl.com/36mzoa" title="Donate">Donate</a></td>
        <td class="admin_menu"><a target="_blank" href="http://www.bad-behavior.ioerror.us/" title="Bad-Behavior">Bad-Behavior</a></td>
    </tr>
    </table>
EOT;

?>
