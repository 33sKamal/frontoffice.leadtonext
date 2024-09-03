import "./bootstrap";

import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { usePage } from "@inertiajs/vue3";
import { autoAnimatePlugin } from "@formkit/auto-animate/vue";
import { ZiggyVue } from "ziggy-js";

import { Link, Head } from "@inertiajs/vue3";

import Badge from "./BackOfficeCallCenter/Layouts/Badge.vue";
import TableAction from "./BackOfficeCallCenter/Layouts/TableAction.vue";
import Pagination from "./BackOfficeCallCenter/Layouts/Pagination.vue";
import IndexFilter from "./BackOfficeCallCenter/Layouts/IndexFilter.vue";
import Alert from "./BackOfficeCallCenter/Layouts/Alert.vue";

// import MessageSideBar from './BackOfficeCallCenter/Layouts/MessageSideBar.vue'

import ErrorLabel from "./BackOfficeCallCenter/Layouts/ErrorLabel.vue";
import Layout from "./BackOfficeCallCenter/Layouts/Layout.vue";
import Footer from "./BackOfficeCallCenter/Layouts/Footer.vue";
import Header from "./BackOfficeCallCenter/Layouts/Header.vue";
import Nav from "./BackOfficeCallCenter/Layouts/Nav.vue";
import Toolbar from "./BackOfficeCallCenter/Layouts/Toolbar.vue";
import LazySelect from "./SharedBackOffice/Layouts/LazySelect.vue";

createInertiaApp({
    title: (title) => `${title}`,
    resolve: (name) =>
        resolvePageComponent(`./${name}.vue`, import.meta.glob("./**/*.vue")),
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(autoAnimatePlugin)
            .use(ZiggyVue)
            .component("Link", Link)
            .component("Head", Head)
            .component("Badge", Badge)
            .component("LazySelect", LazySelect)
            .component("TableAction", TableAction)
            .component("Pagination", Pagination)
            .component("IndexFilter", IndexFilter)
            .component("Alert", Alert)
            .component("ErrorLabel", ErrorLabel)
            .component("Footer", Footer)
            .component("Layout", Layout)
            .component("Header", Header)
            .component("Nav", Nav)
            .component("Toolbar", Toolbar);

        app.config.globalProperties.$toFixed = function (number, decimals=2) {
            if (isNaN(number)) return number;
            return Number(number).toFixed(decimals);
        };

        app.mixin({
            methods: {
                can: function (permissions) {
                    var allPermissions = window.permissions;
                    var hasPermission = false;
                    permissions.forEach(function (item) {
                        if (allPermissions[item]) hasPermission = true;
                    });
                    return hasPermission;
                },
                lang: function () {
                    return usePage().props.language.original;
                },
            },
        });

        app.mount(el);

    },
    progress: {
        color: "red",
        delay: 250,
        includeCSS: true,
        showSpinner: true,
    },
});
