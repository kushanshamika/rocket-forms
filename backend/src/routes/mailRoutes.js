const express = require("express");
const router = express.Router();
const emailController = require('../controller/mailController');
const formidableMiddleware = require('express-formidable');

router.post('/mail/:token', formidableMiddleware(), emailController.sendMail);

module.exports = router;