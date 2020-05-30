const User = require('../models/userModel');
const uid = require('uid');

module.exports = {

    register:function(req, res, next){

        const newUser = new User(req.body);
        newUser.token = uid();

        newUser.save((err, user) => {
            
            if(err){
                next(err);
            }else{
                return res.json(user);
            }
        })
    }
}