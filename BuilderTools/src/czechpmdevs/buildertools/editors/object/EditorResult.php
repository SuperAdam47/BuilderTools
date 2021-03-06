<?php

/**
 * Copyright 2018 CzechPMDevs
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

declare(strict_types=1);

namespace czechpmdevs\buildertools\editors\object;

/**
 * Class EditorResult
 * @package buildertools\editors\object
 */
class EditorResult {

    /** @var int $countBlocks */
    public $countBlocks;

    /** @var float|int $time */
    public $time;

    /** @var bool $error */
    public $error;

    /**
     * EditorResult constructor.
     *
     * @param int $countBlocks
     * @param $time
     * @param bool $error
     */
    public function __construct(int $countBlocks, $time, bool $error = false) {
        $this->countBlocks = $countBlocks;
        $this->time = $time;
        $this->error = $error;
    }
}