require('./bootstrap')

import Vue from 'vue'
import Vuetify from 'vuetify'

Vue.use(Vuetify);

const app = new Vue({
    el: '#app',
    vuetify: new Vuetify({
    	theme: {
    		themes: {
    			light: {
    				primary: '#6200ee',
                    secondary: '#bb86fc'
    			}
    		}
    	},
        icons: {
            iconfont: 'md'
        }
    })
});