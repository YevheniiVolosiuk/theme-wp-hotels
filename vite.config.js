import fs from 'fs';
import { resolve,basename} from 'path';
import { defineConfig } from 'vite';
import { liveReload } from 'vite-plugin-live-reload';
import { viteStaticCopy } from 'vite-plugin-static-copy';
import sassGlobImports from 'vite-plugin-sass-glob-import';
//import svgSpritePlugin from 'vite-plugin-svg-sprite-component';

// Get the main root folder name
const rootFolderName = basename(__dirname);
// Dir to theme static folder files
const staticFolderBaseDir = `/wp-content/themes/${rootFolderName}/static`;


const root = resolve(__dirname, '.');
const outDir = resolve(__dirname, 'dist');


// Get all files and directories in the src directory
const srcDirectoryContents = fs.readdirSync(root);

// Exclusions files and folder in root dir
const exclusionItems = ['node_modules', 'dist', 'vendor', 'vite.config.js', 'assets', '.mjs'];

// Allowed files and folders to copy into dist folder
const filteredContents = filterProjectContents(srcDirectoryContents, exclusionItems);

function filterProjectContents(contentsDir, exclusions = []) {
  return contentsDir.reduce((filteredItems, item) => {
    // Exclude all folders and files that start with a dot
    if (item.startsWith('.')) {
      return filteredItems;
    }

    let shouldExclude = false;

    // Check if the item matches any exclusion criteria
    for (const exclusion of exclusions) {
      if (item.includes(exclusion) || item.endsWith(exclusion) || item.startsWith(exclusion)) {
        shouldExclude = true;
        break;
      }
    }

    // Include the item only if it does not match any exclusion criteria
    if (!shouldExclude) {
      filteredItems.push(item);
    }

    return filteredItems;
  }, []);
}


export default defineConfig({
  root,
  plugins: [
    liveReload('./**/*.php'),
    viteStaticCopy({
      // Copy files and directories other than excludeItemContents
      targets: filteredContents.map((item) => ({
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
            return 'static/fonts/[name].[ext]';
          }

          return 'assets/[name].[ext]';
        },
      },
    },
  },
  css: {
    preprocessorOptions: {
      scss: {
        additionalData: `$base-dir: ${'development' === process.env.NODE_ENV ? "'http://localhost:3000/'" : "'/'"};
        $static-base-dir: ${'development' === process.env.NODE_ENV ? "'http://localhost:3000/'" : `${staticFolderBaseDir}`};
        `,
      },
    },
  },
  // resolve: {
  //   alias: {
  //     '@assets': resolve(__dirname + `/assets`),
  //   },
  // },
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
