var gulp = require('gulp');
var sass = require('gulp-sass');
var useref = require('gulp-useref');
var uglify = require('gulp-uglify');
var gulpIf = require('gulp-if');
var cssnano = require('gulp-cssnano');

gulp.task('includes', function() {
  return gulp.src('app/includes/*')
  .pipe(gulp.dest('dist/includes'))
})

gulp.task('sass', function(){
  return gulp.src('app/scss/**/*.scss')
    .pipe(sass()) // Converts Sass to CSS with gulp-sass
    .pipe(gulpIf('*.css', cssnano()))
    .pipe(gulp.dest('app/css'))
    .pipe(gulp.dest('dist/css'));
});

// Gulp watch syntax
gulp.task('watch', ['useref'], function(){
  gulp.watch('app/scss/**/*.scss', ['sass']);
})

gulp.task('useref', function(){
  return gulp.src('app/*.php')
    .pipe(useref())
    // Minifies only if it's a JavaScript file
    .pipe(gulpIf('*.js', uglify()))
    .pipe(gulp.dest('dist'));
});
