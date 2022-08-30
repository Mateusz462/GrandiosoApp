<style type="text/css">
    #wrapper {
        overflow-x: hidden;
    }

    #sidebar-wrapper {
        min-height: 100vh;
        margin-left: -15rem;
        width: 25rem;
        /* transition: margin 0.25s ease-out; */
    }

    #sidebar-wrapper .sidebar-heading {
        padding: 0.875rem 1.25rem;
        font-size: 1.2rem;
    }

    #sidebar-wrapper .list-group {

    }

    #page-content-wrapper {
        min-width: 100vw;
    }

    body.sb-sidenav-toggled #wrapper #sidebar-wrapper {
        margin-left: 0;
    }

    @media (min-width: 768px) {
        #sidebar-wrapper {
            margin-left: 0;
            /* width: 100%; */
        }

        #page-content-wrapper {
            min-width: 0;
            width: 100%;
        }

        body.sb-sidenav-toggled #wrapper #sidebar-wrapper {
            /* margin-left: -15rem; */
            width: 100%;
        }
    }
</style>
