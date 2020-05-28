const mongoose = require('mongoose');

const UserSchema = mongoose.Schema({
    mail: {
        type: String,
        required: true,
        trim: true
    },
    token: {
        type: String,
        required: true
    }
});

module.exports = mongoose.model("User",UserSchema);