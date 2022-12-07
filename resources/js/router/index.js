import {createRouter, createWebHistory} from "vue-router";
import HomeView from "../../views/HomeView.vue";
import ProgrammeView from "../../views/ProgrammeView.vue";
import ContactView from "../../views/ContactView.vue";
import QuiSommesNousView from "../../views/QuiSommesNousView.vue";
import OffresView from "../../views/OffresView.vue";

const routes = [
    {
        path: "/",
        name: "home",
        component: HomeView,
    },
    {
        path: "/programme",
        name: "programme",
        component: ProgrammeView
    },
    {
        path: "/contact",
        name: "contact",
        component: ContactView
    },
    {
        path: "/qui",
        name: "qui",
        component: QuiSommesNousView
    },
    {
        path: "/offres",
        name: "offres",
        component: OffresView
    },
]
const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router