
/*
 * GET home page.
 */

exports.app = function(req, res){
  res.render('app.html', { title: 'Cloudant Boiler Plate' });
};

exports.convinced = function(req, res){
  res.render('convinced.html', { title: 'Cloudant Boiler Plate' });
};

 exports.index = function(req, res){
  res.render('index.html', { title: 'Cloudant Boiler Plate' });
};

exports.process = function(req, res){
  res.render('process.html', { title: 'Cloudant Boiler Plate' });
};

exports.references = function(req, res){
  res.render('references.html', { title: 'Cloudant Boiler Plate' });
};

exports.welcome = function(req, res){
  res.render('welcome.html', { title: 'Cloudant Boiler Plate' });
};