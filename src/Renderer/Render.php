<?php
declare(strict_types=1);

namespace DBlackborough\Quill\Renderer;

use DBlackborough\Quill\Delta\Html\Delta;

/**
 * Quill renderer, iterates over the generated content data array and creates the data in the relevant format
 *
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Dean Blackborough
 * @license https://github.com/deanblackborough/php-quill-renderer/blob/master/LICENSE
 */
abstract class Render
{
    /**
     * @var Delta[]
     */
    protected $deltas;

    /**
     * Renderer constructor.
     *
     * @param array $deltas Content data array for renderer
     */
    public function __construct(array $deltas)
    {
        $this->deltas = $deltas;
    }

    /**
     * Generate the final output the contents array
     *
     * @return string
     */
    abstract public function render(): string;
}
