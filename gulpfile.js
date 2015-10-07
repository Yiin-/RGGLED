var gulp = require('gulp');
var concat = require('gulp-concat');
var minify = require('gulp-minify');
var uglify = require('gulp-uglify');
var sass = require('gulp-sass');

var styleFiles = 'resources/assets/sass/*.scss';
var scriptFiles = 'resources/assets/js/*.js';

gulp.task('compile', function () {
	// concat all scripts, minify, and output
	gulp.src(scriptFiles)
		// .pipe(concat('scripts.js'))
		.pipe(uglify())
		.pipe(gulp.dest('./public/assets/js'));
});

gulp.task('sass', function () {
	gulp.src(styleFiles)
		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(gulp.dest('./public/assets/css'));
});

gulp.task('default', function() {
	gulp.watch(styleFiles, ['sass']);
	gulp.watch(scriptFiles, ['compile']);
});