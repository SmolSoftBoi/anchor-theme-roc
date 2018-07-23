/*
 * Copyright © 2018 Kristian Matthews. All rights Reserved.
 */

module.exports = {
    plugins: function () {
        return [
            require("precss"),
            require("autoprefixer")
        ]
    }
}