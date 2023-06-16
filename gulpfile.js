var gulp = require('gulp');
var less = require('gulp-less');
var babel = require('gulp-babel');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var cleanCSS = require('gulp-clean-css');
var del = require('del');
var browserSync = require('browser-sync');
var reload = browserSync.reload;
var autoprefixer = require('gulp-autoprefixer');
var imageMin = require('gulp-imagemin');
var notify = require('gulp-notify');
var plumber = require('gulp-plumber');
const sass = require('gulp-sass')(require('sass'));
var sourcemaps = require('gulp-sourcemaps');
// const paths = {
//   styles: {
//     src: './sass/**/*.scss',
//     dest: 'assets/styles/'
//   },
//   scripts: {
//     src: './js/scripts.js',
//     dest: 'assets/scripts/'
//   }
// };

 
/* Not all tasks need to use streams, a gulpfile is just another node program
 * and you can use all packages available on npm, but it must return either a
 * Promise, a Stream or take a callback and call it
 */
function clean() {
  // You can use multiple globbing patterns as you would with `gulp.src`,
  // for example if you are using del 2.0 or above, return its promise
  return del([ 'assets' ]);
}
 
 function bs() {
    browserSync.init({
    proxy: 'http://localhost:8888'
  });
 }
 function browserSynchReload(done) {
  browserSync.reload();
  done();
 }
/*
 * Define our tasks using plain functions
 */
function styles() {
  return gulp.src('./sass/**/*.scss')
    .pipe(plumber({
      errorHandler: notify.onError("Error: <%= error.message %>")
    }))
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(cleanCSS())
    .pipe(concat('style.css'))
    .pipe(autoprefixer('last 5 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1'))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./'))
    .pipe(reload({ stream: true }));
}
 


// exports.styles = styles;

function scripts() {
  return gulp.src('./js/scripts.js')
    .pipe(plumber({
      errorHandler: notify.onError("Error: <%= error.message %>")
    }))
    .pipe(concat('main.min.js'))
    .pipe(uglify())
    // .pipe(uglify({mangle: false}))
      .pipe(gulp.dest('./dist'))
    .pipe(reload({stream:true}));

     

}
    // gulp.scripts('watch:es6', () => {
    //   return gulp.watch('./js/scripts.js', gulp.series('es6:react', function (done) {
    //     browserSync.reload();
    //     done();
    //   }));



function images() {
  return gulp.src('./images/**/*')
    .pipe(imageMin())
    .pipe(gulp.dest('./images'));
}
 
function watch() {
  gulp.watch('sass/**/*.scss', styles);
  gulp.watch('./js/**/*.js', scripts);
  // gulp.watch('./sass/**/*.scss', ['sass']);
  // gulp.watch('./js/**/*.js', ['scripts']);
  // gulp.watch(settings.themeLocation + './**/*.php', reload);
  // gulp.watch('./src/**/*.html').on('change', browserSync.reload);
  // gulp.watch('./src/**/*.php').on('change', browserSync.reload);
  gulp.watch('./**/*.php', browserSynchReload);
}
//  exports.watch = function () {
//   gulp.watch('./sass/**/*.scss', ['sass']);
//   gulp.watch('./js/**/*.js', ['scripts']);
//   gulp.watch('./**/*.php', browserSynchReload);
// };
/*
 * Specify if tasks run in series or parallel using `gulp.series` and `gulp.parallel`
 */
var build = gulp.series(clean, gulp.parallel(styles, scripts,images, bs, watch, browserSynchReload));
 
/*
 * You can use CommonJS `exports` module notation to declare tasks
 */
exports.clean = clean;
exports.bs = bs;
exports.styles = styles;
exports.scripts = scripts;
exports.images = images;
exports.watch = watch;
exports.build = build;
/*
 * Define default task that can be called by just running `gulp` from cli
 */
exports.default = build;