const express = require('express');
const mongoose = require('mongoose');
const bodyParser = require("body-parser");
const exphbs = require('express-handlebars');
var cors = require('cors');
var morgan = require('morgan');
var user = require('./src/routes/userRoutes');
var mail = require('./src/routes/mailRoutes');
require('dotenv').config();

const app = express();
const PORT = process.env.SERVER_PORT;

app.use(cors());

// mongoose connection
mongoose.Promise = global.Promise;
mongoose.connect(process.env.DB_HOST, {
    useNewUrlParser: true,
    useUnifiedTopology: true
});

// bodyparser setup
// app.use(bodyParser.urlencoded({extended:true}))
 app.use(bodyParser.json());


app.use(morgan('combined'));

// View engine setup
app.engine('handlebars', exphbs({
    defaultLayout:false,
  }));

app.set('view engine', 'handlebars');

// public routes
app.use('/api/v1', user);
app.use('/api/v1', mail);

app.get('/', (req,res)=>{
    res.send('Server running on port '+PORT)
});

// handle errors
app.use(function (err, req, res, next) {

    if (err.status === 404) res.status(404).json({status: "Not found"});
    else res.status(500).json({status: "Something looks wrong"});
});

app.listen(PORT, ()=>{
    console.log('Server is running on port '+PORT)
});