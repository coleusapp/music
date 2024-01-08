module.exports = {
    extends: [
        'eslint:recommended',
        'plugin:vue/vue3-recommended'
    ],
    rules: {
        "object-curly-spacing": [ "error", "always" ],
        "array-bracket-spacing": [ "error", "always" ],
        "comma-spacing": [ "error", { "before": false, "after": true } ],
        "semi": [ "error", "never" ]
    }
}
