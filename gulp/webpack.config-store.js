const UglifyJsPlugin = require('uglifyjs-webpack-plugin');

module.exports = {

  externals: {
    jquery: 'jQuery' // Available and loaded through WordPress.
  },
  mode: 'production',
  module: {
    rules: [{
      test: /.js$/,
      exclude: /node_modules/,
      use: [{
        loader: 'babel-loader',
        query: {
          presets: [
            ['airbnb', {
              targets: {
                chrome: 50,
                ie: 11,
                firefox: 45
              }
            }]
          ]
        }
      }]
    }]
  },
  output: {
    filename: 'store.js',
  }
};
