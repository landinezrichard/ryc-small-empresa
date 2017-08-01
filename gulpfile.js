/*
INSTALAR TODO CON:

	npm i -D gulp gulp-stylus nib gulp-util gulp-group-css-media-queries browser-sync
*/

/*Para ver los errores que arroja gulp-util, ir a:
	https://nodejs.org/api/errors.html#errors_error_code
*/

// Funciona bien con node-v5.12.0

//Incluir modulos necesarios
var gulp = require('gulp'),
	browserSync = require('browser-sync'),
	stylus    = require('gulp-stylus'),
	nib       = require('nib'),
	gutil     = require('gulp-util'),
	groupQuerys= require('gulp-group-css-media-queries');

//Configurar Browsersync
gulp.task('browser-sync', function() {
	var files = [
		'./style.css',
		'./*.php'
	];

	//Iniciar Browsersync con el servidor PHP
	browserSync.init(files, {
		proxy: 'http://localhost/small-empresa/'
	});
});

//Configurar tarea de Stylus para correr cuando cammbien los archivos .styl
//Browsersync tambien refrescara el navegador
gulp.task('stylus', function() {
	return gulp.src('style.styl')
		.pipe(stylus({
			use: nib(),
			'include css': true
		}))
		.on('error', gutil.log)
		.pipe(groupQuerys())
		.on('error', gutil.log)
		.pipe(gulp.dest('./'))
		.pipe(browserSync.stream());
});

//Tarea por defecto, se llama usando 'gulp'
//La tarea procesa los .styl, corre browser-sync y mira los cambios
gulp.task('default', ['stylus', 'browser-sync'], function() {
	gulp.watch('stylus/**/*.styl', ['stylus']);
});