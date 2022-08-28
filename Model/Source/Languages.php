<?php
/**
 * Copyright © Rob Aimes - https://aimes.dev/
 * https://github.com/robaimes
 */

namespace Aimes\PageBuilderCodeBlock\Model\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Class Options
 */
class Languages implements OptionSourceInterface
{
    /** @var array */
    private array $languages;

    /**
     * @param array $languages
     */
    public function __construct(
        array $languages = []
    ) {
        $this->languages = $languages;
        usort($this->languages, [$this, 'sortLanguages']);
    }

    /**
     * Get all supported language options with a 'No language' option
     *
     * @return array
     */
    public function toOptionArray(): array
    {
        $options = [
            [
                'value' => '',
                'label' => __('No Language'),
            ]
        ];

        return array_merge($options, $this->languages);
    }

    /**
     * Compare two language labels alphabetically
     *
     * @param array $a
     * @param array $b
     * @return int
     */
    private function sortLanguages(array $a, array $b): int
    {
        return strcmp($a['label'], $b['label']);
    }
}
