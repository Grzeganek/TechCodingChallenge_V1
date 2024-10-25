import { defineConfig } from "vite";
import react from "@vitejs/plugin-react";

export default defineConfig({
  plugins: [react()],
  build: {
    outDir: "build", // Gebündelte Dateien in den "build"-Ordner
    emptyOutDir: true,
    rollupOptions: {
      input: "./src/main.tsx",
      output: {
        entryFileNames: "index.js",
        format: "iife", // IIFE-Format für WordPress-Kompatibilität
        globals: {
          react: "React",
          "react-dom": "ReactDOM",
        },
      },
    },
  },
});
