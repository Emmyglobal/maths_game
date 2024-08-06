const express = require('express');
const router = express.Router();

let posts = [];

// Home Page - List Posts
router.get('/', (req, res) => {
	res.render('index', { posts: posts });
});

// New Post Page
router.get('/new-post', (req, res) => {
	res.render('new-post');
});

// Create Post
router.post('/new-post', (req, res) => {
	const post = {
		id: Date.now(),
		title: req.body.title,
		content: req.body.content
	};
	posts.push(post);
	res.redirect('/');
});

// Edit Post Page
router.get('/edit-post/:id', (req, res) => {
	const post = posts.find(p => p.id == req.params.id);
	res.render('edit-post', { post: post });
});

// Update Post
router.post('/edit-post/:id', (req, res) => {
	const post = posts.find(p => p.id == req.params.id);
	post.title = req.body.title;
	post.content = req.body.content;
	res.redirect('/')
});

// Delete Post
router.post('/delete-post/:id', (req, res) => {
	posts = posts.filter(p => p.id != req.params.id);
	res.redirect('/')
});

module.exports = router;
