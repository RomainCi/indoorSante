import {createRouter, createWebHistory} from "vue-router";
import HomeView from "../../views/HomeView.vue";
import ProgrammeView from "../../views/ProgrammeView.vue";
import ContactView from "../../views/ContactView.vue";

const routes = [
    {
        path: "/",
        name: "home",
        component: HomeView,
    },
    {
        path:"/programme",
        name:"programme",
        component: ProgrammeView
    },
    {
        path:"/contact",
        name:"contact",
        component: ContactView
    }
]
const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes,
});

export default router