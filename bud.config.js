/**
 * Build configuration
 *
 * @see {@link https://roots.io/docs/sage/ sage documentation}
 * @see {@link https://bud.js.org/guides/configure/ bud.js configuration guide}
 *
 * @typedef {import('@roots/bud').Bud} Bud
 * @param {Bud} app
 */
export default async (app) => {
  /**
   * Application entrypoints
   * @see {@link https://bud.js.org/docs/bud.entry/}
   */
  app
    .entry({
      app: ['@scripts/app', '@styles/app'],
      main: ['@styles/main'],
      editor: ['@scripts/editor', '@styles/editor'],
    })

    /**
     * Directory contents to be included in the compilation
     * @see {@link https://bud.js.org/docs/bud.assets/}
     */
    .assets(['images'])

    /**
     * Matched files trigger a page reload when modified
     * @see {@link https://bud.js.org/docs/bud.watch/}
     */
    .watch(['resources/views', 'app'])

    /**
     * Proxy origin (`WP_HOME`)
     * @see {@link https://bud.js.org/docs/bud.proxy/}
     */
    .proxy('http://192.168.2.146/~rahul.prnami/sage/')

    /**
     * Development origin
     * @see {@link https://bud.js.org/docs/bud.serve/}
     */
    .serve('http://192.168.2.146/~rahul.prnami/sage/')

    /**
     * URI of the `public` directory
     * @see {@link https://bud.js.org/docs/bud.setPublicPath/}
     */
    .setPublicPath('/~rahul.prnami/sage/wp-content/themes/sage_starter/public/')

    /**
     * Generate WordPress `theme.json`
     *
     * @note This overwrites `theme.json` on every build.
     *
     * @see {@link https://bud.js.org/extensions/sage/theme.json/}
     * @see {@link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/}
     */
    .wpjson.settings({
      color: {
        custom: false,
        customDuotone: false,
        customGradient: false,
        defaultDuotone: false,
        defaultGradients: false,
        defaultPalette: false,
        duotone: [],
      },
      custom: {
        spacing: {},
        typography: {
          'font-size': {},
          'line-height': {},
        },
      },
      spacing: {
        padding: true,
        units: ['px', '%', 'em', 'rem', 'vw', 'vh'],
      },
      typography: {
        customFontSize: false,
      },
    })
    .enable();
};
