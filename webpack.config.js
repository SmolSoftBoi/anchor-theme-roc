/*
 * Copyright © 2018 Kristian Matthews. All rights Reserved.
 */

const path = require("path");
const CleanWebpackPlugin = require('clean-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');

module.exports = {
    entry: [
        "./src/index.js",
        "./src/custom.scss"
    ],
    plugins: [
        new CleanWebpackPlugin(["dist"]),
        new ExtractTextPlugin('style.css')
    ],
    output: {
        path: path.resolve(__dirname, "dist"),
        filename: "bundle.js"
    },
    module: {
        rules: [
            {
                test: /\.(scss)$/,
                use: ExtractTextPlugin.extract({
                    use: [
                        {
                            loader: "css-loader", // Translates CSS into CommonJS modules
                            options: {
                                sourceMap: true
                            }
                        }, {
                            loader: "postcss-loader", // Run post-CSS actions
                            options: {
                                sourceMap: true
                            }
                        }, {
                            loader: "sass-loader", // Compiles Sass to CSS
                            options: {
                                sourceMap: true
                            }
                        }
                    ]
                })
            }
        ]
    }
};