let nodemailer = require('nodemailer');
let environment = process.env;

module.exports.SMTPTransport = nodemailer.createTransport({

  host: 'mail.kushan.info',
  port: 587,
  secure: false, // true for 465, false for other ports
  auth: {
      user: 'rocketforms@kushan.info', // generated ethereal user
      pass: '4313@Samadhi'  // generated ethereal password
  },
  tls:{
    rejectUnauthorized:false
  }

});
