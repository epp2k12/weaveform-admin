const path = require('path');

module.exports = {
    mode: "development",
    entry: {
        admin: ['./admin/js/weaveform-admin-admin.js', './admin/css/weaveform-admin-admin.css'],
        public: ['./public/js/weaveform-admin-public.js', './public/css/weaveform-admin-public.css']
    },
    output: {
        filename: '[name].bundle.js',
        path: path.resolve(__dirname, 'dist') // Output path is set to a common directory
    },
    watch: true,
    module: {
        rules: [
            {
                test: /\.css$/, // Apply this rule to files ending in .css
                use: [
                    'style-loader', // Inject CSS into the DOM
                    'css-loader' // Interpret CSS with imports and url() like import/require() and will resolve them
                ]
            },
            {
                test: /\.js$/, // Apply this rule to files ending in .js
                include: [
                    path.resolve(__dirname, './admin/js'), // Resolve files in admin/js directory
                    path.resolve(__dirname, './public/js') // Resolve files in public/js directory
                ],
                loader: 'babel-loader' // Use babel-loader to transpile JavaScript files
            }
        ]
    }
};