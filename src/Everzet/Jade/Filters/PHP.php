<?php

namespace Everzet\Jade\Filters;

use \Everzet\Jade\Filters\BlockFilterInterface;
use \Everzet\Jade\Filters\TextFilterInterface;

/*
 * This file is part of the Jade package.
 * (c) 2010 Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * PHP filter.
 *
 * @package     Jade
 * @author      Konstantin Kudryashov <ever.zet@gmail.com>
 */
class PHP implements BlockFilterInterface, TextFilterInterface
{
    public function filterText($str)
    {
        return preg_replace_callback("/{{((?!}}).*)}}/", function($matches) {
            return sprintf('<?php echo %s ?>', html_entity_decode($matches[1]));
        }, $str);
    }

    public function filter($str)
    {
        // Add block indentation
        $str = preg_replace("/\n/", "\n  ", "\n" . $str);

        return sprintf("<?php%s\n?>", $str);
    }
}
