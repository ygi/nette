<?php

/**
 * Test: Nette\Debug::barDump() with showLocation.
 *
 * @author     David Grudl
 * @category   Nette
 * @package    Nette
 * @subpackage UnitTests
 */

/*use Nette\Debug;*/



require dirname(__FILE__) . '/../NetteTest/initialize.php';



Debug::$consoleMode = FALSE;
Debug::$productionMode = FALSE;
Debug::$showLocation = TRUE;

header('Content-Type: text/html');

Debug::barDump('value');



__halt_compiler();

------EXPECT------
%A%<h1>Dumped variables</h1> <div class="nette-inner"> <table> <tr class=""> <th></th> <td><pre class="nette-dump"><span>string</span>(5) "value" <small>in file %a% on line %d%</small>
</pre> </td> </tr> </table> </div> </div>%A%