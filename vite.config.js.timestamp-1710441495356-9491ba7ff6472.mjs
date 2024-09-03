// vite.config.js
import { defineConfig } from "file:///Users/33sweb/Desktop/33sweb/source-codes/molksiba/node_modules/.pnpm/vite@5.1.6/node_modules/vite/dist/node/index.js";
import laravel from "file:///Users/33sweb/Desktop/33sweb/source-codes/molksiba/node_modules/.pnpm/laravel-vite-plugin@1.0.2_vite@5.1.6/node_modules/laravel-vite-plugin/dist/index.js";
import vue from "file:///Users/33sweb/Desktop/33sweb/source-codes/molksiba/node_modules/.pnpm/@vitejs+plugin-vue@5.0.4_vite@5.1.6_vue@3.4.21/node_modules/@vitejs/plugin-vue/dist/index.mjs";
var vite_config_default = defineConfig({
  // server: {
  //     hmr: {
  //         host: hostName,
  //     },
  // },
  plugins: [
    laravel({
      input: [
        "resources/css/app.css",
        "resources/js/app.js"
        // 'resources/js/backoffice/product/stock-product-managment.js',
        // 'resources/js/backoffice/product/create-file-upload.js',
        // 'resources/js/backoffice/product/update-file-upload.js',
        // 'resources/js/backoffice-agent/leads/lead.js',
        // 'resources/js/frontoffice/lead/push-lead.js',
        // "resources/js/backoffice/dashboard/dashboard.js",
        // "resources/js/backoffice/statistics/fees/index.js",
      ],
      refresh: [
        "routes/**",
        "resources/views/**",
        "lang/**",
        "app/**",
        "resources/js/**",
        "resources/css/**"
      ]
    }),
    vue({
      template: {
        transformAssetUrls: {
          base: null,
          includeAbsolute: false
        }
      }
    })
  ],
  resolve: {
    alias: {
      vue: "vue/dist/vue.esm-bundler.js"
    }
  },
  build: {
    manifest: true
  }
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCIvVXNlcnMvMzNzd2ViL0Rlc2t0b3AvMzNzd2ViL3NvdXJjZS1jb2Rlcy9tb2xrc2liYVwiO2NvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9maWxlbmFtZSA9IFwiL1VzZXJzLzMzc3dlYi9EZXNrdG9wLzMzc3dlYi9zb3VyY2UtY29kZXMvbW9sa3NpYmEvdml0ZS5jb25maWcuanNcIjtjb25zdCBfX3ZpdGVfaW5qZWN0ZWRfb3JpZ2luYWxfaW1wb3J0X21ldGFfdXJsID0gXCJmaWxlOi8vL1VzZXJzLzMzc3dlYi9EZXNrdG9wLzMzc3dlYi9zb3VyY2UtY29kZXMvbW9sa3NpYmEvdml0ZS5jb25maWcuanNcIjtcbmltcG9ydCB7IGRlZmluZUNvbmZpZyB9IGZyb20gJ3ZpdGUnO1xuaW1wb3J0IGxhcmF2ZWwgZnJvbSAnbGFyYXZlbC12aXRlLXBsdWdpbic7XG5pbXBvcnQgdnVlIGZyb20gJ0B2aXRlanMvcGx1Z2luLXZ1ZSc7XG5cblxuLy8gY29uc3QgaG9zdE5hbWUgPSAnbm9yZGNvZC50ZXN0JztcblxuZXhwb3J0IGRlZmF1bHQgZGVmaW5lQ29uZmlnKHtcbiAgICAvLyBzZXJ2ZXI6IHtcbiAgICAvLyAgICAgaG1yOiB7XG4gICAgLy8gICAgICAgICBob3N0OiBob3N0TmFtZSxcbiAgICAvLyAgICAgfSxcbiAgICAvLyB9LFxuICAgIHBsdWdpbnM6IFtcbiAgICAgICAgbGFyYXZlbCh7XG4gICAgICAgICAgICBpbnB1dDogW1xuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvY3NzL2FwcC5jc3MnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvanMvYXBwLmpzJyxcbiAgICAgICAgICAgICAgICAvLyAncmVzb3VyY2VzL2pzL2JhY2tvZmZpY2UvcHJvZHVjdC9zdG9jay1wcm9kdWN0LW1hbmFnbWVudC5qcycsXG4gICAgICAgICAgICAgICAgLy8gJ3Jlc291cmNlcy9qcy9iYWNrb2ZmaWNlL3Byb2R1Y3QvY3JlYXRlLWZpbGUtdXBsb2FkLmpzJyxcbiAgICAgICAgICAgICAgICAvLyAncmVzb3VyY2VzL2pzL2JhY2tvZmZpY2UvcHJvZHVjdC91cGRhdGUtZmlsZS11cGxvYWQuanMnLFxuICAgICAgICAgICAgICAgIC8vICdyZXNvdXJjZXMvanMvYmFja29mZmljZS1hZ2VudC9sZWFkcy9sZWFkLmpzJyxcbiAgICAgICAgICAgICAgICAvLyAncmVzb3VyY2VzL2pzL2Zyb250b2ZmaWNlL2xlYWQvcHVzaC1sZWFkLmpzJyxcbiAgICAgICAgICAgICAgICAvLyBcInJlc291cmNlcy9qcy9iYWNrb2ZmaWNlL2Rhc2hib2FyZC9kYXNoYm9hcmQuanNcIixcbiAgICAgICAgICAgICAgICAvLyBcInJlc291cmNlcy9qcy9iYWNrb2ZmaWNlL3N0YXRpc3RpY3MvZmVlcy9pbmRleC5qc1wiLFxuICAgICAgICAgICAgXSxcbiAgICAgICAgICAgIHJlZnJlc2g6IFtcbiAgICAgICAgICAgICAgICAncm91dGVzLyoqJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL3ZpZXdzLyoqJyxcbiAgICAgICAgICAgICAgICAnbGFuZy8qKicsXG4gICAgICAgICAgICAgICAgJ2FwcC8qKicsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9qcy8qKicsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9jc3MvKionLFxuICAgICAgICAgICAgXSxcbiAgICAgICAgfSksXG5cbiAgICAgICAgdnVlKHtcbiAgICAgICAgICAgIHRlbXBsYXRlOiB7XG4gICAgICAgICAgICAgICAgdHJhbnNmb3JtQXNzZXRVcmxzOiB7XG4gICAgICAgICAgICAgICAgICAgIGJhc2U6IG51bGwsXG4gICAgICAgICAgICAgICAgICAgIGluY2x1ZGVBYnNvbHV0ZTogZmFsc2UsXG4gICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIH0sXG4gICAgICAgIH0pLFxuICAgIF0sXG4gICAgcmVzb2x2ZToge1xuICAgICAgICBhbGlhczoge1xuICAgICAgICAgICAgdnVlOiAndnVlL2Rpc3QvdnVlLmVzbS1idW5kbGVyLmpzJyxcbiAgICAgICAgfSxcbiAgICB9LFxuICAgIGJ1aWxkOiB7XG4gICAgICAgIG1hbmlmZXN0OiB0cnVlLFxuICAgICAgfSxcbn0pO1xuXG4iXSwKICAibWFwcGluZ3MiOiAiO0FBQ0EsU0FBUyxvQkFBb0I7QUFDN0IsT0FBTyxhQUFhO0FBQ3BCLE9BQU8sU0FBUztBQUtoQixJQUFPLHNCQUFRLGFBQWE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUEsRUFNeEIsU0FBUztBQUFBLElBQ0wsUUFBUTtBQUFBLE1BQ0osT0FBTztBQUFBLFFBQ0g7QUFBQSxRQUNBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQSxNQVFKO0FBQUEsTUFDQSxTQUFTO0FBQUEsUUFDTDtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsTUFDSjtBQUFBLElBQ0osQ0FBQztBQUFBLElBRUQsSUFBSTtBQUFBLE1BQ0EsVUFBVTtBQUFBLFFBQ04sb0JBQW9CO0FBQUEsVUFDaEIsTUFBTTtBQUFBLFVBQ04saUJBQWlCO0FBQUEsUUFDckI7QUFBQSxNQUNKO0FBQUEsSUFDSixDQUFDO0FBQUEsRUFDTDtBQUFBLEVBQ0EsU0FBUztBQUFBLElBQ0wsT0FBTztBQUFBLE1BQ0gsS0FBSztBQUFBLElBQ1Q7QUFBQSxFQUNKO0FBQUEsRUFDQSxPQUFPO0FBQUEsSUFDSCxVQUFVO0FBQUEsRUFDWjtBQUNOLENBQUM7IiwKICAibmFtZXMiOiBbXQp9Cg==
