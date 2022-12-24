const {src, dest, series, parallel, watch} = require('gulp');

const browserSync = require('browser-sync').create();
const sass = require('gulp-sass')(require('sass'));

const origin = 'assets';
const destination = 'build';

sass.compiler = require('node-sass');



async function clean(cb) {
    cb();
}

// Styling for custom Kirby Panel
function panelCss(cb) {
    src(`${origin}/scss/custom-panel.scss`)
    .pipe(sass({
        outputStyle: 'compressed'
    }))
    
    .pipe(dest(`${destination}/css`));

    cb();
}

function scss(cb) {
    src(`${origin}/scss/style.scss`)
    .pipe(sass({
        outputStyle: 'compressed'
    }))
    
    .pipe(dest(`${destination}/css`));

    cb();
}

function js(cb) {
    src(`${origin}/js/**/*.js`).pipe(dest(`${destination}/js`));
    cb();
}

function watcher(cb) {
    watch(`${origin}/**/**/custom-panel.scss`).on('change', series(panelCss, browserSync.reload))
    watch(`${origin}/**/**/*.scss`).on('change', series(scss, browserSync.reload))
    watch(`${origin}/**/**/*.js`).on('change', series(js, browserSync.reload))
    cb();
}



function server(cb) {
    browserSync.init({
        notify: false,
        open: true,
        proxy: "http://starter.int",
        port: 80,
        online: true
    })
    cb();
}

exports.default = series(clean, parallel(panelCss, scss, js), server, watcher);