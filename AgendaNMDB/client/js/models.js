var mongoose = require('mongoose');
var Schema = mongoose.Schema;


var userSchema = new Schema({
    user: { type: String, required: true },
    name: { type: string, required: true },
    pass: { type: Number, required: true }
})


var User = mongoose.model('User', userSchema);

module.exports = User;
