<?php
/**
 * Elasticsearch PHP client
 *
 * @link      https://github.com/elastic/elasticsearch-php/
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license   https://www.gnu.org/licenses/lgpl-2.1.html GNU Lesser General Public License, Version 2.1 
 * 
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License or
 * the GNU Lesser General Public License, Version 2.1, at your option.
 * See the LICENSE file in the project root for more information.
 */
declare(strict_types = 1);

namespace Elasticsearch\Endpoints\Rollup;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Rollup
 * Elasticsearch API name rollup.rollup
 *
 * NOTE: this file is autogenerated using util/GenerateEndpoints.php
 * and Elasticsearch 7.12.0-SNAPSHOT (e1f8563f995198c160f7d84a6365bddc6ba0cdf3)
 */
class Rollup extends AbstractEndpoint
{
    protected $rollup_index;

    public function getURI(): string
    {
        $index = $this->index ?? null;
        $rollup_index = $this->rollup_index ?? null;

        if (isset($index) && isset($rollup_index)) {
            return "/$index/_rollup/$rollup_index";
        }
        throw new RuntimeException('Missing parameter for the endpoint rollup.rollup');
    }

    public function getParamWhitelist(): array
    {
        return [
            
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setBody($body): Rollup
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }

    public function setRollupIndex($rollup_index): Rollup
    {
        if (isset($rollup_index) !== true) {
            return $this;
        }
        $this->rollup_index = $rollup_index;

        return $this;
    }
}
