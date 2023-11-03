import fs from 'fs';
import { resolve } from 'path';
import { defineConfig } from 'vite';
import { liveReload } from 'vite-plugin-live-reload';
import { viteStaticCopy } from 'vite-plugin-static-copy';
import sassGlobImports from 'vite-plugin-sass-glob-import';
//import svgSpritePlugin from 'vite-plugin-svg-sprite-component';

const root = resolve(__dirname, '.');
const outDir = resolve(__dirname, 'dist');

// Get all files and directories in the src directory
const srcDirectoryContents = fs.readdirSync(root);

const excludeItemContents = ['assets', 'admin', 'vendor', 'node_modules', '_dist'];
// Extract files and directories other than assets and admin folder
const nonAssetsContents = srcDirectoryContents.filter((item) => !excludeItemContents.includes(item));

export default defineConfig({
  root,
  plugins: [
    liveReload('./**/*.php'),
    viteStaticCopy({
      // Copy files and directories other than excludeItemContents
      targets: nonAssetsContents.map((item) => ({
        src: `./${item}`,
        dest: './',
      })),
    }),
    sassGlobImports(),
    //svgSpritePlugin(),
  ],
  build: {
    assetsInlineLimit: 0,
    outDir,
    publicDir: 'static',
    emptyOutDir: true,
    rollupOptions: {
      input: {
        main: resolve(__dirname + `/assets/js/main.js`),
        frontPage: resolve(__dirname + `/assets/js/pages/front-page.js`),
      },
      output: {
        entryFileNames: `assets/js/[name].js`,
        chunkFileNames: `assets/js/libs/[name].js`,
        assetFileNames: ({ name }) => {

          if (/\.js$/.test(name ?? '')) {
            return 'assets/js/[name].[ext]';
          }

          if (/\.css$/.test(name ?? '')) {
            return 'assets/css/[name].[ext]';
          }

          if (/\.(woff|woff2)$/.test(name ?? '')) {
            return 'assets/fonts/[name].[ext]';
          }

          return 'assets/[name].[ext]';
        },
      },
    },
  },
  css: {
    preprocessorOptions: {
      scss: {
        additionalData: `$base-dir: ${'development' === process.env.NODE_ENV ? "'http://localhost:3000/'" : "'/'"};`,
      },
    },
  },
  resolve: {
    alias: {
      '@assets': resolve(__dirname + `/assets`),
    },
  },
  server: {
    cors: true,
    strictPort: true,
    port: 3000,
    https: false,
    hmr: {
      host: 'localhost',
    },
  },
});
