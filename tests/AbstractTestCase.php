<?php

/*
 * This file is part of Laravel Instagram.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vinkla\Tests\Instagram;

use GrahamCampbell\TestBench\AbstractPackageTestCase;

/**
 * This is the abstract test class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return 'Vinkla\Instagram\InstagramServiceProvider';
    }
}
