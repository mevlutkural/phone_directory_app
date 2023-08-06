import { createRouter, createWebHashHistory } from "vue-router";
import { useAuthenticationStore } from "@/stores/authentication-store";

const router = createRouter({
  history: createWebHashHistory(),
  routes: [
    {
      name: "login",
      path: "/login",
      component: () => import("../views/LoginPage.vue"),
    },
    {
        name: "dashboard",
        path: "/",
        component: () => import("../views/DashboardPage.vue")
    },
    /* {
      path: "/:pathMatch(.*)*",
      component: () => import("../views/errors/PageError.vue"),
    }, */
  ],
});

router.beforeEach((to, _, next) => {
  const store = useAuthenticationStore();

  if (to.path !== "/login" && !store._isAuthenticated) {
    next({ name: "login" });
  } else if (to.path === "/login" && store._isAuthenticated) {
    next({ name: "dashboard" });
  } else {
    next();
  }
});

export default router;