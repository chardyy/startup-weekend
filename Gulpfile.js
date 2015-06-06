var gulp = require('gulp');
var phpspec = require('gulp-phpspec');
var run = require('gulp-run');
var notify = require('gulp-notify');

gulp.task('test', function(){
	gulp.src('app/database/migrations/**/*.php')
		.pipe(phpspec('', { notify: true }))
		.on('error', notify.onError({
			title: 'Crap',
			message: 'Your test failed!',
			icon: __dirname +'/fail.png'
		}))
		.pipe(notify({
			title: 'Success',
			message: 'All test have passed'
		}));
});

gulp.task('watch', function(){
	gulp.watch(['app/database/migrations/**/*.php', 'app/database/seeds/**/*.php'], ['test']);
});


gulp.task('default', ['test', 'watch']);