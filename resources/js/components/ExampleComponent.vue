<template>
<div class="dropdown dropdown-arow-none d-contents text-center mx-2 pt-1">
    <!-- icon -->
    <a href="#" class="w-100 dropdown-toggle text-muted position-relative" data-toggle="dropdown">
        <!-- Notification -->
        <i class="far fa-bell fa-2x"></i>
        <span class="badge badge-primary position-absolute notification-badge">3</span>
    </a>
    <!-- Dropdown menu -->
    <div class="dropdown-menu dropdown-menu-right p-0 dropdown-menu-max-height">
        <!-- Menu item -->
        <a href="#" class="dropdown-item text-secondary-light p-0">
            <div class="d-flex flex-row border-bottom">
                <div class="notification-icon bg-secondary-c pt-3 px-3"><i class="far fa-envelope text-primary fa-lg"></i></div>
                <div class="flex-grow-1 px-3 py-3">
                    <p class="mb-0">New message <span class="badge badge-pill badge-primary">New</span></p>
                    <small>James : Hey! Are you busy?</small>
                </div>
            </div>
        </a>
        <!-- Menu item -->
        <a href="#" class="dropdown-item text-secondary-light p-0">
            <div class="d-flex flex-row border-bottom">
                <div class="notification-icon bg-secondary-c pt-3 px-3"><i class="fas fa-clipboard-list text-success fa-lg"></i></div>
                <div class="flex-grow-1 px-3 py-3">
                    <p class="m-0">New order received <span class="badge badge-pill badge-success">New</span></p>
                    <small>3 iPhones x</small>
                </div>
            </div>
        </a>
        <!-- Menu item -->
        <a href="#" class="dropdown-item text-secondary-light p-0 pr-2">
            <div class="d-flex flex-row border-bottom">
                <div class="notification-icon bg-secondary-c pt-3 px-3"><i class="fas fa-box-open text-warning fa-lg"></i></div>
                <div class="flex-grow-1 px-3 py-3">
                    <p class="m-0">Product out of stock <span class="badge badge-pill badge-warning small">1</span></p>
                    <small>Headphone E63</small>
                </div>
            </div>
        </a>
    </div>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');
            Echo.channel('home')
              .listen('NewNotification', (e) => {
                console.log(e.message);
              });
        }
    }
</script>
