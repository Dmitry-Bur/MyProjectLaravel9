import {createRouter, createWebHistory} from 'vue-router'

const router = createRouter({

    history: createWebHistory(),
    routes: [
        {
            path: '/admins',
            component: () => import('./components/admin/Dashboard'),
            name: 'admin.home'
        },
        {
            path: '/admins/dashboard',
            component: () => import('./components/admin/Dashboard'),
            name: 'admin.dashboard'
        },

        {
            path: '/admins/categories',
            component: () => import('./components/admin/Categories/Categories'),
            name: 'admin.categories'
        },
        {
            path: '/admins/subcategories',
            component: () => import('./components/admin/Categories/SubCategories'),
            name: 'admin.subcategories'
        },
        {
            path: '/admins/bboard',
            component: () => import('./components/admin/BBoard'),
            name: 'admin.bboard'
        },
        {
            path: '/admins/users',
            component: () => import('./components/admin/Users'),
            name: 'admin.users'
        },


    ]

})

export default router
