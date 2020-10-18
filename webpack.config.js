const path = require('path');
module.exports = {
    mode: 'production',
    entry: {
        all: path.resolve(__dirname, 'src/scripts/all.js'),
    },
    output: {
        filename: '[name].min.js',
        path: path.resolve(__dirname, 'build/scripts/'),
    },
    module: {

        rules: [{
            test: /\.js$/,
            exclude: /node_modules/,
        }],
    },
    devtool: 'source-map',
};