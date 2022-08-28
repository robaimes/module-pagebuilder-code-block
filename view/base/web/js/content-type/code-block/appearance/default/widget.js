/**
 * Copyright © Rob Aimes - https://aimes.dev/
 * https://github.com/robaimes
 */
define([
    'Aimes_PageBuilderCodeBlock/js/lib/highlight.min'
], function (hljs) {
    'use strict';

    return function (config, element) {
        var language = element.dataset.language;

        element.classList.add(`language-${language}`);
        hljs.highlightElement(element);
    };
});
