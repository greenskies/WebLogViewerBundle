<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 02/11/17
 * Time: 8:59 PM
 */

namespace Greenskies\WebLogViewerBundle\Model;

use Greenskies\Collection;

class LogView
{
    public static function logToArray($log)
    {
        $lines = Collection::createFromString($log, 'Greenskies\WebLogViewerBundle\Model\LineView');
        $return = [];
        foreach ($lines as $line) {

            $return[] = $line->toArray();
        }
        return $return;
    }

}
