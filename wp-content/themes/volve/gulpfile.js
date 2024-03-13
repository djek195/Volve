const gulp = require('gulp');
const postcss = require('gulp-postcss');
const sass = require('gulp-sass')(require('sass')); // Set 'sass' as the Sass compiler
const cssnano = require('cssnano');

function style() {
    let plugins = [
        cssnano()
    ];

    return gulp.src('./assets/scss/*scss')
        .pipe(sass())
        .pipe(postcss(plugins))
        .pipe(gulp.dest('./assets/public'));
}

function watch() {
    gulp.watch('./assets/scss/*scss', style);
}

exports.style = style;
exports.watch = watch;