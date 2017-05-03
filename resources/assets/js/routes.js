/**
 * Created by Sigma on 3/05/2017.
 */
import VueRouter from 'vue-router';

let routes=[
    {
        path:'/admin',
        component: require('./components/Example')
    }
];

export default new VueRouter({
    mode: 'history',
    routes
});