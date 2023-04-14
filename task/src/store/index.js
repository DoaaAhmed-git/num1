import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({

state:{

token: localStorage.getItem('q-to'),

user: JSON.parse(localStorage.getItem('q-us'))

},

mutations:{



},
actions:{


}



})