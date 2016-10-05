var fs = require('fs');
var regExp = /addClass\([\s'"]*(.*?)[\s'"]*\)/gm;
var res;
var file, match;
/*fs.readFile('assets/js/src/menu.js', (err, data) => {
	if (err) throw err;
	file = ''+data;
	match = regExp.exec(file);
	console.log(file);
	console.log('match: '+match[1],' type: '+typeof match, 'match length '+match.length);
});*/
var classExclude = [];
var pathJs = ['assets/js/src/menu.js', 'assets/js/src/sliders.js'];
var exclude = function(arr) {
	arr.forEach(function(elem, ind) {
		fs.readFile(elem, (err, data) => {
			if (err) throw err;
			file = ''+data;
			while(match = regExp.exec(file)){
				//console.log('match: '+match[1],' type: '+typeof match, 'match length '+match.length);
				classExclude.push(match[1]);
			}
			console.log('class exclude : ',classExclude);
		});
	})
}
exclude(pathJs);




