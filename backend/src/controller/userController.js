const User = require('../models/userModel');
const UIDGenerator = require('uid-generator');

module.exports = {

    register:function(req, res, next){

        const uidgen = new UIDGenerator(UIDGenerator.BASE16).baseEncoding;

        const newUser = new User(req.body);
        newUser.token = uidgen;

        newUser.save((err, user) => {
            
            if(err){
                next(err);
            }else{
                return res.json(user);
            }
        })
    }
}