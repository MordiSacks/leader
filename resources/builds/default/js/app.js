import '../css/app.css';
import {createApp, h, reactive} from 'vue';
import {resolvePageComponent} from 'laravel-vite-plugin/inertia-helpers';
import {createInertiaApp, router} from '@inertiajs/vue3';
import {ZiggyVue} from '../../../../vendor/tightenco/ziggy/src/js/vue';

createInertiaApp({
    title: (title) => `${title} | Triple Leader`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    async setup({el, App, props, plugin}) {
        let Ziggy = await reactive({
            async reload() {
                let r = await fetch(document.head.querySelector('meta[name="routes"]').content)
                    .then(r => r.json());
                Object.keys(r).forEach(k => this[k] = r[k]);
                return this;
            },
        }).reload();

        const app = createApp({
            render: () => h(App, props),
            data() {
                return {
                    Ziggy: Ziggy,
                };
            },
        });

        app.use(plugin).use(ZiggyVue, Ziggy);

        app.mount(el);
    },
});
