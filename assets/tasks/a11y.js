var access = require('gulp-accessibility');

module.exports = function(gulp, plugins) {
	return function() {
		gulp.src('./html/*.php')
			.pipe(access({
				force: true
			}))
			.on('error', console.log)
			.pipe(access.report({ reportType: 'txt' }))
			.pipe(rename({
				extname: '.txt'
			}))
			.pipe(gulp.dest('reports/txt'));
	};
};
