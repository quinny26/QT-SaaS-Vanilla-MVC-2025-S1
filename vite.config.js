/**
 * Vite Configuration File
 *
 * Filename:        vite.config.js
 * Location:        /
 * Project:         XXX-SaaS-Vanilla-MVC-2025-S1
 * Date Created:    2025-03-13
 *
 * Author:          Quinny Trang <20027236@tafe.wa.edu.au>
 */

import {defineConfig} from 'vite'
import tailwindcss from '@tailwindcss/vite'
import usePHP from 'vite-plugin-php';
import liveReload from 'vite-plugin-live-reload'

export default defineConfig({
    plugins: [
        tailwindcss(),
        usePHP({
            entry: [
                'index.{html,php}',
                'public/index.{html,php}',
                'App/views/**/*.{html,php}'
            ],
        }),
        liveReload([
                'index.{html,php}',
                'public/index.{html,php}',
                'App/views/**/*.{html,php}'
            ],
            {
                alwaysReload: true
            }
        ),
    ],
})