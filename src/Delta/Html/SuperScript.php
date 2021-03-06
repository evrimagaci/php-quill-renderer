<?php

declare(strict_types=1);

namespace DBlackborough\Quill\Delta\Html;

/**
 * Default delta class for inserts with the 'script' attribute set to 'super'
 *
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Dean Blackborough
 * @license https://github.com/deanblackborough/php-quill-renderer/blob/master/LICENSE
 */
class SuperScript extends Delta
{
    /**
     * Set the initial properties for the delta
     *
     * @param string $insert
     * @param array $attributes
     */
    public function __construct(string $insert, array $attributes = [])
    {
        $this->tag = 'sup';

        $this->insert = $insert;
        $this->attributes = $attributes;
    }

    /**
     * Render the HTML for the specific Delta type
     *
     * @return string
     */
    public function render(): string
    {
        return "<{$this->tag}>{$this->insert}</{$this->tag}>";
    }
}
