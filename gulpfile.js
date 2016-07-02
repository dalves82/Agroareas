var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var jade = require('gulp-jade');
var less = require('gulp-less');
var uglify = require('gulp-uglify');
var minifyCSS = require('gulp-minify-css');
var imagemin = require('gulp-imagemin');

gulp.task('browser-sync', function() {
	browserSync.init({
		proxy: 'localhost/Umega'
	});
	gulp.watch(['assets/less/*.less', 'assets/less/**/*.less'], ['less']);
	gulp.watch(['assets/jade/*.jade', 'assets/jade/**/*.jade'], ['jade']);
	gulp.watch(['assets/js/*.js', 'assets/js/**/*.js'], ['compress-js']);
});

gulp.task('jade', function() {
	gulp.src(['assets/jade/documentation/*.jade'])
		.pipe(jade({
			pretty: true
		}))
		.pipe(gulp.dest('./'))
		.pipe(browserSync.stream());
});

gulp.task('less', function() {
	gulp.src(['assets/less/umega.less', 'assets/less/skins.less'])
		.pipe(less())
		.pipe(minifyCSS())
		.pipe(gulp.dest('build/css'))
		.pipe(browserSync.stream());
});

gulp.task('compress-js', function() {
	gulp.src(['assets/js/*.js', 'assets/js/**/*.js'])
		.pipe(uglify())
		.pipe(gulp.dest('build/js/'))
		.pipe(browserSync.stream());
});

gulp.task('compress-images', function() {
	gulp.src(['assets/images/*', 'assets/images/**/*'])
		.pipe(imagemin())
		.pipe(gulp.dest('build/images'));
});

gulp.task('default', ['browser-sync'], function() {
	console.log('**** Umega - Responsive web app kit ****');
	console.log('* Start less compiler                  *');
	console.log('* Start jade compiler                  *');
	console.log('* Minify/compress css/js               *');
	console.log('* Automatically live reload            *');
	console.log('****************************************');
});