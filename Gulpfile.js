'use strict';

let gulp = require('gulp');
let sass = require('gulp-sass');

gulp.task('hello', function () {
    console.log(">>>>>>>>>>>");
    console.log("Hello there!");
    console.log("<<<<<<<<<<<");
});

let sassOptions = {
    errLogToConsole: true,
    outputStyle: 'expand',
    precision: 8
};

let sassOptionsCompressed = {
    errLogToConsole: true,
    outputStyle: 'compressed',
    precision: 8
};

gulp.task('callsass', function () {
   return gulp.src('scss/style.scss')
       .pipe(sass(sassOptions))
       .on('error', sass.logError)
       .pipe(gulp.dest('css'));
});

gulp.task('observe', function () {
   gulp.watch('scss/*.scss', ['callsass'])
       .on('change', function (event) {
           console.log('File ' + event.path + ' was ' + event.type);
       })
});


