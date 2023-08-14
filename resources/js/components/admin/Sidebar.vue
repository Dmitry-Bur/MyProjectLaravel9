<template>
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <router-link class="sidebar-brand d-flex align-items-center justify-content-center" :to="{name: 'admin.dashboard'}">

            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>

        </router-link>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->

        <li class="nav-link nav-item active">
            <router-link class="nav-link" :to="{name: 'admin.dashboard'}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </router-link>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Работа с объявдениями
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-notes-medical"></i>
                <span>Категории</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Работа с категориями:</h6>
                    <router-link class="collapse-item" :to="{name: 'admin.categories'}">Категории</router-link>
                    <router-link class="collapse-item" :to="{name: 'admin.subcategories'}">Подкатегории</router-link>
                </div>
            </div>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider">


        <!-- Nav Item - Pages Collapse Menu -->


        <!-- Nav Item - Charts -->

        <!-- Nav Item - Tables -->
        <li class="nav-link nav-item active">
            <router-link class="nav-link" :to="{name: 'admin.users'}">
                <i class="fas fa-fw fa-user-alt"></i>
                <span>Пользователи</span>
            </router-link>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-link nav-item active">
            <router-link class="nav-link" :to="{name: 'admin.bboard'}">
                <i class="fas fa-fw fa-table"></i>
                <span>Объявления</span>
            </router-link>
        </li>

        <!-- Divider -->


    </ul>
</template>

<script>
export default {
    name: "Sidebar"
}
</script>

<style scoped>

</style>
