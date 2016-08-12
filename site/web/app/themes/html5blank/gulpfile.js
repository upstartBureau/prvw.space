////////////////////////////////


const gulp = require('gulp')
const browserSync = require('browser-sync').create()
const sass = require('gulp-sass')

gulp.task('serve', ['sass'], function() {
  browserSync.init({
    server: './static'
  })
  gulp.watch('./static/**', ['js'])
  gulp.watch('./static/sass/*.scss', ['sass'])
  gulp.watch('./static/*.html').on('change', browserSync.reload)
})
gulp.task('js', function(){
  // gulp.src('static/html/*.html').pipe(gulp.dest('dist'))
  gulp.src('./static/js/*.js').pipe(gulp.dest('src/js'))
})
gulp.task('sass', function() {
  return gulp.src('static/sass/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('./src/'))
    .pipe(browserSync.stream())
})

gulp.task('default', ['serve'])
