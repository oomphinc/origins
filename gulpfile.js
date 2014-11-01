// Plugins
var gulp = require('gulp'),
	 watch = require('gulp-watch'),
	 sass = require('gulp-ruby-sass'),
	 autoprefixer = require('gulp-autoprefixer'),
	 plumber = require('gulp-plumber'),
	 gutil = require('gulp-util'),
	 rem = require('gulp-pixrem');

// Outputs an error through plumber plugin
var onError = function (err) {
  gutil.beep();
  console.log(err);
};

// Styles
gulp.task('styles', function() {
	gulp.src(['sass/theme.scss','sass/editor.scss'])
		.pipe(plumber({ errorHandler: onError }))
		.pipe(sass({style: 'compressed'}))
		.pipe(autoprefixer('last 1 version', '> 1%', 'ie 9', 'ie 8', 'ie 7'))
		.pipe(rem(10))
		.pipe(gulp.dest('css/'));
});

gulp.task('watch', function() {
	// Watch the sass files
	gulp.watch('sass/**/*.scss', ['styles']);
});

// Make all tasks run and then watch for the rest
gulp.task('default', ['styles', 'watch']);
