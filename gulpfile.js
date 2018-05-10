// Set site URL to be called in tasks
var siteUrl = 'http://FOLDER-NAME.test';
var themeName = 'THEME-NAME';

// Include gulp and all required plugins
var gulp = require('gulp'),
    jshint = require('gulp-jshint'),
    sass = require('gulp-sass'),
    cssnano = require('gulp-cssnano'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    autoprefixer = require('gulp-autoprefixer'),
    browserSync = require('browser-sync').create(),
    uglify = require('gulp-uglify'),
    notify = require('gulp-notify'),
    imagemin = require('gulp-imagemin'),
    stats = require('gulp-stats')(gulp);

// Browser Sync
gulp.task('serve', ['sass'], function(){
  browserSync.init({
    proxy: siteUrl
  });
});

// Lint Task
gulp.task('lint', function() {
  return gulp.src('wp-content/themes/'+ themeName +'/assets/src/scripts/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('default'));
});

// Compile Our Sass
gulp.task('sass', function() {
	return gulp.src('wp-content/themes/' + themeName +'/assets/src/sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9'],
      cascade: false
    }))
		.pipe(gulp.dest('wp-content/themes/' + themeName +'/assets/dist/css'))
    .pipe(rename('style.min.css'))
    .pipe(cssnano())
		.pipe(gulp.dest('wp-content/themes/' + themeName +'/assets/dist/css/min'))
    .pipe(browserSync.stream())
    .pipe(notify({ message: 'Styles task complete' }));
});

// Concatenate & Minify JS
gulp.task('scripts', function() {
	return gulp.src('wp-content/themes/' + themeName +'/assets/src/scripts/*.js')
    .pipe(concat('scripts.js'))
		.pipe(gulp.dest('wp-content/themes/' + themeName +'/assets/dist/scripts'))
    .pipe(uglify())
    .pipe(rename('scripts.min.js'))
		.pipe(gulp.dest('wp-content/themes/' + themeName +'/assets/dist/scripts/min'))
    .pipe(browserSync.stream())
    .pipe(notify({ message: 'Script task complete' }));
});

//Optimise Images
gulp.task('images', () =>
  gulp.src(sitePath + 'src/images/*')
      .pipe(imagemin())
      .pipe(gulp.dest(sitePath + 'dist/img'))
);

// Watch Files For Changes
gulp.task('watch', function() {
	gulp.watch('wp-content/themes/' + themeName +'/assets/src/sass/**/*.scss', ['sass']);
	gulp.watch('wp-content/themes/' + themeName +'/assets/src/scripts/**/*.js', ['lint', 'scripts']);
});


// Default Task
gulp.task('default', ['serve', 'images', 'lint', 'sass', 'scripts', 'watch']);
