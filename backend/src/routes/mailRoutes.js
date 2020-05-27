const express = require("express");
const router = express.Router();
const emailController = require('../controller/mailController');

router.post('/mail/:token', emailController.sendMail);

module.exports = router;