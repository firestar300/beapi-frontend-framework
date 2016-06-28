/*fs.readFile('html/js/scripts.min.js', (err, data) => {
	if (err) throw err;
	data.forEach(function(elem, ind) {
		var res = elem.match(/addClass("")/g);
	});
  console.log(data);
});*/

var str = "proto:{initZoom.addClass(\"mfp-coco\"):function(mfp){var e,n=t.st.zoom,r=.addClass(\"mfp-animated-image\"),r";

console.log(str.match(/addClass/g));