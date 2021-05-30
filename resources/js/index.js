
import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        user: null,
        auth: false,
    },
    mutations: {
        SET_USER(state, value) {
            state.user = user;
            state.auth = Boolean(user);
        }
    },
    actions: {
        getUser({ commit }) {
            axios.get("api/user").then(res => {
                commit("SET_USER", res.data);
            }).catch(() => {
                commit("SET_USER", null);
            });
        }
    },
    modules: {}
});