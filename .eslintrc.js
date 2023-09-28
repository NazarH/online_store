module.exports = {
    extends: [
        'plugin:vue/vue3-recommended'
    ],
    rules: {
        "vue/html-self-closing": ["error", {
            "html": {
                "void": "never",
                "normal": "always",
                "component": "always"
            },
            "svg": "always",
            "math": "always"
        }],
        "vue/no-irregular-whitespace": ["error", {
            "skipStrings": true,
            "skipComments": false,
            "skipRegExps": false,
            "skipTemplates": false,
            "skipHTMLAttributeValues": false,
            "skipHTMLTextContents": false
        }],
        'vue/order-in-components': ['error', {
            order: [
                'el',
                'name',
                'key',
                'parent',
                'functional',
                ['delimiters', 'comments'],
                ['components', 'directives', 'filters'],
                'extends',
                'mixins',
                ['provide', 'inject'],
                'ROUTER_GUARDS',
                'layout',
                'middleware',
                'validate',
                'scrollToTop',
                'transition',
                'loading',
                'inheritAttrs',
                'model',
                ['props', 'propsData'],
                'emits',
                'setup',
                'asyncData',
                'data',
                'fetch',
                'head',
                'computed',
                'watch',
                'watchQuery',
                'LIFECYCLE_HOOKS',
                'methods',
                ['template', 'render'],
                'renderError'
            ]
        }],
        "comma-dangle": ["error", {
            "arrays": "never",
            "objects": "never",
            "imports": "never",
            "exports": "never",
            "functions": "never"
        }]
    }
}
