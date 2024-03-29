import domReady from '@roots/sage/client/dom-ready';

// import './jquery.min.js';
// import './browser.min.js';
// import './breakpoints.min.js';
// import './util.js';
// import './main.js';

/**
 * Application entrypoint
 */
domReady(async () => {

});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
