const User = require('../models/userModel');

module.exports = {

    sendMail: function(req, res, next){

        User.findOne({token:req.params.token}, (err, user) => {
            
            if (err) next(err);

            res.json(user);
        })
    }
}