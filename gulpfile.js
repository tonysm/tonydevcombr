var gulp = require('gulp');
var sass = require('gulp-sass');

var paths = {
    sass: './assets/**/*.scss',
    sassDest: './public/css'
};

gulp.task('sass', function() {
    gulp.src(paths.sass)
        .pipe(sass())
        .pipe(gulp.dest(paths.sassDest));
});

gulp.task('watch', function() {
    gulp.watch(paths.sass, ['sass']);
});

gulp.task('default', ['sass', 'watch']);