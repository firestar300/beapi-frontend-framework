/*Load all plugin define in package.json*/
var fs = require('fs');

var tabPhp = [];

var readDir = function() {
	fs.readdir('html/', (err, data) => {
		if (err) throw err;
		data.forEach(function(elem, ind) {
			var res = elem.match(/.php/g);
			if(res != null) {
				if((data[ind] !== 'header.php') && (data[ind] !== 'footer.php') && (data[ind] !== 'index.php') && (data[ind] !== 'searchform.php')) {
						tabPhp.push(data[ind]);
				}
			}
		});
		console.log('tabPhp', tabPhp);
	});
}

var fullPath = function(tab) {
	return tab.map(function(o) {return source+o; });
}

Promise.all([
		readDir(), setTimeout(function() {fullPath(tabPhp)},500)
	]).then(function() {
		console.log('tableau généré');
		var tabee = tabPhp;
	console.log('tabee 2 ',tabee);
	}, function() {
		console.log('échec tableau');
});




