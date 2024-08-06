const express = require('express');
const path = require('path');
const app = express();
const port = 3000;


// Set view engine to EJS
app.set('view engine', 'ejs');
app.set('views', path.join(__dirname, 'views'));

// Serve static files
app.use(express.static(path.join(__dirname, 'public')));

// Body parser middleware
app.use(express.urlencoded({ extended: true }));

//Routes
const indexRouter = require('./routes/index');
app.use('/', indexRouter);

app.listen(port, () => {
	console.log(`Your server is up and running on http://localhost:${port}`);
});
