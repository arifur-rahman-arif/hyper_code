const path = require('path');
module.exports = {
    entry: {
        all: path.resolve(__dirname, 'src/scripts/all.js'),
    },
    output: {
        filename: '[name].min.js',
        path: path.resolve(__dirname, 'build/scripts/'),
    },
    mode: 'production',
    module: {
        rules: [{
            test: /\.js$/,
            exclude: /node_modules/,
        }],
    },
    devtool: 'source-map',
    watch: true,
    watchOptions: {
        ignored: [/node_modules/, './src/styles/*.css', './gulpfile.js', './package-lock.json']
    }
};