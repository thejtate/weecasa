`Installation`

0) cd slice

`If your gulp < v4, run:`

1) npm rm --global gulp
2) rm /usr/share/man/man1/gulp.1 or /usr/local/share/man/man1/gulp.1

`and remove from project directory:`

3) npm rm gulp --save-dev

`If you don't have global gulp, run:`

4) npm install --global gulp-cli

`If you don't have gulp in project, run:`

5) npm install 'gulpjs/gulp.git#4.0' --save-dev

`Install modules:`

6) npm install

`Watch:`

7) gulp watch

`Sprites:`

0) All icons should be in assets/img/sprite
1) Ready sprite file you can find in public/theme/images/spite.png
2) Ready variables for sprite mixin you can find in assets/sass/_sprite.scss
3) You can use @import oneline-sprite($s-ico-example) or oneline-sprite-box($s-ico-example) - if you need width and height
4) You can add display style, just use second parameter for oneline-sprite/oneline-sprite-box like this: oneline-sprite($s-ico-example, block)/oneline-sprite-box($s-ico-example, inline-block)

`Build in trunk:`

env NODE_ENV=production gulp build
