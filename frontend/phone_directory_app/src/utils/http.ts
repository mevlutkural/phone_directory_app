import axios from "axios";
/* import { useAuthenticationStore } from "@/stores/authentication-store";
import Utils from "@/composables/Utils"; */

export const  sourceURL = "http://127.0.0.1:8000/";

export const http = axios.create({
  baseURL: "http://127.0.0.1:8000/api",
});

/* http.interceptors.response.use(null, function (error) {
  if (
    error.response.status === 401 &&
    error.response?.data?.message == "Unauthenticated."
  ) {
    localStorage.setItem("user", "");
    localStorage.setItem("token", "");

    location.reload();
  }

  if (
    error.response.status == 429 &&
    error.response.statusText == "Too Many Requests"
    ) {

      const { notify } = Utils();

      notify("Çok fazla istek attınız. Lütfen 1 dakika bekleyip tekrar deneyiniz.", "error", 3000);

    console.log('asdas', error);

  }

  return Promise.reject(error);
}); */