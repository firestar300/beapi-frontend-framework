var fs = require('fs');
var str ="addClass(\"dadada\")dzada";
var regExp = /addClass\([\s'"]*(.*?)[\s'"]*\)/gm;
var res;
var file, match;
fs.readFile('assets/js/src/menu.js', (err, data) => {
	if (err) throw err;
	file = ''+data;
	match = regExp.exec(file);
	console.log(match);
});



