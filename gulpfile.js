// Include gulp
var gulp = require('gulp'); 

// Set site URL to be called in tasks
var siteUrl = 'http://superdream.dev/superdream-boilerplate';

// Include all required plugins
var jshint = require('gulp-jshint'),
    sass = require('gulp-sass'),
    cssnano = require('gulp-cssnano'),
    uncss = require('gulp-uncss');
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
  return gulp.src('src/scripts/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('default'));
});

// Compile Our Sass
gulp.task('sass', function() {
  return gulp.src('src/sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9'],
      cascade: false
    }))
    .pipe(gulp.dest('dist/css'))
    .pipe(uncss({
      html: [siteUrl, '*.html']
    }))
    .pipe(rename('style.min.css'))
    .pipe(cssnano())
    .pipe(gulp.dest('dist/css/min'))
    .pipe(browserSync.stream())
    .pipe(notify({ message: 'Styles task complete' }));
});

// Concatenate & Minify JS
gulp.task('scripts', function() {
  return gulp.src('src/scripts/*.js')
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('dist/scripts'))
    .pipe(uglify())
    .pipe(rename('scripts.min.js'))
    .pipe(gulp.dest('dist/scripts/min'))
    .pipe(browserSync.stream())
    .pipe(notify({ message: 'Script task complete' }));
});

//Optimise Images
gulp.task('images', () =>
  gulp.src('src/images/*')
      .pipe(imagemin())
      .pipe(gulp.dest('dist/img'))
);

// Watch Files For Changes
gulp.task('watch', function() {
  gulp.watch('src/sass/**/*.scss', ['sass']);
  gulp.watch('src/scripts/**/*.js', ['lint', 'scripts']);
});


// Default Task
gulp.task('default', ['serve', 'images', 'lint', 'sass', 'scripts', 'watch']);
