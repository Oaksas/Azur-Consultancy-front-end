import Vue from "vue";
import axios from "axios";
// import VueAxios from "vue-axios";
import { API_URL } from "./config";

const ApiService = {
  init() {
    // Vue.use(VueAxios, axios);
    axios.defaults.baseURL = API_URL;
  },
  query(resource, params) {
    return axios.get(resource, params).catch(error => {
      throw new Error(`[RWV] ApiService ${error}`);
    });
  },
  get(resource, slug = "") {
    return axios.get(`${resource}/${slug}`).catch(error => {
      throw new Error(`[RWV] ApiService ${error}`);
    });
  },
  post(resource, params) {
    return axios.post(`${resource}`, params);
  },
  update(resource, slug, params) {
    return axios.put(`${resource}/${slug}`, params);
  },
  put(resource, params) {
    return axios.put(`${resource}`, params);
  },
  delete(resource) {
    return axios.delete(resource).catch(error => {
      throw new Error(`[RWV] ApiService ${error}`);
    });
  }
};
export default ApiService;
export const universityService = {
  post(searchData) {
    return ApiService.post("universities", searchData);
  }
};
export const inspirationService = {
  get() {
    return ApiService.get("inspiration");
  }
};
export const SpecialService = {
  get() {
    return ApiService.get("region");
  }
};
export const HrService = {
  get() {
    return ApiService.get("reviews");
  }
};
export const OneSpecialService = {
  get() {
    return ApiService.get("aspecial");
  }
};
export const NewsService = {
  get() {
    return ApiService.get("news");
  }
};
export const PlaceService = {
  get(slug) {
    return ApiService.get("place", slug);
  },
  
};
export const AgentServices = {
  get(slug){
    return ApiService.get("agents", slug)
  }
}
export const ReviewService = {
  get(slug) {
    if (typeof slug !== "string") {
      throw new Error(
        "[RWV] ReviewServices.get() Reviews slug required to fetch comments"
      );
    }
    return ApiService.get("tour", `${slug}/comments`);
  },
  post(slug, payload) {
    return ApiService.post(`tour/${slug}/comments`, {
      comment: { body: payload }
    });
  },
  destroy(slug, commentId) {
    return ApiService.delete(`tour/${slug}/comments/${commentId}`);
  }
};
