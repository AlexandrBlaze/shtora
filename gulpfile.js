const { src, dest, series}  = require('gulp');
const  sass = require('gulp-sass');
const  autoprefixer  = require('gulp-autoprefixer');
const  sourcemaps = require('gulp-sourcemaps');
function sassTask() {
	return src('./src/sass/**/*.scss')
        .pipe(sourcemaps.init())
		.pipe(sass({outputStyle: ''}).on('error', sass.logError))
		.pipe(autoprefixer({ browsers: ['last 3 versions'] }))
        .pipe(sourcemaps.write())
		.pipe(dest('./dist/css/'));
};

exports.sass=sassTask;
exports.default = series(sassTask);