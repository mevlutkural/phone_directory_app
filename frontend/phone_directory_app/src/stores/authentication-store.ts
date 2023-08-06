import { defineStore } from "pinia";
import { http } from "../utils/http";
import router from "../router/index.ts";

interface loginData {
  email: string;
  password: string;
}

export const useAuthenticationStore = defineStore("authenticationStore", {
  state: () => {
    return {
      user: null,
      token: null,
    };
  },
  // could also be defined as
  // state: () => ({ count: 0 })
  getters: {
    _isAuthenticated: (state) => state.token !== null
  },
  actions: {
    async login(data: loginData) {
      try {
        const res = await http.post("/login", data);

        if (res.status === 200) {
          this.user = res.data.user;
          this.token = res.data.token;

          router.push({ name : "dashboard"})
        }
      } catch (err) {
        console.log('hata oldu : ', err);
      }
    },
  },
});
