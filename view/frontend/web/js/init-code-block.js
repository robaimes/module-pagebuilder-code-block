/**
 * Copyright © Rob Aimes - https://aimes.dev/
 * https://github.com/robaimes
 */
require([
    'Aimes_PageBuilderCodeBlock/js/lib/highlight.min',
    'Aimes_PageBuilderCodeBlock/js/lib/highlight-copy.min',
], function () {
    'use strict';

    /** Apply plugins and initialise code block highlighting */
    hljs.addPlugin(new CopyButtonPlugin());
    hljs.highlightAll();
});
