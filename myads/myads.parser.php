<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=parser.last
[END_COT_EXT]
==================== */
/**
 * myads parser
 *
 * @author  Roffun
 * @copyright Copyright (c) 2014 - today: Roffun | https://github.com/Roffun
 * @license BSD
 */
defined('COT_CODE') or die('Wrong URL.');

require_once cot_incfile('myads', 'plug');
global $cfg, $env;
if (!empty($cfg['plugin']['myads']['myads_usersdone']) && $env['ext'] == "page")
{
     if (myads_usersdone() == "myads_done" && $env['location'] == "pages")
     {
          for ($scb = 1; $scb <= 5; $scb++)
               $text = preg_replace('#\[SCEBANNER' . $scb . '\]#si', $cfg['plugin']['myads']['myads' . $scb], $text);
     }
     else
     {
          for ($scb = 1; $scb <= 5; $scb++)
               $text = preg_replace('#\[SCEBANNER' . $scb . '\]#si', "", $text);
     }
}
