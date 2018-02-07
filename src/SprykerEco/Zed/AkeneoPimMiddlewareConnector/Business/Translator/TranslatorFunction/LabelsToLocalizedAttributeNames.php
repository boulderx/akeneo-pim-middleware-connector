<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\AkeneoPimMiddlewareConnector\Business\Translator\TranslatorFunction;

use SprykerMiddleware\Zed\Process\Business\Translator\TranslatorFunction\AbstractTranslatorFunction;
use SprykerMiddleware\Zed\Process\Business\Translator\TranslatorFunction\TranslatorFunctionInterface;

class LabelsToLocalizedAttributeNames extends AbstractTranslatorFunction implements TranslatorFunctionInterface
{
    const KEY_NAME = 'name';//@todo all these should go to config interface

    /**
     * @param mixed $value
     * @param array $payload
     *
     * @return mixed
     */
    public function translate($value, array $payload)
    {
        return array_map(function ($value) {
            return [
                static::KEY_NAME => $value,
            ];
        }, $value);
    }
}
