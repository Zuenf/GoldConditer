'use strict';

var gulp = require('gulp'),
    csso = require('gulp-csso'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    order = require('gulp-order'),
    gulpif = require('gulp-if');

gulp.task('sass', function () {
    return gulp.src("frontend/web/scss/*.scss")
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 3 versions'],
            cascade: false
        }))
        .pipe(csso())
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest("frontend/web/css/"));
});

/*gulp.task('js', function () {
    return gulp.src("frontend/web/!**!/!*.js")
        .pipe(order([
            "vendor/js1.js",
            "vendor/!**!/!*.js",
            "app/coffee1.js",
            "app/!**!/!*.js"
        ]))
        .pipe(sourcemaps.init())
        .pipe(uglify())
        .pipe(concat('all.min.js'))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest("frontend/web/js/"));
});*/


gulp.task('default', ['sass'], function () {
    gulp.watch("frontend/web/scss/**/*.scss", ['sass']);
});


