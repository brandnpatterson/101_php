const gulp       = require('gulp');
const del        = require('del');
const prefix     = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const sass       = require('gulp-sass');
const sync       = require('browser-sync');

const reload     = sync.reload;

gulp.task('clean', del.bind(null, ['public/css/style.css'], {read: false}));

gulp.task('default', ['server', 'styles', 'watch']);

gulp.task('server', () => {
  sync.init({
    notify: false,
    proxy: 'localhost/php/php_101/public',
    port: 3000
  });
});

gulp.task('styles', () => {
  return gulp.src('assets/css/style.*')
    .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
    .pipe(prefix('last 2 versions'))
    .pipe(gulp.dest('public/css'));
});

gulp.task('watch', () => {
  gulp.watch('assets/css/style.*', ['styles', reload])
  gulp.watch('views/*.php', reload);
});
