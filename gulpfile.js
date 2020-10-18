var gulp = require('gulp');
var sourcemaps = require('gulp-sourcemaps');
var rename = require("gulp-rename");
var cleanCSS = require('gulp-clean-css');
const htmlmin = require('gulp-htmlmin');

var style_css_files = './src/styles/*.css';
var css_compile_dest = './build/styles/';


/**
 * @function css_minifier
 */
const css_compiler = async () => {
    gulp.src(style_css_files)
        .pipe(sourcemaps.init({
            loadMaps: true
        }))
        .pipe(cleanCSS({
            compatibility: 'ie8',
            rebase: false
        }))
        .pipe(rename({
            suffix: ".min",
        }))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(css_compile_dest))
}
const watch = () => {
    gulp.watch('./src/styles/**/*.css', css_compiler)
}
exports.css = watch;


/**
 * @function html_minifier
 */

var src_html = './template/*.php';
var dest_html = './build/minified-template/';

const html_compiler = async () => {
    gulp.src(src_html)
        .pipe(htmlmin({
            collapseWhitespace: true
        }))
        .pipe(gulp.dest(dest_html))
}
exports.minify_html = html_compiler;