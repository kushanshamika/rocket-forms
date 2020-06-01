const User = require('../models/userModel');
const MailConfig = require('../../config/mail');
var smtpTransport = MailConfig.SMTPTransport;

module.exports = {

    sendMail: function(req, res, next){

        User.findOne({token:req.params.token}, (err, user) => {
            
            if (err) next(err);

            if (!user){
                
                res.json({
                    'status':'failed',
                    'message':'Invalid token'
                })

                return;
            }

            var mailBody = ""
            for (let [key, value] of Object.entries(req.fields)){
              mailBody = mailBody +"<li>"+key+"</li><ul><li>"+value+"</li></ul>"
            }

            const template = `<p>You have a new form submission</p><h3>Message Details</h3><ul>  ${mailBody}</ul><h3></h3><p>Thanks for using Rocket Forms 🚀</p>`;


            let HelperOptions = {

                from: '"Rocket Forms 🚀" <rocketforms@kushan.info>', // sender address
                to: user.mail, // list of receivers
                subject: 'Form submission via Rocket Forms 🚀', // Subject line
                html: template// html body

            };

            smtpTransport.sendMail(HelperOptions, (err, info) => {

                if(err){
                    res.render('error');
                }else{
                    res.render('confirmation');
                }
            })
        })
    }
}