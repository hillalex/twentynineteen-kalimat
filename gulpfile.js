'use strict';

const gulp = require('gulp'),
    sass = require('gulp-sass'),
    minify = require('gulp-clean-css'),
    rename = require('gulp-rename');

sass.compiler = require('node-sass');

gulp.task('sass', function () {
    return gulp.src('./sass/style.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('.'))
        .pipe(minify({compatibility: 'ie8'}))
        .pipe(rename({
            extname: ".min.css"
        }))
        .pipe(gulp.dest('.'));
});
