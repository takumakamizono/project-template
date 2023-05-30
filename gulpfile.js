const browserSync = require("browser-sync");
const { src, dest, watch } = require("gulp");
const autoprefixer = require("autoprefixer");
const path = require("path");
const LoadPlugins = require("gulp-load-plugins");
const $ = LoadPlugins();
const sass = require("gulp-dart-sass");
const pkg = require("./package.json");
const server = browserSync.create();

function imageChange() {
  let count = 1;
  return src("./images-src/*.jpg")
    .pipe($.imagemin())
    .pipe(
      $.rename((path) => {
        path.basename = "aomaru-" + count;
        count++;
      })
    )
    .pipe(dest("./test-theme/images"));
}

exports.imageChange = imageChange;

function styles() {
  const themeInfo = pkg.theme;
  const comment = `
  /*
  Theme Name: ${themeInfo.name}
  Theme URI: ${themeInfo.uri}
  Description: ${themeInfo.description}
  Version: ${themeInfo.version}
  Author: ${themeInfo.author}
  Author URI: ${themeInfo.authorUri}
  License: ${themeInfo.license}
  License URI: ${themeInfo.licenseUri}
  Tags: ${themeInfo.tags.join(", ")}
  Text Domain: ${themeInfo.textDomain}
  Domain Path: ${themeInfo.domainPath}
  */
  `;

  return src("./test-theme/styles/style.scss")
    .pipe($.sourcemaps.init())
    .pipe(sass())
    .pipe(
      $.postcss([autoprefixer({ overrideBrowserslist: ["last 2 versions"] })])
    )
    .pipe($.cleanCss())
    .pipe($.header(comment))
    .pipe($.sourcemaps.write("."))
    .pipe(dest("./test-theme/"))
    .pipe(browserSync.stream());
}

exports.styles = styles;

function startAppServer() {
  browserSync.init({
    proxy: "http://localhost:4013",
    port: 4014,
    files: ["test-theme/**/*.css"],
    notify: false,
  });

  watch("./test-theme/**/*.scss", styles);
  watch("./test-theme/**/*.php").on("change", browserSync.reload);
}

exports.serve = startAppServer;

function jsMinify() {
  return src([
    "./test-theme/scripts/libs/*.js",
    "./test-theme/scripts/*.js",
    "!./test-theme/scripts/libs/*.min.js",
    "!./test-theme/scripts/*.min.js",
  ])
    .pipe($.uglify())
    .pipe(
      $.rename({
        extname: ".min.js",
      })
    )
    .pipe(
      $.if(
        (file) => path.basename(file.path) === "main.min.js",
        dest("./test-theme/scripts"),
        dest("./test-theme/scripts/libs")
      )
    );
}

exports.javascripts = jsMinify;
