var gulp = require("gulp"),
  settings = require("./settings"),
  sass = require("gulp-sass"),
  autoprefixer = require("gulp-autoprefixer"),
  webpack = require("webpack"),
  browserSync = require("browser-sync").create();

gulp.task("styles", function() {
  // source file
  return gulp
    .src(settings.themeLocation + "scss/**/*.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(autoprefixer())
    .pipe(gulp.dest(settings.themeLocation + "temp/css"));
});

gulp.task("scripts", function(callback) {
  webpack(require("./webpack.config.js"), function(err, stats) {
    if (err) {
      console.log(err.toString());
    }

    console.log(stats.toString());
    callback();
  });
});

gulp.task("watch", function(done) {
  browserSync.init({
    notify: false,
    proxy: settings.urlToPreview,
    ghostMode: false
  });

  // watching all php changes
  gulp.watch("./**/*.php", function(done) {
    browserSync.reload();
    done();
  });
  // watching all css changes
  gulp.watch(
    settings.themeLocation + "scss/**/*.scss",
    gulp.parallel("waitForStyles")
  );
  // watching all js changes
  gulp.watch(
    [
      settings.themeLocation + "js/modules/*.js",
      settings.themeLocation + "js/scripts.js"
    ],
    gulp.parallel("waitForScripts")
  );
  done();
});

// passing the main css style with all the post css filter to a temp folder
gulp.task(
  "waitForStyles",
  gulp.series("styles", function() {
    return gulp
      .src(settings.themeLocation + "temp/css/main.css")
      .pipe(browserSync.stream());
  })
);

gulp.task(
  "waitForScripts",
  gulp.series("scripts", function(cb) {
    browserSync.reload();
    cb();
  })
);
