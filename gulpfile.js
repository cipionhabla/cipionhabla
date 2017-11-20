var gulp = require('gulp');
// Requires the gulp-sass plugin
var sass = require('gulp-sass');

gulp.task('sass', function(){
  return gulp.src('app/scss/**/*.scss')
    .pipe(sass()) // Converts Sass to CSS with gulp-sass
    .pipe(gulp.dest('dist/css'));
});

// Gulp watch syntax
gulp.task('watch', function(){
  gulp.watch('app/scss/**/*.scss', ['sass']);
})
